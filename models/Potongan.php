<?php

require_once "KoneksiDB.php";

class Potongan extends KoneksiDB
{
    function getAllTotal()
    {
        $query = "SELECT nip, MONTH(tanggal) bulan, YEAR(tanggal) tahun,SUM(nominal) total_potongan
                    FROM detail_potongan GROUP BY nip, bulan, tahun";
        $result = mysqli_query($this->koneksi, $query);

        if($result->num_rows > 0)
        {
            while($arr = mysqli_fetch_assoc($result))
            {
                $data[] = $arr;
            }

            return $data;
        }
    }

    function insertTerlambat($nip)
    {
        $tanggal = date('Y-m-d');

        $queryGaji = "SELECT nip, id, gaji_pokok, pajak FROM pegawai p
                        JOIN jabatan j ON p.id_jabatan = j.id WHERE nip = $nip";
        $resultGaji = mysqli_query($this->koneksi, $queryGaji);
        $dataGaji = mysqli_fetch_assoc($resultGaji);

        $queryAbsen = "SELECT * FROM absensi WHERE nip = $nip AND tanggal = '$tanggal'";
        $resultAbsen = mysqli_query($this->koneksi, $queryAbsen);
        $dataAbsen = mysqli_fetch_assoc($resultAbsen);

        $jamMasuk = '08:00:00';

        if ($dataAbsen['jam_datang'] > $jamMasuk)
        {
            $selisih = strtotime($dataAbsen['jam_datang']) - strtotime($jamMasuk);
            $jamSelisih = $selisih / 3600;

            $nominal = intval($jamSelisih * 0.001 * $dataGaji['gaji_pokok']);
            
            $selisihFormat = gmdate('H:i', $selisih);
            $keterangan = "Terlambat Absen " . $selisihFormat;

            $query = "INSERT INTO detail_potongan VALUES (1, $nip, '$tanggal', $nominal, '$keterangan')";
            $result = mysqli_query($this->koneksi, $query);
        }
    }

    function insertAlpha($nip)
    {
        $tanggal = date('Y-m-d');

        $queryGaji = "SELECT nip, id, gaji_pokok, pajak FROM pegawai p
                        JOIN jabatan j ON p.id_jabatan = j.id WHERE nip = $nip";
        $resultGaji = mysqli_query($this->koneksi, $queryGaji);
        $dataGaji = mysqli_fetch_assoc($resultGaji);

        $queryAbsen = "SELECT COUNT(*) AS hadir FROM absensi WHERE nip = $nip AND tanggal = '$tanggal'";
        $resultAbsen = mysqli_query($this->koneksi, $queryAbsen);
        $dataAbsen = mysqli_fetch_assoc($resultAbsen);

        $queryAlpha = "SELECT COUNT(*) AS alpha FROM detail_potongan WHERE nip = $nip AND tanggal = '$tanggal'";
        $resultAlpha = mysqli_query($this->koneksi, $queryAlpha);
        $dataAlpha = mysqli_fetch_assoc($resultAlpha);

        if($dataAbsen['hadir'] == 0 && $dataAlpha['alpha'] == 0)
        {
            $nominal = 0.005 * $dataGaji['gaji_pokok'];

            $query = "INSERT INTO detail_potongan VALUES (2, $nip, '$tanggal', $nominal, 'Tidak Hadir')";
            $result = mysqli_query($this->koneksi, $query);
        }
    }
}
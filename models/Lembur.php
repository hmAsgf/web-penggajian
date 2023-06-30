<?php

require_once "KoneksiDB.php";

class Lembur extends KoneksiDB
{
    function getAllTotal()
    {
        $query = "SELECT nip, MONTH(tanggal) bulan, YEAR(tanggal) tahun,SUM(nominal) total_lembur
                    FROM lembur GROUP BY nip, bulan, tahun";
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

    function insert($nip)
    {
        $tanggal = date('Y-m-d');

        $queryGaji = "SELECT nip, id, gaji_pokok, pajak FROM pegawai p
                        JOIN jabatan j ON p.id_jabatan = j.id WHERE nip = $nip";
        $resultGaji = mysqli_query($this->koneksi, $queryGaji);
        $dataGaji = mysqli_fetch_assoc($resultGaji);

        $queryAbsen = "SELECT * FROM absensi WHERE nip = $nip AND tanggal = '$tanggal'";
        $resultAbsen = mysqli_query($this->koneksi, $queryAbsen);
        $dataAbsen = mysqli_fetch_assoc($resultAbsen);

        $checkIn = strtotime($dataAbsen['jam_datang']);
        $checkOut = strtotime($dataAbsen['jam_pulang']);
        $selisih = $checkOut - $checkIn;
        $jamKerja = floor($selisih / 3600);

        if ($jamKerja > 6)
        {
            $jamLembur = $jamKerja - 6;
            $lemburFormat = gmdate('H:i:s', $jamLembur * 3600);
            $nominal = ($dataGaji['gaji_pokok'] * 0.01) * $jamLembur;

            $query = "INSERT INTO lembur VALUES ('', $nip, '$tanggal', '$lemburFormat', $nominal)";
            $result = mysqli_query($this->koneksi, $query);
        }
    }
}
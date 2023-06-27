<?php

require_once "KoneksiDB.php";

class Penggajian extends KoneksiDB
{
    function getByNip($nip)
    {
        $query = "SELECT * FROM penggajian WHERE nip = $nip";
        $result = mysqli_query($this->koneksi, $query);
        
        if($result->num_rows > 0)
        {
            while($arr = mysqli_fetch_array($result))
            {
                $data[] = $arr;
            }

            return $data;
        }
    }

    function getPenggajianAll()
    {
        $query = "SELECT tanggal, SUM(gaji_pokok) AS total_gaji_pokok, SUM(pajak) AS total_pajak, 
                    SUM(potongan) AS total_potongan, SUM(gaji_lembur) AS total_gaji_lembur,
                    SUM(gaji_bersih) AS total_gaji_bersih FROM penggajian GROUP BY tanggal";
        $result = mysqli_query($this->koneksi, $query);
        
        if($result->num_rows > 0)
        {
            while($arr = mysqli_fetch_array($result))
            {
                $data[] = $arr;
            }

            return $data;
        }
    }

    function getAll()
    {
        $query = "SELECT * FROM penggajian JOIN pegawai ON penggajian.nip = pegawai.nip ORDER BY id DESC";
        $result = mysqli_query($this->koneksi, $query);
        
        if($result->num_rows > 0)
        {
            while($arr = mysqli_fetch_array($result))
            {
                $data[] = $arr;
            }

            return $data;
        }
    }

    function getPajakAll()
    {
        $query = "SELECT tanggal, SUM(pajak) AS total_pajak FROM penggajian GROUP BY tanggal";
        $result = mysqli_query($this->koneksi, $query);
        
        if($result->num_rows > 0)
        {
            while($arr = mysqli_fetch_array($result))
            {
                $data[] = $arr;
            }

            return $data;
        }
    }

    function insert($nip, $idAdmin, $tanggal, $gajiPokok, $pajak, $potongan, $gajiLembur, $gajiBersih)
    {
        $query = "INSERT INTO penggajian VALUES
                    ('', $nip, $idAdmin, '$tanggal', $gajiPokok, $pajak, $potongan, $gajiLembur, $gajiBersih)";

        $result = mysqli_query($this->koneksi, $query);

        return $result;
    }

    function getTahun($nip)
    {
        $query = "SELECT YEAR(tanggal) AS tahun FROM penggajian
                    WHERE nip = $nip GROUP BY YEAR(tanggal)";
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

    function getPenggajianByTanggal($nip, $bulan, $tahun)
    {
        $query = "SELECT * FROM penggajian WHERE nip = $nip AND ";

        if($bulan != 0 && $tahun != 0)
        {
            $query .= "MONTH(tanggal) = $bulan AND YEAR(tanggal) = $tahun";
        }
        elseif($bulan != 0)
        {
            $query .= "MONTH(tanggal) = $bulan";
        }
        elseif ($tahun != 0)
        {
            $query .= "YEAR(tanggal) = $tahun";
        }

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
}
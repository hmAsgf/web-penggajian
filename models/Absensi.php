<?php

require_once "KoneksiDB.php";

class Absensi extends KoneksiDB
{
    function getJumlahHadir($nip)
    {
        $query = "SELECT COUNT(*) AS jumlah_hadir FROM absensi WHERE nip = $nip 
                AND MONTH(tanggal) = MONTH(CURRENT_DATE) AND YEAR(tanggal) = YEAR(CURRENT_DATE)";
        $result = mysqli_query($this->koneksi, $query);
        $data = mysqli_fetch_assoc($result);

        return $data;
    }

    function getHadirSekarang($nip)
    {
        $query = "SELECT *, COUNT(*) AS hadir FROM absensi WHERE nip = $nip 
                AND tanggal = CURRENT_DATE";
        $result = mysqli_query($this->koneksi, $query);
        $data = mysqli_fetch_assoc($result);

        return $data;
    }

    function getNowByNip($nip)
    {
        $query = "SELECT * FROM absensi WHERE nip = $nip 
                AND tanggal = CURRENT_DATE";
        $result = mysqli_query($this->koneksi, $query);
        $data = mysqli_fetch_assoc($result);

        return $data;
    }

    function checkIn($nip)
    {
        date_default_timezone_set('Asia/Jakarta');

        $tanggal = date('Y-m-d');
        $jamDatang = date('H:i:s');

        $query = "INSERT INTO absensi(nip, tanggal, jam_datang) VALUES ($nip, '$tanggal', '$jamDatang')";
        $result = mysqli_query($this->koneksi, $query);

        return $result;
    }

    function checkOut($nip)
    {
        date_default_timezone_set('Asia/Jakarta');

        $tanggal = date('Y-m-d');
        $jamPulang = date('H:i:s');

        $query = "UPDATE absensi SET jam_pulang = '$jamPulang' WHERE nip = $nip AND tanggal = '$tanggal'";
        $result = mysqli_query($this->koneksi, $query);

        return $result;
    }
}
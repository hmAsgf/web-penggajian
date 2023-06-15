<?php

require_once "KoneksiDB.php";

class Pegawai extends KoneksiDB
{
    function getByEmail($email)
    {
        $query = "SELECT * FROM pegawai WHERE email = '$email'";
        $result = mysqli_query($this->koneksi, $query);

        $data = mysqli_fetch_array($result);
        return $data;
    }
}
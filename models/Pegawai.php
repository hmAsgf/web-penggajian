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

    function getByNama($nama)
    {
        $query = "SELECT * FROM pegawai WHERE nama = '$nama'";
        $result = mysqli_query($this->koneksi, $query);

        $data = mysqli_fetch_array($result);
        return $data;
    }

    function getAll()
    {
        $query = "SELECT * FROM pegawai";
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
}
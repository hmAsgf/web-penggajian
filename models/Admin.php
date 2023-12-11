<?php

require_once "KoneksiDB.php";

class Admin extends KoneksiDB
{
    function getByUsername($username)
    {
        $query = "SELECT * FROM admin WHERE nama = '$username'";
        $result = mysqli_query($this->koneksi, $query);

        $data = mysqli_fetch_array($result);
        return $data;
    }
}
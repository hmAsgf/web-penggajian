<?php

require_once "KoneksiDB.php";

class Jabatan extends KoneksiDB
{
    function getById($id)
    {
        $query = "SELECT * FROM jabatan WHERE id = $id";
        $result = mysqli_query($this->koneksi, $query);

        $data = mysqli_fetch_array($result);
        return $data;
    }
}
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

    function getJoinPegawai()
    {
        $query = "SELECT nip, id, gaji_pokok, pajak FROM
                    pegawai p JOIN jabatan j ON p.id_jabatan = j.id";
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
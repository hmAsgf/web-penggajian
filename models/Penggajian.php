<?php

require_once "KoneksiDB.php";

class Penggajian extends KoneksiDB
{
    function getAll($nip)
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
}
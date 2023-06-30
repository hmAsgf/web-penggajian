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

    function insert($nip)
    {
        
    }
}
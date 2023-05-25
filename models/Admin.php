<?php

include "Koneksi.php";

class Admin extends Koneksi
{
    function showAll()
    {
        $query = "SELECT * FROM admin";
        $result = mysqli_query($this->koneksi, $query);

        if($result->num_rows >0)
        {
            while($arr = mysqli_fetch_array($result))
            {
                $data[]  = $arr;
            }

            return $data;
        }
    }
}
<?php

$hari_sekarang = date('N'); // Mendapatkan hari dalam format angka (1-7)
$nama_hari_sekarang = date('l'); // Mendapatkan nama hari secara lengkap

echo "Hari (dalam angka): " . $hari_sekarang . "<br>";
echo "Nama Hari: " . $nama_hari_sekarang;
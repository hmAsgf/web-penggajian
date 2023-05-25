<?php

class Koneksi
{
    private $hostname = 'localhost';
    private $database = 'web-penggajian';
    private $username = 'root';
    private $password = '';

    public $koneksi;

    function __construct() {
        $this->koneksi = mysqli_connect($this->hostname, $this->username, $this->password, $this->database);
    }
}
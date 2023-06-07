<?php

require_once "../models/Pegawai.php";

class loginController
{
    private $pegawaiModel;

    function __construct()
    {
        session_status() === PHP_SESSION_ACTIVE ?: session_start();
        $this->pegawaiModel = new Pegawai();
    }

    function login()
    {
        if(isset($_POST['submit']))
        {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $pegawai = $this->pegawaiModel->getByEmail($email);

            if($pegawai && $password === $pegawai['password'])
            {
                // session_start();
                $_SESSION['nipPegawai'] = $pegawai['nip'];
                header('Location: dashboard_karyawan.php');
            }
            else
            {
                echo "<script>alert('Email atau Password Salah!')</script>";
            }
        }
    }

    function cekAuth()
    {
        // session_start();
        if(!isset($_SESSION['nipPegawai']))
        {
            header('Location: login_karyawan.php');
        }
    }

    function logout()
    {
        // session_start();
        session_destroy();
        header('Location: login_karyawan.php');
    }
}
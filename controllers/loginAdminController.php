<?php

require_once "../models/Admin.php";

class loginAdminController
{
    private $adminModel;

    function __construct()
    {
        session_status() === PHP_SESSION_ACTIVE ?: session_start();
        $this->adminModel = new Admin();
    }

    function login()
    {
        if(isset($_POST['submit']))
        {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $admin = $this->adminModel->getByUsername($username);

            if($admin && $password === $admin['password'])
            {
                // session_start();
                $_SESSION['idAdmin'] = $admin['id'];
                header('Location: dashboard_admin.php');
            }
            else
            {
                echo "<script>alert('Username atau Password Salah!')</script>";
            }
        }
    }

    function cekAuth()
    {
        // session_start();
        if(!isset($_SESSION['idAdmin']))
        {
            header('Location: login_admin.php');
        }
    }

    function logout()
    {
        // session_start();
        session_destroy();
        header('Location: login_admin.php');
    }
}
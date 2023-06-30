<?php

require_once "../models/Absensi.php";
require_once "../models/Pegawai.php";
require_once "../models/Lembur.php";

class dashboardKaryawanController
{
    private $absensiModel;
    private $nipPegawai;
    private $pegawaiModel;
    private $lemburModel;

    function __construct()
    {
        session_status() === PHP_SESSION_ACTIVE ?: session_start();
        $this->absensiModel = new Absensi();
        $this->pegawaiModel = new Pegawai();
        $this->lemburModel = new Lembur();
        $this->nipPegawai = $_SESSION['nipPegawai'];
        date_default_timezone_set('Asia/Jakarta');
    }

    function showAbsensi()
    {
        $data = $this->absensiModel->getJumlahHadir($this->nipPegawai);
        $total = date('j');

        $hadir = $data['jumlah_hadir'];
        $alpha = $total - $hadir;

        echo "<td align='center'>$hadir</td>";
        echo "<td align='center'>$alpha</td>";
        echo "<td align='center'>$total</td>";
    }

    function getNama()
    {
        $data = $this->pegawaiModel->getByNip($this->nipPegawai);

        echo $data['nama'];
    }

    function cekAbsen()
    {
        $data = $this->absensiModel->getHadirSekarang($this->nipPegawai);

        return $data['hadir'];
    }

    function showJamDatangNow()
    {
        $data = $this->absensiModel->getNowByNip($this->nipPegawai);

        return $data;
    }

    function cekPulang()
    {
        $data = $this->absensiModel->getHadirSekarang($this->nipPegawai);

        return $data['jam_pulang'];
    }

    function absen()
    {
        // CHECK IN
        if(isset($_POST['checkIn']))
        {
            if($this->cekAbsen() == 0)
            {
                $hasil = $this->absensiModel->checkIn($this->nipPegawai);
    
                if($hasil)
                {
                    echo "<script>alert('Berhasil Melakukan Check In')</script>";
                }
                else
                {
                    echo "<script>alert('Gagal Melakukan Check In')</script>";
                }
            }
        }

        // CHECK OUT
        if(isset($_POST['checkOut']))
        {
            if(!$this->cekPulang())
            {
                $hasil = $this->absensiModel->checkOut($this->nipPegawai);
    
                if($hasil)
                {
                    $lembur = $this->lemburModel->insert($this->nipPegawai);
                    echo "<script>alert('Berhasil Melakukan Check Out')</script>";
                }
                else
                {
                    echo "<script>alert('Gagal Melakukan Check Out')</script>";
                }
            }
        }
    }
}
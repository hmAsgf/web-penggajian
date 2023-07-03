<?php

require_once "../models/Absensi.php";
require_once "../models/Pegawai.php";
require_once "../models/Lembur.php";
require_once "../models/Potongan.php";

class dashboardKaryawanController
{
    private $absensiModel;
    private $nipPegawai;
    private $pegawaiModel;
    private $lemburModel;
    private $potonganModel;

    function __construct()
    {
        session_status() === PHP_SESSION_ACTIVE ?: session_start();
        $this->absensiModel = new Absensi();
        $this->pegawaiModel = new Pegawai();
        $this->lemburModel = new Lembur();
        $this->potonganModel = new Potongan();
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
            $jamSekarang = date('H:i:s');
            $jamMulaiAbsen = "07:30:00";
            $jamBatasAbsen = "10:00:00";

            if($jamSekarang > $jamBatasAbsen)
            {
                $alpha = $this->potonganModel->insertAlpha($this->nipPegawai);
                echo "<script>alert('Check In Telah diTutup Jam 10:00')</script>";
            }
            elseif($jamSekarang >= $jamMulaiAbsen)
            {
                if($this->cekAbsen() == 0)
                {
                    $hasil = $this->absensiModel->checkIn($this->nipPegawai);
        
                    if($hasil)
                    {
                        $terlambat = $this->potonganModel->insertTerlambat($this->nipPegawai);
                        echo "<script>alert('Berhasil Melakukan Check In')</script>";
                    }
                    else
                    {
                        echo "<script>alert('Gagal Melakukan Check In')</script>";
                    }
                }
            }
            else
            {
                echo "<script>alert('Check In diBuka Jam 07:30')</script>";
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
            else
            {
                echo "<script>alert('Anda Sudah Melakukan Check Out')</script>";
            }
        }
    }
}
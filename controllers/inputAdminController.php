<?php

require_once "../models/Penggajian.php";
require_once "../models/Pegawai.php";
require_once "../models/Jabatan.php";

class inputAdminController
{
    private $penggajianModel;
    private $pegawaiModel;
    private $jabatanModel;

    function __construct()
    {
        session_status() === PHP_SESSION_ACTIVE ?: session_start();
        $this->penggajianModel = new Penggajian();
        $this->pegawaiModel = new Pegawai();
        $this->jabatanModel = new Jabatan();
    }

    function showNamaAll()
    {
        $data = $this->pegawaiModel->getAll();

        foreach($data as $datum)
        {
            ?>
            <option value="<?php echo $datum['nama']; ?>"><?php echo $datum['nama']; ?></option>
            <?php
        }
    }

    function tes()
    {
        if($_SERVER['REQUEST_METHOD'] === 'POST')
        {
            echo "<h1>TES</h1>";
            $nama = $_POST['nama'];

            $dataPegawai = $pegawaiModel->getByNama($nama);
            $dataJabatan = $jabatanModel->getById($dataPegawai['id']);
            $gajiPokok = $dataJabatan['gaji_pokok'];
            echo $gajiPokok;

            echo "<script>document.getElementById('gaji_pokok').value = '$gajiPokok';</script>";
        }
        else
        {
            echo "<h1>GAGAL</h1>";
        }
    }
}
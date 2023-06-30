<?php

require_once "../models/Penggajian.php";
require_once "../models/Pegawai.php";
require_once "../models/Jabatan.php";
require_once "../models/Potongan.php";
require_once "../models/Lembur.php";

class inputAdminController
{
    private $penggajianModel;
    private $pegawaiModel;
    private $jabatanModel;
    private $potonganModel;
    private $lemburModel;

    function __construct()
    {
        session_status() === PHP_SESSION_ACTIVE ?: session_start();
        $this->penggajianModel = new Penggajian();
        $this->pegawaiModel = new Pegawai();
        $this->jabatanModel = new Jabatan();
        $this->potonganModel = new Potongan();
        $this->lemburModel = new Lembur();
    }

    function showNamaAll()
    {
        $data = $this->pegawaiModel->getAll();

        foreach($data as $datum)
        {
            ?>
            <option value="<?php echo $datum['nip']; ?>"><?php echo $datum['nama']; ?></option>
            <?php
        }
    }

    function getJabatan()
    {
        return $this->jabatanModel->getJoinPegawai();
    }

    function getPotongan()
    {
        return $this->potonganModel->getAllTotal();
    }

    function getLembur()
    {
        return $this->lemburModel->getAllTotal();
    }

    function insert()
    {
        if(isset($_POST['input']))
        {
            $nip = $_POST['nama'];
            $idAdmin = $_SESSION['idAdmin'];
            $tanggal = $_POST['tanggal'];
            $gajiPokok = $_POST['gaji_pokok'];
            $pajak = $_POST['pajak'];
            $potongan = $_POST['potongan'];
            $gajiLembur = $_POST['gaji_lembur'];
            $gajiBersih = $_POST['gaji_bersih'];

            $input = $this->penggajianModel->insert($nip, $idAdmin, $tanggal,
                        $gajiPokok, $pajak, $potongan, $gajiLembur, $gajiBersih);
            
            if($input)
            {
                echo "<script>alert('Berhasil Melakukan Penggajian')</script>";
            }
            else
            {
                echo "<script>alert('Gagal Melakukan Penggajian')</script>";
            }
        }
    }
}
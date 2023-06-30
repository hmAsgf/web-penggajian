<?php

require_once "../models/Penggajian.php";

class payrollController
{
    private $penggajianModel;
    private $nipPegawai;

    function __construct()
    {
        session_status() === PHP_SESSION_ACTIVE ?: session_start();
        $this->nipPegawai = $_SESSION['nipPegawai'];
        $this->penggajianModel = new Penggajian();
    }
    
    private function formatRupiah($nominal)
    {
        $rupiah = number_format($nominal, 0, ',', '.');
        return $rupiah;
    }

    function showPenggajian()
    {
        $data = $this->penggajianModel->getByNip($this->nipPegawai);

        if($data)
        {
            foreach ($data as $datum)
            {
                $tanggal = date('F Y', strtotime($datum['tanggal']));
            ?>
                <tr>
                    <td align="center"><?php echo $tanggal; ?></td>
                    <td align="right"><?php echo $this->formatRupiah($datum['gaji_pokok']); ?></td>
                    <td align="right"><?php echo $this->formatRupiah($datum['pajak']); ?></td>
                    <td align="right"><?php echo $this->formatRupiah($datum['potongan']); ?></td>
                    <td align="right"><?php echo $this->formatRupiah($datum['gaji_lembur']); ?></td>
                    <td align="right"><?php echo $this->formatRupiah($datum['gaji_bersih']); ?></td>
                    <td align="center">Done</td>
                </tr>
            <?php
            }
        }
    }

    function showPajak()
    {
        $data = $this->penggajianModel->getByNip($this->nipPegawai);

        if($data)
        {
            foreach ($data as $datum)
            {
                $tanggalLengkap = date('j F Y', strtotime($datum['tanggal']));
                $tanggal = date('F Y', strtotime($datum['tanggal']));
            ?>
                <tr>
                    <td align="center"><?php echo $tanggal; ?></td>
                    <td align="right"><?php echo $this->formatRupiah($datum['pajak']); ?></td>
                    <td align="center"><?php echo $tanggalLengkap; ?></td>
                    <td align="center">Done</td>
                </tr>
            <?php
            }
        }
    }
}
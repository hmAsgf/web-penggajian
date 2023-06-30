<?php

require_once "../models/Penggajian.php";

class dashboardAdminController
{
    private $penggajianModel;

    function __construct()
    {
        session_status() === PHP_SESSION_ACTIVE ?: session_start();
        $this->penggajianModel = new Penggajian();
    }
    
    private function formatRupiah($nominal)
    {
        $rupiah = number_format($nominal, 0, ',', '.');
        return $rupiah;
    }

    function showPenggajian()
    {
        $data = $this->penggajianModel->getPenggajianAll();

        foreach ($data as $datum)
        {
            $tanggal = date('F Y', strtotime($datum['tanggal']));
        ?>
            <tr>
                <td align="center"><?php echo $tanggal; ?></td>
                <td align="right"><?php echo $this->formatRupiah($datum['total_gaji_pokok']); ?></td>
                <td align="right"><?php echo $this->formatRupiah($datum['total_pajak']); ?></td>
                <td align="right"><?php echo $this->formatRupiah($datum['total_potongan']); ?></td>
                <td align="right"><?php echo $this->formatRupiah($datum['total_gaji_lembur']); ?></td>
                <td align="right"><?php echo $this->formatRupiah($datum['total_gaji_bersih']); ?></td>
            </tr>
        <?php
        }
    }

    function showPajak()
    {
        $data = $this->penggajianModel->getPajakAll();

        foreach ($data as $datum)
        {
            $tanggalLengkap = date('j F Y', strtotime($datum['tanggal']));
            $tanggal = date('F Y', strtotime($datum['tanggal']));
        ?>
            <tr>
                <td align="center"><?php echo $tanggal; ?></td>
                <td align="right"><?php echo $this->formatRupiah($datum['total_pajak']); ?></td>
                <td align="center"><?php echo $tanggalLengkap; ?></td>
                <td align="center">Done</td>
            </tr>
        <?php
        }
    }
}
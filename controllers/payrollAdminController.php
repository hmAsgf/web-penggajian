<?php

require_once "../models/Penggajian.php";

class payrollAdminController
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
        $data = $this->penggajianModel->getAll();

        foreach ($data as $datum)
        {
            $tanggal = date('j F Y', strtotime($datum['tanggal']));
        ?>
            <tr>
                <td align="center"><?php echo $tanggal; ?></td>
                <td align="center"><?php echo $datum['nip']; ?></td>
                <td align="center"><?php echo $datum['nama']; ?></td>
                <td align="right"><?php echo $this->formatRupiah($datum['gaji_pokok']); ?></td>
                <td align="right"><?php echo $this->formatRupiah($datum['pajak']); ?></td>
                <td align="right"><?php echo $this->formatRupiah($datum['potongan']); ?></td>
                <td align="right"><?php echo $this->formatRupiah($datum['gaji_lembur']); ?></td>
                <td align="right"><?php echo $this->formatRupiah($datum['gaji_bersih']); ?></td>
            </tr>
        <?php
        }
    }
}
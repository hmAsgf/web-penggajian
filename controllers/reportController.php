<?php

require_once "../models/Penggajian.php";
require_once "../fpdf186/fpdf.php";

class reportController
{
    private $penggajianModel;
    private $nipPegawai;

    function __construct()
    {
        session_status() === PHP_SESSION_ACTIVE ?: session_start();
        $this->nipPegawai = $_SESSION['nipPegawai'];
        $this->penggajianModel = new Penggajian();
    }
    
    function formatRupiah($nominal)
    {
        $rupiah = number_format($nominal, 0, ',', '.');
        return $rupiah;
    }

    function showAll()
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
                </tr>
            <?php
            }
        }
    }

    function getTahun()
    {
        $data = $this->penggajianModel->getTahun($this->nipPegawai);

        if($data)
        {
            foreach($data as $datum)
            {
                ?>
                    <option value="<?php echo $datum['tahun']; ?>"><?php echo $datum['tahun']; ?></option>
                <?php
            }
        }
    }

    function searchPenggajian()
    {
        if(isset($_POST['cari']))
        {
            $bulan = $_POST['bulan'];
            $tahun = $_POST['tahun'];

            if($bulan == 0 && $tahun == 0)
            {
                $this->showAll();
            }
            else
            {
                $data = $this->penggajianModel->getPenggajianByTanggal($this->nipPegawai, $bulan, $tahun);

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
                        </tr>
                    <?php
                    }
                }
            }
        }
        else
        {
            $this->showAll();
        }
    }
}
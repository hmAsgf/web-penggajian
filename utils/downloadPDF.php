<?php

require_once "../models/Penggajian.php";
require_once "../models/Pegawai.php";
require_once "../fpdf186/fpdf.php";

$penggajianModel;
$nipPegawai;
$pegawaiModel;

session_status() === PHP_SESSION_ACTIVE ?: session_start();
$nipPegawai = $_SESSION['nipPegawai'];
$penggajianModel = new Penggajian();
$pegawaiModel = new Pegawai();
    
function formatRupiah($nominal)
{
    $rupiah = number_format($nominal, 0, ',', '.');
    return $rupiah;
}

if(isset($_POST['downloadPDF']))
{
    ob_start();
    
    $data = $penggajianModel->getByNip($nipPegawai);
    $pegawai = $pegawaiModel->getByNip($nipPegawai);
    $namalengkap = $nipPegawai . ' - ' . $pegawai['nama'];

    $pdf = new FPDF();
    $pdf->AddPage();

    $pdf->SetFont('Arial', '', 12);
    $pdf->MultiCell(50, 5, $namalengkap, 0,);
    $pdf->MultiCell(50, 10, '', 0,);

    $pdf->SetFont('Arial', 'B', 12);
    
    $pdf->Cell(10, 10, 'No', 1, 0, 'C');
    $pdf->Cell(30, 10, 'Periode', 1, 0, 'C');
    $pdf->Cell(30, 10, 'Gaji Pokok', 1, 0, 'C');
    $pdf->Cell(30, 10, 'Pajak', 1, 0, 'C');
    $pdf->Cell(30, 10, 'Potongan', 1, 0, 'C');
    $pdf->Cell(30, 10, 'Gaji Lembur', 1, 0, 'C');
    $pdf->MultiCell(30, 10, 'Gaji Bersih', 1, 'C', 0);

    $pdf->SetFont('Arial', '', 12);
    if($data)
    {
        $no = 1;
        foreach ($data as $datum)
        {
            $tanggal = date('F Y', strtotime($datum['tanggal']));
            $pdf->Cell(10, 10, $no, 1, 0, 'C');
            $pdf->Cell(30, 10, $tanggal, 1, 0, 'C');
            $pdf->Cell(30, 10, formatRupiah($datum['gaji_pokok']), 1, 0, 'R');
            $pdf->Cell(30, 10, formatRupiah($datum['pajak']), 1, 0, 'R');
            $pdf->Cell(30, 10, formatRupiah($datum['potongan']), 1, 0, 'R');
            $pdf->Cell(30, 10, formatRupiah($datum['gaji_lembur']), 1, 0, 'R');
            $pdf->MultiCell(30, 10, formatRupiah($datum['gaji_bersih']), 1, 'R', 0);
            $no++;
        }
    }

    $pdf->Output('D', 'data_penggajian.pdf');
    ob_end_flush();
}
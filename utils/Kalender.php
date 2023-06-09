<?php

class Kalender
{
    public $tahunBulan;
    public $bulanTahun;
    public $bulan_sekarang;
    public $tahun_sekarang;
    public $jumlah_hari;
    public $hari_awal;
    public $nama_hari = array('Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa', 'Su');

    function __construct()
    {
        $this->tahunBulan = date('Y-m');
        $this->bulanTahun = date('F Y');
        $this->bulan_sekarang = date('m');
        $this->tahun_sekarang = date('Y');
        $this->jumlah_hari = cal_days_in_month(CAL_GREGORIAN, $this->bulan_sekarang, $this->tahun_sekarang);
        $this->hari_awal = date('N', strtotime($this->tahun_sekarang . '-' . $this->bulan_sekarang . '-01'));
        date_default_timezone_set('Asia/Jakarta');
    }

    function showDays()
    {
        foreach($this->nama_hari as $hari)
        {
            echo "<div>".$hari."</div>";
        }
    }

    function dashboardShowDays()
    {
        foreach($this->nama_hari as $hari)
        {
            echo "<th>&emsp;$hari</th>";
        }
    }

    function showDate()
    {
        for($i = 1; $i < $this->hari_awal; $i++)
        {
            echo "<button disabled></button>";
        }

        for ($tanggal = 1; $tanggal <= $this->jumlah_hari; $tanggal++)
        {
            $tanggal_format = sprintf("%02d", $tanggal);
            $tanggal_sekarang = $this->tahun_sekarang . '-' . $this->bulan_sekarang . '-' . $tanggal_format;
            
            echo "<button>";
            echo '<time datetime="' . $tanggal_sekarang . '">' . $tanggal . '</time>';
            echo "</button>";
        }
    }

    function today()
    {
        $tanggal_sekarang = date('Y-m-d');
        return $tanggal_sekarang;
    }

    function tanggalTujuhHari()
    {
        $today = date('Y-m-d');
        $n = date('N', strtotime($today));
    
        for($i = 1; $i < $n; $i++)
        {
            $x = $n - $i;
            $tanggal = date('d', strtotime("-$x day", strtotime($today)));
            $tanggal_hari = date('l', strtotime($tanggal));
            echo "<td>&emsp;$tanggal</td>";
        }
    
        for($i = 0; $i < 8-$n; $i++)
        {
            $tanggal = date('d', strtotime("+$i day", strtotime($today)));
            $tanggal_hari = date('l', strtotime($tanggal));
            echo "<td>&emsp;$tanggal</td>";
        }
    }
}
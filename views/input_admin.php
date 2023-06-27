<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Boxicons -->
<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
<!-- My CSS -->
<link rel="stylesheet" type="text/css" href="../css/style_input_admin.css">

<title>Input Admin</title>
</head>
<body>
<?php
require_once "../controllers/loginAdminController.php";
require_once "../controllers/inputAdminController.php";
require_once "../utils/Kalender.php";

$loginAdminC = new loginAdminController();
$loginAdminC->cekAuth();

$inputAdminC = new inputAdminController();
$kalender = new Kalender();
?>
  <!-- SIDEBAR -->
  <section id="sidebar">
    <a href="#" class="brand">
      <i class='bx bxs-smile'></i>
      <span class="text">ADMIN</span>
    </a>
    <ul class="side-menu top">
      <li class="active">
        <a href="dashboard_admin.php">
          <i class='bx bxs-dashboard' ></i>
          <span class="text">Dashboard</span>
        </a>
      </li>
      <li>
        <a href="#">
          <i class='bx bxs-shopping-bag-alt' ></i>
          <span class="text">Input</span>
        </a>
      </li>
      <li>
        <a href="payroll_admin.php">
          <i class='bx bxs-doughnut-chart' ></i>
          <span class="text">Payroll</span>
        </a>
      </li>
    <ul class="side-menu">
      <li>
        <a href="#">
          <i class='bx bxs-cog' ></i>
          <span class="text">Settings</span>
        </a>
      </li>
      <li>
        <a href="logout_admin.php" class="logout">
          <i class='bx bxs-log-out-circle' ></i>
          <span class="text">Logout</span>
        </a>
      </li>
    </ul>
  </section>
  <!-- SIDEBAR -->



  <!-- CONTENT -->
  <div id="content">
      <!-- NAVBAR -->
      <nav>
          <i class='bx bx-menu' ></i>
          <a href="#" class="nav-link">Categories</a>
          <form action="#">
              <div class="form-input">
                  <input type="search" placeholder="Search...">
                  <button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
              </div>
          </form>
          <input type="checkbox" id="switch-mode" hidden>
          <label for="switch-mode" class="switch-mode"></label>
          <a href="#" class="notification">
              <i class='bx bxs-bell' ></i>
              <span class="num">8</span>
          </a>
          <a href="#" class="profile">
              <!-- <img src="img/people.png"> -->
          </a>
      </nav>
      <!-- NAVBAR -->

      <!-- MAIN -->
      <div class="content-input">
        <div class="cards">
              <div class="card">
                <div class="box">
                  <form action="" method="post">
                    <table>
                      <tr>
                        <td><label>Nama</label></td>
                        <td>:</td>
                        <td>
                          <select name="nama" id="nama">
                            <option value="0">Pilih Nama Pegawai</option>
                            <?php $inputAdminC->showNamaAll(); ?>
                          </select>
                        </td>
                      </tr>
                      <tr>
                        <td><label>Tanggal</label></td>
                        <td>:</td>
                        <td><input type="date" id="tanggal" name="tanggal"value="<?php echo $kalender->today(); ?>"></td>
                      </tr>
                      <tr>
                        <td><label>Gaji Pokok</label></td>
                        <td>:</td>
                        <td><input type="number" id="gaji_pokok" name="gaji_pokok" readonly></input></td>
                      </tr>
                      <tr>
                        <td><label>Pajak</label></td>
                        <td>:</td>
                        <td><input type="number" id="pajak" name="pajak" readonly></input></td>
                      </tr>
                      <tr>
                        <td><label>Potongan</label></td>
                        <td>:</td>
                        <td><input type="number" id="potongan" name="potongan" readonly></input></td>
                      </tr>
                      <tr>
                        <td><label>Gaji Lembur</label></td>
                        <td>:</td>
                        <td><input type="number" id="gaji_lembur" name="gaji_lembur" readonly></input></td>
                      </tr>
                      <tr>
                        <td><label>Gaji Bersih</label></td>
                        <td>:</td>
                        <td><input type="number" id="gaji_bersih" name="gaji_bersih" readonly></input></td>
                      </tr>
                      <tr>
                        <td><label></label></td>
                        <td></td>
                        <td><input type="submit" name="input" value="Submit"></td>
                      </tr>
                    </table>
                  </form>
                  
                  <?php $inputAdminC->insert(); ?>
                </div>
              </div>
              </div>
        </div>
      </div>

      <!-- MAIN -->
  </div>
  <script src="../js/script.js"></script>
  <script>
    const nama = document.getElementById('nama');
    const tanggal = document.getElementById('tanggal');
    const gajiPokok = document.getElementById('gaji_pokok');
    const pajak = document.getElementById('pajak');
    const potongan = document.getElementById('potongan');
    const gajiLembur = document.getElementById('gaji_lembur');
    const gajiBersih = document.getElementById('gaji_bersih');

    let jabatan = <?php echo json_encode($inputAdminC->getJabatan()); ?>;
    let potonganTotal = <?php echo json_encode($inputAdminC->getPotongan()); ?>;
    let lemburTotal = <?php echo json_encode($inputAdminC->getLembur()); ?>;

    function proses()
    {
      let jabatanObj = null;
      let potonganObj = null;
      let lemburObj = null;

      let nip = nama.value;
      let v_tanggal = new Date(tanggal.value);
      let bulan = v_tanggal.getMonth() + 1;
      let tahun = v_tanggal.getFullYear();

      jabatan.forEach(jbt =>
      {
        if(jbt.nip == nip)
        {
          jabatanObj = jbt;
        }
      });

      potonganTotal.forEach(ptgn =>
      {
        if(ptgn.nip == nip && ptgn.bulan == bulan && ptgn.tahun == tahun)
        {
          potonganObj = ptgn;
        }
      });

      lemburTotal.forEach(lmbr =>
      {
        if(lmbr.nip == nip && lmbr.bulan == bulan && lmbr.tahun == tahun)
        {
          lemburObj = lmbr;
        }
      });

      if(jabatanObj)
      {
        gajiPokok.value = parseInt(jabatanObj.gaji_pokok);
        pajak.value = parseInt(jabatanObj.pajak);
      }
      else
      {
        gajiPokok.value = 0;
        pajak.value = 0;
      }

      if(potonganObj)
      {
        potongan.value = parseInt(potonganObj.total_potongan);
      }
      else
      {
        potongan.value = 0;
      }

      if(lemburObj)
      {
        gajiLembur.value = parseInt(lemburObj.total_lembur);
      }
      else
      {
        gajiLembur.value = 0;
      }

      gajiBersih.value = parseInt(gajiPokok.value) - parseInt(pajak.value) - parseInt(potongan.value) + parseInt(gajiLembur.value);
    }

    nama.addEventListener('change', proses);
    tanggal.addEventListener('change', proses);
    window.addEventListener('load', proses);

  </script>
</body>
</html>
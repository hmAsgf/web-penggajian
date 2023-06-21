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
              <img src="img/people.png">
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
                          <select name="nama">
                            <?php $inputAdminC->showNamaAll(); ?>
                          </select>
                        </td>
                        <!-- <td><input type="text" name="nama_lengkap"></td> -->
                      </tr>
                      <!-- <tr>
                        <td><label>Alamat</label></td>
                        <td>:</td>
                        <td><input type="text" name="alamat"></td>
                      </tr> -->
                      <tr>
                        <td><label>Tanggal</label></td>
                        <td>:</td>
                        <td><input type="date" name="tanggal" value="<?php echo $kalender->today(); ?>"></td>
                      </tr>
                      <tr>
                            <td><label>Gaji Pokok</label></td>
                            <td>:</td>
                            <td><input type="number" name="gaji_pokok"></input></td>
                        </tr>
                        <tr>
                            <td><label>Pajak</label></td>
                            <td>:</td>
                            <td><input type="number" name="pajak"></input></td>
                        </tr>
                        <tr>
                            <td><label>Potongan</label></td>
                            <td>:</td>
                            <td><input type="number" name="potongan"></input></td>
                        </tr>
                        <tr>
                            <td><label>Gaji Lembur</label></td>
                            <td>:</td>
                            <td><input type="number" name="gaji_lembur"></input></td>
                        </tr>
                        <tr>
                            <td><label>Gaji Bersih</label></td>
                            <td>:</td>
                            <td><input type="number" name="gaji_bersih"></input></td>
                        </tr>
                        <tr>
                            <td><label></label></td>
                            <td></td>
                            <td><button type="submit" name="input">Submit</button></td>
                        </tr>
                    </table>
                  </form>  
                </div>
              </div>
              </div>
        </div>
      </div>
      <?php $inputAdminC->tes(); ?>
      <!-- MAIN -->
  </div>
  <script src="../js/script.js"></script>
</body>
</html>
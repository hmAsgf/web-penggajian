<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Boxicons -->
<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" href="../css/style_payroll_admin.css">
<!-- My CSS -->


<title>Payroll Admin</title>
</head>
<body>
<?php
require_once "../controllers/loginAdminController.php";
require_once "../controllers/payrollAdminController.php";

$loginAdminC = new loginAdminController();
$loginAdminC->cekAuth();

$payrollAdminC = new payrollAdminController();
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
        <a href="input_admin.php">
          <i class='bx bxs-shopping-bag-alt' ></i>
          <span class="text">Input</span>
        </a>
      </li>
      <li>
        <a href="#">
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
        
        
        <!--MAIN-->

        <div class="content-payroll">
          <div class="cards">
            <div class="cards">
              <div class="card">
                <div class="box">
                  <br><br>
                  <h1>EMPLOYE SALARY DATA</h1>
                  <br><br>
                  <div class="table">
                    <table style="width:155%", border="1px solid black">
                      <tr>
                        <th>Periode</th>
                        <th>NIP</th>
                        <th>Nama Pegawai</th>
                        <th>Gaji Bersih</th>
                        <th>Pajak</th>
                        <th>Potongan</th>
                        <th>Gaji Lembur</th>
                        <th>Gaji Bersih</th>
                      </tr>
                      <?php $payrollAdminC->showPenggajian(); ?>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  <script src="../js/script.js"></script>
</body>
</html>
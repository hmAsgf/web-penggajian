<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Boxicons -->
<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
<!-- My CSS -->
<link rel="stylesheet" type="text/css" href="../css/style_dashboard_admin.css">

<title>Admin</title>
</head>
<body>

<?php
require_once "../controllers/loginAdminController.php";
require_once "../utils/Kalender.php";
require_once "../controllers/dashboardAdminController.php";

$loginAdminC = new loginAdminController();
$loginAdminC->cekAuth();

$kalender = new Kalender();
$dashAdminC = new dashboardAdminController();
?>

<!-- SIDEBAR -->
<section id="sidebar">
  <a href="#" class="brand">
    <i class='bx bxs-smile'></i>
    <span class="text">ADMIN</span>
  </a>
  <ul class="side-menu top">
    <li class="active">
      <a href="#">
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
        <button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
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
      

      <div class="content-dashboard">
          <!-- <div class="cards">
              <div class="card">
                  <div class="box">
                      <h1>4.906.21</h1>
                      <h3>Earning</h3>
                      <a href=""><i>-5%</i></a>
                  </div>
              </div>
              <div class="card">
                  <div class="box">
                      <h1>2.062.33</h1>
                      <h3>Net Pay</h3>
                      <a href=""><i>+5%</i></a>
                  </div>
              </div>
              <div class="card">
                  <div class="box">
                      <h1>2.832.27</h1>
                      <h3>Superanuation</h3>
                      <a href=""><i>-18%</i></a>
                  </div>
              </div>
          </div> -->
          <div class="cards2">
              <div class="card2">
                  <div class="box2">
                      <br>
                      <h1>Financial Year Ending</h1>
                      <br><br>
                      <div class="table">
                          <table style="width:100%", border="1px solid black">
                              <tr>
                                  <th style="width:15%;">Tanggal</th>
                                  <th style="width:15%;">Total Gaji Pokok</th>
                                  <th style="width:15%;">Total Pajak</th>
                                  <th style="width:15%;">Total Potongan</th>
                                  <th style="width:15%;">Total Gaji Lembur</th>
                                  <th style="width:15%;">Total Gaji Bersih</th>
                              </tr>
                              <?php $dashAdminC->showPenggajian(); ?>
                          </table>
                      </div>
                  </div>
              </div>
          </div>
          <div class="cards3">
              <div class="card3">
                  <div class="box3">
                      <br>
                      <h1>Taxes</h1>
                      <br>
                      <div class="table">
                          <table style="width:97%", border="1px solid black">
                              <tr>
                                  <th style="width:15%;">Date</th>
                                  <th style="width:15%;">Total Amount</th>
                                  <th style="width:15%;">Due Date</th>
                                  <th style="width:15%;">Status</th>
                              </tr>
                              <?php $dashAdminC->showPajak(); ?>
                          </table>
                      </div>
                  </div>
              </div>
              <div class="card3">
                  <div class="box3">
                      <br><br>
                      <div class="calendar">
                          <div class="month-indicator">
                            <time datetime="<?php echo $kalender->tahubBulan; ?>"> <?php echo $kalender->bulanTahun; ?> </time>
                          </div>
                          <div class="day-of-week">
                            <?php $kalender->showDays(); ?>
                          </div>
                          <div class="date-grid">
                            <?php $kalender->showDate(); ?>
                          </div>
                        </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
<!--MAIN-->

<script src="../js/script.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Boxicons -->
<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
<!-- My CSS -->
<link rel="stylesheet" type="text/css" href="../css/style_payroll.css">
<title>Payroll</title>
</head>
<body>
<?php
  require_once "../controllers/payrollController.php";
  require_once "../utils/Kalender.php";
  require_once "../controllers/loginController.php";
  $payrollC = new payrollController();
  $kalender = new Kalender();
  $loginC = new loginController();
  $loginC->cekAuth();
?>

<!-- SIDEBAR -->
<section id="sidebar">
  <a href="#" class="brand">
    <i class='bx bxs-smile'></i>
    <span class="text">KARYAWAN</span>
  </a>
  <ul class="side-menu top">
    <li class="active">
      <a href="dashboard_karyawan.php">
        <i class='bx bxs-dashboard' ></i>
        <span class="text">Dashboard</span>
      </a>
    </li>
    <li>
      <a href="report_karyawan.php">
        <i class='bx bxs-shopping-bag-alt' ></i>
        <span class="text">Report</span>
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
      <a href="logout.php" class="logout">
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
      
      
      <!--MAIN-->

      <div class="content-payroll">
          <!-- <div class="cards">
              <div class="card">
                  <div class="box">
                      <h1>4.906.21</h1>
                      <h3>Earning</h3>
                      <a href=""><i>-5%</i></a>
                  </div>
              </div>
              <div class="card">
                  <div class="box1">
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
                      <h1>Annual Salary</h1>
                      <br><br>
                      <div class="table">
                          <table cellpadding="5px" style="width:100%;"">
                              <tr>
                                  <th style="width:15%;">Date</th>
                                  <th style="width:15%;">Basic Salary</th>
                                  <th style="width:15%;">Tax</th>
                                  <th style="width:15%;">Salary Deductions</th>
                                  <th style="width:15%;">Overtime Pay</th>
                                  <th style="width:15%;">Net Salary</th>
                                  <th style="width:15%;">Status</th>
                              </tr>
                              <?php $payrollC->showPenggajian(); ?>
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
                              <?php $payrollC->showPajak(); ?>
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

<script src="..js/script.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Boxicons -->
<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
<!-- My CSS -->
<link rel="stylesheet" type="text/css" href="../css/style_dashboard.css">

<title>Dashboard</title>
</head>
<body>


<!-- SIDEBAR -->
<section id="sidebar">
    <a href="#" class="brand">
        <i class='bx bxs-smile'></i>
        <span class="text">KARYAWAN</span>
    </a>
    <ul class="side-menu top">
        <li class="active">
            <a href="#">
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
            <a href="payroll_karyawan.php">
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
            <a href="login_karyawan.php" class="logout">
                <i class='bx bxs-log-out-circle' ></i>
                <span class="text">Logout</span>
            </a>
        </li>
    </ul>
</section>
<!-- SIDEBAR -->

<!-- NAVBAR -->
<div id="content">
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
  <div class="content-dashboard">
          <div class="cards">
              <div class="card">
                  <div class="box">
                      <h1>Appointments</h1>
                      <br><br><br>
                      <div class="day-of-week">
                              <div>Su</div>
                              <div>Mo</div>
                              <div>Tu</div>
                              <div>We</div>
                              <div>Th</div>
                              <div>Fr</div>
                              <div>Sa</div>
                            </div>
                            <div class="date-grid">
                              <button>
                                <time datetime="2023-01-01">1</time>
                              </button>
                              <button>
                                <time datetime="2023-01-02">2</time>
                              </button>
                              <button>
                                <time datetime="2023-01-03">3</time>
                              </button>
                              <button>
                                <time datetime="2023-01-04">4</time>
                              </button>
                              <button>
                                <time datetime="2023-01-05">5</time>
                              </button>
                              <button>
                                <time datetime="2023-01-06">6</time>
                              </button>
                              <button>
                                <time datetime="2023-01-07">7</time>
                              </button>
                              <button>
                                <time datetime="2023-01-08">8</time>
                              </button>
                              <button>
                                <time datetime="2023-01-09">9</time>
                              </button>
                              <button>
                                <time datetime="2023-01-10">10</time>
                              </button>
                              <button>
                                <time datetime="2023-01-11">11</time>
                              </button>
                              <button>
                                <time datetime="2023-01-12">12</time>
                              </button>
                              <button>
                                <time datetime="2023-01-13">13</time>
                              </button>
                              <button>
                                <time datetime="2023-01-14">14</time>
                              </button>
                              <button>
                                <time datetime="2023-01-15">15</time>
                              </button>
                              <button>
                                <time datetime="2023-01-16">16</time>
                              </button>
                              <button>
                                <time datetime="2023-01-17">17</time>
                              </button>
                              <button>
                                <time datetime="2023-01-18">18</time>
                              </button>
                              <button>
                                <time datetime="2023-01-19">19</time>
                              </button>
                              <button>
                                <time datetime="2023-01-20">20</time>
                              </button>
                              <button>
                                <time datetime="2023-01-21">21</time>
                              </button>
                              <button>
                                <time datetime="2023-01-22">22</time>
                              </button>
                              <button>
                                <time datetime="2023-01-23">23</time>
                              </button>
                              <button>
                                <time datetime="2023-01-24">24</time>
                              </button>
                              <button>
                                <time datetime="2023-01-25">25</time>
                              </button>
                              <button>
                                <time datetime="2023-01-26">26</time>
                              </button>
                              <button>
                                <time datetime="2023-01-27">27</time>
                              </button>
                              <button>
                                <time datetime="2023-01-28">28</time>
                              </button>
                          </div>
                          <br><br><br><br>
                          <div class="table">
                              <table style="width:100%">
                                  <tr>
                                      <th style="width:15%;">09.15 AM</th>
                                      <th style="width:15%;">Michael</th>
                                  </tr>
                                  <tr>
                                      <th>1 h 10 min</th>
                                      <th>Telah melakukan check in 
                                          1 jam lebih 10 menit yang lalu
                                      </th>
                                  </tr>
                              </table>
                          </div>
                    </div>
              </div>
              &emsp;&emsp;&emsp;&emsp;
              <div class="card2">
                <div class="box2">
                  <h1>Annual Leaves</h1>
                  <div class="table2">
                    <table style="width:60%">
                      <tr>
                        <th style="width:20%;">5</th>
                        <th style="width:20%;">15</th>
                        <th style="width:20%;">20</th>
                      </tr>
                      <tr>
                        <th>Mount</th>
                        <th>Day</th>
                        <th>Total</th>
                      </tr>
                    </table>
                  </div>
                </div>
              </div>
              <div class="card3">
                <div class="box3">
                  <h1>Claims</h1>
                    <table>
                      <tr>
                        <th>Busines Trip</th>
                        <th>$ 155.30</th>
                        <th>NotSumcard</th>
                      </tr>
                    </table>
                  </div>
                </div>
              </div>
              <div class="card4">
                <div class="box4">
                  <h1>Attendace</h1>
                    <div class="table4">
                      <table style="width:40%">
                        <tr>
                          <th style="width:20%;">5</th>
                          <th style="width:20%;">15</th>
                          <th style="width:20%;">20</th>
                        </tr>
                        <tr>
                          <th>Absensi</th>
                          <th>Izin</th>
                          <th>Alfa</th>
                        </tr>
                      </table>
                    </div>
                </div>
              </div>
        </div>
    </div>
  </div>
</div>
<!-- MAIN -->

<script src="script.js"></script>
</body>
</html>
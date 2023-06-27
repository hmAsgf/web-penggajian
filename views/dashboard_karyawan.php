<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Boxicons -->
<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

<!-- My CSS -->
<link rel="stylesheet" type="text/css" href="../css/style.css">

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

        <!-- MAIN -->
        <div class="content-dashboard">
            <div class="cards">
                <div class="card">
                    <div class="box">
                    <div class="head">
                        <h3>Appointments</h3>
                    </div>
                    <br>
                        <table>
                            <thead>
                                <tr>
                                    <th>&emsp;Sun</th>
                                    <th>&emsp; Mon</th>
                                    <th>&emsp;Tues</th>
                                    <th>&emsp;Wed</th>
                                    <th>&emsp;Thu</th>
                                    <th>&emsp;Fri</th>
                                    <th>&emsp;Sat</th>
                                </tr>
                                <tr>
                                    <th>&emsp;18</th>
                                    <th>&emsp;19</th>
                                    <th>&emsp;20</th>
                                    <th>&emsp;21</th>
                                    <th>&emsp;22</th>
                                    <th>&emsp;23</th>
                                    <th>&emsp;24</th>
                                </tr>
                            </thead>
                        </table>
                        <br>
                        <table>
                            <thead>
                                <tr>
                                    <th>&emsp;09.15 AM &emsp;</th>
                                    <th>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Michael</th>
                                    <br>
                                </tr>
                            </thead>
                        </table>
                        <table>
                            <thead>
                                <tr>
                                    <th>&emsp;1 h 10 min</th>
                                    <th>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Telah Melakukan Check in</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
                <div class="card2">
                    <div class="box2">
                        <div class="head-absen">
                        <h3>Annual Leaves</h3>
                        <br><br>
                        </div>
                        <table>
                            <thead>
                                <tr>
                                    <th>5</th>
                                    <th>&emsp;&emsp;&emsp;&emsp;&emsp;15</th>
                                    <th>&emsp;&emsp;&emsp;20</th>
                                </tr>
                            </thead>
                        </table>
                        <table>
                            <thead>
                                <tr>
                                    <th>Mount</th>
                                    <th>&emsp;&emsp;Day</th>
                                    <th>&emsp;&emsp;Total</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
            <div class="cards2">
                <div class="card">
                    <div class="box">
                        <div class="head-pendapatan">
                            <h3>Claim</h3>
                        </div>
                        <table>
                            <thead>
                                <tr>
                                    <th>Bussines Trip</th>
                                    <th>&emsp;&emsp;&emsp;Payslip</th>
                                </tr>
                                <tr>
                                    <th>$ 115.30</th>
                                    <th>&emsp;&emsp;&emsp;2023</th>
                                </tr>
                                <tr>
                                    <th>Not Sumbcard</th>
                                    <th>&emsp;&emsp;&emsp;31 Dec <br>&emsp;&emsp;&emsp;&emsp;Hours Payslip</th>                       
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
                <div class="card2">
                    <div class="box2">
                        <table>
                            <thead>
                                <tr>
                                    <th>Check In/Out</th>
                                </tr>
                                <tr>
                                    <th>01:23:49 <br> Checked in at 06.36 AM</th>
                                </tr>
                            </thead>
                        </table>
                        <br><br>
                        <button><h5>CHECK IN</h5></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- MAIN -->



<script src="../js/script.js"></script>
</body>
</html>
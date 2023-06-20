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
        <a href="login_admin.php" class="logout">
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
                  <h1>EMPLOYE SALARY DATA</h1>
                  <br>
                  <div class="table">
                    <table style="width:190%", border="1px solid black">
                      <tr>
                        <th style="height:5%">Date</th>
                        <th>Earnings</th>
                        <th>Tax</th>
                        <th>Super</th>
                        <th>Net Pay</th>
                        <th>Last Edited</th>
                        <th>Action</th>
                      </tr>
                      <tr>
                        <th>Januari 2023</th>
                        <th>14.946.21</th>
                        <th>747.31</th>
                        <th>149.46</th>
                        <th>4.483.86</th>
                        <th>01 Febuari 2023</th>
                        <th>
                          <a href=""><input type="button" class="btn-edit">Edit</a>
                          <a href=""><input type="button" class="btn-view">View</a>
                        </th>
                      </tr>
                      <tr>
                        <th>Febuari 2023</th>
                        <th>21.239.08</th>
                        <th>1.061.95</th>
                        <th>424.78</th>
                        <th>6.371.72</th>
                        <th>01 Maret 2023</th>
                        <th>
                          <a href=""><input type="button" class="btn-edit">Edit</a>
                          <a href=""><input type="button" class="btn-view">View</a>
                        </th>
                      </tr>
                      <tr>
                        <th>Maret 2023</th>
                        <th>9.034.85</th>
                        <th>451.74</th>
                        <th>180.69</th>
                        <th>2.710.20</th>
                        <th>01 April 2023</th>
                        <th>
                          <a href=""><input type="button" class="btn-edit">Edit</a>
                          <a href=""><input type="button" class="btn-view">View</a>
                        </th>
                      </tr>
                      <tr>
                        <th>April 2023</th>
                        <th>8.034.85</th>
                        <th>431.78</th>
                        <th>172.69</th>
                        <th>2.590.37</th>
                        <th>01 Mei 2023</th>
                        <th>
                          <a href=""><input type="button" class="btn-edit">Edit</a>
                          <a href=""><input type="button" class="btn-view">View</a>
                        </th>
                      </tr>
                      <tr>
                        <th>Mei 2023</th>
                        <th>15.000.00</th>
                        <th>700.51</th>
                        <th>150.50</th>
                        <th>4.500.00</th>
                        <th>01 Juni 2023</th>
                        <th>
                          <a href=""><input type="button" class="btn-edit">Edit</a>
                          <a href=""><input type="button" class="btn-view">View</a>
                        </th>
                      </tr>
                      <tr>
                        <th>Juni 2023</th>
                        <th>20.000.00</th>
                        <th>800.51</th>
                        <th>250.50</th>
                        <th>5.500.00</th>
                        <th>01 Juli 2023</th>
                        <th>
                          <a href=""><input type="button" class="btn-edit">Edit</a>
                          <a href=""><input type="button" class="btn-view">View</a>
                        </th>
                      </tr>
                      <tr>
                        <th>Juli 2023</th>
                        <th>10.000.00</th>
                        <th>600.51</th>
                        <th>50.50</th>
                        <th>2.500.00</th>
                        <th>01 Agustus 2023</th>
                        <th>
                          <a href=""><input type="button" class="btn-edit">Edit</a>
                          <a href=""><input type="button" class="btn-view">View</a>
                        </th>
                      </tr>
                      <tr>
                        <th>Agustus 2023</th>
                        <th>5.000.00</th>
                        <th>200.51</th>
                        <th>180.50</th>
                        <th>2.500.00</th>
                        <th>01 September 2023</th>
                        <th>
                          <a href=""><input type="button" class="btn-edit">Edit</a>
                          <a href=""><input type="button" class="btn-view">View</a>
                        </th>
                      </tr>
                      <tr>
                        <th>September 2023</th>
                        <th>7.000.00</th>
                        <th>100.51</th>
                        <th>550.50</th>
                        <th>4.500.00</th>
                        <th>01 Oktober 2023</th>
                        <th>
                          <a href=""><input type="button" class="btn-edit">Edit</a>
                          <a href=""><input type="button" class="btn-view">View</a>
                        </th>
                      </tr>
                      <tr>
                        <th>Oktober 2023</th>
                        <th>10.000.00</th>
                        <th>900.51</th>
                        <th>850.50</th>
                        <th>5.500.00</th>
                        <th>01 November 2023</th>
                        <th>
                          <a href=""><input type="button" class="btn-edit">Edit</a>
                          <a href=""><input type="button" class="btn-view">View</a>
                        </th>
                      </tr>
                      <tr>
                        <th>November 2023</th>
                        <th>20.000.00</th>
                        <th>700.51</th>
                        <th>650.50</th>
                        <th>500.00</th>
                        <th>01 Desember 2023</th>
                        <th>
                          <a href=""><input type="button" class="btn-edit">Edit</a>
                          <a href=""><input type="button" class="btn-view">View</a>
                        </th>
                      </tr>
                      <tr>
                        <th>Desember 2023</th>
                        <th>5.000.00</th>
                        <th>500.51</th>
                        <th>450.50</th>
                        <th>3.500.00</th>
                        <th>01 Januari 2024</th>
                        <th>
                          <a href=""><input type="button" class="btn-edit">Edit</a>
                          <a href=""><input type="button" class="btn-view">View</a>
                        </th>
                      </tr>
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
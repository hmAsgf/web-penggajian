<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Boxicons -->
<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

<!-- My CSS -->
<link rel="stylesheet" type="text/css" href="../css/style_report.css">

<title>Report</title>
</head>
<body>

<?php
require_once "../controllers/reportController.php";
require_once "../controllers/loginController.php";
$reportC = new reportController();
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
			<a href="#">
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

	<div class="content-report">
		<div class="cards">
			<div class="card">
				<div class="box">
					<table class="table1">
						<tr>
							<td>Bulan</td>
							<td>
								<select name="bulan">
									<option value="0">Pilih</option>
									<option value="1">January</option>
									<option value="2">February</option>
									<option value="3">March</option>
									<option value="4">April</option>
									<option value="5">May</option>
									<option value="6">June</option>
									<option value="7">July</option>
									<option value="8">August</option>
									<option value="9">September</option>
									<option value="10">October</option>
									<option value="11">November</option>
									<option value="12">December</option>
								</select>
							</td>
							<td>Tahun</td>
							<td>
								<select name="tahun">
									<option value="0">Pilih</option>
								</select>
							</td>
						</tr>
					</table>
					<br>
					<h4>Gaji Pegawai - Bulan : - Tahun : 2023</h4>
					<br>
					<div class="table">
						<table style="width:100%", border="1px solid black">
							<tr>
								<th>Periode</th>
								<th>Gaji Pokok</th>
								<th>Pajak</th>
								<th>Potongan</th>
								<th>Gaji Lembur</th>
								<th>Gaji Bersih</th>
							</tr>
							<?php $reportC->showAll(); ?>
						</table>
					</div>
					<br>
					<form method="post" action="../utils/downloadPDF.php">
						<input type="submit" class="pdf" name="downloadPDF" value="Ekspor Dafar Gaji Pegawai ke PDF">
					</form>
				</div>
			</div>
		</div>
	</div>

<script src="../js/script.js"></script>
</body>
</html>
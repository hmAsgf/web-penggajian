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
			<a href="#" class="logout">
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
					<h4>Gaji Pegawai - Bulan : 01, Tahun 2023</h4>
					<br>
					<div class="table">
						<table style="width:100%", border="1px solid black">
							<tr>
								<td>Tanggal</td>
								<td>Gaji Pokok</td>
								<td>Pajak</td>
								<td>Uang Lembur</td>
								<td>Potongan</td>
								<td>Total Gaji</td>
							</tr>
							<tr>
								<td>Januari 2023</td>
								<td>5.000.000</td>
								<td>2.000.000</td>
								<td>60.000</td>
								<td>10.000</td>
								<td>7.050.000</td>
							</tr>
							<tr>
								<td>Febuari 2023</td>
								<td>5.000.000</td>
								<td>2.000.000</td>
								<td>50.000</td>
								<td>10.000</td>
								<td>7.040.000</td>
							</tr>
							<tr>
								<td>Maret 2023</td>
								<td>5.000.000</td>
								<td>2.000.000</td>
								<td>70.000</td>
								<td>20.000</td>
								<td>7.050.000</td>
							</tr>
							<tr>
								<td>April 2023</td>
								<td>5.000.000</td>
								<td>2.000.000</td>
								<td>80.000</td>
								<td>15.000</td>
								<td>7.065.000</td>
							</tr>
							<tr>
								<td>Mei 2023</td>
								<td>5.000.000</td>
								<td>2.000.000</td>
								<td>60.000</td>
								<td>10.000</td>
								<td>7.500.000</td>
							</tr>
							<tr>
								<td>Juni 2023</td>
								<td>5.000.000</td>
								<td>2.000.000</td>
								<td>60.000</td>
								<td>10.000</td>
								<td>7.500.000</td>
							</tr>
							<tr>
								<td>Juli 2023</td>
								<td>5.000.000</td>
								<td>2.000.000</td>
								<td>60.000</td>
								<td>10.000</td>
								<td>7.500.000</td>
							</tr>
							<tr>
								<td>Agustus 2023</td>
								<td>5.000.000</td>
								<td>2.000.000</td>
								<td>60.000</td>
								<td>10.000</td>
								<td>7.500.000</td>
							</tr>
							<tr>
								<td>September 2023</td>
								<td>5.000.000</td>
								<td>2.000.000</td>
								<td>60.000</td>
								<td>10.000</td>
								<td>7.500.000</td>
							</tr>
							<tr>
								<td>Oktober 2023</td>
								<td>5.000.000</td>
								<td>2.000.000</td>
								<td>60.000</td>
								<td>10.000</td>
								<td>7.500.000</td>
							</tr>
							<tr>
								<td>November 2023</td>
								<td>5.000.000</td>
								<td>2.000.000</td>
								<td>60.000</td>
								<td>10.000</td>
								<td>7.500.000</td>
							</tr>
							<tr>
								<td>Desember 2023</td>
								<td>5.000.000</td>
								<td>2.000.000</td>
								<td>60.000</td>
								<td>10.000</td>
								<td>7.500.000</td>
							</tr>
						</table>
					</div>
					<br>
					<h5>Ekspor Dafar Gaji Pegawai ke PDF</h5>
				</div>
			</div>
		</div>
	</div>

<script src="..js/script.js"></script>
</body>
</html>
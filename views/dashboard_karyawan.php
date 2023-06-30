<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- ICON -->
	<script src="https://unpkg.com/phosphor-icons"></script>
	<!-- MY CSS -->
    <link rel="stylesheet" type="text/css" href="../css/style_dashboard_karyawan.css">

	<title>Dashboard</title>
</head>
<body>
<?php
require_once "../controllers/loginController.php";
require_once "../utils/Kalender.php";
require_once "../controllers/dashboardKaryawanController.php";

$loginC = new loginController();
$loginC->cekAuth();

$kalender = new Kalender();

$dashKaryawanC = new dashboardKaryawanController();
?>

	<!-- start: SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class="ph-flame-fill"></i>
		</a>

		<ul class="sidebar__menu">
			<li>
				<a href="#" class="active"><i class="ph-house-fill"></i></a>
			</li>
			<li>
				<a href="report_karyawan.php"><i class="ph-airplay-fill"></i></a>
			</li>
			<li>
				<a href="payroll_karyawan.php"><i class="ph-clipboard-fill"></i></a>
			</li>
			<li>
				<a href="logout.php" class="logout"><i class="ph-sign-out-fill"></i></a>
			</li>
		</ul>
	</section>

	<!-- start: SIDEBAR OVERLAY -->
	<div class="sidebar-overlay"></div>
	<!-- end: SIDEBAR OVERLAY -->
	<!-- end: SIDEBAR -->

	<!-- start: SIDEBAR MOBILE -->
	<section id="sidebar-mobile">
		<i class="ph-squares-four-fill toggle-sidebar"></i>
		<a href="#" class="brand">
			<i class="ph-flame-fill"></i>
			KARYAWAN
		</a>
	</section>
	<!-- end: SIDEBAR MOBILE -->

	<!-- start: MAIN -->
	<section id="main">
		
		<!-- start: MAIN TOP -->
		<div class="main__top">
			<div class="main__top__title">
				<h3>KARYAWAN</h3>
				<ul class="breadcrumbs">
					<li><a href="#">Home</a></li>
					<li class="divider">/</li>
					<li><a href="#" class="active">Dashboard</a></li>
				</ul>
			</div>
			<ul class="main__top__menu">
				<li class="search">
					<a href="#">
						<i class="ph-magnifying-glass"></i>
					</a>
					<div class="main__dropdown">
						<form action="#">
							<input type="text" name="" placeholder="Search">
						</form>
						<span>Recent Search</span>
						<ul class="recent-search">
							<li>
								<a href="#">
									<h5>Keyword</h5>
									<p>Lorem ipsum dolor sit amet consectetur...</p>
								</a>
							</li>
							<li>
								<a href="#">
									<h5>Keyword</h5>
									<p>Lorem ipsum dolor sit amet consectetur...</p>
								</a>
							</li>
							<li>
								<a href="#">
									<h5>Keyword</h5>
									<p>Lorem ipsum dolor sit amet consectetur...</p>
								</a>
							</li>
							<li>
								<a href="#">
									<h5>Keyword</h5>
									<p>Lorem ipsum dolor sit amet consectetur...</p>
								</a>
							</li>
							<li>
								<a href="#">
									<h5>Keyword</h5>
									<p>Lorem ipsum dolor sit amet consectetur...</p>
								</a>
							</li>
							<li>
								<a href="#">
									<h5>Keyword</h5>
									<p>Lorem ipsum dolor sit amet consectetur...</p>
								</a>
							</li>
							<li>
								<a href="#">
									<h5>Keyword</h5>
									<p>Lorem ipsum dolor sit amet consectetur...</p>
								</a>
							</li>
						</ul>
					</div>
				</li>
				<li class="notification">
					<a href="#">
						<i class="ph-bell"></i>
					</a>
					<div class="main__dropdown">
						<div class="notification__top">
							<h4>Notifications</h4>
							<span>6</span>
						</div>
						<ul class="notification__item">
							<li>
								<a href="#">
									<div class="left">
										<h5>Notification title</h5>
										<p>Lorem ipsum dolor sit amet...</p>
									</div>
									<span>3 hours</span>
								</a>
							</li>
							<li>
								<a href="#">
									<div class="left">
										<h5>Notification title</h5>
										<p>Lorem ipsum dolor sit amet...</p>
									</div>
									<span>3 hours</span>
								</a>
							</li>
							<li>
								<a href="#">
									<div class="left">
										<h5>Notification title</h5>
										<p>Lorem ipsum dolor sit amet...</p>
									</div>
									<span>3 hours</span>
								</a>
							</li>
							<li>
								<a href="#">
									<div class="left">
										<h5>Notification title</h5>
										<p>Lorem ipsum dolor sit amet...</p>
									</div>
									<span>3 hours</span>
								</a>
							</li>
							<li>
								<a href="#">
									<div class="left">
										<h5>Notification title</h5>
										<p>Lorem ipsum dolor sit amet...</p>
									</div>
									<span>3 hours</span>
								</a>
							</li>
						</ul>
					</div>
				</li>
				<li class="inbox">
					<a href="#">
						<i class="ph-chat-circle-dots"></i>
					</a>
					<span></span>
				</li>
				<li class="profile">
					<a href="#">
						<img src="https://images.unsplash.com/photo-1564564321837-a57b7070ac4f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8bWFufGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="">
					</a>
					<div class="main__dropdown">
						<div class="profile__top">
							<img src="https://images.unsplash.com/photo-1564564321837-a57b7070ac4f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8bWFufGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="">
							<div class="name">
								<h5>John Doe</h5>
								<p>Web Developer</p>
							</div>
						</div>
						<ul class="profile__menu">
							<li><a href="#"><i class="ph-user-circle-fill"></i> Edit profile</a></li>
							<li><a href="#"><i class="ph-gear-fill"></i> Settings</a></li>
						</ul>
					</div>
				</li>
			</ul>
		</div>
		<!-- end: MAIN TOP -->

		<!-- start: MAIN BODY -->
		<div class="main__body">
			<ul class="main__body__box-info">
				<li>
					<div class="head-absen">
                        <h3>Annual Leaves</h3>
                        <br><br>
                        </div>
                        <table>
                                <tr>
									<?php $dashKaryawanC->showAbsensi(); ?>
                                </tr>
                                <tr>
                                    <th align="center">Hadir</th>
                                    <th align="center">Alpha</th>
                                    <th align="center">Total</th>
                                </tr>
                        </table>
				</li>
				<li>
					<div class="head-pendapatan">
                            <h3>Claim</h3>
                        </div>
						<br>
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
                                    <th>&emsp;&emsp;&emsp;31 Dec <br> &emsp;&emsp;&emsp;Hours Payslip</th>                       
                                </tr>
                            </thead>
                        </table>
				</li>
			</ul>
			<div class="main__body2">
				<ul class="main__body__box-info2">
					<li>
						<div class="head">
							<h3>Appointments</h3>
						</div>
						<br>
							<table>
								<thead>
									<tr>
										<?php $kalender->dashboardShowDays(); ?>
									</tr>
									<tr>
										<?php $kalender->tanggalTujuhHari(); ?>
								</tr>
								</thead>
							</table>
							<br>
							<table>
								<thead>
									<tr>
										<br>
										<th id="datang"></th>
										<th><?php $dashKaryawanC->getNama(); ?></th>
									</tr>
									<tr>
										<th id="detail-1"></th>
										<th id="detail-2"></th>
									</tr>
								</thead>
							</table>
					</li>
					<li>
						<div class="head">
							<h3>Check In/Out</h3>
						</div>
						<br><br><br>
						<form method="post" onsubmit="return confirm('Apakah Anda yakin ingin melakukan Check In/Out?')">
							<table>
								<tr>
									<th id="jam"></th>
								</tr>
								<tr>
									<th id="status"></th>
									<th>
										<input type="submit" class="button" id="check" name="checkIn" value="CHECK IN">
									</th>
								</tr>
							</table>
						</form>

						<?php $dashKaryawanC->absen(); ?>
					</li>
				</ul>
			</div>
		</div>

		<!-- end: MAIN BODY -->

	</section>
	<!-- end: MAIN -->
	
	<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
	<script src="../js/script.js"></script>
	<script>
		function convertTimeFormat(time)
		{
			var timeParts = time.split(':'); // Memisahkan string waktu menjadi array
			var hour = timeParts[0]; // Mengambil jam
			var minute = timeParts[1]; // Mengambil menit
			return hour + ':' + minute; // Menggabungkan jam dan menit dalam format H:i
		}

		function updateTime() {
            var date = new Date();
            var hours = date.getHours();
            var minutes = date.getMinutes();
            var seconds = date.getSeconds();

            // Menambahkan nol di depan angka jam, menit, dan detik jika perlu
            hours = (hours < 10) ? "0" + hours : hours;
            minutes = (minutes < 10) ? "0" + minutes : minutes;
            seconds = (seconds < 10) ? "0" + seconds : seconds;

            // Menampilkan jam secara realtime di elemen dengan id "jam"
            document.getElementById("jam").innerHTML = hours + ":" + minutes + ":" + seconds;
        }

		function cekStatus()
		{
			const status = document.getElementById('status');
			const datang = document.getElementById('datang');
			const detail_1 = document.getElementById('detail-1');
			const detail_2 = document.getElementById('detail-2');
			let data = <?php echo json_encode($dashKaryawanC->showJamDatangNow()); ?>;

			let waktuSekarang = new Date(); // Waktu saat ini

			if(data)
			{
				let jamDatang = data.jam_datang;

				// Mendapatkan jam dan menit dari waktu saat ini
				let jamSekarang = waktuSekarang.getHours();
				let menitSekarang = waktuSekarang.getMinutes();

				// Memisahkan jam dan menit dari jam check-in
				let jamCheckInParts = jamDatang.split(':');
				let jamCheckInJam = parseInt(jamCheckInParts[0], 10);
				let jamCheckInMenit = parseInt(jamCheckInParts[1], 10);

				// Menghitung selisih waktu antara jam saat ini dan jam check-in
				let selisihJam = jamSekarang - jamCheckInJam;
				let selisihMenit = menitSekarang - jamCheckInMenit;

				status.innerHTML = "Checked In At " + convertTimeFormat(data.jam_datang);
				datang.innerHTML = convertTimeFormat(data.jam_datang);
				detail_1.innerHTML = selisihJam + " Jam " + selisihMenit + " Menit";
				detail_2.innerHTML = "Telah Melakukan Check In"
			}
			else
			{
				status.innerHTML = "Checked In At - ";
				datang.innerHTML = " - ";
				detail_1.innerHTML = " - ";
				detail_2.innerHTML = "Belum Melakukan Check In";
			}
		}
		
		function changeButton()
		{
			const check = document.getElementById('check');
			let cekAbsen = <?php echo json_encode($dashKaryawanC->cekAbsen()); ?>;

			if(cekAbsen == 0)
			{
				check.name = "checkIn";
				check.value = "CHECK IN";
			}
			else
			{
				check.name = "checkOut";
				check.value = "CHECK OUT";
			}
			
			cekStatus();
		}

        // Memanggil fungsi updateTime setiap detik
        setInterval(updateTime, 1000);
		changeButton();
	</script>
</body>
</html>
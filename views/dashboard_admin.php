<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- ICON -->
	<script src="https://unpkg.com/phosphor-icons"></script>
	<!-- MY CSS -->
    <link rel="stylesheet" type="text/css" href="../css/style_dashboard_admin.css">

	<title>Dashboard</title>
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
				<a href="input_admin.php"><i class="ph-airplay-fill"></i></a>
			</li>
			<li>
				<a href="payroll_admin.php"><i class="ph-clipboard-fill"></i></a>
			</li>
			<li>
				<a href="logout_admin.php" class="logout"><i class="ph-sign-out-fill"></i></a>
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
			ADMIN
		</a>
	</section>
	<!-- end: SIDEBAR MOBILE -->

	<!-- start: MAIN -->
	<section id="main">
		
		<!-- start: MAIN TOP -->
		<div class="main__top">
			<div class="main__top__title">
				<h3>ADMIN</h3>
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
					<div class="box">
					<h1>4.906.21</h1>
					<h3>Earning</h3>
					<a href=""><i>-5%</i></a>
                  </div>
				</li>
				<li>
					<div class="box">
					<h1>2.062.33</h1>
					<h3>Net Pay</h3>
					<a href=""><i>+5%</i></a>
                  </div>
				</li>
				<li>
					<div class="box">
					<h1>2.832.27</h1>
					<h3>Superanuation</h3>
					<a href=""><i>-18%</i></a>
                  </div>
				</li>
			</ul>
    	</div>
		<div class="main__body2">
      <ul class="main__body__box-info2">
        <li>
		<h1>Financial Year Ending</h1>
		<br>
		<div class="table">
			<table style="width:100%", border="1px solid black">
				<tr>
					<th align='center' style="width:15%;">Periode</th>
					<th align='center' style="width:15%;">Total Gaji Pokok</th>
					<th align='center' style="width:15%;">Total Pajak</th>
					<th align='center' style="width:15%;">Total Potongan</th>
					<th align='center' style="width:15%;">Total Gaji Lembur</th>
					<th align='center' style="width:15%;">Total Gaji Bersih</th>
				</tr>
        <?php $dashAdminC->showPenggajian(); ?>
			</table>
        </li>
        <li>
		<h1>Taxes</h1>
		<br>
		<div class="table">
			<table style="width:97%", border="1px solid black">
				<tr>
					<th align='center' style="width:15%;">Periode</th>
					<th align='center' style="width:15%;">Total Pajak</th>
					<th align='center' style="width:15%;">Tanggal</th>
					<th align='center' style="width:15%;">Status</th>
				</tr>
        <?php $dashAdminC->showPajak(); ?>
			</table>
        </li>
		<li>
		<div class="calendar">
		<div class="month-indicator">
      <time datetime="<?php echo $kalender->tahubBulan; ?>">
        <?php echo $kalender->bulanTahun; ?> 
      </time>
		</div>
		<div class="day-of-week">
      <?php $kalender->showDays(); ?>
		</div>
    <div class="date-grid">
      <?php $kalender->showDate(); ?>
    </div>
	</div>
		</li>
      </ul>
		</div>
		<!-- end: MAIN BODY -->

	</section>
	<!-- end: MAIN -->
	
	<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
	<script src="../js/script.js"></script>
</body>
</html>
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
				<a href="login_karyawan.php" class="logout"><i class="ph-sign-out-fill"></i></a>
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
                                    <th>09.15 AM</th>
                                    <th>&emsp;&emsp;Michael</th>
                                    <br>
                                </tr>
                            </thead>
                        </table>
                        <table>
                            <thead>
                                <tr>
                                    <th>1 h 10 min</th>
                                    <th>&emsp;&emsp;Telah Melakukan Check in</th>
                                </tr>
                            </thead>
                        </table>
				</li>
				<li>
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
										<th>09.15 AM</th>
										<th>&emsp;&emsp;Michael</th>
										<br>
									</tr>
								</thead>
							</table>
							<table>
								<thead>
									<tr>
										<th>1 h 10 min</th>
										<th>&emsp;&emsp;Telah Melakukan Check in</th>
									</tr>
								</thead>
							</table>
					</li>
					<li>
						<table>
							<tr>
								<th>Check In/Out</th>
							</tr>
                        </table>
						<br><br><br>
						<table>
							<tr>
								<th>01:23:49 <br> Checked in at 06.36 AM</th>
							</tr>
						</table>
                        <button>CHECK IN</button>
					</li>
				</ul>
			</div>
		</div>
		<!-- end: MAIN BODY -->

	</section>
	<!-- end: MAIN -->
	
	<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
	<script src="../js/script.js"></script>
</body>
</html>
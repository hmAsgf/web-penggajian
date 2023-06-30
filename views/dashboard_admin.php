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
					<th style="width:15%;">Karyawan</th>
					<th style="width:15%;">Pendapatan</th>
					<th style="width:15%;">Pajak</th>
					<th style="width:15%;">Bonus</th>
					<th style="width:15%;">Gaji Bersih</th>
					<th style="width:15%;">Terakhir di Edit</th>
					<th style="width:15%;">Status</th>
				</tr>
				<tr>
					<th>Tyson Midgget</th>
					<th>14.946.21</th>
					<th>747.31</th>
					<th>149.46</th>
					<th>4.483.86</th>
					<th>01 Febuari 2023</th>
					<th>Done</th>
				</tr>
				<tr>
					<th>Adrin Gonzales</th>
					<th>21.239.08</th>
					<th>1.061.95</th>
					<th>424.78</th>
					<th>6.371.72</th>
					<th>01 Maret 2023</th>
					<th>Done</th>
				</tr>
				<tr>
					<th>Donna Powell</th>
					<th>9.034.85</th>
					<th>451.74</th>
					<th>180.69</th>
					<th>2.710.20</th>
					<th>01 April 2023</th>
					<th>Done</th>
				</tr>
				<tr>
					<th>Garth Hayden</th>
					<th>8.034.85</th>
					<th>431.78</th>
					<th>172.69</th>
					<th>2.590.37</th>
					<th>01 Mei 2023</th>
					<th>Done</th>
				</tr>
				<tr>
					<th>Muhammad Eko</th>
					<th>15.000.00</th>
					<th>700.51</th>
					<th>150.50</th>
					<th>4.500.00</th>
					<th>01 Juni 2023</th>
					<th>Done</th>
				</tr>
				<tr>
					<th>Dany Ramadhan</th>
					<th>20.000.00</th>
					<th>800.51</th>
					<th>250.50</th>
					<th>5.500.00</th>
					<th>01 Juli 2023</th>
					<th>Done</th>
				</tr>
				<tr>
					<th>Yanto bastian</th>
					<th>10.000.00</th>
					<th>600.51</th>
					<th>50.50</th>
					<th>2.500.00</th>
					<th>01 Agustus 2023</th>
					<th>Done</th>
				</tr>
				<tr>
					<th>Iqbal Sudirman</th>
					<th>5.000.00</th>
					<th>200.51</th>
					<th>180.50</th>
					<th>2.500.00</th>
					<th>01 September 2023</th>
					<th>Done</th>
				</tr>
				<tr>
					<th>Joko Susilo</th>
					<th>7.000.00</th>
					<th>100.51</th>
					<th>550.50</th>
					<th>4.500.00</th>
					<th>01 Oktober 2023</th>
					<th>Done</th>
				</tr>
				<tr>
					<th>Abdi Yulino</th>
					<th>10.000.00</th>
					<th>900.51</th>
					<th>850.50</th>
					<th>5.500.00</th>
					<th>01 November 2023</th>
					<th>Done</th>
				</tr>
				<tr>
					<th>Wahyurow</th>
					<th>20.000.00</th>
					<th>700.51</th>
					<th>650.50</th>
					<th>500.00</th>
					<th>01 Desember 2023</th>
					<th>Done</th>
				</tr>
				<tr>
					<th>M. Andi</th>
					<th>5.000.00</th>
					<th>500.51</th>
					<th>450.50</th>
					<th>3.500.00</th>
					<th>01 Januari 2024</th>
					<th>Done</th>
				</tr>
			</table>
        </li>
        <li>
		<h1>TAXES</h1>
		<br>
		<div class="table">
			<table style="width:97%", border="1px solid black">
				<tr>
					<th style="width:15%;">Date</th>
					<th style="width:15%;">Total Amount</th>
					<th style="width:15%;">Due Date</th>
					<th style="width:15%;">Status</th>
				</tr>
				<tr>
					<th>Januari 2023</th>
					<th>3.049.88</th>
					<th>01 Febuari</th>
					<th>Done</th>
				</tr>
				<tr>
					<th>Januari 2023</th>
					<th>3.049.88</th>
					<th>01 Febuari</th>
					<th>Done</th>
				</tr>
				<tr>
					<th>Januari 2023</th>
					<th>3.049.88</th>
					<th>01 Febuari</th>
					<th>Done</th>
				</tr>
				<tr>
					<th>Januari 2023</th>
					<th>3.049.88</th>
					<th>01 Febuari</th>
					<th>Done</th>
				</tr>
				<tr>
					<th>Januari 2023</th>
					<th>3.049.88</th>
					<th>01 Febuari</th>
					<th>Done</th>
				</tr>
				<tr>
					<th>Januari 2023</th>
					<th>3.049.88</th>
					<th>01 Febuari</th>
					<th>Done</th>
				</tr>
				<tr>
					<th>Januari 2023</th>
					<th>3.049.88</th>
					<th>01 Febuari</th>
					<th>Done</th>
				</tr>
				<tr>
					<th>Januari 2023</th>
					<th>3.049.88</th>
					<th>01 Febuari</th>
					<th>Done</th>
				</tr>
				<tr>
					<th>Januari 2023</th>
					<th>3.049.88</th>
					<th>01 Febuari</th>
					<th>Done</th>
				</tr>
				<tr>
					<th>Januari 2023</th>
					<th>3.049.88</th>
					<th>01 Febuari</th>
					<th>Done</th>
				</tr>
			</table>
        </li>
		<li>
		<div class="calendar">
		<div class="month-indicator">
			<time datetime="2023-01"> Januari 2023 </time>
		</div>
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
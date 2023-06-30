<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- ICON -->
	<script src="https://unpkg.com/phosphor-icons"></script>
	<!-- MY CSS -->
    <link rel="stylesheet" type="text/css" href="../css/style_payroll_admin.css">

	<title>Payroll</title>
</head>
<body>
	<!-- start: SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class="ph-flame-fill"></i>
		</a>

		<ul class="sidebar__menu">
			<li>
				<a href="dashboard_admin.php" class="active"><i class="ph-house-fill"></i></a>
			</li>
			<li>
				<a href="input_admin.php"><i class="ph-airplay-fill"></i></a>
			</li>
			<li>
				<a href="#"><i class="ph-clipboard-fill"></i></a>
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
					<li><a href="#" class="active">Payroll</a></li>
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
        <h1>EMPLOYE SALARY DATA</h1>
        <br>
        <div class="table">
          <table style="width:100%", border="1px solid black">
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
                <a href="">Edit</a>
                <a href="">View</a>
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
                <a href="">Edit</a>
                <a href="">View</a>
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
                <a href="">Edit</a>
                <a href="">View</a>
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
                <a href="">Edit</a>
                <a href="">View</a>
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
                <a href="">Edit</a>
                <a href="">View</a>
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
                <a href="">Edit</a>
                <a href="">View</a>
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
                <a href="">Edit</a>
                <a href="">View</a>
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
                <a href="">Edit</a>
                <a href="">View</a>
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
                <a href="">Edit</a>
                <a href="">View</a>
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
                <a href="">Edit</a>
                <a href="">View</a>
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
                <a href="">Edit</a>
                <a href="">View</a>
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
                <a href="">Edit</a>
                <a href="">View</a>
              </th>
            </tr>
          </table>
				</li>
    	</div>
		<!-- end: MAIN BODY -->

	</section>
	<!-- end: MAIN -->
	
	<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
	<script src="../js/script.js"></script>
</body>
</html>
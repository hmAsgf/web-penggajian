<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- ICON -->
	<script src="https://unpkg.com/phosphor-icons"></script>
	<!-- MY CSS -->
    <link rel="stylesheet" type="text/css" href="../css/style_input_admin.css">

	<title>Input</title>
</head>
<body>
<?php
require_once "../controllers/loginAdminController.php";
require_once "../controllers/inputAdminController.php";
require_once "../utils/Kalender.php";

$loginAdminC = new loginAdminController();
$loginAdminC->cekAuth();

$inputAdminC = new inputAdminController();
$kalender = new Kalender();
?>
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
				<a href="#"><i class="ph-airplay-fill"></i></a>
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
					<li><a href="#" class="active">Input</a></li>
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
        <form action="" method="post">
        <tr>
          <td><label>Nama</label></td>
          <td>:</td>
          <td>
            <select name="nama" id="nama">
              <option value="0">Pilih Nama Pegawai</option>
              <?php $inputAdminC->showNamaAll(); ?>
            </select>
          </td>
        </tr>
        <br><br>
        <tr>
          <td><label>Tanggal</label></td>
          <td>:</td>
          <td><input type="date" id="tanggal" name="tanggal"value="<?php echo $kalender->today(); ?>"></td>
        </tr>
        <br><br>
        <tr>
          <td><label>Gaji Pokok</label></td>
          <td>:</td>
          <td><input type="number" id="gaji_pokok" name="gaji_pokok" readonly></input></td>
        </tr>
        <br><br>
        <tr>
          <td><label>Pajak</label></td>
          <td>:</td>
          <td><input type="number" id="pajak" name="pajak" readonly></input></td>
        </tr>
        <br><br>
        <tr>
          <td><label>Potongan</label></td>
          <td>:</td>
          <td><input type="number" id="potongan" name="potongan" readonly></input></td>
        </tr>
        <br><br>
        <tr>
            <td><label>Gaji Lembur</label></td>
            <td>:</td>
            <td><input type="number" id="gaji_lembur" name="gaji_lembur" readonly></input></td>
        </tr>
        <br><br>
        <tr>
          <td><label>Gaji Bersih</label></td>
          <td>:</td>
          <td><input type="number" id="gaji_bersih" name="gaji_bersih" readonly></input></td>
        </tr>
        <br><br>
        <tr>
            <td><label></label></td>
            <td></td>
            <td><input class="button" type="submit" name="input" value="Submit"></td>
        </tr>
        </form>
				</li>
			</ul>

      <?php $inputAdminC->insert(); ?>
    	</div>
		<!-- end: MAIN BODY -->

	</section>
	<!-- end: MAIN -->
	
	<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
	<script src="../js/script.js"></script>
  <script>
    const nama = document.getElementById('nama');
    const tanggal = document.getElementById('tanggal');
    const gajiPokok = document.getElementById('gaji_pokok');
    const pajak = document.getElementById('pajak');
    const potongan = document.getElementById('potongan');
    const gajiLembur = document.getElementById('gaji_lembur');
    const gajiBersih = document.getElementById('gaji_bersih');

    let jabatan = <?php echo json_encode($inputAdminC->getJabatan()); ?>;
    let potonganTotal = <?php echo json_encode($inputAdminC->getPotongan()); ?>;
    let lemburTotal = <?php echo json_encode($inputAdminC->getLembur()); ?>;

    function proses()
    {
      let jabatanObj = null;
      let potonganObj = null;
      let lemburObj = null;

      let nip = nama.value;
      let v_tanggal = new Date(tanggal.value);
      let bulan = v_tanggal.getMonth() + 1;
      let tahun = v_tanggal.getFullYear();

      jabatan.forEach(jbt =>
      {
        if(jbt.nip == nip)
        {
          jabatanObj = jbt;
        }
      });

      potonganTotal.forEach(ptgn =>
      {
        if(ptgn.nip == nip && ptgn.bulan == bulan && ptgn.tahun == tahun)
        {
          potonganObj = ptgn;
        }
      });

      lemburTotal.forEach(lmbr =>
      {
        if(lmbr.nip == nip && lmbr.bulan == bulan && lmbr.tahun == tahun)
        {
          lemburObj = lmbr;
        }
      });

      if(jabatanObj)
      {
        gajiPokok.value = parseInt(jabatanObj.gaji_pokok);
        pajak.value = parseInt(jabatanObj.pajak);
      }
      else
      {
        gajiPokok.value = 0;
        pajak.value = 0;
      }

      if(potonganObj)
      {
        potongan.value = parseInt(potonganObj.total_potongan);
      }
      else
      {
        potongan.value = 0;
      }

      if(lemburObj)
      {
        gajiLembur.value = parseInt(lemburObj.total_lembur);
      }
      else
      {
        gajiLembur.value = 0;
      }

      gajiBersih.value = parseInt(gajiPokok.value) - parseInt(pajak.value) - parseInt(potongan.value) + parseInt(gajiLembur.value);
    }

    nama.addEventListener('change', proses);
    tanggal.addEventListener('change', proses);
    window.addEventListener('load', proses);

  </script>
</body>
</html>
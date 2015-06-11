<?php 
Sesi::init(); // mulakan sesi
//echo '<pre>$_SESSION:', print_r($_SESSION, 1) . '</pre><br>';
/*
$_SESSION:Array
(
    [namaPegawai] => musa
    [levelPegawai] => fe
    [loggedIn] => 1
)
*/
// set pembolehubah
$pengguna = Sesi::get('namaPegawai');
$level = Sesi::get('levelPegawai');
$pegawai = null; //$this->pegawai;

$senaraiPengguna = array('fe','pegawai');
$senaraiPentadbir = array('kawal','admin');
if (in_array(Sesi::get('levelPegawai'), $senaraiPentadbir)) 
	$paras = '' . Sesi::get('levelPegawai');
elseif (in_array($level, $senaraiPengguna)) 
	$paras = '' . Sesi::get('levelPegawai');
else
	$paras = null;
$url = './';
?>
<div class="container" style="margin-top:-20px;border: 2px solid #dfdfd0; border-radius:2px">
	<!-- rangka atas -->
	<nav class="navbar navbar-custom navbar-static-top">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="./">
			<img src="images/back/kuih.fw.png" width="70" height="40" alt="chef" style="margin-top:-10px"/>
		</a>
	</div>
	<div class="collapse navbar-collapse">
	</div><!-- /.navbar-collapse -->
	</nav>
	<!-- end rangka atas -->
	
	<!-- rangka bawah -->
	<div class="row" style=" margin-top:-10px">
		<!-- menu kiri -->
		<div class="col-md-3">
<!-- senarai yang ada pada menu kiri /////////////////////////////////////////////////////////////// -->
			<!--iklan -->
			<div class="thumbnail none1">
				<img src="images/back/discount-sale.jpg" alt="...">
				<div class="caption">
				<h3>Dapatkan Diskaun</h3>
				<p>Harga Runtuh dengan Website Kami</p>
				</div>
			</div>
			<!-- end iklan -->
			
			<!-- kategori makanan-->
			<div class="col-xs-12 col-sm-12">
				<div class="list-group none1">
					<p href="#" class="list-group-item active"> Kategori Makanan </p>
					<a href="../ringan/index.php" class="list-group-item">Makanan Ringan</a>
					<a href="../kuih/index.php" class="list-group-item">Kuih Tradisional</a>
					<a href="../sos/index.php" class="list-group-item">Sos Pencicah </a>
					<a href="../pes/index.php" class="list-group-item">Pes Masakan</a>
				</div>
			</div>
			<!-- end kategori makanan-->

			<!--box info-->
			<div class="col-lg-12 col-md-12">
				<div class="list-group none1">
					<p href="#" class="list-group-item active"> Infomasi </p>
					<a href="../ringan/index.php" class="list-group-item">Tentang Kami</a>
					<a href="../kuih/index.php" class="list-group-item">Hubungi Kami</a>
				</div>
			</div>
			<!--end box info-->
<!-- end senarai yang ada pada menu kiri /////////////////////////////////////////////////////////////// -->		
		</div>
		<!-- end menu kiri -->

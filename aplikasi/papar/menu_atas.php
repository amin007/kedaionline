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
$url = URL;
?>
<div class="container" style="margin-top:-20px;border: 2px solid #dfdfd0; border-radius:2px">
	<!-- rangka atas -->
	<nav class="navbar navbar-custom">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="#" data-toggle="modal" data-target="#myCart">
			<span><img alt="Brand" src="<?php echo $url ?>images/back/chart.fw.png" width="30" height="30" 
			alt="chart">Shopping Cart</span>
		</a>
		<a class="navbar-brand" href="<?php echo $url ?>">
			E-SME Food: A web based application for SME food for online shopping
		</a>
		
	</div>
	<div class="collapse navbar-collapse">
		<ul class="nav navbar-nav navbar-right">
		<li><a href="#" class="btn btn-success btn-sm"
		data-toggle="modal" data-target="#daftarAkaun">Daftar Akaun</a></li>
		<li><a href="#" class="btn btn-navbar-custom"
		data-toggle="modal" data-target="#logMasuk">Log Masuk</a></li>
		</ul>
	</div><!-- /.navbar-collapse -->
	</nav>
	<!-- end rangka atas -->
	
	<!-- rangka bawah -->
	<div class="row" style=" margin-top:-10px">
		<!-- menu kiri -->
		<div class="col-md-3">
<?php include 'index/menu_kiri.php'; ?>
		</div>
		<!-- end menu kiri -->

<?php 
Sesi::init(); # mulakan sesi
//echo '<pre>$_SESSION:', print_r($_SESSION, 1) . '</pre><br>';
# set pembolehubah
$pengguna = Sesi::get('namaPengguna');
$level = Sesi::get('levelPengguna');
# semak
if (Sesi::get('levelPengguna')=='pentadbir') 	$paras = Sesi::get('levelPengguna');
elseif (Sesi::get('levelPengguna')=='jurujual')	$paras = Sesi::get('levelPengguna');
elseif (Sesi::get('levelPengguna')=='ahli')		$paras = Sesi::get('levelPengguna');
else $paras = null;
/*<img alt="Brand" src="<?php echo $url ?>images/back/chart.fw.png" 
width="30" height="30" alt="chart">*/
$url = URL;
if ($paras == null):?>
<div class="container" style="margin-top:10px;border:2px solid #dfdfd0; border-radius:2px">
	<!-- rangka atas -->
	<nav class="navbar navbar-custom">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="<?php echo $url ?>">
		E-SME Food: A web based application for SME food for online shopping
		</a>		
	</div>
	<div class="collapse navbar-collapse">
<?php include 'menubar_atas.php'; ?>
	</div><!-- /.navbar-collapse -->
	</nav><!-- end rangka atas -->

	<!-- rangka bawah -->
	<div class="row" style=" margin-top:-10px">
		<!-- menu kiri -->
		<div class="col-md-3">
<?php include 'index/menu_kiri.php'; ?>
		</div>
		<!-- end menu kiri -->
<?php else: endif; echo "\n";
?>
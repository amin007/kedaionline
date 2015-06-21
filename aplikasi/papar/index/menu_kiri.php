<!--  senarai yang ada pada menu kiri /////////////////////////////////////////////////////////// -->
			<!--iklan -->
			<div class="thumbnail none1">
				<img src="<?php echo $url ?>images/back/discount-sale.jpg" alt="...">
				<div class="caption">
				<h3>Dapatkan Diskaun</h3>
				<p>Harga Runtuh dengan Website Kami</p>
				</div>
			</div>
			<!-- end iklan -->
<?php $url1 = URL . 'kategori/';	?>
			<!-- kategori makanan-->
			<div class="col-xs-12 col-sm-12">
				<div class="list-group none1">
					<p href="#" class="list-group-item active"> Kategori Makanan </p>
					<a href="<?php echo $url1 ?>makanan/ringan" class="list-group-item">Makanan Ringan <span class="badge">2</span></a>
					<a href="<?php echo $url1 ?>kuih/tradisional" class="list-group-item">Kuih Tradisional <span class="badge">2</span></a>
					<a href="<?php echo $url1 ?>sos/pencicah" class="list-group-item">Sos Pencicah <span class="badge">2</span></a>
					<a href="<?php echo $url1 ?>pes/masakan" class="list-group-item">Pes Masakan <span class="badge">2</span></a>
				</div>
			</div>
			<!-- end kategori makanan-->

			<!--box info-->
<?php $url2 = URL . 'infomasi/'; ?>
			<div class="col-lg-12 col-md-12">
				<div class="list-group none1">
					<p href="#" class="list-group-item active"> Infomasi </p>
					<a href="<?php echo $url2 ?>" class="list-group-item">Tentang Kami</a>
					<a href="<?php echo $url2 ?>hubungi/kami" class="list-group-item">Hubungi Kami</a>
				</div>
			</div>
			<!--end box info-->
			
			<!-- carian -->
			<div class="col-lg-12 col-md-12">
				<div class="list-group none1">
					<p href="#" class="list-group-item active"> Carian Produk </p>
					<form role="search" method="POST" action="<?php echo $url1 ?>carian">
					<div class="form-group">
					<input type="text" name="cariapa" class="form-control" placeholder="Carian">
					</div>
					<input type="submit" value="Cari" class="btn btn-default">
					</form>
				</div>
			</div>
			<!--end carian -->
<?php 
$dataURL = dpt_url();
//echo '<pre>'; echo '<br>$dataURL:<br>'; print_r($dataURL); echo '</pre>';
//$classKhas = array('infomasi','kategori');
$classKhas = array(null,'index');
if ( isset($dataURL[0]) && ( in_array($dataURL[0],$classKhas) )) :?>
			<!--special offer-->
<?php include 'tawaran_istimewa.php'; ?>
			<!--end special offer-->
<?php
else:
	echo '';
endif;
?>
<!-- end senarai yang ada pada menu kiri /////////////////////////////////////////////////////////// -->
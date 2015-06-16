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
			
			<!-- kategori makanan-->
			<div class="col-xs-12 col-sm-12">
				<div class="list-group none1">
					<p href="#" class="list-group-item active"> Kategori Makanan </p>
					<a href="kategori/ringan" class="list-group-item">Makanan Ringan <span class="badge">2</span></a>
					<a href="kategori/kuih" class="list-group-item">Kuih Tradisional <span class="badge">2</span></a>
					<a href="kategori/sos" class="list-group-item">Sos Pencicah <span class="badge">2</span></a>
					<a href="kategori/pes" class="list-group-item">Pes Masakan <span class="badge">2</span></a>
				</div>
			</div>
			<!-- end kategori makanan-->

			<!--box info-->
			<div class="col-lg-12 col-md-12">
				<div class="list-group none1">
					<p href="#" class="list-group-item active"> Infomasi </p>
					<a href="infomasi/" class="list-group-item">Tentang Kami</a>
					<a href="infomasi/hubungi/kami" class="list-group-item">Hubungi Kami</a>
				</div>
			</div>
			<!--end box info-->
			
			<!-- carian -->
			<div class="col-lg-12 col-md-12">
				<div class="list-group none1">
					<p href="#" class="list-group-item active"> Carian Produk </p>
					<form role="search">
					<div class="form-group">
					<input type="text" class="form-control" placeholder="Carian">
					</div>
					<button type="submit" class="btn btn-default">Cari</button>
					</form>
				</div>
			</div>
			<!--end carian -->
<?php 
$dataURL = dpt_url();
//echo '<pre>'; echo '<br>$dataURL:<br>'; print_r($dataURL); echo '</pre>';
$classKhas = array('infomasi');
if ( isset($dataURL[0]) && ( in_array($dataURL[0],$classKhas) )) :
	echo '';
else:
?>			
			<!--special offer-->
<?php include 'tawaran_istimewa.php'; ?>
			<!--end special offer-->
<?php
endif;
?>
<!-- end senarai yang ada pada menu kiri /////////////////////////////////////////////////////////// -->

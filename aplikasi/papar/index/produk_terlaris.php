<?php
// senarai makanan
$produkTerlaris = $this->terlaris;
$gambar = URL . 'images/makanan ringan/';
?>
<!--button product-->
<div class="col-md-12" align="center" id="f_new2" style="display:none">
<div class="btn-group" role="group" aria-label="...">
	<button type="button" class="btn btn-info" id="new2">Produk Terkini</button>
	<button type="button" class="btn btn-warning active">Produk Terlaris</button>
</div>
</div>
<!--end button product-->

<!--food contain-->
<div class="col-md-12" style="border: 1px solid #DFDFD0; border-radius:2px; display:none" id="food2">
<!--2st  Produk Terlaris -->
<?php
//$result_p = $db_handle->runQuery("SELECT * FROM product WHERE best_sell ='1' LIMIT 9");
if (!empty($produkTerlaris)) :
	foreach($produkTerlaris as $key=>$value):
# tawaran dan harga
	$tawaran = ($produkTerlaris[$key]['offer']==0) ? null : 
		"\n\t\t\t\t\t" . '<strike>RM: ' 
		. ringgit($produkTerlaris[$key]['offer']) . '</strike>';
	$harga = ($produkTerlaris[$key]['price']==0) ? 
		"\n\t\t\t\t\t<strong>RM: " . ringgit(0) . '</strong>': 
		"\n\t\t\t\t\t<strong>RM: "
		. ringgit($produkTerlaris[$key]['price']) . '</strong>';
?>
	<div class="col-sm-6 col-md-4">
		<div class="caption">
			<h4 class="h4"><?php echo $produkTerlaris[$key]['com'] ?></h4>
		</div>
		<div class="thumbnail thumbnail1">
		<a class="example-image-link" href="<?php echo $gambar . $produkTerlaris[$key]['pic']?>" data-lightbox="example-set" 
		title="Click on the right side of the image to move forward.">
		<img src="<?php echo $gambar . $produkTerlaris[$key]['pic']?>" alt="..." class="img-responsive" style="height:150px"></a>
			<div class="caption">
				<h4><?php echo $produkTerlaris[$key]['title'] ?></h4>
				<div class="alert alert-warning">
				<?php echo $tawaran . $harga . "\n\t\t\t\t\t" 
				?></div><?php echo "\n\t\t\t"; ?>
			</div>
		</div>
	</div>
<?php 
	endforeach;
endif;
?>
</div>
<!--end food contain-->
<?php
// senarai makanan
$produkTerlaris = array(
	array('com'=>'Laris1','code'=>1, 'pic'=>'kuih4.jpg', 'title'=>'Kuih4','offer'=>30, 'price'=>25),
	array('com'=>'Laris2','code'=>3, 'pic'=>'kuih5.jpg', 'title'=>'Kuih5','offer'=>20, 'price'=>17),
	array('com'=>'Laris3','code'=>3, 'pic'=>'belacan.jpg', 'title'=>'Belacan','offer'=>17, 'price'=>5),
	array('com'=>'Laris1','code'=>4, 'pic'=>'karipap.jpg', 'title'=>'Karipap','offer'=>40, 'price'=>25),
	array('com'=>'Laris2','code'=>5, 'pic'=>'maruku.jpg', 'title'=>'Maruku','offer'=>60, 'price'=>15),
	array('com'=>'Laris3','code'=>6, 'pic'=>'masmello.jpg', 'title'=>'Mellow','offer'=>27, 'price'=>23),	
);
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
					<strike>RM: <?php echo ringgit($produkTerlaris[$key]['offer']) ?></strike>
					<strong>RM: <?php echo ringgit($produkTerlaris[$key]['price']) ?></strong>
				</div>
			</div>
		</div>
	</div>
<?php 
	endforeach;
endif;
?>
   
    
</div>
<!--end food contain-->

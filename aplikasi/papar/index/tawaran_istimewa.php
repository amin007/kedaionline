			<div class="col-lg-12 col-md-12 col-sm-6 col-xs-12 none1">
			<h3 class="list-group-item-danger" align="center">Tawaran Istimewa</h3>
<?php
			/*
			$result_p = $db_handle->runQuery("SELECT * FROM product WHERE special='1' ORDER BY id ASC LIMIT 3");
			//*/
$result_p = array(
	array('com'=>'Tawar1','code'=>1, 'pic'=>'karipap.jpg', 'title'=>'Karipap','offer'=>40, 'price'=>25),
	array('com'=>'Tawar2','code'=>2, 'pic'=>'maruku.jpg', 'title'=>'Maruku','offer'=>60, 'price'=>15),
	array('com'=>'Tawar3','code'=>3, 'pic'=>'masmello.jpg', 'title'=>'Mellow','offer'=>27, 'price'=>23),
	);
$gambar = URL . 'images/makanan ringan/';
if (!empty($result_p)):
	foreach($result_p as $key=>$value):
		echo "\r\t\t\t\t";
		$keterangan = $result_p[$key]['com'] .' menjual '. $result_p[$key]['title'];
				?><div class="thumbnail none1">
					<a class="example-image-link" href="<?php echo $gambar . $result_p[$key]['pic'] ?>" 
					data-lightbox="example-set1" title="<?php echo $keterangan ?>">
					<img src="<?php echo $gambar . $result_p[$key]['pic'] ?>" alt="..." 
					class="img-responsive" style="height:150px"></a>
					<h4><?php echo $result_p[$key]['title'] ?></h4>
					<div class="alert alert-danger">
						<strike>RM: <?php echo ringgit($result_p[$key]['offer']) ?></strike>
						<strong>RM: <?php echo ringgit($result_p[$key]['price']) ?></strong>
					</div>
				</div>      
<?php 
	endforeach;
endif; ?>
			</div>
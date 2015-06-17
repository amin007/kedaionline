			<div class="col-lg-12 col-md-12 col-sm-6 col-xs-12 none1">
			<h3 class="list-group-item-danger" align="center">Tawaran Istimewa</h3>
<?php
//$result_p = $db_handle->runQuery("SELECT * FROM product WHERE special='1' ORDER BY id ASC LIMIT 3");
$result_p = $this->tawaran;
$gambar = URL . 'images/makanan ringan/';
if (!empty($result_p)):
	foreach($result_p as $key=>$value):
		echo "\r\t\t\t\t";
		$keterangan = $result_p[$key]['com'] .' menjual '. $result_p[$key]['title'];
# tawaran dan harga
	$tawaran = ($result_p[$key]['offer']==0) ? null : 
		"\n\t\t\t\t\t\t" . '<strike>RM: ' 
		. ringgit($result_p[$key]['offer']) . '</strike>';
	$harga = ($result_p[$key]['price']==0) ? 
		"\n\t\t\t\t\t\t<strong>RM: " . ringgit(0) . '</strong>': 
		"\n\t\t\t\t\t\t<strong>RM: "
		. ringgit($result_p[$key]['price']) . '</strong>';
		if ($result_p[$key]['offer']==0):
			echo null;
		else: echo "\n\t\t\t\t"; 
			?><div class="thumbnail none1">
					<a class="example-image-link" href="<?php 
					echo $gambar . $result_p[$key]['pic'] ?>" 
					data-lightbox="example-set1" title="<?php echo $keterangan ?>">
					<img src="<?php echo $gambar . $result_p[$key]['pic'] ?>" alt="..." 
					class="img-responsive" style="height:150px"></a>
					<h4><?php echo $result_p[$key]['title'] ?></h4>
					<div class="alert alert-danger"><?php 
					echo $tawaran . $harga . "\n\t\t\t\t\t" ?></div>
				</div>      
<?php 
		endif;
	endforeach;
endif; 
?>			</div>
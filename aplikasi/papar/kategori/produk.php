<div class="col-md-12" style="border: 1px solid #DFDFD0; border-radius:2px" id="food"><!--1st Produk Terkini --><?php $produk = $this->produk;$gambar = URL . 'images/makanan ringan/';if (!empty($produk)) :	foreach($produk as $key=>$value):# tawaran dan harga	$tawaran = ($produk[$key]['offer']==0) ? null : 		"\n\t\t\t\t\t" . '<strike>RM: ' 		. ringgit($produk[$key]['offer']) . '</strike>';	$harga = ($produk[$key]['price']==0) ? 		"\n\t\t\t\t\t<strong>RM: " . ringgit(0) . '</strong>': 		"\n\t\t\t\t\t" . '<strong>RM: '		. ringgit($produk[$key]['price']) . '</strong>';?>	<div class="col-sm-6 col-md-4">		<div class="caption">			<h4 class="h4"><?php echo $produk[$key]['com'] ?></h4>		</div>		<div class="thumbnail thumbnail1">		<a class="example-image-link" href="<?php echo $gambar . $produk[$key]['pic']?>" data-lightbox="example-set" title="Klik kiri-kanan untuk tengok produk lain">		<img src="<?php echo $gambar . $produk[$key]['pic']?>" alt="..." class="img-responsive" style="height:150px"></a>			<div class="caption">				<h4><?php echo $produk[$key]['title'] ?></h4>				<div class="alert alert-info"><?php echo $tawaran . $harga  ?>				</div>			</div>		</div>	</div><?php 	endforeach;endif;?></div><!--end food contain-->
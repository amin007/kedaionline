<?php 
$link = URL . 'kategori/' . $this->kategori . '/'; 
$imej = URL . 'images/kategori/' . $this->gambarBesar; 
?>
<h1><?php echo $this->TajukKategoriMakanan ?></h1>

<div class="col-md-8">
	<img src="<?php echo $imej ?>" width="100%" style="max-height:340px" alt="<?php 
	echo $this->TajukKategoriMakanan ?>" class="img-thumbnail"/> 
	<!--page product-->
	<div class="col-md-12" align="center">
		<div class="pagination-wrap">
			<ul class="pagination">
				<li><a href="<?php echo $link ?>1" class='active'>1</a></li>
			</ul>
		</div>
	</div>
	<!--end page-->
<?php include 'produk.php'; ?>
</div><!--/ class="col-md-8" -->
<?php
$pesanan = array(
	array('class'=>'col-md-3','style'=>'border-right:1px solid #000', 'name'=>'Nama'),
	array('class'=>'col-md-2','style'=>'border-right:1px solid #000', 'name'=>'Kod'),
	array('class'=>'col-md-2','style'=>'border-right:1px solid #000', 'name'=>'Kuantiti'),
	array('class'=>'col-md-2','style'=>'border-right:1px solid #000', 'name'=>'Harga'),
	array('class'=>'col-md-3','style'=>null, 'name'=>'Tindakan'),	
);

if(isset($_SESSION["cart_item"]))
{   $item_total = 0; ?>	
			<div class="row alert alert-success"><?php
				if (!empty($pesanan)): foreach($pesanan as $key=>$value): echo "\r\t\t\t";
				?><div class="<?php echo $pesanan[$key]['class'] 
				?>" style="<?php echo $pesanan[$key]['style'] 
				?>"><strong><?php echo $pesanan[$key]['name']?></strong></div>
				<?php endforeach;	endif; ?>			
			</div>
<?php foreach ($_SESSION["cart_item"] as $item):?>
			<div class="row">
				<div class="col-md-3"><strong><?php echo $item['pic']; ?></strong></div>
				<div class="col-md-2"><?php echo $item['code']; ?></div>
				<div class="col-md-2"><?php echo $item['quantity']; ?></div>
				<div class="col-md-2">RM <?php echo $item['price']; ?></div>
				<div class="col-md-3"><a href="index.php?action=remove&code=<?php 
				echo $item['code']; ?>" class="btnRemoveAction">Remove Item</a>
				</div>
			</div><?php $item_total += ($item['price']*$item['quantity']);
	endforeach; ?>
	<hr />
	<div class="row">
		<div class="col-md-3 col-md-offset-8">
			<strong>Total:</strong> RM <?php echo $item_total; ?>
		</div>
	</div>				
  <?php
}
?>
<?php
$alamatPengguna = null;
$poskodPengguna = '84000'; //null;
$alamat = array(
	array('input-group-addon'=>'Alamat Pengguna','id'=>'alamat', 'name'=>'pengguna[alamat]', 'value'=>$alamatPengguna, 'placeholder'=>'Nama Anda'),
	array('input-group-addon'=>'Poskod','id'=>'poskod', 'name'=>'pengguna[poskod]', 'value'=>$poskodPengguna, 'placeholder'=>'Poskod'),
);
?><!-- Modal untuk daftar -->
<form action="<?php echo URL ?>pengguna/alamat" method="post" enctype="multipart/form-data" autocomplete="off">
	<div class="modal fade" id="alamat" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header alert-info">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 align="center" class="modal-title" id="myModalLabel">Daftar Akaun</h4>
		</div>	  
		<div class="modal-body">
		<?php
		if (!empty($alamat)):
			foreach($alamat as $key=>$value):
				echo "\r\t\t\t";
		?><div class="row">
			<div class="col-md-9">
				<div class="input-group">
					<div class="input-group-addon"><?php echo $alamat[$key]['input-group-addon'] ?> :</div>
					<input type="text" class="form-control" id="<?php echo $alamat[$key]['id'] 
					?>" name="<?php echo $alamat[$key]['name'] 
					?>" value="<?php echo $alamat[$key]['value'] 
					?>" placeholder="<?php echo $alamat[$key]['placeholder'] 
					?>" required autofocus>
				</div>
			</div>
			</div>
		<?php 
			endforeach;
		endif; ?>
		</div>
		<div class="modal-footer alert-info">
			<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
			<button type="submit" class="btn btn-primary">Hantar</button>
		</div>
	</div><!--/ modal-content -->
	</div><!--/ modal-dialog -->
	</div><!--/ modal fade -->
</form>
<!-- end Modal untuk daftar -->
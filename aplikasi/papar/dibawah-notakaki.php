<!-- Modal -->    
<?php
$daftarAkaun = array(
	array('input-group-addon'=>'Nama Pengguna','id'=>'username', 'name'=>'pengguna[username]', 'placeholder'=>'Nama Anda'),
	array('input-group-addon'=>'Email','id'=>'email', 'name'=>'pengguna[email]', 'placeholder'=>'Email Anda'),
	array('input-group-addon'=>'Kata Laluan','id'=>'password', 'name'=>'pengguna[password]', 'placeholder'=>'Kata Laluan'),
	array('input-group-addon'=>'Masuk Semula Kata Laluan','id'=>'password1', 'name'=>'pengguna[password1]', 'placeholder'=>'Masuk Semula Kata Laluan'),
);
?>
<form action="<?php echo URL ?>login/daftar" method="post" enctype="multipart/form-data">    
	<div class="modal fade" id="daftarAkaun" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header alert-info">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 align="center" class="modal-title" id="myModalLabel">Daftar Akaun</h4>
		</div>	  
		<div class="modal-body">
		<?php
		if (!empty($daftarAkaun)):
			foreach($daftarAkaun as $key=>$value):
				echo "\r\t\t\t";
		?><div class="row">
			<div class="col-md-9">
				<div class="input-group">
					<div class="input-group-addon"><?php echo $daftarAkaun[$key]['input-group-addon'] ?> :</div>
					<input type="text" class="form-control" id="<?php echo $daftarAkaun[$key]['id'] 
					?>" name="<?php echo $daftarAkaun[$key]['name'] 
					?>" placeholder="<?php echo $daftarAkaun[$key]['placeholder'] 
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
<!-- end Modal -->

<!-- Modal -->  
<?php
$loginMasuk = array(
	//array('input-group-addon'=>'Nama Pengguna','id'=>'username', 'name'=>'pengguna[username]', 'placeholder'=>'Nama Anda'),
	array('input-group-addon'=>'Email','id'=>'email', 'name'=>'pengguna[email]', 'placeholder'=>'Email Anda'),
	array('input-group-addon'=>'Kata Laluan','id'=>'password', 'name'=>'pengguna[password]', 'placeholder'=>'Kata Laluan'),
	//array('input-group-addon'=>'Masuk Semula Kata Laluan','id'=>'password1', 'name'=>'pengguna[password1]', 'placeholder'=>'Masuk Semula Kata Laluan'),
);
?>

<form action="<?php echo URL ?>login/masuk" method="post">    
	<div class="modal fade" id="logMasuk" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header alert-info">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 align="center" class="modal-title" id="myModalLabel">Log Masuk</h4>
		</div>      
		<div class="modal-body">
		<?php
		if (!empty($loginMasuk)):
			foreach($loginMasuk as $key=>$value):
				echo "\r\t\t\t";
		?><div class="input-group">
				<div class="input-group-addon"><?php echo $loginMasuk[$key]['input-group-addon'] ?> :</div>
				<input type="text" class="form-control" id="<?php echo $loginMasuk[$key]['id'] 
				?>" name="<?php echo $loginMasuk[$key]['name'] 
				?>" placeholder="<?php echo $loginMasuk[$key]['placeholder'] 
				?>" required autofocus>
			</div>
		<?php 
			endforeach;
		endif; ?>
		</div>
		<div class="modal-footer alert-info">
			<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
			<button type="submit" class="btn btn-primary">Teruskan</button>
		</div>
	</div><!--/ modal-content -->
	</div><!--/ modal-dialog -->
	</div><!--/ modal fade -->
</form>
<!-- end Modal -->
<!-- Modal untuk daftar -->
<form action="<?php echo URL ?>login/daftar" method="post" enctype="multipart/form-data" autocomplete="off">
	<div class="modal fade" id="daftarAkaun" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header alert-info">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 align="center" class="modal-title" id="myModalLabel">Daftar Akaun</h4>
		</div>	  
		<div class="modal-body"><?php
		if (!empty($this->daftarAkaun)):
			foreach($this->daftarAkaun as $key=>$value):
				echo "\r\t\t\t"; ?>
			<!-- div class="row">
			<div class="col-md-9" -->
				<div class="input-group">
					<div class="input-group-addon"><?php echo $this->daftarAkaun[$key]['input-group-addon'] ?> :</div>
					<input class="form-control" type="<?php echo $this->daftarAkaun[$key]['type'] 
					?>" id="<?php echo $this->daftarAkaun[$key]['id'] 
					?>" name="<?php echo $this->daftarAkaun[$key]['name'] 
					?>" placeholder="<?php echo $this->daftarAkaun[$key]['placeholder'] 
					?>" required autofocus>
				</div>
			<!-- /div><!-- / class="col-md-9" -->
			<!-- /div --><!-- / class="col-md-9" -->
		<?php 
			endforeach;
		endif; ?>
			<!-- div class="row">
			<div class="col-md-9" -->
				<div class="input-group">
					<div class="input-group-addon">Pembeli / Jurujual</div>
					<select class="form-control" name="pengguna[level]" id="level">
					<option value="ahli">Pembeli</option><option value="jurujual">Jurujual</option>
					</select>
				</div>
			<!-- /div><!-- / class="col-md-9" -->
			<!-- /div --><!-- / class="col-md-9" -->
		</div><!-- / class="modal-body" -->
		
		<div class="modal-footer alert-info">
			<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
			<button type="submit" class="btn btn-primary">Hantar</button>
		</div>
	</div><!--/ modal-content -->
	</div><!--/ modal-dialog -->
	</div><!--/ modal fade -->
</form>
<!-- end Modal untuk daftar -->
<!-- Modal untuk login -->
<form action="<?php echo URL ?>login/masuk" method="post" enctype="multipart/form-data" autocomplete="off">
	<div class="modal fade" id="logMasuk" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header alert-info">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 align="center" class="modal-title" id="myModalLabel">Log Masuk</h4>
		</div>      
		<div class="modal-body"><?php
		if (!empty($this->loginMasuk)):
			foreach($this->loginMasuk as $key=>$value):
				echo "\r\t\t\t";
		?><div class="input-group">
				<div class="input-group-addon"><?php echo $this->loginMasuk[$key]['input-group-addon'] ?> :</div>
				<input class="form-control" type="<?php echo $this->loginMasuk[$key]['type'] 
				?>" id="<?php echo $this->loginMasuk[$key]['id'] 
				?>" name="<?php echo $this->loginMasuk[$key]['name'] 
				?>" placeholder="<?php echo $this->loginMasuk[$key]['placeholder'] 
				?>" required autofocus>
			</div>
		<?php 
			endforeach;
		endif; ?>
		</div>
		<div class="modal-footer alert-info">
			<button type="button" class="btn btn-warning" data-dismiss="modal"
			data-toggle="modal" data-target="#ingatPassword">Ingat Password</button>
			<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
			<button type="submit" class="btn btn-primary">Teruskan</button>
		</div>
	</div><!--/ modal-content -->
	</div><!--/ modal-dialog -->
	</div><!--/ modal fade -->
</form>
<!-- end Modal untuk login -->
<!-- Modal untuk buat semula password -->
<form action="<?php echo URL ?>login/ingat" method="post" enctype="multipart/form-data" autocomplete="off">
	<div class="modal fade" id="ingatPassword" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header alert-info">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 align="center" class="modal-title" id="myModalLabel">Ingat Password</h4>
		</div>      
		<div class="modal-body"><?php
		if (!empty($this->ingatPassword)):
			foreach($this->ingatPassword as $key=>$value):
				echo "\r\t\t\t";
		?><div class="input-group">
				<div class="input-group-addon"><?php echo $this->ingatPassword[$key]['input-group-addon'] ?> :</div>
				<input class="form-control" type="<?php echo $this->ingatPassword[$key]['type'] 
				?>" id="<?php echo $this->ingatPassword[$key]['id'] 
				?>" name="<?php echo $this->ingatPassword[$key]['name'] 
				?>" placeholder="<?php echo $this->ingatPassword[$key]['placeholder'] 
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
<!-- end Modal untuk buat semula password -->
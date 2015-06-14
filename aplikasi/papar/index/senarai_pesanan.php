<!-- Modal -->  
<form action="#" method="post">    
	<div class="modal fade" id="myCart" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
    <div class="modal-content">
		<div class="modal-header alert-info">
			<button type="button" class="close" data-dismiss="modal" aria-label="Tutup"><span aria-hidden="true">&times;</span></button>
			<h4 align="center" class="modal-title" id="myModalLabel">Shopping Cart</h4>
		</div> 
		<div class="modal-body">
<?php require 'senarai_pesanan_jadual.php'; ?>
		</div>
		<div class="modal-footer alert-info">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModa2" data-dismiss="modal">Next</button>
		</div>	  
	</div><!--/ modal-content -->
	</div><!--/ modal-dialog -->
	</div><!--/ modal fade -->
</form>

<!-- end Modal -->

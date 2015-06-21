<?php
$senaraiParas = array('ahli','jurujual','pentadbir');
//$level = Sesi::get('levelPengguna');
# include fail berkaitan senaraiParas
if (in_array(Sesi::get('levelPengguna'),$senaraiParas))
{
	//echo '<div>semua</div>';
}
# semak setiap paras, include fail berkaitan paras
if (Sesi::get('levelPengguna')=='pentadbir'):
	//echo '<div>' . $paras . '</div>';
elseif (Sesi::get('levelPengguna')=='jurujual'):
	//echo '<div>' . $paras . '</div>';
elseif (Sesi::get('levelPengguna')=='ahli'):
	//echo '<div>' . $paras . '</div>';
	require 'borang/senarai_pesanan.php'; 
	require 'borang/senarai_status.php'; 
	require 'borang/senarai_alamatahli.php'; 
else:
	require 'borang/daftarahli.php'; 
endif;

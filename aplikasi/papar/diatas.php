<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php
/* style="background: url('<?php echo GAMBAR ?>') no-repeat center center fixed;background-size: cover;"*/
# papar title
echo Tajuk_Muka_Surat;
$dpt_url = dpt_url();
echo (empty($dpt_url[2])) ? null : '[' . $_GET['url'] . ']';
# untuk set icon bergambar
$troli = '<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>';
$semak = '<span class="glyphicon glyphicon-check" aria-hidden="true"></span>';
$daftar = '<span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span>';
$orang = '<span class="glyphicon glyphicon-user" aria-hidden="true"></span>';
$surat = '<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>';
$suistutup = '<span class="glyphicon glyphicon-off" aria-hidden="true"></span>';
$mangga = '<span class="glyphicon glyphicon-lock" aria-hidden="true"></span>';
$logmasuk = '<span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>';
$logkeluar = '<span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>';
$icon['Barcode'] = '<span class="glyphicon glyphicon-barcode" aria-hidden="true"></span>';
$icon['Filter'] = '<span class="glyphicon glyphicon-filter" aria-hidden="true"></span>';
$icon['Stats'] = '<span class="glyphicon glyphicon-stats" aria-hidden="true"></span>';
?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php
if (isset($this->css)):
	foreach ($this->css as $css):
		echo "\n";
?><link rel="stylesheet" href="<?php echo URL . 'aset/' . $css; ?>"><?php
	endforeach;
endif;
echo "\n"; ?>
<style type="text/css">
table.excel {
	border-style:ridge;
	border-width:1;
	border-collapse:collapse;
	font-family:sans-serif;
	font-size:11px;
}
table.excel thead th, table.excel tbody th {
	background:#CCCCCC;
	border-style:ridge;
	border-width:1;
	text-align: center;
	vertical-align: top;
}
table.excel tbody th { text-align:center; vertical-align: top; }
table.excel tbody td { vertical-align:bottom; }
table.excel tbody td 
{ 
	padding: 0 3px; border: 1px solid #aaaaaa;
	background:#ffffff;
}
</style>
</head>  
<body>
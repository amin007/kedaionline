<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php
//style="background: url('<?php echo GAMBAR ?>') no-repeat center center fixed;background-size: cover;"
// papar title
echo Tajuk_Muka_Surat;

$dpt_url = dpt_url();
echo (empty($dpt_url[2])) ? null : '[' . $_GET['url'] . ']';
?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php
$bootstrap = URL . 'aset/bootstrap-3.3.4-dist/';
$css_url = $bootstrap . 'css/';
$js_url  = $bootstrap . 'js/';
$ico_url = $bootstrap . 'img/';

require 'diatas-bootstrap.php';

if (isset($this->css)) 
{
	foreach ($this->css as $css)
	{
		echo "\n"; // '<link rel="stylesheet" type="text/css" href="' . . $css . '">';
?><link rel="stylesheet" href="<?php echo $css_url . $css ?>"><?php
	}
}
echo "\n";

?>
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
<ol class="breadcrumb">
	<li></li>
</ol>

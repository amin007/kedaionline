<?php

$kotak[0]='login_fancybox.txt'; 
$kotak[1]='login_colorbox.txt'; 
$login=$kotak[rand(0,1)];

$isi=$this->isi;

//include 'aset/am/' . $login;
$lokasi = 'http://' . $_SERVER['SERVER_NAME'] . '/private_html/bg/kakitangan/';
?>
<!-- ----------------------------------------------------------------------------------- -->
<table border="0" align="center">
<tr><td align="center" valign="top"  colspan=2>
<?php 
unset($pegawai);
$isi=null;
$pegawai = senarai_kakitangan();

foreach ($pegawai as $key => $nama)
{	
	$namaFE = ($nama=='amin') ? 'login/amin007' 
		: 'login_automatik/' . $nama;
	$isi.="\n\t" . '<a class="zoom" title="Assalamualaikum ' .
	ucwords($nama) . '" ' .	'href="index/' . $namaFE . '">' .
	"\n\t" . '<img src="' . $lokasi . $nama . '.jpg"></a>';
	
	$isi.=($key==3)? "<br>\n":"\n";
}
	echo $isi;
?>	
	</td></tr>
</table>
<!-- ----------------------------------------------------------------------------------- -->

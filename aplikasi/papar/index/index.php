<?php
//echo '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">';
//echo '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">';
//echo '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">';

$kotak[0]='login_fancybox.txt'; 
$kotak[1]='login_colorbox.txt'; 
$login=$kotak[rand(0,1)];

$isi=$this->isi;

include 'aset/am/' . $login;
$lokasi = 'http://' . $_SERVER['SERVER_NAME'] . '/private_html/bg/kakitangan/';
?>
<!-- ----------------------------------------------------------------------------------- -->
<table border="0" align="center">
<tr><td align="center" valign="top"  colspan=2>
	<a style="font-size: 20pt; text-decoration: overline underline; 
	background-color: #000000; color:#ffffff">Untuk <?php echo Tajuk_Muka_Surat ?></a>
	</td></tr>
<tr><td width="1000" align="center" valign="top">
	<a style="font-size: 20pt; text-decoration: overline underline; 
	background-color: #000000; color:#ffffff" class="zoom" 
	title="Apa Kabar Pentadbir" href="index/login/admin">Pentadbir</a>
	</td></tr>
<tr><td align="center" valign="top">
	<a style="font-size: 15pt; text-decoration: overline underline; 
	background-color: #000000; color:#ffffff">FE</a><?php 
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
	
	$isi.=($key==4)? "<br>\n":"\n";
}
	echo $isi;
?>	
	</td></tr>
</table>
<!-- ----------------------------------------------------------------------------------- -->

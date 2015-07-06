<?php

function cariInputBaru($medanKhas,$myTable,$key,$type,$data=null)
{	# istihar pembolehubah 
	$tabline = "\n\t\t\t"; //$tabline2 ="\n";
	//if ( in_array($key,array(...)) )
	
	if(in_array($key,$medanKhas))
		$input = cariInputKhas($tabline, $myTable, $key, $type, $data);
	else
		$input = cariInputBiasa($tabline, $myTable, $key, $type, $data);
	# papar input
	echo "\t$input";
}
function cariInputKhas($tabline, $myTable, $key, $type, $data)
{
	$name = 'name="' . $myTable . '[' . $key . ']"';
	$value = ($data==null) ? '' : ' value="' . $data . '"';
	$placeholder = null; //"$key=$data";
	$label = null; //htmlentities($name . $value . $placeholder);
	$label6 = 'class="col-sm-8"'; 
	$label4 = 'class="col-sm-2"';
	$tabline2 = "\n\t\t";

	if($key=='gambar_produk'):
		$lokasi = FAIL . 'images/produk/' . $data;
		$label = 'Gambar ' . $data;
		$papar = ($data==null) ? '' : '<img src="' . $lokasi . '" alt="'
			. $data . '" width="50%" height="50%">';
		$namaFail = 'name="' . $myTable . '"';
		$input = "<div $label6>$label" . $tabline
			   . '<div class="input-group input-group-sm">' . $tabline
			   . $papar . '<input type="file" id="uploadImage" ' . $namaFail
			   . ' onchange="PreviewImage();" />' . $tabline
			   . '<output id="list"></output>' . $tabline
			   . '</div>' . $tabline2 . '</div>'
			   . '';
	elseif($key=='poskod'):
		$msg = 'Lokasi<br>Poskod';
		$name1 = 'name="'.$myTable.'[poskod]"' . $value . $tabline;
		$inputText = $name1 . ' id="poskod" pattern="[0-9]*"' . $tabline;
	    $input = "<div $label6>$label" . $tabline
			   . '<div class="input-group input-group-sm">' . $tabline
			   . '<input type="text" ' . $inputText 
			   . ' class="form-control">' . $tabline
			   //. '<p id="lokasi2" class="form-control-static"></p>' . $tabline
			   //. '<p id="lokasi2" class="btn btn-info"></p>' . $tabline
			   . '<span id="lokasi2" class="input-group-addon btn-info">:</span>' . $tabline
			   . '</div>' . $tabline2 . '</div>'
			   . '';
	else:endif;
	# pulang nilai $input
	return $input;
}

function cariInputBiasa($tabline, $myTable, $key, $type, $data)
{
	$name = 'name="' . $myTable . '[' . $key . ']"';
	$value = ($data==null) ? '' : ' value="' . $data . '"';
	$placeholder = null; //"$key=$data";
	$label = null; //htmlentities($name . $value . $placeholder);
	$label6 = 'class="col-sm-8"'; 
	$label4 = 'class="col-sm-2"';
	$tabline2 = "\n\t\t";

	if(in_array($type,array('text')))
	{#kod utk textarea
	    $input = "<div $label6>$label" . $tabline
			   . '<textarea ' . $name . ' rows="4" ' . $tabline
			   . ' class="form-control">' . $data 
			   . '</textarea>'  . $tabline
			   . (($data==null)? '' : '<pre>' . $data . '</pre>' . $tabline)
			   . '</div>' . $tabline2 . '</div>'
			   . '';
	}
	elseif(in_array($type,array('varchar')))
	{
	    $input = "<div $label6>$label" . $tabline
			   . '<div class="input-group input-group-sm">' . $tabline
			   . '<span class="input-group-addon">' . $data . '</span>' . $tabline
			   . '<input type="text" ' . $name . $value
			   //. ' placeholder="' . $placeholder . '"'
			   . ' class="form-control">' . $tabline
			   //. '<span class="input-group-addon">' . $type . '</span>'
			   . '</div>' . $tabline2 . '</div>'
			   . '';
	}
	elseif(in_array($type,array('int','decimal')))
	{
		if ($key=='berat') $papar = $data . ' gm';
		elseif ($key=='harga') $papar = 'RM ' . $data;
		elseif ($key=='potongan') $papar = 'RM ' . $data;
		else $papar = $data;
	    $input = "<div $label4>$label" . $tabline
			   . '<div class="input-group input-group-sm">' . $tabline
			   . '<span class="input-group-addon">' . $papar . '</span>' . $tabline
			   . '<input type="text" ' . $name . $value
			   . ' class="form-control">' . $tabline 
			   . '</div>' . $tabline2 . '</div>'
			   . '';
	}
	elseif(in_array($type,array('password')))
	{
		$msg = 'Jika ingin tukar';
		$name1 = 'name="'.$myTable.'[kataLaluan]" ' . $tabline;
		$inputText = $name1 . ' placeholder="Password Baru" ';
		$name2 = 'name="'.$myTable.'[kataLaluan2]" ' . $tabline;
		$inputText2 = $name2 . ' placeholder="Ulang Password Baru" ';
	    $input = "<div $label6>" . $tabline
			   . '<div class="input-group input-group-sm">' . $tabline
			   . '<span class="input-group-addon">' . $msg . '</span>' . $tabline
			   . '<input type="text" ' . $inputText . ' class="form-control">' . $tabline
			   . '<input type="text" ' . $inputText2 . ' class="form-control">' . $tabline
			   . '</div>' . $tabline2 . '</div>'
			   . '';
	}	
	elseif(in_array($type,array('submit')))
	{
		$inputText2 = 'name="cari" placeholder="Bil Item" ';
		$inputSubmit = 'name="hantar" value="Hantar"' . '';
		$label = null; //htmlentities($inputText2 . $inputSubmit);
	    $input = "<div $label6>$label" . $tabline
			   . '<div class="input-group input-group-sm">' . $tabline
			   //. '<span class="input-group-addon">' . $type . '</span>' . $tabline
			   . '<input type="text" ' . $inputText2
			   . ' class="form_control">' . $tabline
			   . '<input type="submit" ' . $inputSubmit 
			   . ' class="form_control">' . $tabline
			   . '</div>' . $tabline2 . '</div>'
			   . '';
	}
	else
	{
	    $input = $label . $tabline;
	}
	# pulang nilai $input
	return $input;
}

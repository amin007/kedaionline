<?php

class Index_Tanya extends Tanya 
{
	public function __construct() 
	{
		//parent::__construct();
	}

	private function dimana($carian)
	{
		$where = null;
		if($carian==null || $carian=='' || empty($carian) ):
			$where .= null;
		else:
			foreach ($carian as $key=>$value)
			{
				   $atau = isset($carian[$key]['atau'])  ? $carian[$key]['atau'] . ' ' : null;
				  $medan = isset($carian[$key]['medan']) ? $carian[$key]['medan']      : null;
				    $fix = isset($carian[$key]['fix'])   ? $carian[$key]['fix']        : null;			
				$cariApa = isset($carian[$key]['apa'])   ? $carian[$key]['apa']        : null;
				//echo "\r$key => ($fix) $atau $medan = '$apa'  ";
				
				if ($cariApa==null) 
					$where .= " $atau`$medan` is null\r";
				elseif($fix=='xnull')
					$where .= " $atau`$medan` is not null \r";
				elseif($fix=='x=')
					$where .= " $atau`$medan` = '$cariApa'\r";
				elseif($fix=='x!=')
					$where .= " $atau`$medan` != '$cariApa'\r";
				elseif($fix=='like')
					$where .= " $atau`$medan` like '%$cariApa%'\r";	
				elseif($fix=='xlike')
					$where .= " $atau`$medan` not like '%$cariApa%'\r";	
				elseif($fix=='like%')
					$where .= " $atau`$medan` like '$cariApa%'\r";	
				elseif($fix=='xlike%')
					$where .= " $atau`$medan` not like '$cariApa%'\r";	
				elseif($fix=='%like')
					$where .= " $atau`$medan` like '%$cariApa'\r";	
				elseif($fix=='x%like')
					$where .= " $atau`$medan` not like '%$cariApa'\r";	
				elseif($fix=='xin')
					$where .= " $atau`$medan` not in $cariApa\r";						
				elseif($fix=='khas')
					$where .= " $atau`$medan` not like $cariApa\r";	
				elseif($fix=='khas2')
					$where .= " $atau`$medan` REGEXP CONCAT('(^| )','',$cariApa)\r";	
				elseif($fix=='xkhas2')
					$where .= " $atau`$medan` NOT REGEXP CONCAT('(^| )','',$cariApa)\r";	
				elseif($fix=='khas3')
					$where .= " $atau`$medan` REGEXP CONCAT('[[:<:]]',$cariApa,'[[:>:]]')\r";	
				elseif($fix=='xkhas3')
					$where .= " $atau`$medan` NOT REGEXP CONCAT('[[:<:]]',$cariApa,'[[:>:]]')\r";	
			}
		endif;
	
		return $where;
	
	}
	
	private function dibawah($carian)
	{
		$susun = null;
		if($carian==null || empty($carian) ):
			$susun .= null;
		else:
			foreach ($carian as $key=>$cari)
			{
				$kumpul = isset($carian['kumpul'])? $carian['kumpul'] : null;
				 $order = isset($carian['susun']) ? $carian['susun']  : null;
				  $dari = isset($carian['dari'])  ? $carian['dari']   : null;
				   $max = isset($carian['max'])   ? $carian['max']    : null;
				
				if ($kumpul!=null)  $susun = " GROUP BY concat('%',$kumpul,'%')\r";
				elseif($order!=null)$susun = " ORDER BY $order\r";
				elseif($dari!=null) $susun = " LIMIT $dari";	
				elseif($max!=null)  $susun .= ",$max\r";
			}
		endif;
		
		return $susun;
	
	}
	
	public function cariSemuaData($myTable, $medan, $carian = null, $susun = null)
	{
		$sql = 'SELECT ' . $medan . ' FROM ' . $myTable 
			 . $this->dimana($carian)
			 . $this->dibawah($susun)
			 . '';
		
		//echo htmlentities($sql) . '<br>';
		$result = $this->db->selectAll($sql);
		//echo json_encode($result);
		
		return $result;
	}

	public function cariSatuSahaja($myTable, $medan, $carian)
	{
		$sql = 'SELECT ' . $medan . ' FROM ' . $myTable . $this->dimana($carian);
		
		//echo htmlentities($sql) . '<br>';
		$result = $this->db->select($sql);
		//echo json_encode($result);
		
		return $result;
	}
	
	public function ubahSimpan($data, $myTable, $medanID)
	{
		//echo '<pre>$data->', print_r($data, 1) . '</pre>';
		$senarai = null;
		
		foreach ($data as $medan => $nilai)
		{
			//$postData[$medan] = $nilai;
			if ($medan == $medanID)
				$cariID = $medan;
			elseif ($medan != $medanID)
				$senarai[] = ($nilai==null) ? " `$medan`=null" : " `$medan`='$nilai'"; 
		}
		
		$senaraiData = implode(",\r",$senarai);
		$where = "`$cariID` = '{$data[$cariID]}' ";
		
		# set sql
		$sql = " UPDATE `$myTable` SET \r$senaraiData\r WHERE $where";
		//echo '<pre>$sql->', print_r($sql, 1) . '</pre>';
		$this->db->update($sql);
	}

	public function soal($myTable = null, $medan = null, $carian = null, $susun = null)
	{
		// senarai makanan
		$produk = array(
			array('com'=>$carian . '1','code'=>1, 'pic'=>'karipap.jpg', 'title'=>'Karipap','offer'=>40, 'price'=>25),
			array('com'=>$carian . '2','code'=>2, 'pic'=>'maruku.jpg', 'title'=>'Maruku','offer'=>60, 'price'=>15),
			array('com'=>$carian . '3','code'=>3, 'pic'=>'masmello.jpg', 'title'=>'Mellow','offer'=>27, 'price'=>23),
		);
	
		return $produk;
	}
	
	public function tawaran($myTable = null, $medan = null, $carian = null, $susun = null)
	{
		# sql => "SELECT * FROM product WHERE special='1' ORDER BY id ASC LIMIT 3"
		// senarai makanan
		$produk = array(
			array('com'=>'Tawar1','code'=>1, 'pic'=>'karipap.jpg', 'title'=>'Karipap','offer'=>40, 'price'=>25),
			array('com'=>'Tawar2','code'=>2, 'pic'=>'maruku.jpg', 'title'=>'Maruku','offer'=>60, 'price'=>15),
			array('com'=>'Tawar3','code'=>3, 'pic'=>'masmello.jpg', 'title'=>'Mellow','offer'=>27, 'price'=>23),
		);
	
		return $produk;
	}
	
	public function terkini($myTable = null, $medan = null, $carian = null, $susun = null)
	{
		# sql => SELECT * FROM product ORDER BY id ASC LIMIT 9
		// senarai makanan
		$produk = array(
			array('com'=>'Kini1','code'=>1, 'pic'=>'karipap.jpg', 'title'=>'Karipap','offer'=>40, 'price'=>25),
			array('com'=>'Kini2','code'=>2, 'pic'=>'maruku.jpg', 'title'=>'Maruku','offer'=>60, 'price'=>15),
			array('com'=>'Kini3','code'=>3, 'pic'=>'masmello.jpg', 'title'=>'Mellow','offer'=>0, 'price'=>23),
		);
		return $produk;
	}

	public function terlaris($myTable = null, $medan = null, $carian = null, $susun = null)
	{
		# sql => SELECT * FROM product WHERE best_sell ='1' LIMIT 9
		// senarai makanan
		$produk = array(
			array('com'=>'Laris1','code'=>1, 'pic'=>'kuih4.jpg', 'title'=>'Kuih4','offer'=>30, 'price'=>25),
			array('com'=>'Laris2','code'=>3, 'pic'=>'kuih5.jpg', 'title'=>'Kuih5','offer'=>20, 'price'=>17),
			array('com'=>'Laris3','code'=>3, 'pic'=>'belacan.jpg', 'title'=>'Belacan','offer'=>17, 'price'=>5),
			array('com'=>'Laris1','code'=>4, 'pic'=>'karipap.jpg', 'title'=>'Karipap','offer'=>40, 'price'=>25),
			array('com'=>'Laris2','code'=>5, 'pic'=>'maruku.jpg', 'title'=>'Maruku','offer'=>60, 'price'=>15),
			array('com'=>'Laris3','code'=>6, 'pic'=>'masmello.jpg', 'title'=>'Mellow','offer'=>27, 'price'=>23),	
		);
		return $produk;
	}

//*/
}
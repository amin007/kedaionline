<?php

class Login_Tanya extends Tanya
{
	public function __construct()
	{
		parent::__construct();
	}
	
	function semakid($email = null,$password = null)
	{
		$semakLogin = $this->db->prepare("
			SELECT namapenuh,namaPengguna,kataLaluan,level,email 
			FROM daftarmasuk WHERE 
			email = :email AND kataLaluan = :password");
		
		$semakLogin->execute(array(
			':email' => $email,
			':password' => Hash::rahsia('md5', $password)
			//':password' => Hash::create('sha256', $password, HASH_PASSWORD_KEY)
		));
		
		//$semakLogin->debugDumpParams(); # semak $sth->debugDumpParams()
		$data = $semakLogin->fetch(); # dapatkan medan terlibat
		$kira = $semakLogin->rowCount(); # kira jumlah data
		//echo ' | $kira=' . $kira;
		if ($kira == 1) # login berjaya 
			$this->ruangtamu($kira,$data);
		else # login gagal
			header('location:' . URL . 'login/salah');	
		//*/		
	}
	
	function ruangtamu($kira = null,$data = null)
	{
		Sesi::init(); # setkan $_SESSION utk 
		# namapenuh,namaPengguna,kataLaluan,level,email
		Sesi::set('namaPengguna', $data['namaPengguna']);
		Sesi::set('namaPenuh', $data['namapenuh']);
		Sesi::set('levelPengguna', $data['level']);
		Sesi::set('email', $data['email']);
		Sesi::set('loggedIn', true);
		header('location:' . URL . 'ruangtamu');
		//echo '<pre>$data->'; print_r($data) . '</pre>| ';
	}
	
	public function daftarID($data, $myTable, $medanID= null)
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
		//$where = "`$cariID` = '{$data[$cariID]}' ";
		
		# set sql
		$sql = " INSERT `$myTable` SET \r$senaraiData";
		//echo '<pre>$sql->', print_r($sql, 1) . '</pre>';
		//$this->db->insert($sql);
		$this->db->insertOld($myTable, $data);
		header('location:' . URL . 'index/daftarahli');
	}

	public function ingatID($data, $myTable, $medanID=null)
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
		//$this->db->update($sql);
		$this->db->updateOld($myTable, $data, $where);
		header('location:' . URL . 'index/tukarpassword');
	}

//*/
}
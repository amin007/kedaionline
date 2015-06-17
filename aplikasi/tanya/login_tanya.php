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
			$this->pergi($kira,$data);
		else # login gagal
			header('location:' . URL . 'login/salah');	
		//*/		
	}
	
	function pergi($kira = null,$data = null)
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
//*/
}
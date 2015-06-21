<?php

class Login extends Kawal 
{

	function __construct() 
	{
		parent::__construct();
        Kebenaran::kawalMasuk();
	}
	
	public function index() 
	{	
		// Set pemboleubah utama
		$this->papar->gambar=gambar_latarbelakang(null);
		// pergi papar kandungan
		$this->papar->menuatas = 'tak';
		$this->papar->TajukBesar = 'Sila Login';
		$this->papar->baca('login/index');
	}
	
	public function papar() 
	{	
		// Set pemboleubah utama
		$this->papar->gambar=gambar_latarbelakang(null);
		// pergi papar kandungan
		$this->papar->menuatas = 'ya';
		$this->papar->TajukBesar = 'Halaman/Ruangtamu';
		$this->papar->baca('login/papar');
	}

	public function gambar() 
	{	
		// Set pemboleubah utama
		$this->papar->gambar=gambar_latarbelakang(null);
		// pergi papar kandungan
		$this->papar->menuatas = 'ya';
		$this->papar->TajukBesar = 'Halaman/Gambar';
		$this->papar->baca('login/gambar');
	}

	function daftar()
	{
        $posmen = array();
		$semak = array('pengguna');
		# semak data $_POST
		foreach ($_POST as $myTable => $value)
			if ( in_array($myTable,$semak) )
				foreach ($value as $kekunci => $papar)
					$posmen[$kekunci] = bersih($papar);
					
		//echo '<pre>'; print_r($_POST) . '</pre>';
		//echo '<pre>$posmen='; print_r($posmen) . '</pre>';
		# semak password sama tak
		if ($posmen['kataLaluan'] == $posmen['password2']):
			unset($posmen['password2']);
			$posmen['kataLaluan'] = Hash::rahsia('md5', $posmen['kataLaluan']);
			//echo '<pre>$posmen lepas Hash::rahsia()='; print_r($posmen) . '</pre>';
			$this->tanya->daftarID($posmen, $jadual = 'daftarmasuk');
		else:
			echo 'password tidak sama';
		endif;
	}
	
	function ingat()
	{
        $posmen = array();
		$semak = array('pengguna');
		# semak data $_POST
		foreach ($_POST as $myTable => $value)
			if ( in_array($myTable,$semak) )
				foreach ($value as $kekunci => $papar)
					$posmen[$kekunci] = bersih($papar);
					
		//echo '<pre>'; print_r($_POST) . '</pre>';
		//echo '<pre>$posmen='; print_r($posmen) . '</pre>';
		# semak password sama tak
		if ($posmen['kataLaluan'] == $posmen['password2']):
			unset($posmen['password2']);
			$posmen['kataLaluan'] = Hash::rahsia('md5', $posmen['kataLaluan']);
			//echo '<pre>$posmen lepas Hash::rahsia()='; print_r($posmen) . '</pre>';
			$this->tanya->ingatID($posmen, $jadual = 'daftarmasuk', $medanID = 'email');
		else:
			echo 'password tidak sama';
		endif;
	}

	function masuk()
	{
		# semak kod
		/*echo '<pre>$_POST->'; print_r($_POST) . '</pre>| ';
		echo 'Kod:' . Hash::rahsia('md5', $_POST['pengguna']['kataLaluan']) . ': ';
		//*/
		# set pembolehubah
		$email = bersih($_POST['pengguna']['email']);
		$password = bersih($_POST['pengguna']['kataLaluan']);
		# masuj ke pangkalan data
		$this->tanya->semakid($email,$password);
	}
	
	function semakid()
	{
		$this->tanya->semakid();
	}
	
	function salah()
	{
		$this->papar->mesej = 'Ada masalah pada user dan password';

		// Set pemboleubah utama
		$this->papar->sesat='Enjin Carian Ekonomi - Sesat';

		// pergi papar kandungan
		$this->papar->baca('index/salah');
	}
//*/
}
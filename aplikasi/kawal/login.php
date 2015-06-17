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
		echo '<pre>'; print_r($_POST) . '</pre>';
		//$this->tanya->semakid();
	}
	
	function masuk()
	{
		# semak kod
		/*echo '<pre>$_POST->'; print_r($_POST) . '</pre>| ';
		echo 'Kod:' . Hash::rahsia('md5', $_POST['pengguna']['password']) . ': ';
		//*/
		# set pembolehubah
		$email = bersih($_POST['pengguna']['email']);
		$password = bersih($_POST['pengguna']['password']);
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
		$this->papar->isi='';

		// pergi papar kandungan
		$this->papar->baca('index/salah');
	}

}
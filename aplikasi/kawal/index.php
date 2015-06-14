<?php

class Index extends Kawal 
{

	function __construct() 
	{
		parent::__construct();
        Kebenaran::kawalMasuk();

        $this->papar->js = array(
            //'bootstrap.js',
            'bootstrap-datepicker.js',
            'bootstrap-datepicker.ms.js',
            //'bootstrap-editable.min.js',
			//'bootstrap-lightbox.js'
			'../../js/function.js',
			'../../js/pwd.js',
			'../../lightbox/js/lightbox-2.6.min.js',);
        $this->papar->css = array(
			'bootstrap-datepicker.css',
			'bootstrap-editable.css',
			'../../css/navbar.css',
			'../../css/style.css',
			'../../lightbox/css/lightbox.css',);
		
	}
	
	function index() 
	{
		// set latarbelakang
		$this->papar->gambar=gambar_latarbelakang('../../');
		$this->papar->isi='';
		$this->papar->senaraiIP = dpt_ip(); # dapatkan senarai IP yang dibenarkan
		$this->papar->ip = $ip = $_SERVER['REMOTE_ADDR'];
		$this->papar->ip2 = substr($ip,0,10);
		$this->papar->hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
		$this->papar->server = $_SERVER['SERVER_NAME'];

		// pergi papar kandungan
		$this->papar->baca('index/index'); // untuk twitter bootstrap
		//$this->papar->baca('index/index', 1 ); // tanpa twitter bootstrap
		//$this->papar->baca('index/index', 'mobile');
	}
	
	function login($user) 
	{
		$this->papar->nama=$user; # dapatkan nama pengguna
		$this->papar->IP=dpt_ip(); # dapatkan senarai IP yang dibenarkan
		// pergi papar kandungan
		$this->papar->baca('index/login');
	}

	function login_automatik($user) 
	{
		$this->papar->nama=$user; # dapatkan nama pengguna
		$this->papar->IP=dpt_ip(); # dapatkan senarai IP yang dibenarkan
		// pergi papar kandungan
		$this->papar->baca('index/login_automatik');
	}

	function gambar() 
	{
		// pergi papar kandungan
		$this->papar->baca('index/gambar3'); // untuk twitter bootstrap
		//$this->papar->baca('index/gambar3', 1 ); // tanpa twitter bootstrap
		//$this->papar->baca('index/gambar3', 'mobile');
	}

//*/	
}
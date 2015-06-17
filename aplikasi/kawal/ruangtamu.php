<?php

class Ruangtamu extends Kawal 
{

	function __construct() 
	{
		parent::__construct();
        Kebenaran::kawalKeluar();

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

		$this->papar->menuatas = 'ya';
	}
	
	function index() 
	{	
		// Set pemboleubah utama
		$this->papar->pegawai = senarai_kakitangan();
		$this->papar->tajuk = 'Ruangtamu';
		// pergi papar kandungan
		$this->papar->baca('ruangtamu/index'); // untuk twitter bootstrap
		//$this->papar->baca('ruangtamu/index', 1); // tanpa twitter bootstrap
		//$this->papar->baca('ruangtamu/index', 'mobile');
		//$this->papar->baca('mobile/mobile');
	}
	
	function menu() 
	{	
		// Set pemboleubah utama
		$this->papar->pegawai = senarai_kakitangan();
		$this->papar->tajuk = 'Menu';
		// pergi papar kandungan
		$this->papar->baca('mobile/mobile');
	}

	function logout()
	{
		//echo '<pre>sebelum:'; print_r($_SESSION) . '</pre>';
		Sesi::destroy();
		header('location: ' . URL);
		//exit;
	}
	
	function xhrInsert()
	{
		$this->tanya->xhrInsert();
	}
	
	function xhrGetListings()
	{
		$this->tanya->xhrGetListings();
	}
	
	function xhrDeleteListing()
	{
		$this->tanya->xhrDeleteListing();
	}
//*/
}
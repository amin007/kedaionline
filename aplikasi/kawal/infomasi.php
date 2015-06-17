<?php

class Infomasi extends Kawal 
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
		// pergi papar kandungan
		$this->papar->baca('infomasi/tentang'); // untuk twitter bootstrap
		//$this->papar->baca('infomasi/tentang', 1 ); // tanpa twitter bootstrap
		//$this->papar->baca('infomasi/tentang', 'mobile');
	}
	
	function hubungi() 
	{
		// pergi papar kandungan
		$this->papar->baca('infomasi/hubungi'); // untuk twitter bootstrap
		//$this->papar->baca('infomasi/hubungi', 1 ); // tanpa twitter bootstrap
		//$this->papar->baca('infomasi/hubungi', 'mobile');
	}

//*/	
}
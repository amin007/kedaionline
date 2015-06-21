<?php

class Ruangtamu extends Kawal 
{

	function __construct() 
	{
		parent::__construct();
        Kebenaran::kawalKeluar();

        $this->papar->js = array(
			//'bootstrap-datepicker.js','bootstrap-datepicker.ms.js','bootstrap-editable.min.js','bootstrap-lightbox.js'
			/*'aset/bootstrap-3.3.4-dist/js/bootstrap.js', # untuk muka depan sahaja
			'js/function.js','js/pwd.js','lightbox/js/lightbox-2.6.min.js',# untuk muka depan sahaja //*/
			'satu/js/excanvas.min.js', 'satu/js/chart.min.js', 'satu/js/bootstrap.js', 'satu/js/base.js', # menu satu
			);
        $this->papar->css = array(
			//'bootstrap-datepicker.css','bootstrap-editable.css',
			/*'aset/bootstrap-3.3.4-dist/css/bootstrap.css', # untuk muka depan sahaja
			'css/navbar.css','css/style.css','lightbox/css/lightbox.css',# untuk muka depan sahaja //*/		
			'satu/css/bootstrap.min.css', 'satu/css/bootstrap-responsive.min.css', # menu satu
			'satu/css/font-awesome.css', 'satu/css/style.css', 'satu/css/pages/reports.css',# menu satu
			);

		$this->papar->menuatas = 'ya';
	}
	
	function index() 
	{	
		//echo '<pre>sebelum:'; print_r($_SESSION) . '</pre>';
		# Set pemboleubah utama
		$this->papar->tajuk = 'Ruangtamu';
		# pergi papar kandungan
		if (Sesi::get('levelPengguna')=='pentadbir')
			$this->papar->baca('ruangtamu/pentadbir'); // untuk twitter bootstrap
		elseif (Sesi::get('levelPengguna')=='jurujual')
			$this->papar->baca('ruangtamu/jurujual'); // untuk twitter bootstrap
		//elseif (Sesi::get('levelPengguna')=='ahli')
		else $this->papar->baca('ruangtamu/pembeli'); // untuk twitter bootstrap

		//$this->papar->baca('ruangtamu/index'); // untuk twitter bootstrap
		//$this->papar->baca('ruangtamu/index', 1); // tanpa twitter bootstrap
		//$this->papar->baca('ruangtamu/index', 'mobile');
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
//*/
}
<?php

class Kategori extends Kawal 
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
		# set pembolehubah 
		$this->papar->TajukKategoriMakanan = 'Semua Makanan';
		$this->papar->kategori = '/';
		$this->papar->gambarBesar = 'semua.makanan.jpg';
		# masukkan tatasususunan dari Tanya
		$this->papar->tawaran = $this->tanya->tawaran(
			$myTable = null, $medan = null, 
			$carian = null, $susun = null);
		$this->papar->produk = $this->tanya->soal(
			$myTable = null, $medan = null, 
			$carian = $this->papar->TajukKategoriMakanan, 
			$susun = null);		
		# semak tatasusunan $this->papar->produk
		//echo '<pre>$this->papar->tawaran->'; print_r($this->papar->tawaran) . '</pre>';
		//echo '<pre>$this->papar->produk->'; print_r($this->papar->produk) . '</pre>';
		# pergi papar kandungan
		$this->papar->baca('kategori/index'); // untuk twitter bootstrap
		//$this->papar->baca('kategori/index', 1 ); // tanpa twitter bootstrap
		//$this->papar->baca('kategori/index', 'mobile');
	}
	
	function carian()
	{
		# semak $_POST
		echo '<pre>$_POST->'; print_r($_POST) . '</pre>';
		# set pembolehubah
		# pergi papar kandungan
		//$this->papar->baca('kategori/carian'); // untuk twitter bootstrap
		//$this->papar->baca('kategori/carian', 1 ); // tanpa twitter bootstrap
		//$this->papar->baca('kategori/carian', 'mobile');
	}
	
	function makanan($ringan = null) 
	{
		# set pembolehubah 
		$this->papar->TajukKategoriMakanan = 'Makanan Ringan';
		$this->papar->kategori = 'makanan/ringan';
		$this->papar->gambarBesar = 'makanan.ringan.jpg';
		# masukkan tatasususunan dari Tanya
		$this->papar->tawaran = $this->tanya->tawaran(
			$myTable = null, $medan = null, 
			$carian = null, $susun = null);
		$this->papar->produk = $this->tanya->soal(
			$myTable = null, $medan = null, 
			$carian = $this->papar->TajukKategoriMakanan, 
			$susun = null);		
		# semak tatasusunan $this->papar->produk
		//echo '<pre>$this->papar->tawaran->'; print_r($this->papar->tawaran) . '</pre>';
		//echo '<pre>$this->papar->produk->'; print_r($this->papar->produk) . '</pre>';
		# pergi papar kandungan
		$this->papar->baca('kategori/index'); // untuk twitter bootstrap
		//$this->papar->baca('kategori/makananringan'); // untuk twitter bootstrap
		//$this->papar->baca('kategori/makananringan', 1 ); // tanpa twitter bootstrap
		//$this->papar->baca('kategori/makananringan', 'mobile');
	}
	
	function kuih($tradisional = null)
	{
		# set pembolehubah 
		$this->papar->TajukKategoriMakanan = 'Kuih Tradisional';
		$this->papar->kategori = 'kuih/tradisional';
		$this->papar->gambarBesar = 'kuih.tradisional.jpg';
		# masukkan tatasususunan dari Tanya
		$this->papar->tawaran = $this->tanya->tawaran(
			$myTable = null, $medan = null, 
			$carian = null, $susun = null);
		$this->papar->produk = $this->tanya->soal(
			$myTable = null, $medan = null, 
			$carian = $this->papar->TajukKategoriMakanan, 
			$susun = null);		
		# semak tatasusunan $this->papar->produk
		//echo '<pre>$this->papar->tawaran->'; print_r($this->papar->tawaran) . '</pre>';
		//echo '<pre>$this->papar->produk->'; print_r($this->papar->produk) . '</pre>';
		# pergi papar kandungan
		$this->papar->baca('kategori/index'); // untuk twitter bootstrap
		//$this->papar->baca('kategori/kuihtradisional'); // untuk twitter bootstrap
		//$this->papar->baca('kategori/kuihtradisional', 1 ); // tanpa twitter bootstrap
		//$this->papar->baca('kategori/kuihtradisional', 'mobile');
	}
	
	function sos($pencicah = null)
	{
		# set pembolehubah 
		$this->papar->TajukKategoriMakanan = 'Sos Pencicah';
		$this->papar->kategori = 'sos/pencicah';
		$this->papar->gambarBesar = 'sos.pencicah.jpg';
		# masukkan tatasususunan dari Tanya
		$this->papar->tawaran = $this->tanya->tawaran(
			$myTable = null, $medan = null, 
			$carian = null, $susun = null);
		$this->papar->produk = $this->tanya->soal(
			$myTable = null, $medan = null, 
			$carian = $this->papar->TajukKategoriMakanan, 
			$susun = null);		
		# semak tatasusunan $this->papar->produk
		//echo '<pre>$this->papar->tawaran->'; print_r($this->papar->tawaran) . '</pre>';
		//echo '<pre>$this->papar->produk->'; print_r($this->papar->produk) . '</pre>';
		# pergi papar kandungan
		$this->papar->baca('kategori/index'); // untuk twitter bootstrap
		//$this->papar->baca('kategori/sospencecah'); // untuk twitter bootstrap
		//$this->papar->baca('kategori/sospencecah', 1 ); // tanpa twitter bootstrap
		//$this->papar->baca('kategori/sospencecah', 'mobile');
	}
	
	function pes($makanan = null)
	{
		# set pembolehubah 
		$this->papar->TajukKategoriMakanan = 'Pes Makanan';
		$this->papar->kategori = 'pes/makanan';
		$this->papar->gambarBesar = 'pes.makanan.jpg';
		# masukkan tatasususunan dari Tanya
		$this->papar->tawaran = $this->tanya->tawaran(
			$myTable = null, $medan = null, 
			$carian = null, $susun = null);
		$this->papar->produk = $this->tanya->soal(
			$myTable = null, $medan = null, 
			$carian = $this->papar->TajukKategoriMakanan, 
			$susun = null);		
		# semak tatasusunan $this->papar->produk
		//echo '<pre>$this->papar->tawaran->'; print_r($this->papar->tawaran) . '</pre>';
		//echo '<pre>$this->papar->produk->'; print_r($this->papar->produk) . '</pre>';
		# pergi papar kandungan
		$this->papar->baca('kategori/index'); // untuk twitter bootstrap
		//$this->papar->baca('kategori/pesmakanan'); // untuk twitter bootstrap
		//$this->papar->baca('kategori/pesmakanan', 1 ); // tanpa twitter bootstrap
		//$this->papar->baca('kategori/pesmakanan', 'mobile');
	}

//*/	
}
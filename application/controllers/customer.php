<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {


	public function index()
	{
		$this->load->view('customer/templatescus');
	}
	public function shopcart()
	{
		$this->load->view('customer/home');
	}
	public function listprod()
	{
		$this->load->view('customer/listproduk');
	}
	public function gridprod()
	{
		$this->load->view('customer/gridproduk');
	}
	public function three()
	{
		$this->load->view('customer/threecolomn');
	}
	public function four()
	{
		$this->load->view('customer/fourcolomn');
	}
	public function general()
	{
		$this->load->view('customer/konten');
	}
	public function detprod()
	{
		$this->load->view('customer/detproduk');
	}
	public function prod()
	{
		$this->load->view('customer/produk');
	}
}
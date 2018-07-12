<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {


	public function index()
	{
		$this->load->view('templatescus');
	}
	public function listprod()
	{
		$this->load->view('customer/listproduk');
	}
	public function gridprod()
	{
		$this->load->view('customer/gridproduk');
	}
}
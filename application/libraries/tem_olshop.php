<?php
class Tem_olshop {
	protected $aku;

	function __construct() 
	{
		$this->aku =& get_instance();
		$this->aa =& get_instance();
	}
	function tampil($nama=null,$data=null)
	{
		$olshop['konten']=$this->aku->load->view($nama,$data, true);
		 $this->aku->load->view('admin/templates', $olshop);
	}

	function tampil_cus($a=null,$d=null)
	{
		$custom['isi']=$this->aa->load->view($a,$d, true);
		 $this->aa->load->view('customer/awal', $custom);
	}
}
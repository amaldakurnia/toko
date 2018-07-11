<?php
class Tem_olshop {
	protected $aku;

	function __construct() 
	{
		$this->aku =& get_instance();
	}
	function tampil($nama=null,$data=null)
	{
		$olshop['konten']=$this->aku->load->view($nama,$data, true);
		 $this->aku->load->view('admin/templates', $olshop);
	}
}
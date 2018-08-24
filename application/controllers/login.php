<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('olshopmodel', 'model');
		}
	//login admin
	public function login_admin()
	{
		$this->load->view('admin/formlogin');
	}
	public function loginku()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');


		$cek = $this->model->cek_login($username,$password)->num_rows();
		if($cek==1) {
			$row = $this->model->cek_login($username,$password)->row();
			$data_session = array (
				'logged' => true,
				'username' => $row->username);
		$this->session->set_userdata($data_session); 
		redirect (base_url('admin/'));
		}
		else {
			echo "Email dan password salah!";
		}
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('login/login_admin'));
	}
	//login customer
	public function login_cus()
	{
		$a['data'] = $this->model->get_produkku();
		$a['merk'] = $this->model->get_merk()->result_array();
	 	$a['kat'] = $this->model->get_kategori()->result_array();
		$this->load->view('customer/logincustomer',$a);
	}
	public function logincuss()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');


		$cek = $this->model->cek_logincus($email,$password)->num_rows();
		if($cek==1) {
			$row = $this->model->cek_logincus($email,$password)->row();
			$data_session = array (
				'logged' => true,
				'email' => $row->email,
				'id_customer'=> $row->id_customer);
		$this->session->set_userdata($data_session);
		redirect (base_url('customer/'));
		}
		else {
			echo "Email dan password salah!";
		}
	}
	public function logoutcus()
	{
		$this->session->sess_destroy();
		redirect(base_url('login/login_cus/'));
	}
}
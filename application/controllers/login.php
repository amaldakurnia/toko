<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('olshopmodel', 'model');
		}
	//login admin
	public function index()
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
		redirect (base_url('admin/index/'));
		}
		else {
			echo "Email dan password salah!";
		}
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('login/'));
	}
	//login customer
	public function indexcus()
	{
		$this->load->view('customer/logincustomer');
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
				'email' => $row->email);
		$this->session->set_userdata($data_session);
		redirect (base_url('customer/index'));
		}
		else {
			echo "Email dan password salah!";
		}
	}
	public function logoutcus()
	{
		$this->session->sess_destroy();
		redirect(base_url('login/indexcus/'));
	}
}
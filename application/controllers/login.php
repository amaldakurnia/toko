<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('olshopmodel', 'model');
		}

	public function index()
	{
		$this->load->view('admin/formlogin');
	}
	public function loginku()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$a = array(
			'username'=>$username,
			'password'=>$password);
		$cek = $this->model->cek_login("username",$a)->num_rows();
		if($cek==1) {
			$dt_session = array (
				'nama'=>$username,
				'status'=>"login");
		$this->session->set_userdata($dt_session);
		redirect (base_url("username"));
		}
		else {
			echo "Email dan password salah!";
		}
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
	}
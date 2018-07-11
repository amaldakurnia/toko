<?php
class Login extends CI_Controller {
	function __construct () 
	{
		$this->load->model('modellogin');
	}
	function index()
	{
		$this->load->view('formlogin');
	}
	function loginn()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$a = array (
			'email'=> $email,
			'password'=> md5($password)
			)
	}
}
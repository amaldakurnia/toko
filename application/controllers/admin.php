<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('olshopmodel', 'model');
	}
	/*public function index()
	{
		$this->load->view('admin/templates');
	}*/
	public function index() 
	{	
		$this->tem_olshop->tampil('admin/dashboardku');
	}
	public function login()
	{
		$this->load->view('admin/formlogin');
	}
	public function loginku()
	{
		$email = $this->input->post('email');
		$password = $this->inp->post('password');
		$a = array(
			'email'=>$email,
			'password'=> md5($password));
		$cek = $this->olshopmodel->cek_login("admin",$a)->num_rows();
		if($cek > 0) {
			$dt_session = array (
				'nama'=>$email,
				'status'=>"login");
		$this->session->set_admdata($dt_session);
		redirect (base_url("admin"));
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
	public function dashboard()
	{
		$this->tem_olshop->tampil('admin/dashboardku');
	}
	public function halaman()
	{
		$this->tem_olshop->tampil('admin/halamanku');
	}
	public function customer()
	{
		$data = $this->model->get_customerku();
		$this->tem_olshop->tampil('admin/customerku',array('list'=>$data));
	}
	public function savecus()
	{
		$this->tem_olshop->tampil('admin/simpancustomer');
	}
	public function tamcus()
	{
		$simcus = array (
				'id_customer'=>$this->input->post('id_customer'),
				'nama_dpn'=>$this->input->post('nama_dpn'),
				'nama_blkng'=>$this->input->post('nama_blkng'),
				'email'=>$this->input->post('email'),
				'password'=>$this->input->post('password'),
				'tgl_lahir'=>$this->input->post('tgl_lahir'));

		$this->model->gettamcus($simcus);
		redirect (base_url ('index.php/admin/customer'));
	}
	public function ubahcus()
	{
		$cus = $this->input->post('id_customer');
		$simcus = array (
				'id_customer'=>$this->input->post('id_customer'),
				'nama_dpn'=>$this->input->post('nama_dpn'),
				'nama_blkng'=>$this->input->post('nama_blkng'),
				'email'=>$this->input->post('email'),
				'password'=>$this->input->post('password'),
				'tgl_lahir'=>$this->input->post('tgl_lahir'));

		$this->model->geteditcus($simcus,$cus);
		redirect (base_url ('index.php/admin/customer')); 
	}
	public function editcus ()
	{
		$cus = $this->uri->segment (3);
		$a ['list'] = $this->model->getubahcus($cus);
		$this->tem_olshop->tampil('admin/ubahcustomer', $a);
	}
	public function hapcus ()
	{
		$cus = $this->uri->segment(3);
		$a = $this->model->gethapcus($cus);

		redirect (base_url ('index.php/admin/customer'));
	}
	public function order()
	{
		$this->tem_olshop->tampil('admin/orderku');
	}
	public function produk()
	{
		$datap = $this->model->get_produkku();
		$this->tem_olshop->tampil('admin/produkku',array('list'=>$datap));
	}
	public function saveprod()
	{
		$this->tem_olshop->tampil('admin/simpanproduk');
	}
	public function detprod()
	{
		$this->tem_olshop->tampil('admin/detailproduk');
	}
	public function tamprod()
	{
		$config['upload_path'] = './assets/img/';
		$config['allowed_types'] = 'gif|jpg|jpeg|png';
		$config['max-size'] = '8000';
		$config['max-width'] = '8000';
		$config['max-height'] = '8000';

		$this->upload->initialize($config);
		$this->load->library('upload',$config);
		$this->upload->do_upload('gambar');

		$file = $this->upload->data();

		$simprod = array (
				'id_produk'=>$this->input->post('id_produk'),
				'nm_produk'=>$this->input->post('nm_produk'),
				'warna'=>$this->input->post('warna'),
				'kategori'=>$this->input->post('kategori'),
				'merk'=>$this->input->post('merk'),
				'bahan'=>$this->input->post('bahan'),
				'deskripsi'=>$this->input->post('deskripsi'),
				'gambar'=>$file['file_name']);

		$this->model->gettamprod($simprod);
		redirect (base_url ('index.php/admin/produk'));
	}
	public function ubahprod()
	{
		$config['upload_path'] = './assets/img/';
		$config['allowed_types'] = 'gif|jpg|jpeg|png';
		$config['max-size'] = '8000';
		$config['max-width'] = '8000';
		$config['max-height'] = '8000';

		$this->upload->initialize($config);
		$this->load->library('upload',$config);
		$this->upload->do_upload('gambar');

		$file = $this->upload->data();

		$prod = $this->input->post('id_produk');
		$simprod = array (
				'id_produk'=>$this->input->post('id_produk'),
				'nm_produk'=>$this->input->post('nm_produk'),
				'warna'=>$this->input->post('warna'),
				'kategori'=>$this->input->post('kategori'),
				'merk'=>$this->input->post('merk'),
				'bahan'=>$this->input->post('bahan'),
				'deskripsi'=>$this->input->post('deskripsi'),
				'gambar'=>$file['file_name']);


		$this->model->geteditprod($simprod,$prod);
		redirect (base_url ('index.php/admin/produk')); 
	}
	public function editprod ()
	{
		$prod = $this->uri->segment (3);
		$e ['list'] = $this->model->getubahprod($prod);
		$this->tem_olshop->tampil('admin/ubahproduk', $e);
	}
	public function happrod ()
	{
		$prod = $this->uri->segment(3);
		$e = $this->model->gethapprod($prod);

		redirect (base_url ('index.php/admin/produk'));
	}
	public function admin()
	{
		$dataa = $this->model->get_adminku();
		$this->tem_olshop->tampil('admin/adminku',array('list'=>$dataa));
	}
	public function saveadm()
	{
		$this->tem_olshop->tampil('admin/simpanadmin');
	}
	public function tamadm()
	{
		$simadm = array (
				'id_admin'=>$this->input->post('id_admin'),
				'email'=>$this->input->post('email'),
				'password'=>$this->input->post('password'));

		$this->model->gettamadm($simadm);
		redirect (base_url ('index.php/admin/admin'));
	}
	public function ubahadm()
	{
		$adm = $this->input->post('id_admin');
		$simadm = array (
				'id_admin'=>$this->input->post('id_admin'),
				'email'=>$this->input->post('email'),
				'password'=>$this->input->post('password'));

		$this->model->geteditadm($simadm,$adm);
		redirect (base_url ('index.php/admin/admin')); 
	}
	public function editadm ()
	{
		$adm = $this->uri->segment (3);
		$b ['list'] = $this->model->getubahadm($adm);
		$this->tem_olshop->tampil('admin/ubahadmin', $b);
	}
	public function hapadm ()
	{
		$adm = $this->uri->segment(3);
		$b = $this->model->gethapadm($adm);

		redirect (base_url ('index.php/admin/admin'));
	}
	public function kategori()
	{
		$datak = $this->model->get_kategoriku();
		$this->tem_olshop->tampil('admin/kategoriku',array('list'=>$datak));
	}
	public function savekat()
	{
		$this->tem_olshop->tampil('admin/simpankategori');
	}
	public function tamkat()
	{
		$simkat = array (
				'id_kategori'=>$this->input->post('id_kategori'),
				'nm_kategori'=>$this->input->post('nm_kategori'));

		$this->model->gettamkat($simkat);
		redirect (base_url ('index.php/admin/kategori'));
	}
	public function ubahkat()
	{
		$kat = $this->input->post('id_kategori');
		$simkat = array (
				'id_kategori'=>$this->input->post('id_kategori'),
				'nm_kategori'=>$this->input->post('nm_kategori'));


		$this->model->geteditkat($simkat,$kat);
		redirect (base_url ('index.php/admin/kategori')); 
	}
	public function editkat ()
	{
		$kat = $this->uri->segment (3);
		$c ['list'] = $this->model->getubahkat($kat);
		$this->tem_olshop->tampil('admin/ubahkategori', $c);
	}
	public function hapkat ()
	{
		$kat = $this->uri->segment(3);
		$c = $this->model->gethapkat($kat);

		redirect (base_url ('index.php/admin/kategori'));
	}
	public function merk()
	{
		$datam = $this->model->get_merkku();
		$this->tem_olshop->tampil('admin/merkku',array('list'=>$datam));
	}
	public function savemerk()
	{
		$this->tem_olshop->tampil('admin/simpanmerk');
	}
	public function tammerk()
	{
		$config['upload_path'] = './assets/img/';
		$config['allowed_types'] = 'gif|jpg|jpeg|png';
		$config['max-size'] = '8000';
		$config['max-width'] = '8000';
		$config['max-height'] = '8000';

		$this->upload->initialize($config);
		$this->load->library('upload',$config);
		$this->upload->do_upload('gambar');

		$file = $this->upload->data();

		$simmerk = array (
				'id_merk'=>$this->input->post('id_merk'),
				'nm_merk'=>$this->input->post('nm_merk'),
				'gambar'=>$file['file_name']);

		$this->model->gettammerk($simmerk);
		redirect (base_url ('index.php/admin/merk'));
	}
	public function ubahmerk()
	{
		$merk = $this->input->post('id_merk');
		$simmerk = array (
				'id_merk'=>$this->input->post('id_merk'),
				'nm_merk'=>$this->input->post('nm_merk'));


		$this->model->geteditmerk($simmerk,$merk);
		redirect (base_url ('index.php/admin/merk')); 
	}
	public function editmerk ()
	{
		$merk = $this->uri->segment (3);
		$d ['list'] = $this->model->getubahmerk($merk);
		$this->tem_olshop->tampil('admin/ubahmerk', $d);
	}
	public function hapmerk ()
	{
		$merk = $this->uri->segment(3);
		$d = $this->model->gethapmerk($merk);

		redirect (base_url ('index.php/admin/merk'));
	}
	public function konfigweb()
	{
		$this->tem_olshop->tampil('admin/konfigurasiwebku');
	}
}

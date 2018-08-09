<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('olshopmodel', 'model');
		if ($this->session->userdata('logged')<>1) {
			redirect(base_url('login/'));
		}

		
	/*public function index()
	{
		$this->load->view('admin/templates');*/
	}
	public function index() 
	{	
		$this->tem_olshop->tampil('admin/dashboardku');	
	}
	public function dashboard()
	{
		$this->tem_olshop->tampil('admin/dashboardku');
	}
	public function savehalaman()
	{
		$this->tem_olshop->tampil('admin/simpanhalaman');
	}
	public function hal()
	{
		$data = $this->model->get_halamanku();
		$this->tem_olshop->tampil('admin/halamanku',array('list'=>$data));
	}
	public function tam_hal()
	{
		$savehal = array(
			'id_halaman' => $this->input->post('id_halaman'), 
			'id_menu' => $this->input->post('id_menu'),  
			'judul_halaman' => $this->input->post('judul_halaman'),
			'deskripsi' => $this->input->post('deskripsi'));

		$this->model->gettamhal($savehal);
		redirect (base_url ('admin/hal'));
	}
	public function ubahhal()
	{
		$hall = $this->input->post('id_halaman');
		$savehal = array(
			'id_halaman' => $this->input->post('id_halaman'), 
			'id_menu' => $this->input->post('id_menu'),  
			'judul_halaman' => $this->input->post('judul_halaman'),
			'deskripsi' => $this->input->post('deskripsi'));

		$this->model->getedithal($savehal);
		redirect (base_url ('index.php/admin/halamanku')); 
	}
	public function edithal ()
	{
		$hall = $this->uri->segment (3);
		$a ['list'] = $this->model->getubahhal($hall);
		$this->tem_olshop->tampil('admin/ubahhalaman', $a);
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
		$datao = $this->model->get_orderku();
		$this->tem_olshop->tampil('admin/orderku',array('list'=>$datao));
	}
	public function saveord()
	{
		$this->tem_olshop->tampil('admin/simpanorder');
	}
	public function tamord()
	{
		$simord = array (
				'id_order'=>$this->input->post('id_order'),
				'id_customer'=>$this->input->post('id_customer'),
				'tgl_order'=>$this->input->post('tgl_order'),
				'total'=>$this->input->post('total'),
				'ket'=>$this->input->post('ket'));

		$this->model->gettamord($simord);
		redirect (base_url ('index.php/admin/order'));
	}
	public function ubahord()
	{
		$order = $this->input->post('id_order');
		$simord = array (
				'id_order'=>$this->input->post('id_order'),
				'id_customer'=>$this->input->post('id_customer'),
				'tgl_order'=>$this->input->post('tgl_order'),
				'total'=>$this->input->post('total'),
				'ket'=>$this->input->post('ket'));

		$this->model->geteditorder($simord,$order);
		redirect (base_url ('index.php/admin/order')); 
	}
	public function editord ()
	{
		$order = $this->uri->segment (3);
		$o ['list'] = $this->model->getubahord($order);
		$this->tem_olshop->tampil('admin/ubahorder', $o);
	}
	public function hapord ()
	{
		$order = $this->uri->segment(3);
		$o = $this->model->gethapord($order);

		redirect (base_url ('index.php/admin/order'));
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
		$prod = $this->uri->segment(3);
		$data['data'] = $this->model->getubahprod($prod);
		$this->tem_olshop->tampil('admin/detailproduk',$data);
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
	public function user()
	{
		$dataa = $this->model->get_userku();
		$this->tem_olshop->tampil('admin/userku',array('list'=>$dataa));
	}
	public function saveuser()
	{
		$this->tem_olshop->tampil('admin/simpanuser');
	}
	public function tamuser()
	{
		$simuser = array (
				'id_user'=>$this->input->post('id_user'),
				'username'=>$this->input->post('username'),
				'password'=>$this->input->post('password'));

		$this->model->gettamuser($simuser);
		redirect (base_url ('index.php/admin/user'));
	}
	public function ubahuser()
	{
		$user = $this->input->post('id_user');
		$simuser = array (
				'id_user'=>$this->input->post('id_user'),
				'username'=>$this->input->post('username'),
				'password'=>$this->input->post('password'));

		$this->model->getedituser($simuser,$user);
		redirect (base_url ('index.php/admin/user')); 
	}
	public function edituser ()
	{
		$user = $this->uri->segment (3);
		$b ['list'] = $this->model->getubahuser($user);
		$this->tem_olshop->tampil('admin/ubahuser', $b);
	}
	public function hapuser ()
	{
		$user = $this->uri->segment(3);
		$b = $this->model->gethapuser($user);

		redirect (base_url ('index.php/admin/user'));
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
		$config['upload_path'] = './assets/img/';
		$config['allowed_types'] = 'gif|jpg|jpeg|png';
		$config['max-size'] = '8000';
		$config['max-width'] = '8000';
		$config['max-height'] = '8000';

		$this->upload->initialize($config);
		$this->load->library('upload',$config);
		$this->upload->do_upload('gambar');

		$file = $this->upload->data();

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

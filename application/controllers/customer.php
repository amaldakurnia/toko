<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('Olshopmodel', 'model');

		if ($this->session->userdata('logged')<>1) 
		{
			redirect(base_url('login/login_cus/'));
		}
	}
	public function index()
	{//tampilan awal 
		$a['data'] = $this->model->get_produkku();
		$this->load->view('customer/awal',$a);
	}
	public function keranjang()
	{//menampilkan data cart 
		$cart = $this->uri->segment(3);
		$k['data'] = $this->model->get_keranjang($cart);
		$this->load->view('customer/keranjang',$k);
	}
	public function indexx()
	{//menampilkan data produk
		$data['data']=$this->model->get_all_produk();
		$this->load->view('customer/cartku',array('list'=>$data));
	}
	 public function addcart(){ //fungsi Add To Cart
	 	if ($this->session->userdata('logged')<>1)
	 	{
	 		$this->session->set_flashdata("erorr","<div class='alert alert-danger alert-dismissable'>
	 		<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
	 		<strong> Silakan login terlebih dahulu !</strong>
	 		</div>");
	 		redirect (base_url('login/'));
	 	} else {
	 	$id = $this->session->userdata('id_customer');
	 	$harga = $this->input->post('jumlah');
		$data = array(
			'id_cart' => $this->input->post('id_cart'), 
			'id_customer'=>$id,
			'id_produk'=>$this->input->post('id_produk'),
			'produk' => $this->input->post('produk'),  
			'deskripsi' => $this->input->post('deskripsi'),
			'warna' => $this->input->post('warna'),
			'harga' => $this->input->post('harga'), 
			'jumlah_barang' => $harga,
			'total' => $harga*$this->input->post('harga'));

		$this->model->getaddcart($data);
		redirect (base_url ('customer/keranjang'));
		//tampilkan cart set elah added
	}
	}
	public function plus()
	{
		$plus = $this->uri->segment(3);
		$cart = $this->db->get_where('cartku',array ('id_cart'=>$plus));
		$jml = $this->input->post('jumlah_barang')+1;
		foreach ($cart->result_array() as $key => $value) 
		{
			$harga = $value['harga'];
			$data = array (
					'id_cart'		=>$value['id_cart'],
					'harga'			=>$harga,
					'jumlah_barang'	=>$jml,
					'total'			=>$jml*$harga);
			$this->model->get_plus($plus,$data);
		}
		redirect (base_url('customer/keranjang'));
	}
	public function min()
	{
		$min = $this->uri->segment(3);
		$cart = $this->db->get_where('cartku',array ('id_cart'=>$min));
		$jml = $this->input->post('jumlah_barang')-1;
		foreach ($cart->result_array() as $key => $value) 
		{
			$harga = $value['harga'];
			$data = array (
					'id_cart'		=>$value['id_cart'],
					'harga'			=>$harga,
					'jumlah_barang'	=>$jml,
					'total'			=>$jml*$harga);
			$this->model->get_min($min,$data);
		}
		redirect (base_url('customer/keranjang'));
	}
	public function search_data()
	{	//search data produk
		$keyword = $this->input->post('keywoard');
		$data['produk'] = $this->model->get_search($keyword);
		$this->load->view('customer/search_view',$data);
	}

	public function hapcart()
	{ //fungsi untuk menghapus item cart
		$cart = $this->uri->segment(3);
		$c = $this->model->get_hapcart($cart);
		redirect (base_url('customer/keranjang'));
	}
	public function shipping()
	{
		$ship = $this->uri->segment(3);
		$shipping['data'] = $this->model->get_shipping($ship);
		$this->load->view('customer/keranjang',$shipping);
	}
	public function tamcheck()
	{
		$bayar = $this->uri->segment(3);
		$check = array (
				'negara'=>$this->input->post('negara'),
				'provinsi'=>$this->input->post('provinsi'),
				'kabupaten'=>$this->input->post('kabupaten'),
				'kode_pos'=>$this->input->post('kode_pos'),
				'alamat_lengkap'=>$this->input->post('alamat_lengkap'),
				'bayar_via'=>$this->input->post('bayar_via'),
				'data' => $this->model->get_keranjang($bayar));

		//$this->model->gettamcheck($savcheck);
		$this->load->view('customer/pembayaran',$check);
	}
	public function tam_bayar()
	{
		$this->load->model('Olshopmodel', 'model');
		$id = $this->session->userdata('id_customer');
		$simbyr = array (
				'kode_order'=>$this->input->post('id_order'),
				'id_customer'=>$id,
				'tgl_order'=>date('Y-m-d'),
			 	'total'=>$this->input->post('total'),
				'ket'=>'Belum bayar');

		$this->model->gettam_bayar($simbyr);
		$kode = $this->db->insert_id();

		$cek = $this->db->get_where('cartku',array('id_customer' => $id));
		foreach ($cek->result_array() as $key => $value) :
			$simcheck = array(
				'id_checkout'=>$this->input->post('id_checkout'),
				'kode_order'=>$kode,
				'id_customer'=>$id,
				'nm_produk'=>$value['deskripsi'],    
				'jumlah_barang'=>$value['jumlah_barang'],
				'total'=>$this->input->post('total'),
				'negara'=>$this->input->post('negara'),
				'provinsi'=>$this->input->post('provinsi'),
				'kabupaten'=>$this->input->post('kabupaten'),
				'kode_pos'=>$this->input->post('kode_pos'),
				'alamat_lengkap'=>$this->input->post('alamat_lengkap'),
				'bayar_via'=>$this->input->post('bayar_via'),
				'no_rek'=>$this->input->post('no_rek'));

			$this->model->gettamcheck($simcheck);

		endforeach;
		redirect (base_url ('customer/konfirm'));
	}
	public function konfirm()
	{
		$konfirm = $this->uri->segment(3);
		$data['data'] = $this->model->get_konfirm($konfirm);
		$this->load->view('customer/konfirmbayar',$data);
	}
	public function berhasil()
	{
		$this->load->view('customer/konfirmsukses');
	}
	public function tamkonfirm()
	{
		$id = $this->session->userdata('id_customer');
		$simkonf = array (
				'kode_order'=>$this->input->post('kode_order'),
				'id_customer'=>$id,
				'id_produk'=>$this->input->post('id_produk'),
				'nama'=>$this->input->post('nama'),
				'nominal'=>$this->input->post('nominal'),
				'tgl_byr'=>date('Y-m-d'),
				'bayar_via'=>$this->input->post('bayar_via'),
				'ket'=>'Belum bayar');

		$this->model->get_tamkonfirm($simkonf);
		redirect (base_url('customer/berhasil'));
	}
	public function kontak()
	{
		$this->load->view('customer/kontak');
	}
	public function tentang()
	{
		$hal = $this->uri->segment(3);
		$halaman['data'] = $this->model->get_halamanku($hal);
		$this->load->view('customer/info_olshop');
	}
	public function register()
	{
		$this->load->view('customer/register');
	}
	public function tamreg()
	{
		$simreg = array (
				'id_customer'=>$this->input->post('id_customer'),
				'nama_dpn'=>$this->input->post('nama_dpn'),
				'nama_blkng'=>$this->input->post('nama_blkng'),
				'email'=>$this->input->post('email'),
				'password'=>$this->input->post('password'),
				'tgl_lahir'=>$this->input->post('tgl_lahir'),
				'rek'=>$this->input->post('rek'),
				'no_rek'=>$this->input->post('no_rek'));

		$this->model->gettamreg($simreg);
		redirect (base_url ('customer/akun'));
	}
	public function daftar()
	{
		$prod = $this->uri->segment(3);
		$daftar['data'] = $this->model->get_all_produk($prod);
		$this->load->view('customer/daftarproduk',$daftar);
	}
	public function tampilgrid()
	{
		$prod = $this->uri->segment(3);
		$grid['data'] = $this->model->get_all_produk($prod);
		$this->load->view('customer/gridkolom',$grid);
	}
	public function tiga()
	{
		$prod = $this->uri->segment(3);
		$tiga['data'] = $this->model->get_all_produk($prod);
		$this->load->view('customer/tigakolom',$tiga);
	}
	public function empat()
	{
		$prod = $this->uri->segment(3);
		$empat['data'] = $this->model->get_all_produk($prod);
		$this->load->view('customer/empatkolom',$empat);
	}
	public function rekonfirm()
	{
		$this->load->view('customer/rekonfirmasi');
	}
	public function detprod()
	{
		$prod = $this->uri->segment(3);
		$detail['data'] = $this->model->get_all_produk($prod);
		$this->load->view('customer/detproduk',$detail);
	}
	public function prod()
	{
		$prod = $this->uri->segment(3);
		$produk['data'] = $this->model->get_all_produk($prod);
		$this->load->view('customer/produk',$produk);
	}
	public function merk()
	{
		$merk = $this->uri->segment(3);
		$merkku['data'] = $this->model->get_merk($merk);
		$this->load->view('customer/merk',$merkku);
	}
	public function kategori()
	{
		$kat = $this->uri->segment(3);
		$kategori['kat'] = $this->model->get_kategori($kat);
		$this->load->view('customer/kategori',$kategori);

	}
	public function akun()
	{
		$akun = $this->uri->segment(3);
		$akunn['akun'] = $this->model->get_account($akun);
		$this->load->view('customer/akun',$akunn);
	}
}
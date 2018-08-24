<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('Olshopmodel', 'model');
	}
	public function index()
	{//tampilan awal 
		$a['data'] = $this->model->get_produkku();
		$a['merk'] = $this->model->get_merk()->result_array();
	 	$a['kat'] = $this->model->get_kategori()->result_array();
		$a['merkprod'] = $this->model->get_merk_produk()->result_array();
		$a['katprod'] = $this->model->get_kat_produk()->result_array();
		$a['konfweb'] = $this->model->get_konfigwebku();
		$this->load->view('customer/awal',$a);
	}
	public function keranjang()
	{//menampilkan data cart 
		if ($this->session->userdata('logged')<>1) {
			redirect(base_url('login/login_cus'));
		} else {
		$cart = $this->session->userdata('id_customer');
		$keranjang['data'] = $this->model->get_keranjang($cart);
		$keranjang['total'] = $this->model->get_hitung();
		$keranjang['merk'] = $this->model->get_merk()->result_array();
		$keranjang['konfweb'] = $this->model->get_konfigwebku();
		$this->load->view('customer/keranjang',$keranjang);}
	}
	public function indexx()
	{//menampilkan data produk
		$data['data']=$this->model->get_all_produk();
		$this->load->view('customer/cartku',array('list'=>$data));
	}
	public function samping()
	{
		$sam = $this->uri->segment(3);
		$samping['data'] = $this->model->get_all_produk();
		$this->load->view('customer/awal',$samping);
	}
	 public function addcart(){ //fungsi Add To Cart
	 	if ($this->session->userdata('logged')<>1)
	 	{
	 		$this->session->set_flashdata("erorr","<div class='alert alert-danger alert-dismissable'>
	 		<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
	 		<strong> Silakan login terlebih dahulu !</strong>
	 		</div>");
	 		redirect (base_url('login/login_cus'));
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
		$shipping['merk'] = $this->model->get_merk()->result_array();
		$this->load->view('customer/keranjang',$shipping);
	}
	public function tamcheck()
	{
		$bayar = $this->session->userdata('id_customer');
		$check = array (
				'negara'=>$this->input->post('negara'),
				'provinsi'=>$this->input->post('provinsi'),
				'kabupaten'=>$this->input->post('kabupaten'),
				'kode_pos'=>$this->input->post('kode_pos'),
				'alamat_lengkap'=>$this->input->post('alamat_lengkap'),
				'bayar_via'=>$this->input->post('bayar_via'),
				'data' => $this->model->get_keranjang($bayar),
				'total' => $this->model->get_hitung());

		//$this->model->gettamcheck($savcheck);
		$check['merk'] = $this->model->get_merk()->result_array();
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
		foreach ($cek->result_array() as $key => $value) {
			$simcheck = array(
				'id_checkout'=>$this->input->post('id_checkout'),
				'kode_order'=>$kode,
				'id_customer'=>$id,
				'nm_produk'=>$value['deskripsi'],    
				'jumlah_barang'=>$value['jumlah_barang'],
				'total'=>$value['total'],
				'negara'=>$this->input->post('negara'),
				'provinsi'=>$this->input->post('provinsi'),
				'kabupaten'=>$this->input->post('kabupaten'),
				'kode_pos'=>$this->input->post('kode_pos'),
				'alamat_lengkap'=>$this->input->post('alamat_lengkap'),
				'bayar_via'=>$this->input->post('bayar_via'),
				'no_rek'=>$this->input->post('no_rek'));

			$this->model->gettamcheck($simcheck);
			$this->model->gethapcheck($id);

		}
		$data['value'] = $this->model->get_konfirm()->row_array();
		$data['cek'] = $this->model->get_cek()->row_array();
		$data['merk'] = $this->model->get_merk()->result_array();
		$this->load->view('customer/konfirmbayar',$data);
	}
	public function konfirm()
	{
		//$konfirm = $this->session->userdata('id_customer');
		$r = $this->uri->segment(3);
		$data['value'] = $this->model->get_konfirm($r)->row_array();
		$data['cek'] = $this->model->get_cek()->row_array();
		$data['merk'] = $this->model->get_merk()->result_array();
		$data['konfweb'] = $this->model->get_konfigwebku();
		$this->load->view('customer/konfirmbayar',$data);
	}
	public function konf()
	{
		$id = $this->input->post('kode_order');
		$simbyr['ket'] = 'Lunas';
 
		$this->model->updatetam_bayar($simbyr,$id);
		redirect (base_url('customer/berhasil'));
	}
	public function berhasil()
	{
		$sukses['merk'] = $this->model->get_merk()->result_array();
		$sukses['kat'] = $this->model->get_kategori()->result_array();
		$sukses['samping'] = $this->model->get_all_produk()->result_array();
		$sukses['konfweb'] = $this->model->get_konfigwebku();
		$this->load->view('customer/konfirmsukses',$sukses);
	}
	public function kontak()
	{
		$ko = $this->uri->segment(3);
		$kontak['kontak'] = $this->model->get_kontakku($ko);
		$kontak['merk'] = $this->model->get_merk()->result_array();
		$kontak['konfweb'] = $this->model->get_konfigwebku();
		$this->load->view('customer/kontak',$kontak);
	}
	public function tentang()
	{
		$hal = $this->uri->segment(3);
		$halaman['data'] = $this->model->get_halamanku($hal);
		$halaman['merk'] = $this->model->get_merk()->result_array();
		$halaman['konfweb'] = $this->model->get_konfigwebku();
		$this->load->view('customer/info_olshop',$halaman);
	}
	public function register()
	{
		$reg = $this->uri->segment(3);
		$register['merk'] = $this->model->get_merk()->result_array();
		$register['kat'] = $this->model->get_kategori()->result_array();
		$register['samping'] = $this->model->get_all_produk()->result_array();
		$register['konfweb'] = $this->model->get_konfigwebku();
		$this->load->view('customer/register',$register);
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
		$daftar['merk'] = $this->model->get_merk()->result_array();
		$daftar['kat'] = $this->model->get_kategori()->result_array();
		$daftar['samping'] = $this->model->get_all_produk()->result_array();
		$daftar['merkprod'] = $this->model->get_merk_produk()->result_array();
		$daftar['katprod'] = $this->model->get_kat_produk()->result_array();
		$daftar['konfweb'] = $this->model->get_konfigwebku();
		$this->load->view('customer/daftarproduk',$daftar);
	}
	public function merk_prod()
	{
		$id = $this->uri->segment(3);
		$merk_prod['merk'] = $this->model->get_merk()->result_array();
		$merk_prod['kat'] = $this->model->get_kategori()->result_array();
		$merk_prod['samping'] = $this->model->get_all_produk()->result_array();
		$merk_prod['data'] = $this->model->get_merk_produk($id);
		$this->load->view('customer/gridkolom',$merk_prod);
	}
	public function kat_prod()
	{
		$id = $this->uri->segment(3);
		$kat_prod['merk'] = $this->model->get_merk()->result_array();
		$kat_prod['kat'] = $this->model->get_kategori()->result_array();
		$kat_prod['samping'] = $this->model->get_all_produk()->result_array();
		$kat_prod['data'] = $this->model->get_merk_produk()->result_array();
		$kat_prod['data'] = $this->model->get_kat_produk($id);
		$this->load->view('customer/gridkolom',$kat_prod);
	}
	public function tampilgrid()
	{
		$prod = $this->uri->segment(3);
		$grid['data'] = $this->model->get_all_produk($prod);
		$grid['merk'] = $this->model->get_merk()->result_array();
		$grid['kat'] = $this->model->get_kategori()->result_array();
		$grid['samping'] = $this->model->get_all_produk()->result_array();
		$grid['mprod'] = $this->model->get_merk_produk()->result_array();
		$this->load->view('customer/gridkolom',$grid);
	}
	public function tiga()
	{
		$prod = $this->uri->segment(3);
		$tiga['data'] = $this->model->get_all_produk($prod);
		$tiga['merk'] = $this->model->get_merk()->result_array();
		$tiga['mprod'] = $this->model->get_merk_produk()->result_array();
		$tiga['konfweb'] = $this->model->get_konfigwebku();
		$this->load->view('customer/tigakolom',$tiga);
	}
	public function empat()
	{
		$prod = $this->uri->segment(3);
		$empat['data'] = $this->model->get_all_produk($prod);
		$empat['merk'] = $this->model->get_merk()->result_array();
		$empat['mprod'] = $this->model->get_merk_produk()->result_array();
		$empat['konfweb'] = $this->model->get_konfigwebku();
		$this->load->view('customer/empatkolom',$empat);
	}
	public function rekonfirm()
	{	if ($this->session->userdata('logged')<>1) {
			redirect(base_url('login/login_cus'));
		} else {
		$ok = 'Belum bayar';
		$id = $this->session->userdata('id_customer');
		$rekonf['data'] = $this->model->get_orderku();
		$rekonf['ok'] = $this->model->get_ok($id,$ok)->result_array();
		$rekonf['merk'] = $this->model->get_merk()->result_array();
		$rekonf['kat'] = $this->model->get_kategori()->result_array();
		$rekonf['samping'] = $this->model->get_all_produk()->result_array();
		$rekonf['konfweb'] = $this->model->get_konfigwebku();
		$this->load->view('customer/rekonfirmasi',$rekonf);
		}
	}
	public function detprod()
	{
		$prod = $this->uri->segment(3);
		$detail['data'] = $this->model->get_all_produk($prod);
		$detail['merk'] = $this->model->get_merk()->result_array();
		$detail['kat'] = $this->model->get_kategori()->result_array();
		$detail['samping'] = $this->model->get_all_produk()->result_array();
		$detail['konfweb'] = $this->model->get_konfigwebku();
		$this->load->view('customer/detproduk',$detail);
	}
	public function prod()
	{
		$prod = $this->uri->segment(3);
		$produk['data'] = $this->model->get_all_produk($prod);
		$produk['merk'] = $this->model->get_merk()->result_array();
		$produk['konfweb'] = $this->model->get_konfigwebku();
		$this->load->view('customer/produk',$produk);
	}
	public function merk()
	{
		$merk = $this->uri->segment(3);
		$merkku['merk'] = $this->model->get_merk($merk);
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
		if ($this->session->userdata('logged')<>1) {
			redirect(base_url('login/login_cus'));
		} else {
		$akun = $this->uri->segment(3);
		$akunn['akun'] = $this->model->get_account($akun);
		$akunn['merk'] = $this->model->get_merk()->result_array();
		$akunn['konfweb'] = $this->model->get_konfigwebku();
		$this->load->view('customer/akun',$akunn);
		}
	}
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('olshopmodel', 'model');

		if ($this->session->userdata('logged')<>1) 
		{
			redirect(base_url('login/indexcus/'));
		}
	}
	public function index()
	{
		$a['data'] = $this->model->get_produkku();
		$this->load->view('customer/templatescus',$a);
	}
	public function cart()
	{
		$cart = $this->uri->segment(3);
		$checkout['data'] = $this->model->get_cart($cart);
		$this->load->view('customer/cart',$checkout);
	}
	public function indexx(){
		$data['data']=$this->model->get_all_produk();
		$this->load->view('customer/cartku',array('list'=>$data));
	}
	 public function addcart(){ //fungsi Add To Cart
	 	$harga = $this->input->post('jumlah');
		$data = array(
			'id' => $this->input->post('id'), 
			'produk' => $this->input->post('produk'),  
			'deskripsi' => $this->input->post('deskripsi'),
			'warna' => $this->input->post('warna'),
			'bahan' => $this->input->post('bahan'),
			'harga' => $this->input->post('harga'), 
			'jumlah_barang' => $harga,
			'total' => $harga*$this->input->post('harga'));

		$this->model->getaddcart($data);
		redirect (base_url ('index.php/customer/cart'));
		echo $this->show_cart( ); //tampilkan cart setelah added
	}
	public function searchprod()
	{	
		/*$search = $this->input->post('search');
		return $this->load->view('index.php/customer/produk');*/

		$keyword = $this->input->post('keywoard');
		$data['produk'] = $this->model->get_product_keyword($keyword);
		$this->load->view('search',$data);
	}
	/*public function showcart(){ //Fungsi untuk menampilkan Cart
		$output = '';
		$no = 0;
		foreach ($this->model->contents() as $items) {
			$no++;
			$output .='
				<tr>
					<td>'.$items['name'].'</td>
					<td>'.number_format($items['price']).'</td>
					<td>'.$items['qty'].'</td>
					<td>'.number_format($items['subtotal']).'</td>
					<td><button type="button" id="'.$items['rowid'].'" class="hapus_cart btn btn-danger btn-xs">Batal</button></td>
				</tr>
			';
		}
		$output .= '
			<tr>
				<th colspan="3">Total</th>
				<th colspan="2">'.'Rp '.number_format($this->model->total()).'</th>
			</tr>
		';
		return $output;
	}

	public function loadcart(){ //load data cart
		echo $this->show_cart();
	}*/

	public function hapcart()
	{ //fungsi untuk menghapus item cart
		$cart = $this->uri->segment(3);
		$c = $this->model->get_hapcart($cart);
		redirect (base_url('index.php/customer/cart'));
	}
	public function shipping()
	{
		$ship = $this->uri->segment(3);
		$shipping['data'] = $this->model->get_shipping($ship);
		$this->load->view('customer/cart',$shipping);
	}
	public function tamship()
	{
		$savship = array (
				'negara'=>$this->input->post('negara'),
				'provinsi'=>$this->input->post('provinsi'),
				'kabupaten'=>$this->input->post('kabupaten'),
				'kode_pos'=>$this->input->post('kode_pos'),
				'alamat_lengkap'=>$this->input->post('alamat_lengkap'));

		$this->model->gettamship($savship);
		redirect (base_url ('index.php/customer/cart'));
	}
	public function pembayaran()
	{
		$bayar = $this->uri->segment(3);
		$pembayaran['data'] = $this->model->get_cart($bayar);
		$this->load->view('customer/pembayaran',$pembayaran);

		/*$check = $this->uri->segment(3);
		$byr['data'] = $this->model->get_shipping($check);
		$this->load->view('customer/pembayaran',$byr);*/
	}
	public function tam_bayar()
	{
		$simbyr = array (
				'id_order'=>$this->input->post('id_order'),
				'id_customer'=>$this->input->post('id_customer'),
				'id_produk'=>$this->input->post('id_produk'),
				'tgl_byr'=>$this->input->post('tgl_byr'),
				'total_byr'=>$this->input->post('total_byr'),
				'bayar_via'=>$this->input->post('bayar_via'),
				'ket'=>$this->input->post('ket'));

		$this->model->gettam_bayar($simbyr);
		redirect (base_url ('index.php/customer/pembayaran'));
	}
	public function konfirm()
	{
		$konfirm = $this->uri->segment(3);
		$konfirmasi['data'] = $this->model->get_konfirm($konfirm);
		$this->load->view('customer/konfirmbayar',$konfirmasi);
	}
	public function contact()
	{
		$this->load->view('customer/contact');
	}
	public function about()
	{
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
				'tgl_lahir'=>$this->input->post('tgl_lahir'));

		$this->model->gettamreg($simreg);
		redirect (base_url ('index.php/login/indexcus'));
	}
	public function listprod()
	{
		$prod = $this->uri->segment(3);
		$list['data'] = $this->model->get_all_produk($prod);
		$this->load->view('customer/listproduk',$list);
	}
	public function gridprod()
	{
		$prod = $this->uri->segment(3);
		$grid['data'] = $this->model->get_all_produk($prod);
		$this->load->view('customer/gridproduk',$grid);
	}
	public function three()
	{
		$prod = $this->uri->segment(3);
		$three['data'] = $this->model->get_all_produk($prod);
		$this->load->view('customer/threecolomn',$three);
	}
	public function four()
	{
		$prod = $this->uri->segment(3);
		$four['data'] = $this->model->get_all_produk($prod);
		$this->load->view('customer/fourcolomn',$four);
	}
	public function general()
	{
		$this->load->view('customer/konten');
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

}
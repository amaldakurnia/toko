<?php defined ('BASEPATH') OR exit ('No direct script access allowed');
class Olshopmodel extends CI_Model 
{
	public function cek_login($username,$password)
	{
		$this->db->where('username',$username);
		$this->db->where('password',$password);

		return $this->db->get('userku');
	}
	public function cek_logincus($email,$password)
	{
		$this->db->where('email',$email);
		$this->db->where('password',$password);

		return $this->db->get('customerku');
	}
	public function get_all_produk($prod){
		//$hasil=$this->db->query('select * from produku');k
//		return $hasil->result_array();
		if (!empty($prod)) {
			$this->db->where('id_produk',$prod);
		}
		return $this->db->get('produkku');
	}
	public function get_search($keyword)
	{
		$this->db->select('*');
		$this->db->like('nm_produk',$keyword);
		return $this->db->get('produkku')->result_array();
	}
	public function get_keranjang($cart){
		if (!empty($cart)) {
			$this->db->where('id',$cart);
		}
		return $this->db->get('cartku');
	}
	public function get_order($order){
		if(!empty($order)){
			$this->db->where('id_order',$order);
		}
		return $this->db->get('orderku');
	}
	public function get_shipping($check){
		if(!empty($check)){
			$this->db->where('id_checkout',$check);
		}
		return $this->db->get('checkoutku');
	}
	public function get_konfirm($konfirm){
		if(!empty($konfirm)){
			$this->db->where('id_customer',$konfirm);
		}
		return $this->db->get('customerku');
	}
	public function get_halamanku ()
	{
		$data = $this->db->query('select * from halamanku');
		return $data->result_array();
	} 
	public function gettamhal($savehal)
	{
		return $this->db->insert('halamanku', $savehal);
	}
	public function getubahhal ($hall)
	{
		return $this->db->get_where('halamanku', array('id_halaman'=>$hall));
	}
	public function getedithal ($savehal, $hal)
	{
		$this->db->where ('id_halaman', $hall);
		return $this->db->update ('halamanku',$savehal);
	}
	public function getaddcart($simcart)
	{
		return $this->db->insert('cartku', $simcart);
	}
	public function get_hapcart($cart)
	{
		$this->db->where('id_cart',$cart);
		$c = $this->db->delete('cartku');
	}
	public function get_plus($plus,$data)
	{
		return $this->db->where('id_cart',$plus)->update('cartku',$data);
	}
	public function get_min($min,$data)
	{
		return $this->db->where('id_cart',$min)->update('cartku',$data);
	}
	public function gettamcheck($savcheck)
	{
		return $this->db->insert('checkoutku', $savcheck);
	}
	public function gettamreg($simreg)
	{
		return $this->db->insert('customerku', $simreg);
	}
	public function gettam_bayar($simbyr)
	{
		return $this->db->insert('pembayaranku', $simbyr);
	}
	public function get_customerku ()
	{
		$data = $this->db->query('select * from customerku');
		return $data->result_array();
	} 
	public function gettamcus($simcus)
	{
		return $this->db->insert('customerku', $simcus);
	}
	public function getubahcus ($cus)
	{
		return $this->db->get_where('customerku', array('id_customer'=>$cus));
	}
	public function geteditcus ($simcus, $cus)
	{
		$this->db->where ('id_customer', $cus);
		return $this->db->update ('customerku',$simcus);
	}
	public function gethapcus ($cus)
	{
		$this->db->where ('id_customer',$cus);
		return $this->db->delete ('customerku');
	}
	public function get_userku ()
	{
		$dataa = $this->db->query('select * from userku');
		return $dataa->result_array();
	}
	public function gettamuser($simuser)
	{
		return $this->db->insert('userku', $simuser);
	}
	public function getubahuser ($user)
	{
		return $this->db->get_where('userku', array('id_user'=>$user));
	}
	public function getedituser ($simuser, $user)
	{
		$this->db->where ('id_user', $user);
		return $this->db->update ('userku',$simuser);
	}
	public function gethapuser ($user)
	{
		$this->db->where ('id_user',$user);
		return $this->db->delete ('userku');
	}
	public function get_kategoriku ()
	{
		$datak = $this->db->query('select * from kategoriku');
		return $datak->result_array();
	}
	public function gettamkat($simkat)
	{
		return $this->db->insert('kategoriku', $simkat);
	}
	public function getubahkat ($kat)
	{
		return $this->db->get_where('kategoriku', array('id_kategori'=>$kat));
	}
	public function geteditkat ($simkat, $kat)
	{
		$this->db->where ('id_kategori', $kat);
		return $this->db->update ('kategoriku',$simkat);
	}
	public function gethapkat ($kat)
	{
		$this->db->where ('id_kategori',$kat);
		return $this->db->delete ('kategoriku');
	}
	public function get_merkku ()
	{
		$datam = $this->db->query('select * from merkku');
		return $datam->result_array();
	}
	public function gettammerk($simmerk)
	{
		return $this->db->insert('merkku', $simmerk);
	}
	public function getubahmerk ($merk)
	{
		return $this->db->get_where('merkku', array('id_merk'=>$merk));
	}
	public function geteditmerk ($simmerk, $merk)
	{
		$this->db->where ('id_merk', $merk);
		return $this->db->update ('merkku',$simmerk);
	}
	public function gethapmerk ($merk)
	{
		$this->db->where ('id_merk',$merk);
		return $this->db->delete ('merkku');
	}
	public function get_produkku ()
	{
		$this->db->join('kategoriku', 'kategoriku.id_kategori = produkku.id_kategori');
		$this->db->join('merkku', 'merkku.id_merk = produkku.id_merk');
		$this->db->order_by('nm_produk', 'ASC');
		$datam = $this->db->get('produkku');
		return $datam->result_array();
	}
	public function gettamprod($simprod)
	{
		return $this->db->insert('produkku', $simprod);
	}
	public function getubahprod ($prod)
	{
		return $this->db->get_where('produkku', array('id_produk'=>$prod));
	}
	public function geteditprod ($simprod, $prod)
	{
		$this->db->where ('id_produk', $prod);
		return $this->db->update ('produkku',$simprod);
	}
	public function gethapprod ($prod)
	{
		$this->db->where ('id_produk',$prod);
		return $this->db->delete ('produkku');
	}
	public function get_orderku ()
	{
		$datao = $this->db->query('select * from orderku');
		return $datao->result_array();
	} 
	public function gettamord($simord)
	{
		return $this->db->insert('orderku', $simord);
	}
	public function getubahord ($order)
	{
		return $this->db->get_where('orderku', array('id_order'=>$order));
	}
	public function geteditorder ($simord, $order)
	{
		$this->db->where ('id_order', $order);
		return $this->db->update ('orderku',$simord);
	}
	public function gethapord ($order)
	{
		$this->db->where ('id_order',$order);
		return $this->db->delete ('orderku');
	}
	public function get_merk($merk)
	{
		/*$this->db->select('*');
		$this->db->from('merkku');
		$data = $this->db->get();
		return $data->result_array();*/
		if (!empty($merk)) {
			$this->db->where('id_merk',$merk);
		}
		return $this->db->get('merkku');
	}
	public function get_account()
	{
		$akun = $this->db->query('select * from customerku');
		return $akun->result_array();
	}
	public function get_kategori()
	{
		if (!empty($kat)) {
			$this->db->where('id_kategori',$kat);
		}
		return $this->db->get('kategoriku');
	}
	public function get_hal($hal){
		if (!empty($hal)) {
			$this->db->where('id_halaman',$hal);
		}
		return $this->db->get('halamanku');
	}
}
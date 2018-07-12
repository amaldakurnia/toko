<?php defined ('BASEPATH') OR exit ('No direct script access allowed');
class Olshopmodel extends CI_Model 
{
	public function cek_login($a)
	{
		return $this->db->get_a('adminku',$a);
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
	public function get_adminku ()
	{
		$dataa = $this->db->query('select * from adminku');
		return $dataa->result_array();
	}
	public function gettamadm($simadm)
	{
		return $this->db->insert('adminku', $simadm);
	}
	public function getubahadm ($adm)
	{
		return $this->db->get_where('adminku', array('id_admin'=>$adm));
	}
	public function geteditadm ($simadm, $adm)
	{
		$this->db->where ('id_admin', $adm);
		return $this->db->update ('adminku',$simadm);
	}
	public function gethapadm ($adm)
	{
		$this->db->where ('id_admin',$adm);
		return $this->db->delete ('adminku');
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
		$datap = $this->db->query('select * from produkku');
		return $datap->result_array();
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
}
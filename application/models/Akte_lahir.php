<?php
/**
* 
*/
class Akte_lahir extends MY_Model
{
	public function index($id_akte_lahir)
	{
		$query = $this->db->where('id_akte_lahir', $id_akte_lahir)->get('akte_lahir');
		if($query->num_rows()>0){
			return $query->row_array();
		}else{
			return array();
		}
	}
	public function data_ibu($id_akte_lahir)
	{
		$this->db->select("nik_ibu, person.nama AS nama_lengkap, person.lahir_tanggal, pekerjaan, kewarganegaraan");
		$this->db->where("akte_lahir.id_akte_lahir", $id_akte_lahir);
		$this->db->from("akte_lahir");
		$this->db->join("person", "person.nik = akte_lahir.nik_ibu");
		$this->db->join("kependudukan", "kependudukan.id_person = person.id_person");
		$query = $this->db->get();
		if($query->num_rows()>0){
			return $query->row_array();
		}else{
			return array();
		}
	}
	public function data_ayah($id_akte_lahir)
	{
		$this->db->select("nik_ayah, person.nama AS nama_lengkap, person.lahir_tanggal, pekerjaan, kewarganegaraan");
		$this->db->where("akte_lahir.id_akte_lahir", $id_akte_lahir);
		$this->db->from("akte_lahir");
		$this->db->join("person", "person.nik = akte_lahir.nik_ayah");
		$this->db->join("kependudukan", "kependudukan.id_person = person.id_person");
		$query = $this->db->get();
		if($query->num_rows()>0){
			return $query->row_array();
		}else{
			return array();
		}
	}
	public function data_pelapor($id_akte_lahir)
	{
		$this->db->select("person.nik AS nik_pelapor, person.nama AS nama");
		$this->db->where("akte_lahir.id_akte_lahir", $id_akte_lahir);
		$this->db->from("akte_lahir");
		$this->db->join("person", "person.nik = akte_lahir.nik_pelapor");
		$query = $this->db->get();
		if($query->num_rows()>0){
			return $query->row_array();
		}else{
			return array();
		}		
	}
	public function data_saksi1($id_akte_lahir)
	{
		$this->db->select("person.nik AS nik_saksi1, person.nama AS nama");
		$this->db->where("akte_lahir.id_akte_lahir", $id_akte_lahir);
		$this->db->from("akte_lahir");
		$this->db->join("person", "person.nik = akte_lahir.nik_saksi1");
		$query = $this->db->get();
		if($query->num_rows()>0){
			return $query->row_array();
		}else{
			return array();
		}		
	}
	public function data_saksi2($id_akte_lahir)
	{
		$this->db->select("person.nik AS nik_saksi2, person.nama AS nama");
		$this->db->where("akte_lahir.id_akte_lahir", $id_akte_lahir);
		$this->db->from("akte_lahir");
		$this->db->join("person", "person.nik = akte_lahir.nik_saksi2");
		$query = $this->db->get();
		if($query->num_rows()>0){
			return $query->row_array();
		}else{
			return array();
		}		
	}	
}
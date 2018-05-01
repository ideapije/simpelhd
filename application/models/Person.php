<?php
/**
* 
*/
class Person extends MY_Model
{
	public $return_type = 'array';	
	
	
	function __construct()
	{
		parent::__construct();
		
	}
	public function tambah($table, $data)
	{
		$this->db->insert($table, $data);
		return $this->db->insert_id();
	}
	public function get_data_person($id_person='')
	{
		$query=$this->db->where('person.id_person', $id_person)->get("person");
		if($query->num_rows()>0){
			return $query->row_array();
		}else{
			return array();
		}
	}
	public function get_data_person_pengajuan_ktp($id_person='')
	{
		$this->db->select("nama, no_kk, nik, alamat_sebelumnya, rt, rw, kode_pos");
		$this->db->where("person.id_person", $id_person);
		$this->db->from("person");
		$this->db->join("kartukeluarga", "kartukeluarga.id_person = person.id_person");
		$this->db->join("keluarga", "keluarga.id_keluarga = kartukeluarga.id_keluarga");
		$query=$this->db->get();
		if($query->num_rows()>0){
			return $query->row_array();
		}else{
			return array();
		}
	}
	public function get_data_person_pengajuan_ktp1($id_person='')
	{
		$this->db->select("nama, nik, alamat_sebelumnya, rt, rw, id_person");
		$this->db->where("person.id_person", $id_person);
		$this->db->from("person");
		$query=$this->db->get();
		if($query->num_rows()>0){
			return $query->row_array();
		}else{
			return array();
		}
	}
	public function get_data_person_c($id_person='')
	{
		$this->db->select("*");
		$this->db->from('person');
		$this->db->where('person.id_person', $id_person);
		$this->db->join('keluarga', 'keluarga.id_person = person.id_person');
		$query = $this->db->get();
		if($query->num_rows()>0){
			return $query->result();
		}else{
			return array();
		}
	}
	public function get_data_person_nik($nik)
	{
		$query = $this->db->where('nik', $nik)->get('person');
		if($query->num_rows()>0){
			return $query->row_array();
		}else{
			return array();
		}
	}
	public function get_data_person_nik_a($nik)
	{
		$query = $this->db->select('nama')->where('nik', $nik)->get('person');
		if($query->num_rows()>0){
			return $query->row_array();
		}else{
			return array();
		}
	}
}

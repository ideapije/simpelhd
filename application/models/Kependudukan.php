<?php
/**
* 
*/
class Kependudukan extends MY_Model
{
	public function get_kependudukan_1($id_keluarga)
	{
		$this->db->select("*");
		$this->db->where("kependudukan.id_keluarga", $id_keluarga);
		$this->db->from("kependudukan");
		$this->db->join("person", "person.id_person = kependudukan.id_person");
		$query = $this->db->get()->result();
		return $query;
	}
}
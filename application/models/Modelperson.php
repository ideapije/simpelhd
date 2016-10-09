<?php
/**
* 
*/
class Modelperson extends Pusat_Model{
	private $list_column;
	function __construct(){
		parent::__construct();
		$this->set_table_name('person');
		$this->set_list_column();
	}
	function set_list_column(){
		$this->list_column = array("`person`.`id`","`person`.`NIK`","`person`.`nama_lengkap`","`person`.`status_keluarga`","`person`.`jenis_kelamin`","`person`.`status_perkawinan`","`person`.`lahir_tanggal`");
	}

	function get_details($id=0){
		return $this->db->get_where('person',array('id'=>$id))->result_array();
	}
	
	function get_by_kkid($id=''){
		return $this->get_where(array('kk_id'=>$id));
	}
	
	function person_by_kk_id($id){
		$this->db->select($this->list_column);
		return $this->get_by_kkid($id);
	}

	function get_base_person(){
		$this->db->select($this->list_column);
		$this->db->from('person');
		$this->db->join('kepalakeluarga',"`person`.`kk_id` = `kepalakeluarga`.`id`");
	}
	function show_all(){
		$this->get_base_person();
		return $this->db->get()->result_array();
	}

	function base_count_all(){
		$this->get_base_person();
		return $this->db->count_all_results();
	}
	function base_num_rows(){
		$this->get_base_person();
		return $this->db->get()->num_rows();
	}
	function detailbase_num_rows($id=0){
		$this->db->from('person');
		$this->db->where('kk_id',$id);
		return $this->db->get()->num_rows();
	}
	function search_datatables_person(){
		if (!is_null($this->list_column)) {
			foreach ($this->list_column as $key => $value) {
				if(isset($_POST['search']['value'])){
					$dicari		= $_POST['search']['value'];
					$field 		= $value;
					if ($key == 0 ) {
						$this->db->like($field, $dicari);
					}else{
						$this->db->or_like($field, $dicari);
					}
				}
			}
		}
	}
	function get_pasangan($kk_id=0,$status=1){
		return $this->get_where(array('kk_id' =>$kk_id , 'status_keluarga'=>$status));
	}

	function sample_query_umur($param=0){
		$send  = ($param >=17 && $param <= 25)? 'sudah ' : 'belum ';
		$send .= $param;
		return $send;
	}
	
}

<?php
/**
* 
*/
class Global_model extends CI_Model
{
	protected $return_type = 'array';	
	protected $_table = '';
	protected $_pk = '';
	
	protected $all_return_type = array('array','object');
	
	function __construct($table='')
	{
		parent::__construct();
		$this->set_table($table);
	}
	public function set_return_type($return_type=''){
		if ($return_type=='') {
			$return_type='array';
		} else if (!in_array($return_type,$this->all_return_type)) {
			printr_data_ex("error, can't use <b>".$return_type."</b> as \$return_type value \n only 'array' or 'object' can be use as \$return_type value");
		}
		$this->return_type=$return_type;
	}
	public function set_table($table=''){
		$this->_table = $table;
		if ($table!='') {
			$sql = "SHOW KEYS FROM ".$table." WHERE Key_name = 'PRIMARY'";
			
			$query = $this->db->query($sql, FALSE);
			$result = $query->row_array();
			$this->_pk = $result['Column_name'];
		}
	}

	public function get_table(){
			return $this->_table;
	}
	public function get_pk(){
			return $this->_pk;
	}
	public function get_return_type(){
			return $this->return_type;
	}
	public function check_table(){
		if ($this->_table=='') {
			printr_data('no table set');
			printr_data_ex('to set table use <code>$this->global_model->set_table(\'table_name\');</code>');
		}
	}

	public function insert_by_table($table='', $data='')
	{
		$this->check_table();
		if ($data!='') {
			$this->db->insert($table, $data);
			return $this->db->insert_id();	
		}else printr_data_ex('warning, no data to be inserted to table <code><b>\''.$this->_table.'\'</b></code>');
	}
	public function insert($data='')
	{
		return $this->insert_by_table($this->_table, $data);
	}

	public function get_data($parameter='')
	{
		if ($parameter=='') {
			$query = $this->db->get($this->_table);
			if ($this->return_type=='array') {
				$return = $query->result_array();
			} else if ($this->return_type=='object'){
				$return = $query->row();
			}
		} else {
			if (is_array($parameter)) {
				extract($parameter, EXTR_PREFIX_SAME, "wddx");

			} else printr_data_ex('param must be in array type that store');
			// $query = $this->
			// return
		}
		return $return;
	}

	public function get_data_person($id_person='')
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
	
}

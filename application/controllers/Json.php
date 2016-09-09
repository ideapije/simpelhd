<?php
/**
* 
*/
class Json extends Dashboard{
	
	function __construct(){
		parent::__construct();
	}
	function all_person(){
		$data = $this->person->show_all();
		echo json_encode($data);
	}
	function all_kepkel(){
		$data = $this->db->get('kepalakeluarga')->result_array();
		echo json_encode($data);	
	}
	function get_job_json(){
		$kodeA = GetKodeJob('A');
		unset($kodeA[0]);
		$kodeB = GetKodeJob('B');
		unset($kodeB[0]);
		$data  = array_merge($kodeA,$kodeB);
		echo json_encode($data);
	}
}

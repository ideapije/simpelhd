<?php
/**
* 
*/
class Datatables extends Dashboard{
	function __construct(){
		parent::__construct();
	}
	function person(){
		$this->generate_datatables('person');
	}
	function person_by_kkid($id=''){
		$data['query']	= ($this->person->person_by_kk_id($id))? $this->person->person_by_kk_id($id) : array();	
		$this->generate_datatables('person',$data);
	}
	function kepkel(){
		$this->generate_datatables('kepkel');		
	}
}

<?php
/**
* 
*/
class Person extends Dashboard{
	function __construct(){
		parent::__construct();
	}

	function detail($id=NULL){
		$data['person'] = $this->person->get_by_id($id);
		$this->admin_view('arsip/detail-person',$data);
	}

}

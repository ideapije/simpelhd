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
	function person_with_join(){
		$data['query'] = $this->person->show_all_datatablesformat();
		$data['tr']	   = $this->person->base_num_rows();
		$data['tf']	   = $this->person->base_count_all();
		$this->generate_datatables('person',$data);
	}
	function kepkel(){
		$this->generate_datatables('kepkel');		
	}
	function person_by_kkid($id=''){
		$data['query']	= ($this->person->get_by_kkid($id))? $this->person->get_by_kkid($id) : array();	
		$data['links']	= array(
				array('url'=>'welcome/wew','text'=>'Detail')
				,array('url'=>'welcome/kk_setup','text'=>'Ubah')
				,array('url'=>'cetak/index','text'=>'Cetak')
		);
		$this->generate_datatables('person',$data);
	}
}

<?php
/**
* 
*/
class Tesmodel extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->template->set_layout('ui_bootstrap_with_navbar');
		$this->load->model('person');
	}

	public function index()
	{
		$tes = $this->person->get_data_person_c();
		vardump_data_ex($tes);
	}
}

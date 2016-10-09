<?php
/**
* 
*/
class Simpel_404 extends Dashboard{
	
	function __construct(){
		parent::__construct();
	}
	public function index(){
		$this->admin_view('home');
	}
}
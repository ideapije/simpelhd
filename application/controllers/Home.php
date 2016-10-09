<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Dashboard{
	function __construct(){
		parent::__construct();
	}
	function index(){
		$this->admin_view('home');
	}	
	function atur_profil_kelurahan(){
		$data['errors'] = $this->session->flashdata('errors_log');
		$this->admin_view('atur/profil-kelurahan',$data);
	}
	function logout(){
		$this->session->sess_destroy();
		redirect('login/index');
	}
}

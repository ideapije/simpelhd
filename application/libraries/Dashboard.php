<?php
class Dashboard extends Pusat_Controller{
	protected $action_list = array();
	function __construct(){
		parent::__construct();
		$this->cek_no_session_login();
	}
	function load_admin_content_view($fileName='',$data=array()){
		if (isset($this->sesi['id'])) {
			$data['myprofile']	= $this->session->userdata();
		}
		$data['errors']			= $this->session->flashdata('errors_log');
		$this->dashboard($fileName,$data);
	}
	function select_option_view($name='',$data=array(),$id='',$selected=NULL){
		$n_data = count($data);
		if ($n_data > 0 && !empty($name)) {
			$view ='<select name="'.$name.'" class="form-control op-step" id="'.$id.'">';
			foreach ($data as $key => $value) {
				$cek='';
				if ((!is_null($selected)) && ($selected == $key)) {
					$cek='selected';
				}
				$view .='<option value="'.$key.'" '.$cek.'>'.$value.'</option>';
			}
			$view .='</select>';
			return $view;
		}else{
			return 0;	
		}
	}

	//-----------------------------------------------------------------------------------------------------------------------------------
	//------------------ Codebase Datatables Functions ---------------------------------------------------------------------------------	
	function generate_datatables($entitas='person',$custom=array()){
		$data['query'] 	= $this->$entitas->get_datatables();
		$data['tr'] 	= $this->$entitas->count_all();
		$data['tf']		= $this->$entitas->count_filtered();
		$data['links']	= array(
				array('url'=>'Welcome/arsip_person_by_kepkelid','text'=>'Detail')
				,array('url'=>'Welcome/kk_setup','text'=>'Ubah')
				,array('url'=>'cetak/index','text'=>'Cetak')
		);
		if (count($custom)>0) {
			$data 		= array_merge($data,$custom);
		}
		$this->action_list 	= $data['links'];
		$data['larik'] 		= $this->button_action_list($data['query']);
		$data['source']		= $this->set_filter_data_source($data['larik']);
		$output				= array('draw'=>NULL,'recordsTotal'=>0,'recordsFiltered'=>0,'data'=>array());
		if ($data['source']) {
			$output['draw'] 			= NULL;
			$output['recordsTotal']		= $data['tr'];
			$output['recordsFiltered']	= $data['tf'];
			$output['data']				= $data['source'];
			if (isset($_POST['draw'])) {
				$output['draw'] 		= $_POST['draw'];
			}
		}
		echo json_encode($output);
	}
	function set_filter_data_source($filter=array()){
		$n_filter = count($filter);
		if ($n_filter > 0) {
			array_walk_recursive($filter, 'filter_values');
			return $this->change_keys_with_numb($filter);
		}else{
			return false;
		}
	}

	function button_action_list($data=array()){
		$n_data = count($data);
		if ($n_data > 0) {
			foreach ($data as $key => $value) {
				$data[$key]['aksi'] =$this->button_action_view($value['id']);
			}
		}
		return $data;
	}

	function button_action_view($id=0){
		$button  	= '<div class="btn-group" id="'.$id.'">';
		$button .= '<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">';
    	$button .= 'Aksi <span class="caret"></span></button>';
  		$button .= '<ul class="dropdown-menu" role="menu">';
		if ($this->action_list) {
			foreach ($this->action_list as $key => $value) {
				$button .= '<li><a href="'.site_url($value['url'].'/'.$id).'">'.$value['text'].'</a></li>';
			}
		}
		$button .= '</ul></div>';
    	return $button;
	}
}


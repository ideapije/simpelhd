<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Dashboard{
	function __construct(){
		parent::__construct();
	}
	function index(){		
		$this->load_admin_content_view('home');
	}
	function kk_setup($id=false){
		$data['action']		= 'submit_person/new_kepkel';
		if ($id) {
			$data['action']	= 'submit_person/update_kepkel';
			$data['id']		= $id;
			$data['details']= $this->kepkel->get_by_id($id);
		}
		if (isset($this->sesi['person'])) {
			$this->kk_step();
		}else{
			$this->load_admin_content_view('kk/setup',$data);
		}
		
 	}
 	function kk_step_content($step='1',$data=array()){
 		 	$data['keluarga']	= $this->person->get_by_kkid($this->sesi['person']['id']);
 			$data['perkawinan']			= $this->db->get_where('person',array('kk_id'=>$this->sesi['person']['id'],'status_perkawinan >='=>'2'))->result_array();
 			$data['jmlkel']				= count($data['keluarga']);
 			$data['goldar']				= GetGoldar();
 			$data['bukan_pegawai_negri']= GetKodeJob('B');
 			$data['pegawai_negri']		= GetKodeJob('A');
			$data['statuskel']			= get_status_kel();
			$data['kelainfisik']		= GetKelainanFisik();
			$data['penycct']			= GetPenyndangCacat();
			$data['pendakhir']			= GetPendidikanTerakhir();
			$data['agama']				= GetAgama();
			$data['gender']				= GetGender();
			$data['kawin']				= Get_sts_kawin();
			return $this->load->view('pages/kk/step-'.$step,$data,true);
 	}
 	function kk_step($step='1'){
 		if (isset($this->sesi['person']) && $this->sesi['person']['name']) {
 			$data['action']		= 'submit_person/update_kepkel';
 			$data['kodewil']	= NOBREBES;
 			$data['kepkel_id']	= $this->sesi['person']['id'];
 			$data['ayah']		= $this->person->get_pasangan($this->sesi['person']['id'],1)[0];
			$data['ibu']		= $this->person->get_pasangan($this->sesi['person']['id'],3)[0];
 			$data['details']	= $this->kepkel->get_by_id($this->sesi['person']['id']);
			$data['part']		= $this->kk_step_content($step,$data);
			if (is_null($data['details'])) {
				$this->session->unset_userdata('person');
				$this->index();
			}else{
				$data['modal']			= array(
					'title'  => 'Detail Bpk '.$data['details']->nama
					,'content' => $this->load->view('pages/kk/setup',$data,true)
					,'footer'=>'');
				$data['modal']			= $this->template->widget('Modal_pop_up',$data);
 				$this->load_admin_content_view('wizard-table',$data); 
			}
 		}else{
 			$this->kk_setup();
 		}
 	}
 	function kk_done(){
 		if (isset($this->sesi['person'])) {
 			$anak_anak 	= $this->person->get_pasangan($this->sesi['person']['id'],4);
 			$ibu 		= $this->person->get_pasangan($this->sesi['person']['id'],3)[0];
 			$ayah 		= $this->person->get_pasangan($this->sesi['person']['id'],1)[0];
 			if ($anak_anak) {
 				foreach ($anak_anak as $key => $value) {
 					$this->person->update(
 							array('id'=>$value['id'])
 							,array(
 							'ibu_nik' =>$ibu['NIK'] 
 							,'ibu_nama'=>$ibu['nama_lengkap']
 							,'ayah_nik'=>$ayah['NIK']
 							,'ayah_nama'=>$ayah['nama_lengkap']));
 				}
 			}
 			$this->session->unset_userdata('person');
 			$this->arsip_all_kepkel();
 		}
 	}
 	function person_remove($id=''){
 		$id = decrypt_url($id);
 		if ($this->person->delete_by_id($id)) {
 			$this->session->set_flashdata('errors_log','gagal menghapus anggota keluarga :(');
 		}
 		redirect('Welcome/kk_step/1','refresh');
 	}
	function petugas(){
		$this->load_admin_content_view('wew');
	}
	function arsip(){
		$data['all'] = $this->person->ShowAll();
		$this->load_admin_content_view('arsip/all-person',$data);	
	}
	function arsip_all_person(){
		$data['thead'] 		= array('No','NIK','Nama Lengkap','Status Keluarga','Jenis Kelamin','Status Perkawinan','Keluarga','action');
		$data['selector']	='tb-person';
		$data['link']		= site_url('datatables/person_withjoin');
		$this->load_admin_content_view('arsip/all-person-datatables-format',$data);		
	}
	function arsip_all_kepkel(){
		$kepkel_column 		=$this->labels->kepkel();
		array_push($kepkel_column, 'aksi');
		$data['thead'] 		= $kepkel_column;
		$data['selector']	='tb-kepkel';
		$data['link']		= site_url('datatables/kepkel');
		$this->load_admin_content_view('arsip/all-person-datatables-format',$data);		
	}
	function arsip_person_by_kepkelid($id=0){
		$person_column 		= $this->labels->person();
		array_push($person_column, 'aksi');
		$data['thead'] 		= $person_column;
		$data['selector']	='tb-kepkel-details';
		$data['link']		= site_url('datatables/person_by_kkid/'.$id);
		$this->load_admin_content_view('arsip/all-person-datatables-format',$data);		
	}
	function atur_profil_kelurahan(){
		$data['errors'] = $this->session->flashdata('errors_log');
		$this->load_admin_content_view('atur/profil-kelurahan',$data);
	}

	function logout(){
		$this->session->sess_destroy();
		redirect('login/index');
	}
}

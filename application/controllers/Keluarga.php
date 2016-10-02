<?php
/**
* 
*/
class Keluarga extends Dashboard{
	
	function __construct(){
		parent::__construct();
	}
	
	function setup($id=false){
		($id)? $data = $this->id_boolean_true($id) : $data['action'] = 'submit/new_kepkel';
		(isset($this->sesi['person']))?	$this->step() : $this->admin_view('kk/setup',$data) ;
	}

	 function step($step='1'){
 		if (isset($this->sesi['person']) && $this->sesi['person']['name']) {
 			$data['action']		= 'submit/update_kepkel';
 			$data['kodewil']	= NOBREBES;
 			$data['kepkel_id']	= $this->sesi['person']['id'];
 			$data['ayah']		= $this->person->get_pasangan($this->sesi['person']['id'],1)[0];
			$data['ibu']		= $this->person->get_pasangan($this->sesi['person']['id'],3)[0];
 			$data['details']	= $this->kepkel->get_by_id($this->sesi['person']['id']);
			$data['part']		= $this->step_content($step,$data);
			if (is_null($data['details'])) {
				$this->session->unset_userdata('person');
				$this->index();
			}else{
				$data['modal']	= array(
					'title'  	=> 'Detail Bpk '.$data['details']->nama
					,'content' 	=> $this->load->view('pages/kk/setup',$data,true)
					,'footer'	=>''
				);
				$data['modal']	= $this->template->widget('Modal_pop_up',$data);
 				$this->admin_view('wizard-table',$data); 
			}
 		}else{
 			$this->setup();
 		}
 	}

	function step_content($step='1',$data=array()){
 			$data['keluarga']			= $this->person->get_by_kkid($this->sesi['person']['id']);
 			$data['perkawinan']			= $this->db->get_where('person',array('kk_id'=>$this->sesi['person']['id'],'status_perkawinan ='=>'2'))->result_array();
 			$data['jmlkel']				= count($data['keluarga']);
 			$data['goldar']				= GetGoldar();
 			$data['bukan_pegawai_negri']= GetKodeJob('B');
 			$data['pegawai_negri']		= GetKodeJob('A');
			$data['statuskel']			= get_status_kel();
			//$this->status_keluarga_terpilih($data['keluarga'],get_status_kel());
			$data['kelainfisik']		= GetKelainanFisik();
			$data['penycct']			= GetPenyndangCacat();
			$data['pendakhir']			= GetPendidikanTerakhir();
			$data['agama']				= GetAgama();
			$data['gender']				= GetGender();
			$data['kawin']				= Get_sts_kawin();
			return $this->load->view('pages/kk/step-'.$step,$data,true);
 	}
 	function status_keluarga_terpilih($db=array(),$larik=array()){
 		$kunci 	= array();
 		foreach ($db as $key => $value) {
 			$kunci[] = $value['status_keluarga'];
 		}
 		if ($kunci) {
 			$kunci_exclude = array_intersect($kunci,array_keys($larik));
 			foreach ($kunci_exclude as $key => $value) {
 				unset($larik[$value]);
 			}
 		}
 		return $larik;
 	}
 
 	function done(){
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
 			redirect('arsip/all/kepkel','refresh');
 		}
 	}
 	
 	function person_remove($id=''){
 		$id = decrypt_url($id);
 		if ($this->person->delete_by_id($id)) {
 			$this->session->set_flashdata('errors_log','gagal menghapus anggota keluarga :(');
 		}
 		redirect('Welcome/step/1','refresh');
 	}

 	function id_boolean_true($id){
		$data['action']	= 'submit/update_kepkel';
		$data['id']		= $id;
		$data['details']= $this->kepkel->get_by_id($id);
		return $data;
	}
}

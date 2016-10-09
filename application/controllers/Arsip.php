<?php
/**
* @author needDevelopers
* @param table_name
* Arsip mengolah database menjadi tampilan tabel html 
* 
*/
class Arsip extends Dashboard{
	
	function __construct(){
		parent::__construct();
	}
	/**
	*
	* all menampilkan semua data berdasarkan
	* @param nama tabel dan id tabel kepala keluarga
	**/
	function all($by='person',$id=false){
		$data = $this->all_content_data($by);
		//jika ada id maka tampilkan nama kepala keluarga, selain itu kosong
		($id)?  $data['bapak'] = GetKepKelById($id,'nama') : $data['bapak'] = '';
		$this->admin_view('arsip/all-person-datatables-format',$data);			
	}

	function all_content_data($key='person'){
		$kepkel_column 		=$this->labels->kepkel();

		array_push($kepkel_column, 'aksi'); // menambahkan element "aksi"

		$data['person'] = array(
			'thead'=> array('No','NIK','Nama Lengkap','Status Keluarga','Jenis Kelamin','Status Perkawinan','Keluarga','action')
			,'link' => 'datatables/person_by_kkid/'.$this->last_url()
		);
		$data['kepkel'] = array(
			'thead'=> $kepkel_column
			,'link' => 'datatables/kepkel'
		);

		return (isset($data[$key]))? $data[$key] : $data;
	}

	function keluarga_by($id=0){
		$person_column 		= $this->labels->person();
		array_push($person_column, 'aksi');
		$data['thead'] 		= $person_column;
		$data['bapak']		= 'Bpk. <strong >'.ucfirst(GetKepKelById($id,'nama')).'</strong>';
		$data['selector']	= 'tb-kepkel-details';
		$data['link']		= site_url('datatables/person_by_kkid/'.$id);
		$this->admin_view('arsip/all-person-datatables-format',$data);		
	}

}

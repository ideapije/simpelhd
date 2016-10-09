<?php
/**
* 
*/
class ModelLabels extends Pusat_Model{
	
	function __construct(){
		parent::__construct();
	}
	function kepkel(){
		return array(
			'No'
			,'Nama Kepala Keluarga'
			,'Alamat'
			,'Kode Pos'
			,'Telepon'
			,'RT'
			,'Ketua RT'
			,'RW'
			,'Ketua RW'
			,'Jumlah Anggota Keluarga'
			);
	}
	function person(){
		return array('No','NIK','Nama Lengkap','Status Keluarga','Jenis Kelamin','Status Perkawinan','KTP');
	}
	function kepkel_field(){
		$this->set_table_name('kepalakeluarga');
		$data = $this->GetFields();
		if (isset($data[0])) {
			unset($data[0]);
		}
		return $data;
	}
	function kk_header($key=false){
		$data = array(
			'kiri'=>array('nama kepala Keluarga','alamat','RT/RW','Desa/Kelurahan')
			,'kanan'=>array('Kecamatan','Kabupaten/Kota','Kode Pos','Provinsi')
		);
		return ($key && isset($data[$key]))? $data[$key] : $data;
	}
	function type_date(){
		$data['person'] = array('lahir_tanggal','passport_tgl_terakhir','perkawinan_tgl','cerai_tgl');
		return $data;
	}
	function type_textarea(){
		$data['person'] = array('alamat');
		return $data;
	}
	function type_select(){
		$data['person'] = array('jenis_kelamin','goldar','agama','pekerjaan');
		return $data;
	}
}
?>
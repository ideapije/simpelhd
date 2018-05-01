<?php
/**
* 
*/
class Keluarga extends MY_Model
{
	public function tambah()
	{
		$data = array(
			'no_kk' 			=> $this->input->post('no_kk'),
			'nik_kepkel' 		=> $this->input->post('nik_kepkel'),
			'alamat' 			=> $this->input->post('alamat'),
			'kode_pos'			=> $this->input->post('kode_pos'),
			'no_rt' 			=> $this->input->post('no_rt'),
			'no_rw' 			=> $this->input->post('no_rw'),
			'telepon'		 	=> $this->input->post('telepon'),
			'provinsi' 			=> $this->input->post('provinsi'),
			'kabupaten_kota'	=> $this->input->post('kabupaten_kota'),
			'kecamatan' 		=> $this->input->post('kecamatan'),
			'desa_kelurahan' 	=> $this->input->post('desa_kelurahan')
		);

		$this->db->insert('keluarga', $data);
	}

	public function edit()
	{
		$id_keluarga = $this->input->post('id_keluarga');
		$data = array(
			'no_kk' 			=> $this->input->post('no_kk'),
			'nik_kepkel' 		=> $this->input->post('nik_kepkel'),
			'alamat' 			=> $this->input->post('alamat'),
			'kode_pos'			=> $this->input->post('kode_pos'),
			'no_rt' 			=> $this->input->post('no_rt'),
			'no_rw' 			=> $this->input->post('no_rw'),
			'jumlah_anggota_keluarga' 	=> $this->input->post('jumlah_angkel'),
			'telepon'		 	=> $this->input->post('telepon'),
			'provinsi' 			=> $this->input->post('provinsi'),
			'kabupaten_kota'	=> $this->input->post('kabupaten_kota'),
			'kecamatan' 		=> $this->input->post('kecamatan'),
			'desa_kelurahan' 	=> $this->input->post('desa_kelurahan')
		);

		$this->db->where('id_keluarga', $id_keluarga);
		$this->db->update('keluarga', $data);
	}

	public function submit_anggota_keluarga($status)
	{
		$nik = $this->input->post('nik');
		$akta_lahir = $this->input->post("akta_lahir");
		if($akta_lahir==1){
			$no_akta_lahir = 0;
		}else{
			$no_akta_lahir = $this->input->post("no_akta_lahir");
		}
		$kelainan_fisik = $this->input->post("kelainan_fisik");
		if($kelainan_fisik==1){
			$penyandang_cacat = "";
		}else{
			$penyandang_cacat = $this->input->post("penyandang_cacat");
		}
		$akta_perkawinan = $this->input->post("akta_perkawinan");
		if($akta_perkawinan==1){
			$no_akta_perkawinan = 0;
			$tanggal_perkawinan = 0;
		}else{
			$no_akta_perkawinan = $this->input->post("no_akta_perkawinan");
			$tanggal_perkawinan = $this->input->post("tgl_perkawinan");
		}
		$akta_perceraian = $this->input->post("akta_cerai");
		if($akta_perceraian==1){
			$no_akta_perceraian = 0;
			$tanggal_perceraian = 0;
		}else{
			$no_akta_perceraian = $this->input->post("no_akta_cerai");
			$tanggal_perceraian = $this->input->post("tgl_perceraian");
		}
		$data = array(
					"nik" 					=> $this->input->post("nik"),
					"nama" 					=> $this->input->post("nama"),
					"gelar" 				=> $this->input->post("gelar"),
					"alamat_sebelumnya" 	=> $this->input->post("alamat_sebelumnya"),
					"no_paspor" 			=> $this->input->post("no_paspor"),
					"tgl_berakhir_paspor" 	=> $this->input->post("tgl_berakhir_paspor"),
					"jenis_kelamin" 		=> $this->input->post("jenis_kelamin"),
					"lahir_tempat" 			=> $this->input->post("lahir_tempat"),
					"lahir_tanggal" 		=> $this->input->post("lahir_tanggal"),
					"akta_lahir" 			=> $this->input->post("akta_lahir"),
					"no_akta_lahir" 		=> $no_akta_lahir,
					"goldar" 				=> $this->input->post("goldar"),
					"agama" 				=> $this->input->post("agama"),
					"kepercayaan_tuhan_YME" => $this->input->post("kepercayaan_tuhan_YME"),
					"status_perkawinan" 	=> $this->input->post("status_perkawinan"),
					"kelainan_fisik_mental" => $this->input->post("kelainan_fisik"),
					"penyandang_cacat" 		=> $penyandang_cacat,
					"pendidikan_terakhir" 	=> $this->input->post("pendidikan_terakhir"),
					"pekerjaan" 			=> $this->input->post("pekerjaan"),
					"nik_ibu" 				=> $this->input->post("nik_ibu"),
					"nama_ibu" 				=> $this->input->post("nama_ibu"),
					"nik_ayah" 				=> $this->input->post("nik_ayah"),
					"nama_ayah" 			=> $this->input->post("nama_ayah"),
					"akta_perkawinan"		=> $this->input->post("akta_perkawinan"),
					"no_akta_perkawinan"	=> $no_akta_perkawinan,
					"tgl_perkawinan"		=> $tanggal_perkawinan,
					"akta_cerai"			=> $this->input->post("akta_cerai"),
					"no_akta_cerai"			=> $no_akta_perceraian,
					"tgl_perceraian"		=> $tanggal_perceraian
			);
		$data_person = $this->db->get_where('person', array('nik'=>$nik));
		if($data_person->num_rows() == 0)
		{
			//nambah data person
			$this->db->insert('person', $data);
			$id_person = $this->db->insert_id();
		} else {
			// update data person
			$this->db->where('nik', $nik);
			$this->db->update('person', $data);

			$sembarang = $data_person->row();
			$id_person = $sembarang->id_person;
		}

		// input / data kartu keluarga
		$id_keluarga = $this->input->post('id_keluarga');

		$data_kk = array(
					'id_keluarga' 	=> $id_keluarga,
					'id_person'		=> $id_person,
					'hub_keluarga'	=> $this->input->post("hub_keluarga")
			);

		if($status == "tambah")
		{
			$this->db->insert('kartukeluarga', $data_kk);
		} elseif ($status == "edit") {
			$this->db->where('id_kartukeluarga', $this->input->post('id_kartukeluarga'));
			$this->db->update('kartukeluarga', $data_kk);
		}
	}

	public function get_data_kartu_keluarga($id_keluarga)
	{
		$query = $this->db->where('id_keluarga', $id_keluarga)->get('keluarga');
		if($query->num_rows()>0){
			return $query->row_array();
		}else{
			return array();
		}
	}

	public function get_data_kartu_keluarga_cetak($id_keluarga)
	{
		$this->db->select("*");
		$this->db->where('keluarga.id_keluarga', $id_keluarga);
		$this->db->from("keluarga");
		$this->db->join("person", "person.nik = keluarga.nik_kepkel");
		$query = $this->db->get();
		if($query->num_rows()>0){
			return $query->row_array();
		}else{
			return array();
		}
	}

	public function get_anggota_keluarga($id_keluarga)
	{
		$this->db->select("*");
		$this->db->from("kartukeluarga k");
		$this->db->join("keluarga e", "e.id_keluarga=k.id_keluarga", "left");
		$this->db->join("person p", "p.id_person=k.id_person", "left");
		$this->db->where("k.id_keluarga", $id_keluarga);
		$this->db->order_by('k.hub_keluarga','asc'); 
		$query = $this->db->get();
		if($query->num_rows()>0){
			return $query->result_array();
		}else{
			return array();
		}	
	}

	public function get_anggota_keluarga_1($id_kartukeluarga)
	{
		$this->db->select("*");
		$this->db->from("kartukeluarga k");
		$this->db->join("keluarga e", "e.id_keluarga=k.id_keluarga", "left");
		$this->db->join("person p", "p.id_person=k.id_person", "left");
		$this->db->where("k.id_kartukeluarga", $id_kartukeluarga);
		$query = $this->db->get();
		if($query->num_rows()>0){
			return $query->row_array();
		}else{
			return array();
		}	
	}

	public function jumlah_keluarga($id_keluarga)
	{
		$query = $this->db->where('id_keluarga', $id_keluarga)->get('kartukeluarga')->num_rows();
		return $query;
	}

	public function get_data_anggota_keluarga($id_keluarga)
	{
		$this->db->select("*");
		$this->db->where("kartukeluarga.id_keluarga", $id_keluarga);
		$this->db->from("kartukeluarga");
		$this->db->join("person", "person.id_person = kartukeluarga.id_person");
		$query = $this->db->get();
		if($query->num_rows()>0){
			return $query->result();
		}else{
			return array();
		}
	}

}
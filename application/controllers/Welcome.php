<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller{
//CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct()
	{
		parent::__construct();
		if (!$this->logged_in) {
			redirect('auth/index','refresh');
		}
		$this->template->set_layout('ui_bootstrap_with_navbar');
	}
	
	public function index($value='pages/welcome_message')
	{
		// printr_data_ex(base_url());
		$this->template->set_content($value)->render();
	}

	public function datatables()
	{
		$this->load->library('datatables');
		$this->datatables->set_sources('users')->show();
	}

	public function print_sample_pdf()
	{
		$this->load->library('pdflib');
		$data['greeting'] ='hello from Dompdf';
		$this->pdflib->render_from_page('templates/sample_pdf',$data);
	}
	public function permohonan_kk($id_keluarga)
	{
		$this->template->set_content('forms/permohonan_kk')->render();
	}
	public function cetak_kk($id_keluarga)
	{
		$this->load->library('pdflib');
		$this->load->model('keluarga');

		$data['kartu_keluarga'] = $this->keluarga->get_data_kartu_keluarga_cetak($id_keluarga);
		$data['jumlah_anggota_keluarga'] = $this->keluarga->jumlah_keluarga($id_keluarga);

		$data['data_kelurahan'] = $this->db->get('kelurahan')->row_array();
		$data['data_keluarga_1'] = $this->keluarga->get_data_anggota_keluarga($id_keluarga);

		//$this->template->set_content('templates/kartu_keluarga', $data)->render();
		$this->pdflib->render_landscape('templates/kartu_keluarga', $data);
	}
	public function cetak_ktp()
	{
		$this->load->library('pdflib');
		$this->pdflib->render_landscape('templates/ktp');
	}
	public function cetak_akte_lahir()
	{
		$this->load->library('pdflib');
		$this->pdflib->render_portrait('templates/akte_lahir');	
		//$this->template->set_content('templates/akte_lahir')->render();
	}
	// public function tambah_person()
	// {
	// 	$this->template->set_content('forms/person')->render();

	// }
	public function simpan_person()
	{
		$this->load->model('Person');

		$data = array(
			'nik' 					=> $this->input->post('nik'),
			'nama' 					=> $this->input->post('namalengkap'),
			'jenis_kelamin' 		=> $this->input->post('jeniskelamin'),
			'lahir_tempat' 			=> $this->input->post('tempatlahir'),
			'lahir_tanggal' 		=> $this->input->post('tanggallahir'),
			'agama' 				=> $this->input->post('agama'),
			'goldar' 				=> $this->input->post('goldar')
		);

		$this->Person->tambah('person', $data);
		redirect('welcome/daftar/person');
	}
	public function tambah_keluarga()
	{
		$this->template->set_content('forms/keluarga')->render();
	}

	public function simpan_keluarga()
	{
		$this->load->model('Keluarga');

		$this->Keluarga->tambah();
		redirect('welcome/daftar/keluarga');
	}

	public function edit_keluarga()
	{
		$this->load->model('Keluarga');

		$this->Keluarga->edit();
		redirect('welcome/daftar/keluarga');
	}

	public function tambah_person($id_person=""){
		//$this->load->model('person');
		//$data['data_person'] = $this->person->get_data_person($id_person);
		$this->template->set_content('forms/tambah_person')->render();
	}
	public function permohonan_ktp($id_person="")
	{
		$this->load->library('pdflib');
		$this->load->model('person');
		$data1['data_person'] = $this->person->get_data_person_pengajuan_ktp1($id_person);
		$data1['data_kelurahan'] = $this->db->get('kelurahan')->row_array();
		$this->template->set_content('forms/permohonan_ktp', $data1)->render();

		//$this->template->set_content('templates/ktp', $data)->render();

	}
	public function submit_ajukan_ktp()
	{
		$data = $this->input->post(NULL, TRUE);
		$id_person = $data['id_person'];
		unset($data['id_person']);
		if($id_person){
			$this->db->where('id_person', $id_person)->update('person', $data);
			$this->session->set_flashdata('sukses', 'data berhasil di update!');
			redirect(base_url('welcome/daftar/person'));
		}else{
			printr_data($data);
			$this->db->insert('person', $data);
			$this->session->set_flashdata('sukses', 'data berhasil di masukkan!');
			redirect(base_url('welcome/daftar/person'));
		}
	}
	public function submit_permohonan_ktp()
	{
		// $data = $this->input->post(NULL, TRUE);
		// $id_person = $data['id_person'];
		// unset($data['id_person']);
		// unset($data['no_kk']);
		// unset($data['kode_pos']);
		// $a=$this->db->where('id_person', $id_person)->update('person', $data);
		// if($a){
			$data1['data_person'] = $this->input->post(NULL, TRUE);
			//$this->template->set_content('templates/ktp', $data1)->render();
			$this->load->library('pdflib');
			$this->pdflib->render_portrait('templates/ktp', $data1);
		// }	
	}


	public function au_ah()
	{
		// ini adalah global model
		$this->load->model('global_model');
		/* global_model
		 * =================
		 * Deskripsi : untuk menggunakan global_model ini perlu 
		 * membuat objek dari global_model.
		 * 
		 * Atribut dan Method
		 * =================
		 * atribut yang ada dalam global model ini yaitu
		 * -> protected $return_type =  'array'; (default)
		 * -> protected $_table = ''; (default)
		 * -> protected $_pk = ''; (default)
		 * 
		 * method yang ada dalam global model ini yaitu:
		 * ~ method dasar dan method umum
		 * 
		 * method dasar
		 * =!=!=!=!=!=!
		 * -> function __construct($table='')
		 *      untuk membuat objek baru dan 
		 *      inisialisasi objek baru
		 *      
		 *      ex. TANPA menyertakan nama table
		 *      $gm = new $this->global_model;
		 *      objek $gm akan memiliki nilai awal
		 *      $_table = ''
		 *      $_pk 		= ''

		 *      ex. dengan menyertakan nama table
		 *      $gm = new $this->global_model('nama_table');
		 *      objek $gm akan memiliki nilai awal
		 *      $_table = 'nama_table'
		 *      $_pk 		= 'nama_primary_key'
		 *      
		 * -> function set_return_type($return_type='')
		 *      untuk mengset atribut $return_type
		 *      default 'array'
		 *      
		 *      return type yang tersedia 
		 *			'array' atau 'object'
		 * 
		 *      ex.
		 *      $gm->set_return_type('array');
		 *      $gm->set_return_type('object');
		 *      
		 *      note : 
		 *			- apabila salah memberi nilai, maka 
		 *        muncul pesan error 'error, only 'array' 
		 *				or 'object' can be use as $return_type value'
		 * 
		 * -> function set_table($table='')
		 *      untuk mengset atribut $_table dan 
		 *      men generate nilai atribut $_pk
		 *      
		 *      ex.
		 *      $gm->set_table('nama_table');
		 *      
		 *      note : apabila nama table salah, maka akan 
		 *      muncul pesan error yang digenerate oleh CI
		 *      
		 * -> function check_table()
		 *      untuk mengecek variable $_table,
		 * 			
		 *      ex.
		 *      $gm->check_table();
		 *
		 * 			note : 
		 *        jika table belum diset maka akan 
		 *        mereturn 'no table set'
		 *      	
		 *      	jika table sudah diset maka 
		 *      	tidak akan menampilkan pesan error
		 *      	
		 * -> function get_return_type()
		 *      untuk mendapatkan nilai atribut return_type
		 * 			
		 *      ex.
		 *      $gm->get_return_type();
		 *      	
		 * -> function get_table()
		 *      untuk mendapatkan nilai atribut table
		 * 			
		 *      ex.
		 *      $gm->get_table();
		 *     
		 * -> function get_pk()
		 *      untuk mendapatkan nilai atribut pk
		 * 			
		 *      ex.
		 *      $gm->get_pk();
		 * 
		 * method umum
		 * =!=!=!=!=!=!
		 * -> function insert()
		 *      untuk menginsert data ke table yang telah diset
		 * 			data yang diinsertkan dalam bentuk array
		 * 			
		 *      ex. cara 1
		 * 			$data = array(
		 *				'field1'=>'value1',
		 *				'field2'=>'value2',
		 *				...
		 *			);
		 *      $gm->insert($data);
		 * 
		 *      ex. cara 2
		 * 			$data['field1'] = 'value1';
		 * 			$data['field2'] = 'value2';
		 *				...
		 *      $gm->insert($data);
		 * 			
		 * 			note : 
		 *      - apabila $data tidak ada maka 
		 * 			  akan menampilkan pesan error 
		 * 			  'warning, no data to be inserted to table'
		 *      - apabila terdapat field yang salah, maka
		 * 			  akan menampilkan pesan error dari CI
		 * 			  
		 * -> function insert_by_table()
		 *      untuk menginsert data ke table yang telah diset
		 * 			data yang diinsertkan dalam bentuk array
		 * 			
		 *      ex. cara 1
		 * 			$table = 'nama_table';
		 * 			$data = array(
		 *				'field1'=>'value1',
		 *				'field2'=>'value2',
		 *				...
		 *			);
		 *      $gm->insert_by_table($table,$data);
		 * 
		 *      ex. cara 2
		 * 			$table = 'nama_table';
		 * 			$data['field1'] = 'value1';
		 * 			$data['field2'] = 'value2';
		 *				...
		 *      $gm->insert_by_table($table,$data);
		 * 			
		 * 			note : 
		 *      - apabila $table tidak ada maka 
		 * 			  akan menampilkan pesan error 
		 * 			  'no table set'
		 *      - apabila $table salah maka ada maka 
		 * 			  akan menampilkan pesan error dari CI 
		 *      - apabila $data tidak ada maka 
		 * 			  akan menampilkan pesan error 
		 * 			  'warning, no data to be inserted to table'
		 *      - apabila terdapat field yang salah, maka
		 * 			  akan menampilkan pesan error dari CI
		 * 			  
		 * */



		$person_model = new $this->global_model('person');
		printr_data('sebuah objek dibuat dari global model dengan nama $person_model');
		printr_data($person_model);

		printr_data('setting return type dengan perintah $person_model->set_return_type(\'haha\')');
		$person_model->set_return_type('object');
		printr_data($person_model);
		
		printr_data('$person_model->get_pk()');
		printr_data($person_model->get_pk());


		// $input['nik']=124478267724;
		// $input['nama']='mufti';
		// $tes = $person_model->insert($input);
		// printr_data_ex($tes);
		// vardump_data_ex($tes);
	}

	public function edit_kartu_keluarga($id_keluarga)
	{
		$this->load->model('keluarga');
		$data['kartu_keluarga'] = $this->keluarga->get_data_kartu_keluarga($id_keluarga);
		$this->template->set_content('forms/edit_kartu_keluarga', $data)->render();
	}

	public function details_kartu_keluarga($id_keluarga)
	{
		$this->load->model('keluarga');
		$data['kartu_keluarga'] = $this->keluarga->get_data_kartu_keluarga($id_keluarga);
		$data['nama_kepkel'] = $this->db->get_where('person', array('nik'=>$data['kartu_keluarga']['nik_kepkel']))->row_array();
		$data['anggota_keluarga'] = $this->keluarga->get_anggota_keluarga($id_keluarga);

		$data['id_keluarga'] = $id_keluarga;

		$this->template->set_content('forms/details_kartu_keluarga', $data)->render();
	}
	public function tambah_anggota_kartu_keluarga($id_keluarga="")
	{
		$data['id_keluarga'] = $id_keluarga;
		$this->template->set_content('forms/tambah_anggota_kartu_keluarga', $data)->render();
	}
	public function edit_anggota_kartu_keluarga($id_kartukeluarga)
	{
		$this->load->model('keluarga');
		$data_kk = $this->db->get_where('kartukeluarga', array('id_kartukeluarga'=>$id_kartukeluarga))->row_array();
		$data['id_kartukeluarga'] = $id_kartukeluarga;
		$data['id_keluarga'] = $data_kk['id_keluarga'];
		$data['id_person'] = $data_kk['id_person'];
		$data['ang'] = $this->keluarga->get_anggota_keluarga_1($id_kartukeluarga);
		$this->template->set_content('forms/edit_anggota_kartu_keluarga', $data)->render();
	}
	public function hapus_anggota_kartu_keluarga($id_kartukeluarga, $id_keluarga)
	{
		$this->db->where('id_kartukeluarga', $id_kartukeluarga);
		$this->db->delete('kartukeluarga');
	
		redirect('welcome/details_kartu_keluarga/'.$id_keluarga);
	}
	public function submit_anggota_keluarga($status)
	{
		$this->load->model('keluarga');
		$this->keluarga->submit_anggota_keluarga($status);
		//$data = $this->input->post(null, true);
		//printr_data($data);
		redirect('welcome/details_kartu_keluarga/'.$this->input->post('id_keluarga'));
	}

	// akte lahir
	public function tambah_akte_lahir()
	{
		$this->template->set_content('forms/tambah_akte_lahir')->render();
	}
	public function submit_akte_lahir()
	{
		$data = $this->input->post(NULL, TRUE);
		$this->db->insert('akte_lahir', $data);
		redirect(base_url('welcome/daftar/akte_lahir'));
	}
	public function edit_akte_lahir($id_akte_lahir)
	{
		$this->load->model('akte_lahir');
		$data['data_akte_lahir'] = $this->akte_lahir->index($id_akte_lahir);
		$this->template->set_content('forms/edit_akte_lahir', $data)->render();
	}
	public function details_akte_lahir($id_akte_lahir)
	{
		$this->load->model('akte_lahir');

		$data['id_akte_lahir'] = $id_akte_lahir;
		$data['data_akte_lahir'] = $this->akte_lahir->index($id_akte_lahir); // akte lahir
		$data['data_ibu'] = $this->akte_lahir->data_ibu($id_akte_lahir); // data ibu
		$data['data_ayah'] = $this->akte_lahir->data_ayah($id_akte_lahir); // data ayah
		$data['data_pelapor'] = $this->akte_lahir->data_pelapor($id_akte_lahir); // data ayah
		$data['data_saksi1'] = $this->akte_lahir->data_saksi1($id_akte_lahir); // data ayah
		$data['data_saksi2'] = $this->akte_lahir->data_saksi2($id_akte_lahir); // data ayah

		$this->template->set_content('forms/details_akte_lahir', $data)->render();
	}

	public function get_data_person_nik()
	{
		$this->load->model('person');
		$nik = $this->input->get('nik_person');
		$data = $this->person->get_data_person_nik($nik);
		echo json_encode($data);
	}
	public function get_data_person_nik_a()
	{
		$this->load->model('person');
		$nik = $this->input->get('nik_person');
		$data = $this->person->get_data_person_nik_a($nik);
		echo json_encode($data);
	}

	public function get_data_person_nama()
	{
		$nama = $this->input->get('nama_person');
		$this->db->select("*");
		$this->db->where('person.nama', $nama);
		$this->db->from("person");
		$this->db->join("kartukeluarga", "kartukeluarga.id_person = person.id_person");
		$this->db->join("keluarga", "keluarga.id_keluarga = kartukeluarga.id_keluarga");
		$data = $this->db->get();
		if($data->num_rows()>0){
			echo json_encode($data->row_array());
		}else{
			echo 'gagal';
		}
	}

	public function tambah_kelurahan()
	{
		$data = $this->db->get('kelurahan');
		if($data->num_rows()>0){
			$this->edit_kelurahan($data->row_array()['id_kelurahan']);
		}else{
			$data['kelurahan'] = $this->db->get('kelurahan')->row_array();
			$data['nama'] = 'Tambah Kelurahan';
			$this->template->set_content('forms/informasi_kelurahan', $data)->render();
		}

	}
	public function edit_kelurahan($id_kelurahan)
	{
		$data['kelurahan'] = $this->db->where('id_kelurahan', $id_kelurahan)->get('kelurahan')->row_array();
		$data['nama'] = str_replace("_", " ", $data['kelurahan']['nama_kelurahan']);
		$this->template->set_content('forms/informasi_kelurahan', $data)->render();
	}
	public function simpan_informasi_kelurahan()
	{
		$data = $this->input->post(NULL, TRUE);
		$data['nama_kelurahan'] = str_replace(" ", "_", $data['nama_kelurahan']);
		$check = $this->db->where('nama_kelurahan', $data['nama_kelurahan'])->get('kelurahan');
		if($check->num_rows()>0){
			$this->db->where('nama_kelurahan', $data['nama_kelurahan'])->update('kelurahan', $data);
			redirect(base_url('welcome/daftar/kelurahan'));
		}else{
			$this->db->insert('kelurahan', $data);
			redirect(base_url('welcome/daftar/kelurahan'));
		}
		
	}

	public function hapus_kelurahan($id_kelurahan)
	{
		$this->db->where('id_kelurahan', $id_kelurahan)->delete('kelurahan');
		redirect(base_url('welcome/daftar/kelurahan'));
	}
	public function hapus_kk($id_keluarga)
	{
		$this->db->where('id_keluarga', $id_keluarga)->delete('keluarga');
		redirect(base_url('welcome/daftar/keluarga'));		
	}
	public function hapus_person($id_person)
	{
		$this->db->where('id_person', $id_person)->delete('person');
		redirect(base_url('welcome/daftar/person'));		
	}
}
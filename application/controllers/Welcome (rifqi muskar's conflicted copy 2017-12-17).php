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
	public function cetak_kk($id_keluarga)
	{
		$this->load->library('pdflib');
		$this->load->model('keluarga');
		$data['kartu_keluarga'] = $this->keluarga->get_data_kartu_keluarga($id_keluarga);
		$data['jumlah_anggota_keluarga'] = $this->keluarga->jumlah_keluarga($id_keluarga);
		$this->pdflib->render_landscape('templates/kartu_keluarga', $data);
	}
	public function cetak_ktp()
	{
		$this->load->library('pdflib');
		$this->pdflib->render_landscape('templates/ktp');
	}
	public function tambah_person()
	{
		$this->template->set_content('forms/person')->render();

	}
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
		$this->load->model('Person');

		$data = array(
			'no_kk' 			=> $this->input->post('no_kk'),
			'nik_kepkel' 		=> $this->input->post('nik_kepkel'),
			'nama_kepkel' 		=> $this->input->post('nama_kepkel'),
			'alamat' 			=> $this->input->post('alamat'),
			'no_rt' 			=> $this->input->post('no_rt'),
			'no_rw' 			=> $this->input->post('no_rw'),
			'desa_kelurahan' 	=> $this->input->post('desa_kelurahan'),
			'kecamatan' 		=> $this->input->post('kecamatan'),
			'kabupaten_kota'	=> $this->input->post('kabupaten_kota'),
			'kode_pos'			=> $this->input->post('kode_pos'),
			'provinsi' 			=> $this->input->post('provinsi')
		);

		$this->Person->tambah('keluarga', $data);
		redirect('welcome/daftar/keluarga');
	}
	
	public function simpan_angkel()
	{
		$this->load->model('Person');

		$data = array(
			'id_keluarga' 			=> $_GET['id_keluarga'],
			'id_person'				=> $_GET['id_person'],
			'pendidikan_terakhir' 	=> $_GET['pendidikan_terakhir'],
			'pekerjaan'				=> $_GET['pekerjaan'],
			'status_pernikahan' 	=> $_GET['status_pernikahan'],
			'hub_keluarga'			=> $_GET['hub_keluarga'],
			'kewarganegaraan' 		=> $_GET['kewarganegaraan'],
			'passport_nomor' 		=> $_GET['passport_nomor'],
			'passport_tgl_terakhir' => $_GET['passport_tgl_terakhir']
		);

		$query = $this->Person->tambah('kependudukan', $data);

		if ($query == "success"){
	    	$result  = 'success';
	    	$message = 'query success';
	    } else {
	    	$result  = 'error';
	    	$message = 'query error';
	    }

	    // Prepare data
		$data2 = array(
		  "result"  => $result,
		  "message" => $message
		);

		// Convert PHP array to JSON array
		$json_data = json_encode($data2);
		echo $json_data;

	}

	public function ajukan_ktp($id_person=""){
		$this->load->model('person');
		$data['data_person'] = $this->person->get_data_person($id_person);
		$this->template->set_content('forms/ajukan_ktp', $data)->render();
	}

	public function tambah_anggota_kartu_keluarga($id_keluarga="")
	{
		$data['id_keluarga'] = $id_keluarga;
		$this->template->set_content('forms/tambah_anggota_kartu_keluarga', $data)->render();
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
		$data['anggota_keluarga'] = $this->keluarga->get_details_kartu_keluarga($id_keluarga);
		$this->template->set_content('forms/details_kartu_keluarga', $data)->render();
	}
	public function edit_anggota_kartu_keluarga($id_kependudukan)
	{
		$this->load->model('keluarga');

		$data['id_keluarga'] = $this->db->select('id_keluarga')->where('id_kependudukan', $id_kependudukan)->get('kependudukan')->row();

		$data['data_kependudukan'] = $this->keluarga->get_data_kependudukan($id_kependudukan);
		$this->template->set_content('forms/edit_anggota_kartu_keluarga', $data)->render();
	}
	public function submit_tambah_anggota_keluarga($id_keluarga)
	{
		$data = $this->input->post(NULL, TRUE);

		//$this->insert('kependudukan',$data);
	}
}
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
	public function cetak_kk()
	{
		$this->load->library('pdflib');
		$this->pdflib->render_landscape('templates/kartu_keluarga');
	}
	public function cetak_ktp()
	{
		$this->load->library('pdflib');
		$this->pdflib->render_landscape('templates/kartu_keluarga');
	}
	public function tambah_person()
	{
		$this->template->set_content('forms/person')->render();

	}
	public function simpan_person()
	{
		$this->load->model('Person');

		$data = array(
			'nama' 					=> $this->input->post('namalengkap'),
			'nik' 					=> $this->input->post('nik'),
			'jenis_kelamin' 		=> $this->input->post('jeniskelamin'),
			'lahir_tempat' 			=> $this->input->post('tempatlahir'),
			'lahir_tanggal' 		=> $this->input->post('tanggallahir'),
			'agama' 				=> $this->input->post('agama'),
			'goldar' 				=> $this->input->post('golongandarah'),
			'alamat' 				=> $this->input->post('alamat'),
			'kewarganegaraan' 		=> $this->input->post('kewarganegaraan'),
			'lahir_no_akte'			=> $this->input->post('noaktelahir'),
			'nama_ayah' 			=> $this->input->post('ayah'),
			'nama_ibu' 				=> $this->input->post('ibu')
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
		print_r("Hai");
		// $this->Keluarga->save();
		// if(isset($_POST['submit']))
		// {
		// 	$this->Keluarga->save();
		// 	redirect('welcome/daftar/keluarga','refresh');
		// }
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

	public function tambah_anggota_kartu_keluarga($id_kartu_keluarga)
	{
		$this->template->set_content('forms/tambah_anggota_kartu_keluarga')->render();
	}


	public function au_ah()
	{
		$this->load->model('global_model');

		$tes = new $this->global_model;

		
		if ($tes) {
			echo 'yes';
		}
		printr_data($tes);
		// vardump_data_ex($tes);
	}
}

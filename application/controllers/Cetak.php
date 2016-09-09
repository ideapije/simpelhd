<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Cetak extends ThirdParty{
	private $data;
	private $ci;
	function __construct(){
		require_once APPPATH.'/third_party/FPDF.php';
		parent::__construct(new FPDF('Landscape','mm','A4'));
		$this->ci 	= new CI_Controller();
		$this->set_data_by_lasturl();
	}
	public function header_loop($x=0,$y=0,$data=''){
		$this->SetXY($x,$y);
		$this->Cell(75,4,ucfirst($data),0,0,'L');
		$this->SetXY(60,$y);
		$this->Cell(75,4,':',0,0,'L');
		$this->SetXY(194,$y);
		$this->Cell(75,4,':',0,0,'L');
	}
	public function header_loop_vertical($x=0,$y=0,$counter=0,$data=array()){
		$n_data = count($data);
		if ($n_data > 0) {
			$nilai_y = $y;
			foreach ($data as $key => $value) {
				$this->header_loop($x,$nilai_y,$value);
				$nilai_y+=$counter;	
			}
		}
	}
	//menangkap angka 
	public function set_data_by_lasturl(){	
		$larik_url 	=$this->ci->uri->segment_array();
		$n_larik_url= count($larik_url);
		$last_url	= $larik_url[$n_larik_url];
		if ($query =$this->ci->kepkel->get_by_id($last_url)) {
			$this->data['kepkel']	= $query;
			$this->data['anggota']	= $this->ci->person->get_by_kkid($last_url);
		}
	}
	public function get_isikkheader_kiri(){
		if (!is_null($this->data)) {
			$data = array(
					$this->data['kepkel']->nama
					,$this->data['kepkel']->alamat
					,$this->data['kepkel']->rt.'/'.$this->data['kepkel']->rw
					,$this->ci->konfig->get_by_key('kel_nama')
				);
			return $data;
		}
	}
	public function get_isikkheader_kanan(){
		if (!is_null($this->data)) {
			$data = array(
					$this->ci->konfig->get_by_key('kec_nama')
					,$this->ci->konfig->get_by_key('kab_nama')
					,$this->data['kepkel']->kodepos
					,$this->ci->konfig->get_by_key('prov_nama')
				);
			return $data;
		}
	}
	public function index(){
		$this->pdf_kk();
	}
	public function pdf_kk(){
		$this->AddPage();
		$this->kk_header();
		$this->kk_konten_satu();
		$this->kk_header2();
		$this->kk_konten_isi_vertikal_loop(61,6,array('nama_lengkap','NIK','jenis_kelamin','lahir_tempat','lahir_tanggal','agama','pendidikan_terakhir','pekerjaan','no'));
		$this->logo_pancasila();
		$this->kk_konten_dua();
		$this->kk_konten_isi_vertikal_loop(96,6,array('status_perkawinan','status_keluarga'),'kk_konten_dua_isi');
		$this->Output();
	}
	public function kk_header()
	{
		$this->SetFont('Arial','B',30);
		$this->SetXY(100,10);
		$this->Cell(100,15,'Kartu Keluarga',0,0,'C');
		$this->kk_baris_satu();
	}
	public function kk_header2()
	{
		$this->SetFont('Arial','B',15);
		$this->SetXY(100,22);
		$this->Cell(100,7,'No.3201060401130027',0,0,'C');
		$this->kk_baris_satu();
	}
	public function kk_baris_satu(){
		$this->SetFont('Arial','',8);
		$this->kk_header_kiri();
		$this->kk_header_kiri_isi();
		$this->kk_header_kanan();
		$this->kk_header_kanan_isi();
	}
	public function kk_header_kiri(){
		$this->header_loop_vertical(15,30,5,$this->ci->labels->kk_header('kiri'));
	}
	public function kk_header_kiri_isi(){
		if (!is_null($this->data)) {
			$this->header_loop_vertical(63,30,5,$this->get_isikkheader_kiri());
		}
	}
	public function kk_header_kanan(){
		$this->header_loop_vertical(160,30,5,$this->ci->labels->kk_header('kanan'));	
	}
	public function kk_header_kanan_isi(){
		$this->header_loop_vertical(198,30,5,$this->get_isikkheader_kanan());		
	}
	
	public function kk_konten_satu(){
		$this->SetFont('Arial','',7);
		$this->SetXY(17,55);
		$this->Cell(15,6,'No',1,0,'C');
		$this->SetXY(32,55);
		$this->Cell(50,6,'Nama Lengkap',1,0,'C');
		$this->SetXY(82,55);
		$this->Cell(30,6,'NIK',1,0,'C');
		$this->SetXY(112,55);
		$this->SetFont('Arial','',8);
		$this->MultiCell(16,3,'jenis Kelamin',1,'C',0);
		$this->SetFont('Arial','',8);
		$this->SetXY(128,55);
		$this->Cell(40,6,'Tempat Lahir',1,0,'C');
		$this->SetXY(168,55);
		$this->MultiCell(16,3,'Tanggal Lahir',1,'C',0);
		$this->SetXY(184,55);
		$this->Cell(30,6,'AGAMA',1,0,'C');
		$this->SetXY(214,55);
		$this->Cell(30,6,'Pendidikan',1,0,'C');
		$this->SetXY(244,55);
		$this->Cell(30,6,'Jenis Pekerjaan',1,0,'C');
	}
	public function kk_konten_satu_isi($nilai_y=0,$counter=0,$data=array()){
		$this->SetFont('Arial','',7);
<<<<<<< HEAD
		$no 		= (!is_null($data['no']))? $data['no'] : '';		
=======
		$no 		= (isset($data['no']))? $data['no'] : '';		
>>>>>>> origin/master
		$this->SetXY(17,$nilai_y);
		$this->Cell(15,6,$no,1,0,'C');

		$fullname	= (!is_null($data['nama_lengkap']))? $data['nama_lengkap'] : '';
		$this->SetXY(32,$nilai_y);
		$this->Cell(50,6,$fullname,1,0,'C');

		$nik 		= (!is_null($data['NIK']))? $data['NIK'] : '';
		$this->SetXY(82,$nilai_y);
		$this->Cell(30,6,$nik,1,0,'C');

		$gender 	= (!is_null($data['jenis_kelamin']) && !is_array(GetGender($data['jenis_kelamin'])))? GetGender($data['jenis_kelamin']) : '';
		$this->SetXY(112,$nilai_y);
		$this->Cell(16,6,$gender,1,0,'C');

		$birthplace= (!is_null($data['lahir_tempat']))? $data['lahir_tempat'] : '';
		$this->SetXY(128,$nilai_y);
		$this->Cell(40,6,$birthplace,1,0,'L');
		
		$birthdate	= (!is_null($data['lahir_tanggal']))? $data['lahir_tanggal'] : '';
		$this->SetXY(168,$nilai_y);
		$this->Cell(16,6,$birthdate,1,0,'L');
		
		$agama 		= (!is_null($data['agama']) && !is_array(GetAgama($data['agama'])))? GetAgama($data['agama']) : '';
		$this->SetXY(184,$nilai_y);
		$this->Cell(30,6,$agama,1,0,'C');
		
		$edu		= (!is_null($data['pendidikan_terakhir']) && !is_array(GetPendidikanTerakhir($data['pendidikan_terakhir'])))? GetPendidikanTerakhir($data['pendidikan_terakhir']) : ''; 
			$this->SetXY(214,$nilai_y);
			$this->Cell(30,6,$edu,1,0,'C');

		$job 		='';
		if (!is_null($data['pekerjaan']) && !is_null($data['pekerjaan'])) {
			$pecah 	= explode('-', $data['pekerjaan']);
			$divisi	= GetKodeJob($pecah[0]);
			$job 	= $divisi[$pecah[1]];
		}
		$this->SetXY(244,$nilai_y);
		$this->Cell(30,6,$job,1,0,'C');
		
	}
 	
	public function kk_konten_isi_vertikal_loop($nilai_y=0,$counter=0,$exclude=array(),$func='kk_konten_satu_isi'){
		
<<<<<<< HEAD
		if (!is_null($this->data) && !is_null($this->data['anggota'])) {
=======
		if (!is_null($this->data) && isset($this->data['anggota'])) {
>>>>>>> origin/master
			$data 		= array();
			$no 		= 1;
			foreach ($this->data['anggota'] as $key => $value) {
				foreach ($value as $k => $val) {
					if (in_array($k,$exclude)) {	
						$data[$k] = $val;
					}
					$data['no']	  = $no;
				}
				$this->$func($nilai_y,$counter,$data);
				$nilai_y+=$counter;
				$no++;
			}
		}
	}

	public function kk_konten_dua(){
		$this->SetFont('Arial','',8);
<<<<<<< HEAD
=======

>>>>>>> origin/master
		$this->SetXY(17,90);
		$this->Cell(15,6,'No',1,0,'C');
		$this->SetXY(32,90);
		$this->Cell(50,6,'Status Pernikahan',1,0,'C');
		$this->SetXY(82,90);
		$this->Cell(50,6,'Status Hubungan Keluarga',1,0,'C');
		$this->SetXY(132,90);
		$this->Cell(35,6,'Kewarganegaraan',1,'C',0);
		$this->SetXY(167,90);
		$this->Cell(25,6,'No. Paspor',1,0,'C');
		$this->SetXY(192,90);
		$this->Cell(25,6,'No. Kitas/Kitap',1,'C',0);
		$this->SetXY(217,90);
		$this->Cell(29,6,'Ayah',1,0,'C');
		$this->SetXY(246,90);
		$this->Cell(28,6,'Ibu',1,0,'C');
			
	}
	public function kk_konten_dua_isi($nilai_y=0,$counter=0,$data=array()){
		$this->SetFont('Arial','',7);

		$no 			= (!is_null($data['no']))? $data['no'] : '';
		$this->SetXY(17,$nilai_y);
		$this->Cell(15,6,$no,1,0,'C');

		$status_keluarga = (!is_null($data['status_keluarga']) && !is_array(get_status_kel($data['status_keluarga'])))? get_status_kel($data['status_keluarga'])  : $status_keluarga='';
		$this->SetXY(32,$nilai_y);
		$this->Cell(50,6,$status_keluarga,1,0,'C');
		
		$status_perkawinan= (!is_null($data['status_perkawinan'])  && !is_array(get_sts_kawin($data['status_perkawinan'])))? get_sts_kawin($data['status_perkawinan']) : '';
		$this->SetXY(82,$nilai_y);
		$this->Cell(50,6,$status_perkawinan,1,0,'C');
		
		//
		$this->SetXY(132,$nilai_y);
		$this->Cell(35,6,'',1,0,'C');

		$this->SetXY(167,$nilai_y);
		$this->Cell(25,6,'',1,0,'C');

		$this->SetXY(192,$nilai_y);
		$this->Cell(25,6,'',1,0,'C');

		$this->SetXY(217,$nilai_y);
		$this->Cell(29,6,'',1,0,'C');

		$this->SetXY(246,$nilai_y);
		$this->Cell(28,6,'',1,0,'C');
		
	}
	function logo_pancasila(){
		
<<<<<<< HEAD
		$this->Image(base_url().'assets/img/garuda_pancasila.jpg',10.5, 5, 20, 20);
		# code...
	}
	

=======
		$this->Image(base_url().'assets/img/garuda_pancasila.png',10.5, 5, 20, 20);
		# code...
	}
>>>>>>> origin/master

}
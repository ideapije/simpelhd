<?php

/**
 * Group id
 * 1 => Admin
 * 2 => purchasing
 */
$config['users']['show'] = array(
	'name'
	,'username'
	,'email'
	,'last_login'
	,'phone'
);
$config['users']['input'] = array(
	'real_name'
	,'username'
	,'email'
	,'phone'
	,'company'
	,'active'
);
$config['users']['toolbar']= array(
	'1' => array('tambah'),
	'11' => array('admin/create_user')
);
$config['users']['action'] = array(
	'11'=>array(
		'active' => array(
			'1' => array('matikan'=>'admin/set_pasive/')
			,'0'=> array('aktifkan'=>'admin/set_active/')
		),
		'edit'=>'dashboard/edit/users/'
	)
);


$config['person']['show'] = array(
	'nik'
	,'nama'
	,'jenis_kelamin'
	,'lahir_tempat'
	,'lahir_tanggal'
	,'agama'
	,'goldar'
);
$config['person']['toolbar'] = array(
	'11' => array('welcome/tambah_person')
);
$config['person']['action'] = array(
	'11'=>array(
			'edit'=>'welcome/edit/person/',
			'permohonan KTP'=>'welcome/permohonan_ktp/',
			'hapus'=>'welcome/hapus_person'
			//'pembuatan KTP'=>'welcome/ajukan_ktp/'
		)
);
$config['keluarga']['input']= array(
	'id_person',
	'nik',
	'hub_keluarga',
	'status_perkawinan'
);
$config['keluarga']['toolbar'] = array(
	'11' => array('welcome/tambah_keluarga')
);

$config['keluarga']['action'] = array(
	'11' => array(
		'edit'=>'welcome/edit_kartu_keluarga/',
		'details'=>'welcome/details_kartu_keluarga/',
		'Cetak' => 'welcome/cetak_kk/',
		'hapus' => 'welcome/hapus_kk/'
	)
);
$config['keluarga']['show'] = array(
	'no_kk',
	'nik_kepkel',
	'alamat',
	'kode_pos',
	'no_rt',
	'no_rw',
	'jumlah_anggota_keluarga',
	'telepon'
);

$config['kelurahan']['show'] = array(
	'nama_kelurahan',
	'provinsi',
	'kabupaten_kota',
	'kecamatan',
	'desa_kelurahan',
	'nama_camat',
	'nama_lurah'
);
$config['kelurahan']['toolbar'] = array(
	'11' => array('welcome/tambah_kelurahan')
);
$config['kelurahan']['action'] = array(
	'11'=>array(
			'edit'=>'welcome/edit_kelurahan/',
			'hapus' =>'welcome/hapus_kelurahan/'
			//'pembuatan KTP'=>'welcome/ajukan_ktp/'
		)
);
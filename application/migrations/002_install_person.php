<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Install_Person extends CI_Migration {

	public function up()
  {
    $this->dbforge->add_field(array(
      'id_person' => array(
              'type' => 'INT',
              'constraint' => '20',
              'unsigned' => TRUE,
              'auto_increment' => TRUE
      ),
      'nik' => array(
              'type' => 'VARCHAR',
              'constraint' => '100',
              'unsigned' => TRUE,
              'null' => TRUE
      ),
      'nama' => array(
              'type' => 'VARCHAR',
              'constraint' => '100',
              'null'=>TRUE
      ),
      'gelar' => array(
              'type' => 'ENUM("0","1","2","3")',
              'null'=>TRUE
      ),
      'alamat_sebelumnya' => array(
              'type' => 'TEXT',
              'null'=>TRUE
      ),
      'no_paspor' => array(
              'type' => 'VARCHAR',
              'constraint' => '100',
              'null'=>TRUE
      ),
      'tgl_berakhir_paspor' => array(
              'type' => 'DATE',
              'null'=>TRUE
      ),
      'jenis_kelamin' => array(
              'type' => 'ENUM("1","2")',
              'null' => TRUE
      ),
      'lahir_tempat' => array(
              'type' => 'TEXT',
              'null'=>TRUE
      ),
      'lahir_tanggal' => array(
              'type' => 'DATE',
              'null'=>TRUE
      ),
      'akta_lahir' => array(
              'type' => 'ENUM("1","2")',
              'null'=>TRUE
      ),
      'no_akta_lahir' => array(
              'type' => 'VARCHAR',
              'constraint' => '100',
              'null'=>TRUE
      ),
      'goldar' => array(
              'type' => 'ENUM("1","2","3","4","5","6","7","8","9","10","11","12","13")',
              'null'=>TRUE
      ),
      'agama' => array(
              'type' => 'ENUM("1","2","3","4","5","6","7")',
              'null'=>TRUE
      ),
      'kepercayaan_tuhan_YME' => array(
              'type' => 'VARCHAR',
              'constraint' => '100',
              'null'=>TRUE
      ),
      'status_perkawinan' => array(
              'type' => 'ENUM("1","2","3","4")',
              'null'=>TRUE
      ),
      'kelainan_fisik_mental' => array(
              'type' => 'ENUM("1","2")',
              'null'=>TRUE
      ),
      'penyandang_cacat' => array(
              'type' => 'ENUM("1","2","3","4","5","6")',
              'null'=>TRUE
      ),
      'pendidikan_terakhir' => array(
              'type' => 'VARCHAR',
              'constraint' => '50',
              'null'=>TRUE
      ),
      'pekerjaan' => array(
              'type' => 'VARCHAR',
              'constraint' => '100',
              'null'=>TRUE
      ),
      'nik_ibu' => array(
              'type' => 'VARCHAR',
              'constraint' => '100',
              'null'=>TRUE
      ),
      'nama_ibu' => array(
              'type' => 'VARCHAR',
              'constraint' => '100',
              'null'=>TRUE
      ),
      'nik_ayah' => array(
              'type' => 'VARCHAR',
              'constraint' => '100',
              'null'=>TRUE
      ),
      'nama_ayah' => array(
              'type' => 'VARCHAR',
              'constraint' => '100',
              'null'=>TRUE
      ),
      'kewarganegaraan' => array(
              'type' => 'ENUM("1","2")',
              'null'=>TRUE
      ),
      'keturunan' => array(
              'type' => 'ENUM("1","2","3","4","5")',
              'null'=>TRUE
      ),
      'kebangsaan' => array(
              'type' => 'VARCHAR',
              'constraint' => '50',
              'null'=>TRUE
      ),
      'rt' => array(
              'type' => 'VARCHAR',
              'constraint' => '12',
              'null'=>TRUE
      ),
      'rw' => array(
              'type' => 'VARCHAR',
              'constraint' => '12',
              'null'=>TRUE
      ),
      'desa_kelurahan' => array(
              'type' => 'VARCHAR',
              'constraint' => '50',
              'null'=>TRUE
      ),
      'kecamatan' => array(
              'type' => 'VARCHAR',
              'constraint' => '50',
              'null'=>TRUE
      ),

     'akta_perkawinan' => array(
              'type' => 'ENUM("1","2")',
              'null'=>TRUE
      ), 
     'no_akta_perkawinan' => array(
              'type' => 'INT',
              'constraint' => '100',
              'null'=>TRUE
      ), 
     'tgl_perkawinan' => array(
              'type' => 'DATE',
              'null'=>TRUE
      ), 
     'akta_cerai' => array(
              'type' => 'ENUM("1","2")',
              'null'=>TRUE
      ), 
     'no_akta_cerai' => array(
              'type' => 'INT',
              'constraint' => '100',
              'null'=>TRUE
      ), 
     'tgl_perceraian' => array(
              'type' => 'DATE',
              'null'=>TRUE
      )     
    ));
    $this->dbforge->add_key('id_person', TRUE);
    $this->dbforge->create_table('person');
  }

  public function down()
  {
    $this->dbforge->drop_table('person');
  }

}

<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Install_Kelurahan extends CI_Migration {

	public function up()
  {
      $this->dbforge->add_field(array(
              'id_kelurahan' => array(
                      'type' => 'INT',
                      'constraint' => '20',
                      'unsigned' => TRUE,
                      'auto_increment' => TRUE
              ),
              'nama_kelurahan' => array(
                      'type' => 'VARCHAR',
                      'constraint' => '100',
                      'null'=>TRUE
              ),  
              'kode_provinsi' => array(
                      'type' => 'INT',
                      'constraint' => '20',
                      'null'=>TRUE
              ),
              'provinsi' => array(
                      'type' => 'VARCHAR',
                      'constraint' => '100',
                      'null'=>TRUE
              ),
              'kode_kabupaten_kota' => array(
                      'type' => 'INT',
                      'constraint' => '20',
                      'null'=>TRUE
              ), 
              'kabupaten_kota' => array(
                      'type' => 'VARCHAR',
                      'constraint' => '100',
                      'null'=>TRUE
              ),
              'kode_kecamatan' => array(
                      'type' => 'INT',
                      'constraint' => '20',
                      'null'=>TRUE
              ),  
              'kecamatan' => array(
                      'type' => 'VARCHAR',
                      'constraint' => '100',
                      'null'=>TRUE
              ), 
              'kode_desa_kelurahan' => array(
                      'type' => 'INT',
                      'constraint' => '20',
                      'null'=>TRUE
              ), 
              'desa_kelurahan' => array(
                      'type' => 'VARCHAR',
                      'constraint' => '100',
                      'null'=>TRUE
              ),  
              'nama_camat' => array(
                      'type' => 'VARCHAR',
                      'constraint' => '100',
                      'null'=>TRUE
              ), 
              'nip_camat' => array(
                      'type' => 'VARCHAR',
                      'constraint' => '100',
                      'null'=>TRUE
              ),   
              'nama_lurah' => array(
                      'type' => 'VARCHAR',
                      'constraint' => '100',
                      'null'=>TRUE
              ), 
              'nip_lurah' => array(
                      'type' => 'VARCHAR',
                      'constraint' => '100',
                      'null'=>TRUE
              )     
      ));
      $this->dbforge->add_key('id_kelurahan', TRUE);
      $this->dbforge->create_table('kelurahan');
  }

  public function down()
  {
      $this->dbforge->drop_table('kelurahan');
  }

}

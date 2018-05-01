<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Install_Keluarga extends CI_Migration {

	public function up()
  {
      $this->dbforge->add_field(array(
              'id_keluarga' => array(
                      'type' => 'INT',
                      'constraint' => '20',
                      'unsigned' => TRUE,
                      'auto_increment' => TRUE
              ),
              'no_kk' => array(
                      'type' => 'VARCHAR',
                      'constraint' => '100',
                      'unsigned' => TRUE,
                      'null'=>TRUE
              ),
              'nik_kepkel' => array(
                      'type' => 'VARCHAR',
                      'constraint' => '100',
                      'unsigned' => TRUE
              ),
              'alamat' => array(
                      'type' => 'VARCHAR',
                      'constraint' => '255',
                      'null'=>TRUE
              ),
              'kode_pos' => array(
                      'type' => 'INT',
                      'constraint' => '20',
                      'null'=>TRUE
              ),
              'no_rt' => array(
                      'type' => 'VARCHAR',
                      'constraint' => '15',
                      'null'=>TRUE
              ),
              'no_rw' => array(
                      'type' => 'VARCHAR',
                      'constraint' => '15',
                      'null'=>TRUE
              ),
              'telepon' => array(
                      'type' => 'VARCHAR',
                      'constraint' => '75',
                      'null'=>TRUE
              ),
              'provinsi' => array(
                      'type' => 'VARCHAR',
                      'constraint' => '50',
                      'null'=>TRUE
              ),
              'kabupaten_kota' => array(
                      'type' => 'VARCHAR',
                      'constraint' => '50',
                      'null'=>TRUE
              ),
              'kecamatan' => array(
                      'type' => 'VARCHAR',
                      'constraint' => '50',
                      'null'=>TRUE
              ),
              'desa_kelurahan' => array(
                      'type' => 'VARCHAR',
                      'constraint' => '50',
                      'null'=>TRUE
              )
      ));
      $this->dbforge->add_key('id_keluarga', TRUE);
      $this->dbforge->create_table('keluarga');
  }

  public function down()
  {
      $this->dbforge->drop_table('keluarga');
  }

}

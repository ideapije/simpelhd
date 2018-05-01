<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Install_Kartukeluarga extends CI_Migration {

	public function up()
  {
      $this->dbforge->add_field(array(
          'id_kartukeluarga' => array(
                  'type' => 'INT',
                  'constraint' => '20',
                  'unsigned' => TRUE,
                  'auto_increment' => TRUE
          ),
          'id_keluarga' => array(
                  'type' => 'INT',
                  'constraint' => '20',
                  'unsigned' => TRUE
          ),
          'id_person' => array(
                  'type' => 'INT',
                  'constraint' => '20',
                  'unsigned' => TRUE
          ),
          'hub_keluarga' => array(
                  'type' => 'ENUM("1","2","3","4","5","6","7","8","9","10","11")',
                  'null'=>TRUE
          )
      ));
      $this->dbforge->add_key('id_kartukeluarga', TRUE);
      $this->dbforge->create_table('kartukeluarga');
  }

  public function down()
  {
      $this->dbforge->drop_table('kartukeluarga');
  }

}

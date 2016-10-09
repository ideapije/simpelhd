<?php

class Sidebar extends Widget {

    public function display($data) {
        if (!isset($data['items'])) {
            $data['items'] = array(
       			array('link'=>'home/index','icon'=>'icon-dashboard','label'=>'Dashboard')
      			, array('link'=>'keluarga/setup','icon'=>'glyphicon glyphicon-plus','label'=>'Tambah Kepala Keluarga')
      			, array('link'=>'arsip/all/kepkel','icon'=>'glyphicon glyphicon-file','label'=>'Arsip Kepala Keluarga')
      			, array('link'=>'home/atur_profil_kelurahan','icon'=>'glyphicon glyphicon-info-sign','label'=>'Profil Kelurahan')
      			, array('link'=>'#pengajuan','icon'=>'icon-dashboard','label'=>'Pengajuan')
    		);
      }
      $this->view('widgets/bar-menu-side', $data);
    }
    
}
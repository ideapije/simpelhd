    <table class="table table-bordered">
    <thead>
        <tr>
            <th>Nama Lengkap</th>
            <th>NIK Ibu</th>    
            <th>Nama lengkap Ibu</th>
            <th>NIK Ayah</th>
            <th>Nama lengkap Ayah</th>
        </tr>
    </thead>
    <tbody>
        <?php
            if (isset($keluarga)) {
                foreach ($keluarga as $key => $value) {?>
                    <tr>
                        <td><?php echo $value['nama_lengkap'];?></td>                        
                        <td>
                            <input type="number" id="<?php echo $value['id'];?>" name="ibu_nik" class="form-control submit-editable" value="<?php echo ($value['status_keluarga']==4)?  $ibu['NIK'] : $value['ibu_nik'];?>" />
                        </td>
                        <td>
                            <input type="text" id="<?php echo $value['id'];?>" name="ibu_nama" class="form-control submit-editable" value="<?php echo ($value['status_keluarga']==4)?  $ibu['nama_lengkap'] : $value['ibu_nama'];?>" /></td>
                        <td>
                            <input type="number" id="<?php echo $value['id'];?>" name="ayah_nik" class="form-control submit-editable" value="<?php echo ($value['status_keluarga']==4)?  $ayah['NIK'] : $value['ayah_nik'];?>" /></td>
                        <td>
                            <input type="text" id="<?php echo $value['id'];?>" name="ayah_nama" class="form-control submit-editable" value="<?php echo ($value['status_keluarga']==4)?  $ayah['nama_lengkap'] : $value['ayah_nama'];?>" />
                        </td>
                    </tr>
                <?php }
            }
         ?>
    </tbody>
    </table>
<a href="<?php echo site_url('keluarga/step/5');?>" class="pull-left btn btn-lg btn-default"><i class="glyphicon glyphicon-chevron-left"></i> Sebelumnya</a>        
<a href="<?php echo site_url('keluarga/done');?>" class="pull-right btn btn-lg btn-success"><i class="glyphicon glyphicon-chevron-right"></i> Selesai</a>
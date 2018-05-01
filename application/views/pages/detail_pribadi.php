
<div class="container">
  <div class="row">
   <div class="col-xs-12 col-md-8">

   </div>
   <div class="col-xs-12 col-md-4 text-right">
    <a style="margin-bottom: 5px;" href="javascript:history.back(1);"  class="btn btn-default">
      <i class="fa fa-arrow-left"></i>&nbsp;Kembali </a>
    </div>
  </div>
  <div class="row">
    <div class="col-md-10 col-lg-offset-2" >
     <div class="panel with-nav-tabs panel-info col-md-8" >
      <div class="panel-heading">
       <ul class="nav nav-tabs">
        <li class="active">
          <a href="#home" aria-controls="home" data-toggle="tab">
           Informasi Akun
         </a>
       </li>
       <li >
        <a href="#profile" aria-controls="profile" data-toggle="tab">
         Informasi Umum
       </a>
     </li>

     <li>
      <a href="#setting" aria-controls="setting"  data-toggle="tab">
       Ganti Password
     </a>
   </li>
 </ul>
</div>
<div class="panel-body">
  <div class="tab-content">
   <div role="tabpanel" class="tab-pane active" id="home" >

     <?php
     if (isset($info) && $info) {
      foreach ($info as $key => $value) { 
       if (in_array($key, array('id_pegawai','username','email'))) { ?>
       <div class="form-group">
        <label><?php echo ucfirst($key);?></label>

        <input type="text" class="form-control" 
        name="<?php echo $key;?>" 
        value="<?php echo $value;?>" /> 

      </div>
      <?php }
    }
  }
  ?>
</div>
<div role="tabpanel" class="tab-pane" id="profile" >
 <!-- informasi umum here -->
 <div class="form-group">
  <label>Nama Lengkap</label>
  <input type="text" name="real_name" class="form-control" value="<?= $info['real_name'] ?>">
</div>
<div class="form-group">
  <label>Terakhir Login</label><br/>
  <?= show_date_human_format($info['last_login'],1) ?>
</div>

<ul class="list-group">
  <li class="list-group-item active">Jabatan</li>
  <?php
  if (isset($roles)) {
    foreach ($roles as $key => $role) {
      if (function_exists('get_group_name')) { ?>
      <li class="list-group-item">
        <?= get_group_name($role['user_id']);?>
        <!--<a href="#" class="badge badge-pill badge-danger">
          <i class="fa fa-remove"></i>
        </a>-->
      </li>

      <?php  }
    }
  }
  ?>
  

</ul>
</div>

<div role="tabpanel" class="tab-pane" id="setting">
  <!-- setting here -->

  <?php
  if (isset($me)) {
   echo form_open($me."/reset_password");
 }
 ?>
 <div class="form-group">
  <label>Password Baru</label>
  <input type="password" name="password" class="form-control" />
</div>
<div class="form-group">
  <label>Konfirmasi Password baru</label>
  <input type="password" name="cpassword" class="form-control" />
</div>
<button type="submit" class="btn btn-primary" >Simpan</button>

<?php echo form_close();?>
</div>
</div>
</div>
</div>
</div>
</div>
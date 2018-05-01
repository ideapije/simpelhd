<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
<style type="text/css">
	input{
		text-transform: capitalize;
	}
</style>
<div class="row">
	<div class="col-md-6">
		<ol class="breadcrumb" style="position: absolute; z-index: 99;">
		  <li><a href="<?=base_url('welcome')?>">Home</a></li>
		  <li><a href="<?=base_url('welcome/daftar/keluarga')?>">Kelurahan</a></li>
		  <li class="active"><?=$nama;?></li>
		</ol>
	</div>
</div>
<h4 class="text-center" style="padding-bottom: 10px;">Informasi Kelurahan</h4>
<?php echo form_open('welcome/simpan_informasi_kelurahan', array('autocomplete' => 'off')); ?>
<div class="row">
	<div class="col-md-12">
  		<div class="form-horizontal" style="width: 50%; margin:auto;">
		  <div class="form-group">
		    <label class="col-sm-3 control-label">Nama Kelurahan</label>
		    <div class="col-sm-8">
		   	 <input type="text" autofocus name="nama_kelurahan" value="<?php $data = str_replace("_", " ", $kelurahan['nama_kelurahan']); echo $data; ?>" class="form-control">
			</div>
		  </div>
		  <div class="form-group">
		    <label class="col-sm-3 control-label">Kode/Provinsi</label>
		    <div class="col-sm-2">
		   	 <input type="text" name="kode_provinsi" class="form-control" value="<?=$kelurahan['kode_provinsi']?>">
			</div>
		    <div class="col-sm-6">
		   	 <input type="text" name="provinsi" class="form-control" value="<?=$kelurahan['provinsi']?>">
			</div>
		  </div>
		  <div class="form-group">
		    <label class="col-sm-3 control-label">Kode / Kabupaten/Kota</label>
		    <div class="col-sm-2">
		   	 <input type="text" name="kode_kabupaten_kota" class="form-control" value="<?=$kelurahan['kode_kabupaten_kota']?>">
			</div>		    
		    <div class="col-sm-6">
		   	 <input type="text" name="kabupaten_kota" class="form-control" value="<?=$kelurahan['kabupaten_kota']?>">
			</div>
		  </div>
		  <div class="form-group">
		    <label class="col-sm-3 control-label">Kode / Kecamatan</label>
		    <div class="col-sm-2">
		   	 <input type="text" name="kode_kecamatan" class="form-control" value="<?=$kelurahan['kode_kecamatan']?>">
			</div>
		    <div class="col-sm-6">
		   	 <input type="text" name="kecamatan" class="form-control" value="<?=$kelurahan['kecamatan']?>">
			</div>
		  </div>
		  <div class="form-group">
		    <label class="col-sm-3 control-label">Kode / Kelurahan/Desa</label>
		    <div class="col-sm-2">
		   	 <input type="text" name="kode_desa_kelurahan" class="form-control" value="<?=$kelurahan['kode_desa_kelurahan']?>">
			</div>
		    <div class="col-sm-6">
		   	 <input type="text" name="desa_kelurahan" class="form-control" value="<?=$kelurahan['desa_kelurahan']?>">
			</div>
		  </div>
		  <div class="form-group">
		    <label class="col-sm-3 control-label">Nama Camat</label>
		    <div class="col-sm-8">
		   	 <input type="text" name="nama_camat" class="form-control" value="<?=$kelurahan['nama_camat']?>">
			</div>
		  </div>
		  <div class="form-group">
		    <label class="col-sm-3 control-label">NIP Camat</label>
		    <div class="col-sm-8">
		   	 <input type="text" name="nip_camat" class="form-control" value="<?=$kelurahan['nip_camat']?>">
			</div>
		  </div>
		  <div class="form-group">
		    <label class="col-sm-3 control-label">Nama Lurah</label>
		    <div class="col-sm-8">
		   	 <input type="text" name="nama_lurah" class="form-control" value="<?=$kelurahan['nama_lurah']?>">
			</div>
		  </div>
		  <div class="form-group">
		    <label class="col-sm-3 control-label">NIP Lurah</label>
		    <div class="col-sm-8">
		   	 <input type="text" name="nip_lurah" class="form-control" value="<?=$kelurahan['nip_lurah']?>">
			</div>
		  </div>	
		  <div class="form-group">
		  	<div class="col-sm-8 col-sm-offset-3">
			  	<button type="submit" class="btn btn-primary btn-custom-no" style="width: 100%;"><i class="fa fa-floppy-o" aria-hidden="true"></i>&ensp; Simpan Data</button>
		  	</div>
		  </div>	  
		</div>
	</div>
</div>
	<?php echo form_close(); ?>
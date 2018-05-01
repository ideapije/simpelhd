<style type="text/css">
.btn.btn-primary{width: 100%;}
.nav-link.active{background-color: #E7E7E7;}
</style>
<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
<div class="row">
	<div class="col-md-12">

<ol class="breadcrumb" style="position: absolute; z-index: 99;">
  <li><a href="<?=base_url('welcome')?>">Home</a></li>
  <li><a href="<?=base_url('welcome/daftar/keluarga')?>">Keluarga</a></li>
  <li class="active">Tambah Keluarga</li>
</ol>

  <!-- Nav tabs -->
<div class="row" style="margin-bottom: 25px; margin-top: 10px;">
	<div class="col-md-12">
	  <ul class="list-inline nav-custom" role="tablist" style="width: 50%; margin:auto; position: relative; left:20%;">
	    <li role="presentation" class="active" id="data1_person"><a href="#data1" aria-controls="home" role="tab" data-toggle="tab">Data Pribadi</a></li>
	    <li role="presentation" id="data2_person"><a href="#data2" aria-controls="messages" role="tab" data-toggle="tab">Data Informasi</a></li>
	  </ul>
	</div>
</div>
	<?php echo form_open('welcome/simpan_keluarga'); ?>
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="data1">
		<!-- tabs -->
		<div class="col-md-12">
	  		<div class="form-horizontal" style="width: 50%; margin:auto;">
			  <div class="form-group">
			    <label class="col-sm-3 control-label">Nomor KK</label>
			    <div class="col-sm-8">
			   	 <input type="text" autofocus name="no_kk" class="form-control">
				</div>
			  </div>

			  <div class="form-group">
			    <label class="col-sm-3 control-label">NIK Kepala Keluarga</label>
			    <div class="col-sm-8">
			   	 <input type="text" name="nik_kepkel" id="nik_person" class="form-control" required>
				</div>
			  </div>

			  <div class="form-group">
			    <label class="col-sm-3 control-label">Alamat</label>
			    <div class="col-sm-8">
			    	<textarea name="alamat" id="alamat_sebelumnya" class="form-control" required></textarea>
				</div>
			  </div>

			  <div class="form-group">
			    <label class="col-sm-3 control-label">Kode Pos</label>
			    <div class="col-sm-8">
			    	<input type="number" name="kode_pos" class="form-control">
				</div>
			  </div>

		  	  <div class="form-group">
			    <label class="col-sm-3 control-label">RT/RW</label>
			    <div class="col-sm-4">
			    	<input type="text" id="rt" name="no_rt" class="form-control" required>
				</div>
			    <div class="col-sm-4">
			   	 	<input type="text" id="rw" name="no_rw" class="form-control" required>
				</div>
			  </div>
			  
			  <div class="form-group">
			  	<div class="col-sm-8 col-sm-offset-3">
			  	<a class="btn btn-primary btn-custom-a" id="berikutnya_person" href="#data2" aria-controls="messages" role="tab" data-toggle="tab">Berikutnya &ensp;<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
			  </div>
			  </div>
			</div>  
		</div>
		</div>
		 <div role="tabpanel" class="tab-pane" id="data2">
		 	<div class="col-md-12">
		 	<div class="form-horizontal" style="width: 50%; margin:auto;">
			  <div class="form-group">
			    <label class="col-sm-3 control-label">Nomor Telepon</label>
			    <div class="col-sm-8">
			    	<input type="text" name="telepon" class="form-control">
				</div>
			  </div>

			  <div class="form-group">
			    <label class="col-sm-3 control-label">Provinsi</label>
			    <div class="col-sm-8">
			    	<input type="text" name="provinsi" class="form-control">
				</div>
			  </div>

			  <div class="form-group">
			    <label class="col-sm-3 control-label">Kabupaten/Kota</label>
			    <div class="col-sm-8">
			    <input type="text" name="kabupaten_kota" class="form-control">
				</div>
			  </div>

			  <div class="form-group">
			    <label class="col-sm-3 control-label">Kecamatan</label>
			    <div class="col-sm-8">
			   	 <input type="text" name="kecamatan" class="form-control">
				</div>
			  </div>

			  <div class="form-group">
			    <label class="col-sm-3 control-label">Desa/Kelurahan</label>
			    <div class="col-sm-8">
			    	<input type="text" name="desa_kelurahan" class="form-control" required>
				</div>
			  </div>
			  <div class="form-group">
			  	<div class="col-sm-8 col-sm-offset-3">
			  	<a href="#data1" aria-controls="messages" role="tab" data-toggle="tab" class="btn btn-primary btn-custom-a" id="kembali_person" style="width: 49%;"><i class="fa fa-long-arrow-left" aria-hidden="true"></i>&ensp; Kembali</a>
			  	<button type="submit" class="btn btn-primary btn-custom" style="width: 49%;"><i class="fa fa-floppy-o" aria-hidden="true"></i>&ensp; Simpan Data</button>
			  </div>
			  </div>
		 	</div>
		 	</div>
		 </div>
	</div>
	<?php echo form_close(); ?>
		<!-- tabs -->
		</div>
	</div>
</div>

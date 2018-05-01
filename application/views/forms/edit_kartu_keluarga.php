<style type="text/css">
.btn.btn-primary{width: 100%;}
.nav-link.active{background-color: #E7E7E7;}
</style>
<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>

<div class="row">
	<div class="col-md-6">
		<ol class="breadcrumb">
		  <li><a href="<?=base_url('welcome')?>">Home</a></li>
		  <li><a href="<?=base_url('welcome/daftar/keluarga')?>">Keluarga</a></li>
		  <li class="active">Edit Kartu Keluarga ( no. kartu keluarga : <?= $kartu_keluarga['no_kk'] ?> )</li>
		</ol>
	</div>
</div>
		<?php echo form_open('welcome/edit_keluarga'); 
		echo form_hidden('id_keluarga', $kartu_keluarga['id_keluarga']); ?>
  <!-- Nav tabs -->
<div class="row" style="margin-bottom: 25px; margin-top: 10px;">
	<div class="col-md-12">
	  <ul class="list-inline nav-custom" role="tablist" style="width: 50%; margin:auto; position: relative; left:20%;">
	    <li role="presentation" class="active" id="data1_person"><a href="#data1" aria-controls="home" role="tab" data-toggle="tab">Data Pribadi</a></li>
	    <li role="presentation" id="data2_person"><a href="#data2" aria-controls="messages" role="tab" data-toggle="tab">Data Informasi</a></li>
	  </ul>
	</div>
</div>
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="data1">
<div class="row">
	<div class="col-md-12">
		<!-- tabs -->
  		<div class="form-horizontal" style="width: 50%; margin:auto;">
		  <div class="form-group">
		    <label class="col-sm-4 control-label">Nomor KK</label>
		    <div class="col-sm-8">
		   	 <input type="text" name="no_kk" class="form-control" value="<?= $kartu_keluarga['no_kk'] ?>">
			</div>
		  </div>

		  <div class="form-group">
		    <label class="col-sm-4 control-label">NIK Kepala Keluarga</label>
		    <div class="col-sm-8">
		   	 <input type="text" name="nik_kepkel" class="form-control" value="<?= $kartu_keluarga['nik_kepkel'] ?>" required>
			</div>
		  </div>

		  <div class="form-group">
		    <label class="col-sm-4 control-label">Alamat</label>
		    <div class="col-sm-8">
		    	<textarea name="alamat" class="form-control" required><?= $kartu_keluarga['alamat'] ?></textarea>
			</div>
		  </div>

		  <div class="form-group">
		    <label class="col-sm-4 control-label">Kode Pos</label>
		    <div class="col-sm-8">
		    	<input type="number" name="kode_pos" class="form-control" value="<?= $kartu_keluarga['kode_pos'] ?>">
			</div>
		  </div>

	  	  <div class="form-group">
		    <label class="col-sm-4 control-label">RT/RW</label>
		    <div class="col-sm-4">
		    	<input type="text" name="no_rt" class="form-control" value="<?= $kartu_keluarga['no_rt'] ?>">
			</div>
		    <div class="col-sm-4">
		   	 	<input type="text" name="no_rw" class="form-control" value="<?= $kartu_keluarga['no_rw'] ?>">
			</div>
		  </div>
			  <div class="form-group">
			  	<div class="col-sm-8 col-sm-offset-4">
			  	<a class="btn btn-primary btn-custom-a" id="berikutnya_person" href="#data2" aria-controls="messages" role="tab" data-toggle="tab">Berikutnya &ensp;<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
			  </div>
			  </div>
	  	  <br>
		</div> 

		<!-- tabs -->
		</div>
	</div>
</div>
	<div role="tabpanel" class="tab-pane" id="data2">
	<div class="row">
		<div class="col-md-12">
			<div class="form-horizontal" style="width: 50%; margin:auto;">
			<div class="form-group">
			    <label class="col-sm-4 control-label">Nomor Telepon</label>
			    <div class="col-sm-8">
			    	<input type="text" name="telepon" class="form-control" value="<?= $kartu_keluarga['telepon'] ?>">
				</div>
			  </div>

			  <div class="form-group">
			    <label class="col-sm-4 control-label">Provinsi</label>
			    <div class="col-sm-8">
			    	<input type="text" name="provinsi" class="form-control" value="<?= $kartu_keluarga['provinsi'] ?>">
				</div>
			  </div>

			  <div class="form-group">
			    <label class="col-sm-4 control-label">Kabupaten/Kota</label>
			    <div class="col-sm-8">
			    <input type="text" name="kabupaten_kota" class="form-control" value="<?= $kartu_keluarga['kabupaten_kota'] ?>">
				</div>
			  </div>

			  <div class="form-group">
			    <label class="col-sm-4 control-label">Kecamatan</label>
			    <div class="col-sm-8">
			   	 <input type="text" name="kecamatan" class="form-control" value="<?= $kartu_keluarga['kecamatan'] ?>">
				</div>
			  </div>

			  <div class="form-group">
			    <label class="col-sm-4 control-label">Desa/Kelurahan</label>
			    <div class="col-sm-8">
			    	<input type="text" name="desa_kelurahan" class="form-control" value="<?= $kartu_keluarga['desa_kelurahan'] ?>">
				</div>
			  </div>
			  <div class="form-group">
			  	<div class="col-sm-8 col-sm-offset-4">
			  	<a href="#data1" aria-controls="messages" role="tab" data-toggle="tab" class="btn btn-primary btn-custom-a" id="kembali_person" style="width: 49%;"><i class="fa fa-long-arrow-left" aria-hidden="true"></i>&ensp; Kembali</a>
			  	<button type="submit" class="btn btn-primary btn-custom-no" style="width: 49%;"><i class="fa fa-floppy-o" aria-hidden="true"></i>&ensp; Simpan Data</button>
			  </div>
			  </div>
			  </div>
		</div>
	</div>
</div>
	<?php echo form_close(); ?>
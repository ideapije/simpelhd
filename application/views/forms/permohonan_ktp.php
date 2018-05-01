<style type="text/css">
.btn.btn-primary{width: 100%;}
.nav-link.active{background-color: #E7E7E7;}
input:read-only{
	background-color: #F5F5F5;
}
input, textarea, select{
	text-transform: uppercase;
}
</style>
<div class="row">
<div class="col-md-6">
	<ol class="breadcrumb" style="position: absolute; z-index: 99;">
	  <li><a href="<?=base_url('welcome')?>">Home</a></li>
	  <li><a href="<?=base_url('welcome/daftar/person')?>">Person</a></li>
	  <li class="active">Permohonan KTP</li>
	</ol>
</div>

<div class="col-md-6 text-right">

</div>
</div>

  <!-- Nav tabs -->
<div class="row" style="margin-bottom: 25px; margin-top: 10px;">
	<div class="col-md-12">
	  <ul class="list-inline nav-custom" role="tablist" style="width: 50%; margin:auto; position: relative; left:20%;">
	    <li role="presentation" class="active" id="data1_person"><a href="#data1" aria-controls="home" role="tab" data-toggle="tab">Data Pribadi</a></li>
	    <li role="presentation" id="data2_person"><a href="#data2" aria-controls="messages" role="tab" data-toggle="tab">Data Informasi</a></li>
	  </ul>
	</div>
</div>
<form action="<?=base_url('welcome/submit_permohonan_ktp')?>" method="post">
  <div class="tab-content">
  	<div role="tabpanel" class="tab-pane active" id="data1">

<div class="row">
	<div class="col-md-12">
		<div class="form-horizontal" style="width: 50%; margin:auto;">
			<div class="form-group">
			    <label for="inputPassword" class="col-sm-4 control-label">PEMERINTAH PROPINSI</label>
				    <div class="col-sm-2" style="padding-right: 4px;">
				    	<input required type="text" class="form-control" value="<?=$data_kelurahan['kode_provinsi']?>" name="kode_provinsi" placeholder="">
					</div>
					<div class="col-sm-6" style="padding-left: 4px;">
				      <input required type="text" class="form-control" name="provinsi" value="<?=$data_kelurahan['provinsi']?>">
					</div>
			    </div>
			<div class="form-group">
			    <label for="inputPassword" class="col-sm-4 control-label">PEMERINTAH KABUPATEN/KOTA</label>
				    <div class="col-sm-2" style="padding-right: 4px;">
				    	<input required type="text" class="form-control" value="<?=$data_kelurahan['kode_kabupaten_kota']?>" name="kode_kabupaten_kota" placeholder="">
					</div>
					<div class="col-sm-6" style="padding-left: 4px;">
				      <input required type="text" class="form-control" name="kabupaten_kota" value="<?=$data_kelurahan['kabupaten_kota']?>">
					</div>
			    </div>
			<div class="form-group">
			    <label for="inputPassword" class="col-sm-4 control-label">KECAMATAN</label>
				    <div class="col-sm-2" style="padding-right: 4px;">
				    	<input required type="text" class="form-control" value="<?=$data_kelurahan['kode_kecamatan']?>" name="kode_kecamatan" placeholder="">
					</div>
					<div class="col-sm-6" style="padding-left: 4px;">
				      <input required type="text" class="form-control" name="kecamatan" value="<?=$data_kelurahan['kecamatan']?>">
					</div>
			    </div>
			<div class="form-group">
			    <label for="inputPassword" class="col-sm-4 control-label">KELURAHAN/DESA</label>
				    <div class="col-sm-2" style="padding-right: 4px;">
				    	<input required type="text" class="form-control" value="<?=$data_kelurahan['kode_desa_kelurahan']?>" name="kode_desa_kelurahan" placeholder="">
					</div>
					<div class="col-sm-6" style="padding-left: 4px;">
				      <input required type="text" class="form-control" name="desa_kelurahan" value="<?=$data_kelurahan['desa_kelurahan']?>">
					</div>
			    </div>		
			<div class="form-group">
			    <label for="inputPassword" class="col-sm-4 control-label">NAMA CAMAT</label>
					<div class="col-sm-8">
				      <input required type="text" class="form-control" name="camat" value="<?=$data_kelurahan['nama_camat']?>">
					</div>
			    </div>	
			<div class="form-group">
			    <label for="inputPassword" class="col-sm-4 control-label">NIP CAMAT</label>
					<div class="col-sm-8">
				      <input required type="text" class="form-control" name="nik_camat" value="<?=$data_kelurahan['nip_camat']?>">
					</div>
			    </div>
			<div class="form-group">
			    <label for="inputPassword" class="col-sm-4 control-label">NAMA LURAH</label>
					<div class="col-sm-8">
				      <input required type="text" class="form-control" name="lurah" value="<?=$data_kelurahan['nama_lurah']?>">
					</div>
			    </div>	
			<div class="form-group">
			    <label for="inputPassword" class="col-sm-4 control-label">NIP LURAH</label>
					<div class="col-sm-8">
				      <input required type="text" class="form-control" name="nik_lurah" value="<?=$data_kelurahan['nip_lurah']?>">
					</div>
			    </div>	
			  <div class="form-group">
			  	<div class="col-sm-8 col-sm-offset-4">
			  	<a class="btn btn-primary btn-custom-a" id="berikutnya_person" href="#data2" aria-controls="messages" role="tab" data-toggle="tab">Berikutnya &ensp;<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
			  </div>
			  </div>    		    
			</div>
		</div>
	</div>

  	</div>
  	<div role="tabpanel" class="tab-pane" id="data2">

<div class="row">
	<div class="col-md-12"
		<div style="margin:0 auto; width: 100%;">
				<div class="form-horizontal" style="width: 50%; margin:auto;">
				<input type="hidden" name="id_person" value="<?=(isset($data_person['id_person']))? $data_person['id_person'] : ''?>">
			  <div class="form-group">
			    <label for="inputPassword" class="col-sm-4 control-label">NAMA LENGKAP</label>
			    <div class="col-sm-8">
			      <input required type="text" class="form-control" value="<?=(isset($data_person['nama']))? $data_person['nama'] : ''?>" name="nama" id="nama_lengkap" placeholder="">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="inputPassword" class="col-sm-4 control-label">NOMOR KARTU KELUARGA</label>
			    <div class="col-sm-8">
			      <input required type="text" class="form-control" value="" id="no_kk" name="no_kk" placeholder="">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="inputPassword" class="col-sm-4 control-label">NOMOR INDUK KEPENDUDUKAN</label>
			    <div class="col-sm-8">
			      <input required type="text" class="form-control" value="<?=(isset($data_person['nik']))? $data_person['nik'] : ''?>" name="nik" id="nik" placeholder="">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="inputPassword" class="col-sm-4 control-label">ALAMAT</label>
			    <div class="col-sm-8">
			      <textarea required class="form-control" name="alamat_sebelumnya" rows="2" id="alamat_sebelumnya"><?=(isset($data_person['alamat_sebelumnya']))? $data_person['alamat_sebelumnya'] : ''?></textarea>
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="inputPassword" class="col-sm-4 control-label">RT/RW</label>
			    <div class="col-sm-4">
			    	<input required id="rt" type="text" class="form-control" placeholder="" value="<?=(isset($data_person['rt']))? $data_person['rt'] : ''?>" name="rt">
			    </div>
			    <div class="col-sm-4">
			    	<input required id="rw" type="text" class="form-control" placeholder="" value="<?=(isset($data_person['rw']))? $data_person['rw'] : ''?>" name="rw">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="inputPassword" class="col-sm-4 control-label">KODE POS</label>
			    <div class="col-sm-8">
			      <input required type="text" id="kode_pos" class="form-control" value="" name="kode_pos" placeholder="">
			    </div>
			  </div>			  
			  <div class="form-group">
			    <label for="inputPassword" class="col-sm-4 control-label">PERMOHONAN KTP</label>
					<div class="col-sm-8">
				      <select class="form-control" name="permohonan" required>
				      	<option value="">- Jenis Permohonan -</option>
				      	<option value="A">Baru</option>
				      	<option value="B">Perpanjangan</option>
				      	<option value="C">Penggantian</option>
				      </select>
					</div>
			    </div>
			  <div class="form-group">
			  	<div class="col-sm-8 col-sm-offset-4">
			  	<a href="#data1" aria-controls="messages" role="tab" data-toggle="tab" class="btn btn-primary btn-custom-a" id="kembali_person" style="width: 35%;"><i class="fa fa-long-arrow-left" aria-hidden="true"></i>&ensp; Kembali</a>
			  	<button type="submit" class="btn btn-primary btn-custom-no" style="width: 64%;"><i class="fa fa-print" aria-hidden="true"></i>&ensp; Cetak Permohonan KTP</button>
			  </div>
			  </div>			    			  
			  </div>			  
		</div>
  	</div>
  	</div>
  </div>
</form>




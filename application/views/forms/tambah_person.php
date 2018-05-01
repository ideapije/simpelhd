<div class="container">
<style type="text/css">
.btn.btn-primary{width: 100%;}
.nav-link.active{background-color: #E7E7E7;}
input:read-only{
	background-color: #F5F5F5;
}
input, textarea{
	text-transform: capitalize;
}
</style>
<div class="row">
	<div class="col-md-6">
		<ol class="breadcrumb" style="position: absolute; z-index: 99;">
		  <li><a href="<?=base_url('welcome')?>">Home</a></li>
		  <li><a href="<?=base_url('welcome/daftar/person')?>">Person</a></li>
		  <li class="active">Tambah Data Person</li>
		</ol>
	</div>
<form action="<?=base_url('welcome/submit_ajukan_ktp')?>" method="post" autocomplete="off">
	<div class="col-md-6 text-right">

	</div>
</div>

<div>

  <!-- Nav tabs -->
<div class="row" style="margin-bottom: 25px; margin-top: 10px;">
	<div class="col-md-12">
	  <ul class="list-inline nav-custom" role="tablist" style="width: 50%; margin:auto; position: relative; left:20%;">
	    <li role="presentation" class="active" id="data1_person"><a href="#data1" aria-controls="home" role="tab" data-toggle="tab">Data Pribadi</a></li>
	    <li role="presentation" id="data2_person"><a href="#data2" aria-controls="messages" role="tab" data-toggle="tab">Data Informasi</a></li>
	  </ul>
	</div>
</div>

  <!-- Tab panes -->

  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="data1">
    	  <div class="row">
	<div class="col-md-12">
		<div style="width: 50%; margin:auto;">
		<div class="form-horizontal">
			<input type="hidden" name="id_person" value="<?=(isset($data_person['id_person']))? $data_person['id_person'] : ''?>">
		  <div class="form-group">
		    <label class="col-sm-3 control-label">NIK</label>
		    <div class="col-sm-8">
		      <input required type="text" class="form-control" required value="<?=(isset($data_person['nik']))? $data_person['nik'] : ''?>" name="nik" placeholder="Nomor Induk Kependudukan">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="inputPassword" class="col-sm-3 control-label">NAMA LENGKAP</label>
		    <div class="col-sm-8">
		      <input required type="text" class="form-control" required value="<?=(isset($data_person['nama']))? $data_person['nama'] : ''?>" name="nama" placeholder="Nama Lengkap">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="inputPassword" class="col-sm-3 control-label">TEMPAT LAHIR</label>
		    <div class="col-sm-8">
		      <input required type="text" class="form-control" required value="<?=(isset($data_person['lahir_tempat']))? $data_person['lahir_tempat'] : ''?>" name="lahir_tempat" placeholder="Tempat Lahir">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="inputPassword" class="col-sm-3 control-label">TANGGAL LAHIR</label>
		    <div class="col-sm-8">
		      <input required type="date" class="form-control" required value="<?=(isset($data_person['lahir_tanggal']))? $data_person['lahir_tanggal'] : ''?>" name="lahir_tanggal" placeholder="Tanggal Lahir">
		    </div>
		  </div>
		  <div class="form-group" style="height: 40px;">
		    <label for="inputPassword" required class="col-sm-3 control-label">JENIS KELAMIN</label>
		    <div class="col-sm-8" style="margin-top: 10px;">

			  <input type="radio" name="jenis_kelamin" id="r1" value="1" 
			  <?php
			  	if(isset($data_person['jenis_kelamin']) && $data_person['jenis_kelamin'] == '1'){
			  		echo 'checked';
			  	} 
			  ?>> <label for="r1">Laki-laki</label>&ensp;&ensp;&ensp;
			  <input id="r2" type="radio" name="jenis_kelamin" value="2" 
			  <?php
			  	if(isset($data_person['jenis_kelamin']) && $data_person['jenis_kelamin'] == '2'){
			  		echo 'checked';
			  	} 
			  ?>> <label for="r2">Perempuan</label><br>
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="inputPassword" class="col-sm-3 control-label">GOLONGAN DARAH</label>
		    <div class="col-sm-8">
		    	<?php $goldar = null; ?>
		    	<?php (isset($data_person['goldar']))? $goldar = $data_person['goldar'] : '' ;?>
				<select class="form-control" name="goldar" required>
					<option value="">- Golongan Darah -</option>
					<option value="1" <?php if ($goldar == 1 ) echo 'selected' ; ?>>A</option>
					<option value="2" <?php if ($goldar == 2 ) echo 'selected' ; ?>>B</option>
					<option value="3" <?php if ($goldar == 3 ) echo 'selected' ; ?>>AB</option>
					<option value="4" <?php if ($goldar == 4 ) echo 'selected' ; ?>>O</option>
					<option value="5" <?php if ($goldar == 5 ) echo 'selected' ; ?>>A+</option>
					<option value="6" <?php if ($goldar == 6 ) echo 'selected' ; ?>>A-</option>
					<option value="7" <?php if ($goldar == 7 ) echo 'selected' ; ?>>B+</option>
					<option value="8" <?php if ($goldar == 8 ) echo 'selected' ; ?>>B-</option>
					<option value="9" <?php if ($goldar == 9 ) echo 'selected' ; ?>>AB+</option>
					<option value="10" <?php if ($goldar == 10 ) echo 'selected' ; ?>>AB-</option>
					<option value="11" <?php if ($goldar == 11 ) echo 'selected' ; ?>>O+</option>
					<option value="12" <?php if ($goldar == 12 ) echo 'selected' ; ?>>O-</option>
					<option value="13" <?php if ($goldar == 13 ) echo 'selected' ; ?>>Tidak Tahu</option>
				<select>

		    </div>
		  </div>
		  <div class="form-group">
		    <label for="inputPassword" class="col-sm-3 control-label">ALAMAT</label>
		    <div class="col-sm-8">
		      <textarea class="form-control" required name="alamat_sebelumnya" rows="2"><?=(isset($data_person['alamat_sebelumnya']))? $data_person['alamat_sebelumnya'] : ''?></textarea>
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
	</div>
	</div>
    	
    <div role="tabpanel" class="tab-pane" id="data2">
    	<div class="row">
		<div class="col-md-12">
		<div style="width: 50%; margin:auto;">
			<div class="form-horizontal">
			<div class="form-group">
			    <label for="inputPassword" class="col-sm-3 control-label">RT/RW</label>
			    <div class="col-sm-4">
			    	<input required type="text" class="form-control" placeholder="RT" value="<?=(isset($data_person['rt']))? $data_person['rt'] : ''?>" name="rt">
			    </div>
			    <div class="col-sm-4">
			    	<input type="text" class="form-control" placeholder="RW" value="<?=(isset($data_person['rw']))? $data_person['rw'] : ''?>" name="rw">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="inputPassword" class="col-sm-3 control-label">KEL/DESA</label>
			    <div class="col-sm-8">
			    	<input required type="text" class="form-control" placeholder="Kelurahan/Desa" value="<?=(isset($data_person['desa_kelurahan']))? $data_person['desa_kelurahan'] : ''?>" name="desa_kelurahan">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="inputPassword" class="col-sm-3 control-label">KECAMATAN</label>
			    <div class="col-sm-8">
			    	<input required type="text" class="form-control" placeholder="Kecamatan" value="<?=(isset($data_person['kecamatan']))? $data_person['kecamatan'] : ''?>" name="kecamatan">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="inputPassword" class="col-sm-3 control-label">AGAMA</label>
			    <div class="col-sm-8">
			    	<?php $agama = null; ?>
			    	<?php (isset($data_person['agama']))? $agama = $data_person['agama'] : '' ;?>
					<select class="form-control" name="agama" required>
						<option value="">- Agama -</option>
						<option value="1" <?php if ($agama == 1 ) echo 'selected' ; ?>>Islam</option>
						<option value="2" <?php if ($agama == 2 ) echo 'selected' ; ?>>Kristen</option>
						<option value="3" <?php if ($agama == 3 ) echo 'selected' ; ?>>Katholik</option>
						<option value="4" <?php if ($agama == 4 ) echo 'selected' ; ?>>Hindu</option>
						<option value="5" <?php if ($agama == 5 ) echo 'selected' ; ?>>Budha</option>
						<option value="6" <?php if ($agama == 6 ) echo 'selected' ; ?>>Kong Hucu</option>
						<option value="7" <?php if ($agama == 7 ) echo 'selected' ; ?>>Kepercayaan Terhadap Tuhan Yang Maha Esa</option>
					<select>
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="inputPassword" class="col-sm-3 control-label">STATUS PERKAWINAN</label>
			    <div class="col-sm-8">
			    	<?php $status = null; ?>
			    	<?php (isset($data_person['status_perkawinan']))? $status = $data_person['status_perkawinan'] : '' ;?>
					<select class="form-control" name="status_perkawinan" required>
						<option value="">- Status Perkawinan -</option>
						<option value="1" <?php if ($status == 1 ) echo 'selected' ; ?>>Belum Kawin</option>
						<option value="2" <?php if ($status == 2 ) echo 'selected' ; ?>>Kawin</option>
						<option value="3" <?php if ($status == 3 ) echo 'selected' ; ?>>Cerai Hidup</option>
						<option value="4" <?php if ($status == 4 ) echo 'selected' ; ?>>Cerai Mati</option>
					<select>			    	
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="inputPassword" class="col-sm-3 control-label">PEKERJAAN</label>
			    <div class="col-sm-8">
			    	<input required type="text" class="form-control" placeholder="Pekerjaan" value="<?=(isset($data_person['pekerjaan']))? $data_person['pekerjaan'] : ''?>" name="pekerjaan">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="inputPassword" class="col-sm-3 control-label">KEWARGANEGARAAN</label>
			    <div class="col-sm-8">
			    	<input required type="text" class="form-control" placeholder="Kewarganegaraan" value="<?=(isset($data_person['kewarganegaraan']))? $data_person['kewarganegaraan'] : ''?>" name="kewarganegaraan">
			    </div>
			  </div>
			  <div class="form-group">
			  	<div class="col-sm-8 col-sm-offset-3">
			  	<a href="#data1" aria-controls="messages" role="tab" data-toggle="tab" class="btn btn-primary btn-custom-a" id="kembali_person" style="width: 49.5%;"><i class="fa fa-long-arrow-left" aria-hidden="true"></i>&ensp; Kembali</a>
			  	<button type="submit" class="btn btn-primary btn-custom-no" style="width: 49.5%;"><i class="fa fa-floppy-o" aria-hidden="true"></i>&ensp; Simpan Data</button>
			  </div>
			  </div>
		</div>
	</div>
	</div>
	</div>

    </div>
  </div>
</form>


</div>
<script type="text/javascript">
	    $("#berikutnya_person").on('click', function(){
        $("#data1_person").removeClass("active");
        $("#data2_person").addClass("active");
    });
    $("#kembali_person").on('click', function(){
        $("#data1_person").removeClass("active");
        $("#data2_person").addClass("active");
    });
</script>
<style type="text/css">
.btn.btn-primary{width: 100%;}
.nav-link.active{background-color: #E7E7E7;}
</style>

<div class="row">
	<div class="col-md-12">

<ol class="breadcrumb">
  <li><a href="<?=base_url('welcome')?>">Home</a></li>
  <li><a href="<?=base_url('welcome/daftar/person')?>">Person</a></li>
  <li class="active">Tambah Person</li>
</ol>

		<div style="width: 50%; margin:auto;">

		<!-- tabs -->
		<form action="<?php echo site_url('welcome/simpan_person'); ?>" method="post" class="form-horizontal">
			<div class="tab-content">
			
			  	<div role="tabpanel" class="tab-pane fade in active" id="data1">
					  <div class="form-group">
					    <label for="exampleInputEmail1" class="col-sm-4 control-label">NIK</label>
					    <div class="col-sm-8">
					    <input type="number" name="nik" class="form-control">
						</div>
					  </div>

					  <div class="form-group">
					    <label for="exampleInputEmail1" class="col-sm-4 control-label">Nama Lengkap</label>
					    <div class="col-sm-8">
					    <input type="text" name="namalengkap" class="form-control">
						</div>
					  </div>

					  <div class="form-group">
					    <label for="exampleInputEmail1" class="col-sm-4 control-label">Jenis Kelamin</label>
					    <div class="col-sm-8">
					    <select name="jeniskelamin" class="form-control">
					      <option value="1">Laki-Laki</option>
					      <option value="2">Perempuan</option>
					    </select>
						</div>
					  </div>

					  <div class="form-group">
					    <label for="exampleInputEmail1" class="col-sm-4 control-label">Tempat Lahir</label>
					    <div class="col-sm-8">
					    <input type="text" name="tempatlahir" class="form-control">
						</div>
					  </div>

					  <div class="form-group">
					    <label for="exampleInputEmail1" class="col-sm-4 control-label">Tanggal Lahir</label>
					    <div class="col-sm-8">
					    <input type="date" name="tanggallahir" class="form-control">
						</div>
					  </div>

					  <div class="form-group">
					    <label for="exampleInputEmail1" class="col-sm-4 control-label">Agama</label>
					    <div class="col-sm-8">
					    <select class="form-control" name="agama">
						      <option value="1">Islam</option>
						      <option value="2">Kristen</option>
						      <option value="3">Katholik</option>
						      <option value="4">Hindu</option>
						      <option value="5">Budha</option>
						      <option value="6">Kong Hucu</option>
						      <option value="7">Kepercayaan Terhadap Tuhan Yang Maha Esa</option>
						</select>
						</div>
					  </div>

					  <div class="form-group">
						<label for="exampleInputEmail1" class="col-sm-4 control-label">Golongan Darah</label>
						<div class="col-sm-8">
						<select class="form-control" name="goldar">
						      <option value="1">A</option>
						      <option value="2">B</option>
						      <option value="3">AB</option>
						      <option value="4">O</option>
						      <option value="5">A+</option>
						      <option value="6">A-</option>
						      <option value="7">B+</option>
						      <option value="8">B-</option>
						      <option value="9">AB+</option>
						      <option value="10">AB-</option>
						      <option value="11">O+</option>
						      <option value="12">O-</option>
						      <option value="13">Tidak Tahu</option>
						</select>
							</div>
					  </div>
					  
					  <div class="form-group">
					  		<div class="col-sm-8 col-sm-offset-4">
						  		<button type="submit" class="btn btn-primary">Submit</button>
						  	</div>
					  </div>
					  <br>
				</div>
			</div>
		</form>
		<!-- tabs -->
		</div>
	</div>
</div>
<style type="text/css">
.btn.btn-primary{width: 100%;}
.nav-link.active{background-color: #E7E7E7;}
</style>

<div class="row">
	<div class="col-md-12">

<ol class="breadcrumb" style="position: absolute; z-index: 99;">
  <li><a href="<?=base_url('welcome')?>">Home</a></li>
  <li><a href="<?=base_url('welcome/daftar/person')?>">Person</a></li>
  <li class="active">Tambah Person</li>
</ol>

  <!-- Nav tabs -->
<div class="row" style="margin-bottom: 25px; margin-top: 10px;">
	<div class="col-md-12">
	  <ul class="list-inline nav-custom" role="tablist" style="width: 50%; margin:auto; position: relative; left:15%;">
	    <li role="presentation" class="active" id="data1_person"><a href="#data1" aria-controls="home" role="tab" data-toggle="tab">Data Pernikahan</a></li>
	    <li role="presentation" id="data2_person"><a href="#data2" aria-controls="messages" role="tab" data-toggle="tab">Data Perceraian</a></li>
	  </ul>
	</div>
</div>

		<div style="width: 30%; margin:auto;">

		<!-- tabs -->
		<form action="<?php echo site_url('welcome/simpan_person'); ?>" method="post" class="form-horizontal">
			<div class="tab-content">
			
			  	<div role="tabpanel" class="tab-pane fade in active" id="data1">
					<div class="form-group">
					    <label for="exampleInputEmail1" class="control-label">Nomor Akta Kelahiran/Surat Kenal Lahir</label>
					    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Akta Lahir / Kenal Lahir">
					  </div>
					<div class="form-group">
					    <label for="exampleInputEmail1" class="control-label">Akta Perkawinan/Buku Nikah</label>
					    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Akta Perkawinan / Buku Nikah">
					  </div>
					<div class="form-group">
					    <label for="exampleInputEmail1" class="control-label">Tanggal Perkawinan</label>
					    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Tanggal Perkawinan">
					  </div>
				  <div class="form-group">
				  	<div class="row">
					  	<div class="col-sm-6 col-sm-offset-6">
					  	<a class="btn btn-primary btn-custom-a" id="berikutnya_person" href="#data2" aria-controls="messages" role="tab" data-toggle="tab">Berikutnya &ensp;<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
					  </div>
				  </div>
				  </div> 						  				  					
				</div>
				<div role="tabpanel" class="tab-pane" id="data2">
					<div class="form-group">
					    <label for="exampleInputEmail1" class="control-label">akta cerai/surat cerai </label>
					    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Akta Cerai / Surat Cerai">
					  </div>
					<div class="form-group">
					    <label for="exampleInputEmail1" class="control-label">nomor akta perceraian/surat cerai</label>
					    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Nomor Akta Perceraian / Surat Cerai">
					  </div>
					<div class="form-group">
					    <label for="exampleInputEmail1" class="control-label">tanggal perceraian</label>
					    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Tanggal Perceraian">
					  </div>
			  <div class="form-group">

			  	<a href="#data1" aria-controls="messages" role="tab" data-toggle="tab" class="btn btn-primary btn-custom-a" id="kembali_person" style="width: 39%;"><i class="fa fa-long-arrow-left" aria-hidden="true"></i>&ensp; Kembali</a>
			  	<button type="submit" class="btn btn-primary btn-custom" style="width: 59%;"><i class="fa fa-print" aria-hidden="true"></i>&ensp; Cetak Permohonan KTP</button>

			  </div>
				</div>
			</div>
		</form>
		<!-- tabs -->
		</div>
	</div>
</div>

<div class="row">
	<div class="col-lg-12">

		<ol class="breadcrumb">
		  <li><a href="<?=base_url('welcome')?>">Home</a></li>
		  <li><a href="<?=base_url('welcome/daftar/akte_lahir')?>">Akte Lahir</a></li>
		  <li class="active">Edit Akte Lahir</li>
		</ol>

		<?=form_open('welcome/submit_edit_akte_lahir')?>
		<div style="width: 50%; margin:auto;">
			<div class="form-horizontal">

				<div class="form-group">
				    <label class="col-sm-4 control-label">Nama Kepala Keluarga</label>
				    <div class="col-sm-8">
				   	 <input type="text" value="<?=$data_akte_lahir['nama_kepkel']?>" name="nama_kepkel" class="form-control" required>
					</div>
				  </div>
				<div class="form-group">
				    <label class="col-sm-4 control-label">Nama (BAYI)</label>
				    <div class="col-sm-8">
				   	 <input type="text" value="<?=$data_akte_lahir['nama']?>" name="nama" class="form-control" required>
					</div>
				  </div>	
				<div class="form-group">
				    <label class="col-sm-4 control-label">Jenis Kelamin</label>
				    <div class="col-sm-8">
				   	 <select class="form-control" name="jenis_kelamin">

						<option value = "Laki-laki" 
				            <?php
				                if ($data_akte_lahir['jenis_kelamin'] == "Laki-laki"){
				                    echo 'selected="selected"';
				                } 
				            ?> >
				            Laki-laki
						</option>
						<option value = "Perempuan" 
				            <?php
				                if ($data_akte_lahir['jenis_kelamin'] == "Perempuan"){
				                    echo 'selected="selected"';
				                } 
				            ?> >
				            Perempuan
						</option>

				   	 </select>
					</div>
				  </div>
				<div class="form-group">
				    <label class="col-sm-4 control-label">Tempat dilahirkan</label>
				    <div class="col-sm-8">
				   	 <input type="text" name="tempat_dilahirkan" value="<?=$data_akte_lahir['tempat_dilahirkan']?>" class="form-control" required>
					</div>
				  </div>
				<div class="form-group">
				    <label class="col-sm-4 control-label">Tanggal lahir</label>
				    <div class="col-sm-8">
				   	 <input type="date" name="tempat_lahir" value="<?=$data_akte_lahir['tanggal_lahir']?>" class="form-control" required>
					</div>
				  </div>
				<div class="form-group">
				    <label class="col-sm-4 control-label">Pukul</label>
				    <div class="col-sm-8">
				   	 <input type="text" name="pukul" class="form-control" value="<?=$data_akte_lahir['pukul']?>" required>
					</div>
				  </div>
				<div class="form-group">
				    <label class="col-sm-4 control-label">Jenis Kelahiran</label>
				    <div class="col-sm-8">
				   	 <input type="text" name="jenis_kelahiran" value="<?=$data_akte_lahir['jenis_kelahiran']?>" class="form-control" required>
					</div>
				  </div>
				<div class="form-group">
				    <label class="col-sm-4 control-label">Kelahiran ke</label>
				    <div class="col-sm-8">
				   	 <input type="text" name="kelahiran_ke" value="<?=$data_akte_lahir['kelahiran_ke']?>" class="form-control" required>
					</div>
				  </div>
				<div class="form-group">
				    <label class="col-sm-4 control-label">Penolong Kelahiran</label>
				    <div class="col-sm-8">
				   	 <input type="text" name="penolong_kelahiran" value="<?=$data_akte_lahir['penolong_kelahiran']?>" class="form-control" required>
					</div>
				  </div>
				<div class="form-group">
				    <label class="col-sm-4 control-label">Berat Bayi (KG)</label>
				    <div class="col-sm-8">
				   	 <input type="text" name="berat_bayi" value="<?=$data_akte_lahir['berat_bayi']?>" class="form-control" required>
					</div>
				  </div>
				<div class="form-group">
				    <label class="col-sm-4 control-label">NIK (IBU)</label>
				    <div class="col-sm-8">
				   	 <input type="text" name="nik_ibu" value="<?=$data_akte_lahir['nik_ibu']?>" class="form-control" required>
					</div>
				  </div>
				<div class="form-group">
				    <label class="col-sm-4 control-label">NIK (AYAH)</label>
				    <div class="col-sm-8">
				   	 <input type="text" name="nik_ayah" value="<?=$data_akte_lahir['nik_ayah']?>" class="form-control" required>
					</div>
				  </div>
				<div class="form-group">
				    <label class="col-sm-4 control-label">NIK (PELAPOR)</label>
				    <div class="col-sm-8">
				   	 <input type="text" name="nik_pelapor" value="<?=$data_akte_lahir['nik_pelapor']?>" class="form-control" required>
					</div>
				  </div>
				<div class="form-group">
				    <label class="col-sm-4 control-label">NIK (SAKSI 1)</label>
				    <div class="col-sm-8">
				   	 <input type="text" name="nik_saksi1" value="<?=$data_akte_lahir['nik_saksi1']?>" class="form-control" required>
					</div>
				  </div>
				<div class="form-group">
				    <label class="col-sm-4 control-label">NIK (SAKSI 2)</label>
				    <div class="col-sm-8">
				   	 <input type="text" name="nik_saksi2" value="<?=$data_akte_lahir['nik_saksi2']?>" class="form-control" required>
					</div>
				  </div>
				  <div class="text-right">
				  <button type="submit" class="btn btn-primary">Update Data</button>
				</div>
			</div>
		</div>
		<?=form_close()?>

	</div>
</div>
<script type="text/javascript">
	
</script>
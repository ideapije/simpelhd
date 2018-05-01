<div class="row" style="margin-bottom: 0px;">

		<div class="col-lg-6">
			<ol class="breadcrumb" style="margin-bottom: 10px;">
			  <li><a href="<?=base_url('welcome')?>">Home</a></li>
			  <li><a href="<?=base_url('welcome/daftar/keluarga')?>">Keluarga</a></li>
			  <li class="active">Details Kartu Keluarga</li>
			</ol>
		</div>
		<div class="col-lg-6 text-right">
			
		</div>

	<div class="col-lg-12">
	<div class="row" style="margin-bottom: 10px; background-color: #fff; padding-top: 15px; padding-bottom: 25px; margin-left: 0px; margin-right: 0px; border-radius: 4px; box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);">
		<div class="col-lg-6">
			<h1 style="margin-bottom: 50px; margin-top: 0px;">Kartu Keluarga</h1>
		</div>
		<div class="col-lg-6 text-right">
			<?=anchor('welcome/edit_kartu_keluarga/'.	$id_keluarga, '<i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit Kartu Keluarga', array('class'=>'btn btn-primary btn-custom-a', 'style'=>'margin-right:5px;'))?>
			<?=anchor('welcome/cetak_kk/'.	$id_keluarga, '<i class="fa fa-print" aria-hidden="true"></i> Print', array('class'=>'btn btn-primary btn-custom-a-no'))?>
		</div>
		<div class="col-lg-7">
			<table style="width: 100%; text-transform: uppercase;">
				<tr>
					<td width="35%"><strong>Nama Kepala Keluarga</strong></td>
					<td>:</td>
					<td><?=$nama_kepkel['nama']?></td>
				</tr>
				<tr>
					<td><strong>Alamat</strong></td>
					<td>:</td>
					<td><?=$kartu_keluarga['alamat']?></td>
				</tr>
				<tr>
					<td><strong>RT/RW</strong></td>
					<td>:</td>
					<td><?=$kartu_keluarga['no_rt']?>/<?=$kartu_keluarga['no_rw']?></td>
				</tr>
				<tr>
					<td><strong>Desa/Kelurahan</strong></td>
					<td>:</td>
					<td><?=$kartu_keluarga['desa_kelurahan']?></td>
				</tr>
			</table>
		</div>
		<div class="col-lg-5">
			<table style="width: 100%; text-transform: uppercase;">
				<tr>
					<td width="40%"><strong>Kecamatan</strong></td>
					<td>:</td>
					<td><?=$kartu_keluarga['kecamatan']?></td>
				</tr>
				<tr>
					<td><strong>Kabupaten/Kota</strong></td>
					<td>:</td>
					<td><?=$kartu_keluarga['kabupaten_kota']?></td>
				</tr>
				<tr>
					<td><strong>Kode POS</strong></td>
					<td>:</td>
					<td><?=$kartu_keluarga['kode_pos']?></td>
				</tr>
				<tr>
					<td><strong>Provinsi</strong></td>
					<td>:</td>
					<td><?=$kartu_keluarga['provinsi']?></td>
				</tr>
			</table>
		</div>
	</div>
	<?php $id_keluarga = $kartu_keluarga['id_keluarga']; ?>

	<table class="table table-hover">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Lengkap</th>
				<th>NIK</th>
				<th>Status Perkawinan</th>
				<th>Status Hubungan dalam Keluarga</th>
				<th>Nama Ibu</th>
				<th>Nama Ayah</th>
				<th width="15%">Tindakan</th>
			</tr>
		</thead>
		<tbody style="text-align: center;">
			<?php $no=1; foreach ($anggota_keluarga as $akl): ?>	
			<tr>
				<td><?=$no?>.</td>
				<td><?=$akl['nama']?></td>
				<td><?=$akl['nik']?></td>
				<td><?=$akl['status_perkawinan']?></td>
				<td><?=$akl['hub_keluarga']?></td>
				<td><?=$akl['nama_ibu']?></td>
				<td><?=$akl['nama_ayah']?></td>
				<td>
					<?=anchor('welcome/edit_anggota_kartu_keluarga/'.$akl['id_kartukeluarga'], '<i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit' , array('class'=> 'btn btn-primary'))?>
					<?=anchor('welcome/hapus_anggota_kartu_keluarga/'.$akl['id_kartukeluarga'].'/'.$akl['id_keluarga'], '<i class="fa fa-trash-o" aria-hidden="true"></i> Hapus' , array('class'=> 'btn btn-danger custom-b'))?>
				</td>
			</tr>
			<?php $no++; endforeach ?>
		</tbody>
	</table>
	<div class="text-center">
	<?=anchor('welcome/tambah_anggota_kartu_keluarga/'.$id_keluarga, '<i class="fa fa-plus" aria-hidden="true"></i> &ensp; Tambah Anggota Keluarga' , 
					array('class'=> 'btn btn-primary btn-custom-a','style'=>'width:300px;'))?>

	</div>
	</div>
</div>
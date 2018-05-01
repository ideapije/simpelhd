<style type="text/css">
	.table{
		font-size: 0.8em;
	}
</style>
	<div class="row">
		<div class="col-lg-6">
			<ol class="breadcrumb">
			  <li><a href="<?=base_url('welcome')?>">Home</a></li>
			  <li><a href="<?=base_url('welcome/daftar/akte_lahir')?>">Akte Lahir</a></li>
			  <li class="active">Details Akte Lahir</li>
			</ol>
		</div>
		<div class="col-lg-6 text-right">
			<?=anchor('welcome/edit_akte_lahir/'.$id_akte_lahir, '<i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit Akte Lahir', array('class' => 'btn btn-primary'))?>
			<?=anchor('welcome/cetak_akte_lahir/'.$id_akte_lahir, '<i class="fa fa-print" aria-hidden="true"></i> Print', array('class' => 'btn btn-default'))?>
		</div>
	</div>


<h4>BAYI</h4>
<table class="table table-bordered">
	<tr>
		<th>Nama Kepala Keluarga</th>
		<th>Nama(Bayi)</th>
		<th>Jenis Kelamin</th>
		<th>Tempat dilahirkan</th>
		<th>Tempat Lahir</th>
		<th>Tanggal Lahir</th>
		<th>Pukul</th>
		<th>Jenis Kelahiran</th>
		<th>Kelahiran Ke</th>
		<th>Penolong Kelahiran</th>
		<th>Berat Bayi</th>
	</tr>
	<tr>
		<td><?=$data_akte_lahir['nama_kepkel']?></td>
		<td><?=$data_akte_lahir['nama']?></td>
		<td><?=$data_akte_lahir['jenis_kelamin']?></td>
		<td><?=$data_akte_lahir['tempat_dilahirkan']?></td>
		<td><?=$data_akte_lahir['tempat_lahir']?></td>
		<td><?=$data_akte_lahir['tanggal_lahir']?></td>
		<td><?=$data_akte_lahir['pukul']?></td>
		<td><?=$data_akte_lahir['jenis_kelahiran']?></td>
		<td><?=$data_akte_lahir['kelahiran_ke']?></td>
		<td><?=$data_akte_lahir['penolong_kelahiran']?></td>
		<td><?=$data_akte_lahir['berat_bayi']?></td>
	</tr>
</table>
<h4>IBU</h4>
<table class="table table-bordered">
	<tr>
		<th>NIK Ibu</th>
		<th>Nama Lengkap</th>
		<th>Tanggal Lahir/Umur</th>
		<th>Pekerjaan</th>
		<th>Alamat</th>
		<th>Kewarganegaraan</th>
		<th>Keturunan</th>
		<th>Kebangsaan</th>
		<th>Tgl. Pencatatan Perkawinan</th>
	</tr>
	<tr>
		<td><?=$data_ibu['nik_ibu']?></td>
		<td><?=$data_ibu['nama_lengkap']?></td>
		<td><?=$data_ibu['lahir_tanggal']?></td>
		<td><?=$data_ibu['pekerjaan']?></td>
		<td></td> <!-- masih kosong -->
		<td><?=$data_ibu['kewarganegaraan']?></td>
		<td></td> <!-- masih kosong -->
		<td></td> <!-- masih kosong -->
		<td></td> <!-- masih kosong -->
	</tr>
</table>
<h4>AYAH</h4>
<table class="table table-bordered">
	<tr>
		<th>NIK Ayah</th>
		<th>Nama Lengkap</th>
		<th>Tanggal Lahir/Umur</th>
		<th>Pekerjaan</th>
		<th>Alamat</th>
		<th>Kewarganegaraan</th>
		<th>Keturunan</th>
		<th>Kebangsaan</th>
		<th>Tgl. Pencatatan Perkawinan</th>
	</tr>
	<tr>
		<td><?=$data_ayah['nik_ayah']?></td>
		<td><?=$data_ayah['nama_lengkap']?></td>
		<td><?=$data_ayah['lahir_tanggal']?></td>
		<td><?=$data_ayah['pekerjaan']?></td>
		<td></td> <!-- masih kosong -->
		<td><?=$data_ayah['kewarganegaraan']?></td>
		<td></td> <!-- masih kosong -->
		<td></td> <!-- masih kosong -->
		<td></td> <!-- masih kosong -->		
	</tr>
</table>
<div class="row">
	<div class="col-lg-4">
		<h4>PELAPOR</h4>
		<table class="table table-bordered">
			<tr>
				<th>NIK Pelapor</th>
				<th>Nama Lengkap</th>
			</tr>
			<tr>
				<td><?=$data_pelapor['nik_pelapor']?></td>
				<td><?=$data_pelapor['nama']?></td>
			</tr>
		</table>
	</div>
	<div class="col-lg-4">
		<h4>SAKSI 1</h4>
		<table class="table table-bordered">
			<tr>
				<th>NIK Saksi 1</th>
				<th>Nama Lengkap</th>
			</tr>
			<tr>
				<td><?=$data_saksi1['nik_saksi1']?></td>
				<td><?=$data_saksi1['nama']?></td>
			</tr>
		</table>
	</div>
	<div class="col-lg-4">
		<h4>SAKSI 2</h4>
		<table class="table table-bordered">
			<tr>
				<th>NIK Saksi 2</th>
				<th>Nama Lengkap</th>
			</tr>
			<tr>
				<td><?=$data_saksi2['nik_saksi2']?></td>
				<td><?=$data_saksi2['nama']?></td>
			</tr>
		</table>
	</div>
</div>



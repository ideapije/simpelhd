<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>ktp pdf</title>
	<style>
		*{
			text-transform: uppercase;
		}
		body{
			font-size: 11px;
		}
		.table {
			width: 100%;
				border-collapse: collapse;
				table-layout: auto;
		}

		.table td , .table th{
			border: 1px solid black;
		}
		.table tr{
			text-align: center;
		}
		.column-left{ float: left; width: 33%; position: relative;}
		.column-right{ float: left; width: 33%; position: relative}
		.haha{
			text-align: right;
			border: 1px solid #000;
			width: 50px;
		}
		.column-center{ 
			float: left; width: 50%; position: relative;
		}
		.column-center > * , .column-left > * , .column-right > * {
			margin:0px;
		}
		.container{
			height: 50px;
		}
		.container-1{
			height: 160px;
		}

		/*kode kedua*/
		.kedua{ float: left; width: 50%; position: relative; }
		.kedua1{ float: left; width: 50%; position: relative; }
		.haha{
			text-align: right;
			border: 1px solid #000;
			width: 50px;
		}
		.text-center{
			text-align: center;
		}
		h3{
			margin:5px 0px;
		}
		table{
			width: 100%;
		}
		table tr td{
			padding-top: 5px;
		}
		input{
			border:1px solid #000;
		}
		.code{
			width: 10%;
		}
		.isi{
			width: 89%;
		}
		.ktp{
			width: 20%;
			text-align: center;
		}
		.ktp2{
			width: 22%;
			text-align: center;
		}
		.ktp1{
			width: 5%;
			text-align: center;
			font-weight: bold;
		}
		.input{
			width: 100%;
		}
		.rt{
			width: 15%;
		}
		.rw{
			width: 12%;
		}
		.kodepos{
			width: 14%;
		}
		.table-bawah{
			border-collapse: collapse;
			width: 50%;
			text-align: center;
			float: left;
			margin-top: 10px;
		}
		.table-bawah tr td {
			border: 1px solid black;
		}
		.tanggal{
			width: 20%;
		}
		.tanda-tangan >td {
			height: 150px;
		}
	</style>
</head>
<body>
	<div class="text-center">
	<h3>PEMERINTAH KABUPATEN BREBES</h3>
	<h3 class="dua">DINAS KEPENDUDUKAN DAN PENCATATAN SIIPIL</h3>
	<h4 class="tiga">FORMULIR PERMOHONAN KARTU TANDA PENDUDUK (KTP) WARGA NEGARA INDONESIA</h4>
	</div>
	<div style="border:1px solid #000;">
	<h5 style="margin-left: 25px; margin-bottom: 0px; margin-left: 5px;"><strong>Perhatian :</strong></h5>
	<ol style="margin-top: 0px; padding-left: 20px;">
		<li>Harap diisi dengan huruf cetak dan menggunakan tinta hitam</li>
		<li>Untuk kolom pilihan, harap memberi tanda silang (X) pada kotak pilihan</li>
		<li>Setelah formulir ini diisi dan ditandatangani, harap diserahkan kembali ke kantor Desa/Kelurahan</li>
	</ol>
	</div>
	<table style="margin-top: 15px;">
		<tr>
			<td width="27%">PEMERINTAH PROPINSI</td>
			<td width="5%">:</td>
			<td><input class="code" type="text" name="" value="&nbsp; <?=$data_person['kode_provinsi']?>"> <input class="isi" type="text" name="" value="&nbsp; <?=$data_person['provinsi']?>"></td>
		</tr>
		<tr> 
			<td>PEMERINTAH KABUPATEN/KOTA</td>
			<td>:</td>
			<td><input class="code" type="text" name="" value="&nbsp; <?=$data_person['kode_kabupaten_kota']?>"> <input class="isi" type="text" name="" value="&nbsp; <?=$data_person['kabupaten_kota']?>"></td>
		</tr>
		<tr>
			<td>KECAMATAN</td>
			<td>:</td> 
			<td><input class="code" type="text" name="" value="&nbsp; <?=$data_person['kode_kecamatan']?>"> <input class="isi" type="text" name="" value="&nbsp; <?=$data_person['kecamatan']?>"></td>
		</tr>
		<tr>
			<td>KELURAHAN/DESA</td>
			<td>:</td> 
			<td><input class="code" type="text" name="" value="&nbsp; <?=$data_person['kode_desa_kelurahan']?>"> <input class="isi" type="text" name="" value="&nbsp; <?=$data_person['desa_kelurahan']?>"></td>
		</tr>
		<tr>
			<td><span style="text-decoration: underline; font-weight: bold; font-style: italic;">PERMOHONAN KTP</span></td>
			<td></td>
			<td>
				<input class="ktp1" type="text" name="" value="&nbsp; <?php if($data_person['permohonan'] == "A"){ echo 'X'; }?>">
				<input class="ktp" type="text" name="" value="A. Baru"> 
				<input class="ktp1" type="text" name="" value="&nbsp; <?php if($data_person['permohonan'] == "B"){ echo 'X'; }?>">
				<input class="ktp3" type="text" name="" value="B. Perpanjangan" value="&nbsp;"> 
				<input class="ktp1" type="text" name="" value="&nbsp; <?php if($data_person['permohonan'] == "C"){ echo 'X'; }?>">
				<input class="ktp" type="text" name="" value="C. Penggantian">
			</td>
		</tr>
		<tr>
			<td><input type="text" name="" value="1. Nama Lengkap" class="input"></td>
			<td></td>
			<td><input type="text" name="" value="&nbsp; <?=(isset($data_person['nama']))? $data_person['nama'] : ''?>" class="input"></td>
		</tr>
		<tr>
			<td><input type="text" name="" value="2. No. KK" class="input"></td>
			<td></td>
			<td><input type="text" name="" value="&nbsp; <?=(isset($data_person['no_kk']))? $data_person['no_kk'] : ''?>" class="input"></td>
		</tr>
		<tr style="margin: 50px;">
			<td><input type="text" name="" value="3. NIK" class="input"></td>
			<td></td>
			<td><input type="text" name="" value="&nbsp; <?=(isset($data_person['nik']))? $data_person['nik'] : ''?>" class="input"></td>
		</tr>
		<tr>
			<td><input type="text" name="" value="4. Alamat" class="input"></td>
			<td></td>
			<td><input type="text" name="" value="&nbsp; <?=(isset($data_person['alamat_sebelumnya']))? $data_person['alamat_sebelumnya'] : ''?>" class="input"></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><input class="rw" type="text" name="" value="RT:"><input class="rt" type="text" name="" value="&nbsp; <?=(isset($data_person['rt']))? $data_person['rt'] : ''?>"> <input class="rw" type="text" name="" value="RW:"><input class="rt" type="text" name="" value="&nbsp; <?=(isset($data_person['rw']))? $data_person['rw'] : ''?>"> <input class="kodepos" type="text" name="" value="Kode Pos:"><input class="rt" type="text" name="" value="&nbsp; <?=(isset($data_person['kode_pos']))? $data_person['kode_pos'] : ''?>"></td>
		</tr>
	</table>
	<table class="table-bawah">
		<tr>
			<td>Pas Photo (2x3)</td>
			<td>cap Jempol</td>
			<td>Specimen Tanda Tangan</td>
		</tr>
		<tr class="tanda-tangan" style="color: #fff;">
			<td><br><br><br><br><br><br><br></td>
			<td><br><br><br><br><br><br><br></td>
			<td><br><br><br><br><br><br><br></td>
		</tr>
	</table>
	<p style="text-align: left;margin-left: 20px;">&nbsp; &nbsp; Ket : Cap Jempol/Tanda Tangan</p>
	<div style="text-align: center; width: 50%; float: left; margin-top: 25px;">

	<p style="margin: 0px;"><?=$data_person['kabupaten_kota']?>, <?php echo date('d F Y'); ?></p>
	<p style="margin:0px;">Pemohon</p>
	<p style="margin-top: 75px; text-decoration: underline;">( <?=(isset($data_person['nama']))? $data_person['nama'] : ''?> )</p>
	</div>

	<div style="width: 60%; float: right; text-align: center; margin-top: 125px;">
		<p>Mengetahui :</p>
		<table style="text-align: center;">
			<tr>
				<td>Camat Ungaran Timur</td>
				<td>Lurah Ungaran Timur</td>
			</tr>
			<tr>
				<td style="padding-top: 75px; font-weight: bold; text-decoration: underline;"><?=$data_person['camat']?></td>
				<td style="padding-top: 75px; font-weight: bold; text-decoration: underline;"><?=$data_person['lurah']?></td>
			</tr>
			<tr>
				<td>NIP : <?=$data_person['nik_camat']?></td>
				<td>NIP : <?=$data_person['nik_lurah']?></td>
			</tr>
		</table>
	</div>
</body>
</html>
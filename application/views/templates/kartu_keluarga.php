<!DOCTYPE html>
<html>
<head>
	<title>Sample pdf</title>
	<style>
  body{
    font-size: 10px;
    color: #000;
  }
.table {
  width : 100%;
    border-collapse: collapse;
    table-layout: auto;
    font-size: 9px;
    text-transform: capitalize;
}

.table td , .table th {
    border: 1px solid black;
}
.table tr{
  text-align: center;
}
.column-left{ float: left; width: 33%; position: relative; }
.column-right{ float: right; width: 10%;  position: relative;}
.haha{
   text-align: right;
  border:1px solid #000;
  width: 50px;
}
.column-center{ float: left; width: 33%;  position: relative; text-align: center;}
.column-center > * , .column-left > * , .column-right > * {
  margin:0px;
}
.container-1{
  height: 160px;
}

/*kode kedua*/
.kedua{ float: left; width: 60%; position: relative; }
.kedua1{ float: left; width: 40%;  position: relative;}
.haha{
   text-align: center;
  border:1px solid #000;
  width: 75px;
}
input{
  border-color: #000;
  border:1px solid;
  padding-left: 5px;
  width: 90%;
  text-transform: capitalize;
}
p{
  margin: 0px;
}
</style>

</head>
<body>

<div class="container">
   <div class="column-left">
   <h4>PEMERINTAH KOTA BREBES</h4>
   </div> 
   <div class="column-center">
   
   <h4>FORMULIR ISIAN KARTU KELUARGA (KK)</h4>
   <h4 class="ravi">PENDUDUK WARGA NEGARA INDONESIA</h4>

   </div>
   <div class="column-right">
   
   <h4 class="haha">F-1.01</h4>

   </div>
 <br>
 <br>
  <br>
   <br>
</div>
<div class="container-1">
  <div class="kedua">
  <h4>Data Kepala Keluarga</h4>
   <table width="100%">
     <tr>
       <td width="25%">Nama Kepala Keluarga</td>
       <td><input type="text" value="&nbsp;<?=$kartu_keluarga['nama']?>"></td>
     </tr>
     <tr>
       <td>Alamat</td>
       <td><input type="text" value="&nbsp;<?=$kartu_keluarga['alamat']?>"></td>
     </tr>
     <tr>
       <td>Kode Pos</td>
       <td>
       
       <input type="text" value="&nbsp;<?=$kartu_keluarga['kode_pos']?>" style="width: 8%;"> &nbsp;&nbsp;&nbsp;&nbsp;
       RT <input type="text" value="&nbsp;<?=$kartu_keluarga['no_rt']?>" style="width: 6%;"> &nbsp;&nbsp;&nbsp;&nbsp;
       RW <input type="text" value="&nbsp;<?=$kartu_keluarga['no_rw']?>" style="width: 6%;"> &nbsp;&nbsp;&nbsp;&nbsp;
       Jumlah anggota Keluarga <input type="text" value="&nbsp; <?=$jumlah_anggota_keluarga?>" style="width: 5%;"> Orang


       </td>
     </tr>
     <tr>
       <td>Telepon</td>
       <td><input type="text" value="&nbsp;<?=$kartu_keluarga['telepon']?>" width="100%"></td>
     </tr>
     <tr>
       <td style="font-weight: bold; padding-top: 12px;">Data Keluarga</td>
       <td></td>
     </tr>
   </table>
  </div>

  <div class="kedua1">
   <table width="100%">
     <tr>
       <td></td>
       <td></td>

     </tr>
      <tr>
       <td width="10%"></td>
       <td>Diisi Oleh Petugas</td>
      </tr>
      <tr>
       <td width="35%">Jenis Perubahan</td>
       <td>
         <input type="text" value="&nbsp;" style="width: 5%;"> Baru
         <input type="text" value="&nbsp;" style="width: 5%;"> Perubahan
         <input type="text" value="&nbsp;" style="width: 5%;"> Pisah Anggota Keluarga
       </td>

      </tr>
      <tr>
       <td>Kode Nama Provinsi</td>
       <td>
         <input type="text" value="&nbsp;<?=$data_kelurahan['kode_provinsi']?>" style="width: 10%;">
         <input type="text" value="&nbsp;<?=$kartu_keluarga['provinsi']?>" style="width: 83%;">
       </td>
      </tr>
      <tr>
       <td>Kode Nama Kabupaten/Kota</td>
       <td>
         <input type="text" value="&nbsp;<?=$data_kelurahan['kode_kabupaten_kota']?>" style="width: 10%;">
         <input type="text" value="&nbsp;<?=$data_kelurahan['kabupaten_kota']?>" style="width: 83%;">
       </td>
      </tr>
      <tr>
       <td>Kode Nama Kecamatan</td>
       <td>
         <input type="text" value="&nbsp;<?=$data_kelurahan['kode_kecamatan']?>" style="width: 10%;">
         <input type="text" value="&nbsp;<?=$data_kelurahan['kecamatan']?>" style="width: 83%;">
       </td>
      </tr>
      <tr>
       <td>Kode Nama Kelurahan/Desa</td>
       <td>
         <input type="text" value="&nbsp;<?=$data_kelurahan['kode_desa_kelurahan']?>" style="width: 10%;">
         <input type="text" value="&nbsp;<?=$data_kelurahan['desa_kelurahan']?>" style="width: 83%;">
       </td>
      </tr>
   </table>
  </div>
</div>

<table class="table" style="margin-top: 15px;">
  <tr>
    <th width="3%">no.</th>
    <th>Nama Lengkap</th>
    <th>Gelar</th>
    <th>Nomor KTP/NOPEN</th>
    <th>Alamat Sebelumnya</th>
    <th>Nomor Passpor</th>
    <th>Tanggal Berakhir Passport</th>
    <th>Jenis Kelamin</th>
    <th>Tempat Lahir</th>
    <th>Tanggal/Bulan/Tahun Lahir</th>
  </tr>
<?php $no=1; foreach ($data_keluarga_1 as $key1): ?>
  <tr>
    <td><?=$no++?>.</td>
    <td>&nbsp;<?=$key1->nama?></td>
    <td>&nbsp;<?=$key1->gelar?></td>
    <td>&nbsp;<?=$key1->nik?></td> <!-- masih bingung kosong -->
    <td>&nbsp;<?=$key1->alamat_sebelumnya?></td> <!-- alamat sebelumnya kosong -->
    <td>&nbsp;<?=$key1->no_paspor?></td>
    <td>&nbsp;<?=$key1->tgl_berakhir_paspor?></td> <!-- tanggal berakhir paspor kosong -->
    <td>&nbsp;<?=$key1->jenis_kelamin?></td>
    <td>&nbsp;<?=$key1->lahir_tempat?></td>
    <td>&nbsp;
      <?php
      $originalDate = $key1->lahir_tanggal;
      $newDate = date("d-m-Y", strtotime($originalDate));
      echo $newDate;
      ?>
    </td>
  </tr>
<?php endforeach ?>
</table>
<table class="table" style="margin-top:5px;">
  <tr>
    <th width="3%">no.</th>
    <th>Umur (Tahun)</th>
    <th>Akta Lahir/Surat Lahir</th>
    <th>Nomor Akta Kelahiran/Surat Kenal Lahir</th>
    <th>Golongan Darah</th>
    <th>Agama/Kepercayaan Terhadap Tuhan</th>
    <th>Kepercayaan Terhadap Tuhan Yang Maha Esa</th>
    <th>Status Perkawinan</th>
    <th>Akta Perkawinan/ Buku Nikah </th>
    <th>Nomor Akta Perkawinan/ Buku Nikah *)</th>
    <th>Tanggal Perkawinan *)</th>
    <th>Akta Cerai/ Surat Cerai</th>
    <th>Nmomor Akta Perceraian/ Surat Cerai *)</th>
    <th>Tanggal Perceraian</th>
  </tr>
<?php $no1=1; foreach ($data_keluarga_1 as $key1): ?>  
  <tr>
    <td><?=$no1++?>.</td>
    <td>&nbsp;
      <?php
        //date in mm/dd/yyyy format; or it can be in other formats as well
        $originalDate = $key1->lahir_tanggal;
        $newDate = date("m/d/Y", strtotime($originalDate));
        //explode the date to get month, day and year
        $birthDate = explode("/", $newDate);
        //get age from date or birthdate
        $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
          ? ((date("Y") - $birthDate[2]) - 1)
          : (date("Y") - $birthDate[2]));
        echo $age;
      ?>
    </td> <!-- umur -->
    <td>&nbsp; <?=$key1->akta_lahir?>
      <?php
        if($key1->akta_lahir == 1){
          $no_akta_lahir = '-';
        }else{
          $no_akta_lahir = $key1->no_akta_lahir;
        }
      ?>
    </td> <!-- akta lahir surat lahir -->
    <td>&nbsp;<?=$no_akta_lahir?></td> <!-- nomor akta kelahiran/surat kenal lahir -->
    <td>&nbsp;<?=$key1->goldar?></td> <!-- golongan darah -->
    <td>&nbsp;<?=$key1->agama?></td> <!-- agama kepercayaan -->
    <td>&nbsp;<?=$key1->kepercayaan_tuhan_YME?></td> <!-- Kepercayaan Terhadap Tuhan Yang Maha Esa -->
    <td>&nbsp;<?=$key1->status_perkawinan?></td> <!-- status perkawinan -->
    <td>&nbsp; <?=$key1->akta_perkawinan?>
      <?php 
        if($key1->akta_perkawinan==1){
          $no_akta_perkawinan = '-';
        }else{
          $no_akta_perkawinan = $key1->no_akta_perkawinan;
        }
      ?>
    </td> <!-- akta perkawinan -->
    <td>&nbsp;<?=$no_akta_perkawinan?></td> <!-- nomor akta perkawinan -->
    <td>&nbsp;<?=$key1->tgl_perkawinan?></td> <!-- tanggal perkawinan -->
    <td>&nbsp;
      <?=$key1->akta_cerai?>
      <?php
        if($key1->akta_cerai==1){
          $no_akta_cerai = '-';
        }else{
           $no_akta_cerai = $key1->no_akta_cerai;
        }
      ?>
    </td> <!-- akta cerai -->
    <td>&nbsp;<?=$no_akta_cerai?></td> <!-- nomor akta perceraian -->
    <td>&nbsp;<?=$key1->tgl_perceraian?></td> <!-- tanggal perceraian -->                  
  </tr>
<?php endforeach ?>
</table>
<table class="table" style="margin-top:5px;">
  <tr>
    <th>No.</th>
    <th>Status Hub Dlm Keluarga</th>
    <th>Kelainan Fisik $ Mental</th>
    <th>Penyandang Cacat</th>
    <th>Pendidikan Terakhir</th>
    <th>Pekerjaan</th>
    <th>NIK Ibu</th>
    <th>Nama Lengkap Ibu</th>
    <th>NIK Ayah</th>
    <th>Nama Lengkap Ayah</th>
  </tr>
<?php $no2=1; foreach ($data_keluarga_1 as $key2): ?> 
  <tr>
    <td>&nbsp;<?=$no2++?>.</td>
    <td>&nbsp;<?=$key2->hub_keluarga?></td>
    <td>&nbsp;
      <?=$key2->kelainan_fisik_mental?>
      <?php 
        if($key2->kelainan_fisik_mental==1){
          $penyandang_cacat='-';
        }else{
          $penyandang_cacat=$key2->penyandang_cacat;
        }
      ?>
    </td> <!-- kesehatan fisik dan mental -->
    <td>&nbsp;<?=$penyandang_cacat?></td> <!-- penyandang cacat -->
    <td>&nbsp;<?=$key2->pendidikan_terakhir?></td>
    <td>&nbsp;<?=$key2->pekerjaan?></td>
    <td>&nbsp;<?=$key2->nik_ibu?></td> <!-- NIK ibu -->
    <td>&nbsp;<?=$key2->nama_ibu?></td>
    <td>&nbsp;<?=$key2->nik_ayah?></td> <!-- NIK ayah -->
    <td>&nbsp;<?=$key2->nama_ayah?></td>
  </tr>
<?php endforeach ?>

</table>
<div style="text-align: right; text-transform: capitalize; margin-top: 10px;">
<?=$data_kelurahan['kabupaten_kota']?>, <?php echo date('d F Y'); ?>
</div>
<div style="text-transform: capitalize; width: 40%; float:left;">
<p>Demikian Formulir ini saya/kami isi dengan sesungguhnya apabila keterangan tersebut tidak sesuai dengan keadaan sebenarnya , saya bersedia dikenakan sanksi sesuai ketentuan peraturan perundang-undangan yang berlaku</p>
<p>Catatan: *) Hanya diisi oleh salah satu pasangan keluarga tersebut(suami/istri)</p>
<p>**) Hanya ditandatangani oleh kepala dinas kependudukan dan pencatatan sipil kabupaten/Kota</p>
<p>apabila pencatatan biodata dilakukan oleh WNI yang datang dari luar negeri</p>
</div>
<div style="width: 50%; float: right; margin-top: 5px;">
<table style="width: 100%; text-align: center; text-transform: capitalize;">
  <tr>
    <td>Lurah</td>
    <td>Ketua RW ............</td>
    <td>Ketua RT ............</td>
    <td>Kepala Keluarga</td>
  </tr>
  <tr style="text-decoration: underline;">
    <td style="height: 90px;"><?=$data_kelurahan['nama_lurah']?></td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
    <td><?=$kartu_keluarga['nama']?></td>
  </tr>
</table>
</div>
</body>
</html>
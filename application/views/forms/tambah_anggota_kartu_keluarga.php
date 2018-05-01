<style type="text/css">
  input{
    text-transform: capitalize; 
  }
</style>
<div class="row">
  <div class="col-md-6">

    <ol class="breadcrumb" style="position: absolute; z-index: 99;">
      <li><a href="<?=base_url('welcome')?>">...</a></li>
      <li><a href="<?=base_url('welcome/daftar/keluarga')?>">...</a></li>
      <li><a href="<?=base_url('welcome/details_kartu_keluarga/'.$id_keluarga)?>">Details Kartu Keluarga</a></li>
      <li class="active">Tambah Anggota</li>
    </ol>

  </div>
  <!-- Nav tabs -->
<div class="row" style="margin-bottom: 25px; margin-top: 10px;">
  <div class="col-md-12">
    <ul class="list-inline nav-custom" role="tablist" style="width: 50%; margin:auto; position: relative; left:15%;">
      <li role="presentation" class="active" id="data1_person"><a href="#data1" aria-controls="home" role="tab" data-toggle="tab">Data 1</a></li>
      <li role="presentation" id="data2_person"><a href="#data2" aria-controls="messages" role="tab" data-toggle="tab">Data 2</a></li>
      <li role="presentation" id="data3_person"><a href="#data3" aria-controls="messages" role="tab" data-toggle="tab">Data 3</a></li>
      <li role="presentation" id="data4_person"><a href="#data4" aria-controls="messages" role="tab" data-toggle="tab">Data 4</a></li>
    </ul>
  </div>
</div>
<?php echo form_open('welcome/submit_anggota_keluarga/tambah', array('autocomplete'=>'off'));?>
<input type="hidden" name="id_keluarga" value="<?=$id_keluarga?>">
<div class="tab-content">
  <div role="tabpanel" class="tab-pane fade in active" id="data1">

      <div class="form-horizontal" style="width: 50%; margin:auto;">
        <div class="col-md-12">
          <div class="form-group">
            <label for="inputPassword" class="col-sm-4 control-label">NIK</label>
            <div class="col-sm-8">
              <input type="text" name="nik" class="form-control" id="nik_person" placeholder="NIK">
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword" class="col-sm-4 control-label">NAMA LENGKAP</label>
            <div class="col-sm-8">
            <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama Lengkap">
             </div>
          </div>
          <div class="form-group">
            <label for="inputPassword" class="col-sm-4 control-label">GELAR</label>
            <div class="col-sm-8">            
           <select name="gelar" class="form-control" id="gelar">
                <option value="">- Gelar -</option>
                <option value="0">Tidak ada</option>
                <option value="1">Gelar Akademis</option>
                <option value="2">Gelar Kebangsawanan</option>
                <option value="3">Gelar Keagamaan</option>
            </select>
            </div>
          </div> 
          <div class="form-group">
            <label for="inputPassword" class="col-sm-4 control-label">ALAMAT SEBELUMNYA</label>
            <div class="col-sm-8">            
              <textarea name="alamat_sebelumnya" id="alamat_sebelumnya" class="form-control" placeholder="Alamat Sebelumnya"></textarea>
            </div>
          </div> 
          <div class="form-group">
            <label for="inputPassword" class="col-sm-4 control-label">JENIS KELAMIN</label>
            <div class="col-sm-8">
            <select name="jenis_kelamin" class="form-control" id="jenis_kelamin">
              <option value="">- Jenis Kelamin -</option>
              <option value="1">Laki-laki</option>
              <option value="2">Perempuan</option>
            </select>
           </div> 
          </div> 
          <div class="form-group">
            <label for="inputPassword" class="col-sm-4 control-label">TEMPAT LAHIR</label>
            <div class="col-sm-8">
            <input type="text" name="lahir_tempat" id="lahir_tempat" class="form-control" placeholder="Tempat Lahir">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-8 col-sm-offset-4">
            <a class="btn btn-primary btn-custom-a" style="width: 100%;" id="berikutnya_person" href="#data2" aria-controls="messages" role="tab" data-toggle="tab">Berikutnya &ensp;<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
            </div>
          </div>
          <div class="form-group">
        </div>
        </div>

      </div>

  </div>
  <div role="tabpanel" class="tab-pane fade in" id="data2">

<div class="form-horizontal" style="width: 50%; margin:auto;">
  <div class="col-md-12">
    <div class="form-group">
        <label for="inputPassword" class="col-sm-4 control-label">TANGGAL LAHIR</label>
        <div class="col-sm-8">
        <input type="date" name="lahir_tanggal" id="lahir_tanggal" class="form-control">
        </div>
      </div>

      <div class="form-group">
        <label for="inputPassword" class="col-sm-4 control-label">AKTA LAHIR/SURAT LAHIR</label>
        <div class="col-sm-8">
        <select name="akta_lahir" class="form-control" id="akta_lahir">
            <option value="">- Akta Lahir/Surat Lahir -</option>
            <option value="1">Tidak Ada</option>
            <option value="2">Ada</option>
        </select>
        </div>
      </div> 

      <div class="form-group">
        <label for="inputPassword" class="col-sm-4 control-label">NOMOR AKTA KELAHIRAN</label>
        <div class="col-sm-8">
        <input type="text" name="no_akta_lahir" class="form-control" id="no_akta_lahir" placeholder="Nomor Akta Kelahiran / Surat Kenal Lahir">
        </div>
      </div>

      <div class="form-group">
        <label for="inputPassword" class="col-sm-4 control-label">GOLONGAN DARAH</label>
          <div class="col-sm-8">
          <select class="form-control" name="goldar" id="goldar">
            <option value="">- Golongan Darah -</option>
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
        <label for="inputPassword" class="col-sm-4 control-label">AGAMA</label>
        <div class="col-sm-8">
        <select class="form-control" name="agama" id="agama">
          <option value="">- Agama -</option>
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
        <label for="inputPassword" class="col-sm-4 control-label">KEPERCAYAAN TERHADAP TUHAN</label>
        <div class="col-sm-8">
        <input type="text" name="kepercayaan_tuhan_YME" id="kepercayaan_tuhan_YME" class="form-control" placeholder="Kepercayaan Terhadap Tuhan Yang Maha Esa">
        </div>
      </div>

      <div class="form-group">
        <label for="inputPassword" class="col-sm-4 control-label">STATUS PERKAWINAN</label>
        <div class="col-sm-8">
        <select class="form-control" name="status_perkawinan" id="status_perkawinan">
          <option value="">- Status Perkawinan -</option>
          <option value="1">Belum Kawin</option>
          <option value="2">Kawin</option>
          <option value="3">Cerai Hidup</option>
          <option value="4">Cerai Mati</option>
        </select>
        </div>
      </div>

      <div class="form-group">
        <label for="inputPassword" class="col-sm-4 control-label">STATUS HUBUNGAN DALAM KELUARGA</label>
        <div class="col-sm-8">
        <select class="form-control" name="hub_keluarga" id="hub_keluarga">
          <option value="">- Status Hubungan dalam Keluarga -</option>
          <option value="1">Kepala Keluarga</option>
          <option value="2">Suami</option>
          <option value="3">Istri</option>
          <option value="4">Anak</option>
          <option value="5">Menantu</option>
          <option value="6">Cucu</option>
          <option value="7">Orang Tua</option>
          <option value="8">Mertua</option>
          <option value="9">Famili</option>
          <option value="10">Pembantu</option>
          <option value="11">Lainnya</option>
        </select>
        </div>
      </div>  
      <div class="form-group">
        <div class="col-sm-8 col-sm-offset-4">
        <a href="#data1" aria-controls="messages" role="tab" data-toggle="tab" class="btn btn-primary btn-custom-a" id="kembali_person" style="width: 49%;"><i class="fa fa-long-arrow-left" aria-hidden="true"></i>&ensp; Kembali</a>
        <a class="btn btn-primary btn-custom-a" style="width: 49%;" id="berikutnya_person1" href="#data3" aria-controls="messages" role="tab" data-toggle="tab">Berikutnya &ensp;<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
        </div>
      </div>  
  </div>
</div>

  </div>
  <div role="tabpanel" class="tab-pane fade in" id="data3">

<div class="form-horizontal" style="width: 50%; margin:auto;">
  <div class="col-md-12">
    <div class="form-group">
      <label for="inputPassword" class="col-sm-4 control-label">KELAINAN FISIK</label>
        <div class="col-sm-8">
          <select class="form-control" name="kelainan_fisik" id="kelainan_fisik">
            <option value="">- Kelainan Fisik &amp; Mental -</option>
            <option value="1">Tidak Ada</option>
            <option value="2">Ada</option>
          </select>
        </div>
      </div>

      <div class="form-group">
        <label for="inputPassword" class="col-sm-4 control-label">PENYANDANG CACAT</label>
          <div class="col-sm-8">
          <select class="form-control" name="penyandang_cacat" id="penyandang_cacat" disabled>
            <option value="">- Penyandang Cacat -</option>
            <option value="1">Cacat Fisik</option>
            <option value="2">Cacat Netra / Buta</option>
            <option value="3">Cacat Rungu / Wicara</option>
            <option value="4">Cacat Mental / Jiwa</option>
            <option value="5">Cacat Fisik dan Mental</option>
            <option value="6">Cacat Lainnya</option>
          </select>
        </div>
      </div>

      <div class="form-group">
        <label for="inputPassword" class="col-sm-4 control-label">PENDIDIKAN TRAKHIR</label>
          <div class="col-sm-8">
          <select class="form-control" name="pendidikan_terakhir" id="pendidikan_terakhir">
            <option value="">- Pendidikan Terakhir -</option>
            <option value="1">Tidak / Belum Sekolah</option>
            <option value="2">Belum Tamat SD / Sederajat</option>
            <option value="3">Tamat SD / Sederajat</option>
            <option value="4">SLTP / Sederajat</option>
            <option value="5">SLTA / Sederajat</option>
            <option value="6">Diploma I / II</option>
            <option value="7">Akademi / Diploma III / Sarjana Muda</option>
            <option value="8">Diploma IV / Strata I</option>
            <option value="9">Strata II</option>
            <option value="10">Strata III</option>
          </select>
        </div>
      </div>

      <div class="form-group">
        <label for="inputPassword" class="col-sm-4 control-label">PEKERJAAN</label>
        <div class="col-sm-8">
          <input type="text" name="pekerjaan" class="form-control" id="pekerjaan" placeholder="Pekerjaan">
        </div>
      </div>

      <div class="form-group">
        <label for="inputPassword" class="col-sm-4 control-label">NIK IBU</label>
        <div class="col-sm-8">
          <input type="text" name="nik_ibu" id="nik_ibu" class="form-control" placeholder="NIK Ibu">
        </div>
      </div>

      <div class="form-group">
        <label for="inputPassword" class="col-sm-4 control-label">NAMA LENGKAP IBU</label>
        <div class="col-sm-8">
          <input type="text" name="nama_ibu" id="nama_ibu" class="form-control" placeholder="Nama Lengkap Ibu">
        </div>
      </div>

      <div class="form-group">
        <label for="inputPassword" class="col-sm-4 control-label">NIK AYAH</label>
        <div class="col-sm-8">
          <input type="text" name="nik_ayah" id="nik_ayah" class="form-control" placeholder="NIK Ayah">
        </div>
      </div>

      <div class="form-group">
        <label for="inputPassword" class="col-sm-4 control-label">NAMA LENGKAP AYAH</label>
        <div class="col-sm-8">
          <input type="text" name="nama_ayah" id="nama_ayah" class="form-control" placeholder="Nama Lengkap Ayah">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-8 col-sm-offset-4">
        <a href="#data2" aria-controls="messages" role="tab" data-toggle="tab" class="btn btn-primary btn-custom-a" id="kembali_person1" style="width: 49%;"><i class="fa fa-long-arrow-left" aria-hidden="true"></i>&ensp; Kembali</a>
        <a class="btn btn-primary btn-custom-a" style="width: 49%;" id="berikutnya_person2" href="#data4" aria-controls="messages" role="tab" data-toggle="tab">Berikutnya &ensp;<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
        </div>
      </div> 
    </div>
  </div>
</div>

  <div role="tabpanel" class="tab-pane fade in" id="data4">
          <div class="form-horizontal" style="width: 50%; margin:auto;">
          <div class="form-group">
            <label for="inputPassword" class="col-sm-4 control-label">NOMOR PASPOR</label>
            <div class="col-sm-8">            
            <input type="text" name="no_paspor" id="no_paspor" class="form-control" placeholder="Nomor Paspor">
            </div>
          </div> 
          <div class="form-group">
            <label for="inputPassword" class="col-sm-4 control-label">TANGGAL BERAKHIR PASPOR</label>
            <div class="col-sm-8">
              <input type="date" name="tgl_berakhir_paspor" id="tgl_berakhir_paspor" class="form-control">
            </div>
          </div> 
          <div class="form-group">
              <label for="exampleInputEmail1" class="control-label col-sm-4">AKTA PERKAWINAN/BUKU NIKAH</label>
              <div class="col-sm-8">
                <select name="akta_perkawinan" class="form-control" id="akta_perkawinan">
                    <option value="">- Akta Perkawinan/Buku Nikah -</option>
                    <option value="1">Tidak Ada</option>
                    <option value="2">Ada</option>
                </select>
              </div>
            </div>
          <div class="form-group">
              <label for="exampleInputEmail1" class="control-label col-sm-4">NOMOR AKTA PERKAWINAN/BUKU NIKAH</label>
              <div class="col-sm-8">
              <input type="text" name="no_akta_perkawinan" class="form-control" id="exampleInputEmail1" placeholder="Akta Perkawinan / Buku Nikah" id="no_akta_perkawinan" disabled>
              </div>
            </div>
          <div class="form-group">
              <label for="exampleInputEmail1" class="control-label col-sm-4">TANGGAL PERKAWINAN</label>
              <div class="col-sm-8">
              <input type="date" name="tgl_perkawinan" id="tgl_perkawinan" class="form-control" id="exampleInputEmail1" placeholder="Tanggal Perkawinan">
            </div>
            </div>

          <div class="form-group">
              <label for="exampleInputEmail1" class="control-label col-sm-4">AKTA CERAI/SURAT CERAI</label>
              <div class="col-sm-8">
                <select name="akta_cerai" class="form-control" id="akta_cerai">
                    <option value="">- Akta Cerai/Surat Cerai -</option>
                    <option value="1">Tidak Ada</option>
                    <option value="2">Ada</option>
                </select>
            </div>
            </div>
          <div class="form-group">
              <label for="exampleInputEmail1" class="control-label col-sm-4">NOMOR AKTA PERCERAIAN/SURAT CERAI</label>
              <div class="col-sm-8">
              <input type="text" name="no_akta_cerai" class="form-control" id="no_akta_cerai" placeholder="Nomor Akta Perceraian / Surat Cerai" disabled>
            </div>
            </div>
          <div class="form-group">
              <label for="exampleInputEmail1" class="control-label col-sm-4">TANGGAL PERCERAIAN</label>
              <div class="col-sm-8">
                <input type="date" name="tgl_perceraian" class="form-control" id="tgl_perceraian" placeholder="Tanggal Perceraian">
              </div>
            </div>

        <div class="form-group">
          <div class="col-sm-8 col-sm-offset-4">
          <a href="#data3" aria-controls="messages" role="tab" data-toggle="tab" class="btn btn-primary btn-custom-a" id="kembali_person2" style="width: 34%;"><i class="fa fa-long-arrow-left" aria-hidden="true"></i>&ensp; Kembali</a>
          <button type="submit" class="btn btn-primary btn-custom" style="width: 64%;">&ensp; Tambah Anggota Keluarga <i class="fa fa-plus" aria-hidden="true"></i></button>
          </div>
        </div>
      </div>
    </div>

  </div>

</div>
<?php echo form_close(); ?>


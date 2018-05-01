<div class="row">
  <div class="col-md-6">

    <ol class="breadcrumb" style="position: absolute; z-index: 99;">
      <li><a href="<?=base_url('welcome')?>">...</a></li>
      <li><a href="<?=base_url('welcome/daftar/keluarga')?>">...</a></li>
      <li><a href="<?=base_url('welcome/details_kartu_keluarga/'.$id_keluarga)?>">Details Kartu Keluarga</a></li>
      <li class="active">Edit Anggota</li>
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
<?php echo form_open('welcome/submit_anggota_keluarga/edit');
    echo form_hidden('id_keluarga', $id_keluarga); ?>
    <input type="hidden" name="id_kartukeluarga" value="<?=$id_kartukeluarga?>">
<div class="tab-content">
  <div role="tabpanel" class="tab-pane fade in active" id="data1">

      <div class="form-horizontal" style="width: 50%; margin:auto;">
        <div class="col-md-12">
          <div class="form-group">
            <label for="inputPassword" class="col-sm-4 control-label">NIK</label>
            <div class="col-sm-8">
              <input type="text" name="nik" class="form-control" id="nik_person" placeholder="NIK" value="<?=$ang['nik']?>">
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword" class="col-sm-4 control-label">NAMA LENGKAP</label>
            <div class="col-sm-8">
            <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama Lengkap" value="<?=$ang['nama']?>">
             </div>
          </div>
          <div class="form-group">
            <label for="inputPassword" class="col-sm-4 control-label">GELAR</label>
            <div class="col-sm-8">            
           <select name="gelar" class="form-control" id="gelar">
                <option value="">- Gelar -</option>
                <option value="1" <?php if($ang['gelar'] == 1){ echo 'selected';}?>>Gelar Akademis</option>
                <option value="2" <?php if($ang['gelar'] == 2){ echo 'selected';}?>>Gelar Kebangsawanan</option>
                <option value="3" <?php if($ang['gelar'] == 3){ echo 'selected';}?>>Gelar Keagamaan</option>
            </select>
            </div>
          </div> 
          <div class="form-group">
            <label for="inputPassword" class="col-sm-4 control-label">ALAMAT SEBELUMNYA</label>
            <div class="col-sm-8">            
              <textarea name="alamat_sebelumnya" class="form-control" id="alamat_sebelumnya" placeholder="Alamat Sebelumnya"><?=$ang['alamat_sebelumnya']?></textarea>
            </div>
          </div> 
          <div class="form-group">
            <label for="inputPassword" class="col-sm-4 control-label">JENIS KELAMIN</label>
            <div class="col-sm-8">
            <select name="jenis_kelamin" class="form-control" id="jenis_kelamin">
              <option value="">- Jenis Kelamin -</option>
              <option value="1" <?php if($ang['jenis_kelamin'] == 1){ echo 'selected';} ?>>Laki-laki</option>
              <option value="2" <?php if($ang['jenis_kelamin'] == 2){ echo 'selected';} ?>>Perempuan</option>
            </select>
           </div> 
          </div> 
          <div class="form-group">
            <label for="inputPassword" class="col-sm-4 control-label">TEMPAT LAHIR</label>
            <div class="col-sm-8">
            <input type="text" name="lahir_tempat" id="lahir_tempat" class="form-control" placeholder="Tempat Lahir" value="<?=$ang['lahir_tempat']?>">
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
        <input type="date" name="lahir_tanggal" id="lahir_tanggal" class="form-control" value="<?=$ang['lahir_tanggal']?>">
        </div>
      </div>

      <div class="form-group">
        <label for="inputPassword" class="col-sm-4 control-label">AKTA LAHIR/SURAT LAHIR</label>
        <div class="col-sm-8">
        <select name="akta_lahir" class="form-control" id="akta_lahir">
            <option value="">- Akta Lahir/Surat Lahir -</option>
            <option value="1" <?php if($ang['akta_lahir'] == 1){ echo 'selected'; } ?>>Tidak Ada</option>
            <option value="2" <?php if($ang['akta_lahir'] == 2){ echo 'selected'; } ?>>Ada</option>
        </select>
        </div>
      </div> 

      <div class="form-group">
        <label for="inputPassword" class="col-sm-4 control-label">NOMOR AKTA KELAHIRAN</label>
        <div class="col-sm-8">
        <input type="text" name="no_akta_lahir" id="no_akta_lahir" class="form-control" placeholder="Nomor Akta Kelahiran / Surat Kenal Lahir" value="<?=$ang['no_akta_lahir']?>">
        </div>
      </div>

      <div class="form-group">
        <label for="inputPassword" class="col-sm-4 control-label">GOLONGAN DARAH</label>
          <div class="col-sm-8">
          <select class="form-control" name="goldar" id="goldar">
            <option value="">- Golongan Darah -</option>
            <option value="1" <?php if($ang['goldar']==1){echo 'selected';}?>>A</option>
            <option value="2" <?php if($ang['goldar']==2){echo 'selected';}?>>B</option>
            <option value="3" <?php if($ang['goldar']==3){echo 'selected';}?>>AB</option>
            <option value="4" <?php if($ang['goldar']==4){echo 'selected';}?>>O</option>
            <option value="5" <?php if($ang['goldar']==5){echo 'selected';}?>>A+</option>
            <option value="6" <?php if($ang['goldar']==6){echo 'selected';}?>>A-</option>
            <option value="7" <?php if($ang['goldar']==7){echo 'selected';}?>>B+</option>
            <option value="8" <?php if($ang['goldar']==8){echo 'selected';}?>>B-</option>
            <option value="9" <?php if($ang['goldar']==9){echo 'selected';}?>>AB+</option>
            <option value="10" <?php if($ang['goldar']==10){echo 'selected';}?>>AB-</option>
            <option value="11" <?php if($ang['goldar']==11){echo 'selected';}?>>O+</option>
            <option value="12" <?php if($ang['goldar']==12){echo 'selected';}?>>O-</option>
            <option value="13" <?php if($ang['goldar']==13){echo 'selected';}?>>Tidak Tahu</option>
          </select>
        </div>
      </div>

      <div class="form-group">
        <label for="inputPassword" class="col-sm-4 control-label">AGAMA</label>
        <div class="col-sm-8">
        <select class="form-control" name="agama" id="agama">
          <option value="">- Agama -</option>
          <option value="1" <?php if($ang['agama']==1){echo 'selected';} ?>>Islam</option>
          <option value="2" <?php if($ang['agama']==2){echo 'selected';} ?>>Kristen</option>
          <option value="3" <?php if($ang['agama']==3){echo 'selected';} ?>>Katholik</option>
          <option value="4" <?php if($ang['agama']==4){echo 'selected';} ?>>Hindu</option>
          <option value="5" <?php if($ang['agama']==5){echo 'selected';} ?>>Budha</option>
          <option value="6" <?php if($ang['agama']==6){echo 'selected';} ?>>Kong Hucu</option>
          <option value="7" <?php if($ang['agama']==7){echo 'selected';} ?>>Kepercayaan Terhadap Tuhan Yang Maha Esa</option>
        </select>
        </div>
      </div>

      <div class="form-group">
        <label for="inputPassword" class="col-sm-4 control-label">KEPERCAYAAN TERHADAP TUHAN</label>
        <div class="col-sm-8">
        <input type="text" name="kepercayaan_tuhan_YME" id="kepercayaan_tuhan_YME" class="form-control" placeholder="Kepercayaan Terhadap Tuhan Yang Maha Esa" value="<?=$ang['kepercayaan_tuhan_YME']?>">
        </div>
      </div>

      <div class="form-group">
        <label for="inputPassword" class="col-sm-4 control-label">STATUS PERKAWINAN</label>
        <div class="col-sm-8">
        <select class="form-control" name="status_perkawinan" id="status_perkawinan">
          <option value="">- Status Perkawinan -</option>
          <option value="1" <?php if($ang['status_perkawinan']==1){echo 'selected';} ?>>Belum Kawin</option>
          <option value="2" <?php if($ang['status_perkawinan']==2){echo 'selected';} ?>>Kawin</option>
          <option value="3" <?php if($ang['status_perkawinan']==3){echo 'selected';} ?>>Cerai Hidup</option>
          <option value="4" <?php if($ang['status_perkawinan']==4){echo 'selected';} ?>>Cerai Mati</option>
        </select>
        </div>
      </div>

      <div class="form-group">
        <label for="inputPassword" class="col-sm-4 control-label">STATUS HUBUNGAN DALAM KELUARGA</label>
        <div class="col-sm-8">
        <select class="form-control" name="hub_keluarga" id="hub_keluarga">
          <option value="">- Status Hubungan dalam Keluarga -</option>
          <option value="1" <?php if($ang['hub_keluarga']==1){echo 'selected';} ?>>Kepala Keluarga</option>
          <option value="2" <?php if($ang['hub_keluarga']==2){echo 'selected';} ?>>Suami</option>
          <option value="3" <?php if($ang['hub_keluarga']==3){echo 'selected';} ?>>Istri</option>
          <option value="4" <?php if($ang['hub_keluarga']==4){echo 'selected';} ?>>Anak</option>
          <option value="5" <?php if($ang['hub_keluarga']==5){echo 'selected';} ?>>Menantu</option>
          <option value="6" <?php if($ang['hub_keluarga']==6){echo 'selected';} ?>>Cucu</option>
          <option value="7" <?php if($ang['hub_keluarga']==7){echo 'selected';} ?>>Orang Tua</option>
          <option value="8" <?php if($ang['hub_keluarga']==8){echo 'selected';} ?>>Mertua</option>
          <option value="9" <?php if($ang['hub_keluarga']==9){echo 'selected';} ?>>Famili</option>
          <option value="10" <?php if($ang['hub_keluarga']==10){echo 'selected';} ?>>Pembantu</option>
          <option value="11" <?php if($ang['hub_keluarga']==11){echo 'selected';} ?>>Lainnya</option>
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
            <option value="1" <?php if($ang['kelainan_fisik_mental']==1){echo 'selected';} ?>>Tidak Ada</option>
            <option value="2" <?php if($ang['kelainan_fisik_mental']==2){echo 'selected';} ?>>Ada</option>
          </select>
        </div>
      </div>

      <div class="form-group">
        <label for="inputPassword" class="col-sm-4 control-label">PENYANDANG CACAT</label>
          <div class="col-sm-8">
          <select class="form-control" name="penyandang_cacat" id="penyandang_cacat">
            <option value="">- Penyandang Cacat -</option>
            <option value="1" <?php if($ang['penyandang_cacat']==1){echo 'selected';} ?>>Cacat Fisik</option>
            <option value="2" <?php if($ang['penyandang_cacat']==2){echo 'selected';} ?>>Cacat Netra / Buta</option>
            <option value="3" <?php if($ang['penyandang_cacat']==3){echo 'selected';} ?>>Cacat Rungu / Wicara</option>
            <option value="4" <?php if($ang['penyandang_cacat']==4){echo 'selected';} ?>>Cacat Mental / Jiwa</option>
            <option value="5" <?php if($ang['penyandang_cacat']==5){echo 'selected';} ?>>Cacat Fisik dan Mental</option>
            <option value="6" <?php if($ang['penyandang_cacat']==6){echo 'selected';} ?>>Cacat Lainnya</option>
          </select>
        </div>
      </div>

      <div class="form-group">
        <label for="inputPassword" class="col-sm-4 control-label">PENDIDIKAN TRAKHIR</label>
          <div class="col-sm-8">
          <select class="form-control" name="pendidikan_terakhir" id="pendidikan_terakhir">
            <option value="">- Pendidikan Terakhir -</option>
            <option value="1" <?php if($ang['pendidikan_terakhir']==1){echo 'selected';} ?>>Tidak / Belum Sekolah</option>
            <option value="2" <?php if($ang['pendidikan_terakhir']==2){echo 'selected';} ?>>Belum Tamat SD / Sederajat</option>
            <option value="3" <?php if($ang['pendidikan_terakhir']==3){echo 'selected';} ?>>Tamat SD / Sederajat</option>
            <option value="4" <?php if($ang['pendidikan_terakhir']==4){echo 'selected';} ?>>SLTP / Sederajat</option>
            <option value="5" <?php if($ang['pendidikan_terakhir']==5){echo 'selected';} ?>>SLTA / Sederajat</option>
            <option value="6" <?php if($ang['pendidikan_terakhir']==6){echo 'selected';} ?>>Diploma I / II</option>
            <option value="7" <?php if($ang['pendidikan_terakhir']==7){echo 'selected';} ?>>Akademi / Diploma III / Sarjana Muda</option>
            <option value="8" <?php if($ang['pendidikan_terakhir']==8){echo 'selected';} ?>>Diploma IV / Strata I</option>
            <option value="9" <?php if($ang['pendidikan_terakhir']==9){echo 'selected';} ?>>Strata II</option>
            <option value="10" <?php if($ang['pendidikan_terakhir']==10){echo 'selected';} ?>>Strata III</option>
          </select>
        </div>
      </div>

      <div class="form-group">
        <label for="inputPassword" class="col-sm-4 control-label">PEKERJAAN</label>
        <div class="col-sm-8">
          <input type="text" name="pekerjaan" id="pekerjaan" class="form-control" placeholder="Pekerjaan" value="<?=$ang['pekerjaan']?>">
        </div>
      </div>

      <div class="form-group">
        <label for="inputPassword" class="col-sm-4 control-label">NIK IBU</label>
        <div class="col-sm-8">
          <input type="text" name="nik_ibu" id="nik_ibu" class="form-control" placeholder="NIK Ibu" value="<?=$ang['nik_ibu']?>">
        </div>
      </div>

      <div class="form-group">
        <label for="inputPassword" class="col-sm-4 control-label">NAMA LENGKAP IBU</label>
        <div class="col-sm-8">
          <input type="text" name="nama_ibu" id="nama_ibu" class="form-control" placeholder="Nama Lengkap Ibu" value="<?=$ang['nama_ibu']?>">
        </div>
      </div>

      <div class="form-group">
        <label for="inputPassword" class="col-sm-4 control-label">NIK AYAH</label>
        <div class="col-sm-8">
          <input type="text" name="nik_ayah" id="nik_ayah" class="form-control" placeholder="NIK Ayah" value="<?=$ang['nik_ayah']?>">
        </div>
      </div>

      <div class="form-group">
        <label for="inputPassword" class="col-sm-4 control-label">NAMA LENGKAP AYAH</label>
        <div class="col-sm-8">
          <input type="text" name="nama_ayah" id="nama_ayah" class="form-control" placeholder="Nama Lengkap Ayah" value="<?=$ang['nama_ayah']?>">
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
            <input type="text" name="no_paspor" id="no_paspor" class="form-control" placeholder="Nomor Paspor" value="<?=$ang['no_paspor']?>">
            </div>
          </div> 
          <div class="form-group">
            <label for="inputPassword" class="col-sm-4 control-label">TANGGAL BERAKHIR PASPOR</label>
            <div class="col-sm-8">
              <input type="date" name="tgl_berakhir_paspor" id="tgl_berakhir_paspor" class="form-control" value="<?=$ang['tgl_berakhir_paspor']?>">
            </div>
          </div> 
          <div class="form-group">
              <label for="exampleInputEmail1" class="control-label col-sm-4">AKTA PERKAWINAN/BUKU NIKAH</label>
              <div class="col-sm-8">
                <select name="akta_perkawinan" class="form-control" id="akta_perkawinan">
                    <option value="">- Akta Perkawinan/Buku Nikah -</option>
                    <option value="1" <?php if($ang['akta_perkawinan']==1){echo 'selected';} ?>>Tidak Ada</option>
                    <option value="2" <?php if($ang['akta_perkawinan']==2){echo 'selected';} ?>>Ada</option>
                </select>
              </div>
            </div>
          <div class="form-group">
              <label for="exampleInputEmail1" class="control-label col-sm-4">NOMOR AKTA PERKAWINAN/BUKU NIKAH</label>
              <div class="col-sm-8">
              <input type="text" name="no_akta_perkawinan" id="no_akta_perkawinan" class="form-control" placeholder="Akta Perkawinan / Buku Nikah" value="<?=$ang['no_akta_perkawinan']?>">
              </div>
            </div>
          <div class="form-group">
              <label for="exampleInputEmail1" class="control-label col-sm-4">TANGGAL PERKAWINAN</label>
              <div class="col-sm-8">
              <input type="date" name="tgl_perkawinan" id="tgl_perkawinan" class="form-control" placeholder="Tanggal Perkawinan" value="<?=$ang['tgl_perkawinan']?>">
            </div>
            </div>

          <div class="form-group">
              <label for="exampleInputEmail1" class="control-label col-sm-4">AKTA CERAI/SURAT CERAI</label>
              <div class="col-sm-8">
                <select name="akta_cerai" class="form-control" id="akta_cerai">
                    <option value="">- Akta Cerai/Surat Cerai -</option>
                    <option value="1" <?php if($ang['akta_cerai']==1){echo 'selected';} ?>>Tidak Ada</option>
                    <option value="2" <?php if($ang['akta_cerai']==2){echo 'selected';} ?>>Ada</option>
                </select>
            </div>
            </div>
          <div class="form-group">
              <label for="exampleInputEmail1" class="control-label col-sm-4">NOMOR AKTA PERCERAIAN/SURAT CERAI</label>
              <div class="col-sm-8">
              <input type="text" id="no_akta_cerai" name="no_akta_cerai" class="form-control" placeholder="Nomor Akta Perceraian / Surat Cerai" value="<?=$ang['no_akta_cerai']?>">
            </div>
            </div>
          <div class="form-group">
              <label for="exampleInputEmail1" class="control-label col-sm-4">TANGGAL PERCERAIAN</label>
              <div class="col-sm-8">
                <input type="date" name="tgl_perceraian" id="tgl_perceraian" class="form-control" placeholder="Tanggal Perceraian" value="<?=$ang['tgl_perceraian']?>">
              </div>
            </div>

        <div class="form-group">
          <div class="col-sm-8 col-sm-offset-4">
          <a href="#data3" aria-controls="messages" role="tab" data-toggle="tab" class="btn btn-primary btn-custom-a" id="kembali_person2" style="width: 39%;"><i class="fa fa-long-arrow-left" aria-hidden="true"></i>&ensp; Kembali</a>
          <button type="submit" class="btn btn-primary btn-custom" style="width: 59%;">Submit Edit Keluarga &ensp;<i class="fa fa-share-square-o" aria-hidden="true"></i></button>
          </div>
        </div>
      </div>
    </div>

  </div>

</div>
<?php echo form_close(); ?>


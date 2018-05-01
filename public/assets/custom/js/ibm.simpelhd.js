$(document).ready(function () { 

    $(".next1").click(function(){
      $(".data1").removeClass("active");
      $(".data2").addClass("active");
      $(".data3").removeClass("active");

      $(".next1").removeClass("active");
    });
    $(".next2").click(function(){
      $(".data1").removeClass("active");
      $(".data2").removeClass("active");
      $(".data3").addClass("active");

      $(".next2").removeClass("active");
    });
    $(".back1").click(function(){
      $(".data1").addClass("active");
      $(".data2").removeClass("active");
      $(".data3").removeClass("active");

      $(".back1").removeClass("active");
    });
    $(".back2").click(function(){
      $(".data1").removeClass("active");
      $(".data2").addClass("active");
      $(".data3").removeClass("active");

      $(".back2").removeClass("active");
    });

	if ($('#gl-table').length == 1) {
        console.log($('#gl-table').length);
		$('#gl-table').DataTable();
	}

	$(document).on('change', ':file', function() {
        var input   = $(this),
        numFiles    = input.get(0).files ? input.get(0).files.length : 1,
        label       = input.val().replace(/\\/g, '/').replace(/.*\//, '');
        input.trigger('fileselect', [numFiles, label]);
        if (typeof input.get(0).files[0] !== "undefined" ) {
            var reader = new FileReader();
            reader.onload = function (e) {
                console.log($('.img-responsive').length);
                $('.img-responsive').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.get(0).files[0]);
            $('.btn-file').after(label);
        }
        
    });
    
	$(document).on('click','.btn-confirm-link',function(){
        if(confirm('Anda sudah yakin? tindakan ini tidak dapat mengembalikan keadaan sebelumnya')){
            return true;
        }
        return false;
    });
    
    $('textarea[name="url_post"]').on('paste', function () {
        var element = this;
        setTimeout(function () {
            var text     = $(element).val();
            var pecah    = text.split('/');
            console.log(pecah);
            var base_url = pecah[2];
            $('input[name="alamat_website"]').val(base_url);
            
        }, 100);
    });

    $('input[name="nik_kepkel"]').focusout(function(event) {
        var url_getname = $('p.url-getname').text();
        $.ajax({
            type:'GET',
            dataType:'json',
            url :url_getname,
            // data:'id_cashier='+id_cashier,
            success:function(output){
                alert("succes");
            }
        })
        
    });



});

  $("#submit").on('click', function(){
    jumlah = $("#jumlah").val();
    tab = "";
    isitab = "";
    isi = "";
    url = $(this).data('url');
    for (var i = 0; i < jumlah; i++) {
      isi = 
          '<form method="post" action="'+url+'">'
        + '<div class="form-horizontal">'
        + '<div class="form-group">'
        +   '<label class="col-sm-4 control-label">NIK</label>'
        +   '<div class="col-sm-8">'
        +     '<input type="number" name="id_person" class="form-control" placeholder="NIK">'
        +   '</div>'
        + '</div>'

        + '<div class="form-group">'
        + '<label class="col-sm-4 control-label">Pendidikan</label>'
        +   '<div class="col-sm-8">'
        +     '<input type="number" name="pendidikan" class="form-control" placeholder="Pekerjaan">'
        +   '</div>'
        + '</div>'        

        + '<div class="form-group">'
        + '<label class="col-sm-4 control-label">Pekerjaan</label>'
        +   '<div class="col-sm-8">'
        +     '<input type="number" name="pekerjaan" class="form-control" placeholder="Jenis Pekerjaan">'
        +   '</div>'
        + '</div>'

        + '<div class="form-group">'
        + '<label class="col-sm-4 control-label">Status Pernikahan</label>'
        +   '<div class="col-sm-8">'
        +     '<input type="number" name="status_pernikahan" class="form-control" placeholder="Status Pernikahan">'
        +   '</div>'
        + '</div>'

        + '<div class="form-group">'
        + '<label class="col-sm-4 control-label">Status Hubungan Dalam Keluarga</label>'
        +   '<div class="col-sm-8">'
        +     '<input type="number" name="hub_keluarga" class="form-control" placeholder="Status Hubungan Dalam Keluarga">'
        +   '</div>'
        + '</div>'

        + '<div class="form-group">'
        + '<label class="col-sm-4 control-label">No. Pasport</label>'
        +   '<div class="col-sm-8">'
        +     '<input type="number" name="no_paspor" class="form-control" placeholder="No. KITAS/KITAP">'
        +   '</div>'
        + '</div>'

        + '<div class="form-group">'
        + '<label class="col-sm-4 control-label">No. KITAS/KITAP</label>'
        +   '<div class="col-sm-8">'
        +     '<input type="number" name="no_kitas" class="form-control" placeholder="No. KITAS/KITAP">'
        +   '</div>'
        + '</div>'

        + '<div class="form-group">'
        + '<label class="col-sm-4 control-label">Ayah</label>'
        +   '<div class="col-sm-8">'
        +     '<input type="number" name="nama_ayah" class="form-control" placeholder="Ayah">'
        +   '</div>'
        + '</div>'

        + '<div class="form-group">'
        + '<label class="col-sm-4 control-label">Ibu</label>'
        +   '<div class="col-sm-8">'
        +     '<input type="number" name="nama_ibu" class="form-control" placeholder="Ibu">'
        +   '</div>'
        + '</div>'
        + '</div>'

        + '<div class="form-group">'
        +   '<div class="col-sm-offset-2 col-sm-10">'
        +     '<button type="submit" class="btn btn-primary">Simpan</button>'
        +   '</div>'
        + '</div>'
        + '</div>'
        + '</form>'
      if(i==0){
        tab += '<li class="nav-item active"><a class="nav-link data'+i+'" href="#data'+(i+1)+'" role="tab" data-toggle="tab">Anggota keluarga '+(i+1)+'</a></li>'; 
      }else{
        tab += '<li class="nav-item"><a class="nav-link data'+i+'" href="#data'+(i+1)+'" role="tab" data-toggle="tab">Anggota keluarga '+(i+1)+'</a></li>'; 
      }

      if(i==0){
        isitab += '<div role="tabpanel" class="tab-pane fade in active" id="data'+(i+1)+'">'+isi+'</div>'
      }else{
        isitab += '<div role="tabpanel" class="tab-pane fade in" id="data'+(i+1)+'">'+isi+'</div>'
      }

    }
      $("#coba").html(tab);
      $("#coba1").html(isitab);
  });
    $("#berikutnya_person").on('click', function(){
        $("#data1_person").removeClass("active");
        $("#data2_person").addClass("active");
    });
    $("#berikutnya_person1").on('click', function(){
        $("#data2_person").removeClass("active");
        $("#data3_person").addClass("active");
    });
    $("#berikutnya_person2").on('click', function(){
        $("#data3_person").removeClass("active");
        $("#data4_person").addClass("active");
    });

    $("#kembali_person").on('click', function(){
        $("#data1_person").addClass("active");
        $("#data2_person").removeClass("active");
    });
    $("#kembali_person1").on('click', function(){
        $("#data2_person").addClass("active");
        $("#data3_person").removeClass("active");
    });
    $("#kembali_person2").on('click', function(){
        $("#data3_person").addClass("active");
        $("#data4_person").removeClass("active");
    });


    // validasi anggota kartu keluarga
    //akta lahir
    $('select[name="akta_lahir"]').on('mousemove change', function(){
        var a = $('select[name="akta_lahir"]').find(":selected").val();
        if(a ==1){
            $('input[name="no_akta_lahir"]').prop('disabled', true);
        }else{
            $('input[name="no_akta_lahir"]').prop('disabled', false);
        }
    });
    // kelainan fisik
    $('select[name="kelainan_fisik"]').on('mousemove change', function(){
        var a = $('select[name="kelainan_fisik"]').find(":selected").val();
        if(a ==1){
            $('select[name="penyandang_cacat"]').prop('disabled', true);
        }else{
            $('select[name="penyandang_cacat"]').prop('disabled', false);
        }
    });
    // akta perkawinan
    $('select[name="akta_perkawinan"]').on('mousemove change', function(){
        var a = $('select[name="akta_perkawinan"]').find(":selected").val();
        if(a ==1){
            $('input[name="no_akta_perkawinan"]').prop('disabled', true);
            $('input[name="tgl_perkawinan"]').prop('disabled', true);
        }else{
            $('input[name="no_akta_perkawinan"]').prop('disabled', false);
            $('input[name="tgl_perkawinan"]').prop('disabled', false);
        }
    });
    // akta perceraian
    $('select[name="akta_cerai"]').on('mousemove change', function(){
        var a = $('select[name="akta_cerai"]').find(":selected").val();
        if(a ==1){
            $('input[name="no_akta_cerai"]').prop('disabled', true);
            $('input[name="tgl_perceraian"]').prop('disabled', true);
        }else{
            $('input[name="no_akta_cerai"]').prop('disabled', false);
            $('input[name="tgl_perceraian"]').prop('disabled', false);
        }
    });

    // ajax 
    $("#nik_person").on('change', function(){
      url=$("#codeigniter").data('url');
      nik_person = $(this).val();
      $.get(url+'welcome/get_data_person_nik',{
        nik_person : nik_person
      }).done(function(data){
        if(data.length > 2){
            data = JSON.parse(data);
                swal({
                  title: 'Pemberitahuan',
                  text: "Data NIK "+nik_person+" Berhasil ditemukan, ingin mengambil datanya?",
                  type: 'info',
                  showCancelButton: true,
                  confirmButtonText: 'Ya',
                  allowOutsideClick : false
                }).then((result) => {
                  if (result.value) {
                    Object.keys(data).forEach(function(key) {
                        $('#'+key).val(data[key]);
                    }); 
                  }
                })
           
            }
      });
    });
    $("#nik_ibu").on('change', function(){
      url=$("#codeigniter").data('url');
      nik_person = $(this).val();
      $.get(url+'welcome/get_data_person_nik_a',{
        nik_person : nik_person
      }).done(function(data){
        data = JSON.parse(data);
            $("#nama_ibu").val(data.nama);
      });
    });
    $("#nik_ayah").on('change', function(){
      url=$("#codeigniter").data('url');
      nik_person = $(this).val();
      $.get(url+'welcome/get_data_person_nik_a',{
        nik_person : nik_person
      }).done(function(data){
        data = JSON.parse(data);
            $("#nama_ayah").val(data.nama);
      });
    });
    $("form").on('mousemove', function(){
        $(".form-control").each(function(){
            if(this.value != ""){
                $(this).addClass('success-form');
                $(this).removeClass('fail-form');
            }else{
                $(this).removeClass('success-form');
                $(this).addClass('fail-form');
            }           
        })

    });
    //get data person sesuai nama
    $("#nama_lengkap").on('change', function(){
      url=$("#codeigniter").data('url');
      nama_person = $(this).val();
      $.get(url+'welcome/get_data_person_nama',{
        nama_person : nama_person
      }).done(function(data){
        if(data.length > 5){
            data = JSON.parse(data);
            $("#no_kk").val(data.no_kk);
            $("#nik").val(data.nik);
            $("#alamat_sebelumnya").val(data.alamat_sebelumnya);
            $("#rt").val(data.rt);
            $("#rw").val(data.rw);
            $("#kode_pos").val(data.kode_pos);
        }
      });
    });    
$(document).ready(function () { 

    var input_agama = $('input[name="agama"]');
    var url_agama   = $('p.url-religions').text();
    set_input_autocomplete(url_agama,input_agama,'name');
    
    var input_pekerjaan = $('input[name="pekerjaan"]');
    var url_pekerjaan   = $('p.url-pekerjaan').text();
    set_input_autocomplete(url_pekerjaan,input_pekerjaan,'name');

    var nik_selector = $('#nik_person');
    var nik_ibu = $('#nik_ibu');
    var nik_ayah = $('#nik_ayah');
    var nama = $("#nama_lengkap");
    var url_kepkel   = $('p.url-person').text();
    set_autocomplete_tpl(url_kepkel,nik_selector,'nama','nik','id_person','input[name="id_person"]');
    set_autocomplete_tpl(url_kepkel,nik_ibu,'nama','nik','id_person','input[name="id_person"]');
    set_autocomplete_tpl(url_kepkel,nik_ayah,'nama','nik','id_person','input[name="id_person"]');
    set_autocomplete_tpl(url_kepkel,nama,'nik','nama','id_person','input[name="id_person"]');

    var url_desa   = $('p.url-desa').text();
    set_basic_autocomplete('input[name="desa_kelurahan"]',url_desa);

    var url_kecamatan   = $('p.url-kecamatan').text();
    set_basic_autocomplete('input[name="kecamatan"]',url_kecamatan);
    
    var url_kabupaten   = $('p.url-kabupaten').text();
    set_basic_autocomplete('input[name="kabupaten_kota"]',url_kabupaten);

    var url_provinsi   = $('p.url-provinsi').text();
    set_basic_autocomplete('input[name="provinsi"]',url_provinsi);

    // data anggota keluarga
    var nik             = $('input[name="id_person"]');

    var url_nik         = $('p.url-person').text();
    set_input_autocomplete(url_nik,nik,'nama');
}); 

function set_autocomplete_tpl(action_url,selector,field,field_tpl,primary_key,selector_handler) {
    var aksi_url = action_url.toString();
    var options = {

    url: function(phrase) {
      return aksi_url;
    },
    getValue: function(element) {
        return element[field_tpl].toString();
    },
    template: {
        type: "description",
        fields: {
            description: field
        }
    },
    ajaxSettings: {
      dataType: "json",
      method: "POST",
      data: {
            dataType: "json"
        }
    },  
    preparePostData: function(data) {
        data['X-API-KEY'] = 'W1th0utLo993d1n';
        return data;
    },
    requestDelay: 400,
    list: {
        match: {
            enabled: true
        },
        onSelectItemEvent: function() {
            var data = $(selector).getSelectedItemData();
            var id  = data[primary_key];
            if ($(selector_handler).length == 1) {
                $(selector_handler).val(id).trigger("change");
            }
        }
    },
    theme: "square"
    };

    if ($(selector).length == 1) {
       $(selector).easyAutocomplete(options);
    } 

}

function set_input_autocomplete(action_url,selector,field) {
    var aksi_url = action_url.toString();
    var options = {
        url: function(phrase) {
            return aksi_url;
        },
        getValue: function(element) {
            return element[field];
        },
        template: {
            fields: {
                description:field
            }
        },
        ajaxSettings: {
            dataType: "json",
            method: "POST",
            data: {
                dataType: "json"
            }
        },
        list: {
        maxNumberOfElements: 8,
        match: {
            enabled: true
        },
        sort: {
            enabled: true
        }
    },
        preparePostData: function(data) {
            data['X-API-KEY'] = 'W1th0utLo993d1n';
            return data;
        },
        requestDelay: 400,
        theme: "square"
    };

    $(selector).easyAutocomplete(options);
}

function set_input_autocomplete(action_url,selector,field,primary_key,selector_handler) {
    var aksi_url = action_url.toString();
    var options = {

    url: function(phrase) {
        
      return aksi_url;
    },
    getValue: function(element) {
        return element[field];
    },
    template: {
        fields: {
            description: field
        }
    },
    ajaxSettings: {
      dataType: "json",
      method: "POST",
      data: {
            dataType: "json"
        }
    },  
    preparePostData: function(data) {
        data['X-API-KEY'] = 'W1th0utLo993d1n';
        return data;
    },
    requestDelay: 400,
    list: {
        match: {
            enabled: true
        },
        onSelectItemEvent: function() {
            var data = $(selector).getSelectedItemData();
            var id  = data[primary_key];
            if ($(selector_handler).length == 1) {
                $(selector_handler).val(id).trigger("change");
            }
        }
    },
    theme: "square"
    };

    if ($(selector).length == 1) {
        $(selector).easyAutocomplete(options); 
    } 
}

function set_basic_autocomplete(selector,source_url){
    var options = {
        url: function(phrase) {
            return source_url;
        },
        ajaxSettings: {
            dataType: "json",
            method: "POST",
            data: {
                dataType: "json"
            }
        },  
        preparePostData: function(data) {
            data['X-API-KEY'] = 'W1th0utLo993d1n';
            return data;
        },
        list: {
            match: {
                enabled: true
            }
        },
        theme: "square"
    };

    
    if ($(selector).length == 1) {
        $(selector).easyAutocomplete(options);
    }
}
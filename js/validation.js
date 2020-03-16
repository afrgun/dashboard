function submitRegis(){
  $("#regis_form").submit(function(a) {
    a.preventDefault();
    var b = !1,
        c = $("#regis_name").val(),
        d = $("#regis_ttl").val(),
        e = $("#regis_agama").val(),
        f = $("#regis_alamat").val(),
        g = $("#regis_kelas").val(),
        h = $("#regis_asal_sekolah").val();
        i = $("#regis_phone").val();
        j = $("#regis_prestasi").val();
        k = $("#regis_program").val();
        l = $("#regis_hari").val();
        m = $("#regis_jam").val();
        n = $("#regis_sumber").val();
        o = $("#regis_email").val();
        p = $("#regis_ortu").val();


    if($("#regis_name,#regis_ttl,#regis_agama,#regis_alamat,#regis_kelas,#regis_asal_sekolah,#regis_phone,#regis_email,#regis_prestasi,#regis_ortu,#regis_program,#regis_hari,#regis_jam,#regis_sumber").click(function() {
        $(this).removeClass("error_input")
      }), 0 == c.length) {
          var b = !0;
          $("#regis_name").addClass("error_input")
      } else $("#regis_name").removeClass("error_input");
    
    if (0 == d.length) {
        var b = !0;
        $("#regis_ttl").addClass("error_input")
    } else $("#regis_ttl").removeClass("error_input");
    
    if (0 == e.length) {
        var b = !0;
        $("#regis_agama").addClass("error_input")
    } else $("#regis_agama").removeClass("error_input");

    if (0 == f.length) {
      var b = !0;
      $("#regis_alamat").addClass("error_input")
    } else $("#regis_alamat").removeClass("error_input");
    
    if (0 == g.length || g.length > 2) {
        var b = !0;
        $("#regis_kelas").addClass("error_input")
    } else $("#regis_kelas").removeClass("error_input");
    
    if (0 == h.length){
      var b = !0;
      $("#regis_asal_sekolah").addClass("error_input")
    } else $("#regis_asal_sekolah").removeClass("error_input");

    if (0 == i.length || g.length > 13){
      var b = !0;
      $("#regis_phone").addClass("error_input")
    } else $("#regis_phone").removeClass("error_input");

    if (0 == j.length){
      var b = !0;
      $("#regis_prestasi").addClass("error_input")
    } else $("#regis_prestasi").removeClass("error_input");

    if (0 == k.length){
      var b = !0;
      $("#regis_program").addClass("error_input")
    } else $("#regis_program").removeClass("error_input");

    if (0 == l.length){
      var b = !0;
      $("#regis_hari").addClass("error_input")
    } else $("#regis_hari").removeClass("error_input");

    if (0 == m.length){
      var b = !0;
      $("#regis_jam").addClass("error_input")
    } else $("#regis_jam").removeClass("error_input");
    
    if (0 == n.length){
      var b = !0;
      $("#regis_sumber").addClass("error_input")
	  } else $("#regis_sumber").removeClass("error_input");
	
    if (0 == o.length){
      var b = !0;
      $("#regis_email").addClass("error_input")
	  } else $("#regis_email").removeClass("error_input");
  
    if (0 == p.length){
      var b = !0;
      $("#regis_ortu").addClass("error_input")
	  } else $("#regis_ortu").removeClass("error_input");
  
	
    0 == b && ($("#send_registration").attr({
        disabled: "true",
        value: "Sending..."
    }), $.post("service_registration.php", $("#regis_form").serialize(), function(a) {
        "sent" == a ? ($("#send_registration").remove(), $("#regis_success").fadeIn(500)) : ($("#regis_fail").fadeIn(500), $("#send_registration").removeAttr("disabled").attr("value", "Register Now"))
    }))
  })
}


function searchDataForAbsensi(){
  $("#getdataforabsensi_form").submit(function(a){
    var url = $(this).attr('action');
    a.preventDefault();
    var b = !1,
        c = $("#kelas").val(),
        d = $("#datepicker").val(),
        e = $("#mapel").val(),
        f = $("#pengajar").val(),
        g = $("#program").val(),
        h = $("#hari").val(),
        i = $("#jam").val();

      if($("#kelas,#datepicker,#mapel,#pengajar,#program,#hari,#jam").click(function() {
        $(this).removeClass("error_input")
      }), 0 == c.length) {
          var b = !0;
          alert("Silahkan lengkapi data terlebih dahulu.");
      } 
      
      if (0 == d.length) {
          var b = !0;
          alert("Silahkan lengkapi data terlebih dahulu.");
      }
      
      if (0 == e.length) {
          var b = !0;
          alert("Silahkan lengkapi data terlebih dahulu.");
      } 
  
      if (0 == f.length) {
        var b = !0;
        alert("Silahkan lengkapi data terlebih dahulu.");
      }

      if (0 == g.length) {
          var b = !0;
          alert("Silahkan lengkapi data terlebih dahulu.");
      }

      if (0 == h.length){
        var b = !0;
          alert("Silahkan lengkapi data terlebih dahulu.");
      } 
  
      if (0 == i.length){
        var b = !0;
        alert("Silahkan lengkapi data terlebih dahulu.");
      }

      0 == b && ($("#getDataForAbsensi").attr({
        disabled: "true",
        value: "Sending..."
      }),
      $.ajax({
        url:url,
        type:"post",
        data: $("#getdataforabsensi_form").serialize(),
        success: function(a){
          setData(a);
          $("#getDataForAbsensi").removeAttr("disabled").attr("value", "Cari Data");
          
        },
        error:function(textStatus, errorThrown) {
          console.log(textStatus, errorThrown);
       }
      }))
       
  })
}

function searchDataForPenilaian(){
  $("#getdatafornilai_form").submit(function(a){
    var url = $(this).attr('action');
    a.preventDefault();
    var b = !1,
        c = $("#kelas").val(),
        d = $("#datepicker").val(),
        e = $("#mapel").val(),
        f = $("#pengajar").val(),
        g = $("#program").val(),
        h = $("#hari").val(),
        i = $("#jam").val(),
        j = $("#materi").val();

      if($("#kelas,#datepicker,#mapel,#pengajar,#program,#hari,#jam").click(function() {
        $(this).removeClass("error_input")
      }), 0 == c.length) {
          var b = !0;
          alert("Silahkan lengkapi data terlebih dahulu.");
      } 
      
      if (0 == d.length) {
          var b = !0;
          alert("Silahkan lengkapi data terlebih dahulu.");
      }
      
      if (0 == e.length) {
          var b = !0;
          alert("Silahkan lengkapi data terlebih dahulu.");
      } 
  
      if (0 == f.length) {
        var b = !0;
        alert("Silahkan lengkapi data terlebih dahulu.");
      }

      if (0 == g.length) {
          var b = !0;
          alert("Silahkan lengkapi data terlebih dahulu.");
      }

      if (0 == h.length){
        var b = !0;
          alert("Silahkan lengkapi data terlebih dahulu.");
      } 
  
      if (0 == i.length){
        var b = !0;
        alert("Silahkan lengkapi data terlebih dahulu.");
      }

      if (0 == j.length){
        var b = !0;
        alert("Silahkan lengkapi data terlebih dahulu.");
      }

      0 == b && ($("#getDataForNilai").attr({
        disabled: "true",
        value: "Sending..."
      }),
      $.ajax({
        url:url,
        type:"post",
        data: $("#getdatafornilai_form").serialize(),
        success: function(a){
          setDataPenilaian(a);
          $("#getDataForNilai").removeAttr("disabled").attr("value", "Cari Data");
          
        },
        error:function(textStatus, errorThrown) {
          console.log(textStatus, errorThrown);
       }
      }))
       
  })
}

function searchDataForPenilaianUTS(){
  $("#getdatafornilaiuts_form").submit(function(a){
    var url = $(this).attr('action');
    a.preventDefault();
    var b = !1,
        c = $("#kelas").val(),
        d = $("#datepicker").val(),
        e = $("#mapel").val(),
        f = $("#pengajar").val(),
        g = $("#program").val(),
        h = $("#hari").val(),
        i = $("#jam").val(),
        j = $("#materi").val();

      if($("#kelas,#datepicker,#mapel,#pengajar,#program,#hari,#jam").click(function() {
        $(this).removeClass("error_input")
      }), 0 == c.length) {
          var b = !0;
          alert("Silahkan lengkapi data terlebih dahulu.");
      } 
      
      if (0 == d.length) {
          var b = !0;
          alert("Silahkan lengkapi data terlebih dahulu.");
      }
      
      if (0 == e.length) {
          var b = !0;
          alert("Silahkan lengkapi data terlebih dahulu.");
      } 
  
      if (0 == f.length) {
        var b = !0;
        alert("Silahkan lengkapi data terlebih dahulu.");
      }

      if (0 == g.length) {
          var b = !0;
          alert("Silahkan lengkapi data terlebih dahulu.");
      }

      if (0 == h.length){
        var b = !0;
          alert("Silahkan lengkapi data terlebih dahulu.");
      } 
  
      if (0 == i.length){
        var b = !0;
        alert("Silahkan lengkapi data terlebih dahulu.");
      }
      
      if (0 == j.length){
        var b = !0;
        alert("Silahkan lengkapi data terlebih dahulu.");
      }

      0 == b && ($("#getDataForNilai").attr({
        disabled: "true",
        value: "Sending..."
      }),
      $.ajax({
        url:url,
        type:"post",
        data: $("#getdatafornilaiuts_form").serialize(),
        success: function(a){
          setDataPenilaianUTS(a);
          $("#getDataForNilaiUTS").removeAttr("disabled").attr("value", "Cari Data");
          
        },
        error:function(textStatus, errorThrown) {
          console.log(textStatus, errorThrown);
       }
      }))
       
  })
}

function searchDataForPenilaianUAS(){
  $("#getdatafornilaiuas_form").submit(function(a){
    var url = $(this).attr('action');
    a.preventDefault();
    var b = !1,
        c = $("#kelas").val(),
        d = $("#datepicker").val(),
        e = $("#mapel").val(),
        f = $("#pengajar").val(),
        g = $("#program").val(),
        h = $("#hari").val(),
        i = $("#jam").val(),
        j = $("#materi").val();

      if($("#kelas,#datepicker,#mapel,#pengajar,#program,#hari,#jam").click(function() {
        $(this).removeClass("error_input")
      }), 0 == c.length) {
          var b = !0;
          alert("Silahkan lengkapi data terlebih dahulu.");
      } 
      
      if (0 == d.length) {
          var b = !0;
          alert("Silahkan lengkapi data terlebih dahulu.");
      }
      
      if (0 == e.length) {
          var b = !0;
          alert("Silahkan lengkapi data terlebih dahulu.");
      } 
  
      if (0 == f.length) {
        var b = !0;
        alert("Silahkan lengkapi data terlebih dahulu.");
      }

      if (0 == g.length) {
          var b = !0;
          alert("Silahkan lengkapi data terlebih dahulu.");
      }

      if (0 == h.length){
        var b = !0;
          alert("Silahkan lengkapi data terlebih dahulu.");
      } 
  
      if (0 == i.length){
        var b = !0;
        alert("Silahkan lengkapi data terlebih dahulu.");
      }
      
      if (0 == j.length){
        var b = !0;
        alert("Silahkan lengkapi data terlebih dahulu.");
      }

      0 == b && ($("#getDataForNilai").attr({
        disabled: "true",
        value: "Sending..."
      }),
      $.ajax({
        url:url,
        type:"post",
        data: $("#getdatafornilaiuas_form").serialize(),
        success: function(a){
          setDataPenilaianUAS(a);
          $("#getDataForNilaiUAS").removeAttr("disabled").attr("value", "Cari Data");
          
        },
        error:function(textStatus, errorThrown) {
          console.log(textStatus, errorThrown);
       }
      }))
       
  })
}

function setData(data){
  var newdata = jQuery.parseJSON(data);
  $('#tableAbsensi').DataTable({
    'destroy':true,
    'data': newdata,
    "columns" : [
      { "data" : "id_siswa",
        "render": function(data){
          return '<input class="inputhide" type="text" name="id_siswa[]" value="'+data+'">'+data;
        }
      },
      { "data" : "nama_lengkap",
        "render": function(data){
          return '<input class="inputhide" type="text" name="nama_lengkap[]" value="'+data+'">'+data;
        },
      },
      { "data" : "id_regis",
        "render": function(data){
          return '<input type="radio" name="'+data+'" value="hadir">';
        },
      },
      { "data" : "id_regis",
        "render": function(data){
          return '<input type="radio" name="'+data+'" value="sakit">';
        },
      },
      { "data" : "id_regis",
        "render": function(data){
          return '<input type="radio" name="'+data+'" value="alpha">';
        },
      },
    ],
    'paging'      : true,
    'lengthChange': false,
    'searching'   : false,
    'ordering'    : false,
    'info'        : true,
    'autoWidth'   : false
})
}

function setDataPenilaian(data){
  var newdata = jQuery.parseJSON(data);
  $('#tablePenilaian').DataTable({
    'destroy':true,
    'data': newdata,
    "columns" : [
      { "data" : "id_siswa",
        "render": function(data){
          return '<input class="inputhide" type="text" name="id_siswa[]" value="'+data+'">'+data;
        }
      },
      { "data" : "nama_lengkap",
        "render": function(data){
          return '<input class="inputhide" type="text" name="nama_lengkap[]" value="'+data+'">'+data;
        },
      },
      { "data" : "id_regis",
        "render": function(data){
          return '<textarea class="form-control" rows="3" name="sikap-'+data+'"></textarea>';
        },
      },
      { "data" : "id_regis",
        "render": function(data){
          return '<textarea class="form-control" rows="3" name="tingkatkan-'+data+'"></textarea>';
        },
      },
      { "data" : "id_regis",
        "render": function(data){
          return '<input type="text" class="form-control" name="nilai-'+data+'">';
        },
      },
    ],
    'paging'      : true,
    'lengthChange': false,
    'searching'   : false,
    'ordering'    : false,
    'info'        : true,
    'autoWidth'   : false
})
}

function setDataPenilaianUTS(data){
  var newdata = jQuery.parseJSON(data);
  $('#tablePenilaianuts').DataTable({
    'destroy':true,
    'data': newdata,
    "columns" : [
      { "data" : "id_siswa",
        "render": function(data){
          return '<input class="inputhide" type="text" name="id_siswa[]" value="'+data+'">'+data;
        }
      },
      { "data" : "nama_lengkap",
        "render": function(data){
          return '<input class="inputhide" type="text" name="nama_lengkap[]" value="'+data+'">'+data;
        },
      },
      { "data" : "id_regis",
        "render": function(data){
          return '<input type="text" class="form-control" name="keterangan-'+data+'">';
        },
      },
      { "data" : "id_regis",
        "render": function(data){
          return '<input type="text" class="form-control" name="nilai-'+data+'">';
        },
      },
    ],
    'paging'      : true,
    'lengthChange': false,
    'searching'   : false,
    'ordering'    : false,
    'info'        : true,
    'autoWidth'   : false
})
}

function setDataPenilaianUAS(data){
  var newdata = jQuery.parseJSON(data);
  $('#tablePenilaianuas').DataTable({
    'destroy':true,
    'data': newdata,
    "columns" : [
      { "data" : "id_siswa",
        "render": function(data){
          return '<input class="inputhide" type="text" name="id_siswa[]" value="'+data+'">'+data;
        }
      },
      { "data" : "nama_lengkap",
        "render": function(data){
          return '<input class="inputhide" type="text" name="nama_lengkap[]" value="'+data+'">'+data;
        },
      },
      { "data" : "id_regis",
        "render": function(data){
          return '<input type="text" class="form-control" name="keterangan-'+data+'">';
        },
      },
      { "data" : "id_regis",
        "render": function(data){
          return '<input type="text" class="form-control" name="nilai-'+data+'">';
        },
      },
    ],
    'paging'      : true,
    'lengthChange': false,
    'searching'   : false,
    'ordering'    : false,
    'info'        : true,
    'autoWidth'   : false
})
}


$(document).ready(function() {
  searchDataForAbsensi();
  searchDataForPenilaian();
  searchDataForPenilaianUTS();
  searchDataForPenilaianUAS();
});
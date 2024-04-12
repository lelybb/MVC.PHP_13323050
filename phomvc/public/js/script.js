//console.log('ok');
$(function() {

    $('.tombolTambahData').on('clik', function(){
        $('#formModalLabel').html('Tambah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Tambah Data');
    }); 



    $('.tampilModalUbah').on('click', function(){
        //console.log('ok');
        $('#formModalLabel').html('Ubah Data Mahasiswa'); 
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost:8080/PABI/Week%2011/PABIW10S2/Video%202/MVC_13323050/phomvc/public/mahasiswa/ubah');

        const id = $(this).data('id');
        //console.log(id);

         
        // $.ajax({
        //     url: 'http://localhost:8080/PABI/Week%2011/PABIW10S2/Video%202/MVC_13323050/phomvc/public/mahasiswa/getUbah',
        //     data: {id : id},
        //     method: 'post',
        //     //dataType: 'json',
        //     success: function(data){
        //         $('#nama').val(data.nama);
        //         //console.log(data);
        //     }
        //   });

        // 
        jQuery.ajax({
            url: 'http://localhost:8080/PABI/Week%2011/PABIW10S2/Video%202/MVC_13323050/phomvc/public/mahasiswa/getUbah',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data){
                //console.log(data);
                 $('#nama').val(data.nama);
                 $('#nim').val(data.nim);
                 $('#email').val(data.email);
                 $('#prodi').val(data.prodi);
                 $('#id').val(data.id);
            }
        });
        
    });
});

$(function() {

    $('.tombolTambahData').on('click', function() {
        $('#exampleModalLabel').html('Tambah Data');
        $('.modal-footer button[type=submit]').html('Tambah Data')
    });


    $('.tampilModalUbah').on('click', function() {

        $('#exampleModalLabel').html('Ubah Data');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/bp-web/public/inbound/ubah');

        const id = $(this).data('id');

        $.ajax({
            url: 'http://localhost/bp-web/public/inbound/getubah',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                $('#nama_barang').val(data.nama_barang);
                $('#kategori').val(data.kategori);
                $('#qty').val(data.qty);
                $('#suplier').val(data.suplier);
                $('#id').val(data.id);
            }
        });

    });


});
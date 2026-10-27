$(function () {
    $('.tombolTambahData').on('click', function () {
        $('#judulModal').html('Tambah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Tambah Data');

        $('#formModal form').attr('action', 'http://localhost/CHIKA_PWBO_2511500044/Public/mahasiswa/tambah');

        $('#id').val('');
        $('#nama').val('');
        $('#nim').val('');
        $("#email").val('');
        $('#jurusan').val('');
    });

    $('.tampilModalUbah').on('click', function () {
        $('#judulModal').html('Ubah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Ubah Data');


    $('#formModal form').attr('action', 'http://localhost/CHIKA_PWBO_2511500044/Public/mahasiswa/ubah');
     
        const id = $(this).data('id');

        $.ajax({
         url: 'http://localhost/CHIKA_PWBO_2511500044/Public/mahasiswa/getubah',
            data: { id: id },
            method: 'post',
            dataType: 'json',
            success: function (data) {
                $('#nama').val(data.nama);
                $('#nim').val(data.nim);
                $('#email').val(data.email);
                $('#jurusan').val(data.jurusan);
                $('#id').val(data.id);
            }
        });
    });
});
javascript
$(function () {
    $('.tombolTambahData').on('click', function () {
        $('#judulModal').html('Tambah Data Pengembalian');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        $('.modal-body form').attr(
            'action',
            'http://localhost/CHIKA_PWBO_2511500044/Public/pengembalian/tambah'
        );

        $('#Kd_kembalian044').val('');
        $('#NimMhs044').val('');
        $('#NmMhs044').val('');
        $('#NmBuku044').val('');
        $('#JumBuku044').val('');
        $('#TglKembali044').val('');
        $('#Denda044').val('');
    });

    $('.tampilModalUbah').on('click', function () {
        $('#judulModal').html('Ubah Data Pengembalian');
        $('.modal-footer button[type=submit]').html('Ubah Data');

        $('.modal-body form').attr(
            'action',
            'http://localhost/CHIKA_PWBO_2511500044/Public/pengembalian/ubah'
        );

        const id = $(this).data('id');

        $.ajax({
            url: 'http://localhost/CHIKA_PWBO_2511500044/Public/pengembalian/getubah',
            data: { Kd_kembalian044: id },
            method: 'post',
            dataType: 'json',

            success: function (data) {
                $('#Kd_kembalian044').val(data.Kd_kembalian044);
                $('#NimMhs044').val(data.NimMhs044);
                $('#NmMhs044').val(data.NmMhs044);
                $('#NmBuku044').val(data.NmBuku044);
                $('#JumBuku044').val(data.JumBuku044);
                $('#TglKembali044').val(data.TglKembali044);
                $('#Denda044').val(data.Denda044);
            },

            error: function (xhr) {
                console.log(xhr.responseText);
                alert('Gagal mengambil data pengembalian!');
            }
        });
    });
});
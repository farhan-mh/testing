// $id = $_GET['id'];
$(function () {
    $('.tombolTambahData').on('click', function () {
        $('#judulModal').html('Tambah Data Siswaa');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        $('#nama').val('');
        $('#jenis_kelamin').val('');
        $('#alamat').val('');
        $('#id').val('');
    });
    $('.tampilModalUbah').on('click', function () {
        $('#judulModal').html('Ubah Data Siswa');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/12/phpmvc/public/siswa/ubah');//ubah/ubahDataSiswa
        const id = $(this).data('id');
        $.ajax({
            url: 'http://localhost/12/phpmvc/public/siswa/getubah',
            data: { id: id },
            method: 'post',
            dataType: 'json',
            success: function (data) {
                $('#nama').val(data.nama);
                $('#jenis_kelamin').val(data.jenis_kelamin);
                $('#alamat').val(data.alamat);
                $('#id').val(data.id);
            }
        });
    });
    // g
    $('.tambahGuru').on('click', function () {
        $('#judulModal').html('Tambah Data Guru');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        $('#nama').val('');
        $('#jenis_kelamin').val('');
        $('#alamat').val('');
        $('#id').val('');
    });
    $('.ubahGuru').on('click', function () {
        $('#judulModal').html('Ubah Data Guru');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/12/phpmvc/public/blog');//ubah/ubahDataSiswa
        const id = $(this).data('id');
        $.ajax({
            url: 'http://localhost/12/phpmvc/public/blog/getubah',
            data: { id: id },
            method: 'post',
            dataType: 'json',
            success: function (data) {
                $('#nama').val(data.nama);
                $('#jenis_kelamin').val(data.jenis_kelamin);
                $('#alamat').val(data.alamat);
                $('#id').val(data.id);
            }
        });
    });
});
// hehe😅//
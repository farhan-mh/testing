<!-- <body>
    <div class="container mt-5">
       <div class="row">
        <div class="col-6">
            <h3>Guru</h3>
            <?php foreach($data['blog']as $blog):?>
                <ul>
                    <li><?= $blog ['penulis'];?></li>
                    <li><?= $blog ['judul'];?></li>
                </ul>
                <?php endforeach; ?>
        </div>
       </div>
    </div>
</body> -->
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-6">
                <?php Flasher::flash() ?>
                <button type="button" class="btn btn-primary tambahGuru" data-toggle="modal" data-target="#formModal">Tambah data</button>
                <h3 class="mt-5">Guru</h3>
                <ul class="list-group">
                    <?php foreach ($data['blog'] as $blog): ?>
                        <!--  -->
                        <li
                            class="list-group-item list-group-item d-flex justify-content-between align-items-center p-3 text-h2">
                            <?= $blog['nama']; ?>
                            <div style="display:flex">
                                <a href="" class="btn btn-primary">Baca</a>
                                <a href="<?= BASE_URL; ?>/blog/getubahguru/<?= $blog['id']; ?>"
                                    class="btn btn-warning float-right ubahGuru mx-2" data-toggle="modal"
                                    data-target="#formModal" data-id="">ubah</a>
                                <!-- <input type="hidden" name="id" id="id"> -->
                                <a href="<?= BASE_URL; ?>/blog/hapus/<?= $blog['id']; ?>"
                                    class="btn btn-danger float-right" onclick="return confirm('yakin?');">hapus</a>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>

     <!-- Modal -->
     <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="judulModal">Tambah Data Siswa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= BASE_URL; ?>/blog/tambah" class="act" method="post" name="id" id="id">

                        <input type="hidden" name="id" id="id">

                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama">
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin">Jurusan</label>
                            <input type="text" class="form-control" id="kode_guru" name="kode_guru">
                        </div>
                        <div class="form-group">
                            <label for="alamat">Mapel</label>
                            <input type="text" class="form-control" id="mapel" name="mapel">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                </div>
            </div>
        </div>
    </div>
    <br><br>
<div class="container mt-5">
    <div class="card">
        <div class="card-body" style="wdth:18rem">
            <h5>Nama: </h5><span class="ard-title"><?= $data['siswa']['nama']; ?></span>
            <h5>Jenis Kelamin: </h5><span class="card-subtitle mb-2 text-muted"><?= $data['siswa']['jenis_kelamin']; ?></span>
            <h5>Alamat: </h5><span class="card-text"><?= $data['siswa']['alamat']; ?></span>
            <hr>
            <a href="<?= BASE_URL; ?>/siswa" class="btn btn-primary">kembali</a>
        </div>
    </div>
</div>
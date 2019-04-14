<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
        <div class="card">
                <div class="card-header">
                    Detail Mahasiswa
                </div>

                <div class="card-body">
                    <h5 class="card-title"><?= $mahasiswa['nama_mhs'] ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"> <?= $mahasiswa['nim'] ?></h6>
                    <p class="card-text"><?= $mahasiswa['jurusan'] ?></p>
                    <p class="card-text"><?= $mahasiswa['jk'] ?></p>
                    <a href="<?= base_url(); ?>mahasiswa/index" class="btn btn-primary">Kembali</a>

                </div>
            </div>
        </div>
    </div>
</div>
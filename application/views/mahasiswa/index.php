<div class="container">
    <?php if($this->session->flashdata('flash')) : ?>
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data Mahasiswa <strong>Berhasil </strong>
                <?= $this->session->flashdata('flash'); ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true"> &times; </span>
                </button>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url() ?>mahasiswa/tambah" class="btn btn-primary">Tambah Data Mahasiswa</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <form action="" method="post">
                <div class="input-group mb-3">
                    <input type="text" name="keyword" id="" class="form-control" placeholder="Cari Data Mahasiswa ..">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-primary">Cari </button>
                    </div>
                </div>

            </form>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <h1>Daftar Mahasiswa</h1>
            <?php if( empty($mahasiswa->result())) : ?>
                <div class="alert alert-danger" role="alert">
                    Data Mahasiswa tidak ditemukan
                </div>
            <?php endif ; ?>
            <ul class="list-group">
                <?php foreach($mahasiswa->result() as $mhs) :  ?>
                    <li class="list-group-item">
                        <?= $mhs->nama_mhs; ?>
                        <a href="<?= base_url() ?>mahasiswa/detail/<?= $mhs->nim; ?>" class="badge badge-primary float-right">Detail</a> 
                        <a href="<?= base_url() ?>mahasiswa/edit/<?= $mhs->nim; ?>" class="badge badge-success float-right">Edit</a>
                        <a href="<?= base_url() ?>mahasiswa/hapus/<?= $mhs->nim; ?>" class="badge badge-danger float-right" onclick="confirm('Anda yakin ingin menghapus ?'); ">Hapus</a>
                    </li>
                    

                <?php endforeach; ?>
            </ul>
        </div>
    </div>

</div>
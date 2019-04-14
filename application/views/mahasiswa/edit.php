<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Edit Mahasiswa
                </div>

                <div class="card-body">
                    <!-- <?php if(validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors(); ?>
                        </div>
                    <?php endif; ?> -->

                    <form action="" method="post">
                    <input type="hidden" id="nim" name="nim" class="form-control" value="<?= $mahasiswa['nim'] ?>">                    

                    <div class="form-group">
                        <label for="nama_mhs">Nama</label>
                        <input type="text" id="nama_mhs" name="nama_mhs" class="form-control" value="<?= $mahasiswa['nama_mhs'] ?>">                    
                        <small class="form-text text-danger"><?= form_error('nama_mhs') ?></small>
                    </div>
                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <select name="jurusan" id="jurusan" name="jurusan" class="form-control">
                            <?php foreach($jurusan as $j) : ?>
                                <?php if( $j == $mahasiswa['jurusan']) : ?>
                                    <option value="<?= $j; ?>" selected> <?= $j; ?></option>
                                <?php else : ?>
                                    <option value="<?= $j; ?>" > <?= $j; ?></option>

                                <?php endif; ?>
                            <?php endforeach; ?>
                        </select>                   
                    </div>
                    <div class="form-group">
                        <label for="jk">Jenis Kelamin</label>
                        <input type="text" id="jk" name="jk" class="form-control" value="<?= $mahasiswa['jk'] ?>">                    
                        <small class="form-text text-danger"><?= form_error('jk') ?></small>
                    </div>

                    <button type="submit" class="btn btn-success float-right" >Save</button>
                    </form>
                </div>
            </div>
            

        </div>
    </div>
</div>
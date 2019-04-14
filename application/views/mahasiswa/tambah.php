<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Tambah Mahasiswa
                </div>

                <div class="card-body">
                    <!-- <?php if(validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors(); ?>
                        </div>
                    <?php endif; ?> -->

                    <form action="" method="post">
                    <div class="form-group">
                        <label for="nim">Nim</label>
                        <input type="text" id="nim" name="nim" class="form-control">                    
                        <small class="form-text text-danger"><?= form_error('nim') ?></small>
                    </div>
                    <div class="form-group">
                        <label for="nama_mhs">Nama</label>
                        <input type="text" id="nama_mhs" name="nama_mhs" class="form-control">                    
                        <small class="form-text text-danger"><?= form_error('nama_mhs') ?></small>
                    </div>
                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <select name="jurusan" id="jurusan" name="jurusan" class="form-control">
                            <option value="Teknik Kimia">Teknik Kimia</option>
                            <option value="Sistem Informasi">Sistem Informasi</option>
                        </select>                   
                    </div>
                    <div class="form-group">
                        <label for="jk">Jenis Kelamin</label>
                        <input type="text" id="jk" name="jk" class="form-control">                    
                        <small class="form-text text-danger"><?= form_error('jk') ?></small>
                    </div>

                    <button type="submit" class="btn btn-success float-right" >Save</button>
                    </form>
                </div>
            </div>
            

        </div>
    </div>
</div>
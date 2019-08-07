<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Tambah Data Mahasiswa
                </div>
                <div class="card-body">
                    <?php if(validation_errors()): ?>
                            <div class="alert alert-danger" role="alert">
                                <?= validation_errors();?>
                            </div>
                    <?php endif;?>
                    
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input name="nama" type="text" class="form-control" id="nama">
                        </div>
                        <div class="form-group">
                            <label for="nim">Nim</label>
                            <input name="nim" type="text" class="form-control" id="nim">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input name="email" type="text" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <select class="form-control" id="jurusan" name="jurusan">
                                <option value="Teknik Informatika">Teknik Informatika</option>
                                <option value="Teknik Industri">Teknik Industri</option>
                                <option value="Teknik Pangan">Teknik Pangan</option>
                                <option value="Teknik Mesin">Teknik Mesin</option>
                                <option value="Teknik Planologi">Teknik Planologi</option>
                                <option value="Teknik Lingkungan">Teknik Lingkungan</option>
                            </select>
                        </div>
                        <button class="btn btn-primary float-right" name="tambah" type="submit">Tambah Data</button>
                    </form>
                </div>
            </div>

        </div>
    </div>

</div>
<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Tambah Data Mahasiswa
                </div>
                <div class="card-body">                    
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input name="nama" type="text" class="form-control" id="nama">
                            <small class="form-text text-danger">
                                <?php if(form_error('nama')): ?>
                                    <?= form_error('nama');?>
                                <?php endif;?>
                            </small>
                        </div>
                        <div class="form-group">
                            <label for="nim">Nim</label>
                            <input name="nim" type="text" class="form-control" id="nim">
                            <small class="form-text text-danger">
                                <?php if(form_error('nim')): ?>
                                    <?= form_error('nim');?>
                                <?php endif;?>
                            </small>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input name="email" type="text" class="form-control" id="email">
                            <small class="form-text text-danger">
                                <?php if(form_error('email')): ?>
                                    <?= form_error('email');?>
                                <?php endif;?>
                            </small>
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <select class="form-control" id="jurusan" name="jurusan">
                                <?php foreach($jurusan as $j): ?>
                                    <option value="<?= $j ?>"><?= $j ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <button class="btn btn-primary float-right" name="tambah" type="submit">Tambah Data</button>
                    </form>
                </div>
            </div>

        </div>
    </div>

</div>
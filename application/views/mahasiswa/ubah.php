<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Ubah Data Mahasiswa
                </div>
                <div class="card-body">                    
                    <form action="" method="post">
                        <input type="text" value="<?= $mahasiswa['id'] ?>" name="id" hidden>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input name="nama" type="text" class="form-control" id="nama" value="<?= $mahasiswa['nama']; ?>">
                            <small class="form-text text-danger">
                                <?php if(form_error('nama')): ?>
                                    <?= form_error('nama');?>
                                <?php endif;?>
                            </small>
                        </div>
                        <div class="form-group">
                            <label for="nim">Nim</label>
                            <input name="nim" type="text" class="form-control" id="nim" value="<?= $mahasiswa['nim']; ?>">
                            <small class="form-text text-danger">
                                <?php if(form_error('nim')): ?>
                                    <?= form_error('nim');?>
                                <?php endif;?>
                            </small>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input name="email" type="text" class="form-control" id="email" value="<?= $mahasiswa['email']; ?>">
                            <small class="form-text text-danger">
                                <?php if(form_error('email')): ?>
                                    <?= form_error('email');?>
                                <?php endif;?>
                            </small>
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <select class="form-control" id="jurusan" name="jurusan"  value="<?= $mahasiswa['jurusan']; ?>">
                                <?php foreach($jurusan as $j): ?>
                                    <?php if($j == $mahasiswa['jurusan']): ?>
                                        <option value="<?= $j ?>" selected><?= $j ?></option>
                                    <?php else :?>
                                    <option value="<?= $j ?>"><?= $j ?></option>
                                    <?php endif; ?>
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
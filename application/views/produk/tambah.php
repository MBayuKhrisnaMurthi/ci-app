<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

        <div class="card">
            <div class="card-header">
                Form Tambah Data Produk
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" autocomplete="off">
                        <span class="form-text" style="color: red;"><?php echo form_error('nama'); ?></span>
                    </div>
                    <div class="mb-3">
                        <label for="kategori" class="form-label">Kategori</label>
                        <select class="form-select" name="kategori">
                            <?php foreach ($kategori as $ktg) : ?>
                                <option value="<?= $ktg; ?>"><?= $ktg; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga</label>
                        <input type="text" class="form-control" id="harga" name="harga" autocomplete="off">
                        <span class="form-text" style="color: red;"><?php echo form_error('harga'); ?></span>
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <textarea type="text" class="form-control" id="deskripsi" name="deskripsi" autocomplete="off"></textarea>
                        <span class="form-text" style="color: red;"><?php echo form_error('deskripsi'); ?></span>
                    </div>
                    <button type="submit" class="btn btn-primary float-right">Simpan</button>
                </form>
            </div>
        </div>

        </div>
    </div>

</div>
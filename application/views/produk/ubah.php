<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

        <div class="card">
            <div class="card-header">
                Form Ubah Data Produk
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    <input type="hidden" name="id" value="<?= $produk['id']; ?>">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" autocomplete="off" value="<?= $produk['nama']; ?>">
                        <span class="form-text" style="color: red;"><?php echo form_error('nama'); ?></span>
                    </div>
                    <div class="mb-3">
                        <label for="kategori" class="form-label">Kategori</label>
                        <select class="form-select" name="kategori">
                            <?php foreach ($kategori as $ktg) : ?>
                                <?php if ($produk['kategori'] == $ktg) : ?>
                                    <option value="<?= $ktg; ?>" selected><?= $ktg; ?></option>
                                    <?php else : ?>
                                    <option value="<?= $ktg; ?>"><?= $ktg; ?></option>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga</label>
                        <input type="text" class="form-control" id="harga" name="harga" autocomplete="off" value="<?= $produk['harga']; ?>">
                        <span class="form-text" style="color: red;"><?php echo form_error('harga'); ?></span>
                    </div>
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <textarea type="text" class="form-control" id="deskripsi" name="deskripsi" autocomplete="off"><?= $produk['deskripsi']; ?></textarea>
                        <span class="form-text" style="color: red;"><?php echo form_error('deskripsi'); ?></span>
                    </div>
                    <button type="submit" class="btn btn-primary float-right">Simpan</button>
                </form>
            </div>
        </div>

        </div>
    </div>

</div>
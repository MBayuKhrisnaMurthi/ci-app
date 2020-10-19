<div class="container">
    
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Detail Produk
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $produk['nama']; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $produk['kategori']; ?></h6>
                    <p class="card-text">Rp.<?= $produk['harga']; ?></p>
                    <p class="card-text"><?= $produk['deskripsi']; ?></p>
                    <a href="<?= base_url(); ?>produk" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>

</div>
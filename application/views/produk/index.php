<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <h3>Daftar Produk</h3>
            <ul class="list-group">
                <?php foreach ($produk as $prk) : ?>
                    <li class="list-group-item"><?= $prk['nama']; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>
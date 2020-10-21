<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">
            <?php if ($this->session->flashdata('flash')) : ?>
                <div class="alert alert-success" role="alert">
                Data Produk berhasil <strong><?= $this->session->flashdata('flash'); ?></strong>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <a class="btn btn-primary" href="<?= base_url(); ?>produk/tambah">Tambah Data Produk</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <form action="" method="POST">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Masukkan kata pencarian..." name="katacari">
                <button class="btn btn-primary" type="submit">Cari</button>
            </div>
            </form>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <h3>Daftar Produk</h3>
            <?php if (empty($produk)) : ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">data yang kamu cari
                    <strong>tidak Ditemukan!</strong>.
                    <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>
            <ul class="list-group">
                <?php foreach ($produk as $prk) : ?>
                    <li class="list-group-item"><?= $prk['nama']; ?>
                        <a href="<?= base_url(); ?>produk/hapus/<?= $prk['id']; ?>" class="float-right badge bg-danger" onclick="return confirm('Apakah anda yakin?');">Hapus</a>
                        <a href="<?= base_url(); ?>produk/ubah/<?= $prk['id']; ?>" class="float-right badge bg-primary">Ubah</a>
                        <a href="<?= base_url(); ?>produk/detail/<?= $prk['id']; ?>" class="float-right badge bg-success">Detail</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>
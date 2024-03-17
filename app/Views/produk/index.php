<?= $this->extend('/layout/template'); ?>

<?= $this->section('content'); ?>

<section>
    
    <div class="row">
    <?php foreach ($produk as $barang) : ?>
        <div class="col-3">
            <div class="card" style="width: 18rem;">
                <img src="/assets/images/<?= $barang['sampul']; ?>" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title"><?= $barang['nm_produk']; ?></h5>
                    <p class="card-text"><?= $barang['deskripsi']; ?></p>
                    <h4 class="card-text">Rp <?= number_format($barang['harga'],2); ?></h4>
                    <a href="/produk/detail/<?= $barang['id'] ; ?>" class="btn btn-primary">Detail</a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
   
</section>

<?= $this->endSection(); ?>
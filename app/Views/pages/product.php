<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
    <!-- Isi Konten -->
    <div class="container">
        <div class="row my-5 text-center">
            <h1>OUR PRODUCTS</h1>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <form action="" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Cari product yang diinginkan..." name="keyword">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="submit" name="submit">Cari</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card-group">
                    <?php foreach ($products as $p) : ?>
                        <div class="card">
                            <img src="/img/product/5.jfif" class="card-img-top" alt="...">
                            <div class="card-body">
                            <h5 class="card-title"><?= $p['product']; ?></h5>
                            <p class="card-text"><?= $p['desc']; ?></p>
                            </div>
                            <div class="card-footer text-center">
                            <small class="text-muted">Buy now <br><?= $p['price']; ?></small>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <?= $pager->links('products','personal_pagination'); ?>
            </div>
        </div>
    </div>

<?= $this->endSection(); ?>
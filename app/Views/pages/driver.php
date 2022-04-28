<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

    <!-- Start of Content -->
    <div class="container">
        <!-- Searching Feature -->
        <div class="row mb-5 mt-2">
            <h1>Daftar Drivers</h1>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <form action="" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Masukkan keyword pencarian..." name="keyword">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="submit" name="submit">Cari</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Table Content-->
        <div class="row">
            <div class="col">
                <table class="table table-hover">
                    <thead class="header">
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Product Type</th>
                        <th scope="col">Product Series</th>
                        <th scope="col">Product</th>
                        <th scope="col">Operating System</th>
                        <th scope="col">Download Type</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1 + (5 * ($currentPage - 1)); ?>
                        <?php foreach ($drivers as $d) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $d['type']; ?></td>
                            <td><?= $d['series']; ?></td>
                            <td><?= $d['product']; ?></td>
                            <td><?= $d['os']; ?></td>
                            <td><?= $d['download']; ?></td>
                            <td><?= $this->include('features/tooglerbtn'); ?></td>
                        </tr>
                        <?php endforeach; ?>
                        <tr>
                            <div class="collapse" id="collapseExample">
                                <div class="card card-body">
                                Some placeholder content for the collapse component. This panel is hidden by        default but revealed when the user activates the relevant trigger.
                                </div>
                            </div>
                        </tr>
                    </tbody>
                </table>

                <?= $pager->links('drivers','personal_pagination'); ?>
            </div>
        </div>
    </div>
    <!-- End of Content -->


<?= $this->endSection(); ?>
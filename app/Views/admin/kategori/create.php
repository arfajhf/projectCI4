<?= $this->extend('layout/head') ?>
<?= $this->section('content') ?>


<section class="section">
    <div class="row justify-content-center">
        <div class="col-lg-6">

            <div class="card">
                <div class="card-body">
                    <?php if (session()->getFlashdata('success')): ?>
                        <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
                    <?php endif; ?>

                    <?php if (session()->getFlashdata('error')): ?>
                        <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
                    <?php endif; ?>
                    <h5 class="card-title">Tambah Kategori</h5>

                    <!-- General Form Elements -->
                    <form action="/kategori/store" method="post">
                        <?= csrf_field(); ?>
                        <div class="row mb-3">
                            <label for="inputText" class="col-form-label form-label">Nama Dokumen</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="name" placeholder="Masukan Nama Dokumen">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputNumber" class="form-label col-form-label">Kategori</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="category" placeholder="Masuka Kategori">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputNumber" class="form-label col-form-label">Persyaratan</label>
                            <div class="col-sm-10">
                                <textarea id="requirements" name="requirements" rows="4" class="form-control" required></textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Tambah</button>
                            </div>
                        </div>

                    </form><!-- End General Form Elements -->

                </div>
            </div>

        </div>
    </div>
</section>


<?= $this->endSection() ?>
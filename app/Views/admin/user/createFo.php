<?= $this->extend('layout/head') ?>
<?= $this->section('content') ?>
<div class="card">
    <div class="card-body">
        <?php if (session()->getFlashdata('errors')): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php foreach (session()->getFlashdata('errors') as $error): ?>
                        <li><?= esc($error) ?></li>
                    <?php endforeach ?>
                </ul>
            </div>
        <?php endif; ?>
        <h5 class="card-title">Tambah Front Office</h5>

        <!-- Vertical Form -->
        <form class="row g-3" action="/admin/store" method="post">
            <?= csrf_field(); ?>
            <div class="col-12">
                <label for="inputNanme4" class="form-label">Nama</label>
                <input type="text" class="form-control" id="inputNanme4" name="nama">
            </div>
            <div class="col-12">
                <label for="inputEmail4" class="form-label">Email</label>
                <input type="email" class="form-control" id="inputEmail4" name="email">
            </div>
            <div class="col-12">
                <label for="inputPassword4" class="form-label">Password</label>
                <input type="password" class="form-control" id="inputPassword4" name="password">
            </div>
            <div class="col-12">
                <label for="inputAddress" class="form-label">No Handphone</label>
                <input type="text" class="form-control" id="inputAddress" name="no_hp">
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a type="reset" href="/admin" class="btn btn-secondary">Kembali</a>
            </div>
        </form><!-- Vertical Form -->

    </div>
</div>
<?= $this->endSection() ?>
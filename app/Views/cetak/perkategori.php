<?= $this->extend('layout/head') ?>
<?= $this->section('content') ?>
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <?php

                use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

                if (session()->getFlashdata('errors')): ?>
                    <div class="alert alert-danger">
                        <ul>
                            <?php foreach (session()->getFlashdata('errors') as $error): ?>
                                <li><?= esc($error) ?></li>
                            <?php endforeach ?>
                        </ul>
                    </div>
                <?php endif; ?>
                <h5 class="card-title">Cetak Pengajuan Perstatus</h5>

                <!-- Vertical Form -->
                <form class="row g-3" action="<?= base_url() ?>cetak/perkategori" method="post" target="_blank">
                    <?= csrf_field(); ?>
                    <div class="col-12">
                        <label for="tanggal" class="form-label">Pilih Status</label>
                        <select name="document_id" id="document_id" class="form-control" required>
                            <option value="">Pilih Status</option>
                            <option value="pending">ditolak</option>
                            <option value="process">process</option>
                            <option value="accepte">accept</option>
                            <option value="completed">completed</option>
                        </select>
                    </div>
                    <div class="text-start">
                        <button type="submit" class="btn btn-primary">Cetak</button>
                        <a type="reset" href="<?php base_url() ?>/dashboard" class="btn btn-secondary">Kembali</a>
                    </div>
                </form><!-- Vertical Form -->

            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
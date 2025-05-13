<?= $this->extend('layout/head') ?>
<?= $this->section('content') ?>
<!-- Recent Sales -->
<div class="col-12">
    <div class="card recent-sales overflow-auto">

        <div class="card-body">
            <h5 class="card-title">Data Kategori</h5>
            <?php if (session()->get('role') == 'admin'): ?>
                <a href="/kategori/create" class="btn btn-outline-primary">Tambah Kategori</a>
            <?php endif ?>

            <div class="responsive-table">
                <table class="table table-borderless datatable">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Persyaratan</th>
                            <th scope="col" class="text-center">Aksi</th>
                            <!-- <th scope="col">Action</th> -->
                        </tr>
                    </thead>

                    <?php
                    $no = 1;
                    ?>

                    <tbody>
                        <?php $no = 1;
                        foreach ($documents as $document): ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= esc($document['name']) ?></td>
                                <td><?= esc($document['category']) ?></td>
                                <td>
                                    <?php
                                    $requirements = json_decode($document['requirements'], true);
                                    if (!empty($requirements)): ?>
                                        <ul>
                                            <?php foreach ($requirements as $req): ?>
                                                <li><?= esc($req) ?></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    <?php else: ?>
                                        <span class="text-muted">Tidak ada persyaratan</span>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <form action="<?php base_url() ?>/kategori/delete/<?= $document['id'] ?>" method="post"
                                        class="form-basic d-inline">
                                        <?= csrf_field(); ?>
                                        <button type="submit" class="btn btn-danger"
                                            onclick="return confirm('Apa anda yakin ingin menghapus data ini?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

        </div>

    </div>
</div><!-- End Recent Sales -->
<?= $this->endSection() ?>
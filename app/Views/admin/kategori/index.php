<?= $this->extend('layout/head') ?>
<?= $this->section('content') ?>
<!-- Recent Sales -->
<div class="col-12">
    <div class="card recent-sales overflow-auto">

        <div class="card-body">
            <h5 class="card-title">Data Penduduk</h5>

            <div class="responsive-table">
                <table class="table table-borderless datatable">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Persyaratan</th>
                            <th scope="col" class="text-center">Action</th>
                            <!-- <th scope="col">Action</th> -->
                        </tr>
                    </thead>

                    <?php
                    $no = 1;
                    ?>

                    <tbody>
                        <?php if (!empty($data)) : ?>
                            <?php $no = 1;
                            foreach ($data as $datas) : ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= esc($datas['name']) ?></td>
                                    <td><?= esc($datas['category']) ?></td> <!-- Pakai [''] -->
                                    <td><?= esc($datas['requirement']) ?></td>
                                    <td class="text-center">
                                        <a href="/kategori/delete/<?= esc($datas['id']) ?>" class="btn btn-danger">Hapus</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <tr>
                                <td colspan="6" class="text-center"><span>Data Tidak Ditemukan</span></td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>

        </div>

    </div>
</div><!-- End Recent Sales -->
<?= $this->endSection() ?>
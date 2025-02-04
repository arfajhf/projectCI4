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
                            <th scope="col">NIK</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">No Telepon</th>
                            <th scope="col" class="text-center">Action</th>
                            <!-- <th scope="col">Action</th> -->
                        </tr>
                    </thead>

                    <?php
                    $no = 1;
                    ?>

                    <tbody>
                        <?php if (!empty($data)) : ?>
                            <?php foreach ($data as $user) : ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= esc($user['identity_number']) ?></td>
                                    <td><?= esc($user['name']) ?></td>
                                    <td><?= esc($user['email']) ?></td>
                                    <td><?= esc($user['phone']) ?></td>   
                                    <td class="text-center">
                                        <a href="/admin/penduduk/delete/<?= esc($user['id']) ?>" class="btn btn-danger">Hapus</a>
                                        <a href="/admin/penduduk/detail/<?= esc($user['id']) ?>" class="btn btn-info">Detail</a>
                                    </td>
                                </tr>

                            <?php endforeach; ?>
                        <?php else : ?>
                            <tr>
                                <td colspan="5" class="text-center"><span>Data Tidak Ditemukan</span></td>
                            </tr>
                        <?php endif;  ?>
                    </tbody>
                </table>
            </div>

        </div>

    </div>
</div><!-- End Recent Sales -->
<?= $this->endSection() ?>
<?= $this->extend('layout/head') ?>
<?= $this->section('content') ?>
<!-- Recent Sales -->
<div class="col-12">
    <div class="card recent-sales overflow-auto">

        <div class="card-body">
            <h5 class="card-title">Data Pengguna</h5>

            <a href="/admin/penduduk/create" class="btn btn-success">Tambah FO</a>

            <div class="responsive-table">
                <table class="table table-borderless datatable">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">No Telepon</th>
                            <th scope="col">Level</th>
                            <th scope="col" class="text-center">Action</th>
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
                                    <td><?= esc($user['name']) ?></td>
                                    <td><?= esc($user['email']) ?></td>
                                    <td><?= esc($user['phone']) ?></td>
                                    <td><?= esc($user['role']) ?></td>
                                    <td class="text-center">
                                        <a href="/admin/penduduk/delete/<?= esc($user['id']) ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')"
                                            <?php if ($user['role'] == 'admin') : ?>
                                            hidden  
                                            <?php endif; ?>>
                                            Hapus
                                        </a>
                                        <a href="/admin/penduduk/detail/<?= esc($user['id']) ?>" class="btn btn-info" disabled>Detail</a>
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
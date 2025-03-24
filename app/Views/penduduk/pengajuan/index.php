<?= $this->extend('layout/head') ?>
<?= $this->section('content') ?>
<!-- Recent Sales -->
<div class="col-12">
    <div class="card recent-sales overflow-auto">

        <div class="card-body">
            <h5 class="card-title">Data Pengajuan</h5>

            <div class="responsive-table">
                <table class="table table-borderless datatable">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Tanggal Pengajuan</th>
                            <th scope="col">Nomor Antrian</th>
                            <th scope="col">Status</th>
                            <?php
                            if (session()->get('role') == 'front_office'):
                            ?>
                                <th scope="col">Action</th>
                            <?php
                            endif;
                            ?>
                        </tr>
                    </thead>

                    <?php
                    $no = 1;
                    ?>

                    <tbody>
                        <?php if (!empty($pengajuan)) : ?>
                            <?php foreach ($pengajuan as $pengaju) : ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= esc($pengaju['document_category']) ?></td>
                                    <td><?= esc(date('d-m-Y H:i', strtotime($pengaju['created_at']))) ?></td>
                                    <td><?= esc($pengaju['queue']) ?></td>
                                    <td>
                                        <span class="badge 
                                        <?php if (esc($pengaju['status']) == 'process') {
                                            echo 'bg-danger';
                                        } elseif (esc($pengaju['status']) == 'accepte') {
                                            echo 'bg-warning';
                                        } elseif (esc($pengaju['status']) == 'completed') {
                                            echo 'bg-success';
                                        }
                                        ?>">
                                            <?= esc($pengaju['status']) ?>
                                        </span>
                                    </td>
                                    <td>
                                        <?php
                                        if (session()->get('role') == 'front_office'):
                                        ?>
                                            <a href="<?= base_url() ?>pengajuan/view/<?= esc($pengaju['id']) ?>" class="btn btn-info" disabled>Detail</a>
                                        <?php
                                        endif;
                                        ?>
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
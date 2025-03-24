<?= $this->extend('layout/head') ?>
<?= $this->section('content') ?>
<div class="pagetitle">
    <div class="row justify-content-center">
        <div class="col-md-5 col-xl-5">
            <h1>Detail Pengajuan <?= esc($pengajuan['admin_name']) ?></h1>
        </div>
    </div>
</div><!-- End Page Title -->

<section class="section profile">
    <div class="row justify-content-center">

        <div class="col-xl-7 col-md-7">
            <div class="card">
                <div class="card-body pt-3">
                    <div class="tab-content pt-2">

                        <div class="tab-pane fade show active profile-overview" id="profile-overview">
                            <h5 class="card-title">Detail Pengaju</h5>
                            <div class="row justify-content-center">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label ">Nama</div>
                                        <div class="col-lg-9 col-md-8"><?= esc($pengajuan['admin_name']) ?></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Email</div>
                                        <div class="col-lg-9 col-md-8"><?= esc($pengajuan['admin_email']) ?></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">NIK</div>
                                        <div class="col-lg-9 col-md-8"><?= esc($pengajuan['identity_number']) ?></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Tempat, Tanggal lahir</div>
                                        <div class="col-lg-9 col-md-8"><?= esc($pengajuan['place_of_birth']) ?> <?= esc($pengajuan['date_of_birth']) ?></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Kewarganegaraan</div>
                                        <div class="col-lg-9 col-md-8"><?= esc($pengajuan['nationality']) ?></div>
                                    </div>
                                </div>
                                <!-- <div class="col-md-6">

                                </div> -->

                            </div>
                            <div class="col-md-6">
                                <a href="javascript:history.back();" class="btn btn-outline-primary">Kembali</a>
                            </div>


                        </div>

                    </div><!-- End Bordered Tabs -->

                </div>
            </div>

        </div>
        <div class="col-md-5 col-xl-5">
            <div class="card">
                <div class="card-body pt-3">
                    <div class="tab-content pt-2">
                        <div class="tab-pane fade show active profile-overview" id="profile-overview">
                            <h5 class="card-title">Pengajuan Details</h5>
                            <div class="row justify-content-center">
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Kategori</div>
                                    <div class="col-lg-9 col-md-8"><?= esc($pengajuan['document_category']) ?></div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Persyaratan</div>
                                    <div class="col-lg-9 col-md-8">
                                        <?php if (!empty($pengajuan['requirements'])) : ?>
                                            <?php foreach ($pengajuan['requirements'] as $requirement) : ?>
                                                <span><i class="bi bi-check-square-fill text-success"></i><?= esc($requirement) ?></span><br>
                                            <?php endforeach; ?>
                                        <?php else : ?>
                                            Tidak ada persyaratan
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Nomon Antrian</div>
                                    <div class="col-lg-9 col-md-8"> <?= esc($pengajuan['queue']) ?></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <form action="<?= base_url() ?>pengajuan/accept/<?= esc($pengajuan['id']) ?>" method="post"
                                    class="form-basic d-inline">
                                    <?= csrf_field(); ?>
                                    <button type="submit" class="btn  
                                    <?php if (esc($pengajuan['status']) == 'process') {
                                        echo 'btn-outline-warning';
                                    } elseif (esc($pengajuan['status']) == 'accepte') {
                                        echo 'btn-outline-success';
                                    }
                                    ?>"
                                        onclick="return confirm('Apa anda yakin ingin mengubah data ini?')">
                                        <?php if (esc($pengajuan['status']) == 'process') {
                                            echo 'Accept';
                                        } elseif (esc($pengajuan['status']) == 'accepte') {
                                            echo 'Completed';
                                        }
                                        ?>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>
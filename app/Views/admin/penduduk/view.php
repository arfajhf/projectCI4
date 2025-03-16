<?= $this->extend('layout/head') ?>
<?= $this->section('content') ?>

<div class="pagetitle">
    <h1>Profile</h1>
</div><!-- End Page Title -->

<section class="section profile">
    <div class="row justify-content-center">

        <div class="col-xl-12 col-md-12">

            <div class="card">
                <div class="card-body pt-3">
                    <div class="tab-content pt-2">

                        <div class="tab-pane fade show active profile-overview" id="profile-overview">
                            <h5 class="card-title">Profile Details</h5>
                            <div class="row justify-content-center">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label ">Nama</div>
                                        <div class="col-lg-9 col-md-8"><?= esc($user['name']) ?></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Email</div>
                                        <div class="col-lg-9 col-md-8"><?= esc($user['email']) ?></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Tempat, Tanggal Lahir</div>
                                        <div class="col-lg-9 col-md-8">
                                            <?= esc($user['place_of_birth']) ?>,
                                            <?= date('d F Y', strtotime($user['date_of_birth'])) ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Status Pernikahan</div>
                                        <div class="col-lg-9 col-md-8">
                                            <?php
                                            if ($user['marital_status'] == 0) {
                                                echo 'Belum Kawin';
                                            } elseif ($user['marital_status'] == 1) {
                                                echo 'Sudah Kawin';
                                            }
                                            ?>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">No Handphone</div>
                                        <div class="col-lg-9 col-md-8">
                                            <?= esc($user['phone']) ?>,
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Alamat</div>
                                        <div class="col-lg-9 col-md-8"><?= esc($user['addres']) ?></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">NIK</div>
                                        <div class="col-lg-9 col-md-8"><?= esc($user['identity_number']) ?></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Agama</div>
                                        <div class="col-lg-9 col-md-8"><?= esc($user['religion']) ?></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Pekerjaan</div>
                                        <div class="col-lg-9 col-md-8"><?= esc($user['job']) ?></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Kewarganegaraan</div>
                                        <div class="col-lg-9 col-md-8"><?= esc($user['nationality']) ?></div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Golongan Darah</div>
                                        <div class="col-lg-9 col-md-8"><?= esc($user['blood_type']) ?></div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <a href="javascript:history.back();" class="btn btn-outline-primary">Kembali</a>
                            </div>


                        </div>

                    </div><!-- End Bordered Tabs -->

                </div>
            </div>

        </div>
    </div>
</section>
<?= $this->endSection() ?>
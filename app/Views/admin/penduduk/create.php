<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Registrasi Disdukcapil</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url() ?>assets/img/favicon.png" rel="icon">
    <link href="<?= base_url() ?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url() ?>assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <main>
        <div class="container">

            <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-md-8 d-flex flex-column align-items-center justify-content-center">

                            <div class="card mb-3">

                                <div class="card-body">

                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">Daftarkan Akun Anda</h5>
                                        <p class="text-center small">Mohon Isi Data Dengan Baik Dan Benar</p>
                                    </div>

                                    <form class="row g-3 needs-validation" action="/regis" method="POST">
                                        <?= csrf_field(); ?>
                                        <?php if (session()->getFlashdata('error')): ?>
                                            <div class="alert alert-danger">
                                                <?= session()->getFlashdata('error') ?>
                                            </div>
                                        <?php endif; ?>

                                        <div class="row g-3 justify-content-center">
                                            <div class="col-md-6">
                                                <div class="row g-3">
                                                    <div class="col-12">
                                                        <label for="yourEmail" class="form-label">Nama</label>
                                                        <div class="input-group has-validation">
                                                            <input type="text" name="name" class="form-control" id="yourEmail" required>
                                                            <div class="invalid-feedback">Please enter your Nama.</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <label for="yourEmail" class="form-label">Email</label>
                                                        <div class="input-group has-validation">
                                                            <input type="email" name="email" class="form-control" id="yourEmail" required>
                                                            <div class="invalid-feedback">Please enter your Email.</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <label for="yourEmail" class="form-label">No Handphone</label>
                                                        <div class="input-group has-validation">
                                                            <input type="text" name="phone" class="form-control" id="yourEmail" required>
                                                            <div class="invalid-feedback">Please enter your No Handphone.</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <label for="yourEmail" class="form-label">Agama</label>
                                                        <div class="input-group has-validation">
                                                            <select name="agama" class="form-control">
                                                                <option selected disabled>Pilih Agama</option>
                                                                <option value="Islam">Islam</option>
                                                                <option value="Kristen">Kristen</option>
                                                                <option value="Budha">Budha</option>
                                                                <option value="Hindu">Hindu</option>
                                                                <option value="Konghucu">Konghucu</option>
                                                            </select>
                                                            <div class="invalid-feedback">Please enter your Agama.</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <label for="yourEmail" class="form-label">Pekerjaan</label>
                                                        <div class="input-group has-validation">
                                                            <input type="text" name="pekerjaan" class="form-control" id="yourEmail" required>
                                                            <div class="invalid-feedback">Please enter your Pekerjaan.</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <label for="yourEmail" class="form-label">Golongan Darah</label>
                                                        <div class="input-group has-validation">
                                                            <input type="text" name="goldar" class="form-control" id="yourEmail" required placeholder="Isi dengan strip (-) jika tidak tahu">
                                                            <div class="invalid-feedback">Please enter your Golongan Darah.</div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row g-3">
                                                    <div class="col-12">
                                                        <label for="yourEmail" class="form-label">NIK</label>
                                                        <div class="input-group has-validation">
                                                            <input type="text" name="nik" class="form-control" id="yourEmail" required>
                                                            <div class="invalid-feedback">Please enter your NIK.</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <label for="yourEmail" class="form-label">Tempat Lahir</label>
                                                        <div class="input-group has-validation">
                                                            <input type="text" name="tempatlahir" class="form-control" id="yourEmail" required>
                                                            <div class="invalid-feedback">Please enter your Tempat Lahir.</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <label for="yourEmail" class="form-label">Tanggal Lahir</label>
                                                        <div class="input-group has-validation">
                                                            <input type="date" name="tanggallahir" class="form-control" id="yourEmail" required>
                                                            <div class="invalid-feedback">Please enter your Tanggal Lahir.</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <label for="yourEmail" class="form-label">Status Pernikahan</label>
                                                        <div class="input-group has-validation">
                                                            <select name="nikah" class="form-control">
                                                                <option selected disabled>Pilih Status Pernikahan</option>
                                                                <option value="0">Belum Nikah</option>
                                                                <option value="1">Sudah Nikah</option>
                                                            </select>
                                                            <div class="invalid-feedback">Please enter your Agama.</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <label for="yourEmail" class="form-label">Kewarganegaraan</label>
                                                        <div class="input-group has-validation">
                                                            <select name="kewarganegaraan" class="form-control">
                                                                <option selected disabled>Pilih Kewarganegaraan</option>
                                                                <option value="WNI">WNI</option>
                                                                <option value="WNA">WNA</option>
                                                            </select>
                                                            <div class="invalid-feedback">Please enter your Kewarganegaraan.</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <label for="yourPassword" class="form-label">Password</label>
                                                        <input type="password" name="password" class="form-control" id="yourPassword" required>
                                                        <div class="invalid-feedback">Please enter your password!</div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <label for="yourPassword" class="form-label">Alamat</label>
                                                <textarea name="alamat" class="form-control"></textarea>
                                                <div class="invalid-feedback">Please enter your password!</div>
                                            </div>

                                            <div class="col-6">
                                                <button class="btn btn-primary w-100" type="submit">Registrasi</button>
                                            </div>
                                            <div class="col-12">
                                                <p class="small mb-0">Belum punya akun? <a href="pages-register.html">Sign Up</a></p>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>

                            <div class="credits">
                                Designed by <a href="https://bootstrapmade.com/">ArFaj Corporate</a>
                            </div>

                        </div>
                    </div>
                </div>

            </section>

        </div>
    </main><!-- End #main -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?= base_url() ?>assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="<?= base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>assets/vendor/chart.js/chart.umd.js"></script>
    <script src="<?= base_url() ?>assets/vendor/echarts/echarts.min.js"></script>
    <script src="<?= base_url() ?>assets/vendor/quill/quill.js"></script>
    <script src="<?= base_url() ?>assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="<?= base_url() ?>assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="<?= base_url() ?>assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url() ?>assets/js/main.js"></script>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>DisdukCapil</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="<?= base_url() ?>asset/img/logo.png" rel="icon">
    <link href="<?= base_url() ?>asset/img/logo.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url() ?>asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>asset/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url() ?>asset/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?= base_url() ?>asset/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>asset/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="<?= base_url() ?>asset/css/main.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: FlexStart
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Updated: Nov 01 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">

            <a href="/" class="logo d-flex align-items-center me-auto">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img src="<?= base_url() ?>asset/img/logo.png" alt="">
                <h1 class="sitename">Disdukcapil</h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="<?= base_url() ?>#home">Home<br></a></li>
                    <li><a href="<?= base_url() ?>#about">About</a></li>
                    <li><a href="<?= base_url() ?>#layanan">Layanan</a></li>
                    <li><a href="<?= base_url() ?>#contact">Contact</a></li>
                    <li><a href="<?= base_url() ?>kuisioner" class="active">Kuesioner</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            <a class="btn-getstarted flex-md-shrink-0" href="/login">Log In</a>

        </div>
    </header>

    <main class="main">

        <!-- Hero Section -->
        <section id="home" class="hero section">

            <div class="container">
                <div class="row justify-content-center">
                    <form action="<?= base_url() ?>kuisioner/store" method="post" class="row g-2">
                        <?= csrf_field(); ?>
                        <div class="card">
                            <div class="card-body">
                                <div class="row justify-content-center align-items-center">
                                    <div class="col-md-6 text-center">
                                        <h3>Kuisioner </h3>
                                    </div>
                                </div>
                                <div class="row justify-content-around">
                                    <div class="col-md-4">
                                        <div class="row g-3">
                                            <div class="col-12">
                                                <label for="" class="form-label">Layanan</label>
                                                <input type="text" name="layanan" class="form-control" placeholder="Masukan layanan yang diterima">
                                            </div>
                                            <div class="col-12">
                                                <label for="" class="form-label">Usia</label>
                                                <input type="text" name="usia" class="form-control" placeholder="Masukan Usia anda">
                                            </div>
                                            <div class="col-12">
                                                <label for="" class="form-label">Pekerjaan</label>
                                                <select name="pekerjaan" id="" class="form-control">
                                                    <option selected disabled>Pilih Pekerjaan</option>
                                                    <option value="PNS">PNS</option>
                                                    <option value="TNI">TNI</option>
                                                    <option value="Polri">Polri</option>
                                                    <option value="Swasta">Swasta</option>
                                                    <option value="Wiraswasta">Wiraswasta</option>
                                                    <option value="Lainnya">Lainnya</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="row g-3">
                                            <div class="col-12">
                                                <label for="" class="form-label">Jenis Kelamin</label>
                                                <select name="jeniskelamin" id="" class="form-control">
                                                    <option selected disabled>Pilih Jenis Kelamin</option>
                                                    <option value="laki-laki">Laki-laki</option>
                                                    <option value="perempuan">Perempuan</option>
                                                </select>
                                            </div>
                                            <div class="col-12">
                                                <label for="" class="form-label">Pendidikan</label>
                                                <select name="pendidikan" id="" class="form-control">
                                                    <option selected disabled>Pilih Pendidikan</option>
                                                    <option value="SD">SD</option>
                                                    <option value="SMP">SMP</option>
                                                    <option value="SMA">SMA</option>
                                                    <option value="S1">S1</option>
                                                    <option value="S2">S2</option>
                                                    <option value="S3">S3</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <div class="row justify-content-center">
                                    <div class="col-md-6">
                                        <?php if (!empty($data1)) : ?>
                                            <?php $no = 1;
                                            foreach ($data1 as $nomor => $row1) :
                                                $index = $no;
                                                // echo "Index: $index <br>";
                                            ?>
                                                <p><strong><?= $no++ . '. ' . esc($row1['pertanyaan']) ?></strong></p>

                                                <?php for ($i = 1; $i <= 4; $i++) : ?>
                                                    <div>
                                                        <input type="radio" name="jawaban[<?= $index ?>]" id="option<?= $index . $i ?>" value="<?= $i ?>" required>
                                                        <label for="option<?= $index . $i ?>" class="form-label"><?= esc($row1["pilihan$i"]) ?></label>
                                                    </div>
                                                <?php endfor; ?>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </div>
                                    <div class="col-md-6">
                                        <?php if (!empty($data2)) : ?>
                                            <?php
                                            $nom = 6;
                                            foreach ($data2 as $no => $row2) :
                                                $awal = $nom;
                                                // echo "Index: $awal <br>";
                                            ?>
                                                <p><strong><?= $nom++ . '. ' . esc($row2['pertanyaan']) ?></strong></p>

                                                <?php for ($j = 1; $j <= 4; $j++) : ?>
                                                    <div>
                                                        <input type="radio" name="jawaban[<?= $awal ?>]" id="option<?= $awal . $j ?>" value="<?= $j ?>" required>
                                                        <label for="option<?= $awal . $j ?>" class="form-label"><?= esc($row2["pilihan$j"]) ?></label>
                                                    </div>
                                                <?php endfor; ?>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </div>
                                    <div class="text-start col-12 g-3">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </section>

    </main>

    <footer id="footer" class="footer">

        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6 footer-about">
                    <a href="/" class="d-flex align-items-center">
                        <span class="sitename">Disdukcapil</span>
                    </a>
                    <div class="footer-contact pt-3">
                        <p>Disdukcapil Kabupaten Tasikmalaya</p>
                        <p>Jl. Kami Satu No.03 Dsa. Suka Kamu Kec. Suka Dia Kab. Tasikmalaya Prov. Jawabarat 482767</p>
                        <p class="mt-3"><strong>Phone:</strong> <span>+62-812-3456-7890</span></p>
                        <p><strong>Email:</strong> <span>disdukkabtasik@example.com</span></p>
                    </div>
                </div>

                <div class="col-lg-2 col-md-3 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <a href="#home">Home</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#about">About us</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#layanan">Layanan</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#contact">Contact</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-12">
                    <h4>Follow Us</h4>
                    <p>Ikuti kami lewat sosial media di bawah ini!</p>
                    <div class="social-links d-flex">
                        <a href=""><i class="bi bi-twitter-x"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

            </div>
        </div>

        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">ArFaj</strong> <span>Made With Love</span></p>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you've purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
                Designed by <a href="/">ArFaj Corporat</a>
            </div>
        </div>

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?= base_url() ?>asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>asset/vendor/php-email-form/validate.js"></script>
    <script src="<?= base_url() ?>asset/vendor/aos/aos.js"></script>
    <script src="<?= base_url() ?>asset/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?= base_url() ?>asset/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="<?= base_url() ?>asset/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="<?= base_url() ?>asset/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?= base_url() ?>asset/vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Main JS File -->
    <script src="<?= base_url() ?>asset/js/main.js"></script>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>DisdukCapil</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="<?= base_url() ?>asset/img/favicon.png" rel="icon">
    <link href="<?= base_url() ?>asset/img/apple-touch-icon.png" rel="apple-touch-icon">

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
                    <li><a href="#home" class="active">Home<br></a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#layanan">Layanan</a></li>
                    <li><a href="#layanan">Kuesioner</a></li>
                    <li><a href="#contact">Contact</a></li>
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
                <div class="row gy-4">
                    <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                        <h1 data-aos="fade-up">Layanan Adminduk diujung Jari Anda</h1>
                        <p data-aos="fade-up" data-aos-delay="100">Dapatkan dokumen kependudukan dengan mudah dan cepat tanpa antri.</p>
                        <div class="d-flex flex-column flex-md-row" data-aos="fade-up" data-aos-delay="200">
                            <a href="/login" class="btn-get-started">Ajukan Sekarang! <i class="bi bi-arrow-right"></i></a>
                            <!-- <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox btn-watch-video d-flex align-items-center justify-content-center ms-0 ms-md-4 mt-4 mt-md-0"><i class="bi bi-play-circle"></i><span>Watch Video</span></a> -->
                        </div>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out">
                        <img src="<?= base_url() ?>asset/img/hero-img.png" class="img-fluid animated" alt="">
                    </div>
                </div>
            </div>

        </section><!-- /Hero Section -->

        <!-- About Section -->
        <section id="about" class="about section">

            <div class="container" data-aos="fade-up">
                <div class="row gx-0">

                    <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                        <div class="content">
                            <h3>About</h3>
                            <h2>Disdukcapi Kabupaten Tasikmalaya.</h2>
                            <p>
                                Dinas Kependudukan dan Pencatatan Sipil (Disdukcapil) Kabupaten Tasikmalaya berkomitmen untuk memberikan pelayanan terbaik bagi masyarakat dalam hal administrasi kependudukan. Kami hadir untuk memudahkan Anda dalam mengurus segala kebutuhan dokumen kependudukan.
                            </p>
                            <div class="text-center text-lg-start">
                                <a href="/login" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                                    <span>Ajukan Sekarang</span>
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
                        <img src="<?= base_url() ?>asset/img/about.jpg" class="img-fluid" alt="">
                    </div>

                </div>
            </div>

        </section><!-- /About Section -->

        <!-- Values Section -->
        <section id="layanan" class="values section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Layanan </h2>
                <p>Layanan<br></p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="card">
                            <img src="<?= base_url() ?>asset/img/ktp.png" class="img-fluid" alt="">
                            <h3>KTP-el</h3>
                            <p><b>Persyaratan:</b><br>-Berusia 17 Tahun <br> -Fotocopy KK</p>
                        </div>
                    </div><!-- End Card Item -->

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="card">
                            <img src="<?= base_url() ?>asset/img/kk.png" class="img-fluid" alt="">
                            <h3>Kartu Keluarga</h3>
                            <p><b>Persyaratan:</b><br>-Pengantar RT/RW <br> -Surat Keterangan Lahir <br> -Fotocopy Ijazah <br>-Dll</p>
                        </div>
                    </div><!-- End Card Item -->

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="card">
                            <img src="<?= base_url() ?>asset/img/values-3.png" class="img-fluid" alt="">
                            <h3>Akta Kelahiran</h3>
                            <p><b>Persyaratan:</b><br>-Surat Keterangan Lahir<br> -Fotocopy Buku Nikah <br> -Fotocopy Kartu Keluarga <br>-Dll</p>
                        </div>
                    </div><!-- End Card Item -->

                </div>

            </div>

        </section><!-- /Values Section -->

        <!-- Contact Section -->
        <section id="contact" class="contact section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Contact</h2>
                <p>Contact Us</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">

                    <div class="col-lg-6">

                        <div class="row gy-4">
                            <div class="col-md-6">
                                <div class="info-item" data-aos="fade" data-aos-delay="200">
                                    <i class="bi bi-geo-alt"></i>
                                    <h3>Address</h3>
                                    <!-- <p>Disdukcapil Kabupaten Tasikmalaya</p> -->
                                    <p>Jl. Kami Satu No.03 Dsa. Suka Kamu Kec. Suka Dia Kab. Tasikmalaya Prov. Jawabarat 482767</p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="col-md-6">
                                <div class="info-item" data-aos="fade" data-aos-delay="300">
                                    <i class="bi bi-telephone"></i>
                                    <h3>Call Us</h3>
                                    <p>+62-812-3456-7890</p>
                                    <p>+62-823-4567-8901</p>
                                    <p>+62-834-5678-9012</p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="col-md-6">
                                <div class="info-item" data-aos="fade" data-aos-delay="400">
                                    <i class="bi bi-envelope"></i>
                                    <h3>Email Us</h3>
                                    <p>info@example.com</p>
                                    <p>disdukkabtasik@example.com</p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="col-md-6">
                                <div class="info-item" data-aos="fade" data-aos-delay="500">
                                    <i class="bi bi-clock"></i>
                                    <h3>Open Hours</h3>
                                    <p>Senis - Jumat</p>
                                    <p>09:00 - 17:00</p>
                                </div>
                            </div><!-- End Info Item -->

                        </div>

                    </div>

                    <div class="col-lg-6">
                        <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                            <div class="row gy-4">

                                <div class="col-md-6">
                                    <input type="text" name="name" class="form-control" placeholder="Nama Kamu" required="">
                                </div>

                                <div class="col-md-6 ">
                                    <input type="email" class="form-control" name="email" placeholder="Email Kamu" required="">
                                </div>

                                <div class="col-12">
                                    <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                                </div>

                                <div class="col-12">
                                    <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                                </div>

                                <div class="col-12 text-center">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>

                                    <button type="submit">Send Message</button>
                                </div>

                            </div>
                        </form>
                    </div><!-- End Contact Form -->

                </div>

            </div>

        </section><!-- /Contact Section -->

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
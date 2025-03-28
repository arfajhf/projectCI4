<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Disdukcapil</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url() ?>asset/img/logo.png" rel="icon">
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
</head>

<body>
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="/dashboard" class="logo d-flex align-items-center">
                <img src="<?= base_url() ?>asset/img/logo.png" alt="">
                <span class="d-none d-lg-block">Disdukcapil</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item d-block d-lg-none">
                    <a class="nav-link nav-icon search-bar-toggle " href="#">
                        <i class="bi bi-search"></i>
                    </a>
                </li><!-- End Search Icon-->

                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <img src="<?= base_url() ?>assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2"><?= esc(session()->get('admin_name')) ?></span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6>Kevin Anderson</h6>
                            <span>Web Designer</span>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                <i class="bi bi-person"></i>
                                <span>My Profile</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                <i class="bi bi-gear"></i>
                                <span>Account Settings</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                                <i class="bi bi-question-circle"></i>
                                <span>Need Help?</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <!-- logout with alert -->
                        <script>
                            function logout() {
                                var result = confirm("Apakah anda ingin keluar?");
                                if (result) {
                                    window.location.href = "/logout";
                                }
                            }
                        </script>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="/logout" onclick="logout()">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Sign Out</span>
                            </a>
                        </li>

                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->
    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link " href="/dashboard">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->
            <?php
            if (session()->get('role') == 'admin'):
            ?>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="/admin">
                        <i class="bi bi-person"></i>
                        <span>Pengguna</span>
                    </a>
                </li><!-- End Profile Page Nav -->
            <?php
            endif;
            ?>
            <?php
            if (session()->get('role') == 'admin' || session()->get('role') == 'front_office'):
            ?>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="/penduduk">
                        <i class="bi bi-person"></i>
                        <span>Penduduk</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="/kategori">
                        <i class="bi bi-bookmarks-fill"></i>
                        <span>Kategori</span>
                    </a>
                </li><!-- End Profile Page Nav -->
            <?php
            endif;
            ?>

            <?php
            if (session()->get('role') == 'penduduk'):
            ?>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="<?= base_url() ?>penduduk/pengajuan/create">
                        <i class="bi bi-journal-text"></i>
                        <span>Pengajuan</span>
                    </a>
                </li><!-- End Profile Page Nav -->
            <?php
            endif;
            ?>

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-menu-button-wide"></i>
                    <?php
                    if (session()->get('role') == 'penduduk') {
                        echo "<span>Pengajuan Anda</span>";
                    } elseif (session()->get('role') == 'front_office') {
                        echo "<span>Pengajuan</span>";
                    }
                    ?>
                    <i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <!-- <li>
                        <a href="components-alerts.html">
                            <i class="bi bi-circle"></i><span>Pending</span>
                        </a>
                    </li> -->
                    <li>
                        <a href="<?= base_url() ?>penduduk/pengajuan/process">
                            <i class="bi bi-circle"></i><span>Process</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url() ?>penduduk/pengajuan/accepte">
                            <i class="bi bi-circle"></i><span>Accept</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url() ?>penduduk/pengajuan/completed">
                            <i class="bi bi-circle"></i><span>Completed</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Components Nav -->

            <!-- <li class="nav-heading">Pages</li> -->

        </ul>

    </aside><!-- End Sidebar-->

    <!-- main -->
    <main id="main" class="main">
        <?= $this->renderSection('content') ?>
    </main>
    <!-- end main -->


    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>ArFaj</span></strong>. Made With Love
        </div>
        <div class="credits">Designed by <a href="/dashboard">ArFaj Corporate</a>
        </div>
    </footer><!-- End Footer -->

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
<?= $this->extend('layout/head') ?>
<?= $this->section('content') ?>
<section class="section dashboard">
    <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
            <div class="row">

                <!-- Sales Card -->
                <div class="<?php if (session()->get('role') == 'admin'): ?>
                    col-xxl-4 col-md-4
                <?php elseif (session()->get('role') == 'front_office'): ?>
                    col-xxl-6 col-md-6
                <?php endif ?>">
                    <div class="card info-card sales-card">

                        <div class="filter">
                            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <li class="dropdown-header text-start">
                                    <h6>Filter</h6>
                                </li>

                                <li><a class="dropdown-item" href="#">Today</a></li>
                                <li><a class="dropdown-item" href="#">This Month</a></li>
                                <li><a class="dropdown-item" href="#">This Year</a></li>
                            </ul>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">Pengguna</h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-cart"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>145</h6>
                                    <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                                </div>
                            </div>
                        </div>

                    </div>
                </div><!-- End Sales Card -->
                <?php if (session()->get('role') == 'admin'): ?>
                    <div class="col-xxl-4 col-md-4">
                        <div class="card info-card sales-card">

                            <div class="filter">
                                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <li class="dropdown-header text-start">
                                        <h6>Filter</h6>
                                    </li>

                                    <li><a class="dropdown-item" href="#">Today</a></li>
                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                </ul>
                            </div>

                            <div class="card-body">
                                <h5 class="card-title">Front Office</h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-cart"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>145</h6>
                                        <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div><!-- End Sales Card -->
                <?php endif ?>
                <div class="
                <?php if (session()->get('role') == 'admin'): ?>
                    col-xxl-4 col-md-4
                <?php elseif (session()->get('role') == 'front_office'): ?>
                    col-xxl-6 col-md-6
                <?php endif ?>
                    ">
                    <div class="card info-card sales-card">

                        <div class="filter">
                            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                <li class="dropdown-header text-start">
                                    <h6>Filter</h6>
                                </li>

                                <li><a class="dropdown-item" href="#">Today</a></li>
                                <li><a class="dropdown-item" href="#">This Month</a></li>
                                <li><a class="dropdown-item" href="#">This Year</a></li>
                            </ul>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title">Pengajuan</h5>

                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-cart"></i>
                                </div>
                                <div class="ps-3">
                                    <h6>145</h6>
                                    <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                                </div>
                            </div>
                        </div>

                    </div>
                </div><!-- End Sales Card -->
            </div>
        </div>

        <?php if (session()->get('role') == 'admin'): ?>
            <canvas id="clusterChart"></canvas>


            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
            <script>
                var ctx = document.getElementById('clusterChart').getContext('2d');
                var clusterChart = new Chart(ctx, {
                    type: 'bar', // Bisa juga 'pie', 'doughnut', atau 'line'
                    data: {
                        labels: <?= json_encode(array_column($clusterData, 'cluster')) ?>,
                        datasets: [{
                            // label: 'Jumlah Responden per Cluster',
                            data: <?= json_encode(array_column($clusterData, 'jumlah')) ?>,
                            backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56'], // Warna tiap cluster
                            borderColor: '#333',
                            borderWidth: 1
                        }]
                    },
                    options: {
                        responsive: true,
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            </script><canvas id="clusterChart"></canvas>

            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
            <script>
                var ctx = document.getElementById('clusterChart').getContext('2d');
                var clusterChart = new Chart(ctx, {
                    type: 'bar', // Bisa juga 'pie', 'doughnut', atau 'line'
                    data: {
                        labels: <?= json_encode(array_column($clusterData, 'cluster')) ?>,
                        datasets: [{
                            label: 'Jumlah Responden per Cluster',
                            data: <?= json_encode(array_column($clusterData, 'jumlah')) ?>,
                            backgroundColor: [
                                '#FF6384', // Merah
                                '#36A2EB', // Biru
                                '#FFCE56', // Kuning
                                '#4BC0C0' // Hijau Tosca
                            ],
                            borderColor: '#333',
                            borderWidth: 1
                        }]
                    },
                    options: {
                        responsive: true,
                        plugins: {
                            legend: {
                                display: false // Ini buat ngilangin legend
                            }
                        },
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            </script>
        <?php endif ?>
    </div>
</section>
<?= $this->endSection() ?>
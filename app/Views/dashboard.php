<?= $this->extend('layout/head') ?>
<?= $this->section('content') ?>
<section class="section dashboard">
    <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
            <div class="row">

                <!-- Sales Card -->
                <?php if (session()->get('role') == 'admin'): ?>
                    <!-- Konten khusus untuk admin -->
                    <div class="col-xxl-4 col-md-4">
                        <div class="card info-card sales-card">
                            <div class="card-body">
                                <h5 class="card-title">Pengguna</h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-people"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6><?= $identificationData ?></h6>
                                        <span class="text-muted small pt-2 ps-1">Orang</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php elseif (session()->get('role') == 'front_office'): ?>
                    <!-- Konten khusus untuk front_office -->
                    <div class="col-xxl-4 col-md-4">
                        <div class="card info-card sales-card">
                            <div class="card-body">
                                <h5 class="card-title">Pengguna</h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-people"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6><?= $identificationData ?></h6>
                                        <span class="text-muted small pt-2 ps-1">Orang</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

                <?php if (session()->get('role') == 'admin'): ?>
                    <div class="col-xxl-4 col-md-4">
                        <div class="card info-card sales-card">

                            <div class="card-body">
                                <h5 class="card-title">Front Office</h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-person"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6><?= $adminData ?></h6>
                                        <span class="text-muted small pt-2 ps-1">Orang</span>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                <?php endif ?>
                <?php if (session()->get('role') == 'admin'): ?>
                    <div class="col-xxl-4 col-md-4">
                        <div class="card info-card sales-card">

                            <div class="card-body">
                                <h5 class="card-title">Pengajuan</h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-card-text"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6><?= $submissionData ?></h6>
                                        <span class="text-muted small pt-2 ps-1">Dokumen</span>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                <?php endif ?>

                <?php if (session()->get('role') == 'front_office'): ?>
                    <div class="col-xxl-4 col-md-4">
                        <div class="card info-card sales-card">

                            <div class="card-body">
                                <h5 class="card-title">Pengajuan Diprocess</h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-card-text"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6><?= $process ?></h6>
                                        <span class="text-muted small pt-2 ps-1">Dokumen</span>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-xxl-4 col-md-4">
                        <div class="card info-card sales-card">

                            <div class="card-body">
                                <h5 class="card-title">Pengajuan Complated</h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-card-checklist"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6><?= $completed ?></h6>
                                        <span class="text-muted small pt-2 ps-1">Dokumen</span>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                <?php endif ?>

                <?php if (session()->get('role') == 'penduduk'): ?>
                    <div class="col-xxl-6 col-md-6">
                        <div class="card info-card sales-card">

                            <div class="card-body">
                                <h5 class="card-title">Pengajuan Diprocess</h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-card-text"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6><?= $procesid ?></h6>
                                        <span class="text-muted small pt-2 ps-1">Dokumen</span>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-xxl-6 col-md-6">
                        <div class="card info-card sales-card">

                            <div class="card-body">
                                <h5 class="card-title">Pengajuan Complated</h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-card-checklist"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6><?= $completedid ?></h6>
                                        <span class="text-muted small pt-2 ps-1">Dokumen</span>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                <?php endif ?>
            </div>
        </div>

        <?php if (session()->get('role') == 'admin'): ?>
            <canvas id="clusterChart"></canvas>
            <span><strong>Keterangan</strong></span>
            <span>1 : kurang Setuju, 2 : Cukup, 3 : Setuju, 4 : Sangat Setuju</span>

            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
            <script>
                var ctx = document.getElementById('clusterChart').getContext('2d');
                var clusterChart = new Chart(ctx, {
                    type: 'line', // Bisa juga 'pie', 'doughnut', atau 'line'
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
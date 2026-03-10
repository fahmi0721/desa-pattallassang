<?php include('components/header.php'); ?>
<?php include('components/sidebar.php'); ?>

<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h3 class="fw-bold mb-0">Dashboard Utama</h3>
        <p class="text-muted">Ringkasan data sistem informasi Desa Pattallassang.</p>
    </div>
    <div class="text-end">
        <div class="badge bg-primary p-2">
            <i class="bi bi-calendar3 me-2"></i> <?php echo date('d F Y'); ?>
        </div>
    </div>
</div>

<div class="row g-4 mb-5">
    <div class="col-md-3">
        <div class="card stat-card p-3 border-0 shadow-sm" style="border-left: 5px solid #00BFFF !important;">
            <div class="d-flex align-items-center">
                <div class="bg-primary bg-opacity-10 p-3 rounded-3 me-3">
                    <i class="bi bi-newspaper text-primary fs-3"></i>
                </div>
                <div>
                    <?php $count_berita = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM tabel_berita")); ?>
                    <h3 class="fw-bold mb-0"><?php echo $count_berita; ?></h3>
                    <small class="text-muted">Total Berita</small>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card stat-card p-3 border-0 shadow-sm" style="border-left: 5px solid #198754 !important;">
            <div class="d-flex align-items-center">
                <div class="bg-success bg-opacity-10 p-3 rounded-3 me-3">
                    <i class="bi bi-shop text-success fs-3"></i>
                </div>
                <div>
                    <?php $count_potensi = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM tabel_potensi")); ?>
                    <h3 class="fw-bold mb-0"><?php echo $count_potensi; ?></h3>
                    <small class="text-muted">Potensi Desa</small>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card stat-card p-3 border-0 shadow-sm" style="border-left: 5px solid #0dcaf0 !important;">
            <div class="d-flex align-items-center">
                <div class="bg-info bg-opacity-10 p-3 rounded-3 me-3">
                    <i class="bi bi-people text-info fs-3"></i>
                </div>
                <div>
                    <?php $count_aparat = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM tabel_aparat")); ?>
                    <h3 class="fw-bold mb-0"><?php echo $count_aparat; ?></h3>
                    <small class="text-muted">Perangkat Desa</small>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-3">
    <div class="card stat-card p-3 border-0 shadow-sm" style="border-left: 5px solid #ffc107 !important;">
        <div class="d-flex align-items-center">
            <div class="bg-warning bg-opacity-10 p-3 rounded-3 me-3">
                <i class="bi bi-cash-stack text-warning fs-3"></i>
            </div>
            <div>
                <?php 
                $q_anggaran = mysqli_fetch_array(mysqli_query($koneksi, "SELECT SUM(realisasi) as total FROM tabel_anggaran"));
                $total_dana = $q_anggaran['total'] ?? 0;

                // LOGIKA OTOMATIS:
                if ($total_dana >= 1000000000) {
                    // Jika 1 Miliar ke atas, tampilkan format M (Miliar)
                    $tampilan_dana = 'Rp ' . number_format($total_dana / 1000000000, 2, ',', '.') . ' M';
                } elseif ($total_dana >= 1000000) {
                    // Jika 1 Juta ke atas, tampilkan format Jt (Juta)
                    $tampilan_dana = 'Rp ' . number_format($total_dana / 1000000, 1, ',', '.') . ' Jt';
                } else {
                    // Jika di bawah 1 Juta, tampilkan angka penuh
                    $tampilan_dana = 'Rp ' . number_format($total_dana, 0, ',', '.');
                }
                ?>
                <h4 class="fw-bold mb-0"><?php echo $tampilan_dana; ?></h4>
                <small class="text-muted">Realisasi Dana</small>
            </div>
        </div>
    </div>
</div>
</div>

<div class="row">
    <div class="col-lg-8">
        <div class="card border-0 shadow-sm rounded-4 p-4">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h5 class="fw-bold mb-0">Berita Terakhir Diupload</h5>
                <a href="kelola_berita.php" class="btn btn-sm btn-outline-primary rounded-pill px-3">Semua Berita</a>
            </div>
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>Judul</th>
                            <th>Kategori</th>
                            <th>Tanggal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $latest_news = mysqli_query($koneksi, "SELECT * FROM tabel_berita ORDER BY id DESC LIMIT 5");
                        while($ln = mysqli_fetch_array($latest_news)) {
                        ?>
                        <tr>
                            <td><strong><?php echo substr($ln['judul'], 0, 40); ?>...</strong></td>
                            <td><span class="badge bg-primary bg-opacity-10 text-primary"><?php echo $ln['kategori']; ?></span></td>
                            <td class="small text-muted"><?php echo date('d/m/Y', strtotime($ln['tanggal'])); ?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="card border-0 shadow-sm rounded-4 p-4 mb-4">
            <h5 class="fw-bold mb-4">Aksi Cepat</h5>
            <div class="d-grid gap-2">
                <a href="tambah_berita.php" class="btn btn-primary text-start p-3 rounded-3">
                    <i class="bi bi-plus-circle me-2"></i> Tambah Berita Baru
                </a>
                <a href="tambah_potensi.php" class="btn btn-success text-start p-3 rounded-3">
                    <i class="bi bi-image me-2"></i> Tambah Potensi Desa
                </a>
                <a href="kelola_statistik.php" class="btn btn-info text-white text-start p-3 rounded-3">
                    <i class="bi bi-bar-chart me-2"></i> Update Statistik
                </a>
            </div>
        </div>

        <div class="card border-0 shadow-sm rounded-4 p-4 bg-primary text-white">
            <h6 class="fw-bold">Bantuan Admin</h6>
            <p class="small mb-0">Pastikan data yang diinput sudah sesuai dengan dokumen desa yang valid.</p>
        </div>
    </div>
</div>

<?php include('components/footer.php'); ?>
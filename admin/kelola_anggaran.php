<?php include('components/header.php'); ?>
<?php include('components/sidebar.php'); ?>

<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h3 class="fw-bold mb-0">Transparansi Anggaran</h3>
        <p class="text-muted">Kelola pagu dan realisasi dana desa secara real-time.</p>
    </div>
    <a href="tambah_anggaran.php" class="btn btn-primary rounded-pill px-4 shadow-sm">
        <i class="bi bi-plus-lg me-2"></i>Tambah Bidang
    </a>
</div>

<div class="row">
    <div class="col-12">
        <div class="card stat-card p-4 border-0 shadow-sm">
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>No</th>
                            <th>Bidang / Kategori</th>
                            <th>Pagu Anggaran (Rp)</th>
                            <th>Realisasi (Rp)</th>
                            <th>Progres</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $no = 1;
                        $sql = mysqli_query($koneksi, "SELECT * FROM tabel_anggaran ORDER BY id ASC");
                        while($d = mysqli_fetch_array($sql)){
                            // Hitung Persentase
                            $persen = ($d['pagu_anggaran'] > 0) ? ($d['realisasi'] / $d['pagu_anggaran']) * 100 : 0;
                            
                            // Tentukan warna progress bar
                            $warna_bar = "bg-primary";
                            if($persen >= 100) { $warna_bar = "bg-success"; }
                            elseif($persen >= 50) { $warna_bar = "bg-info"; }
                            elseif($persen < 20) { $warna_bar = "bg-danger"; }
                        ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td class="fw-bold"><?php echo $d['bidang']; ?></td>
                            <td><?php echo number_format($d['pagu_anggaran'], 0, ',', '.'); ?></td>
                            <td><?php echo number_format($d['realisasi'], 0, ',', '.'); ?></td>
                            <td style="width: 200px;">
                                <div class="d-flex align-items-center">
                                    <div class="progress flex-grow-1 me-2" style="height: 10px; border-radius: 10px;">
                                        <div class="progress-bar <?php echo $warna_bar; ?> progress-bar-striped" style="width: <?php echo $persen; ?>%"></div>
                                    </div>
                                    <small class="fw-bold"><?php echo number_format($persen, 1); ?>%</small>
                                </div>
                            </td>
                            <td class="text-center">
                                <div class="btn-group" role="group">
                                    <a href="edit_anggaran.php?id=<?php echo $d['id']; ?>" class="btn btn-sm btn-warning rounded-pill me-2 px-3">
                                        <i class="bi bi-pencil-square"></i> Edit
                                    </a>
                                    <a href="hapus_anggaran.php?id=<?php echo $d['id']; ?>" class="btn btn-sm btn-outline-danger rounded-pill px-3" onclick="return confirm('Apakah Anda yakin ingin menghapus bidang anggaran ini?')">
                                        <i class="bi bi-trash"></i> Hapus
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php include('components/footer.php'); ?>
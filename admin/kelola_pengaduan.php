<?php include('components/header.php'); ?>
<?php include('components/sidebar.php'); ?>

<div class="container-fluid py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h3 class="fw-bold text-dark">Daftar Pengaduan Masyarakat</h3>
            <p class="text-muted small">Kelola laporan dan aspirasi warga Desa Pattallassang.</p>
        </div>
    </div>

    <div class="card border-0 shadow-sm rounded-4">
        <div class="card-body p-4">
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Nama Pengirim</th>
                            <th>Subjek</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $no = 1;
                        // Mengambil data dari tabel_pengaduan yang kita buat sebelumnya
                        $sql = mysqli_query($koneksi, "SELECT * FROM tabel_pengaduan ORDER BY tanggal DESC");
                        
                        if(mysqli_num_rows($sql) == 0) {
                            echo "<tr><td colspan='5' class='text-center text-muted py-4'>Belum ada pengaduan yang masuk.</td></tr>";
                        }

                        while($d = mysqli_fetch_array($sql)){
                        ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td>
                                <span class="badge bg-light text-dark border">
                                    <?php echo date('d M Y', strtotime($d['tanggal'])); ?>
                                </span>
                            </td>
                            <td class="fw-bold"><?php echo $d['nama']; ?></td>
                            <td><?php echo $d['subjek']; ?></td>
                            <td class="text-center">
                                <button class="btn btn-sm btn-primary rounded-pill px-3" data-bs-toggle="modal" data-bs-target="#detailModal<?php echo $d['id']; ?>">
                                    <i class="bi bi-eye me-1"></i> Detail
                                </button>
                                <a href="hapus_pengaduan.php?id=<?php echo $d['id']; ?>" 
                                   class="btn btn-sm btn-danger rounded-pill px-3" 
                                   onclick="return confirm('Apakah Anda yakin ingin menghapus laporan ini?')">
                                    <i class="bi bi-trash"></i>
                                </a>
                            </td>
                        </tr>

                        <div class="modal fade" id="detailModal<?php echo $d['id']; ?>" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content border-0 shadow-lg rounded-4">
                                    <div class="modal-header border-0 pb-0">
                                        <h5 class="fw-bold">Detail Laporan</h5>
                                        <button type="button" class="btn-close" data-bs-modal="dismiss"></button>
                                    </div>
                                    <div class="modal-body pt-3">
                                        <div class="mb-3">
                                            <label class="text-muted small d-block">Nama & Kontak</label>
                                            <span class="fw-bold"><?php echo $d['nama']; ?></span> (<?php echo $d['kontak']; ?>)
                                        </div>
                                        <div class="mb-3">
                                            <label class="text-muted small d-block">Subjek</label>
                                            <span class="fw-bold text-primary"><?php echo $d['subjek']; ?></span>
                                        </div>
                                        <div class="p-3 bg-light rounded-3">
                                            <label class="text-muted small d-block mb-2">Pesan Pengaduan:</label>
                                            <p class="mb-0 text-dark" style="text-align: justify; line-height: 1.6;">
                                                <?php echo nl2br($d['pesan']); ?>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="modal-footer border-0">
                                        <button type="button" class="btn btn-secondary rounded-pill" data-bs-dismiss="modal">Tutup</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php include('components/footer.php'); ?>
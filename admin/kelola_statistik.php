<?php include('components/header.php'); ?>
<?php include('components/sidebar.php'); ?>

<div class="mb-4">
    <h3 class="fw-bold">Statistik Kependudukan</h3>
    <p class="text-muted">Perbarui data statistik Desa Pattallassang sesuai kategori di database.</p>
</div>

<div class="row">
    <div class="col-lg-8">
        <div class="card stat-card p-4 border-0 shadow-sm">
            <form action="proses_statistik.php" method="POST">
                <div class="row g-4">
                    <?php 
                    // Mengambil semua data dari tabel_statistik
                    $sql = mysqli_query($koneksi, "SELECT * FROM tabel_statistik ORDER BY id ASC");
                    while($s = mysqli_fetch_array($sql)){
                    ?>
                    <div class="col-md-6">
                        <label class="form-label fw-bold">
                            <i class="<?php echo $s['ikon']; ?> me-2 text-primary"></i>
                            <?php echo $s['label']; ?>
                        </label>
                        <input type="hidden" name="id[]" value="<?php echo $s['id']; ?>">
                        <input type="number" name="jumlah[]" class="form-control" value="<?php echo $s['jumlah']; ?>" required>
                    </div>
                    <?php } ?>
                </div>

                <div class="d-flex gap-2 mt-5 border-top pt-4">
                    <button type="submit" name="update" class="btn btn-primary rounded-pill px-4">
                        <i class="bi bi-save me-2"></i>Simpan Perubahan Statistik
                    </button>
                    <a href="index.php" class="btn btn-light rounded-pill px-4">Batal</a>
                </div>
            </form>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="card border-0 shadow-sm p-4 bg-light rounded-4">
            <h6 class="fw-bold text-dark"><i class="bi bi-info-circle me-2"></i>Petunjuk Database</h6>
            <p class="small text-muted mb-0">
                Sistem mendeteksi <strong><?php echo mysqli_num_rows($sql); ?> kategori</strong> statistik. 
                Data ini diambil langsung dari tabel <code>tabel_statistik</code> Anda. 
                Perubahan jumlah di sini akan langsung memperbarui angka pada ikon statistik di halaman utama.
            </p>
        </div>
    </div>
</div>

<?php include('components/footer.php'); ?>
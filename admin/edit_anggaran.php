<?php include('components/header.php'); ?>
<?php include('components/sidebar.php'); ?>

<?php
$id = mysqli_real_escape_string($koneksi, $_GET['id']);
$query = mysqli_query($koneksi, "SELECT * FROM tabel_anggaran WHERE id = '$id'");
$d = mysqli_fetch_array($query);
?>

<div class="mb-4">
    <h3 class="fw-bold">Update Anggaran</h3>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="card stat-card p-4">
            <form action="proses_edit_anggaran.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                
                <div class="mb-3">
                    <label class="form-label fw-bold">Nama Bidang / Anggaran</label>
                    <input type="text" name="bidang" class="form-control" value="<?php echo $d['bidang']; ?>" required>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Pagu Anggaran (Target)</label>
                    <input type="number" name="pagu" class="form-control" value="<?php echo $d['pagu_anggaran']; ?>" required>
                    <small class="text-muted">Contoh: 500000000 (Tanpa titik/koma)</small>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Realisasi Saat Ini</label>
                    <input type="number" name="realisasi" class="form-control" value="<?php echo $d['realisasi']; ?>" required>
                </div>

                <div class="d-flex gap-2 mt-4">
                    <button type="submit" name="update" class="btn btn-primary rounded-pill px-4">Simpan Perubahan</button>
                    <a href="kelola_anggaran.php" class="btn btn-light rounded-pill px-4">Batal</a>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include('components/footer.php'); ?>
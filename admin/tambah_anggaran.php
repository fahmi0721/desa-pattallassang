<?php include('components/header.php'); ?>
<?php include('components/sidebar.php'); ?>

<div class="mb-4">
    <h3 class="fw-bold">Tambah Bidang Anggaran</h3>
    <p class="text-muted">Gunakan form ini untuk menambah kategori pelaksanaan anggaran baru.</p>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="card stat-card p-4">
            <form action="proses_tambah_anggaran.php" method="POST">
                <div class="mb-3">
                    <label class="form-label fw-bold">Nama Bidang / Kategori</label>
                    <input type="text" name="bidang" class="form-control" placeholder="Contoh: Pemberdayaan Desa" required>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Pagu Anggaran (Target)</label>
                    <input type="number" name="pagu" class="form-control" placeholder="Masukkan angka tanpa titik/koma" required>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Realisasi Awal</label>
                    <input type="number" name="realisasi" class="form-control" value="0">
                    <small class="text-muted">Isi 0 jika belum ada penyerapan dana.</small>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Tahun Anggaran</label>
                    <input type="number" name="tahun" class="form-control" value="2026" required>
                </div>

                <div class="d-flex gap-2 mt-4">
                    <button type="submit" name="simpan" class="btn btn-primary rounded-pill px-4">Simpan Data</button>
                    <a href="kelola_anggaran.php" class="btn btn-light rounded-pill px-4">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include('components/footer.php'); ?>
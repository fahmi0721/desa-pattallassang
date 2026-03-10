<?php include('components/header.php'); ?>
<?php include('components/sidebar.php'); ?>

<div class="mb-4">
    <h3 class="fw-bold">Tambah Aparat Desa</h3>
    <p class="text-muted">Tambahkan data perangkat desa baru ke dalam sistem.</p>
</div>

<div class="card stat-card p-4 border-0 shadow-sm">
    <form action="proses_tambah_aparat.php" method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-4 text-center border-end">
                <div class="mb-3">
                    <label class="form-label fw-bold d-block">Foto Formal</label>
                    <div class="p-3 bg-light rounded-3 mb-3">
                        <i class="bi bi-person-bounding-box text-muted" style="font-size: 4rem;"></i>
                    </div>
                    <input type="file" name="foto" class="form-control" required>
                    <small class="text-muted">Gunakan latar belakang polos (merah/biru).</small>
                </div>
            </div>
            <div class="col-md-8 px-md-4">
                <div class="mb-3">
                    <label class="form-label fw-bold">Nama Lengkap & Gelar</label>
                    <input type="text" name="nama" class="form-control" placeholder="Contoh: Andi Wijaya, S.Sos" required>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bold">NIP / NIAP</label>
                        <input type="text" name="nip" class="form-control" placeholder="Masukkan NIP jika ada">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bold">Jabatan</label>
                        <input type="text" name="jabatan" class="form-control" placeholder="Contoh: Sekretaris Desa" required>
                    </div>
                </div>
                <div class="d-flex gap-2 mt-4">
                    <button type="submit" name="simpan" class="btn btn-primary rounded-pill px-4">Simpan Data</button>
                    <a href="kelola_aparat.php" class="btn btn-light rounded-pill px-4">Batal</a>
                </div>
            </div>
        </div>
    </form>
</div>

<?php include('components/footer.php'); ?>
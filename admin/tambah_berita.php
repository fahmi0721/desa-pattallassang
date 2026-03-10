<?php include('components/header.php'); ?>
<?php include('components/sidebar.php'); ?>

<div class="mb-4">
    <h3 class="fw-bold">Tambah Berita Baru</h3>
    <p class="text-muted">Publikasikan kabar terbaru Desa Pattallassang.</p>
</div>

<div class="card stat-card p-4 border-0 shadow-sm">
    <form action="proses_tambah_berita.php" method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-8">
                <div class="mb-3">
                    <label class="form-label fw-bold">Judul Berita</label>
                    <input type="text" name="judul" class="form-control" placeholder="Masukkan judul berita..." required>
                </div>
                <div class="mb-3">
                    <label class="form-label fw-bold">Isi Berita</label>
                    <textarea name="isi" class="form-control" rows="10" placeholder="Tuliskan isi berita lengkap di sini..." required></textarea>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <label class="form-label fw-bold">Kategori</label>
                    <select name="kategori" class="form-select" required>
                        <option value="Kegiatan Desa">Kegiatan Desa</option>
                        <option value="Informasi">Informasi</option>
                        <option value="Pembangunan">Pembangunan</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label fw-bold">Gambar Utama</label>
                    <input type="file" name="gambar" class="form-control" required>
                    <small class="text-muted">Format: JPG, PNG. Maks: 2MB.</small>
                </div>
                <div class="d-grid gap-2 mt-4">
                    <button type="submit" name="simpan" class="btn btn-primary rounded-pill">Terbitkan Berita</button>
                    <a href="kelola_berita.php" class="btn btn-light rounded-pill">Batal</a>
                </div>
            </div>
        </div>
    </form>
</div>

<?php include('components/footer.php'); ?>
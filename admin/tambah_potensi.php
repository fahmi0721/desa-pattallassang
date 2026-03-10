<?php include('components/header.php'); ?>
<?php include('components/sidebar.php'); ?>

<div class="mb-4">
    <h3 class="fw-bold">Tambah Potensi Desa</h3>
    <p class="text-muted">Input produk unggulan atau lokasi wisata desa.</p>
</div>

<div class="card stat-card p-4 border-0 shadow-sm">
    <form action="proses_potensi.php" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label class="form-label fw-bold">Nama Potensi / Produk</label>
            <input type="text" name="judul" class="form-control" placeholder="Contoh: Kerajinan Tangan Anyaman" required>
        </div>
        <div class="mb-3">
            <label class="form-label fw-bold">Deskripsi</label>
            <textarea name="deskripsi" class="form-control" rows="5" placeholder="Jelaskan detail potensi desa..." required></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label fw-bold">Foto Utama</label>
            <input type="file" name="gambar" class="form-control" required>
        </div>
        
        <div class="d-flex gap-2 mt-4">
            <button type="submit" name="simpan" class="btn btn-success rounded-pill px-4">Simpan Data</button>
            <a href="kelola_potensi.php" class="btn btn-light rounded-pill px-4">Batal</a>
        </div>
    </form>
</div>

<?php include('components/footer.php'); ?>
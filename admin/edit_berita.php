<?php include('components/header.php'); ?>
<?php include('components/sidebar.php'); ?>

<?php
// 1. Ambil ID dari URL dan cegah SQL Injection
$id = mysqli_real_escape_string($koneksi, $_GET['id']);

// 2. Query data berita lama
$query = mysqli_query($koneksi, "SELECT * FROM tabel_berita WHERE id = '$id'");
$d = mysqli_fetch_array($query);

// Jika data tidak ditemukan, arahkan kembali
if (!$d) {
    echo "<script>alert('Data tidak ditemukan!'); window.location='kelola_berita.php';</script>";
}
?>

<div class="mb-4">
    <h3 class="fw-bold">Edit Berita</h3>
    <p class="text-muted">Perbarui informasi berita Desa Pattallassang.</p>
</div>

<div class="card stat-card p-4 border-0 shadow-sm">
    <form action="proses_edit.php" method="POST" enctype="multipart/form-data">
        
        <input type="hidden" name="id" value="<?php echo $d['id']; ?>">

        <div class="row">
            <div class="col-md-8">
                <div class="mb-3">
                    <label class="form-label fw-bold">Judul Berita</label>
                    <input type="text" name="judul" class="form-control" value="<?php echo $d['judul']; ?>" required>
                </div>
                <div class="mb-3">
                    <label class="form-label fw-bold">Isi Berita</label>
                    <textarea name="isi" class="form-control" rows="10" required><?php echo $d['isi']; ?></textarea>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <label class="form-label fw-bold">Kategori</label>
                    <select name="kategori" class="form-select" required>
                        <option value="Kegiatan Desa" <?php if($d['kategori'] == 'Kegiatan Desa') echo 'selected'; ?>>Kegiatan Desa</option>
                        <option value="Informasi" <?php if($d['kategori'] == 'Informasi') echo 'selected'; ?>>Informasi</option>
                        <option value="Pembangunan" <?php if($d['kategori'] == 'Pembangunan') echo 'selected'; ?>>Pembangunan</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label fw-bold">Gambar Saat Ini</label><br>
                    <img src="../assets/img/blog/<?php echo $d['gambar']; ?>" width="100%" class="mb-2 rounded shadow-sm">
                    
                    <label class="form-label fw-bold mt-2">Ganti Gambar (Opsional)</label>
                    <input type="file" name="gambar" class="form-control">
                    <small class="text-muted">Biarkan kosong jika tidak ingin mengganti gambar.</small>
                </div>
                <div class="d-grid gap-2 mt-4">
                    <button type="submit" name="update" class="btn btn-primary rounded-pill">Simpan Perubahan</button>
                    <a href="kelola_berita.php" class="btn btn-light rounded-pill">Batal</a>
                </div>
            </div>
        </div>
    </form>
</div>

<?php include('components/footer.php'); ?>
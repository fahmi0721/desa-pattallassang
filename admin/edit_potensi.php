<?php 
include('components/header.php'); 
include('components/sidebar.php'); 

$id = mysqli_real_escape_string($koneksi, $_GET['id']);
$query = mysqli_query($koneksi, "SELECT * FROM tabel_potensi WHERE id = '$id'");
$d = mysqli_fetch_array($query);

if(!$d) { header("location:kelola_potensi.php"); exit; }
?>

<div class="mb-4">
    <h3 class="fw-bold">Edit Potensi Desa</h3>
</div>

<div class="card stat-card p-4 border-0 shadow-sm">
    <form action="proses_edit_potensi.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
        
        <div class="row">
            <div class="col-md-4 text-center border-end">
                <label class="form-label fw-bold d-block">Foto Produk/Potensi</label>
                <img src="../assets/img/portfolio/<?php echo $d['gambar']; ?>" class="img-fluid rounded shadow-sm mb-3" style="max-height: 250px; object-fit: cover;">
                <input type="file" name="gambar" class="form-control">
                <small class="text-muted d-block mt-2">Biarkan kosong jika tidak ingin mengganti foto.</small>
            </div>
            
            <div class="col-md-8 px-md-4">
                <div class="mb-3">
                    <label class="form-label fw-bold">Nama Potensi / Judul</label>
                    <input type="text" name="judul" class="form-control" value="<?php echo $d['judul']; ?>" required>
                </div>
                <div class="mb-3">
                    <label class="form-label fw-bold">Deskripsi</label>
                    <textarea name="deskripsi" class="form-control" rows="6" required><?php echo $d['deskripsi']; ?></textarea>
                </div>
                
                <div class="d-flex gap-2 mt-4">
                    <button type="submit" name="update" class="btn btn-success rounded-pill px-4">Simpan Perubahan</button>
                    <a href="kelola_potensi.php" class="btn btn-light rounded-pill px-4">Batal</a>
                </div>
            </div>
        </div>
    </form>
</div>

<?php include('components/footer.php'); ?>
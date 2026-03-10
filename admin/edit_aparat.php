<?php 
include('components/header.php'); 
include('components/sidebar.php'); 
$id = mysqli_real_escape_string($koneksi, $_GET['id']);
$d = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM tabel_aparat WHERE id='$id'"));
?>

<div class="mb-4">
    <h3 class="fw-bold">Edit Data Aparat</h3>
</div>

<div class="card stat-card p-4 border-0 shadow-sm">
    <form action="proses_edit_aparat.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
        <div class="row align-items-center">
            <div class="col-md-3 text-center">
                <img src="../assets/img/team/<?php echo $d['foto']; ?>" class="rounded-circle shadow mb-3" width="150" height="150" style="object-fit: cover;">
                <input type="file" name="foto" class="form-control form-control-sm">
            </div>
            <div class="col-md-9">
                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label fw-bold">Nama Lengkap</label>
                        <input type="text" name="nama" class="form-control" value="<?php echo $d['nama']; ?>" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-bold">NIP / NIAP</label>
                        <input type="text" name="nip" class="form-control" value="<?php echo $d['nip']; ?>">
                    </div>
                    <div class="col-md-12">
                        <label class="form-label fw-bold">Jabatan</label>
                        <input type="text" name="jabatan" class="form-control" value="<?php echo $d['jabatan']; ?>" required>
                    </div>
                </div>
                <div class="mt-4">
                    <button type="submit" name="update" class="btn btn-info text-white rounded-pill px-4">Update Data</button>
                    <a href="kelola_aparat.php" class="btn btn-light rounded-pill px-4">Batal</a>
                </div>
            </div>
        </div>
    </form>
</div>

<?php include('components/footer.php'); ?>
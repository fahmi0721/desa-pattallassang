<?php
include('components/header.php');
include('components/sidebar.php');

$query = mysqli_query($koneksi, "SELECT * FROM tabel_profil LIMIT 1");
$data = mysqli_fetch_array($query);

if (isset($_POST['update'])) {
    $nama    = mysqli_real_escape_string($koneksi, $_POST['nama_kades']);
    $jabatan = mysqli_real_escape_string($koneksi, $_POST['jabatan']);
    $teks    = mysqli_real_escape_string($koneksi, $_POST['teks_sambutan']);
    
    $foto_nama = $_FILES['foto']['name'];
    $foto_tmp  = $_FILES['foto']['tmp_name'];

    if (!empty($foto_nama)) {
        move_uploaded_file($foto_tmp, "../assets/img/team/" . $foto_nama);
        $sql = "UPDATE tabel_profil SET nama_kades='$nama', jabatan='$jabatan', teks_sambutan='$teks', foto_kades='$foto_nama' WHERE id='".$data['id']."'";
    } else {
        $sql = "UPDATE tabel_profil SET nama_kades='$nama', jabatan='$jabatan', teks_sambutan='$teks' WHERE id='".$data['id']."'";
    }

    if (mysqli_query($koneksi, $sql)) {
        echo "<script>alert('Profil Berhasil Diperbarui!'); window.location='kelola_profil.php';</script>";
    }
}
?>

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-lg-8">
            <div class="card shadow-sm border-0 rounded-4 p-4">
                <h4 class="fw-bold mb-4">Kelola Sambutan (Mode Normal)</h4>
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="row mb-3">
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Nama Kepala Desa</label>
                            <input type="text" name="nama_kades" class="form-control" value="<?php echo $data['nama_kades']; ?>" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Jabatan</label>
                            <input type="text" name="jabatan" class="form-control" value="<?php echo $data['jabatan']; ?>" required>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label class="form-label fw-bold">Isi Sambutan</label>
                        <textarea name="teks_sambutan" class="form-control" rows="10" required><?php echo $data['teks_sambutan']; ?></textarea>
                    </div>
                    <div class="mb-4">
                        <label class="form-label fw-bold">Ganti Foto</label>
                        <input type="file" name="foto" class="form-control">
                    </div>
                    <button type="submit" name="update" class="btn btn-primary rounded-pill px-5 fw-bold">Simpan Perubahan</button>
                </form>
            </div>
        </div>
        <div class="col-lg-4 text-center">
            <div class="card shadow-sm border-0 rounded-4 p-4">
                <h6 class="fw-bold mb-3">Foto Saat Ini</h6>
                <img src="../assets/img/team/<?php echo $data['foto_kades']; ?>" class="rounded-circle shadow-sm border border-4 border-white mx-auto" style="width: 150px; height: 150px; object-fit: cover;">
            </div>
        </div>
    </div>
</div>
<?php include('components/footer.php'); ?>
<?php
include('cek_session.php');
include('../config/koneksi.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // 1. Ambil nama file gambar sebelum datanya dihapus
    $pilih = mysqli_query($koneksi, "SELECT gambar FROM tabel_berita WHERE id='$id'");
    $data = mysqli_fetch_array($pilih);
    $foto = $data['gambar'];

    // 2. Hapus file fisik gambar di folder assets
    if (file_exists("../assets/img/blog/$foto")) {
        unlink("../assets/img/blog/$foto");
    }

    // 3. Hapus data dari database
    $hapus = mysqli_query($koneksi, "DELETE FROM tabel_berita WHERE id='$id'");

    if ($hapus) {
        echo "<script>alert('Berita Berhasil Dihapus!'); window.location='kelola_berita.php';</script>";
    } else {
        echo "<script>alert('Gagal Menghapus Berita'); window.location='kelola_berita.php';</script>";
    }
}
?>
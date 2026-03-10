<?php
include('cek_session.php');
include('../config/koneksi.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Ambil nama file foto agar bisa dihapus dari folder
    $pilih = mysqli_query($koneksi, "SELECT gambar FROM tabel_potensi WHERE id='$id'");
    $data = mysqli_fetch_array($pilih);
    $foto = $data['gambar'];

    if (file_exists("../assets/img/portfolio/$foto")) {
        unlink("../assets/img/portfolio/$foto");
    }

    $hapus = mysqli_query($koneksi, "DELETE FROM tabel_potensi WHERE id='$id'");
    header("location:kelola_potensi.php?pesan=hapus_berhasil");
}
?>
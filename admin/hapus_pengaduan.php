<?php
include('../config/koneksi.php');

// Mengambil ID dari URL
$id = mysqli_real_escape_string($koneksi, $_GET['id']);

// Proses hapus data
$query = mysqli_query($koneksi, "DELETE FROM tabel_pengaduan WHERE id = '$id'");

if ($query) {
    echo "<script>alert('Laporan pengaduan berhasil dihapus.'); window.location='kelola_pengaduan.php';</script>";
} else {
    echo "<script>alert('Gagal menghapus data.'); window.location='kelola_pengaduan.php';</script>";
}
?>
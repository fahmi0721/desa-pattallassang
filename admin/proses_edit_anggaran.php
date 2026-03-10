<?php
include('cek_session.php');
include('../config/koneksi.php');

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $bidang = mysqli_real_escape_string($koneksi, $_POST['bidang']); // Tangkap input bidang
    $pagu = $_POST['pagu'];
    $realisasi = $_POST['realisasi'];

    $sql = "UPDATE tabel_anggaran SET 
            bidang = '$bidang', 
            pagu_anggaran = '$pagu', 
            realisasi = '$realisasi' 
            WHERE id = '$id'";

    if (mysqli_query($koneksi, $sql)) {
        echo "<script>alert('Data Berhasil Diperbarui!'); window.location='kelola_anggaran.php';</script>";
    } else {
        echo "Gagal: " . mysqli_error($koneksi);
    }
}
?>
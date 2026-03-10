<?php
include('cek_session.php');
include('../config/koneksi.php');

if (isset($_POST['update'])) {
    $ids = $_POST['id'];
    $jumlahs = $_POST['jumlah'];

    // Melakukan update massal menggunakan loop
    $error = false;
    foreach ($ids as $index => $id) {
        $id_clean = mysqli_real_escape_string($koneksi, $id);
        $jumlah_clean = mysqli_real_escape_string($koneksi, $jumlahs[$index]);

        $query = "UPDATE tabel_statistik SET jumlah = '$jumlah_clean' WHERE id = '$id_clean'";
        
        if (!mysqli_query($koneksi, $query)) {
            $error = true;
            break;
        }
    }

    if (!$error) {
        echo "<script>alert('Semua data statistik berhasil diperbarui!'); window.location='kelola_statistik.php';</script>";
    } else {
        echo "<script>alert('Gagal memperbarui beberapa data: " . mysqli_error($koneksi) . "'); window.location='kelola_statistik.php';</script>";
    }
}
?>
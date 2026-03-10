<?php
include('cek_session.php');
include('../config/koneksi.php');

if (isset($_POST['update'])) {
    $id        = $_POST['id'];
    $judul     = mysqli_real_escape_string($koneksi, $_POST['judul']);
    $deskripsi = mysqli_real_escape_string($koneksi, $_POST['deskripsi']);

    $nama_gambar = $_FILES['gambar']['name'];
    $tmp_name    = $_FILES['gambar']['tmp_name'];

    if ($nama_gambar != "") {
        // Jika upload foto baru
        $ekstensiGambar = strtolower(pathinfo($nama_gambar, PATHINFO_EXTENSION));
        $namaGambarBaru = uniqid() . '.' . $ekstensiGambar;

        // Hapus foto lama dari folder
        $pilih = mysqli_query($koneksi, "SELECT gambar FROM tabel_potensi WHERE id='$id'");
        $data = mysqli_fetch_array($pilih);
        if (file_exists("../assets/img/portfolio/" . $data['gambar'])) {
            unlink("../assets/img/portfolio/" . $data['gambar']);
        }

        move_uploaded_file($tmp_name, '../assets/img/portfolio/' . $namaGambarBaru);
        $query = "UPDATE tabel_potensi SET judul='$judul', deskripsi='$deskripsi', gambar='$namaGambarBaru' WHERE id='$id'";
    } else {
        // Jika tidak ganti foto
        $query = "UPDATE tabel_potensi SET judul='$judul', deskripsi='$deskripsi' WHERE id='$id'";
    }

    if (mysqli_query($koneksi, $query)) {
        echo "<script>alert('Data Potensi Diperbarui!'); window.location='kelola_potensi.php';</script>";
    }
}
?>
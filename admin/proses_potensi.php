<?php
include('cek_session.php');
include('../config/koneksi.php');

if (isset($_POST['simpan'])) {
    $judul     = mysqli_real_escape_string($koneksi, $_POST['judul']);
    $deskripsi = mysqli_real_escape_string($koneksi, $_POST['deskripsi']);

    // Mengelola Gambar Potensi
    $nama_gambar   = $_FILES['gambar']['name'];
    $ukuran_gambar = $_FILES['gambar']['size'];
    $error_gambar  = $_FILES['gambar']['error'];
    $tmp_name      = $_FILES['gambar']['tmp_name'];

    // 1. Cek apakah ada gambar
    if ($error_gambar === 4) {
        echo "<script>alert('Pilih gambar potensi terlebih dahulu!'); window.location='tambah_potensi.php';</script>";
        return false;
    }

    // 2. Validasi Ekstensi
    $ekstensiValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = strtolower(pathinfo($nama_gambar, PATHINFO_EXTENSION));

    if (!in_array($ekstensiGambar, $ekstensiValid)) {
        echo "<script>alert('Format file harus jpg, jpeg, atau png!'); window.location='tambah_potensi.php';</script>";
        return false;
    }

    // 3. Validasi Ukuran (Maks 2MB)
    if ($ukuran_gambar > 2000000) {
        echo "<script>alert('Ukuran gambar terlalu besar!'); window.location='tambah_potensi.php';</script>";
        return false;
    }

    // 4. Generate Nama Baru & Pindahkan File
    $namaGambarBaru = uniqid() . '.' . $ekstensiGambar;
    
    // Pastikan folder assets/img/portfolio/ sudah ada
    move_uploaded_file($tmp_name, '../assets/img/portfolio/' . $namaGambarBaru);

    // 5. Simpan ke Database
    $query = "INSERT INTO tabel_potensi (judul, deskripsi, gambar) 
              VALUES ('$judul', '$deskripsi', '$namaGambarBaru')";

    if (mysqli_query($koneksi, $query)) {
        echo "<script>alert('Data Potensi Berhasil Ditambahkan!'); window.location='kelola_potensi.php';</script>";
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>
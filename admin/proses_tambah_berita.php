<?php
include('cek_session.php');
include('../config/koneksi.php');

if (isset($_POST['simpan'])) {
    $judul    = mysqli_real_escape_string($koneksi, $_POST['judul']);
    $kategori = mysqli_real_escape_string($koneksi, $_POST['kategori']);
    $isi      = mysqli_real_escape_string($koneksi, $_POST['isi']);
    $tanggal  = date('Y-m-d');

    // Mengelola Gambar
    $nama_gambar   = $_FILES['gambar']['name'];
    $ukuran_gambar = $_FILES['gambar']['size'];
    $error_gambar  = $_FILES['gambar']['error'];
    $tmp_name      = $_FILES['gambar']['tmp_name'];

    // Cek apakah ada gambar yang diupload
    if ($error_gambar === 4) {
        echo "<script>alert('Pilih gambar terlebih dahulu!'); window.location='tambah_berita.php';</script>";
        return false;
    }

    // Validasi Ekstensi Gambar
    $ekstensiValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $nama_gambar);
    $ekstensiGambar = strtolower(end($ekstensiGambar));

    if (!in_array($ekstensiGambar, $ekstensiValid)) {
        echo "<script>alert('Yang Anda upload bukan gambar (Gunakan jpg/jpeg/png)!'); window.location='tambah_berita.php';</script>";
        return false;
    }

    // Validasi Ukuran (Maks 2MB)
    if ($ukuran_gambar > 2000000) {
        echo "<script>alert('Ukuran gambar terlalu besar (Maks 2MB)!'); window.location='tambah_berita.php';</script>";
        return false;
    }

    // Generate Nama Gambar Baru (agar tidak ada nama file yang sama)
    $namaGambarBaru = uniqid() . '.' . $ekstensiGambar;

    // Pindahkan Gambar ke folder assets/img/blog/
    move_uploaded_file($tmp_name, '../assets/img/blog/' . $namaGambarBaru);

    // Input data ke Database
    $query = "INSERT INTO tabel_berita (judul, kategori, isi, gambar, tanggal) 
              VALUES ('$judul', '$kategori', '$isi', '$namaGambarBaru', '$tanggal')";

    if (mysqli_query($koneksi, $query)) {
        echo "<script>alert('Berita berhasil ditambahkan!'); window.location='kelola_berita.php';</script>";
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>
<?php
include('cek_session.php');
include('../config/koneksi.php');

// Mengatur zona waktu (WITA untuk wilayah Sulawesi/Bantaeng)
date_default_timezone_set('Asia/Makassar'); 

if (isset($_POST['update'])) {
    $id       = $_POST['id'];
    $judul    = mysqli_real_escape_string($koneksi, $_POST['judul']);
    $kategori = mysqli_real_escape_string($koneksi, $_POST['kategori']);
    $isi      = mysqli_real_escape_string($koneksi, $_POST['isi']);
    
    // Ambil waktu saat ini sebagai waktu update terbaru
    $tanggal_sekarang = date('Y-m-d H:i:s');

    $nama_gambar = $_FILES['gambar']['name'];
    $tmp_name    = $_FILES['gambar']['tmp_name'];

    if ($nama_gambar != "") {
        // Logika Ganti Gambar
        $ekstensiValid = ['jpg', 'jpeg', 'png'];
        $pecah = explode('.', $nama_gambar);
        $ekstensiGambar = strtolower(end($pecah));
        $namaGambarBaru = uniqid() . '.' . $ekstensiGambar;

        // Hapus foto lama
        $pilih = mysqli_query($koneksi, "SELECT gambar FROM tabel_berita WHERE id='$id'");
        $data = mysqli_fetch_array($pilih);
        if(file_exists("../assets/img/blog/" . $data['gambar'])) {
            unlink("../assets/img/blog/" . $data['gambar']);
        }

        move_uploaded_file($tmp_name, '../assets/img/blog/' . $namaGambarBaru);
        
        // Tambahkan kolom tanggal di query update gambar
        $query = "UPDATE tabel_berita SET judul='$judul', kategori='$kategori', isi='$isi', gambar='$namaGambarBaru', tanggal='$tanggal_sekarang' WHERE id='$id'";
    } else {
        // Tambahkan kolom tanggal di query tanpa update gambar
        $query = "UPDATE tabel_berita SET judul='$judul', kategori='$kategori', isi='$isi', tanggal='$tanggal_sekarang' WHERE id='$id'";
    }

    if (mysqli_query($koneksi, $query)) {
        echo "<script>alert('Berita Berhasil Diperbarui!'); window.location='kelola_berita.php';</script>";
    }
}
?>
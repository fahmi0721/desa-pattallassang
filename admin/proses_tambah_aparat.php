<?php
include('cek_session.php');
include('../config/koneksi.php');

if (isset($_POST['simpan'])) {
    $nama    = mysqli_real_escape_string($koneksi, $_POST['nama']);
    $nip     = mysqli_real_escape_string($koneksi, $_POST['nip']); // Tambahkan baris ini
    $jabatan = mysqli_real_escape_string($koneksi, $_POST['jabatan']);

    // Mengelola Foto Aparat
    $nama_foto   = $_FILES['foto']['name'];
    $tmp_name    = $_FILES['foto']['tmp_name'];

    // Cek jika tidak ada foto
    if (empty($nama_foto)) {
        echo "<script>alert('Pilih foto terlebih dahulu!'); window.location='kelola_aparat.php';</script>";
        exit;
    }

    // Generate Nama Baru agar tidak bentrok
    $ekstensi = strtolower(pathinfo($nama_foto, PATHINFO_EXTENSION));
    $namaBaru = "aparat_" . uniqid() . "." . $ekstensi;

    // Pindahkan ke folder assets/img/team/
    if (move_uploaded_file($tmp_name, '../assets/img/team/' . $namaBaru)) {
        // Simpan ke database (Tambahkan kolom nip dan variabel $nip)
        $query = "INSERT INTO tabel_aparat (nama, nip, jabatan, foto) VALUES ('$nama', '$nip', '$jabatan', '$namaBaru')";
        
        if (mysqli_query($koneksi, $query)) {
            echo "<script>alert('Aparat Desa berhasil ditambahkan!'); window.location='kelola_aparat.php';</script>";
        } else {
            echo "Error: " . mysqli_error($koneksi);
        }
    } else {
        echo "<script>alert('Gagal mengupload foto!'); window.location='kelola_aparat.php';</script>";
    }
}
?>
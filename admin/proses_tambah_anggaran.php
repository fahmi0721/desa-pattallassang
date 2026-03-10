<?php
include('cek_session.php');
include('../config/koneksi.php');

if(isset($_POST['simpan'])){
    $bidang    = mysqli_real_escape_string($koneksi, $_POST['bidang']);
    $pagu      = $_POST['pagu'];
    $realisasi = $_POST['realisasi'];
    $tahun     = $_POST['tahun'];

    $query = mysqli_query($koneksi, "INSERT INTO tabel_anggaran (bidang, pagu_anggaran, realisasi, tahun) 
             VALUES ('$bidang', '$pagu', '$realisasi', '$tahun')");

    if($query){
        echo "<script>alert('Data anggaran berhasil ditambahkan!'); window.location='kelola_anggaran.php';</script>";
    } else {
        echo "Gagal: " . mysqli_error($koneksi);
    }
}
?>
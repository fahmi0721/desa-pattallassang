<?php
include('cek_session.php');
include('../config/koneksi.php');

if(isset($_GET['id'])){
    $id = mysqli_real_escape_string($koneksi, $_GET['id']);
    
    $query = mysqli_query($koneksi, "DELETE FROM tabel_anggaran WHERE id = '$id'");

    if($query){
        echo "<script>alert('Data anggaran berhasil dihapus!'); window.location='kelola_anggaran.php';</script>";
    } else {
        echo "<script>alert('Gagal menghapus data!'); window.location='kelola_anggaran.php';</script>";
    }
} else {
    header("location:kelola_anggaran.php");
}
?>
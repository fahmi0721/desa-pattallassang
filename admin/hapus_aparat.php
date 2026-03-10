<?php
include('cek_session.php');
include('../config/koneksi.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Ambil nama foto untuk dihapus dari folder
    $pilih = mysqli_query($koneksi, "SELECT foto FROM tabel_aparat WHERE id='$id'");
    $data = mysqli_fetch_array($pilih);
    $foto = $data['foto'];

    if (file_exists("../assets/img/team/$foto")) {
        unlink("../assets/img/team/$foto");
    }

    mysqli_query($koneksi, "DELETE FROM tabel_aparat WHERE id='$id'");
    header("location:kelola_aparat.php");
}
?>
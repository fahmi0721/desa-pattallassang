<?php
include('cek_session.php'); include('../config/koneksi.php');

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $nip = $_POST['nip'];
    $jabatan = $_POST['jabatan'];
    $nama_foto = $_FILES['foto']['name'];

    if($nama_foto != ""){
        $nama_baru = uniqid().$nama_foto;
        move_uploaded_file($_FILES['foto']['tmp_name'], '../assets/img/team/'.$nama_baru);
        mysqli_query($koneksi, "UPDATE tabel_aparat SET nama='$nama', nip='$nip', jabatan='$jabatan', foto='$nama_baru' WHERE id='$id'");
    } else {
        mysqli_query($koneksi, "UPDATE tabel_aparat SET nama='$nama', nip='$nip', jabatan='$jabatan' WHERE id='$id'");
    }
    header("location:kelola_aparat.php");
}
?>
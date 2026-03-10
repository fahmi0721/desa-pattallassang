<?php
session_start();
include('../config/koneksi.php');

if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($koneksi, $_POST['username']);
    $password = mysqli_real_escape_string($koneksi, $_POST['password']);

    // Mencari user di database
    $query = mysqli_query($koneksi, "SELECT * FROM tabel_admin WHERE username='$username' AND password='$password'");
    $cek = mysqli_num_rows($query);

    if ($cek > 0) {
        $data = mysqli_fetch_assoc($query);
        // Membuat session agar admin dikenali sistem
        $_SESSION['admin_id'] = $data['id'];
        $_SESSION['username'] = $data['username'];
        $_SESSION['status']   = "login";

        header("location:index.php"); // Pindah ke dashboard admin
    } else {
        echo "<script>alert('Username atau Password Salah!'); window.location='login.php';</script>";
    }
}
?>
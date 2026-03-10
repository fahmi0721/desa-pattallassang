<?php
session_start();

// Jika status session bukan 'login', maka lempar kembali ke halaman login.php
if ($_SESSION['status'] != "login") {
    header("location:login.php?pesan=belum_login");
    exit();
}
?>
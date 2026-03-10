<?php
$host = "localhost";
$user = "pattallassang";
$pass = "9B8M+AG02eV|";
$db   = "pattallassang";

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
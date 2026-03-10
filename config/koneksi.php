<?php
$host = "localhost";
$user = "u681846573_pattallassang";
$pass = "9B8M+AG02eV|";
$db   = "u681846573_pattallassang";

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
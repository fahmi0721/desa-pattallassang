<?php
// Memanggil file koneksi yang ada di dalam folder config
include('config/koneksi.php');

// Mengecek apakah variabel $koneksi (dari file koneksi.php) ada dan berfungsi
if ($koneksi) {
    echo "<h1 style='color: green;'>Selamat! Koneksi ke Database db_pattallassang Berhasil.</h1>";
    echo "<p>Sekarang website Anda sudah siap menerima data berita.</p>";
} else {
    // Bagian ini sebenarnya jarang muncul karena sudah ada fungsi die() di koneksi.php
    echo "<h1 style='color: red;'>Koneksi Gagal!</h1>";
}
?>
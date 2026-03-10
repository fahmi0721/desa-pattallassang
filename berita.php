<?php 
include('config/koneksi.php'); 
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Berita Desa Pattallassang</title>
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">
    <style>
        main { margin-top: 100px; min-height: 80vh; }
        .card-berita { border: none; transition: 0.3s; border-radius: 12px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.05); }
        .card-berita:hover { transform: translateY(-5px); box-shadow: 0 10px 25px rgba(0,0,0,0.1); }
    </style>
</head>
<body>

    <?php include('components/navbar.php'); ?>

    <main class="container py-5">
        <div class="section-title text-center mb-5" data-aos="fade-up">
            <h2 class="fw-bold">Arsip Berita Desa</h2>
            <p>Kumpulan informasi dan kegiatan terbaru dari Desa Pattallassang</p>
        </div>

        <div class="row gy-4">
            <?php
            $sql = mysqli_query($koneksi, "SELECT * FROM tabel_berita ORDER BY tanggal DESC");
            while($d = mysqli_fetch_array($sql)) {
            ?>
            <div class="col-md-4">
                <div class="card card-berita h-100 d-flex flex-column">
                    <img src="assets/img/blog/<?php echo $d['gambar']; ?>" class="card-img-top" style="height: 220px; object-fit: cover;">
                    <div class="card-body p-4">
                        <small class="text-primary fw-bold text-uppercase"><?php echo $d['kategori']; ?></small>
                        <h5 class="card-title fw-bold mt-2"><?php echo $d['judul']; ?></h5>
                        <p class="card-text text-muted" style="font-size: 0.9rem;"><?php echo substr(strip_tags($d['isi']), 0, 100); ?>...</p>
                        <a href="detail-berita.php?id=<?php echo $d['id']; ?>" class="btn btn-sm btn-link p-0 text-decoration-none fw-bold" style="color:#00BFFF;">Baca Selengkapnya &raquo;</a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </main>

    <?php include('components/footer.php'); ?>

    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
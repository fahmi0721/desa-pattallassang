<?php
include('config/koneksi.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Struktur Pemerintahan - Desa Pattallassang</title>
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/css/main.css" rel="stylesheet">
  <style>
    .header-profile {
      background: linear-gradient(45deg, #00BFFF, #0080ff);
      padding: 80px 0;
      color: white;
      margin-bottom: 50px;
    }

    .card-aparat {
      border: none;
      transition: 0.3s;
      border-radius: 15px;
      overflow: hidden;
      box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
    }

    .card-aparat:hover {
      transform: translateY(-10px);
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
    }

    .img-aparat {
      height: 350px;
      object-fit: cover;
      width: 100%;
    }
  </style>
</head>

<body>

  <header class="header-profile text-center">
    <div class="container">
      <h1 class="fw-bold">Struktur Organisasi Desa</h1>
      <p class="lead">Pemerintah Desa Pattallassang, Kec. Tompobulu, Kab. Bantaeng</p>
      <a href="index.php" class="btn btn-light rounded-pill px-4 mt-3"><i class="bi bi-house-door"></i> Kembali ke Beranda</a>
    </div>
  </header>

  <main class="container mb-5">
    <div class="row gy-4 justify-content-center">

      <?php
      $sql = mysqli_query($koneksi, "SELECT * FROM tabel_aparat ORDER BY id ASC");
      if (mysqli_num_rows($sql) > 0) {
        while ($d = mysqli_fetch_array($sql)) {
      ?>
          <div class="col-lg-3 col-md-6">
            <div class="card card-aparat h-100">
              <img src="assets/img/team/<?php echo $d['foto']; ?>" class="img-aparat" alt="<?php echo $d['nama']; ?>">
              <div class="card-body text-center p-4">
                <h5 class="fw-bold mb-1"><?php echo $d['nama']; ?></h5>
                <p class="text-primary mb-2" style="font-size: 0.9rem; font-weight: 600;"><?php echo $d['jabatan']; ?></p>
                <hr class="short-hr mx-auto" style="width: 50px; border: 2px solid #00BFFF;">
                <p class="text-muted mt-2 mb-0" style="font-size: 0.8rem;">NIP/NIAP: <br> <?php echo $d['nip'] ?: '-'; ?></p>
              </div>
            </div>
          </div>
      <?php
        }
      } else {
        echo "<div class='text-center py-5'><p class='text-muted'>Data sedang disiapkan.</p></div>";
      }
      ?>

    </div>
  </main>

  <footer class="py-4 bg-light border-top">
    <div class="container text-center">
      <small class="text-muted">&copy; 2026 Desa Pattallassang. All Rights Reserved.</small>
    </div>
  </footer>

  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>
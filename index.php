<?php include('components/header.php'); ?>
<?php include('components/navbar.php'); ?>
<?php
include('config/koneksi.php');
?>

<main class="main">

  <!-- section hero -->

  <!-- <section id="hero" class="hero section">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
      <div class="row gy-5 justify-content-between">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
          <h2><span>Selamat Datang di </span><span class="accent">Desa Pattallassang</span></h2>
          <p>Pusat Informasi Digital Desa Pattallassang, Kecamatan Tompobulu, Kabupaten Bantaeng. Melayani dengan hati, membangun dengan aksi.</p>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#about" class="btn-get-started">Jelajahi Desa</a>
          </div>
        </div>
        <div class="col-lg-5 order-1 order-lg-2">
          <img src="assets/img/unitamaxpatlas.jpg" class="img-fluid" alt="Hero Image" />
        </div>
      </div>
    </div>
  </section> -->
  <section id="hero" class="hero section">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
      <div class="row gy-5 justify-content-center">
        <div class="col-lg-8 d-flex flex-column justify-content-center text-center">
          <h2><span>Selamat Datang di </span><span class="accent">Desa Pattallassang</span></h2>
          <p>Pusat Informasi Digital Desa Pattallassang, Kecamatan Tompobulu, Kabupaten Bantaeng. Melayani dengan hati, membangun dengan aksi.</p>
          <div class="d-flex justify-content-center">
            <a href="#about" class="btn-get-started">Jelajahi Desa</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end hero -->

  <!-- section data desa -->
  <section id="stats-counter" class="stats-counter section">
    <div class="container" data-aos="fade-up">
      <div class="row gy-4 text-center">

        <?php
        $sql_stat = mysqli_query($koneksi, "SELECT * FROM tabel_statistik");
        while ($st = mysqli_fetch_array($sql_stat)) {
        ?>
          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center justify-content-center w-100 h-100">
              <i class="bi <?php echo $st['ikon']; ?> flex-shrink-0" style="font-size: 2rem; color: #00BFFF; margin-right: 15px;"></i>
              <div class="text-start">
                <span style="font-size: 1.5rem; font-weight: bold; display: block;"><?php echo number_format($st['jumlah'], 0, ',', '.'); ?></span>
                <p style="margin: 0; color: #666;"><?php echo $st['label']; ?></p>
              </div>
            </div>
          </div>
        <?php } ?>

      </div>
    </div>
  </section>
  <!-- end data desa -->

  <!-- section profil desa -->
  <?php
  // Ambil data profil desa
  $profil = mysqli_query($koneksi, "SELECT * FROM tabel_profil LIMIT 1");
  $data = mysqli_fetch_array($profil);
  ?>

  <section id="about" class="about section light-background py-5">
    <div class="container" data-aos="fade-up">
      <div class="row justify-content-center">
        <div class="col-lg-10 text-center">

          <div class="mb-4">
            <div class="d-inline-block position-relative">
              <img src="assets/img/team/<?php echo $data['foto_kades']; ?>" alt="Kepala Desa"
                class="rounded-circle shadow-sm border border-4 border-white profile-img">
              <div class="dashed-circle"></div>
            </div>
          </div>

          <div class="mb-4">
            <h3 class="fw-bold mb-1 text-dark name-text"><?php echo $data['nama_kades']; ?></h3>
            <span class="badge bg-primary rounded-pill px-3 py-2"><?php echo $data['jabatan']; ?></span>
          </div>

          <div class="row justify-content-center">
            <div class="col-lg-9">
              <div class="sambutan-box">
                <div class="sambutan-text">
                  <?php echo nl2br($data['teks_sambutan']); ?>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

  <style>
    /* 1. Pengaturan Default (Desktop) */
    .profile-img {
      width: 180px;
      height: 180px;
      object-fit: cover;
    }

    .dashed-circle {
      position: absolute;
      top: -10px;
      left: -10px;
      width: 200px;
      height: 200px;
      border: 2px dashed #0d6efd;
      border-radius: 50%;
      z-index: -1;
    }

    .name-text {
      font-size: 24px;
    }

    .sambutan-text {
      font-size: 17px;
      line-height: 1.7;
      color: #555;
      text-align: justify;
    }

    /* 2. Pengaturan Khusus HP (Layar di bawah 768px) */
    @media (max-width: 767px) {
      .profile-img {
        width: 130px;
        height: 130px;
      }

      /* Foto lebih kecil di HP */
      .dashed-circle {
        width: 150px;
        height: 150px;
        top: -10px;
        left: -10px;
      }

      .name-text {
        font-size: 18px;
      }

      /* Nama lebih kecil */
      .sambutan-text {
        font-size: 14px;
        /* Font mengecil agar tidak memakan ruang */
        line-height: 1.5;
        text-align: left;
        /* Rata kiri lebih enak dibaca di layar sempit */
      }

      .py-5 {
        padding-top: 2rem !important;
        padding-bottom: 2rem !important;
      }
    }
  </style>
  <!-- end profil desa -->

  <!-- section aparat -->
  <section id="aparat" class="team section">
    <div class="container section-title" data-aos="fade-up">
      <h2>Perangkat Desa</h2>
      <p>Pelayan masyarakat Desa Pattallassang yang siap membantu Anda.</p>
    </div>

    <div class="container">
      <div class="row gy-4 flex-nowrap overflow-auto pb-4 custom-scroll">

        <?php
        $sql_aparat = mysqli_query($koneksi, "SELECT * FROM tabel_aparat ORDER BY id ASC");
        if (mysqli_num_rows($sql_aparat) > 0) {
          while ($ap = mysqli_fetch_array($sql_aparat)) {
        ?>
            <div class="col-10 col-md-6 col-xl-3 d-flex" data-aos="fade-up">
              <div class="member" style="background: #fff; box-shadow: 0 10px 30px rgba(0,0,0,0.1); border-radius: 15px; overflow: hidden; width: 100%;">
                <div class="member-img" style="position: relative; overflow: hidden; height: 320px;">
                  <img src="assets/img/team/<?php echo $ap['foto']; ?>" class="img-fluid" alt="" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div class="member-info" style="padding: 20px; text-align: center;">
                  <h4 style="font-weight: 700; margin-bottom: 5px; color: #222;"><?php echo $ap['nama']; ?></h4>
                  <p class="text-muted" style="font-size: 12px; margin-bottom: 10px;">NIP: <?php echo $ap['nip'] ?: '-'; ?></p>
                  <span style="display: block; font-style: italic; font-size: 14px; color: #00BFFF; font-weight: 600;"><?php echo $ap['jabatan']; ?></span>
                </div>
              </div>
            </div>
        <?php
          }
        }
        ?>

      </div>
      <div class="text-center mt-5" data-aos="fade-up">
        <a href="profil_aparat.php" class="btn btn-outline-primary" style="border-radius: 30px; padding: 10px 30px; border: 2px solid #00BFFF; color: #00BFFF; font-weight: 600;">
          Lihat Struktur Organisasi Selengkapnya <i class="bi bi-arrow-right"></i>
        </a>
      </div>
    </div>
  </section>
  </div>
  </section>

  <style>
    /* CSS agar scrollbar terlihat rapi di HP */
    @media (max-width: 768px) {
      .custom-scroll {
        -webkit-overflow-scrolling: touch;
        scrollbar-width: none;
        /* Hilangkan scrollbar di Firefox */
      }

      .custom-scroll::-webkit-scrollbar {
        display: none;
        /* Hilangkan scrollbar di Chrome/Safari */
      }
    }
  </style>
  <!-- end section aparat -->

  <!-- layanan desa -->
  <section id="services" class="services section py-5">
    <div class="container">

      <div class="section-title text-center mb-5">
        <h2 class="fw-bold">Layanan Digital Desa</h2>
        <p>Sampaikan aspirasi Anda untuk kemajuan Desa Pattallassang.</p>
      </div>

      <div class="row justify-content-center">

        <div class="col-lg-6 col-md-8">
          <div class="service-item position-relative p-5 shadow-sm rounded-4 bg-white text-center border-top border-primary border-4">
            <div class="icon mb-4">
              <i class="bi bi-megaphone-fill fs-1 text-primary"></i>
            </div>
            <h3 class="fw-bold">Pengaduan Masyarakat</h3>
            <p class="text-muted">
              Warga dapat menyampaikan laporan, keluhan, atau saran mengenai infrastruktur dan pelayanan publik di desa secara langsung melalui sistem ini.
            </p>
            <a href="pengaduan.php" class="btn btn-primary rounded-pill px-5 py-2 mt-3 fw-bold shadow-sm">
              Buat Laporan Sekarang <i class="bi bi-arrow-right ms-2"></i>
            </a>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- end layanan desa -->

  <!-- anggaran desa -->

  <section id="budget" class="section">
    <div class="container section-title" data-aos="fade-up">
      <h2>Transparansi Anggaran</h2>
      <p>Realisasi APBDesa Desa Pattallassang Tahun 2026.</p>
    </div>

    <div class="container">
      <div class="row gy-4 align-items-center">
        <div class="col-lg-6">
          <canvas id="budgetChart" style="max-height: 400px;"></canvas>
        </div>

        <div class="col-lg-6">
          <?php
          $data_bidang = [];
          $data_realisasi = [];
          $sql_pub = mysqli_query($koneksi, "SELECT * FROM tabel_anggaran");
          while ($apb = mysqli_fetch_array($sql_pub)) {
            $data_bidang[] = $apb['bidang'];
            $data_realisasi[] = $apb['realisasi'];
            $p = ($apb['realisasi'] / $apb['pagu_anggaran']) * 100;
          ?>
            <div class="mb-4">
              <div class="d-flex justify-content-between mb-1">
                <span class="fw-bold"><?php echo $apb['bidang']; ?></span>
                <span class="text-primary fw-bold"><?php echo number_format($p, 1); ?>%</span>
              </div>
              <div class="progress" style="height: 10px; border-radius: 10px;">
                <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: <?php echo $p; ?>%; background-color: #00BFFF;"></div>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script>
    const ctx = document.getElementById('budgetChart').getContext('2d');
    new Chart(ctx, {
      type: 'doughnut',
      data: {
        labels: <?php echo json_encode($data_bidang); ?>,
        datasets: [{
          data: <?php echo json_encode($data_realisasi); ?>,
          backgroundColor: ['#DF588D', '#198754', '#ffc107', '#00BFFF'],
          borderWidth: 0
        }]
      },
      options: {
        responsive: true,
        plugins: {
          legend: {
            position: 'bottom'
          }
        }
      }
    });
  </script>
  <!-- end section anggaran -->

  <!-- Section Berita -->
  <section id="recent-posts" class="recent-posts section">
    <div class="container section-title" data-aos="fade-up">
      <h2>Kabar Desa</h2>
      <p>Informasi terbaru mengenai aktivitas di Desa Pattallassang.</p>
    </div>

    <div class="container">
      <div class="row gy-4">
        <?php
        // Mengambil hanya 3 berita terbaru
        $query_berita = mysqli_query($koneksi, "SELECT * FROM tabel_berita ORDER BY tanggal DESC LIMIT 3");
        while ($b = mysqli_fetch_array($query_berita)) {
        ?>
          <div class="col-xl-4 col-md-6" data-aos="fade-up">
            <article style="background: #fff; border-radius: 15px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.05);">
              <div class="post-img" style="height: 220px; overflow: hidden;">
                <img src="assets/img/blog/<?php echo $b['gambar']; ?>" class="img-fluid w-100 h-100" style="object-fit: cover;">
              </div>

              <div class="p-4">
                <p class="post-category text-primary fw-bold" style="font-size: 0.8rem;"><?php echo $b['kategori']; ?></p>
                <h2 class="title" style="font-size: 1.25rem; font-weight: 700;">
                  <a href="detail-berita.php?id=<?php echo $b['id']; ?>" class="text-dark text-decoration-none"><?php echo substr($b['judul'], 0, 60); ?>...</a>
                </h2>
                <div class="d-flex align-items-center mt-3 text-muted" style="font-size: 0.85rem;">
                  <i class="bi bi-calendar-event me-2"></i> <?php echo date('d M Y', strtotime($b['tanggal'])); ?>
                </div>
              </div>
            </article>
          </div>
        <?php } ?>
      </div>

      <div class="text-center mt-5" data-aos="fade-up">
        <a href="berita.php" class="btn btn-primary" style="background: #00BFFF; border: none; border-radius: 30px; padding: 12px 35px; font-weight: 600;">
          Lihat Semua Berita <i class="bi bi-arrow-right-circle ms-2"></i>
        </a>
      </div>
    </div>
  </section>
  <!-- end section berita -->

  <!-- potensi desa -->
  <section id="portfolio" class="portfolio section light-background">
    <div class="container section-title" data-aos="fade-up">
      <h2>Potensi Desa</h2>
      <p>Kekayaan alam dan komoditas unggulan masyarakat Desa Pattallassang.</p>
    </div>

    <div class="container">
      <div class="row gy-4">
        <?php
        $sql_pot = mysqli_query($koneksi, "SELECT * FROM tabel_potensi ORDER BY id DESC");
        while ($pt = mysqli_fetch_array($sql_pot)) {
        ?>
          <div class="col-lg-4 col-md-6" data-aos="fade-up">
            <div class="portfolio-content h-100 shadow-sm rounded overflow-hidden bg-white d-flex flex-column">

              <a href="assets/img/portfolio/<?php echo $pt['gambar']; ?>" data-gallery="portfolio-gallery-app" class="glightbox">
                <img src="assets/img/portfolio/<?php echo $pt['gambar']; ?>" class="img-fluid" alt="<?php echo $pt['judul']; ?>" style="width: 100%; height: 250px; object-fit: cover; cursor: zoom-in;">
              </a>

              <div class="portfolio-info p-4 flex-grow-1">
                <h4 style="color: #00BFFF; font-weight: 700;"><?php echo $pt['judul']; ?></h4>

                <p class="text-muted" style="font-size: 14px; margin-bottom: 15px;">
                  <?php
                  $desc = strip_tags($pt['deskripsi']);
                  echo (strlen($desc) > 100) ? substr($desc, 0, 100) . "..." : $desc;
                  ?>
                </p>

                <button type="button" class="btn btn-sm" data-bs-toggle="modal" data-bs-target="#modalPotensi<?php echo $pt['id']; ?>" style="background: #00BFFF; color: white; border-radius: 20px; padding: 5px 20px;">
                  Cek Selengkapnya <i class="bi bi-info-circle ms-1"></i>
                </button>
              </div>
            </div>
          </div>

          <div class="modal fade" id="modalPotensi<?php echo $pt['id']; ?>" tabindex="-1" aria-labelledby="modalLabel<?php echo $pt['id']; ?>" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
              <div class="modal-content" style="border-radius: 15px; border: none;">
                <div class="modal-header border-0">
                  <h5 class="modal-title fw-bold" id="modalLabel<?php echo $pt['id']; ?>"><?php echo $pt['judul']; ?></h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                  <div class="row">
                    <div class="col-lg-6 mb-3 mb-lg-0">
                      <img src="assets/img/portfolio/<?php echo $pt['gambar']; ?>" class="img-fluid rounded shadow-sm" alt="">
                    </div>
                    <div class="col-lg-6">
                      <h6 class="fw-bold text-primary mb-3">Detail & Keterangan:</h6>
                      <div style="text-align: justify; color: #444; line-height: 1.6;">
                        <?php echo nl2br($pt['deskripsi']); ?>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal-footer border-0">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="border-radius: 8px;">Tutup</button>
                </div>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </section>
  <!-- end potensi desa -->

  <section id="contact" class="contact section">
    <div class="container section-title" data-aos="fade-up">
      <h2>Kontak & Lokasi</h2>
      <p>Hubungi kami atau kunjungi kantor Desa Pattallassang.</p>
    </div>
    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-12">
          <iframe
            style="border:0; width: 100%; height: 350px;"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15886.814241696547!2d120.0467!3d-5.4731!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2db92c00422a9bcd%3A0xcbc3aba6950d6b3e!2sPattalassang%2C%20Kec.%20Tompobulu%2C%20Kabupaten%20Bantaeng%2C%20Sulawesi%20Selatan!5e0!3m2!1sid!2sid!4v1710000000000!5m2!1sid!2sid"
            frameborder="0"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>
      </div>
    </div>
    </div>
  </section>

</main>

<?php include('components/footer.php'); ?>
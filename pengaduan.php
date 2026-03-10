<?php include('config/koneksi.php'); ?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Pengaduan Masyarakat - Desa Pattallassang</title>
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">
    <style>
        main {
            margin-top: 120px;
            padding-bottom: 60px;
        }

        .contact-info-item {
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.05);
            height: 100%;
        }

        .form-pengaduan {
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.05);
        }
    </style>
</head>

<body class="bg-light">

    <?php include('components/navbar.php'); ?>

    <main class="container">
        <div class="section-title text-center mb-5">
            <h2 class="fw-bold">Layanan Pengaduan</h2>
            <p>Sampaikan aspirasi, keluhan, atau laporan Anda secara langsung kepada pemerintah desa.</p>
        </div>

        <div class="row gy-4">
            <div class="col-lg-4">
                <div class="contact-info-item">
                    <div class="d-flex mb-4">
                        <i class="bi bi-geo-alt fs-3 text-primary me-3"></i>
                        <div>
                            <h5 class="fw-bold">Lokasi Kantor</h5>
                            <p class="text-muted small">Kantor Desa Pattallassang, Kec. Tompobulu, Kab. Bantaeng.</p>
                        </div>
                    </div>
                    <div class="d-flex mb-4">
                        <i class="bi bi-envelope fs-3 text-primary me-3"></i>
                        <div>
                            <h5 class="fw-bold">Email Resmi</h5>
                            <p class="text-muted small">pattallassang60@gmail.com</p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <i class="bi bi-whatsapp fs-3 text-primary me-3"></i>
                        <div>
                            <h5 class="fw-bold">WhatsApp Hotline</h5>
                            <p class="text-muted small">+62 823-4955-4522 (KADIR)</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="form-pengaduan">
                    <form action="proses_pengaduan.php" method="POST">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label fw-bold">Nama Lengkap</label>
                                <input type="text" name="nama" class="form-control" placeholder="Masukkan nama Anda" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-bold">Alamat Email / No. HP</label>
                                <input type="text" name="kontak" class="form-control" placeholder="Untuk kami hubungi kembali" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-bold">Alamat / Dusun</label>
                                <select name="alamat" class="form-select rounded-pill" required>
                                    <option value="">-- Pilih Dusun --</option>
                                    <option value="Dusun puroro">Dusun Puro'ro</option>
                                    <option value="Dusun kalumpang">Dusun Kalumpang</option>
                                    <option value="Dusun sarroangin">Dusun Sarroangin</option>
                                    <option value="Dusun borong kapala">Dusun Borong Kapala</option>
                                    <option value="Dusun nippon">Dusun Nippon</option>
                                    <option value="Dusun masarang">Dusun Masarang</option>
                                    <option value="Dusun taruttu">Dusun Taruttu</option>
                                    <option value="Dusun kampung parang">Dusun Kampung Parang</option>

                                </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label fw-bold">Subjek / Judul Laporan</label>
                                <input type="text" name="subjek" class="form-control" placeholder="Contoh: Laporan Jalan Rusak" required>
                            </div>
                            <div class="col-12">
                                <label class="form-label fw-bold">Isi Pengaduan</label>
                                <textarea name="pesan" class="form-control" rows="6" placeholder="Jelaskan detail laporan Anda secara lengkap..." required></textarea>
                            </div>
                            <div class="col-12 mt-4">
                                <button type="submit" name="kirim" class="btn btn-primary rounded-pill px-5 py-2 fw-bold">
                                    Kirim Pengaduan <i class="bi bi-send ms-2"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <?php include('components/footer.php'); ?>

    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>
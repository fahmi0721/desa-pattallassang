<?php
include('config/koneksi.php');
$id = mysqli_real_escape_string($koneksi, $_GET['id']);
$query = mysqli_query($koneksi, "SELECT * FROM tabel_berita WHERE id = '$id'");
$data = mysqli_fetch_array($query);

if(!$data) { header("location:berita.php"); exit; }

// URL untuk fitur share
$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data['judul']; ?> - Desa Pattallassang</title>
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">
    <style>
        main { margin-top: 110px; padding-bottom: 60px; }
        .article-content { background: white; padding: 40px; border-radius: 15px; box-shadow: 0 5px 25px rgba(0,0,0,0.05); }
        .sidebar-box { background: white; padding: 25px; border-radius: 15px; box-shadow: 0 5px 25px rgba(0,0,0,0.05); position: sticky; top: 110px; }
        .content-body { line-height: 1.8; color: #444; font-size: 1.1rem; text-align: justify; margin-bottom: 40px; }
        .share-buttons .btn { border-radius: 50px; padding: 8px 20px; font-size: 0.9rem; font-weight: 600; transition: 0.3s; }
        .share-buttons .btn-whatsapp { background-color: #25d366; color: white; border: none; }
        .share-buttons .btn-facebook { background-color: #1877f2; color: white; border: none; }
        .share-buttons .btn-copy { background-color: #6c757d; color: white; border: none; }
        .share-buttons .btn:hover { opacity: 0.8; transform: translateY(-2px); color: white; }
    </style>
</head>
<body class="bg-light">

    <?php include('components/navbar.php'); ?>

    <main class="container">
        <div class="row gy-4">
            
            <div class="col-lg-8">
                <article class="article-content">
                    <nav aria-label="breadcrumb" class="mb-3 small">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php" class="text-decoration-none">Beranda</a></li>
                            <li class="breadcrumb-item"><a href="berita.php" class="text-decoration-none">Berita</a></li>
                            <li class="breadcrumb-item active"><?php echo $data['kategori']; ?></li>
                        </ol>
                    </nav>

                    <h1 class="fw-bold mb-4" style="color: #222;"><?php echo $data['judul']; ?></h1>
                    
                    <div class="d-flex gap-3 mb-4 text-muted small border-bottom pb-3">
                        <span><i class="bi bi-calendar3 text-primary"></i> <?php echo date('d F Y', strtotime($data['tanggal'])); ?></span>
                        <span><i class="bi bi-tags text-primary"></i> <?php echo $data['kategori']; ?></span>
                    </div>

                    <img src="assets/img/blog/<?php echo $data['gambar']; ?>" class="img-fluid rounded mb-4 w-100 shadow-sm">

                    <div class="content-body">
                        <?php echo nl2br($data['isi']); ?>
                    </div>

                    <div class="share-buttons border-top pt-4">
                        <p class="fw-bold mb-3 text-dark"><i class="bi bi-share-fill me-2"></i>Bagikan informasi ini:</p>
                        <div class="d-flex flex-wrap gap-2">
                            <a href="https://api.whatsapp.com/send?text=<?php echo urlencode($data['judul'] . " - " . $actual_link); ?>" target="_blank" class="btn btn-whatsapp shadow-sm">
                                <i class="bi bi-whatsapp me-2"></i>WhatsApp
                            </a>
                            
                            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode($actual_link); ?>" target="_blank" class="btn btn-facebook shadow-sm">
                                <i class="bi bi-facebook me-2"></i>Facebook
                            </a>

                            <button onclick="copyToClipboard()" class="btn btn-copy shadow-sm">
                                <i class="bi bi-link-45deg me-2"></i><span id="btnText">Salin Link</span>
                            </button>
                        </div>
                    </div>
                </article>
            </div>

            <div class="col-lg-4">
                <div class="sidebar-box shadow-sm">
                    <h5 class="fw-bold mb-4 border-start border-primary border-4 ps-3">Berita Terbaru</h5>
                    <?php
                    $sql_recent = mysqli_query($koneksi, "SELECT * FROM tabel_berita WHERE id != '$id' ORDER BY tanggal DESC LIMIT 5");
                    while($r = mysqli_fetch_array($sql_recent)) {
                    ?>
                    <div class="d-flex align-items-center mb-3 pb-3 border-bottom">
                        <img src="assets/img/blog/<?php echo $r['gambar']; ?>" width="70" height="50" class="rounded object-fit-cover me-3">
                        <div>
                            <h6 class="mb-1" style="font-size: 0.9rem;">
                                <a href="detail-berita.php?id=<?php echo $r['id']; ?>" class="text-dark text-decoration-none fw-semibold"><?php echo substr($r['judul'], 0, 45); ?>...</a>
                            </h6>
                            <small class="text-muted" style="font-size: 0.75rem;"><?php echo date('d M Y', strtotime($r['tanggal'])); ?></small>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>

        </div>
    </main>

    <?php include('components/footer.php'); ?>

    <script>
    function copyToClipboard() {
        const link = "<?php echo $actual_link; ?>";
        navigator.clipboard.writeText(link).then(() => {
            const btnText = document.getElementById('btnText');
            btnText.innerText = 'Link Tersalin!';
            setTimeout(() => {
                btnText.innerText = 'Salin Link';
            }, 2000);
        });
    }
    </script>

    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php include('components/header.php'); ?>
<?php include('components/sidebar.php'); ?>

<div class="d-flex justify-content-between align-items-center mb-4">
    <h3 class="fw-bold">Kelola Potensi Desa</h3>
    <a href="tambah_potensi.php" class="btn btn-success rounded-pill px-4">
        <i class="bi bi-plus-lg"></i> Tambah Potensi
    </a>
</div>

<div class="card stat-card p-4">
    <div class="table-responsive">
        <table class="table table-hover">
            <thead class="table-light">
                <tr>
                    <th>No</th>
                    <th>Foto</th>
                    <th>Nama Potensi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $no = 1;
                $sql = mysqli_query($koneksi, "SELECT * FROM tabel_potensi ORDER BY id DESC");
                while($d = mysqli_fetch_array($sql)){
                ?>
                <tr>
                    <td class="align-middle"><?php echo $no++; ?></td>
                    <td><img src="../assets/img/portfolio/<?php echo $d['gambar']; ?>" width="80" class="rounded shadow-sm"></td>
                    <td class="align-middle fw-bold"><?php echo $d['judul']; ?></td>
                    <td class="align-middle">
                        <a href="edit_potensi.php?id=<?php echo $d['id']; ?>" class="btn btn-sm btn-warning rounded-pill"><i class="bi bi-pencil"></i></a>
                        <a href="hapus_potensi.php?id=<?php echo $d['id']; ?>" class="btn btn-sm btn-danger rounded-pill" onclick="return confirm('Hapus potensi ini?')"><i class="bi bi-trash"></i></a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<?php include('components/footer.php'); ?>
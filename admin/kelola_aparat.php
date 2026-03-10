<?php include('components/header.php'); ?>
<?php include('components/sidebar.php'); ?>

<div class="d-flex justify-content-between align-items-center mb-4">
    <h3 class="fw-bold">Aparat Desa</h3>
    <a href="tambah_aparat.php" class="btn btn-info text-white rounded-pill px-4">
        <i class="bi bi-person-plus"></i> Tambah Aparat
    </a>
</div>

<div class="card stat-card p-4">
    <div class="table-responsive">
        <table class="table table-hover">
            <thead class="table-light">
                <tr>
                    <th>Foto</th>
                    <th>Nama & NIP</th>
                    <th>Jabatan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $sql = mysqli_query($koneksi, "SELECT * FROM tabel_aparat");
                while($d = mysqli_fetch_array($sql)){
                ?>
                <tr>
                    <td><img src="../assets/img/team/<?php echo $d['foto']; ?>" width="50" height="50" class="rounded-circle object-fit-cover"></td>
                    <td>
                        <span class="fw-bold"><?php echo $d['nama']; ?></span><br>
                        <small class="text-muted"><?php echo $d['nip']; ?></small>
                    </td>
                    <td><?php echo $d['jabatan']; ?></td>
                    <td>
                        <a href="edit_aparat.php?id=<?php echo $d['id']; ?>" class="btn btn-sm btn-warning rounded-circle"><i class="bi bi-pencil"></i></a>
                        <a href="hapus_aparat.php?id=<?php echo $d['id']; ?>" class="btn btn-sm btn-danger rounded-circle" onclick="return confirm('Hapus?')"><i class="bi bi-trash"></i></a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<?php include('components/footer.php'); ?>
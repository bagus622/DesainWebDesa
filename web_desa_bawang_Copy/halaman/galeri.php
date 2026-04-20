<?php
include '../admin/koneksi.php';
$sql = "SELECT * FROM galeri";
$result = mysqli_query($koneksi, $sql);
?>

<div class="con-galeri">
    <h2 class="text-center">Galeri Desa</h2>
    <hr>
    <div class="row">
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <div class="col-md-4">
                <div class="card-galeri">
                    <img src="aset/gambar/<?php echo $row['gambar']; ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text"><?php echo $row['keterangan']; ?></p>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
</div>

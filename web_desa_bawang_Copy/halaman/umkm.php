<?php
include '../admin/koneksi.php';
$sql = "SELECT * FROM umkm";
$result = mysqli_query($koneksi, $sql);
?>

<div class="con-umkm">
    <h2 class="text-center">UMKM Desa</h2>
    <hr>
    <div class="row">
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <div class="col-md-4">
                <div class="card-umkm">
                    <img src="aset/gambar/<?php echo $row['gambar']; ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['nama']; ?></h5>
                        <p class="card-text"><?php echo $row['deskripsi']; ?></p>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
</div>

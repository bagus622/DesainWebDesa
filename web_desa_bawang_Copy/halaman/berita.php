<?php
include '../admin/koneksi.php';
$sql = "SELECT * FROM berita ORDER BY tanggal DESC";
$result = mysqli_query($koneksi, $sql);
?>

<div class="con-berita">
    <h2 class="text-center">Berita Desa</h2>
    <hr>
    <div class="row">
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <div class="col-md-4">
                <div class="card-berita">
                    <img src="aset/gambar/<?php echo $row['gambar']; ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['judul']; ?></h5>
                        <p class="card-text"><?php echo substr($row['isi'], 0, 100); ?>...</p>
                        <a href="index.php?halaman=detail_berita&id=<?php echo $row['id']; ?>" class="btn btn-primary">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
</div>
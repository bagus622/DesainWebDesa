<?php
include '../admin/koneksi.php';
$id = $_GET['id'];
$sql = "SELECT * FROM berita WHERE id=$id";
$result = mysqli_query($koneksi, $sql);
$row = mysqli_fetch_assoc($result);
?>

<div class="con-berita">
    <h2 class="text-center"><?php echo $row['judul']; ?></h2>
    <hr>
    <div class="row">
        <div class="col-md-12">
            <div class="card-berita">
                <img src="aset/gambar/<?php echo $row['gambar']; ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text"><?php echo $row['isi']; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>

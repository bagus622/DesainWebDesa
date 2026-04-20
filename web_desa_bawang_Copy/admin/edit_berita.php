<?php
session_start();
if ($_SESSION['status'] != "login") {
  header("location:login.php?pesan=belum_login");
}
include 'koneksi.php';

// Tambah Berita
if (isset($_POST['tambah_berita'])) {
  $judul = $_POST['judul'];
  $isi = $_POST['isi'];
  $gambar = $_FILES['gambar']['name'];
  $tanggal = date('Y-m-d');
  $target = "../aset/gambar/" . basename($gambar);

  $sql = "INSERT INTO berita (judul, isi, gambar, tanggal) VALUES ('$judul', '$isi', '$gambar', '$tanggal')";
  mysqli_query($koneksi, $sql);
  move_uploaded_file($_FILES['gambar']['tmp_name'], $target);
}

// Edit Berita
if (isset($_POST['edit_berita'])) {
  $id = $_POST['id'];
  $judul = $_POST['judul'];
  $isi = $_POST['isi'];
  $gambar = $_FILES['gambar']['name'];
  $tanggal = date('Y-m-d');

  if ($gambar == "") {
    $sql = "UPDATE berita SET judul='$judul', isi='$isi', tanggal='$tanggal' WHERE id=$id";
  } else {
    $target = "../aset/gambar/" . basename($gambar);
    $sql = "UPDATE berita SET judul='$judul', isi='$isi', gambar='$gambar', tanggal='$tanggal' WHERE id=$id";
    move_uploaded_file($_FILES['gambar']['tmp_name'], $target);
  }
  mysqli_query($koneksi, $sql);
}

// Hapus Berita
if (isset($_GET['hapus_berita'])) {
  $id = $_GET['hapus_berita'];
  $sql = "DELETE FROM berita WHERE id=$id";
  mysqli_query($koneksi, $sql);
}

$sql = "SELECT * FROM berita";
$result = mysqli_query($koneksi, $sql);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Edit Berita</title>
</head>
<body>
  <h2>Edit Berita</h2>
  <a href="dashboard.php">Kembali ke Dashboard</a>
  <hr>

  <h3>Tambah Berita</h3>
  <form action="" method="post" enctype="multipart/form-data">
    Judul: <input type="text" name="judul"><br>
    Isi: <textarea name="isi"></textarea><br>
    Gambar: <input type="file" name="gambar"><br>
    <button type="submit" name="tambah_berita">Tambah</button>
  </form>
  <hr>

  <h3>Daftar Berita</h3>
  <table border="1">
    <tr>
      <th>No</th>
      <th>Judul</th>
      <th>Isi</th>
      <th>Gambar</th>
      <th>Tanggal</th>
      <th>Aksi</th>
    </tr>
    <?php
    $no = 1;
    while ($row = mysqli_fetch_assoc($result)) {
      echo "<tr>";
      echo "<td>" . $no++ . "</td>";
      echo "<td>" . $row['judul'] . "</td>";
      echo "<td>" . $row['isi'] . "</td>";
      echo "<td><img src='../aset/gambar/" . $row['gambar'] . "' width='100'></td>";
      echo "<td>" . $row['tanggal'] . "</td>";
      echo "<td>";
      echo "<a href='edit_berita.php?edit=" . $row['id'] . "'>Edit</a> | ";
      echo "<a href='edit_berita.php?hapus_berita=" . $row['id'] . "'>Hapus</a>";
      echo "</td>";
      echo "</tr>";
    }
    ?>
  </table>

  <?php
  if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $sql = "SELECT * FROM berita WHERE id=$id";
    $result = mysqli_query($koneksi, $sql);
    $row = mysqli_fetch_assoc($result);
  ?>
    <hr>
    <h3>Edit Berita</h3>
    <form action="" method="post" enctype="multipart/form-data">
      <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
      Judul: <input type="text" name="judul" value="<?php echo $row['judul']; ?>"><br>
      Isi: <textarea name="isi"><?php echo $row['isi']; ?></textarea><br>
      Gambar: <input type="file" name="gambar"><br>
      <img src="../aset/gambar/<?php echo $row['gambar']; ?>" width="100">
      <br>
      <button type="submit" name="edit_berita">Update</button>
    </form>
  <?php
  }
  ?>
</body>
</html>

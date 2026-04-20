<?php
session_start();
if ($_SESSION['status'] != "login") {
  header("location:login.php?pesan=belum_login");
}
include 'koneksi.php';

// Tambah Galeri
if (isset($_POST['tambah_galeri'])) {
  $keterangan = $_POST['keterangan'];
  $gambar = $_FILES['gambar']['name'];
  $target = "../aset/gambar/" . basename($gambar);

  $sql = "INSERT INTO galeri (gambar, keterangan) VALUES ('$gambar', '$keterangan')";
  mysqli_query($koneksi, $sql);
  move_uploaded_file($_FILES['gambar']['tmp_name'], $target);
}

// Edit Galeri
if (isset($_POST['edit_galeri'])) {
  $id = $_POST['id'];
  $keterangan = $_POST['keterangan'];
  $gambar = $_FILES['gambar']['name'];

  if ($gambar == "") {
    $sql = "UPDATE galeri SET keterangan='$keterangan' WHERE id=$id";
  } else {
    $target = "../aset/gambar/" . basename($gambar);
    $sql = "UPDATE galeri SET gambar='$gambar', keterangan='$keterangan' WHERE id=$id";
    move_uploaded_file($_FILES['gambar']['tmp_name'], $target);
  }
  mysqli_query($koneksi, $sql);
}

// Hapus Galeri
if (isset($_GET['hapus_galeri'])) {
  $id = $_GET['hapus_galeri'];
  $sql = "DELETE FROM galeri WHERE id=$id";
  mysqli_query($koneksi, $sql);
}

$sql = "SELECT * FROM galeri";
$result = mysqli_query($koneksi, $sql);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Edit Galeri</title>
</head>
<body>
  <h2>Edit Galeri</h2>
  <a href="dashboard.php">Kembali ke Dashboard</a>
  <hr>

  <h3>Tambah Galeri</h3>
  <form action="" method="post" enctype="multipart/form-data">
    Keterangan: <input type="text" name="keterangan"><br>
    Gambar: <input type="file" name="gambar"><br>
    <button type="submit" name="tambah_galeri">Tambah</button>
  </form>
  <hr>

  <h3>Daftar Galeri</h3>
  <table border="1">
    <tr>
      <th>No</th>
      <th>Gambar</th>
      <th>Keterangan</th>
      <th>Aksi</th>
    </tr>
    <?php
    $no = 1;
    while ($row = mysqli_fetch_assoc($result)) {
      echo "<tr>";
      echo "<td>" . $no++ . "</td>";
      echo "<td><img src='../aset/gambar/" . $row['gambar'] . "' width='100'></td>";
      echo "<td>" . $row['keterangan'] . "</td>";
      echo "<td>";
      echo "<a href='edit_galeri.php?edit=" . $row['id'] . "'>Edit</a> | ";
      echo "<a href='edit_galeri.php?hapus_galeri=" . $row['id'] . "'>Hapus</a>";
      echo "</td>";
      echo "</tr>";
    }
    ?>
  </table>

  <?php
  if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $sql = "SELECT * FROM galeri WHERE id=$id";
    $result = mysqli_query($koneksi, $sql);
    $row = mysqli_fetch_assoc($result);
  ?>
    <hr>
    <h3>Edit Galeri</h3>
    <form action="" method="post" enctype="multipart/form-data">
      <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
      Keterangan: <input type="text" name="keterangan" value="<?php echo $row['keterangan']; ?>"><br>
      Gambar: <input type="file" name="gambar"><br>
      <img src="../aset/gambar/<?php echo $row['gambar']; ?>" width="100">
      <br>
      <button type="submit" name="edit_galeri">Update</button>
    </form>
  <?php
  }
  ?>
</body>
</html>

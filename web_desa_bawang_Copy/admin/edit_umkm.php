<?php
session_start();
if ($_SESSION['status'] != "login") {
  header("location:login.php?pesan=belum_login");
}
include 'koneksi.php';

// Tambah UMKM
if (isset($_POST['tambah_umkm'])) {
  $nama = $_POST['nama'];
  $deskripsi = $_POST['deskripsi'];
  $gambar = $_FILES['gambar']['name'];
  $target = "../aset/gambar/" . basename($gambar);

  $sql = "INSERT INTO umkm (nama, deskripsi, gambar) VALUES ('$nama', '$deskripsi', '$gambar')";
  mysqli_query($koneksi, $sql);
  move_uploaded_file($_FILES['gambar']['tmp_name'], $target);
}

// Edit UMKM
if (isset($_POST['edit_umkm'])) {
  $id = $_POST['id'];
  $nama = $_POST['nama'];
  $deskripsi = $_POST['deskripsi'];
  $gambar = $_FILES['gambar']['name'];

  if ($gambar == "") {
    $sql = "UPDATE umkm SET nama='$nama', deskripsi='$deskripsi' WHERE id=$id";
  } else {
    $target = "../aset/gambar/" . basename($gambar);
    $sql = "UPDATE umkm SET nama='$nama', deskripsi='$deskripsi', gambar='$gambar' WHERE id=$id";
    move_uploaded_file($_FILES['gambar']['tmp_name'], $target);
  }
  mysqli_query($koneksi, $sql);
}

// Hapus UMKM
if (isset($_GET['hapus_umkm'])) {
  $id = $_GET['hapus_umkm'];
  $sql = "DELETE FROM umkm WHERE id=$id";
  mysqli_query($koneksi, $sql);
}

$sql = "SELECT * FROM umkm";
$result = mysqli_query($koneksi, $sql);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Edit UMKM</title>
</head>
<body>
  <h2>Edit UMKM</h2>
  <a href="dashboard.php">Kembali ke Dashboard</a>
  <hr>

  <h3>Tambah UMKM</h3>
  <form action="" method="post" enctype="multipart/form-data">
    Nama: <input type="text" name="nama"><br>
    Deskripsi: <textarea name="deskripsi"></textarea><br>
    Gambar: <input type="file" name="gambar"><br>
    <button type="submit" name="tambah_umkm">Tambah</button>
  </form>
  <hr>

  <h3>Daftar UMKM</h3>
  <table border="1">
    <tr>
      <th>No</th>
      <th>Nama</th>
      <th>Deskripsi</th>
      <th>Gambar</th>
      <th>Aksi</th>
    </tr>
    <?php
    $no = 1;
    while ($row = mysqli_fetch_assoc($result)) {
      echo "<tr>";
      echo "<td>" . $no++ . "</td>";
      echo "<td>" . $row['nama'] . "</td>";
      echo "<td>" . $row['deskripsi'] . "</td>";
      echo "<td><img src='../aset/gambar/" . $row['gambar'] . "' width='100'></td>";
      echo "<td>";
      echo "<a href='edit_umkm.php?edit=" . $row['id'] . "'>Edit</a> | ";
      echo "<a href='edit_umkm.php?hapus_umkm=" . $row['id'] . "'>Hapus</a>";
      echo "</td>";
      echo "</tr>";
    }
    ?>
  </table>

  <?php
  if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $sql = "SELECT * FROM umkm WHERE id=$id";
    $result = mysqli_query($koneksi, $sql);
    $row = mysqli_fetch_assoc($result);
  ?>
    <hr>
    <h3>Edit UMKM</h3>
    <form action="" method="post" enctype="multipart/form-data">
      <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
      Nama: <input type="text" name="nama" value="<?php echo $row['nama']; ?>"><br>
      Deskripsi: <textarea name="deskripsi"><?php echo $row['deskripsi']; ?></textarea><br>
      Gambar: <input type="file" name="gambar"><br>
      <img src="../aset/gambar/<?php echo $row['gambar']; ?>" width="100">
      <br>
      <button type="submit" name="edit_umkm">Update</button>
    </form>
  <?php
  }
  ?>
</body>
</html>

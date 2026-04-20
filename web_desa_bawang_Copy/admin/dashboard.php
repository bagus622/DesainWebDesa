<?php
session_start();
if ($_SESSION['status'] != "login") {
  header("location:login.php?pesan=belum_login");
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Dashboard Admin</title>
</head>
<body>
  <h2>Dashboard Admin</h2>
  <p>Selamat datang, <?php echo $_SESSION['username']; ?>!</p>
  <ul>
    <li><a href="edit_berita.php">Edit Berita</a></li>
    <li><a href="edit_galeri.php">Edit Galeri</a></li>
    <li><a href="edit_umkm.php">Edit UMKM</a></li>
  </ul>
  <a href="logout.php">Logout</a>
</body>
</html>

<?php
session_start();
if ($_SESSION['status'] != "login") {
  header("location:login.php?pesan=belum_login");
} else {
  header("location:dashboard.php");
}
?>

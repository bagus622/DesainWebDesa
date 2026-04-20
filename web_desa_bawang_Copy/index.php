<?php
include 'komponen/kepala.php';
include 'komponen/navigasi.php';
?>

<!-- HERO DITEMPATKAN FULL WIDTH -->
<?php
if (!isset($_GET['halaman']) || $_GET['halaman'] === 'beranda') {
    include 'halaman/beranda.php';  // BERANDA (HERO) di luar <main>
}
?>

<!-- Konten lain masih dalam container -->
<main class="max-w-6xl mx-auto px-4 py-8">
<?php
$halaman = $_GET['halaman'] ?? 'beranda';

if ($halaman !== 'beranda') {
    include "halaman/{$halaman}.php";
}
?>
</main>


<?php include __DIR__ . '/komponen/kaki.php'; ?>

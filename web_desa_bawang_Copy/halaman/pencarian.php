<!-- halaman/pencarian.php -->
<?php
$keyword = trim($_GET['cari'] ?? '');
$keywordLower = mb_strtolower($keyword);

// Data berita (samakan dengan halaman/berita.php)
$berita = [
  [
    'judul'    => 'Gotong Royong Pembersihan Saluran Irigasi',
    'tanggal'  => '01 Desember 2025',
    'ringkasan'=> 'Warga desa bersama perangkat desa melakukan kegiatan gotong royong membersihkan saluran irigasi utama.',
    'gambar'   => 'gotong-royong.jpg'
  ],
  [
    'judul'    => 'Pelatihan UMKM Bagi Warga Desa',
    'tanggal'  => '20 November 2025',
    'ringkasan'=> 'Pemerintah desa mengadakan pelatihan pengembangan usaha mikro kecil menengah bagi pelaku usaha desa.',
    'gambar'   => 'pelatihan-umkm.jpg'
  ],
];

// Data galeri (samakan dengan halaman/galeri.php)
$galeri = [
  ['file' => 'kegiatan-warga.jpg', 'judul' => 'Kegiatan Warga'],
  ['file' => 'posyandu.jpg',       'judul' => 'Posyandu Balita'],
  ['file' => 'panen-raya.jpg',     'judul' => 'Panen Raya'],
  ['file' => 'rapat-desa.jpg',     'judul' => 'Rapat Desa'],
];

// Data profil (visi & misi disingkat untuk pencarian)
$profil = [
  'judul' => 'Profil Desa Bawang',
  'teks'  => 'Desa Bawang adalah desa di Kecamatan Bawang, Kabupaten Banjarnegara, dengan visi terwujudnya desa yang mandiri, beriman, dan berkelanjutan melalui pembangunan dan pemberdayaan masyarakat.',
  'url'   => 'index.php?halaman=profil-desa',
];

// Hasil
$hasilBerita = [];
$hasilGaleri = [];
$hasilHalaman = [];

// Fungsi helper pencarian
function cocok($teks, $kunci) {
  return mb_strpos(mb_strtolower($teks), $kunci) !== false;
}

// Proses pencarian jika keyword tidak kosong
if ($keyword !== '') {

  // Cari di berita
  foreach ($berita as $b) {
    if (cocok($b['judul'], $keywordLower) || cocok($b['ringkasan'], $keywordLower)) {
      $hasilBerita[] = $b;
    }
  }

  // Cari di galeri
  foreach ($galeri as $g) {
    if (cocok($g['judul'], $keywordLower)) {
      $hasilGaleri[] = $g;
    }
  }

  // Cari di profil
  if (cocok($profil['judul'], $keywordLower) || cocok($profil['teks'], $keywordLower)) {
    $hasilHalaman[] = $profil;
  }

}
?>

<section class="bg-white rounded-2xl shadow-sm p-6 md:p-8 border border-slate-100 anim-naik">

  <!-- HEADER -->
  <h1 class="text-2xl md:text-3xl font-bold text-slate-900 mb-2">
    Hasil Pencarian
  </h1>
  <p class="text-sm md:text-base text-slate-700 mb-4">
    Kata kunci:
    <span class="font-semibold text-desaBiru">
      "<?php echo htmlspecialchars($keyword ?: '-'); ?>"
    </span>
  </p>

  <?php if ($keyword === ''): ?>
    <p class="text-sm text-slate-600">
      Silakan masukkan kata kunci pada kotak pencarian di bagian atas.
    </p>
  <?php else: ?>

    <?php if (!$hasilBerita && !$hasilGaleri && !$hasilHalaman): ?>
      <div class="mt-4 p-4 rounded-xl bg-slate-50 border border-slate-200 text-sm text-slate-700">
        Tidak ditemukan hasil yang sesuai dengan kata kunci tersebut.
      </div>
    <?php endif; ?>

    <!-- BERITA -->
    <?php if ($hasilBerita): ?>
      <div class="mt-6">
        <h2 class="text-lg md:text-xl font-semibold text-slate-900 mb-3">
          Berita yang cocok
        </h2>
        <div class="grid md:grid-cols-2 gap-4 md:gap-6">
          <?php foreach ($hasilBerita as $b): ?>
            <article class="bg-slate-50 rounded-xl border border-slate-200 overflow-hidden shadow-sm
                           transition-transform transition-shadow duration-300 hover:-translate-y-1 hover:shadow-lg">
              <div class="h-32 md:h-40 overflow-hidden relative">
                <img src="aset/gambar/<?php echo $b['gambar']; ?>"
                     alt="<?php echo htmlspecialchars($b['judul']); ?>"
                     class="w-full h-full object-cover">
                <div class="absolute inset-x-0 bottom-0 h-12 bg-gradient-to-t from-black/50 to-transparent"></div>
              </div>
              <div class="p-3 md:p-4 text-xs md:text-sm">
                <span class="text-[11px] text-slate-500"><?php echo $b['tanggal']; ?></span>
                <h3 class="font-semibold text-slate-900 mt-1">
                  <?php echo $b['judul']; ?>
                </h3>
                <p class="mt-1 text-slate-600">
                  <?php echo $b['ringkasan']; ?>
                </p>
              </div>
            </article>
          <?php endforeach; ?>
        </div>
      </div>
    <?php endif; ?>

    <!-- GALERI -->
    <?php if ($hasilGaleri): ?>
      <div class="mt-8">
        <h2 class="text-lg md:text-xl font-semibold text-slate-900 mb-3">
          Galeri yang cocok
        </h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-3 md:gap-4">
          <?php foreach ($hasilGaleri as $g): ?>
            <figure class="bg-slate-50 rounded-xl border border-slate-200 overflow-hidden shadow-sm">
              <div class="h-24 md:h-28 overflow-hidden">
                <img src="aset/gambar/<?php echo $g['file']; ?>"
                     alt="<?php echo htmlspecialchars($g['judul']); ?>"
                     class="w-full h-full object-cover">
              </div>
              <figcaption class="px-2 py-2 text-[11px] md:text-xs text-center text-slate-700">
                <?php echo $g['judul']; ?>
              </figcaption>
            </figure>
          <?php endforeach; ?>
        </div>
      </div>
    <?php endif; ?>

    <!-- HALAMAN / PROFIL -->
    <?php if ($hasilHalaman): ?>
      <div class="mt-8">
        <h2 class="text-lg md:text-xl font-semibold text-slate-900 mb-3">
          Halaman yang berkaitan
        </h2>
        <?php foreach ($hasilHalaman as $h): ?>
          <a href="<?php echo $h['url']; ?>"
             class="block bg-slate-50 rounded-xl border border-slate-200 p-4 text-sm text-slate-700 hover:bg-slate-100 transition">
            <h3 class="font-semibold text-slate-900 mb-1">
              <?php echo $h['judul']; ?>
            </h3>
            <p class="text-xs md:text-sm text-slate-600">
              <?php echo $h['teks']; ?>
            </p>
          </a>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>

  <?php endif; ?>

</section>

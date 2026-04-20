<!-- halaman/lembaga-masyarakat.php -->
<?php
$lembaga = [
  [
    'nama'       => 'BPD (Badan Permusyawaratan Desa)',
    'ketua'      => 'Muhammad Arifin',
    'sekretaris' => 'Siti Aminah',
    'anggota'    => 7,
    'kontak'     => '0812-3456-7891',
    'keterangan' => 'Lembaga yang menampung aspirasi dan melakukan pengawasan terhadap penyelenggaraan pemerintahan desa. Memiliki fungsi legislasi, anggaran, dan pengawasan.',
    'tugas'      => ['Legislasi Desa', 'Anggaran APBDes', 'Pengawasan Kinerja'],
    'icon'       => '🏛️',
    'color'      => 'sky',
    'color_class' => 'sky',
    'status'     => 'Aktif'
  ],
  [
    'nama'       => 'LPMD (Lembaga Pemberdayaan Masyarakat Desa)',
    'ketua'      => 'Budi Santoso',
    'sekretaris' => 'Dewi Lestari',
    'anggota'    => 12,
    'kontak'     => '0812-3456-7892',
    'keterangan' => 'Mendukung perencanaan dan pelaksanaan pembangunan desa berbasis partisipasi masyarakat. Fokus pada pemberdayaan ekonomi dan sosial warga.',
    'tugas'      => ['Perencanaan Pembangunan', 'Pemberdayaan Ekonomi', 'Pengorganisasian Masyarakat'],
    'icon'       => '🤝',
    'color'      => 'emerald',
    'color_class' => 'emerald',
    'status'     => 'Aktif'
  ],
  [
    'nama'       => 'PKK Desa Bawang',
    'ketua'      => 'Siti Nurhaliza',
    'sekretaris' => 'Rina Wati',
    'anggota'    => 25,
    'kontak'     => '0812-3456-7893',
    'keterangan' => 'Menggerakkan kegiatan kesejahteraan keluarga, kesehatan, pendidikan, dan pemberdayaan perempuan. Program utama: Posyandu, PAUD, dan pelatihan keterampilan.',
    'tugas'      => ['Kesehatan Keluarga', 'Pendidikan Anak', 'Pemberdayaan Perempuan'],
    'icon'       => '👩‍👧‍👦',
    'color'      => 'rose',
    'color_class' => 'rose',
    'status'     => 'Aktif'
  ],
  [
    'nama'       => 'Karang Taruna "Muda Berkarya"',
    'ketua'      => 'Mohammad Ichlasus Amal',
    'sekretaris' => 'Anita Putri',
    'anggota'    => 35,
    'kontak'     => '0812-3456-7894',
    'keterangan' => 'Organisasi kepemudaan yang aktif dalam kegiatan sosial, olahraga, budaya, dan pengembangan kreativitas pemuda. Mengadakan pelatihan digital dan usaha kreatif.',
    'tugas'      => ['Olahraga & Seni', 'Pengembangan Pemuda', 'Kegiatan Sosial'],
    'icon'       => '🧑‍🤝‍🧑',
    'color'      => 'amber',
    'color_class' => 'amber',
    'status'     => 'Aktif'
  ],
  [
    'nama'       => 'Kelompok Tani "Subur Makmur"',
    'ketua'      => 'Sugiono',
    'sekretaris' => 'Maryono',
    'anggota'    => 42,
    'kontak'     => '0812-3456-7895',
    'keterangan' => 'Kelompok tani yang fokus pada pengembangan pertanian organik dan pemasaran hasil pertanian. Mengelola demonstrasi plot dan pelatihan pertanian modern.',
    'tugas'      => ['Pengembangan Pertanian', 'Pemasaran Hasil', 'Pelatihan Petani'],
    'icon'       => '🌾',
    'color'      => 'green',
    'color_class' => 'green',
    'status'     => 'Aktif'
  ],
  [
    'nama'       => 'Forum RT/RW Desa Bawang',
    'ketua'      => 'Suparman',
    'sekretaris' => 'Sumiati',
    'anggota'    => 15,
    'kontak'     => '0812-3456-7896',
    'keterangan' => 'Forum komunikasi antar RT/RW dalam koordinasi program desa dan penanganan masalah kemasyarakatan di tingkat lingkungan.',
    'tugas'      => ['Koordinasi Lingkungan', 'Penanganan Masalah', 'Komunikasi Warga'],
    'icon'       => '🏘️',
    'color'      => 'violet',
    'color_class' => 'purple',
    'status'     => 'Aktif'
  ]
];

$totalLembaga = count($lembaga);
$totalAnggota = 0;
foreach ($lembaga as $l) {
  $totalAnggota += $l['anggota'];
}
?>

<section class="bg-white dark:bg-gray-800 rounded-2xl shadow-xl p-6 md:p-8 border border-slate-100 dark:border-gray-700 overflow-hidden relative">

  <!-- Background pattern dekoratif -->
  <div class="absolute -top-24 -right-24 w-72 h-72 bg-gradient-to-br from-emerald-500/5 to-sky-500/5 dark:from-gray-900 dark:to-gray-800 rounded-full opacity-30"></div>
  <div class="absolute -bottom-24 -left-24 w-72 h-72 bg-gradient-to-tr from-amber-500/5 to-rose-500/5 dark:from-gray-900 dark:to-gray-800 rounded-full opacity-20"></div>

  <!-- HEADER -->
  <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-8 relative z-10">
    <div class="max-w-2xl">
      <div class="flex items-center gap-3 mb-3">
        <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-emerald-500 to-sky-500 flex items-center justify-center shadow-md">
          <span class="text-lg text-white">🏛️</span>
        </div>
        <h1 class="text-2xl md:text-3xl lg:text-4xl font-bold text-slate-900 dark:text-white">
          <span class="bg-gradient-to-r from-emerald-600 to-sky-600 bg-clip-text text-transparent">
            Lembaga Kemasyarakatan Desa
          </span>
        </h1>
      </div>
      <p class="text-sm md:text-base text-slate-700 dark:text-gray-300 leading-relaxed">
        Lembaga kemasyarakatan yang berperan aktif dalam mendukung pemerintahan, pembangunan partisipatif, 
        dan pemberdayaan masyarakat Desa Bawang. Setiap lembaga memiliki peran strategis dalam pembangunan desa.
      </p>
    </div>
    <div class="self-start md:self-auto mt-4 md:mt-0">
      <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-gradient-to-r from-emerald-50 to-sky-50 dark:from-gray-700 dark:to-gray-700 border border-emerald-200 dark:border-gray-600 shadow-sm">
        <div class="relative">
          <span class="w-3 h-3 rounded-full bg-emerald-500 animate-pulse"></span>
          <span class="absolute top-0 left-0 w-3 h-3 rounded-full bg-emerald-500 animate-ping opacity-75"></span>
        </div>
        <span class="text-sm font-medium text-emerald-800 dark:text-gray-300"><?php echo $totalLembaga; ?> Lembaga Aktif</span>
      </div>
    </div>
  </div>

  <!-- RINGKASAN STATISTIK -->
  <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-5 md:gap-6 mb-10 relative z-10">
    <div class="group bg-gradient-to-br from-white to-slate-50 dark:from-gray-800 dark:to-gray-900 rounded-2xl border border-slate-200 dark:border-gray-700 p-6 shadow-md hover:shadow-xl hover:-translate-y-1 transition-all duration-300 relative overflow-hidden">
      <div class="absolute -right-4 -top-4 w-20 h-20 bg-sky-500/10 dark:bg-sky-900 rounded-full opacity-20"></div>
      <div class="flex items-start justify-between mb-4">
        <div class="w-12 h-12 rounded-xl bg-sky-100 dark:bg-sky-900 flex items-center justify-center text-xl">
          🏛️
        </div>
        <span class="text-xs font-semibold px-2 py-1 rounded-full bg-sky-100 dark:bg-sky-900 text-sky-700 dark:text-sky-300">Total</span>
      </div>
      <p class="text-xs uppercase tracking-wider text-slate-500 dark:text-gray-400 mb-2">Jumlah Lembaga</p>
      <p class="text-2xl md:text-3xl font-black text-slate-900 dark:text-white mb-1"><?php echo $totalLembaga; ?></p>
      <p class="text-sm text-slate-600 dark:text-gray-400">Lembaga kemasyarakatan aktif</p>
      <div class="mt-4 pt-4 border-t border-slate-100 dark:border-gray-700">
        <div class="flex items-center gap-2 text-xs">
          <span class="w-2 h-2 rounded-full bg-sky-500"></span>
          <span class="text-slate-600 dark:text-gray-400">Semua berstatus aktif</span>
        </div>
      </div>
    </div>

    <div class="group bg-gradient-to-br from-white to-slate-50 dark:from-gray-800 dark:to-gray-900 rounded-2xl border border-slate-200 dark:border-gray-700 p-6 shadow-md hover:shadow-xl hover:-translate-y-1 transition-all duration-300 relative overflow-hidden">
      <div class="absolute -right-4 -top-4 w-20 h-20 bg-emerald-500/10 dark:bg-emerald-900 rounded-full opacity-20"></div>
      <div class="flex items-start justify-between mb-4">
        <div class="w-12 h-12 rounded-xl bg-emerald-100 dark:bg-emerald-900 flex items-center justify-center text-xl">
          👥
        </div>
        <span class="text-xs font-semibold px-2 py-1 rounded-full bg-emerald-100 dark:bg-emerald-900 text-emerald-700 dark:text-emerald-300">Anggota</span>
      </div>
      <p class="text-xs uppercase tracking-wider text-slate-500 dark:text-gray-400 mb-2">Total Anggota</p>
      <p class="text-2xl md:text-3xl font-black text-slate-900 dark:text-white mb-1"><?php echo $totalAnggota; ?>+</p>
      <p class="text-sm text-slate-600 dark:text-gray-400">Warga terlibat aktif</p>
      <div class="mt-4 pt-4 border-t border-slate-100 dark:border-gray-700">
        <div class="flex items-center gap-2 text-xs">
          <span class="w-2 h-2 rounded-full bg-emerald-500"></span>
          <span class="text-slate-600 dark:text-gray-400">Dari semua elemen masyarakat</span>
        </div>
      </div>
    </div>

    <div class="group bg-gradient-to-br from-white to-slate-50 dark:from-gray-800 dark:to-gray-900 rounded-2xl border border-slate-200 dark:border-gray-700 p-6 shadow-md hover:shadow-xl hover:-translate-y-1 transition-all duration-300 relative overflow-hidden">
      <div class="absolute -right-4 -top-4 w-20 h-20 bg-amber-500/10 dark:bg-amber-900 rounded-full opacity-20"></div>
      <div class="flex items-start justify-between mb-4">
        <div class="w-12 h-12 rounded-xl bg-amber-100 dark:bg-amber-900 flex items-center justify-center text-xl">
          🤝
        </div>
        <span class="text-xs font-semibold px-2 py-1 rounded-full bg-amber-100 dark:bg-amber-900 text-amber-700 dark:text-amber-300">Peran</span>
      </div>
      <p class="text-xs uppercase tracking-wider text-slate-500 dark:text-gray-400 mb-2">Fungsi Utama</p>
      <p class="text-lg font-bold text-slate-900 dark:text-white mb-1">Aspirasi & Pengawasan</p>
      <p class="text-sm text-slate-600 dark:text-gray-400">Partisipasi masyarakat</p>
      <div class="mt-4 pt-4 border-t border-slate-100 dark:border-gray-700">
        <div class="flex items-center gap-2 text-xs">
          <span class="w-2 h-2 rounded-full bg-amber-500"></span>
          <span class="text-slate-600 dark:text-gray-400">Pembangunan partisipatif</span>
        </div>
      </div>
    </div>

    <div class="group bg-gradient-to-br from-white to-slate-50 dark:from-gray-800 dark:to-gray-900 rounded-2xl border border-slate-200 dark:border-gray-700 p-6 shadow-md hover:shadow-xl hover:-translate-y-1 transition-all duration-300 relative overflow-hidden">
      <div class="absolute -right-4 -top-4 w-20 h-20 bg-rose-500/10 dark:bg-rose-900 rounded-full opacity-20"></div>
      <div class="flex items-start justify-between mb-4">
        <div class="w-12 h-12 rounded-xl bg-rose-100 dark:bg-rose-900 flex items-center justify-center text-xl">
          💼
        </div>
        <span class="text-xs font-semibold px-2 py-1 rounded-full bg-rose-100 dark:bg-rose-900 text-rose-700 dark:text-rose-300">Bidang</span>
      </div>
      <p class="text-xs uppercase tracking-wider text-slate-500 dark:text-gray-400 mb-2">Cakupan Bidang</p>
      <p class="text-lg font-bold text-slate-900 dark:text-white mb-1">Multi Sektor</p>
      <p class="text-sm text-slate-600 dark:text-gray-400">Politik, ekonomi, sosial</p>
      <div class="mt-4 pt-4 border-t border-slate-100 dark:border-gray-700">
        <div class="flex items-center gap-2 text-xs">
          <span class="w-2 h-2 rounded-full bg-rose-500"></span>
          <span class="text-slate-600 dark:text-gray-400">Lintas generasi & gender</span>
        </div>
      </div>
    </div>
  </div>

  <!-- VISUALISASI STRUKTUR -->
  <div class="mb-10 relative z-10">
    <div class="flex items-center justify-between mb-6">
      <h2 class="text-lg md:text-xl font-bold text-slate-900 dark:text-white flex items-center gap-3">
        <div class="w-2 h-8 rounded-full bg-gradient-to-b from-emerald-500 to-sky-500"></div>
        <span>Struktur Lembaga Kemasyarakatan</span>
      </h2>
      <span class="text-xs font-medium px-3 py-1 rounded-full bg-emerald-500/10 text-emerald-700 dark:text-emerald-300">Visualisasi Struktur</span>
    </div>

    <div class="bg-gradient-to-br from-slate-50 to-white dark:from-gray-800 dark:to-gray-900 rounded-2xl border border-slate-200 dark:border-gray-700 p-6">
      <!-- Simplified structure visualization -->
      <div class="flex flex-col lg:flex-row items-center justify-between gap-8">
        <div class="text-center lg:text-left">
          <div class="inline-flex items-center gap-3 mb-4">
            <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-emerald-500 to-sky-500 flex items-center justify-center text-xl text-white">
              👑
            </div>
            <div>
              <h3 class="text-base font-bold text-slate-900 dark:text-white">Pemerintahan Desa</h3>
              <p class="text-xs text-slate-600 dark:text-gray-400">Kepala Desa & Perangkat</p>
            </div>
          </div>
          <p class="text-sm text-slate-700 dark:text-gray-300 max-w-md">
            Sebagai fasilitator dan koordinator seluruh lembaga kemasyarakatan dalam pembangunan desa.
          </p>
        </div>

        <div class="hidden lg:block">
          <div class="flex items-center">
            <div class="w-12 h-1 bg-gradient-to-r from-emerald-500 to-sky-500"></div>
            <div class="w-4 h-4 rounded-full bg-gradient-to-r from-emerald-500 to-sky-500"></div>
            <div class="w-12 h-1 bg-gradient-to-r from-sky-500 to-emerald-500"></div>
          </div>
        </div>

        <div class="grid grid-cols-2 gap-4">
          <div class="text-center">
            <div class="w-10 h-10 rounded-xl bg-sky-100 dark:bg-sky-900 flex items-center justify-center text-lg mx-auto mb-2">
              🏛️
            </div>
            <span class="text-xs font-semibold text-slate-900 dark:text-white">BPD</span>
            <p class="text-[10px] text-slate-600 dark:text-gray-400">Legislasi & Pengawasan</p>
          </div>
          <div class="text-center">
            <div class="w-10 h-10 rounded-xl bg-emerald-100 dark:bg-emerald-900 flex items-center justify-center text-lg mx-auto mb-2">
              🤝
            </div>
            <span class="text-xs font-semibold text-slate-900 dark:text-white">LPMD</span>
            <p class="text-[10px] text-slate-600 dark:text-gray-400">Pemberdayaan Masyarakat</p>
          </div>
        </div>
      </div>

      <!-- Supporting institutions -->
      <div class="mt-8 pt-8 border-t border-slate-200 dark:border-gray-700">
        <h4 class="text-sm font-semibold text-slate-900 dark:text-white mb-4 text-center">Lembaga Pendukung</h4>
        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-3">
          <?php 
          $supportingOrgs = array_slice($lembaga, 2);
          foreach ($supportingOrgs as $org): 
          ?>
          <div class="text-center">
            <div class="w-8 h-8 rounded-lg flex items-center justify-center text-sm mx-auto mb-1" 
                 style="background-color: <?php 
                   $colors = [
                     'sky' => '#e0f2fe',
                     'emerald' => '#d1fae5',
                     'rose' => '#ffe4e6',
                     'amber' => '#fef3c7',
                     'green' => '#dcfce7',
                     'purple' => '#f3e8ff'
                   ];
                   echo $colors[$org['color_class']] ?? '#f3f4f6'; 
                 ?>">
              <?php echo $org['icon']; ?>
            </div>
            <span class="text-[10px] font-medium text-slate-900 dark:text-white"><?php echo explode(' ', $org['nama'])[0]; ?></span>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>

  <!-- DAFTAR LEMBAGA DETAIL -->
  <div class="mb-10 relative z-10">
    <div class="flex items-center justify-between mb-6">
      <h2 class="text-lg md:text-xl font-bold text-slate-900 dark:text-white flex items-center gap-3">
        <div class="w-2 h-8 rounded-full bg-gradient-to-b from-sky-500 to-amber-500"></div>
        <span>Daftar Lembaga Kemasyarakatan</span>
      </h2>
      <span class="text-xs font-medium px-3 py-1 rounded-full bg-sky-500/10 text-sky-700 dark:text-sky-300"><?php echo count($lembaga); ?> Lembaga</span>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
      <?php foreach ($lembaga as $index => $item): 
        // Map warna untuk class CSS
        $color_classes = [
          'sky' => [
            'bg' => 'bg-sky-100 dark:bg-sky-900',
            'text' => 'text-sky-700 dark:text-sky-300',
            'bg_light' => 'bg-sky-50 dark:bg-sky-900/50',
            'hover' => 'hover:text-sky-600 dark:hover:text-sky-400'
          ],
          'emerald' => [
            'bg' => 'bg-emerald-100 dark:bg-emerald-900',
            'text' => 'text-emerald-700 dark:text-emerald-300',
            'bg_light' => 'bg-emerald-50 dark:bg-emerald-900/50',
            'hover' => 'hover:text-emerald-600 dark:hover:text-emerald-400'
          ],
          'rose' => [
            'bg' => 'bg-rose-100 dark:bg-rose-900',
            'text' => 'text-rose-700 dark:text-rose-300',
            'bg_light' => 'bg-rose-50 dark:bg-rose-900/50',
            'hover' => 'hover:text-rose-600 dark:hover:text-rose-400'
          ],
          'amber' => [
            'bg' => 'bg-amber-100 dark:bg-amber-900',
            'text' => 'text-amber-700 dark:text-amber-300',
            'bg_light' => 'bg-amber-50 dark:bg-amber-900/50',
            'hover' => 'hover:text-amber-600 dark:hover:text-amber-400'
          ],
          'green' => [
            'bg' => 'bg-green-100 dark:bg-green-900',
            'text' => 'text-green-700 dark:text-green-300',
            'bg_light' => 'bg-green-50 dark:bg-green-900/50',
            'hover' => 'hover:text-green-600 dark:hover:text-green-400'
          ],
          'purple' => [
            'bg' => 'bg-purple-100 dark:bg-purple-900',
            'text' => 'text-purple-700 dark:text-purple-300',
            'bg_light' => 'bg-purple-50 dark:bg-purple-900/50',
            'hover' => 'hover:text-purple-600 dark:hover:text-purple-400'
          ]
        ];
        
        $color_class = $color_classes[$item['color_class']] ?? $color_classes['sky'];
      ?>
        <div class="group bg-gradient-to-b from-white to-slate-50 dark:from-gray-800 dark:to-gray-900 rounded-2xl border border-slate-200 dark:border-gray-700 p-6 shadow-md hover:shadow-xl hover:-translate-y-2 transition-all duration-300">
          
          <!-- Header Card -->
          <div class="flex items-start justify-between mb-5">
            <div class="w-14 h-14 rounded-xl <?php echo $color_class['bg']; ?> flex items-center justify-center text-2xl">
              <?php echo $item['icon']; ?>
            </div>
            <div class="text-right">
              <span class="inline-flex px-3 py-1 rounded-full <?php echo $color_class['bg']; ?> <?php echo $color_class['text']; ?> text-xs font-semibold">
                <?php echo $item['status']; ?>
              </span>
              <div class="mt-1 text-xs text-slate-600 dark:text-gray-400">
                <?php echo $item['anggota']; ?> Anggota
              </div>
            </div>
          </div>
          
          <!-- Nama Lembaga -->
          <h3 class="text-base font-bold text-slate-900 dark:text-white mb-3 group-hover:<?php echo $color_class['hover']; ?> transition-colors">
            <?php echo $item['nama']; ?>
          </h3>
          
          <!-- Struktur Kepengurusan -->
          <div class="space-y-2 mb-4">
            <div class="flex items-center justify-between">
              <span class="text-xs font-semibold text-slate-700 dark:text-gray-300">Ketua:</span>
              <span class="text-xs text-slate-900 dark:text-white"><?php echo $item['ketua']; ?></span>
            </div>
            <div class="flex items-center justify-between">
              <span class="text-xs font-semibold text-slate-700 dark:text-gray-300">Sekretaris:</span>
              <span class="text-xs text-slate-900 dark:text-white"><?php echo $item['sekretaris']; ?></span>
            </div>
            <div class="flex items-center justify-between">
              <span class="text-xs font-semibold text-slate-700 dark:text-gray-300">Kontak:</span>
              <span class="text-xs text-slate-900 dark:text-white"><?php echo $item['kontak']; ?></span>
            </div>
          </div>
          
          <!-- Tugas Pokok -->
          <div class="mb-4">
            <h4 class="text-xs font-semibold text-slate-700 dark:text-gray-300 mb-2">Tugas Pokok:</h4>
            <div class="flex flex-wrap gap-1.5">
              <?php foreach ($item['tugas'] as $tugas): ?>
                <span class="inline-flex px-2 py-1 rounded-full <?php echo $color_class['bg_light']; ?> <?php echo $color_class['text']; ?> text-[10px] font-medium">
                  <?php echo $tugas; ?>
                </span>
              <?php endforeach; ?>
            </div>
          </div>
          
          <!-- Deskripsi -->
          <p class="text-xs text-slate-600 dark:text-gray-400 mb-5 leading-relaxed">
            <?php echo $item['keterangan']; ?>
          </p>
          
          <!-- Call to Action -->
          <div class="pt-5 border-t border-slate-100 dark:border-gray-700">
            <button class="lembaga-contact-btn w-full py-2.5 rounded-lg bg-slate-100 dark:bg-gray-700 text-slate-700 dark:text-gray-300 text-sm font-semibold hover:<?php echo $color_class['bg']; ?> hover:<?php echo $color_class['text']; ?> transition-colors flex items-center justify-center gap-2" 
                    data-lembaga="<?php echo htmlspecialchars($item['nama']); ?>" 
                    data-kontak="<?php echo $item['kontak']; ?>">
              <span>📞</span> Hubungi Lembaga
            </button>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>

  <!-- PROSES PEMBENTUKAN LEMBAGA -->
  <div class="mb-10 relative z-10">
    <div class="flex items-center justify-between mb-6">
      <h2 class="text-lg md:text-xl font-bold text-slate-900 dark:text-white flex items-center gap-3">
        <div class="w-2 h-8 rounded-full bg-gradient-to-b from-amber-500 to-violet-500"></div>
        <span>Proses Pembentukan Lembaga</span>
      </h2>
      <span class="text-xs font-medium px-3 py-1 rounded-full bg-amber-500/10 text-amber-700 dark:text-amber-300">Tata Cara</span>
    </div>

    <div class="grid md:grid-cols-2 gap-8">
      <div class="bg-gradient-to-br from-slate-50 to-white dark:from-gray-800 dark:to-gray-900 rounded-2xl border border-slate-200 dark:border-gray-700 p-6">
        <h3 class="text-base font-bold text-slate-900 dark:text-white mb-4 flex items-center gap-2">
          <span class="w-8 h-8 rounded-lg bg-sky-100 dark:bg-sky-900 flex items-center justify-center">📋</span>
          <span>Tahapan Pembentukan</span>
        </h3>
        
        <ol class="space-y-4">
          <?php 
          $tahapan = [
            ['no' => '1', 'judul' => 'Inisiasi Masyarakat', 'desc' => 'Aspirasi dari warga untuk membentuk lembaga'],
            ['no' => '2', 'judul' => 'Musyawarah Desa', 'desc' => 'Pembahasan dalam forum desa yang melibatkan semua pihak'],
            ['no' => '3', 'judul' => 'Penyusunan AD/ART', 'desc' => 'Penyusunan anggaran dasar dan rumah tangga lembaga'],
            ['no' => '4', 'judul' => 'Pengukuhan oleh Kepala Desa', 'desc' => 'Pengukuhan resmi melalui SK Kepala Desa'],
            ['no' => '5', 'judul' => 'Pelantikan Pengurus', 'desc' => 'Pelantikan pengurus inti dan penyusunan program kerja']
          ];
          ?>
          
          <?php foreach ($tahapan as $tahap): ?>
            <li class="flex gap-4">
              <div class="flex-shrink-0">
                <div class="w-8 h-8 rounded-full bg-gradient-to-r from-emerald-500 to-sky-500 text-white text-sm font-bold flex items-center justify-center">
                  <?php echo $tahap['no']; ?>
                </div>
              </div>
              <div>
                <h4 class="text-sm font-semibold text-slate-900 dark:text-white mb-1"><?php echo $tahap['judul']; ?></h4>
                <p class="text-xs text-slate-600 dark:text-gray-400"><?php echo $tahap['desc']; ?></p>
              </div>
            </li>
          <?php endforeach; ?>
        </ol>
      </div>

      <div class="bg-gradient-to-br from-emerald-50 to-sky-50 dark:from-gray-800 dark:to-gray-900 rounded-2xl border border-emerald-200 dark:border-gray-700 p-6">
        <h3 class="text-base font-bold text-slate-900 dark:text-white mb-4 flex items-center gap-2">
          <span class="w-8 h-8 rounded-lg bg-emerald-100 dark:bg-emerald-900 flex items-center justify-center">⚖️</span>
          <span>Dasar Hukum</span>
        </h3>
        
        <div class="space-y-4">
          <div class="space-y-2">
            <h4 class="text-sm font-semibold text-slate-900 dark:text-white">Regulasi Pendukung:</h4>
            <ul class="space-y-2 text-sm text-slate-600 dark:text-gray-400">
              <li class="flex items-start gap-2">
                <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 mt-1.5"></span>
                Undang-Undang No. 6 Tahun 2014 tentang Desa
              </li>
              <li class="flex items-start gap-2">
                <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 mt-1.5"></span>
                Peraturan Pemerintah No. 43 Tahun 2014
              </li>
              <li class="flex items-start gap-2">
                <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 mt-1.5"></span>
                Peraturan Bupati Banjarnegara tentang Lembaga Desa
              </li>
              <li class="flex items-start gap-2">
                <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 mt-1.5"></span>
                Peraturan Desa Bawang tentang Kelembagaan
              </li>
            </ul>
          </div>
          
          <div class="pt-4 border-t border-slate-200 dark:border-gray-700">
            <p class="text-sm text-slate-700 dark:text-gray-300">
              <strong>Peran Strategis:</strong> Lembaga kemasyarakatan berfungsi sebagai mitra pemerintah desa 
              dalam mewujudkan pembangunan partisipatif dan penguatan demokrasi di tingkat desa.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- CALL TO ACTION -->
  <div class="mt-12 pt-8 border-t border-slate-100 dark:border-gray-700 relative z-10">
    <div class="bg-gradient-to-r from-emerald-500/5 to-sky-500/5 dark:from-gray-800 dark:to-gray-900 rounded-2xl border border-emerald-200 dark:border-gray-700 p-8 text-center">
      <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-3">Ingin Bergabung dengan Lembaga Kemasyarakatan?</h3>
      <p class="text-sm text-slate-700 dark:text-gray-300 mb-6 max-w-2xl mx-auto">
        Setiap warga Desa Bawang dapat berperan aktif dalam lembaga kemasyarakatan sesuai minat dan kemampuan. 
        Bergabunglah untuk bersama-sama membangun desa yang lebih maju dan sejahtera.
      </p>
      
      <div class="flex flex-wrap gap-4 justify-center">
        <button id="registerBtn" class="px-6 py-3 rounded-full bg-gradient-to-r from-emerald-500 to-sky-500 text-white font-semibold hover:shadow-lg hover:scale-105 transition-all duration-300 flex items-center gap-2">
          📋 Daftar Sebagai Anggota
        </button>
        <button id="profileBtn" class="px-6 py-3 rounded-full border border-slate-300 dark:border-gray-600 text-slate-700 dark:text-gray-300 font-semibold hover:bg-slate-50 dark:hover:bg-gray-700 transition-colors flex items-center gap-2">
          📄 Download Profil Lembaga
        </button>
        <button id="scheduleBtn" class="px-6 py-3 rounded-full border border-slate-300 dark:border-gray-600 text-slate-700 dark:text-gray-300 font-semibold hover:bg-slate-50 dark:hover:bg-gray-700 transition-colors flex items-center gap-2">
          🗓️ Jadwal Kegiatan
        </button>
      </div>
    </div>
  </div>

</section>

<style>
/* Smooth transitions */
.transition-all {
  transition-property: all;
  transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
  transition-duration: 300ms;
}
</style>

<script>
// Interactive elements for lembaga cards
document.addEventListener('DOMContentLoaded', function() {
  // Contact button functionality
  const contactButtons = document.querySelectorAll('.lembaga-contact-btn');
  contactButtons.forEach(button => {
    button.addEventListener('click', function() {
      const lembagaName = this.getAttribute('data-lembaga');
      const phoneNumber = this.getAttribute('data-kontak');
      
      alert(`Menghubungi ${lembagaName}\nNomor: ${phoneNumber}\n\nFitur ini akan membuka aplikasi telepon di perangkat Anda.`);
    });
  });
  
  // Registration buttons
  const registerBtn = document.getElementById('registerBtn');
  const profileBtn = document.getElementById('profileBtn');
  const scheduleBtn = document.getElementById('scheduleBtn');
  
  if (registerBtn) {
    registerBtn.addEventListener('click', () => {
      alert('Formulir pendaftaran anggota lembaga akan ditampilkan.\nSilakan kunjungi Kantor Desa untuk informasi lebih lanjut.');
    });
  }
  
  if (profileBtn) {
    profileBtn.addEventListener('click', () => {
      alert('Mengunduh profil lengkap semua lembaga kemasyarakatan Desa Bawang.\nFile akan didownload dalam format PDF.');
    });
  }
  
  if (scheduleBtn) {
    scheduleBtn.addEventListener('click', () => {
      alert('Menampilkan jadwal kegiatan bulanan lembaga kemasyarakatan.\nSilakan periksa papan pengumuman di Balai Desa.');
    });
  }
});
</script>
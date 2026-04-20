<!-- halaman/infografis-potensi.php -->
<?php
// Debugging - Pastikan file diakses dengan benar
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<section class="bg-white dark:bg-gray-800 rounded-2xl shadow-xl p-6 md:p-8 border border-slate-100 dark:border-gray-700 overflow-hidden anim-naik relative">

  <!-- Background pattern dekoratif -->
  <div class="absolute -top-20 -right-20 w-60 h-60 bg-gradient-to-br from-sky-50 to-emerald-50 dark:from-gray-900 dark:to-gray-800 rounded-full opacity-30"></div>
  <div class="absolute -bottom-20 -left-20 w-60 h-60 bg-gradient-to-tr from-amber-50 to-sky-50 dark:from-gray-900 dark:to-gray-800 rounded-full opacity-20"></div>

  <!-- HEADER yang lebih menarik -->
  <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-8 relative z-10">
    <div class="max-w-2xl">
      <div class="flex items-center gap-3 mb-3">
        <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-blue-500 to-emerald-500 flex items-center justify-center shadow-md">
          <span class="text-lg text-white">📊</span>
        </div>
        <h1 class="text-2xl md:text-3xl lg:text-4xl font-bold text-slate-900 dark:text-white">
          <span class="bg-gradient-to-r from-blue-500 to-emerald-600 bg-clip-text text-transparent">
            Infografis & Potensi Desa
          </span>
        </h1>
      </div>
      <p class="text-sm md:text-base text-slate-700 dark:text-gray-300 leading-relaxed">
        Visualisasi data potensi utama Desa Bawang dalam bidang pertanian, UMKM, dan sumber daya alam. 
        Data ini menjadi dasar pengambilan kebijakan untuk pembangunan berkelanjutan.
      </p>
    </div>
    <div class="self-start md:self-auto mt-4 md:mt-0">
      <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-gradient-to-r from-sky-50 to-emerald-50 dark:from-gray-700 dark:to-gray-700 border border-sky-200 dark:border-gray-600 shadow-sm">
        <div class="relative">
          <span class="w-3 h-3 rounded-full bg-emerald-500 animate-pulse"></span>
          <span class="absolute top-0 left-0 w-3 h-3 rounded-full bg-emerald-500 animate-ping opacity-75"></span>
        </div>
        <span class="text-sm font-medium text-sky-800 dark:text-gray-300">Data Terbaru 2024</span>
      </div>
    </div>
  </div>

  <!-- RINGKASAN ANGKA UTAMA -->
  <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-5 md:gap-6 mb-10 relative z-10">
    <!-- Kartu 1: Lahan Pertanian -->
    <div class="group bg-gradient-to-br from-white to-slate-50 dark:from-gray-800 dark:to-gray-900 rounded-2xl border border-slate-200 dark:border-gray-700 p-6 shadow-md hover:shadow-xl hover:-translate-y-1 transition-all duration-300 relative overflow-hidden">
      <div class="absolute -right-4 -top-4 w-20 h-20 bg-sky-100 dark:bg-sky-900 rounded-full opacity-20"></div>
      <div class="flex items-start justify-between mb-4">
        <div class="w-12 h-12 rounded-xl bg-sky-100 dark:bg-sky-900 flex items-center justify-center text-xl">
          🌾
        </div>
        <span class="text-xs font-semibold px-2 py-1 rounded-full bg-sky-100 dark:bg-sky-900 text-sky-700 dark:text-sky-300">Pertanian</span>
      </div>
      <p class="text-xs uppercase tracking-wider text-slate-500 dark:text-gray-400 mb-2">Lahan Pertanian</p>
      <p class="text-3xl md:text-4xl font-black text-slate-900 dark:text-white mb-1">180 <span class="text-2xl text-blue-500 dark:text-sky-400">Ha</span></p>
      <p class="text-sm text-slate-600 dark:text-gray-400">Didominasi padi, cabai, dan bawang merah dengan sistem irigasi terpadu</p>
      <div class="mt-4 pt-4 border-t border-slate-100 dark:border-gray-700">
        <div class="flex items-center gap-2 text-xs">
          <span class="w-2 h-2 rounded-full bg-emerald-500"></span>
          <span class="text-slate-600 dark:text-gray-400">Produktivitas: <span class="font-semibold text-slate-900 dark:text-white">+12%</span> (YoY)</span>
        </div>
      </div>
    </div>

    <!-- Kartu 2: UMKM -->
    <div class="group bg-gradient-to-br from-white to-slate-50 dark:from-gray-800 dark:to-gray-900 rounded-2xl border border-slate-200 dark:border-gray-700 p-6 shadow-md hover:shadow-xl hover:-translate-y-1 transition-all duration-300 relative overflow-hidden">
      <div class="absolute -right-4 -top-4 w-20 h-20 bg-emerald-100 dark:bg-emerald-900 rounded-full opacity-20"></div>
      <div class="flex items-start justify-between mb-4">
        <div class="w-12 h-12 rounded-xl bg-emerald-100 dark:bg-emerald-900 flex items-center justify-center text-xl">
          🏪
        </div>
        <span class="text-xs font-semibold px-2 py-1 rounded-full bg-emerald-100 dark:bg-emerald-900 text-emerald-700 dark:text-emerald-300">Ekonomi</span>
      </div>
      <p class="text-xs uppercase tracking-wider text-slate-500 dark:text-gray-400 mb-2">Pelaku UMKM Aktif</p>
      <p class="text-3xl md:text-4xl font-black text-slate-900 dark:text-white mb-1">120<span class="text-2xl text-emerald-600 dark:text-emerald-400">+</span></p>
      <p class="text-sm text-slate-600 dark:text-gray-400">Kuliner, kerajinan bambu, kopi lokal, dan jasa masyarakat</p>
      <div class="mt-4 pt-4 border-t border-slate-100 dark:border-gray-700">
        <div class="flex items-center gap-2 text-xs">
          <span class="w-2 h-2 rounded-full bg-emerald-500"></span>
          <span class="text-slate-600 dark:text-gray-400">Pertumbuhan: <span class="font-semibold text-slate-900 dark:text-white">+8 unit</span> (2024)</span>
        </div>
      </div>
    </div>

    <!-- Kartu 3: SDA -->
    <div class="group bg-gradient-to-br from-white to-slate-50 dark:from-gray-800 dark:to-gray-900 rounded-2xl border border-slate-200 dark:border-gray-700 p-6 shadow-md hover:shadow-xl hover:-translate-y-1 transition-all duration-300 relative overflow-hidden sm:col-span-2 lg:col-span-1">
      <div class="absolute -right-4 -top-4 w-20 h-20 bg-amber-100 dark:bg-amber-900 rounded-full opacity-20"></div>
      <div class="flex items-start justify-between mb-4">
        <div class="w-12 h-12 rounded-xl bg-amber-100 dark:bg-amber-900 flex items-center justify-center text-xl">
          💎
        </div>
        <span class="text-xs font-semibold px-2 py-1 rounded-full bg-amber-100 dark:bg-amber-900 text-amber-700 dark:text-amber-300">SDA</span>
      </div>
      <p class="text-xs uppercase tracking-wider text-slate-500 dark:text-gray-400 mb-2">Potensi Sumber Daya Alam</p>
      <p class="text-3xl md:text-4xl font-black text-slate-900 dark:text-white mb-1">Tinggi</p>
      <p class="text-sm text-slate-600 dark:text-gray-400">Air bersih melimpah, tanah subur kategori A, dan panorama alam</p>
      <div class="mt-4 pt-4 border-t border-slate-100 dark:border-gray-700">
        <div class="flex items-center gap-2 text-xs">
          <span class="w-2 h-2 rounded-full bg-amber-500"></span>
          <span class="text-slate-600 dark:text-gray-400">Status: <span class="font-semibold text-slate-900 dark:text-white">Terjaga & Berkelanjutan</span></span>
        </div>
      </div>
    </div>
  </div>

  <!-- GRID UTAMA 2 KOLOM -->
  <div class="grid md:grid-cols-2 gap-8 md:gap-10 mb-10 relative z-10">

    <!-- POTENSI UNGGULAN -->
    <div class="space-y-6">
      <div class="flex items-center justify-between">
        <h2 class="text-lg md:text-xl font-bold text-slate-900 dark:text-white flex items-center gap-3">
          <div class="w-2 h-8 rounded-full bg-gradient-to-b from-blue-500 to-emerald-500"></div>
          <span>Potensi Unggulan Desa</span>
        </h2>
        <span class="text-xs font-medium px-3 py-1 rounded-full bg-blue-500/10 text-blue-700 dark:text-sky-300">4 Sektor Utama</span>
      </div>

      <div class="space-y-4">
        <?php 
        // Data potensi dalam array PHP
        $potensiItems = [
          [
            'icon' => '🌾',
            'color' => 'emerald',
            'title' => 'Pertanian Berkelanjutan',
            'desc' => 'Komoditas unggulan padi, cabai, dan bawang merah dengan sistem intensifikasi dan teknologi tepat guna. Potensi panen 2-3 kali setahun dengan produktivitas meningkat.',
            'stats' => 'Produktivitas +12%'
          ],
          [
            'icon' => '🛍️',
            'color' => 'sky',
            'title' => 'UMKM & Ekonomi Kreatif',
            'desc' => '120+ usaha aktif di bidang kuliner khas, kerajinan bambu artistik, kopi lokal premium, dan jasa berbasis komunitas dengan pasar yang terus berkembang.',
            'stats' => '120+ Unit Usaha'
          ],
          [
            'icon' => '💧',
            'color' => 'amber',
            'title' => 'Sumber Daya Alam',
            'desc' => 'Ketersediaan air bersih dari sumber mata air alami, tanah subur kategori A, dan kontur lahan yang ideal mendukung pertanian organik berkelanjutan.',
            'stats' => 'SDA Terjaga'
          ],
          [
            'icon' => '🏞️',
            'color' => 'rose',
            'title' => 'Wisata Desa & Budaya',
            'desc' => 'Panorama alam hijau, hamparan persawahan bertingkat, ritual budaya lokal, dan keramahan masyarakat menjadi modal pengembangan wisata desa.',
            'stats' => 'Potensi Wisata'
          ]
        ];
        
        // Loop untuk menampilkan item potensi
        foreach ($potensiItems as $item): 
          // Pastikan warna CSS valid
          $colorClasses = [
            'emerald' => ['bg' => 'bg-emerald-100', 'dark' => 'dark:bg-emerald-900', 'text' => 'text-emerald-700', 'dark_text' => 'dark:text-emerald-300', 'hover' => 'hover:border-emerald-300'],
            'sky' => ['bg' => 'bg-sky-100', 'dark' => 'dark:bg-sky-900', 'text' => 'text-sky-700', 'dark_text' => 'dark:text-sky-300', 'hover' => 'hover:border-sky-300'],
            'amber' => ['bg' => 'bg-amber-100', 'dark' => 'dark:bg-amber-900', 'text' => 'text-amber-700', 'dark_text' => 'dark:text-amber-300', 'hover' => 'hover:border-amber-300'],
            'rose' => ['bg' => 'bg-rose-100', 'dark' => 'dark:bg-rose-900', 'text' => 'text-rose-700', 'dark_text' => 'dark:text-rose-300', 'hover' => 'hover:border-rose-300']
          ];
          $color = $colorClasses[$item['color']];
        ?>
        <div class="group bg-white dark:bg-gray-800 rounded-xl border border-slate-200 dark:border-gray-700 p-5 flex gap-4 items-start shadow-sm hover:shadow-md <?php echo $color['hover']; ?> dark:hover:border-<?php echo $item['color']; ?>-500 hover:-translate-x-1 transition-all duration-300">
          <div class="w-12 h-12 rounded-xl <?php echo $color['bg']; ?> <?php echo $color['dark']; ?> flex items-center justify-center text-xl flex-shrink-0 group-hover:scale-110 transition-transform duration-300">
            <?php echo htmlspecialchars($item['icon']); ?>
          </div>
          <div class="flex-1">
            <div class="flex items-start justify-between mb-2">
              <h3 class="text-base font-bold text-slate-900 dark:text-white"><?php echo htmlspecialchars($item['title']); ?></h3>
              <span class="text-xs font-semibold px-2 py-1 rounded-full <?php echo $color['bg']; ?> <?php echo $color['dark']; ?> <?php echo $color['text']; ?> <?php echo $color['dark_text']; ?>">
                <?php echo htmlspecialchars($item['stats']); ?>
              </span>
            </div>
            <p class="text-sm text-slate-600 dark:text-gray-400 leading-relaxed">
              <?php echo htmlspecialchars($item['desc']); ?>
            </p>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- KOMPOSISI MATA PENCARIAN -->
    <div class="space-y-6">
      <div class="flex items-center justify-between">
        <h2 class="text-lg md:text-xl font-bold text-slate-900 dark:text-white flex items-center gap-3">
          <div class="w-2 h-8 rounded-full bg-gradient-to-b from-emerald-500 to-sky-500"></div>
          <span>Komposisi Mata Pencaharian</span>
        </h2>
        <span class="text-xs font-medium px-3 py-1 rounded-full bg-emerald-500/10 text-emerald-700 dark:text-emerald-300">Data Survei 2024</span>
      </div>

      <p class="text-sm text-slate-700 dark:text-gray-300 leading-relaxed">
        Distribusi pekerjaan utama warga Desa Bawang berdasarkan data terbaru. Pertanian tetap menjadi tulang punggung ekonomi dengan UMKM yang terus berkembang pesat.
      </p>

      <!-- Chart -->
      <div class="space-y-5 mt-6">
        <?php 
        $mataPencaharian = [
          ['label' => 'Petani & Pekebun', 'percent' => 55, 'color' => 'emerald', 'icon' => '👨‍🌾'],
          ['label' => 'Pelaku UMKM / Pedagang', 'percent' => 25, 'color' => 'sky', 'icon' => '👨‍💼'],
          ['label' => 'Pekerja Jasa & Lainnya', 'percent' => 20, 'color' => 'amber', 'icon' => '👨‍🔧']
        ];
        
        foreach ($mataPencaharian as $item): 
          // Map warna ke kelas Tailwind yang valid
          $colorMap = [
            'emerald' => 'emerald',
            'sky' => 'sky',
            'amber' => 'amber'
          ];
          $colorClass = $colorMap[$item['color']];
        ?>
        <div class="space-y-2">
          <div class="flex items-center justify-between">
            <div class="flex items-center gap-3">
              <div class="w-8 h-8 rounded-lg bg-<?php echo $colorClass; ?>-100 dark:bg-<?php echo $colorClass; ?>-900 flex items-center justify-center">
                <span class="text-sm"><?php echo htmlspecialchars($item['icon']); ?></span>
              </div>
              <span class="text-sm font-medium text-slate-900 dark:text-white"><?php echo htmlspecialchars($item['label']); ?></span>
            </div>
            <span class="text-lg font-bold text-slate-900 dark:text-white"><?php echo $item['percent']; ?>%</span>
          </div>
          <div class="relative">
            <div class="w-full h-3 rounded-full bg-slate-100 dark:bg-gray-700 overflow-hidden">
              <div 
                class="h-3 rounded-full bg-gradient-to-r from-<?php echo $colorClass; ?>-500 to-<?php echo $colorClass; ?>-600" 
                style="width:<?php echo $item['percent']; ?>%"
              ></div>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>

      <!-- Ringkasan Chart -->
      <div class="bg-gradient-to-r from-slate-50 to-white dark:from-gray-800 dark:to-gray-900 rounded-xl border border-slate-200 dark:border-gray-700 p-5 mt-6">
        <div class="grid grid-cols-3 gap-4 text-center">
          <?php foreach ($mataPencaharian as $item): ?>
          <div>
            <div class="text-2xl font-black text-slate-900 dark:text-white mb-1"><?php echo $item['percent']; ?>%</div>
            <div class="text-xs text-slate-600 dark:text-gray-400"><?php echo explode(' ', $item['label'])[0]; ?></div>
          </div>
          <?php endforeach; ?>
        </div>
        <div class="mt-4 pt-4 border-t border-slate-200 dark:border-gray-700">
          <p class="text-xs text-slate-600 dark:text-gray-400 text-center">
            *Data berdasarkan survei lapangan dan registrasi usaha desa tahun 2024
          </p>
        </div>
      </div>
    </div>
  </div>

  <!-- SEBARAN POTENSI PER DUSUN -->
  <div class="mt-12 pt-8 border-t border-slate-100 dark:border-gray-700 relative z-10">
    <div class="flex items-center justify-between mb-6">
      <h2 class="text-lg md:text-xl font-bold text-slate-900 dark:text-white flex items-center gap-3">
        <div class="w-2 h-8 rounded-full bg-gradient-to-b from-amber-500 to-rose-500"></div>
        <span>Sebaran Potensi per Dusun</span>
      </h2>
      <span class="text-xs font-medium px-3 py-1 rounded-full bg-amber-500/10 text-amber-700 dark:text-amber-300">3 Wilayah Dusun</span>
    </div>

    <div class="grid lg:grid-cols-3 gap-6">
      <?php 
      $dusunData = [
        [
          'nama' => 'Dusun Krajan',
          'icon' => '🌾',
          'warna' => 'emerald',
          'potensi' => ['Pertanian Padi Organik', 'UMKM Kuliner Tradisional', 'Kelompok Tani Maju'],
          'stat' => '40% Lahan Produktif'
        ],
        [
          'nama' => 'Dusun Ngemplak',
          'icon' => '🎍',
          'warna' => 'sky',
          'potensi' => ['Kerajinan Bambu', 'Kopi Lokal Premium', 'Home Industry'],
          'stat' => '35+ UMKM Aktif'
        ],
        [
          'nama' => 'Dusun Sambeng',
          'icon' => '🏞️',
          'warna' => 'amber',
          'potensi' => ['Wisata Alam', 'Budaya Lokal', 'Penginapan Desa'],
          'stat' => 'Spot Wisata Unggulan'
        ]
      ];
      
      foreach ($dusunData as $dusun): 
        // Pastikan warna valid
        $warnaMap = [
          'emerald' => 'emerald',
          'sky' => 'sky',
          'amber' => 'amber'
        ];
        $warnaClass = $warnaMap[$dusun['warna']];
      ?>
      <div class="group bg-gradient-to-b from-white to-slate-50 dark:from-gray-800 dark:to-gray-900 rounded-2xl border border-slate-200 dark:border-gray-700 p-6 shadow-md hover:shadow-xl hover:-translate-y-2 transition-all duration-300">
        <div class="flex items-center justify-between mb-5">
          <div class="w-14 h-14 rounded-xl bg-<?php echo $warnaClass; ?>-100 dark:bg-<?php echo $warnaClass; ?>-900 flex items-center justify-center text-2xl">
            <?php echo htmlspecialchars($dusun['icon']); ?>
          </div>
          <span class="text-xs font-bold px-3 py-1.5 rounded-full bg-<?php echo $warnaClass; ?>-500 text-white">
            <?php echo htmlspecialchars($dusun['stat']); ?>
          </span>
        </div>
        
        <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-3"><?php echo htmlspecialchars($dusun['nama']); ?></h3>
        
        <div class="space-y-3 mb-5">
          <?php foreach ($dusun['potensi'] as $potensi): ?>
          <div class="flex items-center gap-3">
            <div class="w-2 h-2 rounded-full bg-<?php echo $warnaClass; ?>-500"></div>
            <span class="text-sm text-slate-700 dark:text-gray-300"><?php echo htmlspecialchars($potensi); ?></span>
          </div>
          <?php endforeach; ?>
        </div>
        
        <div class="pt-5 border-t border-slate-100 dark:border-gray-700">
          <div class="flex items-center justify-between">
            <span class="text-xs text-slate-500 dark:text-gray-400">Potensi Pengembangan</span>
            <span class="text-xs font-semibold px-2 py-1 rounded-full bg-<?php echo $warnaClass; ?>-100 dark:bg-<?php echo $warnaClass; ?>-900 text-<?php echo $warnaClass; ?>-700 dark:text-<?php echo $warnaClass; ?>-300">
              Tinggi
            </span>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>

    <!-- Call to Action -->
    <div class="mt-10 p-6 rounded-2xl bg-gradient-to-r from-blue-500/5 to-emerald-500/5 dark:from-gray-800 dark:to-gray-900 border border-blue-500/20 dark:border-gray-700 text-center">
      <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-2">Tertarik Berkembang Bersama?</h3>
      <p class="text-sm text-slate-700 dark:text-gray-300 mb-4 max-w-2xl mx-auto">
        Desa Bawang terbuka untuk kemitraan dan investasi dalam pengembangan potensi lokal. 
        Mari bersama-sama membangun desa yang mandiri dan sejahtera.
      </p>
      <button class="px-6 py-3 rounded-full bg-gradient-to-r from-blue-500 to-emerald-600 text-white font-semibold hover:shadow-lg hover:scale-105 transition-all duration-300">
        📧 Hubungi Tim Pengembangan Desa
      </button>
    </div>
  </div>

</section>

<style>
/* Animasi sederhana untuk konten */
@keyframes naik {
  from { 
    opacity: 0; 
    transform: translateY(20px); 
  }
  to { 
    opacity: 1; 
    transform: translateY(0); 
  }
}

.anim-naik {
  animation: naik 0.6s ease-out forwards;
}

/* Smooth transitions */
.transition-all {
  transition-property: all;
  transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
  transition-duration: 300ms;
}

/* Opacity untuk debug */
.debug-border {
  border: 1px solid red;
}
</style>

<?php
// Debug output untuk memastikan file diproses
// echo "<!-- File infografis-potensi.php loaded successfully -->";
?>
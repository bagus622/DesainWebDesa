<!-- halaman/peta.php -->
<section class="bg-white dark:bg-gray-800 rounded-2xl shadow-xl p-6 md:p-8 border border-slate-100 dark:border-gray-700 overflow-hidden anim-naik relative">

  <!-- Background pattern dekoratif -->
  <div class="absolute -top-24 -right-24 w-72 h-72 bg-gradient-to-br from-emerald-500/5 to-sky-500/5 dark:from-gray-900 dark:to-gray-800 rounded-full opacity-30"></div>
  <div class="absolute -bottom-24 -left-24 w-72 h-72 bg-gradient-to-tr from-amber-500/5 to-rose-500/5 dark:from-gray-900 dark:to-gray-800 rounded-full opacity-20"></div>

  <!-- HEADER -->
  <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-8 relative z-10">
    <div class="max-w-2xl">
      <div class="flex items-center gap-3 mb-3">
        <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-emerald-500 to-sky-500 flex items-center justify-center shadow-md">
          <span class="text-lg text-white">🗺️</span>
        </div>
        <h1 class="text-2xl md:text-3xl lg:text-4xl font-bold text-slate-900 dark:text-white">
          <span class="bg-gradient-to-r from-emerald-600 to-sky-600 bg-clip-text text-transparent">
            Peta Desa Bawang
          </span>
        </h1>
      </div>
      <p class="text-sm md:text-base text-slate-700 dark:text-gray-300 leading-relaxed">
        Peta digital interaktif lokasi Desa Bawang, Kecamatan Bawang, Kabupaten Banjarnegara.
        Temukan lokasi penting, fasilitas umum, dan informasi akses transportasi di sekitar desa.
      </p>
    </div>
    <div class="self-start md:self-auto mt-4 md:mt-0">
      <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-gradient-to-r from-emerald-50 to-sky-50 dark:from-gray-700 dark:to-gray-700 border border-emerald-200 dark:border-gray-600 shadow-sm">
        <div class="relative">
          <span class="w-3 h-3 rounded-full bg-emerald-500 animate-pulse"></span>
          <span class="absolute top-0 left-0 w-3 h-3 rounded-full bg-emerald-500 animate-ping opacity-75"></span>
        </div>
        <span class="text-sm font-medium text-emerald-800 dark:text-gray-300">Peta Digital Interaktif</span>
      </div>
    </div>
  </div>

  <!-- RINGKASAN LOKASI - Lebih visual -->
  <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-5 md:gap-6 mb-10 relative z-10">
    <div class="group bg-gradient-to-br from-white to-slate-50 dark:from-gray-800 dark:to-gray-900 rounded-2xl border border-slate-200 dark:border-gray-700 p-6 shadow-md hover:shadow-xl hover:-translate-y-1 transition-all duration-300 anim-kiri relative overflow-hidden">
      <div class="absolute -right-4 -top-4 w-20 h-20 bg-sky-500/10 dark:bg-sky-900 rounded-full opacity-20"></div>
      <div class="flex items-start justify-between mb-4">
        <div class="w-12 h-12 rounded-xl bg-sky-100 dark:bg-sky-900 flex items-center justify-center text-xl">
          🏛️
        </div>
        <span class="text-xs font-semibold px-2 py-1 rounded-full bg-sky-100 dark:bg-sky-900 text-sky-700 dark:text-sky-300">Administratif</span>
      </div>
      <p class="text-xs uppercase tracking-wider text-slate-500 dark:text-gray-400 mb-2">Wilayah Administratif</p>
      <p class="text-lg font-bold text-slate-900 dark:text-white mb-1">Kecamatan Bawang</p>
      <p class="text-sm text-slate-600 dark:text-gray-400">Kab. Banjarnegara, Prov. Jawa Tengah</p>
      <div class="mt-4 pt-4 border-t border-slate-100 dark:border-gray-700">
        <div class="flex items-center gap-2 text-xs">
          <span class="w-2 h-2 rounded-full bg-sky-500"></span>
          <span class="text-slate-600 dark:text-gray-400">Koordinat: 7.42° LS, 109.59° BT</span>
        </div>
      </div>
    </div>

    <div class="group bg-gradient-to-br from-white to-slate-50 dark:from-gray-800 dark:to-gray-900 rounded-2xl border border-slate-200 dark:border-gray-700 p-6 shadow-md hover:shadow-xl hover:-translate-y-1 transition-all duration-300 anim-naik anim-naik-telat-1 relative overflow-hidden">
      <div class="absolute -right-4 -top-4 w-20 h-20 bg-emerald-500/10 dark:bg-emerald-900 rounded-full opacity-20"></div>
      <div class="flex items-start justify-between mb-4">
        <div class="w-12 h-12 rounded-xl bg-emerald-100 dark:bg-emerald-900 flex items-center justify-center text-xl">
          📍
        </div>
        <span class="text-xs font-semibold px-2 py-1 rounded-full bg-emerald-100 dark:bg-emerald-900 text-emerald-700 dark:text-emerald-300">Lokasi</span>
      </div>
      <p class="text-xs uppercase tracking-wider text-slate-500 dark:text-gray-400 mb-2">Koordinat Geografis</p>
      <p class="text-lg font-bold text-slate-900 dark:text-white mb-1">7.42° LS, 109.59° BT</p>
      <p class="text-sm text-slate-600 dark:text-gray-400">Kantor Desa Bawang</p>
      <div class="mt-4 pt-4 border-t border-slate-100 dark:border-gray-700">
        <div class="flex items-center gap-2 text-xs">
          <span class="w-2 h-2 rounded-full bg-emerald-500"></span>
          <span class="text-slate-600 dark:text-gray-400">Ketinggian: ~450 mdpl</span>
        </div>
      </div>
    </div>

    <div class="group bg-gradient-to-br from-white to-slate-50 dark:from-gray-800 dark:to-gray-900 rounded-2xl border border-slate-200 dark:border-gray-700 p-6 shadow-md hover:shadow-xl hover:-translate-y-1 transition-all duration-300 anim-kanan anim-naik-telat-2 relative overflow-hidden">
      <div class="absolute -right-4 -top-4 w-20 h-20 bg-amber-500/10 dark:bg-amber-900 rounded-full opacity-20"></div>
      <div class="flex items-start justify-between mb-4">
        <div class="w-12 h-12 rounded-xl bg-amber-100 dark:bg-amber-900 flex items-center justify-center text-xl">
          🔍
        </div>
        <span class="text-xs font-semibold px-2 py-1 rounded-full bg-amber-100 dark:bg-amber-900 text-amber-700 dark:text-amber-300">Zoom</span>
      </div>
      <p class="text-xs uppercase tracking-wider text-slate-500 dark:text-gray-400 mb-2">Tingkat Zoom Peta</p>
      <p class="text-lg font-bold text-slate-900 dark:text-white mb-1">Skala Kecamatan</p>
      <p class="text-sm text-slate-600 dark:text-gray-400">Melihat area desa & sekitarnya</p>
      <div class="mt-4 pt-4 border-t border-slate-100 dark:border-gray-700">
        <div class="flex items-center gap-2 text-xs">
          <span class="w-2 h-2 rounded-full bg-amber-500"></span>
          <span class="text-slate-600 dark:text-gray-400">Zoom Level: ~14</span>
        </div>
      </div>
    </div>
  </div>

  <!-- PETA GOOGLE MAPS INTERAKTIF -->
  <div class="mb-10 relative z-10">
    <div class="flex items-center justify-between mb-4">
      <h2 class="text-lg md:text-xl font-bold text-slate-900 dark:text-white flex items-center gap-3">
        <div class="w-2 h-8 rounded-full bg-gradient-to-b from-emerald-500 to-sky-500"></div>
        <span>Peta Interaktif Desa Bawang</span>
      </h2>
      <div class="flex gap-2">
        <button id="satelit-btn" class="px-3 py-1.5 rounded-full bg-emerald-100 dark:bg-emerald-900 text-emerald-700 dark:text-emerald-300 text-xs font-semibold hover:bg-emerald-200 dark:hover:bg-emerald-800 transition-colors flex items-center gap-1">
          <span>🗺️</span> Peta Satelit
        </button>
        <button id="tempat-btn" class="px-3 py-1.5 rounded-full bg-sky-100 dark:bg-sky-900 text-sky-700 dark:text-sky-300 text-xs font-semibold hover:bg-sky-200 dark:hover:bg-sky-800 transition-colors flex items-center gap-1">
          <span>📍</span> Tempat Penting
        </button>
      </div>
    </div>

    <div class="relative w-full h-96 rounded-2xl overflow-hidden shadow-2xl border-2 border-slate-200 dark:border-gray-700">
      <!-- Google Maps Embed -->
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31652.974899857607!2d109.57700981525846!3d-7.396197932358497!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7aab0a37d23921%3A0x41ffa4d7d7fee31d!2sBawang%2C%20Kec.%20Bawang%2C%20Kab.%20Banjarnegara%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1765506475198!5m2!1sid!2sid"
        class="absolute top-0 left-0 w-full h-full border-0"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"
        title="Peta Lokasi Desa Bawang"
        id="map-frame">
      </iframe>
      
      <!-- Overlay info -->
      <div class="absolute top-4 left-4 bg-white/90 dark:bg-gray-800/90 backdrop-blur-sm rounded-xl p-4 shadow-lg max-w-xs">
        <h3 class="text-sm font-bold text-slate-900 dark:text-white mb-2">📍 Kantor Desa Bawang</h3>
        <p class="text-xs text-slate-700 dark:text-gray-300">
          Jl. Raya Bawang No. 123<br>
          Kec. Bawang, Kab. Banjarnegara<br>
          <span class="text-emerald-600 dark:text-emerald-400 font-semibold">Buka: Senin-Jumat, 08.00-15.00</span>
        </p>
      </div>
      
      <!-- Zoom controls -->
      <div class="absolute bottom-4 right-4 flex flex-col gap-2">
        <button id="zoom-in" class="w-10 h-10 rounded-full bg-white dark:bg-gray-800 shadow-lg flex items-center justify-center text-xl hover:bg-slate-50 dark:hover:bg-gray-700 transition-colors">
          ➕
        </button>
        <button id="zoom-out" class="w-10 h-10 rounded-full bg-white dark:bg-gray-800 shadow-lg flex items-center justify-center text-xl hover:bg-slate-50 dark:hover:bg-gray-700 transition-colors">
          ➖
        </button>
        <button id="map-type" class="w-10 h-10 rounded-full bg-white dark:bg-gray-800 shadow-lg flex items-center justify-center text-xl hover:bg-slate-50 dark:hover:bg-gray-700 transition-colors">
          🗺️
        </button>
      </div>
    </div>
    
    <div class="mt-4 flex items-center justify-between text-xs text-slate-600 dark:text-gray-400">
      <div class="flex items-center gap-2">
        <span class="w-3 h-3 rounded-full bg-emerald-500"></span>
        <span>Peta dapat di-zoom dan digeser</span>
      </div>
      <div class="flex items-center gap-2">
        <span class="w-3 h-3 rounded-full bg-sky-500"></span>
        <span>Powered by Google Maps</span>
      </div>
    </div>
  </div>

  <!-- INFORMASI LOKASI PENTING -->
  <div class="mb-10 relative z-10">
    <div class="flex items-center justify-between mb-6">
      <h2 class="text-lg md:text-xl font-bold text-slate-900 dark:text-white flex items-center gap-3">
        <div class="w-2 h-8 rounded-full bg-gradient-to-b from-sky-500 to-amber-500"></div>
        <span>Lokasi Penting di Desa Bawang</span>
      </h2>
      <?php
      // Data lokasi penting dalam array (tanpa function untuk menghindari error)
      $lokasiPenting = [
        [
          'nama' => 'Kantor Desa Bawang',
          'icon' => '🏛️',
          'jenis' => 'Pemerintahan',
          'alamat' => 'Jl. Raya Bawang No. 123',
          'jam' => 'Senin-Jumat: 08.00-15.00',
          'color' => 'sky'
        ],
        [
          'nama' => 'Balai Desa Bawang',
          'icon' => '🏠',
          'jenis' => 'Pertemuan',
          'alamat' => 'Dusun Krajan',
          'jam' => 'Setiap hari, 24 jam',
          'color' => 'emerald'
        ],
        [
          'nama' => 'Masjid Al-Hidayah',
          'icon' => '🕌',
          'jenis' => 'Ibadah',
          'alamat' => 'Dusun Ngemplak',
          'jam' => 'Setiap waktu sholat',
          'color' => 'amber'
        ],
        [
          'nama' => 'SD Negeri Bawang 1',
          'icon' => '🏫',
          'jenis' => 'Pendidikan',
          'alamat' => 'Jl. Pendidikan No. 45',
          'jam' => 'Senin-Jumat: 07.00-13.00',
          'color' => 'violet'
        ],
        [
          'nama' => 'Puskesmas Pembantu',
          'icon' => '🏥',
          'jenis' => 'Kesehatan',
          'alamat' => 'Dusun Sambeng',
          'jam' => 'Senin-Sabtu: 08.00-14.00',
          'color' => 'rose'
        ],
        [
          'nama' => 'Pasar Desa Bawang',
          'icon' => '🛒',
          'jenis' => 'Ekonomi',
          'alamat' => 'Pusat Desa',
          'jam' => 'Setiap pagi, 06.00-12.00',
          'color' => 'blue'
        ]
      ];
      ?>
      <span class="text-xs font-medium px-3 py-1 rounded-full bg-sky-500/10 text-sky-700 dark:text-sky-300"><?php echo count($lokasiPenting); ?> Lokasi</span>
    </div>

    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-5">
      <?php foreach ($lokasiPenting as $index => $lokasi): 
        // Mapping warna ke class CSS untuk menghindari dynamic class yang error
        $bgColor = '';
        $textColor = '';
        $hoverColor = '';
        
        switch($lokasi['color']) {
          case 'sky':
            $bgColor = 'bg-sky-100 dark:bg-sky-900';
            $textColor = 'text-sky-700 dark:text-sky-300';
            $hoverText = 'group-hover:text-sky-600 dark:group-hover:text-sky-400';
            $hoverBg = 'hover:bg-sky-100 dark:hover:bg-sky-900';
            break;
          case 'emerald':
            $bgColor = 'bg-emerald-100 dark:bg-emerald-900';
            $textColor = 'text-emerald-700 dark:text-emerald-300';
            $hoverText = 'group-hover:text-emerald-600 dark:group-hover:text-emerald-400';
            $hoverBg = 'hover:bg-emerald-100 dark:hover:bg-emerald-900';
            break;
          case 'amber':
            $bgColor = 'bg-amber-100 dark:bg-amber-900';
            $textColor = 'text-amber-700 dark:text-amber-300';
            $hoverText = 'group-hover:text-amber-600 dark:group-hover:text-amber-400';
            $hoverBg = 'hover:bg-amber-100 dark:hover:bg-amber-900';
            break;
          case 'violet':
            $bgColor = 'bg-violet-100 dark:bg-violet-900';
            $textColor = 'text-violet-700 dark:text-violet-300';
            $hoverText = 'group-hover:text-violet-600 dark:group-hover:text-violet-400';
            $hoverBg = 'hover:bg-violet-100 dark:hover:bg-violet-900';
            break;
          case 'rose':
            $bgColor = 'bg-rose-100 dark:bg-rose-900';
            $textColor = 'text-rose-700 dark:text-rose-300';
            $hoverText = 'group-hover:text-rose-600 dark:group-hover:text-rose-400';
            $hoverBg = 'hover:bg-rose-100 dark:hover:bg-rose-900';
            break;
          case 'blue':
            $bgColor = 'bg-blue-100 dark:bg-blue-900';
            $textColor = 'text-blue-700 dark:text-blue-300';
            $hoverText = 'group-hover:text-blue-600 dark:group-hover:text-blue-400';
            $hoverBg = 'hover:bg-blue-100 dark:hover:bg-blue-900';
            break;
          default:
            $bgColor = 'bg-sky-100 dark:bg-sky-900';
            $textColor = 'text-sky-700 dark:text-sky-300';
            $hoverText = 'group-hover:text-sky-600 dark:group-hover:text-sky-400';
            $hoverBg = 'hover:bg-sky-100 dark:hover:bg-sky-900';
        }
      ?>
        <div class="group bg-gradient-to-b from-white to-slate-50 dark:from-gray-800 dark:to-gray-900 rounded-2xl border border-slate-200 dark:border-gray-700 p-5 shadow-md hover:shadow-xl hover:-translate-y-2 transition-all duration-300 anim-naik" style="animation-delay: <?php echo ($index % 3) * 0.2; ?>s">
          <div class="flex items-start justify-between mb-4">
            <div class="w-12 h-12 rounded-xl <?php echo $bgColor; ?> flex items-center justify-center text-xl">
              <?php echo htmlspecialchars($lokasi['icon']); ?>
            </div>
            <span class="text-xs font-semibold px-2 py-1 rounded-full <?php echo $bgColor; ?> <?php echo $textColor; ?>">
              <?php echo htmlspecialchars($lokasi['jenis']); ?>
            </span>
          </div>
          
          <h3 class="text-base font-bold text-slate-900 dark:text-white mb-2 <?php echo $hoverText; ?> transition-colors">
            <?php echo htmlspecialchars($lokasi['nama']); ?>
          </h3>
          
          <div class="space-y-2 text-sm text-slate-600 dark:text-gray-400">
            <div class="flex items-start gap-2">
              <span class="text-slate-500 dark:text-gray-500">📍</span>
              <span><?php echo htmlspecialchars($lokasi['alamat']); ?></span>
            </div>
            <div class="flex items-start gap-2">
              <span class="text-slate-500 dark:text-gray-500">🕒</span>
              <span><?php echo htmlspecialchars($lokasi['jam']); ?></span>
            </div>
          </div>
          
          <div class="mt-5 pt-4 border-t border-slate-100 dark:border-gray-700">
            <button class="lokasi-btn w-full py-2 rounded-lg bg-slate-100 dark:bg-gray-700 text-slate-700 dark:text-gray-300 text-sm font-semibold <?php echo $hoverBg; ?> <?php echo $textColor; ?> transition-colors flex items-center justify-center gap-2" data-lokasi="<?php echo htmlspecialchars($lokasi['nama']); ?>">
              <span>🗺️</span> Lihat di Peta
            </button>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>

  <!-- INFORMASI AKSES & TRANSPORTASI -->
  <div class="grid md:grid-cols-2 gap-8 relative z-10">
    <!-- Informasi Akses -->
    <div class="bg-gradient-to-br from-slate-50 to-white dark:from-gray-800 dark:to-gray-900 rounded-2xl border border-slate-200 dark:border-gray-700 p-6">
      <h3 class="text-base font-bold text-slate-900 dark:text-white mb-4 flex items-center gap-2">
        <span class="w-8 h-8 rounded-lg bg-emerald-100 dark:bg-emerald-900 flex items-center justify-center">🚗</span>
        <span>Informasi Akses ke Desa</span>
      </h3>
      
      <div class="space-y-4">
        <div class="flex items-center justify-between">
          <div class="flex items-center gap-3">
            <div class="w-10 h-10 rounded-lg bg-sky-100 dark:bg-sky-900 flex items-center justify-center">
              📏
            </div>
            <div>
              <span class="text-sm font-semibold text-slate-900 dark:text-white">Jarak ke Kota</span>
              <p class="text-xs text-slate-600 dark:text-gray-400">Pusat Kabupaten</p>
            </div>
          </div>
          <span class="text-lg font-bold text-slate-900 dark:text-white">15 km</span>
        </div>
        
        <div class="flex items-center justify-between">
          <div class="flex items-center gap-3">
            <div class="w-10 h-10 rounded-lg bg-amber-100 dark:bg-amber-900 flex items-center justify-center">
              🛣️
            </div>
            <div>
              <span class="text-sm font-semibold text-slate-900 dark:text-white">Jalur Utama</span>
              <p class="text-xs text-slate-600 dark:text-gray-400">Akses menuju desa</p>
            </div>
          </div>
          <span class="text-sm font-semibold text-emerald-600">Jalan Provinsi</span>
        </div>
        
        <div class="pt-4 border-t border-slate-200 dark:border-gray-700">
          <h4 class="text-sm font-semibold text-slate-900 dark:text-white mb-2">Rute dari Kota Banjarnegara:</h4>
          <ol class="space-y-2 text-sm text-slate-600 dark:text-gray-400">
            <li class="flex items-start gap-2">
              <span class="w-4 h-4 rounded-full bg-emerald-500 text-white text-xs flex items-center justify-center mt-0.5">1</span>
              Dari Alun-alun Banjarnegara ke arah Selatan
            </li>
            <li class="flex items-start gap-2">
              <span class="w-4 h-4 rounded-full bg-sky-500 text-white text-xs flex items-center justify-center mt-0.5">2</span>
              Ikuti Jalan Raya Bawang (± 12 km)
            </li>
            <li class="flex items-start gap-2">
              <span class="w-4 h-4 rounded-full bg-amber-500 text-white text-xs flex items-center justify-center mt-0.5">3</span>
              Belok kiri di pertigaan Pasar Bawang
            </li>
            <li class="flex items-start gap-2">
              <span class="w-4 h-4 rounded-full bg-violet-500 text-white text-xs flex items-center justify-center mt-0.5">4</span>
              Kantor Desa terletak ± 3 km dari pertigaan
            </li>
          </ol>
        </div>
      </div>
    </div>

    <!-- Transportasi & Panduan -->
    <div class="bg-gradient-to-br from-emerald-50 to-sky-50 dark:from-gray-800 dark:to-gray-900 rounded-2xl border border-emerald-200 dark:border-gray-700 p-6">
      <h3 class="text-base font-bold text-slate-900 dark:text-white mb-4 flex items-center gap-2">
        <span class="w-8 h-8 rounded-lg bg-sky-100 dark:bg-sky-900 flex items-center justify-center">🚌</span>
        <span>Transportasi & Panduan</span>
      </h3>
      
      <div class="space-y-4">
        <div class="space-y-3">
          <h4 class="text-sm font-semibold text-slate-900 dark:text-white">Transportasi Umum:</h4>
          <div class="grid grid-cols-2 gap-3">
            <div class="bg-white/50 dark:bg-gray-700/50 rounded-lg p-3">
              <div class="flex items-center gap-2 mb-1">
                <span class="text-lg">🚐</span>
                <span class="text-sm font-semibold text-slate-900 dark:text-white">Angkutan Desa</span>
              </div>
              <p class="text-xs text-slate-600 dark:text-gray-400">Setiap 1-2 jam</p>
            </div>
            <div class="bg-white/50 dark:bg-gray-700/50 rounded-lg p-3">
              <div class="flex items-center gap-2 mb-1">
                <span class="text-lg">🏍️</span>
                <span class="text-sm font-semibold text-slate-900 dark:text-white">Ojek Online</span>
              </div>
              <p class="text-xs text-slate-600 dark:text-gray-400">Tersedia 24 jam</p>
            </div>
          </div>
        </div>
        
        <div class="pt-4 border-t border-slate-200 dark:border-gray-700">
          <h4 class="text-sm font-semibold text-slate-900 dark:text-white mb-2">Tips Perjalanan:</h4>
          <ul class="space-y-2 text-sm text-slate-600 dark:text-gray-400">
            <li class="flex items-start gap-2">
              <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 mt-1.5"></span>
              Waktu terbaik berkunjung: Pagi atau Sore hari
            </li>
            <li class="flex items-start gap-2">
              <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 mt-1.5"></span>
              Bawa peta atau aktifkan GPS
            </li>
            <li class="flex items-start gap-2">
              <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 mt-1.5"></span>
              Hubungi kontak desa untuk panduan
            </li>
            <li class="flex items-start gap-2">
              <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 mt-1.5"></span>
              Periksa kondisi kendaraan sebelum berangkat
            </li>
          </ul>
        </div>
        
        <div class="mt-4">
          <button id="guide-btn" class="w-full py-3 rounded-lg bg-gradient-to-r from-emerald-500 to-sky-500 text-white font-semibold hover:shadow-lg hover:scale-105 transition-all duration-300 flex items-center justify-center gap-2">
            📞 Hubungi Guide Lokal
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- DOWNLOAD PETA -->
  <div class="mt-12 pt-8 border-t border-slate-100 dark:border-gray-700 anim-naik anim-naik-telat-1 relative z-10">
    <div class="text-center">
      <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-3">📥 Download Peta Desa</h3>
      <p class="text-sm text-slate-700 dark:text-gray-300 mb-6 max-w-2xl mx-auto">
        Unduh peta resmi Desa Bawang dalam format PDF untuk panduan offline atau cetak.
        Peta mencakup lokasi penting, rute akses, dan informasi kontak darurat.
      </p>
      
      <div class="flex flex-wrap gap-4 justify-center">
        <button id="download-pdf" class="px-6 py-3 rounded-full bg-gradient-to-r from-emerald-500 to-sky-500 text-white font-semibold hover:shadow-lg hover:scale-105 transition-all duration-300 flex items-center gap-2">
          📄 Download Peta PDF
        </button>
        <button id="peta-dusun" class="px-6 py-3 rounded-full border border-slate-300 dark:border-gray-600 text-slate-700 dark:text-gray-300 font-semibold hover:bg-slate-50 dark:hover:bg-gray-700 transition-colors flex items-center gap-2">
          🗺️ Peta Detail Dusun
        </button>
        <button id="peta-digital" class="px-6 py-3 rounded-full border border-slate-300 dark:border-gray-600 text-slate-700 dark:text-gray-300 font-semibold hover:bg-slate-50 dark:hover:bg-gray-700 transition-colors flex items-center gap-2">
          📱 Peta Digital
        </button>
      </div>
    </div>
  </div>

</section>

<style>
/* Animasi tambahan */
@keyframes kiri {
  from { opacity: 0; transform: translateX(-20px); }
  to { opacity: 1; transform: translateX(0); }
}

@keyframes kanan {
  from { opacity: 0; transform: translateX(20px); }
  to { opacity: 1; transform: translateX(0); }
}

@keyframes naik {
  from { opacity: 0; transform: translateY(20px); }
  to { opacity: 1; transform: translateY(0); }
}

.anim-kiri { animation: kiri 0.6s ease-out forwards; opacity: 0; }
.anim-kanan { animation: kanan 0.6s ease-out forwards; opacity: 0; }
.anim-naik { animation: naik 0.6s ease-out forwards; opacity: 0; }
.anim-naik-telat-1 { animation-delay: 0.2s; }
.anim-naik-telat-2 { animation-delay: 0.4s; }

/* Smooth transitions */
.transition-all {
  transition-property: all;
  transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
  transition-duration: 300ms;
}

/* Map specific styles */
.rounded-2xl {
  border-radius: 1rem;
}

.shadow-2xl {
  box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
}
</style>

<script>
// Interactive map controls
document.addEventListener('DOMContentLoaded', function() {
  // Fungsi untuk menampilkan notifikasi
  function showNotification(message) {
    // Buat elemen notifikasi
    const notification = document.createElement('div');
    notification.className = 'fixed top-4 right-4 bg-emerald-500 text-white px-4 py-3 rounded-lg shadow-lg z-50 animate-slide-in';
    notification.textContent = message;
    notification.style.cssText = `
      animation: slideIn 0.3s ease-out;
      max-width: 300px;
      word-wrap: break-word;
    `;
    
    // Tambahkan ke body
    document.body.appendChild(notification);
    
    // Hapus setelah 3 detik
    setTimeout(() => {
      notification.style.animation = 'slideOut 0.3s ease-out forwards';
      setTimeout(() => {
        if (notification.parentNode) {
          notification.parentNode.removeChild(notification);
        }
      }, 300);
    }, 3000);
    
    // Tambahkan style animasi
    const style = document.createElement('style');
    style.textContent = `
      @keyframes slideIn {
        from { transform: translateX(100%); opacity: 0; }
        to { transform: translateX(0); opacity: 1; }
      }
      @keyframes slideOut {
        from { transform: translateX(0); opacity: 1; }
        to { transform: translateX(100%); opacity: 0; }
      }
    `;
    document.head.appendChild(style);
  }
  
  // Map buttons
  const satelitBtn = document.getElementById('satelit-btn');
  const tempatBtn = document.getElementById('tempat-btn');
  
  if (satelitBtn) {
    satelitBtn.addEventListener('click', () => {
      showNotification('Mode peta satelit akan ditampilkan');
    });
  }
  
  if (tempatBtn) {
    tempatBtn.addEventListener('click', () => {
      showNotification('Menampilkan tempat-tempat penting di peta');
    });
  }
  
  // Zoom controls
  const zoomInBtn = document.getElementById('zoom-in');
  const zoomOutBtn = document.getElementById('zoom-out');
  const mapTypeBtn = document.getElementById('map-type');
  
  if (zoomInBtn) {
    zoomInBtn.addEventListener('click', () => showNotification('Zoom In (fitur demo)'));
  }
  if (zoomOutBtn) {
    zoomOutBtn.addEventListener('click', () => showNotification('Zoom Out (fitur demo)'));
  }
  if (mapTypeBtn) {
    mapTypeBtn.addEventListener('click', () => showNotification('Ubah jenis peta (fitur demo)'));
  }
  
  // Location buttons
  const locationButtons = document.querySelectorAll('.lokasi-btn');
  locationButtons.forEach(btn => {
    btn.addEventListener('click', function() {
      const locationName = this.getAttribute('data-lokasi');
      showNotification(`Menampilkan "${locationName}" di peta`);
    });
  });
  
  // Guide button
  const guideBtn = document.getElementById('guide-btn');
  if (guideBtn) {
    guideBtn.addEventListener('click', () => {
      showNotification('Mengarahkan ke kontak guide lokal desa');
    });
  }
  
  // Download buttons
  const downloadPdf = document.getElementById('download-pdf');
  const petaDusun = document.getElementById('peta-dusun');
  const petaDigital = document.getElementById('peta-digital');
  
  if (downloadPdf) {
    downloadPdf.addEventListener('click', () => {
      showNotification('Mengunduh peta PDF Desa Bawang');
    });
  }
  
  if (petaDusun) {
    petaDusun.addEventListener('click', () => {
      showNotification('Menampilkan peta detail dusun-dusun');
    });
  }
  
  if (petaDigital) {
    petaDigital.addEventListener('click', () => {
      showNotification('Mengakses peta digital interaktif');
    });
  }
  
  // Trigger animations when page loads
  setTimeout(() => {
    const animatedElements = document.querySelectorAll('.anim-kiri, .anim-kanan, .anim-naik');
    animatedElements.forEach(el => {
      el.style.opacity = '1';
    });
  }, 100);
});
</script>
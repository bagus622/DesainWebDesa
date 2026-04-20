<?php
  $halaman = $_GET['halaman'] ?? 'beranda';

  // Halaman yang masuk ke grup "Lainnya" - DIPERBAIKI (ditambahkan pembangunan-desa dan lowongan-pekerjaan)
  $lainnyaPages = [
    'infografis-potensi', 
    'transparansi-anggaran', 
    'bantuan', 
    'peta', 
    'lembaga-masyarakat',
    'kepemerintahan',
    'umkm',
    'statistik',
    'profil',
    'layanan-desa',
    'pembangunan-desa',
    'lowongan-pekerjaan'      // DITAMBAHKAN
  ];
  $isLainnyaActive = in_array($halaman, $lainnyaPages);

  // Data sederhana untuk auto-suggest (judul berita & galeri)
  $beritaSugesti = [
    'Gotong Royong Pembersihan Saluran Irigasi',
    'Pelatihan UMKM Bagi Warga Desa',
  ];

  $galeriSugesti = [
    'Kegiatan Warga',
    'Posyandu Balita',
    'Panen Raya',
    'Rapat Desa',
  ];

  $halamanSugesti = [
    'Profil Desa',
    'Transparansi Anggaran',
    'Lembaga Masyarakat',
    'Peta Desa',
    'Informasi Bantuan Desa',
    'Kepemerintahan Desa',
    'UMKM Desa',
    'Statistik Desa',
    'Profil Lengkap Desa',
    'Layanan Desa Online',
    'Pembangunan Desa',
    'Lowongan Pekerjaan'      // DITAMBAHKAN untuk pencarian
  ];
?>

<nav class="sticky top-0 z-40 bg-white/80 dark:bg-slate-900/80 backdrop-blur border-b border-slate-200 dark:border-slate-700">
  <div class="max-w-6xl mx-auto px-4 h-16 flex items-center justify-between">

    <!-- Logo / Nama Desa -->
    <a href="index.php" class="flex items-center gap-2" data-loading="true">
      <div class="w-8 h-8 rounded-full overflow-hidden shadow-sm border border-slate-200 dark:border-slate-600">
        <img src="aset/gambar/remove.png"
             alt="Logo Desa Bawang"
             class="w-full h-full object-cover">
      </div>

      <div class="flex flex-col leading-tight">
        <span class="font-bold text-lg hidden sm:inline-block text-slate-900 dark:text-slate-100">
          Desa Bawang
        </span>
        <span class="font-bold text-lg sm:hidden text-slate-900 dark:text-slate-100">
          Desa Bawang
        </span>
        <span class="text-[11px] text-slate-500 dark:text-slate-400 hidden sm:inline-block">
          Kec. Bawang, Kab. Banjarnegara
        </span>
      </div>
    </a>

    <!-- Menu + Theme + Search -->
    <div class="flex items-center gap-3 text-sm font-medium text-slate-700 dark:text-slate-100">

      <a href="index.php"
         data-loading="true"
         class="px-2 py-1 border-b-2 <?php echo ($halaman === 'beranda') ? 'border-desaBiru text-desaBiru' : 'border-transparent hover:text-desaBiru'; ?>">
        Beranda
      </a>

      <!-- Visi-Misi (menu utama) -->
      <a href="index.php?halaman=profil-desa"
         data-loading="true"
         class="px-2 py-1 border-b-2 <?php echo ($halaman === 'profil-desa') ? 'border-desaBiru text-desaBiru' : 'border-transparent hover:text-desaBiru'; ?>">
        Visi-Misi
      </a>

      <a href="index.php?halaman=galeri"
         data-loading="true"
         class="px-2 py-1 border-b-2 <?php echo ($halaman === 'galeri') ? 'border-desaBiru text-desaBiru' : 'border-transparent hover:text-desaBiru'; ?>">
        Galeri
      </a>

      <a href="index.php?halaman=berita"
         data-loading="true"
         class="px-2 py-1 border-b-2 <?php echo ($halaman === 'berita') ? 'border-desaBiru text-desaBiru' : 'border-transparent hover:text-desaBiru'; ?>">
        Berita
      </a>

      <a href="index.php?halaman=kontak"
         data-loading="true"
         class="px-2 py-1 border-b-2 <?php echo ($halaman === 'kontak') ? 'border-desaBiru text-desaBiru' : 'border-transparent hover:text-desaBiru'; ?>">
        Kontak
      </a>

      <!-- Dropdown Lainnya -->
      <div class="relative group">
        <button
          type="button"
          class="flex items-center gap-1 px-2 py-1 border-b-2
                 <?php echo $isLainnyaActive ? 'border-desaBiru text-desaBiru' : 'border-transparent hover:text-desaBiru'; ?>">
          <span>Lainnya</span>
          <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5 mt-[1px]" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 10.939l3.71-3.71a.75.75 0 111.06 1.062l-4.24 4.243a.75.75 0 01-1.06 0L5.25 8.27a.75.75 0 01-.02-1.06z" clip-rule="evenodd" />
          </svg>
        </button>

        <!-- Isi dropdown dengan emoji -->
        <div class="absolute right-0 mt-2 w-56 bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-700 rounded-xl shadow-lg py-2 text-sm
                    hidden group-hover:block group-focus-within:block">

          <!-- Profil (halaman lengkap) -->
          <a href="index.php?halaman=profil"
             data-loading="true"
             class="block px-3 py-2 hover:bg-slate-50 dark:hover:bg-slate-800 <?php echo ($halaman === 'profil') ? 'text-desaBiru font-semibold' : ''; ?>">
            <i class="fas fa-landmark mr-2 text-slate-500"></i> Profil Desa
          </a>

          <!-- Layanan Desa Online -->
          <a href="index.php?halaman=layanan-desa"
             data-loading="true"
             class="block px-3 py-2 hover:bg-slate-50 dark:hover:bg-slate-800 <?php echo ($halaman === 'layanan-desa') ? 'text-desaBiru font-semibold' : ''; ?>">
            <i class="fas fa-file-alt mr-2 text-slate-500"></i> Layanan Desa
          </a>

          <!-- Pembangunan Desa -->
          <a href="index.php?halaman=pembangunan-desa"
             data-loading="true"
             class="block px-3 py-2 hover:bg-slate-50 dark:hover:bg-slate-800 <?php echo ($halaman === 'pembangunan-desa') ? 'text-desaBiru font-semibold' : ''; ?>">
            <i class="fas fa-hard-hat mr-2 text-slate-500"></i> Pembangunan Desa
          </a>

          <!-- Lowongan Pekerjaan -->
          <a href="index.php?halaman=lowongan-pekerjaan"
             data-loading="true"
             class="block px-3 py-2 hover:bg-slate-50 dark:hover:bg-slate-800 <?php echo ($halaman === 'lowongan-pekerjaan') ? 'text-desaBiru font-semibold' : ''; ?>">
            <i class="fas fa-briefcase mr-2 text-slate-500"></i> Lowongan Pekerjaan
          </a>

          <!-- Item yang sudah ada -->
          <a href="index.php?halaman=infografis-potensi"
             data-loading="true"
             class="block px-3 py-2 hover:bg-slate-50 dark:hover:bg-slate-800 <?php echo ($halaman === 'infografis-potensi') ? 'text-desaBiru font-semibold' : ''; ?>">
            <i class="fas fa-chart-pie mr-2 text-slate-500"></i> Infografis &amp; Potensi
          </a>

          <a href="index.php?halaman=transparansi-anggaran"
             data-loading="true"
             class="block px-3 py-2 hover:bg-slate-50 dark:hover:bg-slate-800 <?php echo ($halaman === 'transparansi-anggaran') ? 'text-desaBiru font-semibold' : ''; ?>">
            <i class="fas fa-money-bill-wave mr-2 text-slate-500"></i> Transparansi Anggaran
          </a>

          <!-- Halaman baru yang diminta -->
          <a href="index.php?halaman=kepemerintahan"
             data-loading="true"
             class="block px-3 py-2 hover:bg-slate-50 dark:hover:bg-slate-800 <?php echo ($halaman === 'kepemerintahan') ? 'text-desaBiru font-semibold' : ''; ?>">
            <i class="fas fa-sitemap mr-2 text-slate-500"></i> Kepemerintahan
          </a>

          <a href="index.php?halaman=umkm"
             data-loading="true"
             class="block px-3 py-2 hover:bg-slate-50 dark:hover:bg-slate-800 <?php echo ($halaman === 'umkm') ? 'text-desaBiru font-semibold' : ''; ?>">
            <i class="fas fa-store mr-2 text-slate-500"></i> UMKM Desa
          </a>

          <a href="index.php?halaman=statistik"
             data-loading="true"
             class="block px-3 py-2 hover:bg-slate-50 dark:hover:bg-slate-800 <?php echo ($halaman === 'statistik') ? 'text-desaBiru font-semibold' : ''; ?>">
            <i class="fas fa-chart-bar mr-2 text-slate-500"></i> Statistik Desa
          </a>

          <div class="border-t border-slate-100 dark:border-slate-700 my-2"></div>

          <!-- Item yang sudah ada (lanjutan) -->
          <a href="index.php?halaman=bantuan"
             data-loading="true"
             class="block px-3 py-2 hover:bg-slate-50 dark:hover:bg-slate-800 <?php echo ($halaman === 'bantuan') ? 'text-desaBiru font-semibold' : ''; ?>">
            <i class="fas fa-hand-holding-heart mr-2 text-slate-500"></i> Bantuan
          </a>

          <a href="index.php?halaman=peta"
             data-loading="true"
             class="block px-3 py-2 hover:bg-slate-50 dark:hover:bg-slate-800 <?php echo ($halaman === 'peta') ? 'text-desaBiru font-semibold' : ''; ?>">
            <i class="fas fa-map-marked-alt mr-2 text-slate-500"></i> Peta
          </a>

          <a href="index.php?halaman=lembaga-masyarakat"
             data-loading="true"
             class="block px-3 py-2 hover:bg-slate-50 dark:hover:bg-slate-800 <?php echo ($halaman === 'lembaga-masyarakat') ? 'text-desaBiru font-semibold' : ''; ?>">
            <i class="fas fa-users mr-2 text-slate-500"></i> Lembaga Masyarakat
          </a>
        </div>
      </div>


      <!-- 🔍 Search Button + Input + Auto-suggest -->
      <div class="relative">
        <!-- Button Icon -->
        <button id="searchToggle" type="button"
                class="p-2 rounded-full hover:bg-slate-100 dark:hover:bg-slate-700 transition">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-slate-600 dark:text-slate-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-width="2" d="M21 21l-4.35-4.35M10 18a8 8 0 100-16 8 8 0 000 16z"/>
          </svg>
        </button>

        <!-- Box Search -->
        <div id="searchBox"
             class="absolute right-0 mt-2 w-64 bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-700 rounded-xl shadow-lg p-3 hidden">

          <form action="index.php" method="GET" class="space-y-2">
            <input type="hidden" name="halaman" value="pencarian">

            <input
              id="searchInput"
              type="text"
              name="cari"
              placeholder="Cari berita, galeri, profil..."
              class="w-full px-3 py-2 rounded-lg border border-slate-300 dark:border-slate-600 bg-white dark:bg-slate-800 text-sm text-slate-800 dark:text-slate-100 focus:ring focus:ring-blue-200">

            <button class="w-full py-1.5 bg-desaBiru text-white rounded-lg text-sm hover:bg-desaBiruMuda">
              Cari
            </button>
          </form>

          <!-- Auto suggest -->
          <div id="searchSuggest"
               class="mt-2 border-t border-slate-100 dark:border-slate-700 pt-2 max-h-48 overflow-auto hidden">
            <!-- item suggest akan diisi via JS -->
          </div>
        </div>
      </div>

      <!-- Theme Toggle
      <button id="themeToggle" type="button"
              class="p-2 rounded-full hover:bg-slate-100 dark:hover:bg-slate-700 transition flex items-center gap-1">
        <span id="themeEmoji">🌙</span>
        <span id="themeLabel" class="text-xs hidden sm:inline">Gelap</span>
      </button> -->

    </div>

  </div>
</nav>

<script>
  // ================== SEARCH TOGGLE & AUTO SUGGEST ==================
  const searchToggle = document.getElementById('searchToggle');
  const searchBox = document.getElementById('searchBox');
  const searchInput = document.getElementById('searchInput');
  const searchSuggest = document.getElementById('searchSuggest');

  if (searchToggle && searchBox && searchInput && searchSuggest) {
    searchToggle.addEventListener('click', () => {
      searchBox.classList.toggle('hidden');
      if (!searchBox.classList.contains('hidden')) {
        setTimeout(() => searchInput.focus(), 50);
      }
    });

    document.addEventListener('click', (e) => {
      if (!searchBox.contains(e.target) && !searchToggle.contains(e.target)) {
        searchBox.classList.add('hidden');
      }
    });

    const dataSugesti = [
      // Halaman-halaman penting
      { label: "Profil Lengkap Desa", url: "index.php?halaman=profil" },
      { label: "Layanan Desa Online", url: "index.php?halaman=layanan-desa" },
      { label: "Pembangunan Desa", url: "index.php?halaman=pembangunan-desa" },
      { label: "Lowongan Pekerjaan", url: "index.php?halaman=lowongan-pekerjaan" }, // DITAMBAHKAN
      { label: "Visi Misi Desa", url: "index.php?halaman=profil-desa" },
      { label: "Statistik Desa", url: "index.php?halaman=statistik" },
      { label: "UMKM Desa", url: "index.php?halaman=umkm" },
      { label: "Kepemerintahan Desa", url: "index.php?halaman=kepemerintahan" },
      { label: "Transparansi Anggaran", url: "index.php?halaman=transparansi-anggaran" },
      { label: "Lembaga Masyarakat", url: "index.php?halaman=lembaga-masyarakat" },
      { label: "Peta Desa", url: "index.php?halaman=peta" },
      { label: "Informasi Bantuan Desa", url: "index.php?halaman=bantuan" },
      { label: "Infografis Potensi", url: "index.php?halaman=infografis-potensi" },
      
      // Berita
      <?php foreach ($beritaSugesti as $b): ?>
        { label: "Berita: <?php echo $b; ?>", url: "index.php?halaman=berita" },
      <?php endforeach; ?>

      // Galeri
      <?php foreach ($galeriSugesti as $g): ?>
        { label: "Galeri: <?php echo $g; ?>", url: "index.php?halaman=galeri" },
      <?php endforeach; ?>
    ];

    searchInput.addEventListener('input', () => {
      const q = searchInput.value.toLowerCase().trim();
      searchSuggest.innerHTML = '';

      if (!q) {
        searchSuggest.classList.add('hidden');
        return;
      }

      const hasil = dataSugesti.filter(item =>
        item.label.toLowerCase().includes(q)
      ).slice(0, 8);

      if (!hasil.length) {
        searchSuggest.classList.add('hidden');
        return;
      }

      hasil.forEach(item => {
        const btn = document.createElement('button');
        btn.type = 'button';
        btn.className = 'w-full text-left px-2 py-1.5 rounded-lg text-xs hover:bg-slate-50 dark:hover:bg-slate-800';
        btn.textContent = item.label;
        btn.addEventListener('click', () => {
          if (item.url && item.url !== '#') {
            window.location.href = item.url;
          } else {
            searchInput.value = item.label;
            searchSuggest.classList.add('hidden');
          }
        });
        searchSuggest.appendChild(btn);
      });

      searchSuggest.classList.remove('hidden');
    });
  }

  // ================== THEME SYSTEM (LIGHT / DARK) ==================
  const themeToggle = document.getElementById('themeToggle');
  const themeEmoji  = document.getElementById('themeEmoji');
  const themeLabel  = document.getElementById('themeLabel');

  if (themeToggle && themeEmoji && themeLabel) {
    const savedTheme = localStorage.getItem('theme');

    function setTheme(mode) {
      if (mode === 'dark') {
        document.documentElement.classList.add('dark');
        themeEmoji.textContent = '☀';
        themeLabel.textContent = 'Terang';
        localStorage.setItem('theme', 'dark');
      } else {
        document.documentElement.classList.remove('dark');
        themeEmoji.textContent = '🌙';
        themeLabel.textContent = 'Gelap';
        localStorage.setItem('theme', 'light');
      }
    }

    // Inisialisasi dari localStorage
    if (savedTheme === 'dark') {
      setTheme('dark');
    } else {
      setTheme('light');
    }

    // Toggle saat diklik
    themeToggle.addEventListener('click', () => {
      if (document.documentElement.classList.contains('dark')) {
        setTheme('light');
      } else {
        setTheme('dark');
      }
    });
  }
</script>
<?php if ($halaman == 'statistik'): ?>
<div class="min-h-screen bg-gradient-to-br from-slate-50 via-white to-blue-50/30 dark:from-slate-900 dark:via-slate-800 dark:to-blue-900/10 py-8">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    
    <!-- Header dengan animasi -->
    <div class="mb-12 animate-fade-in">
      <div class="flex flex-col md:flex-row md:items-center justify-between gap-6 mb-6">
        <div class="flex items-center gap-4">
          <div class="relative">
            <div class="w-14 h-14 rounded-xl bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 flex items-center justify-center shadow-lg shadow-indigo-500/20 animate-pulse-slow">
              <i class="fas fa-chart-network text-white text-xl"></i>
            </div>
            <div class="absolute -top-1 -right-1 w-5 h-5 bg-green-400 rounded-full border-2 border-white dark:border-slate-800 animate-ping"></div>
          </div>
          <div>
            <h1 class="text-3xl md:text-4xl font-bold text-slate-900 dark:text-white bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text text-transparent">Statistik Desa Bawang</h1>
            <p class="text-slate-600 dark:text-slate-300 mt-2 flex items-center gap-2">
              <span class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></span>
              Data terkini perkembangan desa di berbagai sektor
            </p>
          </div>
        </div>
        <div class="flex items-center gap-3">
          <span class="px-3 py-1 bg-emerald-100 dark:bg-emerald-900/30 text-emerald-700 dark:text-emerald-300 rounded-full text-sm font-medium">
            <i class="fas fa-sync-alt mr-1"></i> Live Data
          </span>
          <button class="px-4 py-2 bg-white dark:bg-slate-700 border border-slate-200 dark:border-slate-600 rounded-lg text-slate-700 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-slate-600 transition-all duration-300 flex items-center gap-2">
            <i class="fas fa-filter"></i> Filter
          </button>
        </div>
      </div>
      
      <!-- Tahun Statistik -->
      <div class="inline-flex items-center bg-white dark:bg-slate-800 rounded-xl p-2 shadow-sm">
        <?php for($year = 2021; $year <= 2024; $year++): ?>
          <button class="px-4 py-2 rounded-lg transition-all duration-300 <?php echo $year == 2024 ? 'bg-gradient-to-r from-blue-500 to-indigo-500 text-white shadow-lg shadow-blue-500/30' : 'text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-700'; ?>">
            <?php echo $year; ?>
          </button>
        <?php endfor; ?>
      </div>
    </div>

    <!-- Tab Navigasi dengan indikator aktif -->
    <div class="mb-10 relative">
      <div class="flex flex-wrap gap-3 mb-2">
        <button onclick="showTab('kependudukan')" id="tabKependudukan" class="group tab-statistik active relative px-6 py-4 font-medium rounded-xl bg-gradient-to-r from-blue-500 to-indigo-500 text-white shadow-lg shadow-blue-500/30 hover:shadow-xl hover:shadow-blue-500/40 transition-all duration-300 transform hover:-translate-y-0.5">
          <div class="flex items-center gap-3">
            <div class="w-10 h-10 rounded-lg bg-white/20 flex items-center justify-center backdrop-blur-sm">
              <i class="fas fa-users text-lg"></i>
            </div>
            <div class="text-left">
              <p class="font-bold">Kependudukan</p>
              <p class="text-sm opacity-90">5.234 Penduduk</p>
            </div>
          </div>
          <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 w-12 h-1 bg-white rounded-full"></div>
        </button>
        
        <button onclick="showTab('ekonomi')" id="tabEkonomi" class="group tab-statistik relative px-6 py-4 font-medium rounded-xl bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 text-slate-700 dark:text-slate-300 hover:border-blue-300 dark:hover:border-blue-700 hover:shadow-lg transition-all duration-300 transform hover:-translate-y-0.5">
          <div class="flex items-center gap-3">
            <div class="w-10 h-10 rounded-lg bg-gradient-to-r from-emerald-100 to-teal-100 dark:from-emerald-900/30 dark:to-teal-900/30 flex items-center justify-center">
              <i class="fas fa-chart-line text-emerald-600 dark:text-emerald-400"></i>
            </div>
            <div class="text-left">
              <p class="font-bold">Ekonomi</p>
              <p class="text-sm text-slate-500 dark:text-slate-400">+15% Pertumbuhan</p>
            </div>
          </div>
        </button>
        
        <button onclick="showTab('pendidikan')" id="tabPendidikan" class="group tab-statistik relative px-6 py-4 font-medium rounded-xl bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 text-slate-700 dark:text-slate-300 hover:border-purple-300 dark:hover:border-purple-700 hover:shadow-lg transition-all duration-300 transform hover:-translate-y-0.5">
          <div class="flex items-center gap-3">
            <div class="w-10 h-10 rounded-lg bg-gradient-to-r from-purple-100 to-violet-100 dark:from-purple-900/30 dark:to-violet-900/30 flex items-center justify-center">
              <i class="fas fa-graduation-cap text-purple-600 dark:text-purple-400"></i>
            </div>
            <div class="text-left">
              <p class="font-bold">Pendidikan</p>
              <p class="text-sm text-slate-500 dark:text-slate-400">9 Sekolah</p>
            </div>
          </div>
        </button>
        
        <button onclick="showTab('kesehatan')" id="tabKesehatan" class="group tab-statistik relative px-6 py-4 font-medium rounded-xl bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 text-slate-700 dark:text-slate-300 hover:border-rose-300 dark:hover:border-rose-700 hover:shadow-lg transition-all duration-300 transform hover:-translate-y-0.5">
          <div class="flex items-center gap-3">
            <div class="w-10 h-10 rounded-lg bg-gradient-to-r from-rose-100 to-pink-100 dark:from-rose-900/30 dark:to-pink-900/30 flex items-center justify-center">
              <i class="fas fa-heartbeat text-rose-600 dark:text-rose-400"></i>
            </div>
            <div class="text-left">
              <p class="font-bold">Kesehatan</p>
              <p class="text-sm text-slate-500 dark:text-slate-400">12 Fasilitas</p>
            </div>
          </div>
        </button>
      </div>
    </div>

    <!-- Tab Content: Kependudukan (Default) -->
    <div id="contentKependudukan" class="tab-content-statistik animate-slide-up">
      <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-12">
        <!-- Total Penduduk dengan Chart Mini -->
        <div class="bg-white dark:bg-slate-800 rounded-2xl shadow-xl p-6 border border-slate-100 dark:border-slate-700 hover:shadow-2xl transition-all duration-500 group">
          <div class="flex items-center justify-between mb-6">
            <div>
              <p class="text-slate-500 dark:text-slate-400 text-sm font-medium uppercase tracking-wider">Total Penduduk</p>
              <p class="text-4xl font-bold text-slate-900 dark:text-white mt-2">5,234</p>
              <div class="flex items-center gap-2 mt-2">
                <span class="px-2 py-1 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded text-xs font-medium">
                  <i class="fas fa-arrow-up mr-1"></i> 2.3%
                </span>
                <span class="text-sm text-slate-500 dark:text-slate-400">vs tahun lalu</span>
              </div>
            </div>
            <div class="relative">
              <div class="w-20 h-20 rounded-full bg-gradient-to-br from-blue-100 to-indigo-100 dark:from-blue-900/30 dark:to-indigo-900/30 flex items-center justify-center group-hover:scale-110 transition-transform duration-500">
                <i class="fas fa-users text-3xl text-blue-600 dark:text-blue-400"></i>
              </div>
              <div class="absolute -top-1 -right-1 w-8 h-8 bg-gradient-to-r from-blue-500 to-indigo-500 rounded-full flex items-center justify-center text-white text-xs font-bold">
                100%
              </div>
            </div>
          </div>
          
          <!-- Mini Chart -->
          <div class="mt-6">
            <div class="flex items-center justify-between mb-2">
              <span class="text-sm font-medium text-slate-700 dark:text-slate-300">Distribusi Gender</span>
              <div class="flex gap-4">
                <span class="text-sm text-blue-600 dark:text-blue-400 font-medium">51.2% L</span>
                <span class="text-sm text-pink-600 dark:text-pink-400 font-medium">48.8% P</span>
              </div>
            </div>
            <div class="w-full h-3 bg-slate-200 dark:bg-slate-700 rounded-full overflow-hidden">
              <div class="h-full flex">
                <div class="bg-gradient-to-r from-blue-500 to-blue-600" style="width: 51.2%"></div>
                <div class="bg-gradient-to-r from-pink-500 to-rose-500" style="width: 48.8%"></div>
              </div>
            </div>
          </div>
        </div>

        <!-- Struktur Usia dengan Visualisasi Interaktif -->
        <div class="bg-white dark:bg-slate-800 rounded-2xl shadow-xl p-6 border border-slate-100 dark:border-slate-700 hover:shadow-2xl transition-all duration-500">
          <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-6 flex items-center gap-2">
            <span class="w-2 h-2 bg-blue-500 rounded-full"></span>
            Struktur Usia Penduduk
          </h3>
          
          <div class="space-y-5">
            <!-- Anak-anak -->
            <div class="group cursor-pointer">
              <div class="flex justify-between mb-2">
                <div class="flex items-center gap-2">
                  <div class="w-3 h-3 rounded-full bg-blue-500"></div>
                  <span class="text-slate-700 dark:text-slate-300 font-medium">0-14 Tahun</span>
                </div>
                <div class="flex items-center gap-3">
                  <span class="font-bold text-slate-900 dark:text-white">1,466</span>
                  <span class="px-2 py-1 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded text-xs font-medium">28%</span>
                </div>
              </div>
              <div class="w-full bg-slate-200 dark:bg-slate-700 rounded-full h-2.5 overflow-hidden">
                <div class="bg-gradient-to-r from-blue-400 to-blue-600 h-2.5 rounded-full group-hover:w-full transition-all duration-1000" style="width: 28%"></div>
              </div>
              <p class="text-xs text-slate-500 dark:text-slate-400 mt-1">Anak-anak dan Remaja</p>
            </div>
            
            <!-- Produktif -->
            <div class="group cursor-pointer">
              <div class="flex justify-between mb-2">
                <div class="flex items-center gap-2">
                  <div class="w-3 h-3 rounded-full bg-emerald-500"></div>
                  <span class="text-slate-700 dark:text-slate-300 font-medium">15-64 Tahun</span>
                </div>
                <div class="flex items-center gap-3">
                  <span class="font-bold text-slate-900 dark:text-white">3,245</span>
                  <span class="px-2 py-1 bg-emerald-100 dark:bg-emerald-900/30 text-emerald-700 dark:text-emerald-300 rounded text-xs font-medium">62%</span>
                </div>
              </div>
              <div class="w-full bg-slate-200 dark:bg-slate-700 rounded-full h-2.5 overflow-hidden">
                <div class="bg-gradient-to-r from-emerald-400 to-emerald-600 h-2.5 rounded-full group-hover:w-full transition-all duration-1000" style="width: 62%"></div>
              </div>
              <p class="text-xs text-slate-500 dark:text-slate-400 mt-1">Usia Produktif</p>
            </div>
            
            <!-- Lansia -->
            <div class="group cursor-pointer">
              <div class="flex justify-between mb-2">
                <div class="flex items-center gap-2">
                  <div class="w-3 h-3 rounded-full bg-purple-500"></div>
                  <span class="text-slate-700 dark:text-slate-300 font-medium">65+ Tahun</span>
                </div>
                <div class="flex items-center gap-3">
                  <span class="font-bold text-slate-900 dark:text-white">523</span>
                  <span class="px-2 py-1 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded text-xs font-medium">10%</span>
                </div>
              </div>
              <div class="w-full bg-slate-200 dark:bg-slate-700 rounded-full h-2.5 overflow-hidden">
                <div class="bg-gradient-to-r from-purple-400 to-purple-600 h-2.5 rounded-full group-hover:w-full transition-all duration-1000" style="width: 10%"></div>
              </div>
              <p class="text-xs text-slate-500 dark:text-slate-400 mt-1">Lansia</p>
            </div>
          </div>
        </div>

        <!-- Data Keluarga -->
        <div class="bg-white dark:bg-slate-800 rounded-2xl shadow-xl p-6 border border-slate-100 dark:border-slate-700 hover:shadow-2xl transition-all duration-500">
          <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-6 flex items-center gap-2">
            <span class="w-2 h-2 bg-amber-500 rounded-full"></span>
            Data Keluarga
          </h3>
          
          <div class="space-y-4">
            <!-- KK -->
            <div class="group p-4 rounded-xl bg-gradient-to-r from-blue-50 to-indigo-50 dark:from-blue-900/10 dark:to-indigo-900/10 border border-blue-100 dark:border-blue-800 hover:border-blue-300 dark:hover:border-blue-600 transition-all duration-300 cursor-pointer">
              <div class="flex items-center justify-between">
                <div class="flex items-center gap-4">
                  <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-blue-500 to-blue-600 flex items-center justify-center shadow-lg shadow-blue-500/30">
                    <i class="fas fa-home text-white text-lg"></i>
                  </div>
                  <div>
                    <p class="font-bold text-slate-900 dark:text-white">Kepala Keluarga</p>
                    <p class="text-sm text-slate-600 dark:text-slate-300">Total Kartu Keluarga</p>
                  </div>
                </div>
                <div class="text-right">
                  <p class="text-2xl font-bold text-slate-900 dark:text-white">1,456</p>
                  <p class="text-xs text-slate-500 dark:text-slate-400">Rata-rata 3.6 orang/KK</p>
                </div>
              </div>
            </div>
            
            <!-- Penduduk Baru -->
            <div class="group p-4 rounded-xl bg-gradient-to-r from-emerald-50 to-teal-50 dark:from-emerald-900/10 dark:to-teal-900/10 border border-emerald-100 dark:border-emerald-800 hover:border-emerald-300 dark:hover:border-emerald-600 transition-all duration-300 cursor-pointer">
              <div class="flex items-center justify-between">
                <div class="flex items-center gap-4">
                  <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-emerald-500 to-teal-600 flex items-center justify-center shadow-lg shadow-emerald-500/30">
                    <i class="fas fa-user-plus text-white text-lg"></i>
                  </div>
                  <div>
                    <p class="font-bold text-slate-900 dark:text-white">Penduduk Baru</p>
                    <p class="text-sm text-slate-600 dark:text-slate-300">Registrasi 2024</p>
                  </div>
                </div>
                <div class="text-right">
                  <p class="text-2xl font-bold text-slate-900 dark:text-white">124</p>
                  <p class="text-xs text-slate-500 dark:text-slate-400">+24 dari 2023</p>
                </div>
              </div>
            </div>
            
            <!-- Kapadatan -->
            <div class="p-3 rounded-lg bg-slate-50 dark:bg-slate-700/50 mt-4">
              <div class="flex justify-between items-center">
                <span class="text-slate-600 dark:text-slate-300">Kepadatan Penduduk</span>
                <span class="font-bold text-slate-900 dark:text-white">418 jiwa/km²</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Peta Sebaran Penduduk -->
      <div class="bg-white dark:bg-slate-800 rounded-2xl shadow-xl p-8 mb-12 border border-slate-100 dark:border-slate-700">
        <div class="flex flex-col md:flex-row md:items-center justify-between mb-8">
          <h2 class="text-2xl font-bold text-slate-900 dark:text-white flex items-center gap-3">
            <i class="fas fa-map-marked-alt text-blue-500"></i>
            Sebaran Penduduk per Dusun
          </h2>
          <div class="flex items-center gap-2 mt-2 md:mt-0">
            <span class="text-sm text-slate-500 dark:text-slate-400">Total Area:</span>
            <span class="font-bold text-slate-900 dark:text-white">12.5 km²</span>
          </div>
        </div>
        
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
          <?php 
          $dusunData = [
            ['name' => 'Dusun 1', 'population' => 1245, 'percentage' => 23.8, 'color' => 'blue'],
            ['name' => 'Dusun 2', 'population' => 1087, 'percentage' => 20.8, 'color' => 'emerald'],
            ['name' => 'Dusun 3', 'population' => 987, 'percentage' => 18.9, 'color' => 'amber'],
            ['name' => 'Dusun 4', 'population' => 1915, 'percentage' => 36.5, 'color' => 'purple']
          ];
          
          foreach($dusunData as $dusun): 
          ?>
          <div class="group relative bg-gradient-to-br from-white to-slate-50 dark:from-slate-800 dark:to-slate-900 rounded-2xl p-6 border border-slate-200 dark:border-slate-700 hover:border-<?php echo $dusun['color']; ?>-300 dark:hover:border-<?php echo $dusun['color']; ?>-600 transition-all duration-500 hover:shadow-xl cursor-pointer overflow-hidden">
            <!-- Background Pattern -->
            <div class="absolute top-0 right-0 w-24 h-24 opacity-5">
              <i class="fas fa-home text-4xl"></i>
            </div>
            
            <div class="relative">
              <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-<?php echo $dusun['color']; ?>-500 to-<?php echo $dusun['color']; ?>-600 flex items-center justify-center shadow-lg shadow-<?php echo $dusun['color']; ?>-500/30">
                  <i class="fas fa-home text-white"></i>
                </div>
                <span class="px-3 py-1 bg-<?php echo $dusun['color']; ?>-100 dark:bg-<?php echo $dusun['color']; ?>-900/30 text-<?php echo $dusun['color']; ?>-700 dark:text-<?php echo $dusun['color']; ?>-300 rounded-full text-xs font-medium">
                  <?php echo $dusun['percentage']; ?>%
                </span>
              </div>
              
              <p class="text-lg font-bold text-slate-900 dark:text-white mb-1"><?php echo $dusun['name']; ?></p>
              <p class="text-3xl font-bold text-<?php echo $dusun['color']; ?>-600 dark:text-<?php echo $dusun['color']; ?>-400 mb-2">
                <?php echo number_format($dusun['population']); ?>
              </p>
              <p class="text-sm text-slate-600 dark:text-slate-300"><?php echo $dusun['percentage']; ?>% dari total penduduk</p>
              
              <!-- Progress Bar -->
              <div class="mt-4">
                <div class="w-full bg-slate-200 dark:bg-slate-700 rounded-full h-2">
                  <div class="bg-gradient-to-r from-<?php echo $dusun['color']; ?>-400 to-<?php echo $dusun['color']; ?>-600 h-2 rounded-full" style="width: <?php echo $dusun['percentage']; ?>%"></div>
                </div>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>

    <!-- Tab Content: Ekonomi -->
    <div id="contentEkonomi" class="tab-content-statistik hidden animate-slide-up">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-12">
        <!-- Lapangan Pekerjaan -->
        <div class="bg-white dark:bg-slate-800 rounded-2xl shadow-xl p-8 border border-slate-100 dark:border-slate-700">
          <div class="flex items-center justify-between mb-8">
            <h2 class="text-2xl font-bold text-slate-900 dark:text-white flex items-center gap-3">
              <i class="fas fa-briefcase text-emerald-500"></i>
              Lapangan Pekerjaan
            </h2>
            <span class="px-3 py-1 bg-emerald-100 dark:bg-emerald-900/30 text-emerald-700 dark:text-emerald-300 rounded-full text-sm font-medium">
              2,450 Pekerja
            </span>
          </div>
          
          <div class="space-y-6">
            <?php 
            $jobs = [
              ['name' => 'Pertanian & Perkebunan', 'percentage' => 45, 'color' => 'emerald', 'icon' => 'tractor'],
              ['name' => 'UMKM & Perdagangan', 'percentage' => 28, 'color' => 'blue', 'icon' => 'store'],
              ['name' => 'PNS & Karyawan', 'percentage' => 15, 'color' => 'purple', 'icon' => 'user-tie'],
              ['name' => 'Lainnya', 'percentage' => 12, 'color' => 'amber', 'icon' => 'ellipsis-h']
            ];
            
            foreach($jobs as $job): 
            ?>
            <div class="group">
              <div class="flex items-center justify-between mb-3">
                <div class="flex items-center gap-3">
                  <div class="w-10 h-10 rounded-lg bg-<?php echo $job['color']; ?>-100 dark:bg-<?php echo $job['color']; ?>-900/30 flex items-center justify-center">
                    <i class="fas fa-<?php echo $job['icon']; ?> text-<?php echo $job['color']; ?>-600 dark:text-<?php echo $job['color']; ?>-400"></i>
                  </div>
                  <div>
                    <p class="font-medium text-slate-900 dark:text-white"><?php echo $job['name']; ?></p>
                    <p class="text-sm text-slate-500 dark:text-slate-400"><?php echo $job['percentage']; ?>% dari total pekerja</p>
                  </div>
                </div>
                <span class="text-xl font-bold text-slate-900 dark:text-white"><?php echo $job['percentage']; ?>%</span>
              </div>
              <div class="w-full bg-slate-200 dark:bg-slate-700 rounded-full h-3 overflow-hidden">
                <div class="bg-gradient-to-r from-<?php echo $job['color']; ?>-400 to-<?php echo $job['color']; ?>-600 h-3 rounded-full group-hover:animate-progress" style="width: <?php echo $job['percentage']; ?>%"></div>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
        </div>

        <!-- Pendapatan Rata-rata -->
        <div class="bg-white dark:bg-slate-800 rounded-2xl shadow-xl p-8 border border-slate-100 dark:border-slate-700">
          <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-8 flex items-center gap-3">
            <i class="fas fa-money-bill-wave text-blue-500"></i>
            Pendapatan per Kapita
          </h2>
          
          <div class="space-y-8">
            <!-- Chart Pendapatan -->
            <div>
              <div class="flex items-end h-48 gap-6 mb-6">
                <?php 
                $incomeData = [
                  ['year' => 2021, 'amount' => 2.1, 'height' => 40, 'color' => 'blue'],
                  ['year' => 2022, 'amount' => 2.4, 'height' => 60, 'color' => 'emerald'],
                  ['year' => 2023, 'amount' => 2.8, 'height' => 75, 'color' => 'purple'],
                  ['year' => 2024, 'amount' => 3.2, 'height' => 85, 'color' => 'amber']
                ];
                
                foreach($incomeData as $data): 
                ?>
                <div class="flex-1 flex flex-col items-center group cursor-pointer">
                  <div class="relative w-full flex justify-center">
                    <div class="w-3/4 bg-gradient-to-t from-<?php echo $data['color']; ?>-400 to-<?php echo $data['color']; ?>-600 rounded-t-lg transition-all duration-500 group-hover:shadow-lg group-hover:shadow-<?php echo $data['color']; ?>-500/30" style="height: <?php echo $data['height']; ?>%"></div>
                    <div class="absolute -top-8 opacity-0 group-hover:opacity-100 transition-opacity duration-300 bg-slate-900 text-white text-xs font-medium px-2 py-1 rounded whitespace-nowrap">
                      Rp <?php echo $data['amount']; ?> juta
                    </div>
                  </div>
                  <p class="mt-3 text-sm font-medium text-slate-700 dark:text-slate-300"><?php echo $data['year']; ?></p>
                  <p class="font-bold text-slate-900 dark:text-white">Rp <?php echo $data['amount']; ?>jt</p>
                </div>
                <?php endforeach; ?>
              </div>
              
              <!-- Legenda -->
              <div class="grid grid-cols-2 gap-3">
                <div class="flex items-center gap-2 p-3 rounded-lg bg-gradient-to-r from-emerald-50 to-teal-50 dark:from-emerald-900/10 dark:to-teal-900/10">
                  <div class="w-3 h-3 rounded-full bg-emerald-500"></div>
                  <div>
                    <p class="text-sm font-medium text-slate-900 dark:text-white">Pertumbuhan Rata-rata</p>
                    <p class="text-xs text-slate-600 dark:text-slate-400">15% per tahun</p>
                  </div>
                </div>
                <div class="flex items-center gap-2 p-3 rounded-lg bg-gradient-to-r from-blue-50 to-indigo-50 dark:from-blue-900/10 dark:to-indigo-900/10">
                  <div class="w-3 h-3 rounded-full bg-blue-500"></div>
                  <div>
                    <p class="text-sm font-medium text-slate-900 dark:text-white">Target 2025</p>
                    <p class="text-xs text-slate-600 dark:text-slate-400">Rp 3.5 juta</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Tab Content: Pendidikan -->
    <div id="contentPendidikan" class="tab-content-statistik hidden animate-slide-up">
      <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-12">
        <!-- Tingkat Pendidikan -->
        <div class="lg:col-span-2 bg-white dark:bg-slate-800 rounded-2xl shadow-xl p-8 border border-slate-100 dark:border-slate-700">
          <div class="flex items-center justify-between mb-8">
            <h2 class="text-2xl font-bold text-slate-900 dark:text-white flex items-center gap-3">
              <i class="fas fa-user-graduate text-purple-500"></i>
              Tingkat Pendidikan
            </h2>
            <div class="flex items-center gap-2">
              <span class="px-3 py-1 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-full text-sm font-medium">
                <i class="fas fa-chart-line mr-1"></i> +8% dari 2020
              </span>
            </div>
          </div>
          
          <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <?php 
            $educationLevels = [
              ['name' => 'Tidak Sekolah', 'percentage' => 8, 'color' => 'rose', 'icon' => 'times-circle'],
              ['name' => 'SD / Sederajat', 'percentage' => 32, 'color' => 'amber', 'icon' => 'book'],
              ['name' => 'SMP / Sederajat', 'percentage' => 25, 'color' => 'emerald', 'icon' => 'book-open'],
              ['name' => 'SMA / Sederajat', 'percentage' => 22, 'color' => 'blue', 'icon' => 'graduation-cap'],
              ['name' => 'Diploma', 'percentage' => 7, 'color' => 'indigo', 'icon' => 'certificate'],
              ['name' => 'Sarjana+', 'percentage' => 6, 'color' => 'purple', 'icon' => 'university']
            ];
            
            foreach($educationLevels as $level): 
            ?>
            <div class="group p-4 rounded-xl border border-slate-200 dark:border-slate-700 hover:border-<?php echo $level['color']; ?>-300 dark:hover:border-<?php echo $level['color']; ?>-600 transition-all duration-300 cursor-pointer">
              <div class="flex items-center justify-between mb-4">
                <div class="flex items-center gap-3">
                  <div class="w-12 h-12 rounded-lg bg-<?php echo $level['color']; ?>-100 dark:bg-<?php echo $level['color']; ?>-900/30 flex items-center justify-center">
                    <i class="fas fa-<?php echo $level['icon']; ?> text-<?php echo $level['color']; ?>-600 dark:text-<?php echo $level['color']; ?>-400 text-lg"></i>
                  </div>
                  <div>
                    <p class="font-medium text-slate-900 dark:text-white"><?php echo $level['name']; ?></p>
                    <p class="text-sm text-slate-500 dark:text-slate-400"><?php echo number_format(5234 * $level['percentage'] / 100); ?> orang</p>
                  </div>
                </div>
                <span class="text-2xl font-bold text-<?php echo $level['color']; ?>-600 dark:text-<?php echo $level['color']; ?>-400"><?php echo $level['percentage']; ?>%</span>
              </div>
              <div class="w-full bg-slate-200 dark:bg-slate-700 rounded-full h-2">
                <div class="bg-gradient-to-r from-<?php echo $level['color']; ?>-400 to-<?php echo $level['color']; ?>-600 h-2 rounded-full" style="width: <?php echo $level['percentage']; ?>%"></div>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
        </div>

        <!-- Fasilitas Pendidikan -->
        <div class="bg-white dark:bg-slate-800 rounded-2xl shadow-xl p-8 border border-slate-100 dark:border-slate-700">
          <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-8 flex items-center gap-3">
            <i class="fas fa-school text-blue-500"></i>
            Fasilitas Pendidikan
          </h2>
          
          <div class="space-y-4">
                        <?php 
            $educationFacilities = [
              ['name' => 'SD Negeri', 'count' => 3, 'students' => 845, 'color' => 'blue', 'icon' => 'school'],
              ['name' => 'SMP Negeri', 'count' => 1, 'students' => 312, 'color' => 'emerald', 'icon' => 'graduation-cap'],
              ['name' => 'PAUD / TK', 'count' => 5, 'students' => 187, 'color' => 'purple', 'icon' => 'book-reader'],
              ['name' => 'TPA / MDA', 'count' => 4, 'students' => 256, 'color' => 'amber', 'icon' => 'mosque']
            ];
            
            foreach($educationFacilities as $facility): 
            ?>
            <div class="group p-4 rounded-xl bg-gradient-to-r from-<?php echo $facility['color']; ?>-50 to-<?php echo $facility['color']; ?>-50/50 dark:from-<?php echo $facility['color']; ?>-900/10 dark:to-<?php echo $facility['color']; ?>-900/5 border border-<?php echo $facility['color']; ?>-100 dark:border-<?php echo $facility['color']; ?>-800 hover:border-<?php echo $facility['color']; ?>-300 dark:hover:border-<?php echo $facility['color']; ?>-600 transition-all duration-300 cursor-pointer">
              <div class="flex items-center justify-between">
                <div class="flex items-center gap-4">
                  <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-<?php echo $facility['color']; ?>-500 to-<?php echo $facility['color']; ?>-600 flex items-center justify-center shadow-lg shadow-<?php echo $facility['color']; ?>-500/30">
                    <i class="fas fa-<?php echo $facility['icon']; ?> text-white"></i>
                  </div>
                  <div>
                    <p class="font-bold text-slate-900 dark:text-white"><?php echo $facility['name']; ?></p>
                    <p class="text-sm text-slate-600 dark:text-slate-300"><?php echo $facility['students']; ?> siswa</p>
                  </div>
                </div>
                <div class="text-right">
                  <p class="text-2xl font-bold text-slate-900 dark:text-white"><?php echo $facility['count']; ?></p>
                  <p class="text-xs text-slate-500 dark:text-slate-400">unit</p>
                </div>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>

      <!-- Tingkat Melek Huruf -->
      <div class="bg-white dark:bg-slate-800 rounded-2xl shadow-xl p-8 mb-12 border border-slate-100 dark:border-slate-700">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-8 flex items-center gap-3">
          <i class="fas fa-book-open text-blue-500"></i>
          Tingkat Melek Huruf
        </h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
          <div class="text-center">
            <div class="relative inline-flex mb-4">
              <div class="w-32 h-32 rounded-full border-8 border-blue-100 dark:border-blue-900 flex items-center justify-center">
                <div class="w-full h-full rounded-full flex items-center justify-center" style="background: conic-gradient(#3b82f6 0% 94%, #e2e8f0 94% 100%);">
                  <div class="w-24 h-24 rounded-full bg-white dark:bg-slate-800 flex items-center justify-center">
                    <span class="text-3xl font-bold text-blue-600 dark:text-blue-400">94%</span>
                  </div>
                </div>
              </div>
              <div class="absolute top-0 right-0 w-8 h-8 bg-blue-500 rounded-full flex items-center justify-center">
                <i class="fas fa-male text-white text-xs"></i>
              </div>
            </div>
            <p class="font-bold text-slate-900 dark:text-white">Laki-laki</p>
            <p class="text-sm text-slate-600 dark:text-slate-400">Tingkat melek huruf</p>
          </div>
          
          <div class="text-center">
            <div class="relative inline-flex mb-4">
              <div class="w-32 h-32 rounded-full border-8 border-pink-100 dark:border-pink-900 flex items-center justify-center">
                <div class="w-full h-full rounded-full flex items-center justify-center" style="background: conic-gradient(#ec4899 0% 96%, #e2e8f0 96% 100%);">
                  <div class="w-24 h-24 rounded-full bg-white dark:bg-slate-800 flex items-center justify-center">
                    <span class="text-3xl font-bold text-pink-600 dark:text-pink-400">96%</span>
                  </div>
                </div>
              </div>
              <div class="absolute top-0 right-0 w-8 h-8 bg-pink-500 rounded-full flex items-center justify-center">
                <i class="fas fa-female text-white text-xs"></i>
              </div>
            </div>
            <p class="font-bold text-slate-900 dark:text-white">Perempuan</p>
            <p class="text-sm text-slate-600 dark:text-slate-400">Tingkat melek huruf</p>
          </div>
          
          <div class="flex flex-col justify-center">
            <div class="p-4 rounded-xl bg-gradient-to-r from-emerald-50 to-teal-50 dark:from-emerald-900/10 dark:to-teal-900/10 border border-emerald-200 dark:border-emerald-800">
              <div class="flex items-center gap-3 mb-2">
                <div class="w-10 h-10 rounded-lg bg-emerald-100 dark:bg-emerald-900/30 flex items-center justify-center">
                  <i class="fas fa-chart-line text-emerald-600 dark:text-emerald-400"></i>
                </div>
                <div>
                  <p class="font-bold text-slate-900 dark:text-white">+5%</p>
                  <p class="text-sm text-slate-600 dark:text-slate-400">Peningkatan sejak 2019</p>
                </div>
              </div>
            </div>
            <p class="text-sm text-slate-600 dark:text-slate-400 mt-4 text-center">
              Rata-rata melek huruf: <span class="font-bold text-slate-900 dark:text-white">95%</span>
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- Tab Content: Kesehatan -->
    <div id="contentKesehatan" class="tab-content-statistik hidden animate-slide-up">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-12">
        <!-- Fasilitas Kesehatan -->
        <div class="bg-white dark:bg-slate-800 rounded-2xl shadow-xl p-8 border border-slate-100 dark:border-slate-700">
          <div class="flex items-center justify-between mb-8">
            <h2 class="text-2xl font-bold text-slate-900 dark:text-white flex items-center gap-3">
              <i class="fas fa-hospital text-rose-500"></i>
              Fasilitas Kesehatan
            </h2>
            <span class="px-3 py-1 bg-rose-100 dark:bg-rose-900/30 text-rose-700 dark:text-rose-300 rounded-full text-sm font-medium">
              12 Fasilitas
            </span>
          </div>
          
          <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <?php 
            $healthFacilities = [
              [
                'name' => 'Puskesmas Pembantu',
                'count' => '1 unit',
                'staff' => '2 dokter, 4 perawat',
                'color' => 'emerald',
                'icon' => 'clinic-medical'
              ],
              [
                'name' => 'Posyandu',
                'count' => '8 unit',
                'staff' => '16 kader aktif',
                'color' => 'blue',
                'icon' => 'baby'
              ],
              [
                'name' => 'Bidan Desa',
                'count' => '3 bidan',
                'staff' => 'Terlatih & bersertifikat',
                'color' => 'purple',
                'icon' => 'user-nurse'
              ],
              [
                'name' => 'Apotek Desa',
                'count' => '2 apotek',
                'staff' => '1 asisten apoteker',
                'color' => 'amber',
                'icon' => 'pills'
              ]
            ];
            
            foreach($healthFacilities as $facility): 
            ?>
            <div class="group p-4 rounded-xl bg-gradient-to-r from-white to-<?php echo $facility['color']; ?>-50/30 dark:from-slate-800 dark:to-<?php echo $facility['color']; ?>-900/5 border border-<?php echo $facility['color']; ?>-100 dark:border-<?php echo $facility['color']; ?>-800 hover:border-<?php echo $facility['color']; ?>-300 dark:hover:border-<?php echo $facility['color']; ?>-600 transition-all duration-300 cursor-pointer">
              <div class="flex items-start gap-4">
                <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-<?php echo $facility['color']; ?>-500 to-<?php echo $facility['color']; ?>-600 flex items-center justify-center shadow-lg shadow-<?php echo $facility['color']; ?>-500/30 flex-shrink-0">
                  <i class="fas fa-<?php echo $facility['icon']; ?> text-white"></i>
                </div>
                <div class="flex-1">
                  <h3 class="font-bold text-slate-900 dark:text-white mb-1"><?php echo $facility['name']; ?></h3>
                  <p class="text-sm font-medium text-<?php echo $facility['color']; ?>-600 dark:text-<?php echo $facility['color']; ?>-400 mb-2"><?php echo $facility['count']; ?></p>
                  <p class="text-xs text-slate-600 dark:text-slate-400"><?php echo $facility['staff']; ?></p>
                </div>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
          
          <!-- Coverage Info -->
          <div class="mt-8 p-4 rounded-xl bg-gradient-to-r from-blue-50 to-indigo-50 dark:from-blue-900/10 dark:to-indigo-900/10 border border-blue-200 dark:border-blue-800">
            <div class="flex items-center justify-between">
              <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-lg bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center">
                  <i class="fas fa-ambulance text-blue-600 dark:text-blue-400"></i>
                </div>
                <div>
                  <p class="font-medium text-slate-900 dark:text-white">Jangkauan Layanan</p>
                  <p class="text-sm text-slate-600 dark:text-slate-400">100% wilayah desa terjangkau</p>
                </div>
              </div>
              <span class="text-lg font-bold text-blue-600 dark:text-blue-400">≤ 15 menit</span>
            </div>
          </div>
        </div>

        <!-- Indikator Kesehatan -->
        <div class="bg-white dark:bg-slate-800 rounded-2xl shadow-xl p-8 border border-slate-100 dark:border-slate-700">
          <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-8 flex items-center gap-3">
            <i class="fas fa-heartbeat text-rose-500"></i>
            Indikator Kesehatan
          </h2>
          
          <div class="grid grid-cols-2 gap-6">
            <?php 
            $healthIndicators = [
              [
                'title' => 'Cakupan Imunisasi',
                'value' => '98%',
                'change' => '+3%',
                'color' => 'emerald',
                'icon' => 'syringe',
                'trend' => 'up'
              ],
              [
                'title' => 'Angka Fertilitas',
                'value' => '2.1',
                'change' => '-0.2',
                'color' => 'blue',
                'icon' => 'baby',
                'trend' => 'down'
              ],
              [
                'title' => 'Harapan Hidup',
                'value' => '72 Tahun',
                'change' => '+2',
                'color' => 'purple',
                'icon' => 'user-clock',
                'trend' => 'up'
              ],
              [
                'title' => 'Kematian Bayi',
                'value' => '15/1000',
                'change' => '-3',
                'color' => 'rose',
                'icon' => 'baby-carriage',
                'trend' => 'down'
              ]
            ];
            
            foreach($healthIndicators as $indicator): 
            ?>
            <div class="group p-4 rounded-xl bg-gradient-to-br from-white to-slate-50 dark:from-slate-800 dark:to-slate-900 border border-slate-200 dark:border-slate-700 hover:border-<?php echo $indicator['color']; ?>-300 dark:hover:border-<?php echo $indicator['color']; ?>-600 hover:shadow-lg transition-all duration-300 cursor-pointer">
              <div class="flex items-center justify-between mb-3">
                <div class="w-10 h-10 rounded-lg bg-<?php echo $indicator['color']; ?>-100 dark:bg-<?php echo $indicator['color']; ?>-900/30 flex items-center justify-center">
                  <i class="fas fa-<?php echo $indicator['icon']; ?> text-<?php echo $indicator['color']; ?>-600 dark:text-<?php echo $indicator['color']; ?>-400"></i>
                </div>
                <span class="px-2 py-1 bg-<?php echo $indicator['color']; ?>-100 dark:bg-<?php echo $indicator['color']; ?>-900/30 text-<?php echo $indicator['color']; ?>-600 dark:text-<?php echo $indicator['color']; ?>-300 rounded text-xs font-medium">
                  <?php echo $indicator['change']; ?>
                </span>
              </div>
              <p class="text-2xl font-bold text-slate-900 dark:text-white mb-1"><?php echo $indicator['value']; ?></p>
              <p class="text-sm text-slate-600 dark:text-slate-400"><?php echo $indicator['title']; ?></p>
              <div class="mt-2 flex items-center gap-1">
                <?php if($indicator['trend'] == 'up'): ?>
                <i class="fas fa-arrow-up text-emerald-500 text-xs"></i>
                <span class="text-xs text-emerald-600 dark:text-emerald-400">Meningkat</span>
                <?php else: ?>
                <i class="fas fa-arrow-down text-rose-500 text-xs"></i>
                <span class="text-xs text-rose-600 dark:text-rose-400">Menurun</span>
                <?php endif; ?>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
          
          <!-- Program Kesehatan -->
          <div class="mt-8 p-4 rounded-xl bg-gradient-to-r from-rose-50 to-pink-50 dark:from-rose-900/10 dark:to-pink-900/10 border border-rose-200 dark:border-rose-800">
            <div class="flex items-center gap-3">
              <div class="w-10 h-10 rounded-lg bg-rose-100 dark:bg-rose-900/30 flex items-center justify-center">
                <i class="fas fa-heart text-rose-600 dark:text-rose-400"></i>
              </div>
              <div>
                <p class="font-medium text-slate-900 dark:text-white">Program Desa Sehat</p>
                <p class="text-sm text-slate-600 dark:text-slate-400">Aktif di semua dusun sejak 2022</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Status Gizi & Penyakit -->
      <div class="bg-white dark:bg-slate-800 rounded-2xl shadow-xl p-8 border border-slate-100 dark:border-slate-700">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-8 flex items-center gap-3">
          <i class="fas fa-apple-alt text-emerald-500"></i>
          Status Gizi & Penyakit Dominan
        </h2>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
          <!-- Status Gizi -->
          <div>
            <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-4">Status Gizi Balita</h3>
            <div class="space-y-4">
              <?php 
              $nutritionStatus = [
                ['category' => 'Gizi Baik', 'percentage' => 78, 'color' => 'emerald', 'count' => 245],
                ['category' => 'Gizi Kurang', 'percentage' => 15, 'color' => 'amber', 'count' => 47],
                ['category' => 'Gizi Buruk', 'percentage' => 4, 'color' => 'rose', 'count' => 13],
                ['category' => 'Obesitas', 'percentage' => 3, 'color' => 'purple', 'count' => 9]
              ];
              
              foreach($nutritionStatus as $status): 
              ?>
              <div>
                <div class="flex justify-between mb-1">
                  <span class="text-sm text-slate-700 dark:text-slate-300"><?php echo $status['category']; ?></span>
                  <div class="flex items-center gap-2">
                    <span class="text-sm font-bold text-slate-900 dark:text-white"><?php echo $status['percentage']; ?>%</span>
                    <span class="text-xs text-slate-500 dark:text-slate-400">(<?php echo $status['count']; ?>)</span>
                  </div>
                </div>
                <div class="w-full bg-slate-200 dark:bg-slate-700 rounded-full h-2">
                  <div class="bg-gradient-to-r from-<?php echo $status['color']; ?>-400 to-<?php echo $status['color']; ?>-600 h-2 rounded-full" style="width: <?php echo $status['percentage']; ?>%"></div>
                </div>
              </div>
              <?php endforeach; ?>
            </div>
          </div>
          
          <!-- Penyakit Dominan -->
          <div class="md:col-span-2">
            <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-4">10 Penyakit Terbanyak (2023)</h3>
            <div class="space-y-3">
              <?php 
              $commonDiseases = [
                ['name' => 'ISPA', 'count' => 423, 'percentage' => 32, 'color' => 'blue'],
                ['name' => 'Hipertensi', 'count' => 287, 'percentage' => 22, 'color' => 'purple'],
                ['name' => 'Diabetes', 'count' => 156, 'percentage' => 12, 'color' => 'rose'],
                ['name' => 'Diare', 'count' => 134, 'percentage' => 10, 'color' => 'emerald'],
                ['name' => 'Rematik', 'count' => 98, 'percentage' => 7, 'color' => 'amber']
              ];
              
              foreach($commonDiseases as $disease): 
              ?>
              <div class="flex items-center gap-4 p-3 rounded-lg bg-slate-50 dark:bg-slate-800/50 border border-slate-200 dark:border-slate-700">
                <div class="w-10 h-10 rounded-lg bg-<?php echo $disease['color']; ?>-100 dark:bg-<?php echo $disease['color']; ?>-900/30 flex items-center justify-center flex-shrink-0">
                  <i class="fas fa-stethoscope text-<?php echo $disease['color']; ?>-600 dark:text-<?php echo $disease['color']; ?>-400"></i>
                </div>
                <div class="flex-1">
                  <div class="flex justify-between mb-1">
                    <span class="font-medium text-slate-900 dark:text-white"><?php echo $disease['name']; ?></span>
                    <span class="font-bold text-slate-900 dark:text-white"><?php echo $disease['count']; ?> kasus</span>
                  </div>
                  <div class="w-full bg-slate-200 dark:bg-slate-700 rounded-full h-2">
                    <div class="bg-gradient-to-r from-<?php echo $disease['color']; ?>-400 to-<?php echo $disease['color']; ?>-600 h-2 rounded-full" style="width: <?php echo $disease['percentage']; ?>%"></div>
                  </div>
                </div>
              </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Quick Links & Export -->
    <div class="mt-16">
      <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Download Data -->
        <div class="bg-gradient-to-br from-white to-blue-50 dark:from-slate-800 dark:to-blue-900/10 rounded-2xl shadow-xl p-8 border border-blue-200 dark:border-blue-800">
          <h2 class="text-xl font-bold text-slate-900 dark:text-white mb-6">Ekspor Data Statistik</h2>
          <div class="space-y-4">
            <button class="w-full p-4 rounded-xl border border-blue-200 dark:border-blue-800 hover:border-blue-300 dark:hover:border-blue-600 hover:bg-blue-50 dark:hover:bg-blue-900/10 transition-all duration-300 flex items-center justify-between group">
              <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-lg bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center">
                  <i class="fas fa-file-excel text-blue-600 dark:text-blue-400"></i>
                </div>
                <div>
                  <p class="font-medium text-slate-900 dark:text-white">Data Excel</p>
                  <p class="text-sm text-slate-600 dark:text-slate-400">Format .xlsx</p>
                </div>
              </div>
              <i class="fas fa-download text-blue-600 dark:text-blue-400 group-hover:translate-y-0.5 transition-transform duration-300"></i>
            </button>
            
            <button class="w-full p-4 rounded-xl border border-emerald-200 dark:border-emerald-800 hover:border-emerald-300 dark:hover:border-emerald-600 hover:bg-emerald-50 dark:hover:bg-emerald-900/10 transition-all duration-300 flex items-center justify-between group">
              <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-lg bg-emerald-100 dark:bg-emerald-900/30 flex items-center justify-center">
                  <i class="fas fa-chart-bar text-emerald-600 dark:text-emerald-400"></i>
                </div>
                <div>
                  <p class="font-medium text-slate-900 dark:text-white">Infografis</p>
                  <p class="text-sm text-slate-600 dark:text-slate-400">Format .pdf</p>
                </div>
              </div>
              <i class="fas fa-download text-emerald-600 dark:text-emerald-400 group-hover:translate-y-0.5 transition-transform duration-300"></i>
            </button>
          </div>
        </div>
        
        <!-- Update Info -->
        <div class="lg:col-span-2 bg-gradient-to-r from-blue-500 to-indigo-600 rounded-2xl shadow-xl p-8 text-white relative overflow-hidden">
          <!-- Background Pattern -->
          <div class="absolute top-0 right-0 w-48 h-48 opacity-10">
            <i class="fas fa-chart-pie text-9xl"></i>
          </div>
          
          <div class="relative">
            <div class="flex flex-col md:flex-row md:items-center justify-between gap-6">
              <div>
                <h2 class="text-2xl font-bold mb-2">Data Statistik Terkini</h2>
                <p class="opacity-90 mb-4">Update real-time dari sistem data desa terintegrasi</p>
                <div class="flex items-center gap-4">
                  <div class="flex items-center gap-2">
                    <span class="w-2 h-2 bg-emerald-400 rounded-full animate-pulse"></span>
                    <span class="text-sm opacity-90">Terakhir diperbarui</span>
                  </div>
                  <span class="font-bold">15 April 2024</span>
                </div>
              </div>
              <div class="flex flex-col gap-3">
                <button class="px-6 py-3 bg-white text-blue-600 hover:bg-blue-50 font-semibold rounded-xl transition-all duration-300 flex items-center justify-center gap-2 shadow-lg hover:shadow-xl">
                  <i class="fas fa-history"></i>
                  Riwayat Update
                </button>
                <button class="px-6 py-3 bg-white/20 backdrop-blur-sm hover:bg-white/30 font-semibold rounded-xl transition-all duration-300 flex items-center justify-center gap-2">
                  <i class="fas fa-bell"></i>
                  Notifikasi Update
                </button>
              </div>
            </div>
            
            <!-- Stats Bar -->
            <div class="mt-8 pt-6 border-t border-white/20">
              <div class="grid grid-cols-3 gap-4">
                <div class="text-center">
                  <p class="text-2xl font-bold">4</p>
                  <p class="text-sm opacity-90">Sektor Data</p>
                </div>
                <div class="text-center">
                  <p class="text-2xl font-bold">24/7</p>
                  <p class="text-sm opacity-90">Monitoring</p>
                </div>
                <div class="text-center">
                  <p class="text-2xl font-bold">100%</p>
                  <p class="text-sm opacity-90">Akurasi Data</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>

<script>
  // Fungsi untuk mengatur tab statistik
  function showTab(tabName) {
    // Sembunyikan semua konten tab
    document.querySelectorAll('.tab-content-statistik').forEach(tab => {
      tab.classList.add('hidden');
    });
    
    // Hapus kelas aktif dari semua tab
    document.querySelectorAll('.tab-statistik').forEach(tab => {
      tab.classList.remove('active', 'bg-gradient-to-r', 'from-blue-500', 'to-indigo-500', 'text-white', 'shadow-lg', 'shadow-blue-500/30');
      tab.classList.remove('border-blue-500', 'border-b-2');
      tab.classList.add('bg-white', 'dark:bg-slate-800', 'border', 'border-slate-200', 'dark:border-slate-700', 'text-slate-700', 'dark:text-slate-300');
    });
    
    // Tampilkan konten tab yang dipilih
    const contentTab = document.getElementById('content' + tabName.charAt(0).toUpperCase() + tabName.slice(1));
    contentTab.classList.remove('hidden');
    
    // Tambahkan efek slide-up
    contentTab.classList.add('animate-slide-up');
    
    // Aktifkan tab yang dipilih
    const activeTab = document.getElementById('tab' + tabName.charAt(0).toUpperCase() + tabName.slice(1));
    activeTab.classList.remove('bg-white', 'dark:bg-slate-800', 'border', 'border-slate-200', 'dark:border-slate-700', 'text-slate-700', 'dark:text-slate-300');
    activeTab.classList.add('active', 'bg-gradient-to-r', 'from-blue-500', 'to-indigo-500', 'text-white', 'shadow-lg', 'shadow-blue-500/30', 'border-blue-500', 'border-b-2');
    
    // Tambahkan animasi hover state untuk tab yang tidak aktif
    document.querySelectorAll('.tab-statistik:not(.active)').forEach(tab => {
      tab.addEventListener('mouseenter', () => {
        if(!tab.classList.contains('active')) {
          tab.classList.add('hover:-translate-y-0.5', 'hover:shadow-lg');
        }
      });
      tab.addEventListener('mouseleave', () => {
        if(!tab.classList.contains('active')) {
          tab.classList.remove('hover:-translate-y-0.5', 'hover:shadow-lg');
        }
      });
    });
  }
  
  // Tambahkan animasi untuk chart bars pada hover
  document.addEventListener('DOMContentLoaded', function() {
    const progressBars = document.querySelectorAll('.bg-gradient-to-r');
    progressBars.forEach(bar => {
      bar.addEventListener('mouseenter', function() {
        const originalWidth = this.style.width;
        this.style.transition = 'width 0.3s ease-out';
        this.style.width = '100%';
        
        setTimeout(() => {
          this.style.width = originalWidth;
        }, 300);
      });
    });
  });
</script>

<style>
  @keyframes fade-in {
    from { opacity: 0; transform: translateY(10px); }
    to { opacity: 1; transform: translateY(0); }
  }
  
  @keyframes slide-up {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
  }
  
  @keyframes pulse-slow {
    0%, 100% { transform: scale(1); }
    50% { transform: scale(1.05); }
  }
  
  @keyframes ping {
    75%, 100% { transform: scale(2); opacity: 0; }
  }
  
  @keyframes progress {
    from { width: 0; }
    to { width: 100%; }
  }
  
  .animate-fade-in {
    animation: fade-in 0.6s ease-out;
  }
  
  .animate-slide-up {
    animation: slide-up 0.4s ease-out;
  }
  
  .animate-pulse-slow {
    animation: pulse-slow 2s infinite;
  }
  
  .animate-ping {
    animation: ping 1s cubic-bezier(0, 0, 0.2, 1) infinite;
  }
  
  .animate-progress {
    animation: progress 1s ease-out;
  }
  
  /* Custom scrollbar */
  ::-webkit-scrollbar {
    width: 8px;
  }
  
  ::-webkit-scrollbar-track {
    background: #f1f5f9;
  }
  
  ::-webkit-scrollbar-thumb {
    background: #cbd5e1;
    border-radius: 4px;
  }
  
  ::-webkit-scrollbar-thumb:hover {
    background: #94a3b8;
  }
  
  .dark ::-webkit-scrollbar-track {
    background: #1e293b;
  }
  
  .dark ::-webkit-scrollbar-thumb {
    background: #475569;
  }
  
  .dark ::-webkit-scrollbar-thumb:hover {
    background: #64748b;
  }
</style>
<?php endif; ?>
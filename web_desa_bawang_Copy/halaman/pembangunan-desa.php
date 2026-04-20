<?php if ($halaman == 'pembangunan-desa'): ?>
<div class="min-h-screen bg-gradient-to-br from-slate-50 via-white to-amber-50/30 dark:from-slate-900 dark:via-slate-800 dark:to-amber-900/10 py-8">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    
    <!-- Header dengan CTA -->
    <div class="mb-12 animate-fade-in">
      <div class="flex flex-col md:flex-row md:items-center justify-between gap-8 mb-8">
        <div class="flex items-center gap-4">
          <div class="relative">
            <div class="w-16 h-16 rounded-2xl bg-gradient-to-r from-amber-500 via-orange-500 to-red-500 flex items-center justify-center shadow-xl shadow-amber-500/20 animate-pulse-slow">
              <i class="fas fa-hard-hat text-white text-2xl"></i>
            </div>
            <div class="absolute -top-2 -right-2 w-8 h-8 bg-emerald-400 rounded-full border-4 border-white dark:border-slate-800 flex items-center justify-center">
              <i class="fas fa-chart-line text-white text-xs"></i>
            </div>
          </div>
          <div>
            <h1 class="text-4xl md:text-5xl font-bold text-slate-900 dark:text-white bg-gradient-to-r from-amber-600 to-orange-600 bg-clip-text text-transparent">Pembangunan Desa</h1>
            <p class="text-slate-600 dark:text-slate-300 mt-3 max-w-2xl">
              Pantau perkembangan infrastruktur dan program pembangunan Desa Bawang dari tahun ke tahun.
            </p>
          </div>
        </div>
        <div class="flex flex-col sm:flex-row gap-3">
          <button onclick="lihatPeta()" class="px-6 py-3 bg-gradient-to-r from-amber-500 to-orange-600 text-white font-semibold rounded-xl shadow-lg shadow-amber-500/30 hover:shadow-xl hover:shadow-amber-500/40 transition-all duration-300 transform hover:-translate-y-0.5 flex items-center justify-center gap-2">
            <i class="fas fa-map-marked-alt"></i> Lihat Peta Proyek
          </button>
          <button onclick="downloadLaporan()" class="px-6 py-3 bg-white dark:bg-slate-800 border-2 border-amber-200 dark:border-amber-800 text-amber-600 dark:text-amber-400 font-semibold rounded-xl hover:bg-amber-50 dark:hover:bg-amber-900/20 transition-all duration-300 flex items-center justify-center gap-2">
            <i class="fas fa-download"></i> Download Laporan
          </button>
        </div>
      </div>
      
      <!-- Quick Stats -->
      <div class="flex flex-wrap items-center gap-6 text-sm text-slate-600 dark:text-slate-400">
        <div class="flex items-center gap-2">
          <span class="w-2 h-2 bg-emerald-500 rounded-full animate-pulse"></span>
          <span>Tahun Anggaran: 2024</span>
        </div>
        <div class="flex items-center gap-2">
          <i class="fas fa-calendar-alt text-xs"></i>
          <span>Periode: Januari - Desember 2024</span>
        </div>
        <div class="flex items-center gap-2">
          <i class="fas fa-money-bill-wave text-xs"></i>
          <span>Anggaran: Rp 2.5 Miliar</span>
        </div>
      </div>
    </div>

    <!-- Dashboard Statistik -->
    <div class="mb-12">
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Total Proyek -->
        <div class="group bg-gradient-to-br from-white to-slate-50 dark:from-slate-800 dark:to-slate-900 rounded-2xl shadow-xl p-6 border border-slate-200 dark:border-slate-700 hover:border-amber-300 dark:hover:border-amber-600 hover:shadow-2xl transition-all duration-500 cursor-pointer relative overflow-hidden">
          <div class="absolute top-0 right-0 w-24 h-24 opacity-5">
            <i class="fas fa-project-diagram text-5xl"></i>
          </div>
          
          <div class="relative">
            <div class="flex items-center justify-between mb-4">
              <div>
                <p class="text-sm font-medium text-slate-500 dark:text-slate-400 uppercase tracking-wider">Total Proyek</p>
                <p class="text-4xl font-bold text-slate-900 dark:text-white mt-2">24</p>
              </div>
              <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-amber-500 to-orange-500 flex items-center justify-center shadow-lg shadow-amber-500/30 group-hover:scale-110 transition-transform duration-500">
                <i class="fas fa-hard-hat text-white text-xl"></i>
              </div>
            </div>
            <div class="flex items-center gap-2">
              <span class="px-2 py-1 bg-amber-100 dark:bg-amber-900/30 text-amber-600 dark:text-amber-300 rounded text-xs font-medium">
                <i class="fas fa-arrow-up mr-1"></i> 8%
              </span>
              <span class="text-sm text-slate-500 dark:text-slate-400">dari tahun lalu</span>
            </div>
          </div>
        </div>
        
        <!-- Proyek Berjalan -->
        <div class="group bg-gradient-to-br from-white to-slate-50 dark:from-slate-800 dark:to-slate-900 rounded-2xl shadow-xl p-6 border border-slate-200 dark:border-slate-700 hover:border-blue-300 dark:hover:border-blue-600 hover:shadow-2xl transition-all duration-500 cursor-pointer">
          <div class="flex items-center justify-between mb-4">
            <div>
              <p class="text-sm font-medium text-slate-500 dark:text-slate-400 uppercase tracking-wider">Sedang Berjalan</p>
              <p class="text-4xl font-bold text-slate-900 dark:text-white mt-2">7</p>
            </div>
            <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-blue-500 to-indigo-500 flex items-center justify-center shadow-lg shadow-blue-500/30 group-hover:scale-110 transition-transform duration-500">
              <i class="fas fa-tools text-white text-xl"></i>
            </div>
          </div>
          <div class="w-full bg-slate-200 dark:bg-slate-700 rounded-full h-2">
            <div class="bg-gradient-to-r from-blue-400 to-indigo-500 h-2 rounded-full" style="width: 29%"></div>
          </div>
          <p class="text-xs text-slate-500 dark:text-slate-400 mt-2">29% dari total proyek</p>
        </div>
        
        <!-- Proyek Selesai -->
        <div class="group bg-gradient-to-br from-white to-slate-50 dark:from-slate-800 dark:to-slate-900 rounded-2xl shadow-xl p-6 border border-slate-200 dark:border-slate-700 hover:border-emerald-300 dark:hover:border-emerald-600 hover:shadow-2xl transition-all duration-500 cursor-pointer">
          <div class="flex items-center justify-between mb-4">
            <div>
              <p class="text-sm font-medium text-slate-500 dark:text-slate-400 uppercase tracking-wider">Telah Selesai</p>
              <p class="text-4xl font-bold text-slate-900 dark:text-white mt-2">15</p>
            </div>
            <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-emerald-500 to-teal-500 flex items-center justify-center shadow-lg shadow-emerald-500/30 group-hover:scale-110 transition-transform duration-500">
              <i class="fas fa-check-circle text-white text-xl"></i>
            </div>
          </div>
          <div class="w-full bg-slate-200 dark:bg-slate-700 rounded-full h-2">
            <div class="bg-gradient-to-r from-emerald-400 to-teal-500 h-2 rounded-full" style="width: 63%"></div>
          </div>
          <p class="text-xs text-slate-500 dark:text-slate-400 mt-2">63% dari total proyek</p>
        </div>
        
        <!-- Anggaran Terserap -->
        <div class="group bg-gradient-to-br from-white to-slate-50 dark:from-slate-800 dark:to-slate-900 rounded-2xl shadow-xl p-6 border border-slate-200 dark:border-slate-700 hover:border-purple-300 dark:hover:border-purple-600 hover:shadow-2xl transition-all duration-500 cursor-pointer">
          <div class="flex items-center justify-between mb-4">
            <div>
              <p class="text-sm font-medium text-slate-500 dark:text-slate-400 uppercase tracking-wider">Anggaran Terserap</p>
              <p class="text-4xl font-bold text-slate-900 dark:text-white mt-2">72%</p>
            </div>
            <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-purple-500 to-violet-500 flex items-center justify-center shadow-lg shadow-purple-500/30 group-hover:scale-110 transition-transform duration-500">
              <i class="fas fa-money-bill-wave text-white text-xl"></i>
            </div>
          </div>
          <div class="w-full bg-slate-200 dark:bg-slate-700 rounded-full h-2">
            <div class="bg-gradient-to-r from-purple-400 to-violet-500 h-2 rounded-full" style="width: 72%"></div>
          </div>
          <p class="text-xs text-slate-500 dark:text-slate-400 mt-2">Rp 1.8 M dari Rp 2.5 M</p>
        </div>
      </div>
    </div>

    <!-- Rencana Pembangunan -->
    <div class="mb-16">
      <div class="flex flex-col md:flex-row md:items-center justify-between mb-8">
        <h2 class="text-3xl font-bold text-slate-900 dark:text-white flex items-center gap-3">
          <i class="fas fa-map text-blue-500"></i>
          Rencana Pembangunan Desa 2024-2026
        </h2>
        <div class="flex items-center gap-2 mt-2 md:mt-0">
          <span class="text-slate-600 dark:text-slate-300">Prioritas:</span>
          <span class="font-bold text-amber-600 dark:text-amber-400">Infrastruktur & UMKM</span>
        </div>
      </div>
      
      <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <?php 
        $rencanaPembangunan = [
          [
            'year' => '2024',
            'title' => 'Tahap I: Dasar',
            'color' => 'blue',
            'projects' => [
              'Perbaikan Jalan Desa 5km',
              'Rehabilitasi Saluran Irigasi',
              'Pembangunan Posyandu 3 unit',
              'Pemasangan Penerangan Jalan'
            ],
            'budget' => 'Rp 850 Juta',
            'progress' => 65
          ],
          [
            'year' => '2025',
            'title' => 'Tahap II: Pengembangan',
            'color' => 'emerald',
            'projects' => [
              'Pusat Pelatihan UMKM',
              'Digitalisasi Administrasi Desa',
              'Pengembangan Wisata Desa',
              'Revitalisasi Pasar Desa'
            ],
            'budget' => 'Rp 1.2 Miliar',
            'progress' => 15
          ],
          [
            'year' => '2026',
            'title' => 'Tahap III: Modernisasi',
            'color' => 'purple',
            'projects' => [
              'Smart Village Infrastructure',
              'Eco-Tourism Development',
              'Creative Industry Hub',
              'Digital Farming System'
            ],
            'budget' => 'Rp 1.5 Miliar',
            'progress' => 0
          ]
        ];
        
        foreach($rencanaPembangunan as $rencana): 
        ?>
        <div class="group bg-white dark:bg-slate-800 rounded-2xl shadow-lg p-6 border border-slate-200 dark:border-slate-700 hover:shadow-xl hover:border-<?php echo $rencana['color']; ?>-300 dark:hover:border-<?php echo $rencana['color']; ?>-600 transition-all duration-300 transform hover:-translate-y-1">
          <div class="flex items-center justify-between mb-6">
            <div>
              <span class="text-2xl font-bold text-slate-900 dark:text-white"><?php echo $rencana['year']; ?></span>
              <h3 class="font-bold text-slate-900 dark:text-white mt-1"><?php echo $rencana['title']; ?></h3>
            </div>
            <div class="text-right">
              <span class="px-3 py-1 bg-<?php echo $rencana['color']; ?>-100 dark:bg-<?php echo $rencana['color']; ?>-900/30 text-<?php echo $rencana['color']; ?>-600 dark:text-<?php echo $rencana['color']; ?>-300 rounded-full text-sm font-medium">
                <?php echo $rencana['budget']; ?>
              </span>
            </div>
          </div>
          
          <div class="space-y-3 mb-6">
            <?php foreach($rencana['projects'] as $project): ?>
            <div class="flex items-start gap-2">
              <div class="w-2 h-2 rounded-full bg-<?php echo $rencana['color']; ?>-500 mt-2 flex-shrink-0"></div>
              <span class="text-sm text-slate-700 dark:text-slate-300"><?php echo $project; ?></span>
            </div>
            <?php endforeach; ?>
          </div>
          
          <!-- Progress Bar -->
          <div>
            <div class="flex justify-between mb-2">
              <span class="text-sm text-slate-600 dark:text-slate-400">Progress Implementasi</span>
              <span class="font-bold text-slate-900 dark:text-white"><?php echo $rencana['progress']; ?>%</span>
            </div>
            <div class="w-full bg-slate-200 dark:bg-slate-700 rounded-full h-2">
              <div class="bg-gradient-to-r from-<?php echo $rencana['color']; ?>-400 to-<?php echo $rencana['color']; ?>-600 h-2 rounded-full" style="width: <?php echo $rencana['progress']; ?>%"></div>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- Proyek Berjalan -->
    <div class="mb-16">
      <div class="flex items-center justify-between mb-8">
        <h2 class="text-3xl font-bold text-slate-900 dark:text-white flex items-center gap-3">
          <i class="fas fa-tools text-blue-500"></i>
          Proyek Sedang Berjalan
        </h2>
        <span class="px-4 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-600 dark:text-blue-300 rounded-full text-sm font-medium">
          7 Proyek Aktif
        </span>
      </div>
      
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <?php 
        $proyekBerjalan = [
          [
            'title' => 'Perbaikan Jalan Dusun 4',
            'description' => 'Peningkatan kualitas jalan sepanjang 2.5km dengan aspal hotmix',
            'location' => 'Dusun 4',
            'contractor' => 'PT Jaya Konstruksi',
            'budget' => 'Rp 350 Juta',
            'progress' => 75,
            'start' => '15 Jan 2024',
            'end' => '30 Apr 2024',
            'color' => 'blue',
            'image' => 'https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80'
          ],
          [
            'title' => 'Rehabilitasi Saluran Irigasi',
            'description' => 'Perbaikan saluran irigasi utama sepanjang 3km untuk mengatasi banjir',
            'location' => 'Dusun 2 & 3',
            'contractor' => 'CV Mekar Jaya',
            'budget' => 'Rp 280 Juta',
            'progress' => 45,
            'start' => '1 Feb 2024',
            'end' => '30 Jun 2024',
            'color' => 'emerald',
            'image' => 'https://images.unsplash.com/photo-1586771107445-d3ca888129fc?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80'
          ]
        ];
        
        foreach($proyekBerjalan as $proyek): 
        ?>
        <div class="group bg-white dark:bg-slate-800 rounded-2xl shadow-lg overflow-hidden border border-slate-200 dark:border-slate-700 hover:shadow-xl transition-all duration-300">
          <div class="relative h-48 overflow-hidden">
            <img src="<?php echo $proyek['image']; ?>" 
                 alt="<?php echo $proyek['title']; ?>" 
                 class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
            <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 to-transparent"></div>
            <div class="absolute bottom-4 left-4">
              <span class="px-3 py-1 bg-<?php echo $proyek['color']; ?>-500 text-white rounded-full text-xs font-semibold">
                <?php echo $proyek['location']; ?>
              </span>
            </div>
          </div>
          
          <div class="p-6">
            <div class="flex items-center justify-between mb-4">
              <h3 class="text-xl font-bold text-slate-900 dark:text-white"><?php echo $proyek['title']; ?></h3>
              <span class="px-3 py-1 bg-amber-100 dark:bg-amber-900/30 text-amber-600 dark:text-amber-300 rounded-full text-sm font-medium">
                <?php echo $proyek['progress']; ?>%
              </span>
            </div>
            
            <p class="text-slate-600 dark:text-slate-300 mb-4"><?php echo $proyek['description']; ?></p>
            
            <div class="grid grid-cols-2 gap-4 mb-4">
              <div>
                <p class="text-xs text-slate-500 dark:text-slate-400">Kontraktor</p>
                <p class="font-medium text-slate-900 dark:text-white"><?php echo $proyek['contractor']; ?></p>
              </div>
              <div>
                <p class="text-xs text-slate-500 dark:text-slate-400">Anggaran</p>
                <p class="font-medium text-slate-900 dark:text-white"><?php echo $proyek['budget']; ?></p>
              </div>
            </div>
            
            <!-- Progress Bar -->
            <div class="mb-4">
              <div class="flex justify-between mb-2">
                <span class="text-sm text-slate-600 dark:text-slate-400">Progress Fisik</span>
                <span class="text-sm font-bold text-slate-900 dark:text-white"><?php echo $proyek['progress']; ?>%</span>
              </div>
              <div class="w-full bg-slate-200 dark:bg-slate-700 rounded-full h-2">
                <div class="bg-gradient-to-r from-<?php echo $proyek['color']; ?>-400 to-<?php echo $proyek['color']; ?>-600 h-2 rounded-full" style="width: <?php echo $proyek['progress']; ?>%"></div>
              </div>
            </div>
            
            <div class="flex items-center justify-between text-sm text-slate-600 dark:text-slate-400">
              <div class="flex items-center gap-2">
                <i class="fas fa-calendar-alt"></i>
                <span><?php echo $proyek['start']; ?> - <?php echo $proyek['end']; ?></span>
              </div>
              <button onclick="lihatDetailProyek('<?php echo $proyek['title']; ?>')" class="text-<?php echo $proyek['color']; ?>-600 dark:text-<?php echo $proyek['color']; ?>-400 font-medium hover:underline">
                Lihat Detail
              </button>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- Proyek Selesai -->
    <div class="mb-16">
      <div class="flex items-center justify-between mb-8">
        <h2 class="text-3xl font-bold text-slate-900 dark:text-white flex items-center gap-3">
          <i class="fas fa-check-circle text-emerald-500"></i>
          Proyek Telah Selesai
        </h2>
        <span class="px-4 py-2 bg-emerald-100 dark:bg-emerald-900/30 text-emerald-600 dark:text-emerald-300 rounded-full text-sm font-medium">
          15 Proyek Selesai
        </span>
      </div>
      
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <?php 
        $proyekSelesai = [
          [
            'title' => 'Pembangunan Balai Desa',
            'year' => '2023',
            'budget' => 'Rp 500 Juta',
            'location' => 'Pusat Desa',
            'color' => 'purple',
            'before' => 'https://images.unsplash.com/photo-1586771107445-d3ca888129fc?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80',
            'after' => 'https://images.unsplash.com/photo-1569336415962-a4bd9f69cd83?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'
          ],
          [
            'title' => 'Pembuatan Lapangan Olahraga',
            'year' => '2022',
            'budget' => 'Rp 250 Juta',
            'location' => 'Dusun 1',
            'color' => 'blue',
            'before' => 'https://images.unsplash.com/photo-1518834103328-93d45986dce1?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80',
            'after' => 'https://images.unsplash.com/photo-1535131749006-b7f58c99034b?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'
          ],
          [
            'title' => 'Instalasi Air Bersih',
            'year' => '2021',
            'budget' => 'Rp 420 Juta',
            'location' => 'Semua Dusun',
            'color' => 'emerald',
            'before' => 'https://images.unsplash.com/photo-1558618666-fcd25c85cd64?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80',
            'after' => 'https://images.unsplash.com/photo-1569336415962-a4bd9f69cd83?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80'
          ]
        ];
        
        foreach($proyekSelesai as $proyek): 
        ?>
        <div class="group bg-white dark:bg-slate-800 rounded-2xl shadow-lg p-6 border border-slate-200 dark:border-slate-700 hover:shadow-xl hover:border-<?php echo $proyek['color']; ?>-300 dark:hover:border-<?php echo $proyek['color']; ?>-600 transition-all duration-300 cursor-pointer">
          <div class="flex items-center justify-between mb-4">
            <div>
              <h3 class="font-bold text-slate-900 dark:text-white"><?php echo $proyek['title']; ?></h3>
              <p class="text-sm text-slate-600 dark:text-slate-400"><?php echo $proyek['location']; ?></p>
            </div>
            <span class="px-2 py-1 bg-<?php echo $proyek['color']; ?>-100 dark:bg-<?php echo $proyek['color']; ?>-900/30 text-<?php echo $proyek['color']; ?>-600 dark:text-<?php echo $proyek['color']; ?>-300 rounded text-xs font-medium">
              <?php echo $proyek['year']; ?>
            </span>
          </div>
          
          <!-- Before-After Slider -->
          <div class="relative h-48 rounded-xl overflow-hidden mb-4">
            <div class="absolute inset-0 flex">
              <div class="w-1/2 overflow-hidden">
                <img src="<?php echo $proyek['before']; ?>" 
                     alt="Sebelum" 
                     class="w-full h-full object-cover">
                <div class="absolute bottom-2 left-2 bg-black/70 text-white px-2 py-1 rounded text-xs">
                  Sebelum
                </div>
              </div>
              <div class="w-1/2 overflow-hidden">
                <img src="<?php echo $proyek['after']; ?>" 
                     alt="Sesudah" 
                     class="w-full h-full object-cover">
                <div class="absolute bottom-2 right-2 bg-emerald-600 text-white px-2 py-1 rounded text-xs">
                  Sesudah
                </div>
              </div>
            </div>
          </div>
          
          <div class="flex items-center justify-between">
            <div>
              <p class="text-xs text-slate-500 dark:text-slate-400">Anggaran</p>
              <p class="font-bold text-slate-900 dark:text-white"><?php echo $proyek['budget']; ?></p>
            </div>
            <button onclick="lihatDokumentasi('<?php echo $proyek['title']; ?>')" class="text-<?php echo $proyek['color']; ?>-600 dark:text-<?php echo $proyek['color']; ?>-400 font-medium hover:underline text-sm">
              Lihat Dokumentasi
            </button>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- Peta Lokasi Proyek -->
    <div class="mb-16">
      <div class="bg-white dark:bg-slate-800 rounded-2xl shadow-xl p-8 border border-slate-100 dark:border-slate-700">
        <div class="flex items-center justify-between mb-8">
          <h2 class="text-3xl font-bold text-slate-900 dark:text-white flex items-center gap-3">
            <i class="fas fa-map-marked-alt text-blue-500"></i>
            Peta Lokasi Proyek
          </h2>
          <div class="flex gap-2">
            <button onclick="filterPeta('all')" class="px-4 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-600 dark:text-blue-300 rounded-lg text-sm font-medium">
              Semua
            </button>
            <button onclick="filterPeta('ongoing')" class="px-4 py-2 bg-amber-100 dark:bg-amber-900/30 text-amber-600 dark:text-amber-300 rounded-lg text-sm font-medium">
              Berjalan
            </button>
            <button onclick="filterPeta('completed')" class="px-4 py-2 bg-emerald-100 dark:bg-emerald-900/30 text-emerald-600 dark:text-emerald-300 rounded-lg text-sm font-medium">
              Selesai
            </button>
          </div>
        </div>
        
        <!-- Peta Interaktif -->
        <div class="relative h-[400px] rounded-xl overflow-hidden border border-slate-200 dark:border-slate-700">
          <!-- Background Peta -->
          <div class="absolute inset-0 bg-gradient-to-br from-blue-50 to-emerald-50 dark:from-blue-900/20 dark:to-emerald-900/20 flex items-center justify-center">
            <div class="text-center">
              <i class="fas fa-map text-6xl text-slate-300 dark:text-slate-600 mb-4"></i>
              <p class="text-slate-600 dark:text-slate-400">Peta Interaktif Lokasi Proyek</p>
              <p class="text-sm text-slate-500 dark:text-slate-500">Klik marker untuk detail proyek</p>
            </div>
          </div>
          
          <!-- Marker Proyek -->
          <?php 
          $locations = [
            ['title' => 'Jalan Dusun 4', 'type' => 'ongoing', 'x' => '20%', 'y' => '60%', 'color' => 'amber'],
            ['title' => 'Saluran Irigasi', 'type' => 'ongoing', 'x' => '45%', 'y' => '40%', 'color' => 'amber'],
            ['title' => 'Balai Desa', 'type' => 'completed', 'x' => '50%', 'y' => '50%', 'color' => 'emerald'],
            ['title' => 'Lapangan Olahraga', 'type' => 'completed', 'x' => '30%', 'y' => '70%', 'color' => 'emerald'],
            ['title' => 'Air Bersih', 'type' => 'completed', 'x' => '60%', 'y' => '30%', 'color' => 'emerald'],
            ['title' => 'Posyandu', 'type' => 'planned', 'x' => '70%', 'y' => '65%', 'color' => 'blue']
          ];
          
          foreach($locations as $loc): 
          ?>
          <button onclick="showProjectInfo('<?php echo $loc['title']; ?>')" 
                  class="absolute transform -translate-x-1/2 -translate-y-1/2 group"
                  style="left: <?php echo $loc['x']; ?>; top: <?php echo $loc['y']; ?>;">
            <div class="relative">
              <div class="w-6 h-6 rounded-full bg-<?php echo $loc['color']; ?>-500 border-2 border-white dark:border-slate-800 shadow-lg flex items-center justify-center">
                <i class="fas fa-<?php echo $loc['type'] == 'ongoing' ? 'tools' : ($loc['type'] == 'completed' ? 'check' : 'map-marker'); ?> text-white text-xs"></i>
              </div>
              <div class="absolute -bottom-8 left-1/2 transform -translate-x-1/2 whitespace-nowrap bg-white dark:bg-slate-800 px-3 py-1 rounded-lg shadow-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300 text-xs font-medium text-slate-900 dark:text-slate-100">
                <?php echo $loc['title']; ?>
              </div>
            </div>
          </button>
          <?php endforeach; ?>
        </div>
        
        <!-- Legenda -->
        <div class="mt-6 flex flex-wrap gap-4">
          <div class="flex items-center gap-2">
            <div class="w-4 h-4 rounded-full bg-amber-500"></div>
            <span class="text-sm text-slate-700 dark:text-slate-300">Proyek Berjalan</span>
          </div>
          <div class="flex items-center gap-2">
            <div class="w-4 h-4 rounded-full bg-emerald-500"></div>
            <span class="text-sm text-slate-700 dark:text-slate-300">Proyek Selesai</span>
          </div>
          <div class="flex items-center gap-2">
            <div class="w-4 h-4 rounded-full bg-blue-500"></div>
            <span class="text-sm text-slate-700 dark:text-slate-300">Rencana Proyek</span>
          </div>
        </div>
      </div>
    </div>

    <!-- Dokumentasi Perbandingan -->
    <div class="mb-12">
      <div class="bg-white dark:bg-slate-800 rounded-2xl shadow-xl p-8 border border-slate-100 dark:border-slate-700">
        <h2 class="text-3xl font-bold text-slate-900 dark:text-white mb-8 flex items-center gap-3">
          <i class="fas fa-images text-purple-500"></i>
          Dokumentasi Sebelum & Sesudah
        </h2>
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
          <?php 
          $dokumentasi = [
            [
              'title' => 'Jalan Desa - Dusun 4',
              'description' => 'Transformasi jalan tanah menjadi jalan aspal berkualitas',
              'before' => 'Jalan berlubang dan berdebu',
              'after' => 'Jalan mulus dengan drainase baik',
              'year' => '2023-2024',
              'impact' => '+85% kepuasan warga'
            ],
            [
              'title' => 'Saluran Irigasi - Dusun 2',
              'description' => 'Rehabilitasi saluran untuk mencegah banjir dan mengoptimalkan irigasi',
              'before' => 'Saluran tersumbat dan rusak',
              'after' => 'Saluran berfungsi optimal',
              'year' => '2022-2023',
              'impact' => 'Luas lahan irigasi +40%'
            ]
          ];
          
          foreach($dokumentasi as $doc): 
          ?>
          <div class="group p-6 rounded-xl border border-slate-200 dark:border-slate-700 hover:border-purple-300 dark:hover:border-purple-600 hover:shadow-lg transition-all duration-300">
            <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-4"><?php echo $doc['title']; ?></h3>
            <p class="text-slate-600 dark:text-slate-300 mb-6"><?php echo $doc['description']; ?></p>
            
            <div class="grid grid-cols-2 gap-4 mb-6">
              <div class="text-center">
                <div class="w-12 h-12 rounded-full bg-red-100 dark:bg-red-900/30 flex items-center justify-center mx-auto mb-2">
                  <i class="fas fa-times text-red-500 dark:text-red-400"></i>
                </div>
                <p class="text-sm font-medium text-slate-900 dark:text-white">Sebelum</p>
                <p class="text-xs text-slate-600 dark:text-slate-400"><?php echo $doc['before']; ?></p>
              </div>
              <div class="text-center">
                <div class="w-12 h-12 rounded-full bg-emerald-100 dark:bg-emerald-900/30 flex items-center justify-center mx-auto mb-2">
                  <i class="fas fa-check text-emerald-500 dark:text-emerald-400"></i>
                </div>
                <p class="text-sm font-medium text-slate-900 dark:text-white">Sesudah</p>
                <p class="text-xs text-slate-600 dark:text-slate-400"><?php echo $doc['after']; ?></p>
              </div>
            </div>
            
            <div class="flex items-center justify-between">
              <div>
                <p class="text-xs text-slate-500 dark:text-slate-400">Tahun</p>
                <p class="font-medium text-slate-900 dark:text-white"><?php echo $doc['year']; ?></p>
              </div>
              <div>
                <p class="text-xs text-slate-500 dark:text-slate-400">Dampak</p>
                <p class="font-medium text-emerald-600 dark:text-emerald-400"><?php echo $doc['impact']; ?></p>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>

    <!-- Download & Laporan -->
    <div class="bg-gradient-to-r from-amber-500 to-orange-600 rounded-2xl shadow-xl p-8 text-white">
      <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-8">
        <div class="lg:w-2/3">
          <h2 class="text-2xl font-bold mb-4">Laporan Pembangunan Desa</h2>
          <p class="opacity-90 mb-6">
            Akses laporan lengkap, dokumentasi, dan data perkembangan pembangunan Desa Bawang dari tahun ke tahun.
          </p>
          <div class="flex flex-wrap gap-3">
            <button onclick="downloadPDF()" class="px-5 py-2 bg-white/20 backdrop-blur-sm hover:bg-white/30 rounded-lg transition-colors duration-300 flex items-center gap-2">
              <i class="fas fa-file-pdf"></i>
              Laporan Tahunan 2023
            </button>
            <button onclick="downloadExcel()" class="px-5 py-2 bg-white text-amber-600 hover:bg-amber-50 font-semibold rounded-lg transition-colors duration-300 flex items-center gap-2">
              <i class="fas fa-file-excel"></i>
              Data Anggaran
            </button>
          </div>
        </div>
        <div class="lg:w-1/3">
          <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6">
            <h3 class="font-bold mb-4">Statistik Cepat</h3>
            <div class="space-y-3">
              <div class="flex justify-between">
                <span class="opacity-90">Tahun Berjalan</span>
                <span class="font-bold">2024</span>
              </div>
              <div class="flex justify-between">
                <span class="opacity-90">Proyek Aktif</span>
                <span class="font-bold">7 Proyek</span>
              </div>
              <div class="flex justify-between">
                <span class="opacity-90">Serapan Anggaran</span>
                <span class="font-bold">72%</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>

<!-- JavaScript untuk interaksi -->
<script>
  // Animasi fade-in
  document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.animate-fade-in').forEach(el => {
      el.style.opacity = '1';
      el.style.transform = 'translateY(0)';
    });
  });

  // Fungsi untuk melihat peta proyek
  function lihatPeta() {
    const petaSection = document.querySelector('.bg-white.dark\\:bg-slate-800.rounded-2xl.shadow-xl');
    if (petaSection) {
      petaSection.scrollIntoView({ 
        behavior: 'smooth',
        block: 'center'
      });
    }
    showNotification('Membuka peta lokasi proyek', 'info');
  }

  // Fungsi untuk download laporan
  function downloadLaporan() {
    showNotification('Mengunduh laporan pembangunan desa...', 'info');
    // Simulasi download
    setTimeout(() => {
      showNotification('Laporan berhasil diunduh!', 'success');
    }, 1500);
  }

  // Fungsi untuk lihat detail proyek
  function lihatDetailProyek(proyekTitle) {
    showNotification(`Membuka detail proyek: ${proyekTitle}`, 'info');
    
    // Tampilkan modal detail proyek
    const modalHTML = `
      <div class="fixed inset-0 bg-black/50 flex items-center justify-center z-50 p-4">
        <div class="bg-white dark:bg-slate-800 rounded-2xl max-w-2xl w-full max-h-[80vh] overflow-auto">
          <div class="p-6 border-b border-slate-200 dark:border-slate-700">
            <div class="flex items-center justify-between">
              <h3 class="text-xl font-bold text-slate-900 dark:text-white">${proyekTitle}</h3>
              <button onclick="closeModal()" class="text-slate-500 hover:text-slate-700 dark:hover:text-slate-300">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <div class="p-6 space-y-4">
            <div class="grid grid-cols-2 gap-4">
              <div>
                <p class="text-sm text-slate-500 dark:text-slate-400">Lokasi</p>
                <p class="font-medium text-slate-900 dark:text-white">Dusun 4, Desa Bawang</p>
              </div>
              <div>
                <p class="text-sm text-slate-500 dark:text-slate-400">Anggaran</p>
                <p class="font-medium text-slate-900 dark:text-white">Rp 350 Juta</p>
              </div>
            </div>
            <div>
              <p class="text-sm text-slate-500 dark:text-slate-400 mb-2">Deskripsi</p>
              <p class="text-slate-700 dark:text-slate-300">Proyek peningkatan kualitas jalan dengan material aspal hotmix untuk meningkatkan aksesibilitas warga.</p>
            </div>
            <div>
              <p class="text-sm text-slate-500 dark:text-slate-400 mb-2">Kontraktor</p>
              <p class="font-medium text-slate-900 dark:text-white">PT Jaya Konstruksi</p>
            </div>
            <div>
              <p class="text-sm text-slate-500 dark:text-slate-400 mb-2">Timeline</p>
              <div class="relative pt-4">
                <div class="flex justify-between text-xs text-slate-600 dark:text-slate-400">
                  <span>15 Jan 2024</span>
                  <span>30 Apr 2024</span>
                </div>
                <div class="w-full bg-slate-200 dark:bg-slate-700 rounded-full h-2 mt-2">
                  <div class="bg-gradient-to-r from-blue-400 to-indigo-500 h-2 rounded-full" style="width: 75%"></div>
                </div>
                <div class="flex justify-between text-xs text-slate-600 dark:text-slate-400 mt-1">
                  <span>Mulai</span>
                  <span>75%</span>
                  <span>Selesai</span>
                </div>
              </div>
            </div>
          </div>
          <div class="p-6 border-t border-slate-200 dark:border-slate-700">
            <button onclick="closeModal()" class="w-full py-3 bg-blue-500 text-white rounded-lg font-medium hover:bg-blue-600">
              Tutup
            </button>
          </div>
        </div>
      </div>
    `;
    
    document.body.insertAdjacentHTML('beforeend', modalHTML);
  }

  // Fungsi untuk lihat dokumentasi
  function lihatDokumentasi(proyekTitle) {
    showNotification(`Membuka dokumentasi ${proyekTitle}`, 'info');
    
    // Tampilkan modal dokumentasi
    const modalHTML = `
      <div class="fixed inset-0 bg-black/50 flex items-center justify-center z-50 p-4">
        <div class="bg-white dark:bg-slate-800 rounded-2xl max-w-4xl w-full max-h-[90vh] overflow-auto">
          <div class="p-6 border-b border-slate-200 dark:border-slate-700">
            <div class="flex items-center justify-between">
              <h3 class="text-xl font-bold text-slate-900 dark:text-white">Dokumentasi ${proyekTitle}</h3>
              <button onclick="closeModal()" class="text-slate-500 hover:text-slate-700 dark:hover:text-slate-300">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <div class="p-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
              <div>
                <h4 class="font-bold text-slate-900 dark:text-white mb-2">Sebelum</h4>
                <div class="rounded-lg overflow-hidden border border-slate-200 dark:border-slate-700">
                  <img src="https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                       alt="Sebelum"
                       class="w-full h-64 object-cover">
                </div>
                <p class="text-sm text-slate-600 dark:text-slate-400 mt-2">Kondisi awal sebelum pembangunan</p>
              </div>
              <div>
                <h4 class="font-bold text-slate-900 dark:text-white mb-2">Sesudah</h4>
                <div class="rounded-lg overflow-hidden border border-slate-200 dark:border-slate-700">
                  <img src="https://images.unsplash.com/photo-1569336415962-a4bd9f69cd83?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
                       alt="Sesudah"
                       class="w-full h-64 object-cover">
                </div>
                <p class="text-sm text-slate-600 dark:text-slate-400 mt-2">Hasil setelah pembangunan selesai</p>
              </div>
            </div>
            <div class="space-y-3">
              <h4 class="font-bold text-slate-900 dark:text-white">Detail Proyek</h4>
              <div class="grid grid-cols-2 gap-4">
                <div>
                  <p class="text-sm text-slate-500 dark:text-slate-400">Tanggal Mulai</p>
                  <p class="font-medium text-slate-900 dark:text-white">15 Januari 2023</p>
                </div>
                <div>
                  <p class="text-sm text-slate-500 dark:text-slate-400">Tanggal Selesai</p>
                  <p class="font-medium text-slate-900 dark:text-white">30 Juni 2023</p>
                </div>
                <div>
                  <p class="text-sm text-slate-500 dark:text-slate-400">Durasi</p>
                  <p class="font-medium text-slate-900 dark:text-white">5.5 Bulan</p>
                </div>
                <div>
                  <p class="text-sm text-slate-500 dark:text-slate-400">Kontraktor</p>
                  <p class="font-medium text-slate-900 dark:text-white">PT Bangun Jaya</p>
                </div>
              </div>
            </div>
          </div>
          <div class="p-6 border-t border-slate-200 dark:border-slate-700">
            <div class="flex gap-3">
              <button onclick="closeModal()" class="flex-1 py-3 bg-blue-500 text-white rounded-lg font-medium hover:bg-blue-600">
                Tutup
              </button>
              <button onclick="downloadDokumentasi()" class="flex-1 py-3 bg-emerald-500 text-white rounded-lg font-medium hover:bg-emerald-600">
                <i class="fas fa-download mr-2"></i> Download
              </button>
            </div>
          </div>
        </div>
      </div>
    `;
    
    document.body.insertAdjacentHTML('beforeend', modalHTML);
  }

  // Fungsi untuk filter peta
  function filterPeta(filter) {
    const buttons = document.querySelectorAll('[onclick^="filterPeta"]');
    buttons.forEach(btn => {
      btn.classList.remove('bg-blue-100', 'dark:bg-blue-900/30', 'text-blue-600', 'dark:text-blue-300');
      btn.classList.remove('bg-amber-100', 'dark:bg-amber-900/30', 'text-amber-600', 'dark:text-amber-300');
      btn.classList.remove('bg-emerald-100', 'dark:bg-emerald-900/30', 'text-emerald-600', 'dark:text-emerald-300');
    });
    
    const activeBtn = document.querySelector(`[onclick="filterPeta('${filter}')"]`);
    if (activeBtn) {
      if (filter === 'all') {
        activeBtn.classList.add('bg-blue-100', 'dark:bg-blue-900/30', 'text-blue-600', 'dark:text-blue-300');
      } else if (filter === 'ongoing') {
        activeBtn.classList.add('bg-amber-100', 'dark:bg-amber-900/30', 'text-amber-600', 'dark:text-amber-300');
      } else if (filter === 'completed') {
        activeBtn.classList.add('bg-emerald-100', 'dark:bg-emerald-900/30', 'text-emerald-600', 'dark:text-emerald-300');
      }
    }
    
    showNotification(`Menampilkan proyek: ${filter === 'all' ? 'Semua' : filter === 'ongoing' ? 'Berjalan' : 'Selesai'}`, 'info');
  }

  // Fungsi untuk show project info
  function showProjectInfo(title) {
    showNotification(`Proyek: ${title}`, 'info');
  }

  // Fungsi untuk download PDF
  function downloadPDF() {
    showNotification('Mengunduh laporan PDF...', 'info');
    setTimeout(() => {
      showNotification('Laporan PDF berhasil diunduh!', 'success');
    }, 1500);
  }

  // Fungsi untuk download Excel
  function downloadExcel() {
    showNotification('Mengunduh data Excel...', 'info');
    setTimeout(() => {
      showNotification('Data Excel berhasil diunduh!', 'success');
    }, 1500);
  }

  // Fungsi untuk download dokumentasi
  function downloadDokumentasi() {
    showNotification('Mengunduh dokumentasi proyek...', 'info');
    setTimeout(() => {
      showNotification('Dokumentasi berhasil diunduh!', 'success');
    }, 1500);
  }

  // Fungsi untuk menutup modal
  function closeModal() {
    const modal = document.querySelector('.fixed.inset-0.bg-black\\/50');
    if (modal) {
      modal.remove();
    }
  }

  // Fungsi untuk notifikasi
  function showNotification(message, type = 'info') {
    const colors = {
      info: 'bg-blue-500',
      success: 'bg-emerald-500',
      error: 'bg-rose-500',
      warning: 'bg-amber-500'
    };
    
    const notification = document.createElement('div');
    notification.className = `fixed top-4 right-4 ${colors[type]} text-white px-6 py-3 rounded-lg shadow-lg z-50 transform translate-x-full transition-transform duration-300`;
    notification.innerHTML = `
      <div class="flex items-center gap-2">
        <i class="fas fa-${type === 'success' ? 'check-circle' : type === 'error' ? 'exclamation-circle' : 'info-circle'}"></i>
        <span>${message}</span>
      </div>
    `;
    
    document.body.appendChild(notification);
    
    setTimeout(() => {
      notification.classList.remove('translate-x-full');
      notification.classList.add('translate-x-0');
    }, 10);
    
    setTimeout(() => {
      notification.classList.remove('translate-x-0');
      notification.classList.add('translate-x-full');
      setTimeout(() => notification.remove(), 300);
    }, 3000);
  }
</script>

<style>
  @keyframes fade-in {
    from { opacity: 0; transform: translateY(10px); }
    to { opacity: 1; transform: translateY(0); }
  }
  
  @keyframes pulse-slow {
    0%, 100% { transform: scale(1); }
    50% { transform: scale(1.05); }
  }
  
  .animate-fade-in {
    opacity: 0;
    transform: translateY(10px);
    animation: fade-in 0.6s ease-out forwards;
  }
  
  .animate-pulse-slow {
    animation: pulse-slow 2s infinite;
  }
</style>
<?php endif; ?>
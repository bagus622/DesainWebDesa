<?php if ($halaman == 'lowongan-pekerjaan'): ?>
<div class="min-h-screen bg-gradient-to-br from-slate-50 via-white to-blue-50/30 dark:from-slate-900 dark:via-slate-800 dark:to-blue-900/10 py-8">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    
    <!-- Header dengan CTA -->
    <div class="mb-12 animate-fade-in">
      <div class="flex flex-col md:flex-row md:items-center justify-between gap-8 mb-8">
        <div class="flex items-center gap-4">
          <div class="relative">
            <div class="w-16 h-16 rounded-2xl bg-gradient-to-r from-blue-500 via-indigo-500 to-purple-500 flex items-center justify-center shadow-xl shadow-blue-500/20 animate-pulse-slow">
              <i class="fas fa-briefcase text-white text-2xl"></i>
            </div>
            <div class="absolute -top-2 -right-2 w-8 h-8 bg-emerald-400 rounded-full border-4 border-white dark:border-slate-800 flex items-center justify-center">
              <i class="fas fa-bolt text-white text-xs"></i>
            </div>
          </div>
          <div>
            <h1 class="text-4xl md:text-5xl font-bold text-slate-900 dark:text-white bg-gradient-to-r from-blue-600 to-indigo-600 bg-clip-text text-transparent">Lowongan & Informasi Kerja</h1>
            <p class="text-slate-600 dark:text-slate-300 mt-3 max-w-2xl">
              Temukan peluang karir, program kerja, dan pelatihan untuk mengembangkan potensi dan meningkatkan kesejahteraan warga Desa Bawang.
            </p>
          </div>
        </div>
        <div class="flex flex-col sm:flex-row gap-3">
          <button onclick="tambahLowongan()" class="px-6 py-3 bg-gradient-to-r from-emerald-500 to-teal-600 text-white font-semibold rounded-xl shadow-lg shadow-emerald-500/30 hover:shadow-xl hover:shadow-emerald-500/40 transition-all duration-300 transform hover:-translate-y-0.5 flex items-center justify-center gap-2">
            <i class="fas fa-plus"></i> Tambah Lowongan
          </button>
          <button onclick="lihatPelatihan()" class="px-6 py-3 bg-white dark:bg-slate-800 border-2 border-blue-200 dark:border-blue-800 text-blue-600 dark:text-blue-400 font-semibold rounded-xl hover:bg-blue-50 dark:hover:bg-blue-900/20 transition-all duration-300 flex items-center justify-center gap-2">
            <i class="fas fa-graduation-cap"></i> Pelatihan
          </button>
        </div>
      </div>
      
      <!-- Quick Stats -->
      <div class="flex flex-wrap items-center gap-6 text-sm text-slate-600 dark:text-slate-400">
        <div class="flex items-center gap-2">
          <span class="w-2 h-2 bg-emerald-500 rounded-full animate-pulse"></span>
          <span>Lowongan Aktif: 24 posisi</span>
        </div>
        <div class="flex items-center gap-2">
          <i class="fas fa-user-check text-xs"></i>
          <span>Pelamar Terdaftar: 156 orang</span>
        </div>
        <div class="flex items-center gap-2">
          <i class="fas fa-calendar-alt text-xs"></i>
          <span>Pelatihan Mendatang: 3 program</span>
        </div>
      </div>
    </div>

    <!-- Dashboard Statistik -->
    <div class="mb-12">
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Total Lowongan -->
        <div class="group bg-gradient-to-br from-white to-slate-50 dark:from-slate-800 dark:to-slate-900 rounded-2xl shadow-xl p-6 border border-slate-200 dark:border-slate-700 hover:border-blue-300 dark:hover:border-blue-600 hover:shadow-2xl transition-all duration-500 cursor-pointer relative overflow-hidden">
          <div class="absolute top-0 right-0 w-24 h-24 opacity-5">
            <i class="fas fa-briefcase text-5xl"></i>
          </div>
          
          <div class="relative">
            <div class="flex items-center justify-between mb-4">
              <div>
                <p class="text-sm font-medium text-slate-500 dark:text-slate-400 uppercase tracking-wider">Lowongan Aktif</p>
                <p class="text-4xl font-bold text-slate-900 dark:text-white mt-2">24</p>
              </div>
              <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-blue-500 to-indigo-500 flex items-center justify-center shadow-lg shadow-blue-500/30 group-hover:scale-110 transition-transform duration-500">
                <i class="fas fa-briefcase text-white text-xl"></i>
              </div>
            </div>
            <div class="flex items-center gap-2">
              <span class="px-2 py-1 bg-blue-100 dark:bg-blue-900/30 text-blue-600 dark:text-blue-300 rounded text-xs font-medium">
                <i class="fas fa-arrow-up mr-1"></i> 18%
              </span>
              <span class="text-sm text-slate-500 dark:text-slate-400">dari bulan lalu</span>
            </div>
          </div>
        </div>
        
        <!-- Program Padat Karya -->
        <div class="group bg-gradient-to-br from-white to-slate-50 dark:from-slate-800 dark:to-slate-900 rounded-2xl shadow-xl p-6 border border-slate-200 dark:border-slate-700 hover:border-emerald-300 dark:hover:border-emerald-600 hover:shadow-2xl transition-all duration-500 cursor-pointer">
          <div class="flex items-center justify-between mb-4">
            <div>
              <p class="text-sm font-medium text-slate-500 dark:text-slate-400 uppercase tracking-wider">Padat Karya</p>
              <p class="text-4xl font-bold text-slate-900 dark:text-white mt-2">3</p>
            </div>
            <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-emerald-500 to-teal-500 flex items-center justify-center shadow-lg shadow-emerald-500/30 group-hover:scale-110 transition-transform duration-500">
              <i class="fas fa-users text-white text-xl"></i>
            </div>
          </div>
          <div class="w-full bg-slate-200 dark:bg-slate-700 rounded-full h-2">
            <div class="bg-gradient-to-r from-emerald-400 to-teal-500 h-2 rounded-full" style="width: 80%"></div>
          </div>
          <p class="text-xs text-slate-500 dark:text-slate-400 mt-2">120 pekerja terserap</p>
        </div>
        
        <!-- Pelatihan Tersedia -->
        <div class="group bg-gradient-to-br from-white to-slate-50 dark:from-slate-800 dark:to-slate-900 rounded-2xl shadow-xl p-6 border border-slate-200 dark:border-slate-700 hover:border-purple-300 dark:hover:border-purple-600 hover:shadow-2xl transition-all duration-500 cursor-pointer">
          <div class="flex items-center justify-between mb-4">
            <div>
              <p class="text-sm font-medium text-slate-500 dark:text-slate-400 uppercase tracking-wider">Pelatihan</p>
              <p class="text-4xl font-bold text-slate-900 dark:text-white mt-2">8</p>
            </div>
            <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-purple-500 to-violet-500 flex items-center justify-center shadow-lg shadow-purple-500/30 group-hover:scale-110 transition-transform duration-500">
              <i class="fas fa-graduation-cap text-white text-xl"></i>
            </div>
          </div>
          <div class="w-full bg-slate-200 dark:bg-slate-700 rounded-full h-2">
            <div class="bg-gradient-to-r from-purple-400 to-violet-500 h-2 rounded-full" style="width: 45%"></div>
          </div>
          <p class="text-xs text-slate-500 dark:text-slate-400 mt-2">64% kuota terisi</p>
        </div>
        
        <!-- Magang Tersedia -->
        <div class="group bg-gradient-to-br from-white to-slate-50 dark:from-slate-800 dark:to-slate-900 rounded-2xl shadow-xl p-6 border border-slate-200 dark:border-slate-700 hover:border-amber-300 dark:hover:border-amber-600 hover:shadow-2xl transition-all duration-500 cursor-pointer">
          <div class="flex items-center justify-between mb-4">
            <div>
              <p class="text-sm font-medium text-slate-500 dark:text-slate-400 uppercase tracking-wider">Magang</p>
              <p class="text-4xl font-bold text-slate-900 dark:text-white mt-2">5</p>
            </div>
            <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-amber-500 to-yellow-500 flex items-center justify-center shadow-lg shadow-amber-500/30 group-hover:scale-110 transition-transform duration-500">
              <i class="fas fa-user-graduate text-white text-xl"></i>
            </div>
          </div>
          <div class="w-full bg-slate-200 dark:bg-slate-700 rounded-full h-2">
            <div class="bg-gradient-to-r from-amber-400 to-yellow-500 h-2 rounded-full" style="width: 60%"></div>
          </div>
          <p class="text-xs text-slate-500 dark:text-slate-400 mt-2">15 slot tersedia</p>
        </div>
      </div>
    </div>

    <!-- Lowongan Kerja Lokal -->
    <div class="mb-16">
      <div class="flex flex-col md:flex-row md:items-center justify-between mb-8">
        <h2 class="text-3xl font-bold text-slate-900 dark:text-white flex items-center gap-3">
          <i class="fas fa-briefcase text-blue-500"></i>
          Lowongan Kerja Lokal
        </h2>
        <div class="flex items-center gap-2 mt-2 md:mt-0">
          <span class="text-slate-600 dark:text-slate-300">Filter:</span>
          <select class="px-3 py-1 rounded-lg border border-slate-300 dark:border-slate-600 bg-white dark:bg-slate-800 text-sm">
            <option>Semua Kategori</option>
            <option>Pertanian</option>
            <option>UMKM</option>
            <option>Jasa</option>
            <option>Industri</option>
          </select>
        </div>
      </div>
      
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <?php 
        $lowonganList = [
          [
            'title' => 'Staff Administrasi UMKM',
            'company' => 'CV Sari Bumi',
            'location' => 'Dusun 2, Desa Bawang',
            'salary' => 'Rp 2.8 - 3.2 juta',
            'type' => 'Full Time',
            'experience' => '1-2 Tahun',
            'deadline' => '30 April 2024',
            'color' => 'blue',
            'urgent' => true
          ],
          [
            'title' => 'Operator Produksi Keripik',
            'company' => 'Keripik "Mbak Sum"',
            'location' => 'Dusun 1, Desa Bawang',
            'salary' => 'Rp 2.5 - 3 juta',
            'type' => 'Full Time',
            'experience' => 'Minimal SMA',
            'deadline' => '25 April 2024',
            'color' => 'emerald',
            'urgent' => true
          ],
          [
            'title' => 'Sales & Pemasaran Madu',
            'company' => 'Madu Hutan "Sari Bumi"',
            'location' => 'Dusun 4, Desa Bawang',
            'salary' => 'Rp 2.5 juta + Komisi',
            'type' => 'Full Time',
            'experience' => 'Fresh Graduate',
            'deadline' => '28 April 2024',
            'color' => 'amber',
            'urgent' => false
          ],
          [
            'title' => 'Tukang Kayu Terampil',
            'company' => 'Kerajinan Bambu "Pak Joko"',
            'location' => 'Dusun 3, Desa Bawang',
            'salary' => 'Rp 3 - 4 juta',
            'type' => 'Full Time',
            'experience' => '3-5 Tahun',
            'deadline' => '15 Mei 2024',
            'color' => 'purple',
            'urgent' => false
          ],
          [
            'title' => 'Driver Pengiriman',
            'company' => 'UMKM Desa Bawang',
            'location' => 'Semua Dusun',
            'salary' => 'Rp 2.8 - 3.5 juta',
            'type' => 'Full Time',
            'experience' => 'SIM C Aktif',
            'deadline' => '5 Mei 2024',
            'color' => 'red',
            'urgent' => true
          ],
          [
            'title' => 'Kasir Toko Kelontong',
            'company' => 'Toko "Murah Sejahtera"',
            'location' => 'Pusat Desa',
            'salary' => 'Rp 2.2 - 2.6 juta',
            'type' => 'Part Time',
            'experience' => 'SMA/SMK',
            'deadline' => '20 April 2024',
            'color' => 'indigo',
            'urgent' => false
          ]
        ];
        
        foreach($lowonganList as $lowongan): 
        ?>
        <div class="group bg-white dark:bg-slate-800 rounded-2xl shadow-lg p-6 border border-slate-200 dark:border-slate-700 hover:shadow-xl hover:border-<?php echo $lowongan['color']; ?>-300 dark:hover:border-<?php echo $lowongan['color']; ?>-600 transition-all duration-300 transform hover:-translate-y-1">
          <div class="flex items-start justify-between mb-4">
            <div>
              <h3 class="font-bold text-slate-900 dark:text-white text-lg mb-1"><?php echo $lowongan['title']; ?></h3>
              <p class="text-sm text-slate-600 dark:text-slate-400"><?php echo $lowongan['company']; ?></p>
            </div>
            <?php if($lowongan['urgent']): ?>
            <span class="px-2 py-1 bg-red-100 dark:bg-red-900/30 text-red-600 dark:text-red-300 rounded text-xs font-medium">
              Urgent
            </span>
            <?php endif; ?>
          </div>
          
          <div class="space-y-3 mb-4">
            <div class="flex items-center gap-2">
              <i class="fas fa-map-marker-alt text-slate-500 text-sm"></i>
              <span class="text-sm text-slate-700 dark:text-slate-300"><?php echo $lowongan['location']; ?></span>
            </div>
            <div class="flex items-center gap-2">
              <i class="fas fa-money-bill-wave text-slate-500 text-sm"></i>
              <span class="text-sm font-medium text-<?php echo $lowongan['color']; ?>-600 dark:text-<?php echo $lowongan['color']; ?>-400"><?php echo $lowongan['salary']; ?></span>
            </div>
            <div class="flex items-center gap-2">
              <i class="fas fa-clock text-slate-500 text-sm"></i>
              <span class="text-sm text-slate-700 dark:text-slate-300"><?php echo $lowongan['type']; ?></span>
            </div>
          </div>
          
          <div class="flex items-center justify-between mb-4">
            <div>
              <p class="text-xs text-slate-500 dark:text-slate-400">Pengalaman</p>
              <p class="text-sm font-medium text-slate-900 dark:text-white"><?php echo $lowongan['experience']; ?></p>
            </div>
            <div>
              <p class="text-xs text-slate-500 dark:text-slate-400">Batas Waktu</p>
              <p class="text-sm font-medium text-slate-900 dark:text-white"><?php echo $lowongan['deadline']; ?></p>
            </div>
          </div>
          
          <div class="flex gap-2">
            <button onclick="detailLowongan('<?php echo $lowongan['title']; ?>')" class="flex-1 py-2.5 bg-<?php echo $lowongan['color']; ?>-100 dark:bg-<?php echo $lowongan['color']; ?>-900/30 text-<?php echo $lowongan['color']; ?>-600 dark:text-<?php echo $lowongan['color']; ?>-400 font-medium rounded-lg hover:bg-<?php echo $lowongan['color']; ?>-200 dark:hover:bg-<?php echo $lowongan['color']; ?>-900/50 transition-colors duration-300">
              Detail
            </button>
            <button onclick="lamarSekarang('<?php echo $lowongan['title']; ?>')" class="flex-1 py-2.5 bg-gradient-to-r from-<?php echo $lowongan['color']; ?>-500 to-<?php echo $lowongan['color']; ?>-600 text-white font-medium rounded-lg hover:shadow-lg transition-all duration-300">
              Lamar
            </button>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- Program Padat Karya -->
    <div class="mb-16">
      <div class="bg-gradient-to-br from-white to-emerald-50 dark:from-slate-800 dark:to-emerald-900/10 rounded-2xl shadow-xl p-8 border border-emerald-200 dark:border-emerald-800">
        <div class="flex items-center justify-between mb-8">
          <h2 class="text-3xl font-bold text-slate-900 dark:text-white flex items-center gap-3">
            <i class="fas fa-users text-emerald-500"></i>
            Program Padat Karya
          </h2>
          <span class="px-4 py-2 bg-emerald-100 dark:bg-emerald-900/30 text-emerald-600 dark:text-emerald-300 rounded-full text-sm font-medium">
            3 Program Aktif
          </span>
        </div>
        
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
          <?php 
          $padatKarya = [
            [
              'title' => 'Padat Karya Perbaikan Jalan',
              'organizer' => 'Pemerintah Desa',
              'duration' => '3 Bulan',
              'workers' => '45 Pekerja',
              'wage' => 'Rp 75.000/hari',
              'start' => '1 Mei 2024',
              'quota' => '25/45',
              'color' => 'emerald'
            ],
            [
              'title' => 'Program Saluran Irigasi',
              'organizer' => 'Dinas PUPR',
              'duration' => '2 Bulan',
              'workers' => '30 Pekerja',
              'wage' => 'Rp 70.000/hari',
              'start' => '15 Mei 2024',
              'quota' => '18/30',
              'color' => 'blue'
            ],
            [
              'title' => 'Penghijauan Desa',
              'organizer' => 'Kelompok Tani',
              'duration' => '1 Bulan',
              'workers' => '20 Pekerja',
              'wage' => 'Rp 65.000/hari',
              'start' => '1 Juni 2024',
              'quota' => '12/20',
              'color' => 'green'
            ]
          ];
          
          foreach($padatKarya as $program): 
          ?>
          <div class="group bg-white dark:bg-slate-800/50 rounded-xl p-6 border border-slate-200 dark:border-slate-700 hover:border-<?php echo $program['color']; ?>-300 dark:hover:border-<?php echo $program['color']; ?>-600 hover:shadow-lg transition-all duration-300">
            <div class="flex items-center gap-3 mb-4">
              <div class="w-12 h-12 rounded-lg bg-<?php echo $program['color']; ?>-100 dark:bg-<?php echo $program['color']; ?>-900/30 flex items-center justify-center">
                <i class="fas fa-users text-<?php echo $program['color']; ?>-600 dark:text-<?php echo $program['color']; ?>-400"></i>
              </div>
              <div>
                <h3 class="font-bold text-slate-900 dark:text-white"><?php echo $program['title']; ?></h3>
                <p class="text-sm text-slate-600 dark:text-slate-400"><?php echo $program['organizer']; ?></p>
              </div>
            </div>
            
            <div class="space-y-3 mb-4">
              <div class="flex justify-between">
                <span class="text-sm text-slate-600 dark:text-slate-400">Durasi</span>
                <span class="font-medium text-slate-900 dark:text-white"><?php echo $program['duration']; ?></span>
              </div>
              <div class="flex justify-between">
                <span class="text-sm text-slate-600 dark:text-slate-400">Upah Harian</span>
                <span class="font-medium text-emerald-600 dark:text-emerald-400"><?php echo $program['wage']; ?></span>
              </div>
              <div class="flex justify-between">
                <span class="text-sm text-slate-600 dark:text-slate-400">Mulai</span>
                <span class="font-medium text-slate-900 dark:text-white"><?php echo $program['start']; ?></span>
              </div>
            </div>
            
            <div class="mb-4">
              <div class="flex justify-between mb-1">
                <span class="text-sm text-slate-600 dark:text-slate-400">Kuota Pekerja</span>
                <span class="text-sm font-medium text-slate-900 dark:text-white"><?php echo $program['quota']; ?></span>
              </div>
              <div class="w-full bg-slate-200 dark:bg-slate-700 rounded-full h-2">
                <?php 
                $quotaParts = explode('/', $program['quota']);
                $filled = $quotaParts[0];
                $total = $quotaParts[1];
                $percentage = ($filled / $total) * 100;
                ?>
                <div class="bg-gradient-to-r from-<?php echo $program['color']; ?>-400 to-<?php echo $program['color']; ?>-600 h-2 rounded-full" style="width: <?php echo $percentage; ?>%"></div>
              </div>
            </div>
            
            <button onclick="daftarPadatKarya('<?php echo $program['title']; ?>')" class="w-full py-2.5 bg-<?php echo $program['color']; ?>-100 dark:bg-<?php echo $program['color']; ?>-900/30 text-<?php echo $program['color']; ?>-600 dark:text-<?php echo $program['color']; ?>-400 font-medium rounded-lg hover:bg-<?php echo $program['color']; ?>-200 dark:hover:bg-<?php echo $program['color']; ?>-900/50 transition-colors duration-300">
              Daftar Sekarang
            </button>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>

    <!-- Pelatihan & Sertifikasi -->
    <div class="mb-16">
      <div class="flex items-center justify-between mb-8">
        <h2 class="text-3xl font-bold text-slate-900 dark:text-white flex items-center gap-3">
          <i class="fas fa-graduation-cap text-purple-500"></i>
          Pelatihan & Sertifikasi
        </h2>
        <span class="px-4 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-600 dark:text-purple-300 rounded-full text-sm font-medium">
          8 Program Tersedia
        </span>
      </div>
      
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <?php 
        $pelatihanList = [
          [
            'title' => 'Digital Marketing UMKM',
            'trainer' => 'Dinas Koperasi',
            'date' => '15-17 Mei 2024',
            'fee' => 'Gratis',
            'quota' => '30/30',
            'certified' => true,
            'color' => 'purple'
          ],
          [
            'title' => 'Kewirausahaan Pemula',
            'trainer' => 'Lembaga Pelatihan',
            'date' => '22-24 Mei 2024',
            'fee' => 'Rp 150.000',
            'quota' => '25/30',
            'certified' => true,
            'color' => 'blue'
          ],
          [
            'title' => 'Pengolahan Hasil Pertanian',
            'trainer' => 'Dinas Pertanian',
            'date' => '5-7 Juni 2024',
            'fee' => 'Gratis',
            'quota' => '20/25',
            'certified' => true,
            'color' => 'emerald'
          ],
          [
            'title' => 'Keterampilan Teknis Listrik',
            'trainer' => 'PLN & LSP',
            'date' => '12-14 Juni 2024',
            'fee' => 'Rp 200.000',
            'quota' => '15/20',
            'certified' => true,
            'color' => 'amber'
          ]
        ];
        
        foreach($pelatihanList as $pelatihan): 
        ?>
        <div class="group bg-white dark:bg-slate-800 rounded-xl p-6 border border-slate-200 dark:border-slate-700 hover:shadow-lg hover:border-<?php echo $pelatihan['color']; ?>-300 dark:hover:border-<?php echo $pelatihan['color']; ?>-600 transition-all duration-300">
          <div class="flex items-start justify-between mb-4">
            <div>
              <h3 class="font-bold text-slate-900 dark:text-white mb-1"><?php echo $pelatihan['title']; ?></h3>
              <p class="text-sm text-slate-600 dark:text-slate-400"><?php echo $pelatihan['trainer']; ?></p>
            </div>
            <?php if($pelatihan['certified']): ?>
            <div class="w-8 h-8 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center">
              <i class="fas fa-award text-purple-600 dark:text-purple-400 text-sm"></i>
            </div>
            <?php endif; ?>
          </div>
          
          <div class="space-y-2 mb-4">
            <div class="flex items-center gap-2">
              <i class="fas fa-calendar-alt text-slate-500 text-sm"></i>
              <span class="text-sm text-slate-700 dark:text-slate-300"><?php echo $pelatihan['date']; ?></span>
            </div>
            <div class="flex items-center gap-2">
              <i class="fas fa-money-bill-wave text-slate-500 text-sm"></i>
              <span class="text-sm font-medium <?php echo $pelatihan['fee'] == 'Gratis' ? 'text-emerald-600 dark:text-emerald-400' : 'text-slate-900 dark:text-white'; ?>">
                <?php echo $pelatihan['fee']; ?>
              </span>
            </div>
          </div>
          
          <div class="mb-4">
            <div class="flex justify-between mb-1">
              <span class="text-xs text-slate-600 dark:text-slate-400">Kuota Peserta</span>
              <span class="text-xs font-medium text-slate-900 dark:text-white"><?php echo $pelatihan['quota']; ?></span>
            </div>
            <?php 
            $quotaParts = explode('/', $pelatihan['quota']);
            $filled = $quotaParts[0];
            $total = $quotaParts[1];
            $percentage = ($filled / $total) * 100;
            ?>
            <div class="w-full bg-slate-200 dark:bg-slate-700 rounded-full h-2">
              <div class="bg-gradient-to-r from-<?php echo $pelatihan['color']; ?>-400 to-<?php echo $pelatihan['color']; ?>-600 h-2 rounded-full" style="width: <?php echo $percentage; ?>%"></div>
            </div>
          </div>
          
          <button onclick="daftarPelatihan('<?php echo $pelatihan['title']; ?>')" class="w-full py-2 bg-<?php echo $pelatihan['color']; ?>-100 dark:bg-<?php echo $pelatihan['color']; ?>-900/30 text-<?php echo $pelatihan['color']; ?>-600 dark:text-<?php echo $pelatihan['color']; ?>-400 font-medium rounded-lg hover:bg-<?php echo $pelatihan['color']; ?>-200 dark:hover:bg-<?php echo $pelatihan['color']; ?>-900/50 transition-colors duration-300">
            Daftar Pelatihan
          </button>
        </div>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- Informasi Magang -->
    <div class="mb-16">
      <div class="bg-white dark:bg-slate-800 rounded-2xl shadow-xl p-8 border border-slate-100 dark:border-slate-700">
        <div class="flex items-center justify-between mb-8">
          <h2 class="text-3xl font-bold text-slate-900 dark:text-white flex items-center gap-3">
            <i class="fas fa-user-graduate text-amber-500"></i>
            Informasi Magang & PKL
          </h2>
          <span class="px-4 py-2 bg-amber-100 dark:bg-amber-900/30 text-amber-600 dark:text-amber-300 rounded-full text-sm font-medium">
            5 Posisi Magang
          </span>
        </div>
        
        <div class="overflow-x-auto">
          <table class="w-full">
            <thead>
              <tr class="border-b border-slate-200 dark:border-slate-700">
                <th class="text-left py-3 px-4 text-sm font-semibold text-slate-900 dark:text-white">Posisi Magang</th>
                <th class="text-left py-3 px-4 text-sm font-semibold text-slate-900 dark:text-white">Perusahaan/Instansi</th>
                <th class="text-left py-3 px-4 text-sm font-semibold text-slate-900 dark:text-white">Durasi</th>
                <th class="text-left py-3 px-4 text-sm font-semibold text-slate-900 dark:text-white">Kuota</th>
                <th class="text-left py-3 px-4 text-sm font-semibold text-slate-900 dark:text-white">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php 
              $magangList = [
                ['posisi' => 'Admin & Marketing', 'perusahaan' => 'UMKM Desa Bawang', 'durasi' => '3 Bulan', 'kuota' => '5/8', 'color' => 'blue'],
                ['posisi' => 'Asisten Produksi', 'perusahaan' => 'Keripik "Mbak Sum"', 'durasi' => '2 Bulan', 'kuota' => '3/5', 'color' => 'emerald'],
                ['posisi' => 'Magang Keuangan', 'perusahaan' => 'Koperasi Desa', 'durasi' => '4 Bulan', 'kuota' => '2/4', 'color' => 'purple'],
                ['posisi' => 'Asisten Teknis', 'perusahaan' => 'Bidang PUPR Desa', 'durasi' => '3 Bulan', 'kuota' => '4/6', 'color' => 'amber'],
                ['posisi' => 'Magang Pertanian', 'perusahaan' => 'Kelompok Tani Maju', 'durasi' => '2 Bulan', 'kuota' => '3/5', 'color' => 'green']
              ];
              
              foreach($magangList as $magang): 
              ?>
              <tr class="border-b border-slate-200 dark:border-slate-700 hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-colors duration-200">
                <td class="py-4 px-4">
                  <div class="font-medium text-slate-900 dark:text-white"><?php echo $magang['posisi']; ?></div>
                  <div class="text-xs text-slate-600 dark:text-slate-400 mt-1">Dapat sertifikat magang</div>
                </td>
                <td class="py-4 px-4 text-slate-700 dark:text-slate-300"><?php echo $magang['perusahaan']; ?></td>
                <td class="py-4 px-4">
                  <span class="px-2 py-1 bg-slate-100 dark:bg-slate-700 text-slate-700 dark:text-slate-300 rounded text-xs">
                    <?php echo $magang['durasi']; ?>
                  </span>
                </td>
                <td class="py-4 px-4">
                  <div class="flex items-center gap-2">
                    <span class="text-sm font-medium text-slate-900 dark:text-white"><?php echo $magang['kuota']; ?></span>
                    <?php 
                    $quotaParts = explode('/', $magang['kuota']);
                    $filled = $quotaParts[0];
                    $total = $quotaParts[1];
                    $percentage = ($filled / $total) * 100;
                    ?>
                    <div class="w-16 bg-slate-200 dark:bg-slate-700 rounded-full h-2">
                      <div class="bg-<?php echo $magang['color']; ?>-500 h-2 rounded-full" style="width: <?php echo $percentage; ?>%"></div>
                    </div>
                  </div>
                </td>
                <td class="py-4 px-4">
                  <button onclick="daftarMagang('<?php echo $magang['posisi']; ?>')" class="px-4 py-1.5 bg-<?php echo $magang['color']; ?>-100 dark:bg-<?php echo $magang['color']; ?>-900/30 text-<?php echo $magang['color']; ?>-600 dark:text-<?php echo $magang['color']; ?>-400 rounded-lg text-sm font-medium hover:bg-<?php echo $magang['color']; ?>-200 dark:hover:bg-<?php echo $magang['color']; ?>-900/50 transition-colors duration-300">
                    Daftar
                  </button>
                </td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <!-- Form Pendaftaran & Konsultasi -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-12">
      <!-- Form Pendaftaran -->
      <div class="bg-white dark:bg-slate-800 rounded-2xl shadow-xl p-8 border border-slate-100 dark:border-slate-700">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6 flex items-center gap-3">
          <i class="fas fa-user-plus text-blue-500"></i>
          Pendaftaran Online
        </h2>
        
        <form class="space-y-4">
          <div>
            <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Pilih Program</label>
            <select class="w-full px-4 py-3 rounded-lg border border-slate-300 dark:border-slate-600 bg-white dark:bg-slate-800 text-slate-800 dark:text-slate-100 focus:ring-2 focus:ring-blue-500 focus:border-transparent">
              <option value="">Pilih program yang diminati</option>
              <option value="lowongan">Lowongan Kerja</option>
              <option value="padat-karya">Program Padat Karya</option>
              <option value="pelatihan">Pelatihan & Sertifikasi</option>
              <option value="magang">Program Magang</option>
            </select>
          </div>
          
          <div>
            <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Nama Lengkap</label>
            <input type="text" class="w-full px-4 py-3 rounded-lg border border-slate-300 dark:border-slate-600 bg-white dark:bg-slate-800 text-slate-800 dark:text-slate-100 focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Nama sesuai KTP">
          </div>
          
          <div class="grid grid-cols-2 gap-4">
            <div>
              <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">No. Telepon</label>
              <input type="tel" class="w-full px-4 py-3 rounded-lg border border-slate-300 dark:border-slate-600 bg-white dark:bg-slate-800 text-slate-800 dark:text-slate-100 focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="08xxxxxxxxxx">
            </div>
            <div>
              <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Pendidikan Terakhir</label>
              <select class="w-full px-4 py-3 rounded-lg border border-slate-300 dark:border-slate-600 bg-white dark:bg-slate-800 text-slate-800 dark:text-slate-100 focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                <option value="">Pilih pendidikan</option>
                <option value="sd">SD</option>
                <option value="smp">SMP</option>
                <option value="sma">SMA/SMK</option>
                <option value="d3">Diploma</option>
                <option value="s1">Sarjana</option>
              </select>
            </div>
          </div>
          
          <div>
            <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Alamat Lengkap</label>
            <textarea rows="2" class="w-full px-4 py-3 rounded-lg border border-slate-300 dark:border-slate-600 bg-white dark:bg-slate-800 text-slate-800 dark:text-slate-100 focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="RT/RW, Dusun, Desa"></textarea>
          </div>
          
          <div>
            <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Pengalaman Kerja</label>
            <textarea rows="2" class="w-full px-4 py-3 rounded-lg border border-slate-300 dark:border-slate-600 bg-white dark:bg-slate-800 text-slate-800 dark:text-slate-100 focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Jelaskan pengalaman kerja sebelumnya"></textarea>
          </div>
          
          <div>
            <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">Upload CV & Dokumen</label>
            <div class="border-2 border-dashed border-slate-300 dark:border-slate-600 rounded-lg p-6 text-center hover:border-blue-500 transition-colors duration-300 cursor-pointer">
              <i class="fas fa-cloud-upload-alt text-3xl text-slate-400 mb-2"></i>
              <p class="text-sm text-slate-600 dark:text-slate-400">Klik atau drag file untuk upload</p>
              <p class="text-xs text-slate-500 dark:text-slate-500 mt-1">Format: PDF, DOC (Maks. 2MB)</p>
            </div>
          </div>
          
          <button type="submit" class="w-full py-3.5 bg-gradient-to-r from-blue-500 to-indigo-600 text-white font-semibold rounded-lg hover:shadow-lg hover:shadow-blue-500/30 transition-all duration-300">
            Kirim Pendaftaran
          </button>
        </form>
      </div>

      <!-- Konsultasi & Bantuan -->
      <div class="bg-gradient-to-br from-white to-blue-50 dark:from-slate-800 dark:to-blue-900/10 rounded-2xl shadow-xl p-8 border border-blue-200 dark:border-blue-800">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6 flex items-center gap-3">
          <i class="fas fa-comments text-blue-500"></i>
          Konsultasi Karir
        </h2>
        
        <div class="space-y-6">
          <div class="p-4 rounded-xl bg-white dark:bg-slate-800/50 border border-blue-200 dark:border-blue-800">
            <div class="flex items-center gap-3 mb-3">
              <div class="w-12 h-12 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center">
                <i class="fas fa-user-tie text-blue-600 dark:text-blue-400"></i>
              </div>
              <div>
                <h3 class="font-bold text-slate-900 dark:text-white">Konsultan Karir</h3>
                <p class="text-sm text-slate-600 dark:text-slate-400">Siti Aminah, S.Pd.</p>
              </div>
            </div>
            <p class="text-sm text-slate-700 dark:text-slate-300 mb-3">
              Siap membantu Anda dalam pemilihan karir, persiapan wawancara, dan pengembangan keterampilan.
            </p>
            <div class="flex gap-2">
              <a href="https://wa.me/6285712345678?text=Halo%20Bu%20Siti%2C%20saya%20ingin%20konsultasi%20tentang%20karir"
                 target="_blank"
                 class="flex-1 py-2 bg-green-100 dark:bg-green-900/30 text-green-600 dark:text-green-400 font-medium rounded-lg hover:bg-green-200 dark:hover:bg-green-900/50 transition-colors duration-300 text-center text-sm">
                <i class="fab fa-whatsapp mr-1"></i> WhatsApp
              </a>
              <button onclick="callNumber('085712345678')" class="flex-1 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400 font-medium rounded-lg hover:bg-blue-200 dark:hover:bg-blue-900/50 transition-colors duration-300 text-center text-sm">
                <i class="fas fa-phone mr-1"></i> Telepon
              </button>
            </div>
          </div>
          
          <div class="p-4 rounded-xl bg-white dark:bg-slate-800/50 border border-emerald-200 dark:border-emerald-800">
            <h3 class="font-bold text-slate-900 dark:text-white mb-2">Jadwal Konsultasi</h3>
            <div class="space-y-2">
              <div class="flex justify-between">
                <span class="text-sm text-slate-600 dark:text-slate-400">Senin - Kamis</span>
                <span class="text-sm font-medium text-slate-900 dark:text-white">09:00 - 15:00</span>
              </div>
              <div class="flex justify-between">
                <span class="text-sm text-slate-600 dark:text-slate-400">Jumat</span>
                <span class="text-sm font-medium text-slate-900 dark:text-white">09:00 - 12:00</span>
              </div>
            </div>
          </div>
          
          <div class="p-4 rounded-xl bg-white dark:bg-slate-800/50 border border-amber-200 dark:border-amber-800">
            <h3 class="font-bold text-slate-900 dark:text-white mb-2">Tips Mencari Kerja</h3>
            <ul class="space-y-2 text-sm text-slate-700 dark:text-slate-300">
              <li class="flex items-start gap-2">
                <i class="fas fa-check-circle text-emerald-500 mt-1"></i>
                <span>Siapkan CV yang menarik dan terupdate</span>
              </li>
              <li class="flex items-start gap-2">
                <i class="fas fa-check-circle text-emerald-500 mt-1"></i>
                <span>Ikuti pelatihan untuk meningkatkan skill</span>
              </li>
              <li class="flex items-start gap-2">
                <i class="fas fa-check-circle text-emerald-500 mt-1"></i>
                <span>Manfaatkan jaringan sosial dan komunitas</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- CTA Section -->
    <div class="bg-gradient-to-r from-blue-500 to-indigo-600 rounded-2xl shadow-xl p-8 text-white">
      <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-8">
        <div class="lg:w-2/3">
          <h2 class="text-2xl font-bold mb-4">Dapatkan Pekerjaan Impian Anda</h2>
          <p class="opacity-90 mb-6">
            Bergabunglah dengan ratusan warga Desa Bawang yang telah berhasil mendapatkan pekerjaan dan meningkatkan keterampilan melalui program kami.
          </p>
          <div class="flex flex-wrap gap-3">
            <button onclick="lihatSemuaLowongan()" class="px-5 py-2 bg-white/20 backdrop-blur-sm hover:bg-white/30 rounded-lg transition-colors duration-300 flex items-center gap-2">
              <i class="fas fa-list"></i>
              Lihat Semua Lowongan
            </button>
            <button onclick="downloadPanduan()" class="px-5 py-2 bg-white text-blue-600 hover:bg-blue-50 font-semibold rounded-lg transition-colors duration-300 flex items-center gap-2">
              <i class="fas fa-download"></i>
              Download Panduan
            </button>
          </div>
        </div>
        <div class="lg:w-1/3">
          <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6">
            <h3 class="font-bold mb-4">Statistik Sukses</h3>
            <div class="space-y-3">
              <div class="flex justify-between">
                <span class="opacity-90">Penempatan Kerja</span>
                <span class="font-bold">87%</span>
              </div>
              <div class="flex justify-between">
                <span class="opacity-90">Kepuasan Peserta</span>
                <span class="font-bold">92%</span>
              </div>
              <div class="flex justify-between">
                <span class="opacity-90">Program Aktif</span>
                <span class="font-bold">12 Program</span>
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
  // Fungsi untuk menambah lowongan
  function tambahLowongan() {
    showNotification('Membuka form tambah lowongan', 'info');
    // Scroll ke form pendaftaran
    const formSection = document.querySelector('.bg-white.dark\\:bg-slate-800.rounded-2xl.shadow-xl');
    if (formSection) {
      formSection.scrollIntoView({ 
        behavior: 'smooth',
        block: 'center'
      });
    }
  }

  // Fungsi untuk lihat pelatihan
  function lihatPelatihan() {
    const pelatihanSection = document.querySelector('.flex.items-center.justify-between.mb-8');
    if (pelatihanSection) {
      pelatihanSection.scrollIntoView({ 
        behavior: 'smooth',
        block: 'center'
      });
    }
    showNotification('Membuka daftar pelatihan', 'info');
  }

  // Fungsi untuk detail lowongan
  function detailLowongan(title) {
    showNotification(`Membuka detail lowongan: ${title}`, 'info');
    
    const modalHTML = `
      <div class="fixed inset-0 bg-black/50 flex items-center justify-center z-50 p-4">
        <div class="bg-white dark:bg-slate-800 rounded-2xl max-w-2xl w-full max-h-[80vh] overflow-auto">
          <div class="p-6 border-b border-slate-200 dark:border-slate-700">
            <div class="flex items-center justify-between">
              <h3 class="text-xl font-bold text-slate-900 dark:text-white">${title}</h3>
              <button onclick="closeModal()" class="text-slate-500 hover:text-slate-700 dark:hover:text-slate-300">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <div class="p-6 space-y-4">
            <div class="grid grid-cols-2 gap-4">
              <div>
                <p class="text-sm text-slate-500 dark:text-slate-400">Perusahaan</p>
                <p class="font-medium text-slate-900 dark:text-white">CV Sari Bumi</p>
              </div>
              <div>
                <p class="text-sm text-slate-500 dark:text-slate-400">Lokasi</p>
                <p class="font-medium text-slate-900 dark:text-white">Dusun 2, Desa Bawang</p>
              </div>
            </div>
            <div>
              <p class="text-sm text-slate-500 dark:text-slate-400 mb-2">Deskripsi Pekerjaan</p>
              <ul class="space-y-2 text-slate-700 dark:text-slate-300">
                <li class="flex items-start gap-2">
                  <i class="fas fa-circle text-xs text-blue-500 mt-1"></i>
                  <span>Mengelola administrasi dan keuangan UMKM</span>
                </li>
                <li class="flex items-start gap-2">
                  <i class="fas fa-circle text-xs text-blue-500 mt-1"></i>
                  <span>Membuat laporan bulanan penjualan</span>
                </li>
                <li class="flex items-start gap-2">
                  <i class="fas fa-circle text-xs text-blue-500 mt-1"></i>
                  <span>Mengelola inventaris barang</span>
                </li>
              </ul>
            </div>
            <div>
              <p class="text-sm text-slate-500 dark:text-slate-400 mb-2">Persyaratan</p>
              <ul class="space-y-2 text-slate-700 dark:text-slate-300">
                <li class="flex items-start gap-2">
                  <i class="fas fa-check text-emerald-500 text-xs mt-1"></i>
                  <span>Pendidikan minimal SMA/SMK</span>
                </li>
                <li class="flex items-start gap-2">
                  <i class="fas fa-check text-emerald-500 text-xs mt-1"></i>
                  <span>Menguasai Microsoft Office</span>
                </li>
                <li class="flex items-start gap-2">
                  <i class="fas fa-check text-emerald-500 text-xs mt-1"></i>
                  <span>Pengalaman 1-2 tahun di bidang administrasi</span>
                </li>
              </ul>
            </div>
            <div class="grid grid-cols-2 gap-4">
              <div>
                <p class="text-sm text-slate-500 dark:text-slate-400">Gaji</p>
                <p class="font-bold text-blue-600 dark:text-blue-400">Rp 2.8 - 3.2 Juta</p>
              </div>
              <div>
                <p class="text-sm text-slate-500 dark:text-slate-400">Batas Waktu</p>
                <p class="font-medium text-slate-900 dark:text-white">30 April 2024</p>
              </div>
            </div>
          </div>
          <div class="p-6 border-t border-slate-200 dark:border-slate-700">
            <div class="flex gap-3">
              <button onclick="closeModal()" class="flex-1 py-3 bg-slate-200 dark:bg-slate-700 text-slate-800 dark:text-slate-200 rounded-lg font-medium hover:bg-slate-300 dark:hover:bg-slate-600">
                Tutup
              </button>
              <button onclick="lamarSekarang('${title}')" class="flex-1 py-3 bg-gradient-to-r from-blue-500 to-indigo-600 text-white rounded-lg font-medium hover:shadow-lg">
                Lamar Sekarang
              </button>
            </div>
          </div>
        </div>
      </div>
    `;
    
    document.body.insertAdjacentHTML('beforeend', modalHTML);
  }

  // Fungsi untuk melamar
  function lamarSekarang(title) {
    showNotification(`Melamar posisi: ${title}`, 'info');
    // Arahkan ke form pendaftaran
    const form = document.querySelector('form');
    if (form) {
      form.scrollIntoView({ behavior: 'smooth', block: 'center' });
    }
  }

  // Fungsi untuk daftar padat karya
  function daftarPadatKarya(program) {
    showNotification(`Mendaftar program: ${program}`, 'info');
  }

  // Fungsi untuk daftar pelatihan
  function daftarPelatihan(pelatihan) {
    showNotification(`Mendaftar pelatihan: ${pelatihan}`, 'info');
  }

  // Fungsi untuk daftar magang
  function daftarMagang(posisi) {
    showNotification(`Mendaftar magang: ${posisi}`, 'info');
  }

  // Fungsi untuk lihat semua lowongan
  function lihatSemuaLowongan() {
    const lowonganSection = document.querySelector('.grid.grid-cols-1.md\\:grid-cols-2.lg\\:grid-cols-3.gap-6');
    if (lowonganSection) {
      lowonganSection.scrollIntoView({ 
        behavior: 'smooth',
        block: 'start'
      });
    }
    showNotification('Membuka semua lowongan', 'info');
  }

  // Fungsi untuk download panduan
  function downloadPanduan() {
    showNotification('Mengunduh panduan kerja...', 'info');
    setTimeout(() => {
      showNotification('Panduan berhasil diunduh!', 'success');
    }, 1500);
  }

  // Fungsi untuk panggilan telepon
  function callNumber(number) {
    if (confirm(`Apakah Anda ingin menghubungi ${number}?`)) {
      window.location.href = `tel:${number}`;
    }
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

  // Initialize animations
  document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.animate-fade-in').forEach(el => {
      el.style.opacity = '1';
      el.style.transform = 'translateY(0)';
    });
  });
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
<?php if ($halaman == 'kepemerintahan'): ?>
<div class="min-h-screen bg-gradient-to-b from-slate-50 via-blue-50/30 to-white dark:from-slate-900 dark:via-blue-900/10 dark:to-slate-800 py-8 relative overflow-hidden">
  <!-- Background Elements -->
  <div class="absolute top-0 right-0 w-64 h-64 bg-blue-300/10 dark:bg-blue-700/5 rounded-full blur-3xl -translate-y-32 translate-x-32"></div>
  <div class="absolute bottom-0 left-0 w-96 h-96 bg-green-300/10 dark:bg-green-700/5 rounded-full blur-3xl -translate-x-64 translate-y-64"></div>

  <div class="max-w-7xl mx-auto px-4 relative z-10">
    
    <!-- Enhanced Header -->
    <div class="mb-12 animate-fadeIn">
      <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-6 mb-6">
        <div class="flex items-center gap-4">
          <div class="relative">
            <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-blue-500 via-blue-600 to-blue-700 flex items-center justify-center shadow-lg shadow-blue-500/30">
              <i class="fas fa-landmark text-white text-2xl"></i>
            </div>
            <div class="absolute -top-1 -right-1 w-6 h-6 bg-yellow-400 rounded-full flex items-center justify-center">
              <i class="fas fa-star text-white text-xs"></i>
            </div>
          </div>
          <div>
            <h1 class="text-4xl lg:text-5xl font-bold text-slate-900 dark:text-white leading-tight">Pemerintahan Desa Bawang</h1>
            <p class="text-slate-600 dark:text-slate-300 mt-2 text-lg">Struktur pemerintahan dan aparatur desa yang melayani dengan hati ❤️</p>
          </div>
        </div>
        <div class="flex gap-3">
          <button class="px-4 py-2 bg-blue-500 hover:bg-blue-600 text-white rounded-lg transition-all duration-300 transform hover:-translate-y-1 shadow-lg shadow-blue-500/25">
            <i class="fas fa-download mr-2"></i> Download Struktur
          </button>
          <button class="px-4 py-2 bg-white dark:bg-slate-800 border border-blue-200 dark:border-blue-800 text-blue-600 dark:text-blue-300 rounded-lg transition-all duration-300 hover:bg-blue-50 dark:hover:bg-blue-900/20">
            <i class="fas fa-print mr-2"></i> Print
          </button>
        </div>
      </div>
      
      <!-- Stats Cards -->
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <div class="bg-gradient-to-r from-blue-500 to-blue-600 rounded-2xl p-6 text-white shadow-lg shadow-blue-500/25 transform transition-all duration-300 hover:scale-105">
          <div class="flex items-center justify-between">
            <div>
              <p class="text-blue-100 text-sm font-medium">Total Aparatur</p>
              <p class="text-3xl font-bold mt-2">28</p>
            </div>
            <div class="w-12 h-12 rounded-full bg-white/20 flex items-center justify-center">
              <i class="fas fa-users text-xl"></i>
            </div>
          </div>
        </div>
        
        <div class="bg-gradient-to-r from-green-500 to-green-600 rounded-2xl p-6 text-white shadow-lg shadow-green-500/25 transform transition-all duration-300 hover:scale-105">
          <div class="flex items-center justify-between">
            <div>
              <p class="text-green-100 text-sm font-medium">Kepala Dusun</p>
              <p class="text-3xl font-bold mt-2">4</p>
            </div>
            <div class="w-12 h-12 rounded-full bg-white/20 flex items-center justify-center">
              <i class="fas fa-home text-xl"></i>
            </div>
          </div>
        </div>
        
        <div class="bg-gradient-to-r from-purple-500 to-purple-600 rounded-2xl p-6 text-white shadow-lg shadow-purple-500/25 transform transition-all duration-300 hover:scale-105">
          <div class="flex items-center justify-between">
            <div>
              <p class="text-purple-100 text-sm font-medium">Masa Jabatan</p>
              <p class="text-3xl font-bold mt-2">6 Tahun</p>
            </div>
            <div class="w-12 h-12 rounded-full bg-white/20 flex items-center justify-center">
              <i class="fas fa-calendar-alt text-xl"></i>
            </div>
          </div>
        </div>
        
        <div class="bg-gradient-to-r from-yellow-500 to-yellow-600 rounded-2xl p-6 text-white shadow-lg shadow-yellow-500/25 transform transition-all duration-300 hover:scale-105">
          <div class="flex items-center justify-between">
            <div>
              <p class="text-yellow-100 text-sm font-medium">KK Terlayani</p>
              <p class="text-3xl font-bold mt-2">1,155</p>
            </div>
            <div class="w-12 h-12 rounded-full bg-white/20 flex items-center justify-center">
              <i class="fas fa-user-check text-xl"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Enhanced Struktur Organisasi -->
    <div class="mb-16">
      <div class="flex items-center justify-between mb-8">
        <div>
          <h2 class="text-3xl font-bold text-slate-900 dark:text-white">Struktur Organisasi Pemerintahan Desa</h2>
          <p class="text-slate-600 dark:text-slate-300 mt-2">Diagram interaktif struktur hierarki pemerintahan desa</p>
        </div>
        <button onclick="toggleDiagramView()" class="px-4 py-2 bg-white dark:bg-slate-800 rounded-lg border border-slate-200 dark:border-slate-700 hover:bg-slate-50 dark:hover:bg-slate-700 transition-colors duration-300">
          <i class="fas fa-sync-alt mr-2"></i> Ganti Tampilan
        </button>
      </div>
      
      <div id="diagramContainer" class="relative">
        <!-- Diagram Tree View -->
        <div class="bg-gradient-to-br from-white to-slate-50 dark:from-slate-800 dark:to-slate-900 rounded-3xl shadow-2xl p-8 border border-slate-100 dark:border-slate-700">
          <!-- Connecting Lines -->
          <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-4 h-64 bg-gradient-to-b from-blue-400 to-transparent opacity-20"></div>
          
          <div class="flex flex-col items-center space-y-8">
            <!-- Level 1: Kepala Desa -->
            <div class="relative group">
              <div class="absolute -top-4 left-1/2 transform -translate-x-1/2 bg-blue-500 text-white text-xs px-3 py-1 rounded-full opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                Pimpinan Tertinggi
              </div>
              <div class="relative bg-gradient-to-br from-blue-600 to-blue-700 p-8 rounded-3xl shadow-2xl shadow-blue-500/30 text-white text-center w-80 transform transition-all duration-500 group-hover:scale-105 group-hover:shadow-blue-500/50">
                <div class="absolute -top-3 -right-3 w-12 h-12 bg-yellow-400 rounded-full flex items-center justify-center animate-pulse">
                  <i class="fas fa-crown text-white"></i>
                </div>
                <div class="w-28 h-28 rounded-full overflow-hidden border-4 border-white/40 mx-auto mb-4 ring-4 ring-blue-500/50">
                  <img src="https://api.dicebear.com/7.x/avataaars/svg?seed=kepala-desa" 
                       alt="Kepala Desa" class="w-full h-full object-cover">
                </div>
                <h3 class="text-2xl font-bold">KEPALA DESA</h3>
                <p class="text-blue-100 text-lg">Drs. H. Sutrisno</p>
                <div class="mt-4 pt-4 border-t border-blue-400/30">
                  <p class="text-sm text-blue-100/80"><i class="fas fa-calendar mr-2"></i>Periode: 2021-2027</p>
                </div>
              </div>
            </div>

            <!-- Level 2: Sekretaris -->
            <div class="grid grid-cols-1 gap-8">
              <div class="relative group">
                <div class="bg-gradient-to-r from-emerald-500 to-emerald-600 p-6 rounded-2xl shadow-lg shadow-emerald-500/25 text-white text-center w-64 transform transition-all duration-500 group-hover:scale-105 group-hover:shadow-emerald-500/40">
                  <div class="w-20 h-20 rounded-full overflow-hidden border-4 border-white/30 mx-auto mb-3">
                    <img src="https://api.dicebear.com/7.x/avataaars/svg?seed=sekretaris" 
                         alt="Sekretaris Desa" class="w-full h-full object-cover">
                  </div>
                  <h4 class="font-bold text-lg">SEKRETARIS DESA</h4>
                  <p class="text-emerald-100">Siti Aminah, S.Sos</p>
                  <div class="mt-3">
                    <span class="text-xs bg-white/20 px-2 py-1 rounded-full">Koordinator</span>
                  </div>
                </div>
              </div>
            </div>

            <!-- Level 3: Kepala Seksi -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 w-full max-w-4xl">
              <!-- Kasi Pemerintahan -->
              <div class="group relative">
                <div class="bg-gradient-to-br from-indigo-500 to-purple-600 p-6 rounded-xl shadow-lg shadow-indigo-500/25 text-white text-center h-full transform transition-all duration-500 group-hover:scale-105 group-hover:shadow-indigo-500/40">
                  <div class="w-16 h-16 rounded-full overflow-hidden border-4 border-white/30 mx-auto mb-3">
                    <img src="https://api.dicebear.com/7.x/avataaars/svg?seed=kasi-pemerintahan" 
                         alt="Kasi Pemerintahan" class="w-full h-full object-cover">
                  </div>
                  <h5 class="font-bold">KASI PEMERINTAHAN</h5>
                  <p class="text-indigo-100 text-sm mb-3">Budi Santoso, S.E.</p>
                  <div class="mt-4 pt-3 border-t border-white/20">
                    <span class="text-xs bg-white/20 px-2 py-1 rounded-full">Adminduk & KTP</span>
                  </div>
                </div>
              </div>
              
              <!-- Kasi Ekonomi -->
              <div class="group relative">
                <div class="bg-gradient-to-br from-amber-500 to-orange-600 p-6 rounded-xl shadow-lg shadow-amber-500/25 text-white text-center h-full transform transition-all duration-500 group-hover:scale-105 group-hover:shadow-amber-500/40">
                  <div class="w-16 h-16 rounded-full overflow-hidden border-4 border-white/30 mx-auto mb-3">
                    <img src="https://api.dicebear.com/7.x/avataaars/svg?seed=kasi-ekonomi" 
                         alt="Kasi Ekonomi" class="w-full h-full object-cover">
                  </div>
                  <h5 class="font-bold">KASI EKONOMI</h5>
                  <p class="text-amber-100 text-sm mb-3">Rina Wulandari, S.E.</p>
                  <div class="mt-4 pt-3 border-t border-white/20">
                    <span class="text-xs bg-white/20 px-2 py-1 rounded-full">UMKM & Infrastruktur</span>
                  </div>
                </div>
              </div>
              
              <!-- Kasi Pelayanan -->
              <div class="group relative">
                <div class="bg-gradient-to-br from-rose-500 to-pink-600 p-6 rounded-xl shadow-lg shadow-rose-500/25 text-white text-center h-full transform transition-all duration-500 group-hover:scale-105 group-hover:shadow-rose-500/40">
                  <div class="w-16 h-16 rounded-full overflow-hidden border-4 border-white/30 mx-auto mb-3">
                    <img src="https://api.dicebear.com/7.x/avataaars/svg?seed=kasi-pelayanan" 
                         alt="Kasi Pelayanan" class="w-full h-full object-cover">
                  </div>
                  <h5 class="font-bold">KASI PELAYANAN</h5>
                  <p class="text-rose-100 text-sm mb-3">Ahmad Hidayat, S.Sos</p>
                  <div class="mt-4 pt-3 border-t border-white/20">
                    <span class="text-xs bg-white/20 px-2 py-1 rounded-full">Layanan Publik</span>
                  </div>
                </div>
              </div>
            </div>

            <!-- Level 4: Kepala Dusun -->
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 w-full max-w-5xl">
              <?php 
              $dusun = [
                  ['nama' => 'Wahyudi', 'jabatan' => 'KADUS I', 'wilayah' => 'Krajan', 'kk' => 312, 'color' => 'blue'],
                  ['nama' => 'Sukarman', 'jabatan' => 'KADUS II', 'wilayah' => 'Ngemplak', 'kk' => 278, 'color' => 'emerald'],
                  ['nama' => 'Slamet', 'jabatan' => 'KADUS III', 'wilayah' => 'Karangasem', 'kk' => 245, 'color' => 'purple'],
                  ['nama' => 'Bambang', 'jabatan' => 'KADUS IV', 'wilayah' => 'Kalirejo', 'kk' => 320, 'color' => 'amber']
              ];
              foreach ($dusun as $index => $d): ?>
              <div class="group relative">
                <div class="bg-gradient-to-br from-<?= $d['color'] ?>-400 to-<?= $d['color'] ?>-500 p-4 rounded-lg shadow text-white text-center transform transition-all duration-300 group-hover:scale-105 group-hover:shadow-lg">
                  <div class="absolute -top-2 -right-2 w-6 h-6 bg-white/90 rounded-full flex items-center justify-center text-<?= $d['color'] ?>-500 text-xs font-bold">
                    <?= $index + 1 ?>
                  </div>
                  <h6 class="font-bold text-sm"><?= $d['jabatan'] ?></h6>
                  <p class="text-xs text-<?= $d['color'] ?>-100 mb-1"><?= $d['nama'] ?></p>
                  <div class="text-xs mt-2 space-y-1">
                    <p>📍 <?= $d['wilayah'] ?></p>
                    <p>👥 <?= $d['kk'] ?> KK</p>
                  </div>
                </div>
              </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Detail Aparat dengan Tabs -->
    <div class="mb-16">
      <div class="flex flex-col lg:flex-row gap-8">
        <!-- Tab Navigation -->
        <div class="lg:w-1/4">
          <div class="sticky top-8">
            <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">Detail Aparatur</h3>
            <div class="space-y-2">
              <button onclick="showTab('pimpinan')" class="tab-button active w-full text-left p-4 rounded-xl bg-gradient-to-r from-blue-500 to-blue-600 text-white shadow-lg">
                <i class="fas fa-user-tie mr-3"></i> Pimpinan Desa
              </button>
              <button onclick="showTab('kasi')" class="tab-button w-full text-left p-4 rounded-xl bg-white dark:bg-slate-800 hover:bg-slate-50 dark:hover:bg-slate-700 transition-colors">
                <i class="fas fa-users-cog mr-3"></i> Kepala Seksi
              </button>
              <button onclick="showTab('kadus')" class="tab-button w-full text-left p-4 rounded-xl bg-white dark:bg-slate-800 hover:bg-slate-50 dark:hover:bg-slate-700 transition-colors">
                <i class="fas fa-home mr-3"></i> Kepala Dusun
              </button>
              <button onclick="showTab('staf')" class="tab-button w-full text-left p-4 rounded-xl bg-white dark:bg-slate-800 hover:bg-slate-50 dark:hover:bg-slate-700 transition-colors">
                <i class="fas fa-users mr-3"></i> Staf Pelaksana
              </button>
            </div>
          </div>
        </div>

        <!-- Tab Content -->
        <div class="lg:w-3/4">
          <!-- Pimpinan Tab -->
          <div id="pimpinan-tab" class="tab-content">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
              <!-- Kepala Desa Card -->
              <div class="bg-gradient-to-br from-blue-50 to-white dark:from-blue-900/20 dark:to-slate-800 rounded-2xl shadow-xl border border-blue-100 dark:border-blue-800 p-8 transform transition-all duration-300 hover:shadow-2xl hover:-translate-y-1">
                <div class="flex flex-col lg:flex-row items-center lg:items-start gap-6">
                  <div class="relative">
                    <div class="w-32 h-32 rounded-full overflow-hidden border-4 border-white shadow-lg">
                      <img src="https://api.dicebear.com/7.x/avataaars/svg?seed=kepala-desa" 
                           alt="Kepala Desa" class="w-full h-full object-cover">
                    </div>
                    <div class="absolute bottom-2 right-2 w-10 h-10 bg-blue-500 rounded-full flex items-center justify-center border-2 border-white">
                      <i class="fas fa-check text-white text-sm"></i>
                    </div>
                  </div>
                  <div class="flex-1">
                    <div class="flex items-start justify-between">
                      <div>
                        <h3 class="text-2xl font-bold text-slate-900 dark:text-white">Kepala Desa</h3>
                        <p class="text-blue-600 dark:text-blue-300 text-lg font-semibold">Drs. H. Sutrisno</p>
                        <div class="flex items-center gap-2 mt-2">
                          <span class="text-xs bg-blue-100 dark:bg-blue-800 text-blue-600 dark:text-blue-300 px-2 py-1 rounded-full">Pimpinan</span>
                          <span class="text-xs bg-green-100 dark:bg-green-800 text-green-600 dark:text-green-300 px-2 py-1 rounded-full">Aktif</span>
                        </div>
                      </div>
                      <button class="w-10 h-10 rounded-full bg-blue-100 dark:bg-blue-800 flex items-center justify-center text-blue-600 dark:text-blue-300 hover:bg-blue-200 dark:hover:bg-blue-700 transition-colors">
                        <i class="fas fa-phone"></i>
                      </button>
                    </div>
                    <div class="mt-6 space-y-3">
                      <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-lg bg-blue-100 dark:bg-blue-800 flex items-center justify-center">
                          <i class="fas fa-calendar-alt text-blue-600 dark:text-blue-300"></i>
                        </div>
                        <div>
                          <p class="text-sm text-slate-600 dark:text-slate-300">Periode Jabatan</p>
                          <p class="font-medium">2021 - 2027</p>
                        </div>
                      </div>
                      <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-lg bg-blue-100 dark:bg-blue-800 flex items-center justify-center">
                          <i class="fas fa-tasks text-blue-600 dark:text-blue-300"></i>
                        </div>
                        <div>
                          <p class="text-sm text-slate-600 dark:text-slate-300">Tugas Pokok</p>
                          <p class="font-medium">Memimpin penyelenggaraan pemerintahan</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Sekretaris Desa Card -->
              <div class="bg-gradient-to-br from-green-50 to-white dark:from-green-900/20 dark:to-slate-800 rounded-2xl shadow-xl border border-green-100 dark:border-green-800 p-8 transform transition-all duration-300 hover:shadow-2xl hover:-translate-y-1">
                <div class="flex flex-col lg:flex-row items-center lg:items-start gap-6">
                  <div class="relative">
                    <div class="w-32 h-32 rounded-full overflow-hidden border-4 border-white shadow-lg">
                      <img src="https://api.dicebear.com/7.x/avataaars/svg?seed=sekretaris" 
                           alt="Sekretaris Desa" class="w-full h-full object-cover">
                    </div>
                    <div class="absolute bottom-2 right-2 w-10 h-10 bg-green-500 rounded-full flex items-center justify-center border-2 border-white">
                      <i class="fas fa-check text-white text-sm"></i>
                    </div>
                  </div>
                  <div class="flex-1">
                    <div class="flex items-start justify-between">
                      <div>
                        <h3 class="text-2xl font-bold text-slate-900 dark:text-white">Sekretaris Desa</h3>
                        <p class="text-green-600 dark:text-green-300 text-lg font-semibold">Siti Aminah, S.Sos</p>
                        <div class="flex items-center gap-2 mt-2">
                          <span class="text-xs bg-green-100 dark:bg-green-800 text-green-600 dark:text-green-300 px-2 py-1 rounded-full">Sekretaris</span>
                          <span class="text-xs bg-green-100 dark:bg-green-800 text-green-600 dark:text-green-300 px-2 py-1 rounded-full">Aktif</span>
                        </div>
                      </div>
                      <button class="w-10 h-10 rounded-full bg-green-100 dark:bg-green-800 flex items-center justify-center text-green-600 dark:text-green-300 hover:bg-green-200 dark:hover:bg-green-700 transition-colors">
                        <i class="fas fa-phone"></i>
                      </button>
                    </div>
                    <div class="mt-6 space-y-3">
                      <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-lg bg-green-100 dark:bg-green-800 flex items-center justify-center">
                          <i class="fas fa-file-alt text-green-600 dark:text-green-300"></i>
                        </div>
                        <div>
                          <p class="text-sm text-slate-600 dark:text-slate-300">Tugas Pokok</p>
                          <p class="font-medium">Mengkoordinasi administrasi desa</p>
                        </div>
                      </div>
                      <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-lg bg-green-100 dark:bg-green-800 flex items-center justify-center">
                          <i class="fas fa-chart-line text-green-600 dark:text-green-300"></i>
                        </div>
                        <div>
                          <p class="text-sm text-slate-600 dark:text-slate-300">Bidang</p>
                          <p class="font-medium">Keuangan & Pelaporan</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Kasi Tab (Hidden by default) -->
          <div id="kasi-tab" class="tab-content hidden">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
              <?php 
              $kasi = [
                  ['nama' => 'Budi Santoso, S.E.', 'jabatan' => 'Kasi Pemerintahan', 'bidang' => 'Adminduk & KTP', 'color' => 'purple', 'icon' => 'fa-user-check'],
                  ['nama' => 'Rina Wulandari, S.E.', 'jabatan' => 'Kasi Ekonomi', 'bidang' => 'UMKM & Infrastruktur', 'color' => 'amber', 'icon' => 'fa-chart-line'],
                  ['nama' => 'Ahmad Hidayat, S.Sos', 'jabatan' => 'Kasi Pelayanan', 'bidang' => 'Layanan Publik', 'color' => 'rose', 'icon' => 'fa-handshake'],
                  ['nama' => 'Sri Handayani, S.Sos', 'jabatan' => 'Kasi Kesra', 'bidang' => 'Sosial & Kesehatan', 'color' => 'blue', 'icon' => 'fa-heart']
              ];
              foreach ($kasi as $k): ?>
              <div class="bg-white dark:bg-slate-800 rounded-xl shadow-lg border border-slate-200 dark:border-slate-700 p-6 transform transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
                <div class="flex items-start justify-between mb-4">
                  <div class="flex items-center gap-4">
                    <div class="w-12 h-12 rounded-xl bg-gradient-to-r from-<?= $k['color'] ?>-500 to-<?= $k['color'] ?>-600 flex items-center justify-center">
                      <i class="fas <?= $k['icon'] ?> text-white"></i>
                    </div>
                    <div>
                      <h4 class="font-bold text-slate-900 dark:text-white"><?= $k['jabatan'] ?></h4>
                      <p class="text-<?= $k['color'] ?>-600 dark:text-<?= $k['color'] ?>-300 text-sm"><?= $k['nama'] ?></p>
                    </div>
                  </div>
                  <span class="text-xs bg-<?= $k['color'] ?>-100 dark:bg-<?= $k['color'] ?>-800 text-<?= $k['color'] ?>-600 dark:text-<?= $k['color'] ?>-300 px-3 py-1 rounded-full"><?= $k['bidang'] ?></span>
                </div>
                <p class="text-slate-600 dark:text-slate-300 text-sm">Melaksanakan tugas teknis sesuai bidang dan membantu masyarakat dalam layanan terkait.</p>
                <div class="mt-4 pt-4 border-t border-slate-100 dark:border-slate-700">
                  <button class="text-<?= $k['color'] ?>-600 dark:text-<?= $k['color'] ?>-300 text-sm font-medium hover:text-<?= $k['color'] ?>-700 dark:hover:text-<?= $k['color'] ?>-200 transition-colors">
                    <i class="fas fa-info-circle mr-1"></i> Detail Tugas
                  </button>
                </div>
              </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Layanan & Kontak Enhanced -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-16">
      <!-- Jam Layanan -->
      <div class="lg:col-span-2 bg-gradient-to-br from-white to-slate-50 dark:from-slate-800 dark:to-slate-900 rounded-3xl shadow-xl p-8 border border-slate-200 dark:border-slate-700">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6">Jam Pelayanan Publik ⏰</h2>
        <div class="space-y-4">
          <?php 
          $jamLayanan = [
              ['hari' => 'Senin - Kamis', 'jam' => '08:00 - 15:00', 'status' => 'Buka', 'color' => 'green', 'icon' => 'fa-check-circle'],
              ['hari' => 'Jumat', 'jam' => '08:00 - 11:30', 'status' => 'Buka', 'color' => 'blue', 'icon' => 'fa-check-circle'],
              ['hari' => 'Sabtu', 'jam' => '08:00 - 13:00', 'status' => 'Buka', 'color' => 'yellow', 'icon' => 'fa-check-circle'],
              ['hari' => 'Minggu & Tanggal Merah', 'jam' => '00:00 - 23:59', 'status' => 'Tutup', 'color' => 'red', 'icon' => 'fa-times-circle']
          ];
          foreach ($jamLayanan as $jam): ?>
          <div class="flex items-center justify-between p-4 rounded-xl bg-white dark:bg-slate-800/50 border border-slate-100 dark:border-slate-700 transition-all duration-300 hover:scale-[1.02] hover:shadow-md">
            <div class="flex items-center gap-4">
              <div class="w-12 h-12 rounded-lg bg-<?= $jam['color'] ?>-100 dark:bg-<?= $jam['color'] ?>-900/30 flex items-center justify-center">
                <i class="fas <?= $jam['icon'] ?> text-<?= $jam['color'] ?>-600 dark:text-<?= $jam['color'] ?>-300"></i>
              </div>
              <div>
                <p class="font-medium text-slate-900 dark:text-white"><?= $jam['hari'] ?></p>
                <p class="text-sm text-slate-600 dark:text-slate-300">Jam Operasional</p>
              </div>
            </div>
            <div class="text-right">
              <p class="font-bold text-lg text-slate-900 dark:text-white"><?= $jam['jam'] ?></p>
              <span class="text-xs bg-<?= $jam['color'] ?>-100 dark:bg-<?= $jam['color'] ?>-900 text-<?= $jam['color'] ?>-600 dark:text-<?= $jam['color'] ?>-300 px-3 py-1 rounded-full"><?= $jam['status'] ?></span>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>

      <!-- Kontak Darurat -->
      <div class="bg-gradient-to-br from-red-50 to-white dark:from-red-900/20 dark:to-slate-800 rounded-3xl shadow-xl p-8 border border-red-100 dark:border-red-800">
        <div class="flex items-center gap-3 mb-6">
          <div class="w-12 h-12 rounded-xl bg-gradient-to-r from-red-500 to-red-600 flex items-center justify-center">
            <i class="fas fa-phone-alt text-white text-xl"></i>
          </div>
          <div>
            <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Kontak Darurat 🚨</h2>
            <p class="text-slate-600 dark:text-slate-300 text-sm">Hubungi dalam keadaan darurat</p>
          </div>
        </div>
        
        <div class="space-y-4">
          <div class="p-4 rounded-xl bg-white dark:bg-slate-800 border border-red-200 dark:border-red-700">
            <div class="flex items-center justify-between mb-2">
              <span class="font-medium text-slate-900 dark:text-white">Posko Darurat Desa</span>
              <span class="text-xs bg-red-100 dark:bg-red-800 text-red-600 dark:text-red-300 px-2 py-1 rounded-full">24 Jam</span>
            </div>
            <p class="text-2xl font-bold text-red-600 dark:text-red-400">(0286) 112233</p>
          </div>
          
          <div class="p-4 rounded-xl bg-white dark:bg-slate-800 border border-red-200 dark:border-red-700">
            <div class="flex items-center justify-between mb-2">
              <span class="font-medium text-slate-900 dark:text-white">Kepala Desa</span>
              <span class="text-xs bg-blue-100 dark:bg-blue-800 text-blue-600 dark:text-blue-300 px-2 py-1 rounded-full">Darurat</span>
            </div>
            <p class="text-xl font-bold text-slate-900 dark:text-white">0811-2233-4455</p>
          </div>
          
          <div class="mt-6">
            <button class="w-full py-3 bg-gradient-to-r from-red-500 to-red-600 text-white rounded-xl font-medium hover:from-red-600 hover:to-red-700 transition-all duration-300 transform hover:-translate-y-1 shadow-lg shadow-red-500/25">
              <i class="fas fa-phone-volume mr-2"></i> Hubungi Sekarang
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- Galeri Aparatur (Carousel) -->
    <div class="mb-16">
      <div class="flex items-center justify-between mb-8">
        <div>
          <h2 class="text-3xl font-bold text-slate-900 dark:text-white">Galeri Aparatur Desa 📸</h2>
          <p class="text-slate-600 dark:text-slate-300 mt-2">Foto-foto kegiatan aparatur desa</p>
        </div>
        <div class="flex gap-2">
          <button class="w-10 h-10 rounded-full bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 flex items-center justify-center hover:bg-slate-50 dark:hover:bg-slate-700">
            <i class="fas fa-chevron-left"></i>
          </button>
          <button class="w-10 h-10 rounded-full bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 flex items-center justify-center hover:bg-slate-50 dark:hover:bg-slate-700">
            <i class="fas fa-chevron-right"></i>
          </button>
        </div>
      </div>
      
      <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
        <?php 
        $galeri = [
            ['title' => 'Rapat Koordinasi', 'desc' => 'Bulanan', 'color' => 'blue'],
            ['title' => 'Pelayanan Publik', 'desc' => 'Harian', 'color' => 'green'],
            ['title' => 'Pembinaan UMKM', 'desc' => 'Mingguan', 'color' => 'amber'],
            ['title' => 'Kunjungan Warga', 'desc' => 'Rutin', 'color' => 'purple']
        ];
        foreach ($galeri as $item): ?>
        <div class="group relative">
          <div class="aspect-square rounded-2xl bg-gradient-to-br from-<?= $item['color'] ?>-500 to-<?= $item['color'] ?>-600 overflow-hidden shadow-lg transform transition-all duration-500 group-hover:scale-105 group-hover:shadow-xl">
            <div class="w-full h-full flex flex-col items-center justify-center text-white p-6">
              <div class="w-16 h-16 rounded-full bg-white/20 flex items-center justify-center mb-4">
                <i class="fas fa-camera text-2xl"></i>
              </div>
              <h3 class="text-lg font-bold text-center"><?= $item['title'] ?></h3>
              <p class="text-sm text-<?= $item['color'] ?>-100 mt-2"><?= $item['desc'] ?></p>
            </div>
          </div>
          <div class="absolute inset-0 rounded-2xl border-2 border-transparent group-hover:border-<?= $item['color'] ?>-400 transition-all duration-300"></div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>

  </div>
</div>

<!-- JavaScript untuk Interaksi -->
<script>
// Tab Navigation
function showTab(tabName) {
  // Remove active class from all tab buttons
  document.querySelectorAll('.tab-button').forEach(btn => {
    btn.classList.remove('active', 'bg-gradient-to-r', 'from-blue-500', 'to-blue-600', 'text-white', 'shadow-lg');
    btn.classList.add('bg-white', 'dark:bg-slate-800');
  });
  
  // Add active class to clicked button
  const activeBtn = event.currentTarget;
  activeBtn.classList.add('active', 'bg-gradient-to-r', 'from-blue-500', 'to-blue-600', 'text-white', 'shadow-lg');
  activeBtn.classList.remove('bg-white', 'dark:bg-slate-800');
  
  // Hide all tab contents
  document.querySelectorAll('.tab-content').forEach(content => {
    content.classList.add('hidden');
  });
  
  // Show selected tab content
  document.getElementById(tabName + '-tab').classList.remove('hidden');
}

// Diagram View Toggle
function toggleDiagramView() {
  const container = document.getElementById('diagramContainer');
  container.classList.toggle('grid-view');
  
  const button = event.currentTarget;
  if (container.classList.contains('grid-view')) {
    button.innerHTML = '<i class="fas fa-sitemap mr-2"></i> Tampilan Hierarki';
  } else {
    button.innerHTML = '<i class="fas fa-th-large mr-2"></i> Tampilan Grid';
  }
}

// Initialize first tab
document.addEventListener('DOMContentLoaded', function() {
  showTab('pimpinan');
});

// Hover effects for cards
document.querySelectorAll('.group').forEach(card => {
  card.addEventListener('mouseenter', function() {
    this.style.zIndex = '10';
  });
  card.addEventListener('mouseleave', function() {
    this.style.zIndex = '1';
  });
});
</script>

<style>
@keyframes fadeIn {
  from { opacity: 0; transform: translateY(20px); }
  to { opacity: 1; transform: translateY(0); }
}

.animate-fadeIn {
  animation: fadeIn 0.6s ease-out;
}

.tab-content {
  animation: fadeIn 0.3s ease-out;
}

.group:hover .group-hover\:scale-105 {
  transform: scale(1.05);
}

/* Custom scrollbar */
::-webkit-scrollbar {
  width: 8px;
}

::-webkit-scrollbar-track {
  background: #f1f1f1;
  border-radius: 4px;
}

::-webkit-scrollbar-thumb {
  background: #888;
  border-radius: 4px;
}

::-webkit-scrollbar-thumb:hover {
  background: #555;
}
</style>
<?php endif; ?>
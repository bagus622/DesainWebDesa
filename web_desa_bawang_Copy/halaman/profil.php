<?php if ($halaman == 'profil'): ?>
<div class="min-h-screen bg-gradient-to-br from-slate-50 via-white to-emerald-50/30 dark:from-slate-900 dark:via-slate-800 dark:to-emerald-900/10 py-8">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    
    <!-- Header dengan Animasi -->
    <div class="mb-12 animate-fade-in">
      <div class="flex flex-col md:flex-row md:items-center justify-between gap-6 mb-8">
        <div class="flex items-center gap-4">
          <div class="relative">
            <div class="w-16 h-16 rounded-2xl bg-gradient-to-r from-emerald-500 via-green-500 to-teal-500 flex items-center justify-center shadow-xl shadow-emerald-500/20 animate-pulse-slow">
              <i class="fas fa-landmark text-white text-2xl"></i>
            </div>
            <div class="absolute -top-2 -right-2 w-8 h-8 bg-amber-400 rounded-full border-4 border-white dark:border-slate-800 flex items-center justify-center">
              <i class="fas fa-star text-white text-xs"></i>
            </div>
          </div>
          <div>
            <h1 class="text-4xl md:text-5xl font-bold text-slate-900 dark:text-white bg-gradient-to-r from-emerald-600 to-teal-600 bg-clip-text text-transparent">Profil Desa Bawang</h1>
            <p class="text-slate-600 dark:text-slate-300 mt-3 max-w-2xl">
              Mengenal lebih dekat sejarah, struktur pemerintahan, dan perkembangan Desa Bawang.
            </p>
          </div>
        </div>
        <div class="flex gap-3">
          <button class="px-6 py-3 bg-gradient-to-r from-emerald-500 to-teal-600 text-white font-semibold rounded-xl shadow-lg shadow-emerald-500/30 hover:shadow-xl hover:shadow-emerald-500/40 transition-all duration-300 transform hover:-translate-y-0.5 flex items-center gap-2">
            <i class="fas fa-download"></i> Download Profil
          </button>
        </div>
      </div>
      
      <!-- Quick Stats -->
      <div class="flex flex-wrap items-center gap-6 text-sm text-slate-600 dark:text-slate-400">
        <div class="flex items-center gap-2">
          <span class="w-2 h-2 bg-emerald-500 rounded-full animate-pulse"></span>
          <span>Kabupaten: Banjarnegara</span>
        </div>
        <div class="flex items-center gap-2">
          <i class="fas fa-map-marker-alt text-xs"></i>
          <span>Kecamatan: Bawang</span>
        </div>
        <div class="flex items-center gap-2">
          <i class="fas fa-calendar-alt text-xs"></i>
          <span>Berdiri sejak: 1850</span>
        </div>
      </div>
    </div>

    <!-- Informasi Umum Desa -->
    <div class="mb-12">
      <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Visi & Misi -->
        <div class="lg:col-span-2 bg-white dark:bg-slate-800 rounded-2xl shadow-xl p-8 border border-slate-100 dark:border-slate-700">
          <div class="flex items-center gap-4 mb-8">
            <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-blue-500 to-indigo-500 flex items-center justify-center shadow-lg shadow-blue-500/30">
              <i class="fas fa-bullseye text-white"></i>
            </div>
            <div>
              <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Visi & Misi Desa</h2>
              <p class="text-slate-600 dark:text-slate-300">Arah pembangunan Desa Bawang</p>
            </div>
          </div>
          
          <div class="space-y-6">
            <!-- Visi -->
            <div class="p-6 rounded-xl bg-gradient-to-r from-blue-50 to-indigo-50 dark:from-blue-900/10 dark:to-indigo-900/10 border border-blue-200 dark:border-blue-800">
              <div class="flex items-center gap-3 mb-4">
                <div class="w-10 h-10 rounded-lg bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center">
                  <i class="fas fa-eye text-blue-600 dark:text-blue-400"></i>
                </div>
                <h3 class="text-xl font-bold text-slate-900 dark:text-white">Visi Desa</h3>
              </div>
              <p class="text-slate-700 dark:text-slate-300 italic">
                "Terwujudnya Desa Bawang yang Mandiri, Sejahtera, dan Berbudaya melalui Pemberdayaan Masyarakat Berbasis Potensi Lokal"
              </p>
            </div>
            
            <!-- Misi -->
            <div class="p-6 rounded-xl bg-gradient-to-r from-emerald-50 to-teal-50 dark:from-emerald-900/10 dark:to-teal-900/10 border border-emerald-200 dark:border-emerald-800">
              <div class="flex items-center gap-3 mb-4">
                <div class="w-10 h-10 rounded-lg bg-emerald-100 dark:bg-emerald-900/30 flex items-center justify-center">
                  <i class="fas fa-tasks text-emerald-600 dark:text-emerald-400"></i>
                </div>
                <h3 class="text-xl font-bold text-slate-900 dark:text-white">Misi Desa</h3>
              </div>
              <ul class="space-y-3">
                <li class="flex items-start gap-3">
                  <div class="w-6 h-6 rounded-full bg-emerald-100 dark:bg-emerald-900/30 flex items-center justify-center mt-1 flex-shrink-0">
                    <span class="text-emerald-600 dark:text-emerald-400 font-bold text-sm">1</span>
                  </div>
                  <p class="text-slate-700 dark:text-slate-300">Meningkatkan kualitas pelayanan publik yang transparan dan akuntabel</p>
                </li>
                <li class="flex items-start gap-3">
                  <div class="w-6 h-6 rounded-full bg-emerald-100 dark:bg-emerald-900/30 flex items-center justify-center mt-1 flex-shrink-0">
                    <span class="text-emerald-600 dark:text-emerald-400 font-bold text-sm">2</span>
                  </div>
                  <p class="text-slate-700 dark:text-slate-300">Mengembangkan ekonomi kerakyatan berbasis potensi lokal</p>
                </li>
                <li class="flex items-start gap-3">
                  <div class="w-6 h-6 rounded-full bg-emerald-100 dark:bg-emerald-900/30 flex items-center justify-center mt-1 flex-shrink-0">
                    <span class="text-emerald-600 dark:text-emerald-400 font-bold text-sm">3</span>
                  </div>
                  <p class="text-slate-700 dark:text-slate-300">Melestarikan budaya dan kearifan lokal sebagai identitas desa</p>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Informasi Pokok -->
        <div class="bg-white dark:bg-slate-800 rounded-2xl shadow-xl p-8 border border-slate-100 dark:border-slate-700">
          <div class="flex items-center gap-4 mb-8">
            <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-purple-500 to-violet-500 flex items-center justify-center shadow-lg shadow-purple-500/30">
              <i class="fas fa-info-circle text-white"></i>
            </div>
            <div>
              <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Informasi Pokok</h2>
              <p class="text-slate-600 dark:text-slate-300">Data dasar Desa Bawang</p>
            </div>
          </div>
          
          <div class="space-y-4">
            <?php 
            $basicInfo = [
              ['icon' => 'map-marked-alt', 'label' => 'Luas Wilayah', 'value' => '12,5 km²', 'color' => 'emerald'],
              ['icon' => 'users', 'label' => 'Jumlah Penduduk', 'value' => '5.234 Jiwa', 'color' => 'blue'],
              ['icon' => 'home', 'label' => 'Jumlah RW', 'value' => '4 RW', 'color' => 'purple'],
              ['icon' => 'house-user', 'label' => 'Jumlah RT', 'value' => '16 RT', 'color' => 'amber'],
              ['icon' => 'mountain', 'label' => 'Ketinggian', 'value' => '450 mdpl', 'color' => 'green'],
              ['icon' => 'sun', 'label' => 'Iklim', 'value' => 'Tropis', 'color' => 'yellow'],
              ['icon' => 'calendar-alt', 'label' => 'Hari Jadi', 'value' => '17 Agustus', 'color' => 'rose'],
              ['icon' => 'phone-alt', 'label' => 'Telepon', 'value' => '(0289) 432-5678', 'color' => 'indigo']
            ];
            
            foreach($basicInfo as $info): 
            ?>
            <div class="flex items-center justify-between p-3 rounded-lg hover:bg-slate-50 dark:hover:bg-slate-700/50 transition-colors duration-200">
              <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-lg bg-<?php echo $info['color']; ?>-100 dark:bg-<?php echo $info['color']; ?>-900/30 flex items-center justify-center">
                  <i class="fas fa-<?php echo $info['icon']; ?> text-<?php echo $info['color']; ?>-600 dark:text-<?php echo $info['color']; ?>-400"></i>
                </div>
                <span class="text-slate-700 dark:text-slate-300"><?php echo $info['label']; ?></span>
              </div>
              <span class="font-bold text-slate-900 dark:text-white"><?php echo $info['value']; ?></span>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>

    <!-- Struktur Pemerintahan Desa -->
    <div class="mb-12">
      <div class="flex items-center justify-between mb-8">
        <h2 class="text-3xl font-bold text-slate-900 dark:text-white flex items-center gap-3">
          <i class="fas fa-sitemap text-blue-500"></i>
          Struktur Pemerintahan Desa
        </h2>
        <span class="px-4 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-600 dark:text-blue-300 rounded-full text-sm font-medium">
          Periode 2023-2028
        </span>
      </div>
      
      <!-- Kepala Desa -->
      <div class="bg-gradient-to-r from-blue-50 to-indigo-50 dark:from-blue-900/10 dark:to-indigo-900/10 rounded-2xl shadow-xl p-8 border border-blue-200 dark:border-blue-800 mb-8">
        <div class="flex flex-col md:flex-row md:items-center gap-6">
          <div class="flex-shrink-0">
            <div class="relative">
              <div class="w-32 h-32 rounded-2xl overflow-hidden border-4 border-white dark:border-slate-800 shadow-lg">
                <img src="https://api.dicebear.com/7.x/avataaars/svg?seed=KepalaDesaBawang" 
                     alt="Kepala Desa" 
                     class="w-full h-full object-cover">
              </div>
              <div class="absolute -bottom-2 -right-2 w-10 h-10 bg-gradient-to-r from-blue-500 to-indigo-500 rounded-full flex items-center justify-center border-4 border-white dark:border-slate-800">
                <i class="fas fa-crown text-white text-sm"></i>
              </div>
            </div>
          </div>
          <div class="flex-1">
            <div class="flex items-center gap-3 mb-4">
              <span class="px-3 py-1 bg-gradient-to-r from-blue-500 to-indigo-500 text-white rounded-full text-sm font-semibold">
                KEPALA DESA
              </span>
              <span class="px-3 py-1 bg-emerald-100 dark:bg-emerald-900/30 text-emerald-600 dark:text-emerald-300 rounded-full text-sm font-medium">
                Periode ke-2
              </span>
            </div>
            <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-2">H. Ahmad Supriyadi, S.Sos.</h3>
            <p class="text-slate-600 dark:text-slate-300 mb-4">Memimpin Desa Bawang sejak tahun 2023 dengan fokus pada pembangunan infrastruktur dan pemberdayaan UMKM.</p>
            <div class="flex flex-wrap gap-4">
              <div class="flex items-center gap-2">
                <i class="fas fa-calendar-alt text-blue-500"></i>
                <span class="text-sm text-slate-700 dark:text-slate-300">Masa Jabatan: 2023-2028</span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fas fa-graduation-cap text-blue-500"></i>
                <span class="text-sm text-slate-700 dark:text-slate-300">Sarjana Sosial</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Perangkat Desa -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
        <?php 
        $villageOfficials = [
          [
            'name' => 'Drs. Budi Santoso',
            'position' => 'Sekretaris Desa',
            'avatar' => 'SekdesBawang',
            'color' => 'emerald',
            'responsibility' => 'Administrasi & Keuangan',
            'experience' => '15 tahun'
          ],
          [
            'name' => 'Siti Aminah, S.Pd.',
            'position' => 'Kaur Pemerintahan',
            'avatar' => 'KaurPemBawang',
            'color' => 'blue',
            'responsibility' => 'Kependudukan & Catatan Sipil',
            'experience' => '8 tahun'
          ],
          [
            'name' => 'Rudi Hermawan, S.E.',
            'position' => 'Kaur Pembangunan',
            'avatar' => 'KaurBangBawang',
            'color' => 'purple',
            'responsibility' => 'Infrastruktur & PUPR',
            'experience' => '10 tahun'
          ],
          [
            'name' => 'Maya Indah Sari, S.Sos.',
            'position' => 'Kaur Kesra',
            'avatar' => 'KaurKesraBawang',
            'color' => 'rose',
            'responsibility' => 'Sosial & Pemberdayaan',
            'experience' => '7 tahun'
          ],
          [
            'name' => 'Agus Setiawan, A.Md.',
            'position' => 'Kaur Umum',
            'avatar' => 'KaurUmumBawang',
            'color' => 'amber',
            'responsibility' => 'Administrasi Umum',
            'experience' => '12 tahun'
          ],
          [
            'name' => 'Sri Wahyuni, S.Kom.',
            'position' => 'Kaur Keuangan',
            'avatar' => 'KaurKeuBawang',
            'color' => 'indigo',
            'responsibility' => 'Anggaran & APBDes',
            'experience' => '6 tahun'
          ]
        ];
        
        foreach($villageOfficials as $official): 
        ?>
        <div class="group bg-white dark:bg-slate-800 rounded-2xl shadow-lg p-6 border border-slate-200 dark:border-slate-700 hover:shadow-xl hover:border-<?php echo $official['color']; ?>-300 dark:hover:border-<?php echo $official['color']; ?>-600 transition-all duration-300 transform hover:-translate-y-1 cursor-pointer">
          <div class="flex items-start gap-4 mb-4">
            <div class="relative">
              <div class="w-16 h-16 rounded-xl overflow-hidden border-2 border-white dark:border-slate-700 shadow-md">
                <img src="https://api.dicebear.com/7.x/avataaars/svg?seed=<?php echo $official['avatar']; ?>" 
                     alt="<?php echo $official['name']; ?>" 
                     class="w-full h-full">
              </div>
              <div class="absolute -bottom-1 -right-1 w-5 h-5 bg-<?php echo $official['color']; ?>-500 rounded-full border-2 border-white dark:border-slate-800"></div>
            </div>
            <div>
              <h4 class="font-bold text-slate-900 dark:text-white"><?php echo $official['name']; ?></h4>
              <span class="px-2 py-1 bg-<?php echo $official['color']; ?>-100 dark:bg-<?php echo $official['color']; ?>-900/30 text-<?php echo $official['color']; ?>-600 dark:text-<?php echo $official['color']; ?>-300 rounded text-xs font-medium">
                <?php echo $official['position']; ?>
              </span>
            </div>
          </div>
          <p class="text-sm text-slate-600 dark:text-slate-300 mb-3"><?php echo $official['responsibility']; ?></p>
          <div class="flex items-center justify-between text-xs text-slate-500 dark:text-slate-400">
            <span class="flex items-center gap-1">
              <i class="fas fa-clock"></i>
              <?php echo $official['experience']; ?>
            </span>
            <span class="flex items-center gap-1 group-hover:text-<?php echo $official['color']; ?>-600 dark:group-hover:text-<?php echo $official['color']; ?>-400 transition-colors duration-300">
              <i class="fas fa-envelope"></i>
              Hubungi
            </span>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- Struktur RT & RW -->
    <div class="mb-12">
      <div class="flex flex-col md:flex-row md:items-center justify-between mb-8">
        <h2 class="text-3xl font-bold text-slate-900 dark:text-white flex items-center gap-3">
          <i class="fas fa-network-wired text-emerald-500"></i>
          Struktur RT & RW Desa Bawang
        </h2>
        <div class="flex items-center gap-2 mt-2 md:mt-0">
          <span class="text-slate-600 dark:text-slate-300">Total:</span>
          <div class="flex gap-3">
            <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900/30 text-blue-600 dark:text-blue-300 rounded-full text-sm font-medium">
              4 RW
            </span>
            <span class="px-3 py-1 bg-emerald-100 dark:bg-emerald-900/30 text-emerald-600 dark:text-emerald-300 rounded-full text-sm font-medium">
              16 RT
            </span>
          </div>
        </div>
      </div>
      
      <!-- Grid RW -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <?php 
        $rwData = [
          [
            'number' => 'RW 01',
            'chairman' => 'Sutrisno',
            'rt_count' => 4,
            'population' => 1245,
            'area' => '3.2 km²',
            'color' => 'blue',
            'dusun' => 'Dusun 1'
          ],
          [
            'number' => 'RW 02',
            'chairman' => 'Bambang Sugianto',
            'rt_count' => 4,
            'population' => 1087,
            'area' => '2.8 km²',
            'color' => 'emerald',
            'dusun' => 'Dusun 2'
          ],
          [
            'number' => 'RW 03',
            'chairman' => 'Sri Hartati',
            'rt_count' => 4,
            'population' => 987,
            'area' => '3.0 km²',
            'color' => 'purple',
            'dusun' => 'Dusun 3'
          ],
          [
            'number' => 'RW 04',
            'chairman' => 'Ahmad Fauzi',
            'rt_count' => 4,
            'population' => 1915,
            'area' => '3.5 km²',
            'color' => 'amber',
            'dusun' => 'Dusun 4'
          ]
        ];
        
        foreach($rwData as $rw): 
        ?>
        <div class="group bg-gradient-to-br from-white to-slate-50 dark:from-slate-800 dark:to-slate-900 rounded-2xl shadow-xl p-6 border border-slate-200 dark:border-slate-700 hover:border-<?php echo $rw['color']; ?>-300 dark:hover:border-<?php echo $rw['color']; ?>-600 hover:shadow-2xl transition-all duration-500 cursor-pointer">
          <div class="flex items-center justify-between mb-6">
            <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-<?php echo $rw['color']; ?>-500 to-<?php echo $rw['color']; ?>-600 flex items-center justify-center shadow-lg shadow-<?php echo $rw['color']; ?>-500/30">
              <span class="text-white font-bold text-xl"><?php echo substr($rw['number'], 3); ?></span>
            </div>
            <div class="text-right">
              <p class="text-sm text-slate-500 dark:text-slate-400">Ketua RW</p>
              <p class="font-bold text-slate-900 dark:text-white"><?php echo $rw['chairman']; ?></p>
            </div>
          </div>
          
          <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2"><?php echo $rw['number']; ?></h3>
          <p class="text-sm text-slate-600 dark:text-slate-300 mb-4"><?php echo $rw['dusun']; ?></p>
          
          <div class="space-y-3 mb-6">
            <div class="flex items-center justify-between">
              <span class="text-sm text-slate-600 dark:text-slate-300">Jumlah RT</span>
              <span class="font-bold text-slate-900 dark:text-white"><?php echo $rw['rt_count']; ?> RT</span>
            </div>
            <div class="flex items-center justify-between">
              <span class="text-sm text-slate-600 dark:text-slate-300">Penduduk</span>
              <span class="font-bold text-slate-900 dark:text-white"><?php echo number_format($rw['population']); ?></span>
            </div>
            <div class="flex items-center justify-between">
              <span class="text-sm text-slate-600 dark:text-slate-300">Luas Wilayah</span>
              <span class="font-bold text-slate-900 dark:text-white"><?php echo $rw['area']; ?></span>
            </div>
          </div>
          
          <button class="w-full py-2 bg-<?php echo $rw['color']; ?>-100 dark:bg-<?php echo $rw['color']; ?>-900/30 text-<?php echo $rw['color']; ?>-600 dark:text-<?php echo $rw['color']; ?>-400 font-medium rounded-lg hover:bg-<?php echo $rw['color']; ?>-200 dark:hover:bg-<?php echo $rw['color']; ?>-900/50 transition-colors duration-300 flex items-center justify-center gap-2 group-hover:bg-<?php echo $rw['color']; ?>-200 dark:group-hover:bg-<?php echo $rw['color']; ?>-900/50">
            <i class="fas fa-list"></i>
            Lihat Detail RT
          </button>
        </div>
        <?php endforeach; ?>
      </div>
      
      <!-- Detail RT per RW -->
      <div class="mt-8 space-y-6">
        <?php 
        $rtDetails = [
          [
            'rw' => 'RW 01',
            'color' => 'blue',
            'rt_list' => [
              ['number' => 'RT 001', 'chairman' => 'Joko Widodo', 'population' => 312, 'kk' => 104],
              ['number' => 'RT 002', 'chairman' => 'Siti Nurhaliza', 'population' => 298, 'kk' => 99],
              ['number' => 'RT 003', 'chairman' => 'Budi Santoso', 'population' => 315, 'kk' => 105],
              ['number' => 'RT 004', 'chairman' => 'Ani Susanti', 'population' => 320, 'kk' => 107]
            ]
          ],
          [
            'rw' => 'RW 02',
            'color' => 'emerald',
            'rt_list' => [
              ['number' => 'RT 005', 'chairman' => 'Rina Melati', 'population' => 272, 'kk' => 91],
              ['number' => 'RT 006', 'chairman' => 'Asep Sunandar', 'population' => 275, 'kk' => 92],
              ['number' => 'RT 007', 'chairman' => 'Dewi Sartika', 'population' => 270, 'kk' => 90],
              ['number' => 'RT 008', 'chairman' => 'Eko Pratama', 'population' => 270, 'kk' => 90]
            ]
          ],
          [
            'rw' => 'RW 03',
            'color' => 'purple',
            'rt_list' => [
              ['number' => 'RT 009', 'chairman' => 'Farid Ahmad', 'population' => 247, 'kk' => 82],
              ['number' => 'RT 010', 'chairman' => 'Gita Gutawa', 'population' => 250, 'kk' => 83],
              ['number' => 'RT 011', 'chairman' => 'Hendra Setiawan', 'population' => 245, 'kk' => 82],
              ['number' => 'RT 012', 'chairman' => 'Indah Permatasari', 'population' => 245, 'kk' => 82]
            ]
          ],
          [
            'rw' => 'RW 04',
            'color' => 'amber',
            'rt_list' => [
              ['number' => 'RT 013', 'chairman' => 'Johan Pratama', 'population' => 479, 'kk' => 160],
              ['number' => 'RT 014', 'chairman' => 'Kartika Sari', 'population' => 478, 'kk' => 159],
              ['number' => 'RT 015', 'chairman' => 'Lukman Hakim', 'population' => 480, 'kk' => 160],
              ['number' => 'RT 016', 'chairman' => 'Maya Indah', 'population' => 478, 'kk' => 159]
            ]
          ]
        ];
        
        foreach($rtDetails as $rwDetail): 
        ?>
        <div class="bg-white dark:bg-slate-800 rounded-2xl shadow-lg p-6 border border-slate-200 dark:border-slate-700">
          <div class="flex items-center gap-3 mb-6">
            <div class="w-10 h-10 rounded-lg bg-<?php echo $rwDetail['color']; ?>-100 dark:bg-<?php echo $rwDetail['color']; ?>-900/30 flex items-center justify-center">
              <span class="font-bold text-<?php echo $rwDetail['color']; ?>-600 dark:text-<?php echo $rwDetail['color']; ?>-400"><?php echo $rwDetail['rw']; ?></span>
            </div>
            <h3 class="text-xl font-bold text-slate-900 dark:text-white">Struktur <?php echo $rwDetail['rw']; ?></h3>
          </div>
          
          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
            <?php foreach($rwDetail['rt_list'] as $rt): ?>
            <div class="group p-4 rounded-xl border border-slate-200 dark:border-slate-700 hover:border-<?php echo $rwDetail['color']; ?>-300 dark:hover:border-<?php echo $rwDetail['color']; ?>-600 hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-all duration-300 cursor-pointer">
              <div class="flex items-center justify-between mb-3">
                <div class="flex items-center gap-2">
                  <div class="w-8 h-8 rounded-lg bg-<?php echo $rwDetail['color']; ?>-100 dark:bg-<?php echo $rwDetail['color']; ?>-900/30 flex items-center justify-center">
                    <span class="text-sm font-bold text-<?php echo $rwDetail['color']; ?>-600 dark:text-<?php echo $rwDetail['color']; ?>-400"><?php echo substr($rt['number'], 3); ?></span>
                  </div>
                  <span class="font-bold text-slate-900 dark:text-white"><?php echo $rt['number']; ?></span>
                </div>
                <i class="fas fa-chevron-right text-slate-400 group-hover:text-<?php echo $rwDetail['color']; ?>-500 transition-colors duration-300"></i>
              </div>
              <p class="text-sm text-slate-600 dark:text-slate-300 mb-2">Ketua: <?php echo $rt['chairman']; ?></p>
              <div class="flex items-center justify-between text-xs text-slate-500 dark:text-slate-400">
                <span><?php echo $rt['population']; ?> jiwa</span>
                <span><?php echo $rt['kk']; ?> KK</span>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- Sejarah & Potensi Desa -->
    <div class="mb-12">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <!-- Sejarah Desa -->
        <div class="bg-white dark:bg-slate-800 rounded-2xl shadow-xl p-8 border border-slate-100 dark:border-slate-700">
          <div class="flex items-center gap-4 mb-8">
            <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-amber-500 to-yellow-500 flex items-center justify-center shadow-lg shadow-amber-500/30">
              <i class="fas fa-history text-white"></i>
            </div>
            <div>
              <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Sejarah Desa Bawang</h2>
              <p class="text-slate-600 dark:text-slate-300">Perjalanan panjang sejak 1850</p>
            </div>
          </div>
          
          <div class="space-y-6">
            <div class="relative pl-8">
              <div class="absolute left-0 top-0 w-4 h-4 bg-amber-500 rounded-full"></div>
              <div class="absolute left-[7px] top-4 bottom-0 w-0.5 bg-amber-200 dark:bg-amber-900/30"></div>
              <div>
                <p class="font-bold text-slate-900 dark:text-white mb-1">1850 - Pendirian</p>
                <p class="text-slate-600 dark:text-slate-300 text-sm">Desa Bawang didirikan oleh Mbah Kromo sebagai permukiman pertanian bawang merah.</p>
              </div>
            </div>
            
            <div class="relative pl-8">
              <div class="absolute left-0 top-0 w-4 h-4 bg-emerald-500 rounded-full"></div>
              <div class="absolute left-[7px] top-4 bottom-0 w-0.5 bg-emerald-200 dark:bg-emerald-900/30"></div>
              <div>
                <p class="font-bold text-slate-900 dark:text-white mb-1">1945 - Era Kemerdekaan</p>
                <p class="text-slate-600 dark:text-slate-300 text-sm">Desa Bawang secara resmi ditetapkan sebagai desa definitif oleh pemerintah.</p>
              </div>
            </div>
            
            <div class="relative pl-8">
              <div class="absolute left-0 top-0 w-4 h-4 bg-blue-500 rounded-full"></div>
              <div class="absolute left-[7px] top-4 bottom-0 w-0.5 bg-blue-200 dark:bg-blue-900/30"></div>
              <div>
                <p class="font-bold text-slate-900 dark:text-white mb-1">1990 - Modernisasi</p>
                <p class="text-slate-600 dark:text-slate-300 text-sm">Pembangunan infrastruktur dasar dan sekolah pertama dibangun.</p>
              </div>
            </div>
            
            <div class="relative pl-8">
              <div class="absolute left-0 top-0 w-4 h-4 bg-purple-500 rounded-full"></div>
              <div class="absolute left-[7px] top-4 bottom-0 w-0.5 bg-purple-200 dark:bg-purple-900/30"></div>
              <div>
                <p class="font-bold text-slate-900 dark:text-white mb-1">2020 - Desa Digital</p>
                <p class="text-slate-600 dark:text-slate-300 text-sm">Transformasi menuju desa digital dengan sistem informasi terintegrasi.</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Potensi & Prestasi -->
        <div class="bg-white dark:bg-slate-800 rounded-2xl shadow-xl p-8 border border-slate-100 dark:border-slate-700">
          <div class="flex items-center gap-4 mb-8">
            <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-rose-500 to-pink-500 flex items-center justify-center shadow-lg shadow-rose-500/30">
              <i class="fas fa-trophy text-white"></i>
            </div>
            <div>
              <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Potensi & Prestasi</h2>
              <p class="text-slate-600 dark:text-slate-300">Kebanggaan Desa Bawang</p>
            </div>
          </div>
          
          <div class="space-y-4">
            <?php 
            $achievements = [
              [
                'title' => 'Juara 1 Desa Digital',
                'year' => '2023',
                'description' => 'Tingkat Kabupaten Batang',
                'color' => 'emerald',
                'icon' => 'award'
              ],
              [
                'title' => 'Desa Sadar Hukum',
                'year' => '2022',
                'description' => 'Penghargaan dari Kementerian Hukum',
                'color' => 'blue',
                'icon' => 'balance-scale'
              ],
              [
                'title' => 'Desa Bebas Stunting',
                'year' => '2021',
                'description' => 'Prevalensi stunting < 14%',
                'color' => 'purple',
                'icon' => 'heart'
              ],
              [
                'title' => 'UMKM Terbaik',
                'year' => '2020',
                'description' => 'Produk keripik singkong "Mbak Sum"',
                'color' => 'amber',
                'icon' => 'store'
              ]
            ];
            
            foreach($achievements as $achievement): 
            ?>
            <div class="group p-4 rounded-xl border border-slate-200 dark:border-slate-700 hover:border-<?php echo $achievement['color']; ?>-300 dark:hover:border-<?php echo $achievement['color']; ?>-600 hover:bg-slate-50 dark:hover:bg-slate-800/50 transition-all duration-300 cursor-pointer">
              <div class="flex items-center justify-between mb-2">
                <div class="flex items-center gap-3">
                  <div class="w-10 h-10 rounded-lg bg-<?php echo $achievement['color']; ?>-100 dark:bg-<?php echo $achievement['color']; ?>-900/30 flex items-center justify-center">
                    <i class="fas fa-<?php echo $achievement['icon']; ?> text-<?php echo $achievement['color']; ?>-600 dark:text-<?php echo $achievement['color']; ?>-400"></i>
                  </div>
                  <div>
                    <p class="font-bold text-slate-900 dark:text-white"><?php echo $achievement['title']; ?></p>
                    <p class="text-sm text-slate-600 dark:text-slate-300"><?php echo $achievement['description']; ?></p>
                  </div>
                </div>
                <span class="px-3 py-1 bg-<?php echo $achievement['color']; ?>-100 dark:bg-<?php echo $achievement['color']; ?>-900/30 text-<?php echo $achievement['color']; ?>-600 dark:text-<?php echo $achievement['color']; ?>-300 rounded-full text-sm font-medium">
                  <?php echo $achievement['year']; ?>
                </span>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>

    <!-- Galeri Singkat -->
    <div class="bg-white dark:bg-slate-800 rounded-2xl shadow-xl p-8 border border-slate-100 dark:border-slate-700">
      <div class="flex items-center justify-between mb-8">
        <h2 class="text-2xl font-bold text-slate-900 dark:text-white flex items-center gap-3">
          <i class="fas fa-images text-blue-500"></i>
          Galeri Desa
        </h2>
        <a href="#" class="text-blue-600 dark:text-blue-300 font-medium hover:underline flex items-center gap-2">
          Lihat Semua <i class="fas fa-arrow-right"></i>
        </a>
      </div>
      
      <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
        <div class="group relative h-48 rounded-xl overflow-hidden cursor-pointer">
          <img src="https://images.unsplash.com/photo-1569336415962-a4bd9f69cd83?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
               alt="Balai Desa" 
               class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-4">
            <p class="text-white font-medium">Balai Desa</p>
          </div>
        </div>
        
        <div class="group relative h-48 rounded-xl overflow-hidden cursor-pointer">
          <img src="https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
               alt="Pertanian Bawang" 
               class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-4">
            <p class="text-white font-medium">Ladang Bawang</p>
          </div>
        </div>
        
        <div class="group relative h-48 rounded-xl overflow-hidden cursor-pointer">
          <img src="https://images.unsplash.com/photo-1576021182211-4d0b117d1e2a?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
               alt="Kegiatan Warga" 
               class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-4">
            <p class="text-white font-medium">Kegiatan Warga</p>
          </div>
        </div>
        
        <div class="group relative h-48 rounded-xl overflow-hidden cursor-pointer">
          <img src="https://images.unsplash.com/photo-1542744095-fcf48d80b0fd?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" 
               alt="Infrastruktur" 
               class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-4">
            <p class="text-white font-medium">Jalan Desa</p>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>

<!-- CSS Animations -->
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
    animation: fade-in 0.6s ease-out;
  }
  
  .animate-pulse-slow {
    animation: pulse-slow 2s infinite;
  }
</style>
<?php endif; ?>
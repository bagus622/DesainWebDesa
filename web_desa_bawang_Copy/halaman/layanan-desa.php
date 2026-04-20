<?php if ($halaman == 'layanan-desa'): ?>
<div class="min-h-screen bg-gradient-to-br from-slate-50 via-white to-blue-50/30 dark:from-slate-900 dark:via-slate-800 dark:to-blue-900/10 py-8">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    
    <!-- Header dengan CTA -->
    <div class="mb-12 animate-fade-in">
      <div class="flex flex-col md:flex-row md:items-center justify-between gap-8 mb-8">
        <div class="flex items-center gap-4">
          <div class="relative">
            <div class="w-16 h-16 rounded-2xl bg-gradient-to-r from-blue-500 via-indigo-500 to-purple-500 flex items-center justify-center shadow-xl shadow-blue-500/20 animate-pulse-slow">
              <i class="fas fa-file-alt text-white text-2xl"></i>
            </div>
            <div class="absolute -top-2 -right-2 w-8 h-8 bg-green-400 rounded-full border-4 border-white dark:border-slate-800 flex items-center justify-center">
              <i class="fas fa-check text-white text-xs"></i>
            </div>
          </div>
          <div>
            <h1 class="text-4xl md:text-5xl font-bold text-slate-900 dark:text-white bg-gradient-to-r from-blue-600 to-indigo-600 bg-clip-text text-transparent">Layanan Desa Online</h1>
            <p class="text-slate-600 dark:text-slate-300 mt-3 max-w-2xl">
              Permudah pengurusan administrasi warga secara online. Ajukan surat, lacak status, dan dapatkan layanan cepat dari perangkat desa.
            </p>
          </div>
        </div>
        <div class="flex flex-col sm:flex-row gap-3">
          <button onclick="trackPengajuan()" class="px-6 py-3 bg-gradient-to-r from-emerald-500 to-teal-600 text-white font-semibold rounded-xl shadow-lg shadow-emerald-500/30 hover:shadow-xl hover:shadow-emerald-500/40 transition-all duration-300 transform hover:-translate-y-0.5 flex items-center justify-center gap-2">
            <i class="fas fa-search"></i> Lacak Pengajuan
          </button>
          <button onclick="showGuide()" class="px-6 py-3 bg-white dark:bg-slate-800 border-2 border-blue-200 dark:border-blue-800 text-blue-600 dark:text-blue-400 font-semibold rounded-xl hover:bg-blue-50 dark:hover:bg-blue-900/20 transition-all duration-300 flex items-center justify-center gap-2">
            <i class="fas fa-question-circle"></i> Panduan
          </button>
        </div>
      </div>
      
      <!-- Quick Stats -->
      <div class="flex flex-wrap items-center gap-6 text-sm text-slate-600 dark:text-slate-400">
        <div class="flex items-center gap-2">
          <span class="w-2 h-2 bg-emerald-500 rounded-full animate-pulse"></span>
          <span>Jam Pelayanan: 08:00 - 15:00 WIB</span>
        </div>
        <div class="flex items-center gap-2">
          <i class="fas fa-clock text-xs"></i>
          <span>Waktu Proses: 1-3 Hari Kerja</span>
        </div>
        <div class="flex items-center gap-2">
          <i class="fas fa-user-check text-xs"></i>
          <span>Petugas: 3 Orang</span>
        </div>
      </div>
    </div>

    <!-- Dashboard Layanan -->
    <div class="mb-12">
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Total Pengajuan -->
        <div class="group bg-gradient-to-br from-white to-slate-50 dark:from-slate-800 dark:to-slate-900 rounded-2xl shadow-xl p-6 border border-slate-200 dark:border-slate-700 hover:border-blue-300 dark:hover:border-blue-600 hover:shadow-2xl transition-all duration-500 cursor-pointer relative overflow-hidden">
          <div class="absolute top-0 right-0 w-24 h-24 opacity-5">
            <i class="fas fa-file-signature text-5xl"></i>
          </div>
          
          <div class="relative">
            <div class="flex items-center justify-between mb-4">
              <div>
                <p class="text-sm font-medium text-slate-500 dark:text-slate-400 uppercase tracking-wider">Total Pengajuan</p>
                <p class="text-4xl font-bold text-slate-900 dark:text-white mt-2">348</p>
              </div>
              <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-blue-500 to-indigo-500 flex items-center justify-center shadow-lg shadow-blue-500/30 group-hover:scale-110 transition-transform duration-500">
                <i class="fas fa-clipboard-list text-white text-xl"></i>
              </div>
            </div>
            <div class="flex items-center gap-2">
              <span class="px-2 py-1 bg-blue-100 dark:bg-blue-900/30 text-blue-600 dark:text-blue-300 rounded text-xs font-medium">
                <i class="fas fa-arrow-up mr-1"></i> 24%
              </span>
              <span class="text-sm text-slate-500 dark:text-slate-400">dari bulan lalu</span>
            </div>
          </div>
        </div>
        
        <!-- Selesai -->
        <div class="group bg-gradient-to-br from-white to-slate-50 dark:from-slate-800 dark:to-slate-900 rounded-2xl shadow-xl p-6 border border-slate-200 dark:border-slate-700 hover:border-emerald-300 dark:hover:border-emerald-600 hover:shadow-2xl transition-all duration-500 cursor-pointer">
          <div class="flex items-center justify-between mb-4">
            <div>
              <p class="text-sm font-medium text-slate-500 dark:text-slate-400 uppercase tracking-wider">Selesai</p>
              <p class="text-4xl font-bold text-slate-900 dark:text-white mt-2">298</p>
            </div>
            <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-emerald-500 to-teal-500 flex items-center justify-center shadow-lg shadow-emerald-500/30 group-hover:scale-110 transition-transform duration-500">
              <i class="fas fa-check-circle text-white text-xl"></i>
            </div>
          </div>
          <div class="w-full bg-slate-200 dark:bg-slate-700 rounded-full h-2">
            <div class="bg-gradient-to-r from-emerald-400 to-teal-500 h-2 rounded-full" style="width: 86%"></div>
          </div>
          <p class="text-xs text-slate-500 dark:text-slate-400 mt-2">86% dari total pengajuan</p>
        </div>
        
        <!-- Proses -->
        <div class="group bg-gradient-to-br from-white to-slate-50 dark:from-slate-800 dark:to-slate-900 rounded-2xl shadow-xl p-6 border border-slate-200 dark:border-slate-700 hover:border-amber-300 dark:hover:border-amber-600 hover:shadow-2xl transition-all duration-500 cursor-pointer">
          <div class="flex items-center justify-between mb-4">
            <div>
              <p class="text-sm font-medium text-slate-500 dark:text-slate-400 uppercase tracking-wider">Dalam Proses</p>
              <p class="text-4xl font-bold text-slate-900 dark:text-white mt-2">42</p>
            </div>
            <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-amber-500 to-yellow-500 flex items-center justify-center shadow-lg shadow-amber-500/30 group-hover:scale-110 transition-transform duration-500">
              <i class="fas fa-hourglass-half text-white text-xl"></i>
            </div>
          </div>
          <div class="w-full bg-slate-200 dark:bg-slate-700 rounded-full h-2">
            <div class="bg-gradient-to-r from-amber-400 to-yellow-500 h-2 rounded-full" style="width: 12%"></div>
          </div>
          <p class="text-xs text-slate-500 dark:text-slate-400 mt-2">Rata-rata 2 hari</p>
        </div>
        
        <!-- Menunggu -->
        <div class="group bg-gradient-to-br from-white to-slate-50 dark:from-slate-800 dark:to-slate-900 rounded-2xl shadow-xl p-6 border border-slate-200 dark:border-slate-700 hover:border-rose-300 dark:hover:border-rose-600 hover:shadow-2xl transition-all duration-500 cursor-pointer">
          <div class="flex items-center justify-between mb-4">
            <div>
              <p class="text-sm font-medium text-slate-500 dark:text-slate-400 uppercase tracking-wider">Menunggu</p>
              <p class="text-4xl font-bold text-slate-900 dark:text-white mt-2">8</p>
            </div>
            <div class="w-14 h-14 rounded-xl bg-gradient-to-br from-rose-500 to-pink-500 flex items-center justify-center shadow-lg shadow-rose-500/30 group-hover:scale-110 transition-transform duration-500">
              <i class="fas fa-clock text-white text-xl"></i>
            </div>
          </div>
          <div class="w-full bg-slate-200 dark:bg-slate-700 rounded-full h-2">
            <div class="bg-gradient-to-r from-rose-400 to-pink-500 h-2 rounded-full" style="width: 2%"></div>
          </div>
          <p class="text-xs text-slate-500 dark:text-slate-400 mt-2">Perlu tindak lanjut</p>
        </div>
      </div>
    </div>

    <!-- Jenis Layanan -->
    <div class="mb-16">
      <div class="flex flex-col md:flex-row md:items-center justify-between mb-8">
        <h2 class="text-3xl font-bold text-slate-900 dark:text-white flex items-center gap-3">
          <i class="fas fa-file-contract text-blue-500"></i>
          Jenis Surat & Layanan
        </h2>
        <div class="flex items-center gap-2 mt-2 md:mt-0">
          <span class="text-slate-600 dark:text-slate-300">Biaya administrasi:</span>
          <span class="font-bold text-emerald-600 dark:text-emerald-400">Gratis</span>
        </div>
      </div>
      
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <?php 
        $layananList = [
          [
            'title' => 'Surat Keterangan Domisili',
            'icon' => 'home',
            'color' => 'blue',
            'desc' => 'Untuk keperluan administrasi kependudukan',
            'waktu' => '1 Hari',
            'syarat' => ['KTP', 'KK', 'Bukti tinggal'],
            'popular' => true
          ],
          [
            'title' => 'Surat Keterangan Usaha',
            'icon' => 'store',
            'color' => 'emerald',
            'desc' => 'Pengajuan izin usaha mikro dan kecil',
            'waktu' => '2 Hari',
            'syarat' => ['KTP', 'KK', 'Deskripsi usaha'],
            'popular' => true
          ],
          [
            'title' => 'Surat Keterangan Tidak Mampu',
            'icon' => 'hand-holding-heart',
            'color' => 'purple',
            'desc' => 'Untuk pengajuan bantuan sosial',
            'waktu' => '3 Hari',
            'syarat' => ['KTP', 'KK', 'Surat pengantar RT'],
            'popular' => false
          ],
          [
            'title' => 'Surat Keterangan Pindah',
            'icon' => 'truck-moving',
            'color' => 'amber',
            'desc' => 'Administrasi perpindahan penduduk',
            'waktu' => '2 Hari',
            'syarat' => ['KTP', 'KK', 'Surat pengantar RT'],
            'popular' => false
          ],
          [
            'title' => 'Surat Keterangan Kematian',
            'icon' => 'cross',
            'color' => 'gray',
            'desc' => 'Pelaporan kematian untuk administrasi',
            'waktu' => '1 Hari',
            'syarat' => ['KTP almarhum', 'KK', 'Surat keterangan RS'],
            'popular' => false
          ],
          [
            'title' => 'Surat Keterangan Kelahiran',
            'icon' => 'baby',
            'color' => 'pink',
            'desc' => 'Pelaporan kelahiran bayi',
            'waktu' => '1 Hari',
            'syarat' => ['Akta nikah', 'KK', 'Surat keterangan bidan'],
            'popular' => false
          ]
        ];
        
        foreach($layananList as $layanan): 
        ?>
        <div class="group bg-white dark:bg-slate-800 rounded-2xl shadow-lg p-6 border border-slate-200 dark:border-slate-700 hover:shadow-xl hover:border-<?php echo $layanan['color']; ?>-300 dark:hover:border-<?php echo $layanan['color']; ?>-600 transition-all duration-300 transform hover:-translate-y-1 cursor-pointer">
          <div class="flex items-start justify-between mb-4">
            <div class="flex items-center gap-3">
              <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-<?php echo $layanan['color']; ?>-500 to-<?php echo $layanan['color']; ?>-600 flex items-center justify-center shadow-lg shadow-<?php echo $layanan['color']; ?>-500/30">
                <i class="fas fa-<?php echo $layanan['icon']; ?> text-white"></i>
              </div>
              <div>
                <h3 class="font-bold text-slate-900 dark:text-white"><?php echo $layanan['title']; ?></h3>
                <p class="text-sm text-slate-500 dark:text-slate-400"><?php echo $layanan['waktu']; ?> proses</p>
              </div>
            </div>
            <?php if($layanan['popular']): ?>
            <span class="px-2 py-1 bg-amber-100 dark:bg-amber-900/30 text-amber-600 dark:text-amber-300 rounded text-xs font-medium">
              Populer
            </span>
            <?php endif; ?>
          </div>
          
          <p class="text-slate-600 dark:text-slate-300 text-sm mb-4"><?php echo $layanan['desc']; ?></p>
          
          <div class="mb-4">
            <p class="text-xs font-medium text-slate-500 dark:text-slate-400 mb-2">Persyaratan:</p>
            <div class="flex flex-wrap gap-1">
              <?php foreach($layanan['syarat'] as $syarat): ?>
              <span class="px-2 py-1 bg-slate-100 dark:bg-slate-700 text-slate-700 dark:text-slate-300 text-xs rounded">
                <?php echo $syarat; ?>
              </span>
              <?php endforeach; ?>
            </div>
          </div>
          
          <button onclick="ajukanLayanan('<?php echo $layanan['title']; ?>')" class="w-full py-2.5 bg-gradient-to-r from-<?php echo $layanan['color']; ?>-500 to-<?php echo $layanan['color']; ?>-600 text-white font-medium rounded-lg hover:shadow-lg transition-all duration-300 flex items-center justify-center gap-2">
            <i class="fas fa-paper-plane"></i>
            Ajukan Sekarang
          </button>
        </div>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- Formulir Pengajuan & Tracking -->
    <div class="mb-16">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <!-- Form Pengajuan -->
        <div class="bg-white dark:bg-slate-800 rounded-2xl shadow-xl p-8 border border-slate-100 dark:border-slate-700">
          <div class="flex items-center gap-4 mb-8">
            <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-blue-500 to-indigo-500 flex items-center justify-center shadow-lg shadow-blue-500/30">
              <i class="fas fa-edit text-white"></i>
            </div>
            <div>
              <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Formulir Pengajuan Online</h2>
              <p class="text-slate-600 dark:text-slate-300">Isi data dengan lengkap dan benar</p>
            </div>
          </div>
          
          <form id="formPengajuan" class="space-y-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
              <div>
                <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">
                  Jenis Layanan
                </label>
                <select class="w-full px-4 py-3 rounded-lg border border-slate-300 dark:border-slate-600 bg-white dark:bg-slate-800 text-slate-800 dark:text-slate-100 focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                  <option value="">Pilih jenis layanan</option>
                  <?php foreach($layananList as $layanan): ?>
                  <option value="<?php echo strtolower(str_replace(' ', '-', $layanan['title'])); ?>">
                    <?php echo $layanan['title']; ?>
                  </option>
                  <?php endforeach; ?>
                </select>
              </div>
              
              <div>
                <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">
                  Nomor Telepon
                </label>
                <input type="tel" class="w-full px-4 py-3 rounded-lg border border-slate-300 dark:border-slate-600 bg-white dark:bg-slate-800 text-slate-800 dark:text-slate-100 focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="08xxxxxxxxxx">
              </div>
            </div>
            
            <div>
              <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">
                Nama Lengkap
              </label>
              <input type="text" class="w-full px-4 py-3 rounded-lg border border-slate-300 dark:border-slate-600 bg-white dark:bg-slate-800 text-slate-800 dark:text-slate-100 focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Nama sesuai KTP">
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
              <div>
                <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">
                  NIK
                </label>
                <input type="text" class="w-full px-4 py-3 rounded-lg border border-slate-300 dark:border-slate-600 bg-white dark:bg-slate-800 text-slate-800 dark:text-slate-100 focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="16 digit NIK">
              </div>
              
              <div>
                <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">
                  RT
                </label>
                <select class="w-full px-4 py-3 rounded-lg border border-slate-300 dark:border-slate-600 bg-white dark:bg-slate-800 text-slate-800 dark:text-slate-100 focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                  <option value="">Pilih RT</option>
                  <?php for($i = 1; $i <= 16; $i++): ?>
                  <option value="rt<?php echo str_pad($i, 3, '0', STR_PAD_LEFT); ?>">
                    RT <?php echo str_pad($i, 3, '0', STR_PAD_LEFT); ?>
                  </option>
                  <?php endfor; ?>
                </select>
              </div>
              
              <div>
                <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">
                  RW
                </label>
                <select class="w-full px-4 py-3 rounded-lg border border-slate-300 dark:border-slate-600 bg-white dark:bg-slate-800 text-slate-800 dark:text-slate-100 focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                  <option value="">Pilih RW</option>
                  <?php for($i = 1; $i <= 4; $i++): ?>
                  <option value="rw<?php echo str_pad($i, 2, '0', STR_PAD_LEFT); ?>">
                    RW <?php echo str_pad($i, 2, '0', STR_PAD_LEFT); ?>
                  </option>
                  <?php endfor; ?>
                </select>
              </div>
            </div>
            
            <div>
              <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">
                Alamat Lengkap
              </label>
              <textarea rows="3" class="w-full px-4 py-3 rounded-lg border border-slate-300 dark:border-slate-600 bg-white dark:bg-slate-800 text-slate-800 dark:text-slate-100 focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Jalan, Dusun, Nomor Rumah"></textarea>
            </div>
            
            <div>
              <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">
                Keterangan Tambahan
              </label>
              <textarea rows="2" class="w-full px-4 py-3 rounded-lg border border-slate-300 dark:border-slate-600 bg-white dark:bg-slate-800 text-slate-800 dark:text-slate-100 focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Jelaskan keperluan surat secara detail"></textarea>
            </div>
            
            <div>
              <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">
                Upload Dokumen Pendukung
              </label>
              <div class="border-2 border-dashed border-slate-300 dark:border-slate-600 rounded-lg p-6 text-center hover:border-blue-500 transition-colors duration-300 cursor-pointer">
                <i class="fas fa-cloud-upload-alt text-3xl text-slate-400 mb-2"></i>
                <p class="text-sm text-slate-600 dark:text-slate-400">Klik atau drag file untuk upload</p>
                <p class="text-xs text-slate-500 dark:text-slate-500 mt-1">Format: JPG, PNG, PDF (Maks. 5MB)</p>
              </div>
            </div>
            
            <button type="submit" class="w-full py-3.5 bg-gradient-to-r from-blue-500 to-indigo-600 text-white font-semibold rounded-lg hover:shadow-lg hover:shadow-blue-500/30 transition-all duration-300 flex items-center justify-center gap-2">
              <i class="fas fa-paper-plane"></i>
              Kirim Pengajuan
            </button>
          </form>
        </div>

        <!-- Tracking Status -->
        <div class="bg-gradient-to-br from-white to-emerald-50 dark:from-slate-800 dark:to-emerald-900/10 rounded-2xl shadow-xl p-8 border border-emerald-200 dark:border-emerald-800">
          <div class="flex items-center gap-4 mb-8">
            <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-emerald-500 to-teal-500 flex items-center justify-center shadow-lg shadow-emerald-500/30">
              <i class="fas fa-search text-white"></i>
            </div>
            <div>
              <h2 class="text-2xl font-bold text-slate-900 dark:text-white">Tracking Status Pengajuan</h2>
              <p class="text-slate-600 dark:text-slate-300">Pantau perkembangan pengajuan Anda</p>
            </div>
          </div>
          
          <div class="mb-6">
            <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">
              Masukkan Nomor Pengajuan
            </label>
            <div class="flex gap-2">
              <input type="text" id="nomorTracking" class="flex-1 px-4 py-3 rounded-lg border border-slate-300 dark:border-slate-600 bg-white dark:bg-slate-800 text-slate-800 dark:text-slate-100 focus:ring-2 focus:ring-emerald-500 focus:border-transparent" placeholder="Contoh: SKD-2024-00123">
              <button onclick="trackStatus()" class="px-6 py-3 bg-gradient-to-r from-emerald-500 to-teal-600 text-white font-semibold rounded-lg hover:shadow-lg hover:shadow-emerald-500/30 transition-all duration-300">
                Lacak
              </button>
            </div>
          </div>
          
          <!-- Contoh Status Tracking -->
          <div id="trackingResult" class="hidden">
            <div class="p-4 rounded-xl bg-white dark:bg-slate-800/50 border border-emerald-200 dark:border-emerald-800 mb-6">
              <div class="flex items-center justify-between mb-4">
                <div>
                  <p class="font-bold text-slate-900 dark:text-white">SKD-2024-00123</p>
                  <p class="text-sm text-slate-600 dark:text-slate-300">Surat Keterangan Domisili</p>
                </div>
                <span class="px-3 py-1 bg-emerald-100 dark:bg-emerald-900/30 text-emerald-600 dark:text-emerald-300 rounded-full text-sm font-medium">
                  Dalam Proses
                </span>
              </div>
              
              <!-- Progress Steps -->
              <div class="relative">
                <!-- Progress Line -->
                <div class="absolute left-0 right-0 top-1/2 h-0.5 bg-slate-300 dark:bg-slate-700 -translate-y-1/2"></div>
                <div class="absolute left-0 top-1/2 h-0.5 bg-emerald-500 -translate-y-1/2" style="width: 66%"></div>
                
                <div class="relative flex justify-between">
                  <?php 
                  $steps = [
                    ['icon' => 'file-import', 'label' => 'Diajukan', 'date' => '15 Apr', 'status' => 'completed'],
                    ['icon' => 'user-check', 'label' => 'Verifikasi', 'date' => '16 Apr', 'status' => 'completed'],
                    ['icon' => 'stamp', 'label' => 'Diproses', 'date' => '17 Apr', 'status' => 'current'],
                    ['icon' => 'check-circle', 'label' => 'Selesai', 'date' => '', 'status' => 'pending']
                  ];
                  
                  foreach($steps as $step): 
                  ?>
                  <div class="flex flex-col items-center relative z-10">
                    <div class="w-8 h-8 rounded-full flex items-center justify-center mb-2 
                      <?php echo $step['status'] == 'completed' ? 'bg-emerald-500 text-white' : ''; ?>
                      <?php echo $step['status'] == 'current' ? 'bg-emerald-100 dark:bg-emerald-900/30 border-2 border-emerald-500 text-emerald-500' : ''; ?>
                      <?php echo $step['status'] == 'pending' ? 'bg-slate-200 dark:bg-slate-700 text-slate-500' : ''; ?>">
                      <i class="fas fa-<?php echo $step['icon']; ?> text-xs"></i>
                    </div>
                    <span class="text-xs font-medium text-slate-700 dark:text-slate-300"><?php echo $step['label']; ?></span>
                    <span class="text-xs text-slate-500 dark:text-slate-500"><?php echo $step['date']; ?></span>
                  </div>
                  <?php endforeach; ?>
                </div>
              </div>
              
              <div class="mt-6 p-3 rounded-lg bg-blue-50 dark:bg-blue-900/20 border border-blue-200 dark:border-blue-800">
                <p class="text-sm text-slate-700 dark:text-slate-300">
                  <i class="fas fa-info-circle text-blue-500 mr-2"></i>
                  Estimasi selesai: <span class="font-bold">18 April 2024</span>
                </p>
              </div>
            </div>
            
            <!-- Detail Pengajuan -->
            <div class="space-y-3">
              <div class="flex justify-between">
                <span class="text-sm text-slate-600 dark:text-slate-300">Tanggal Pengajuan</span>
                <span class="font-medium text-slate-900 dark:text-white">15 April 2024, 09:30</span>
              </div>
              <div class="flex justify-between">
                <span class="text-sm text-slate-600 dark:text-slate-300">Petugas</span>
                <span class="font-medium text-slate-900 dark:text-white">Siti Aminah, S.Pd.</span>
              </div>
              <div class="flex justify-between">
                <span class="text-sm text-slate-600 dark:text-slate-300">No. Telepon Petugas</span>
                <span class="font-medium text-slate-900 dark:text-white">0857-1234-5678</span>
              </div>
            </div>
          </div>
          
          <!-- Contoh belum tracking -->
          <div id="trackingPlaceholder" class="text-center p-8">
            <div class="w-16 h-16 rounded-full bg-emerald-100 dark:bg-emerald-900/30 flex items-center justify-center mx-auto mb-4">
              <i class="fas fa-search text-emerald-500 dark:text-emerald-400 text-2xl"></i>
            </div>
            <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-2">Lacak Pengajuan Anda</h3>
            <p class="text-slate-600 dark:text-slate-300 text-sm">
              Masukkan nomor pengajuan untuk melihat status terkini
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- Jam Pelayanan & Kontak -->
    <div class="mb-12">
      <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Jam Pelayanan -->
        <div class="bg-white dark:bg-slate-800 rounded-2xl shadow-xl p-8 border border-slate-100 dark:border-slate-700">
          <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6 flex items-center gap-3">
            <i class="fas fa-clock text-blue-500"></i>
            Jam Pelayanan & SOP
          </h2>
          
          <div class="space-y-6">
            <div>
              <h3 class="font-bold text-slate-900 dark:text-white mb-3">Jam Operasional</h3>
              <div class="space-y-2">
                <div class="flex justify-between p-3 rounded-lg bg-slate-50 dark:bg-slate-700/50">
                  <span class="text-slate-700 dark:text-slate-300">Senin - Kamis</span>
                  <span class="font-bold text-slate-900 dark:text-white">08:00 - 15:00 WIB</span>
                </div>
                <div class="flex justify-between p-3 rounded-lg bg-slate-50 dark:bg-slate-700/50">
                  <span class="text-slate-700 dark:text-slate-300">Jumat</span>
                  <span class="font-bold text-slate-900 dark:text-white">08:00 - 11:30 WIB</span>
                </div>
                <div class="flex justify-between p-3 rounded-lg bg-slate-50 dark:bg-slate-700/50">
                  <span class="text-slate-700 dark:text-slate-300">Sabtu - Minggu</span>
                  <span class="font-bold text-slate-900 dark:text-white">Tutup</span>
                </div>
              </div>
            </div>
            
            <div>
              <h3 class="font-bold text-slate-900 dark:text-white mb-3">Standar Operasional Prosedur</h3>
              <ul class="space-y-2 text-sm text-slate-600 dark:text-slate-300">
                <li class="flex items-start gap-2">
                  <i class="fas fa-check-circle text-emerald-500 mt-1"></i>
                  <span>Pengajuan online diverifikasi dalam 24 jam</span>
                </li>
                <li class="flex items-start gap-2">
                  <i class="fas fa-check-circle text-emerald-500 mt-1"></i>
                  <span>Surat biasa diproses 1-3 hari kerja</span>
                </li>
                <li class="flex items-start gap-2">
                  <i class="fas fa-check-circle text-emerald-500 mt-1"></i>
                  <span>Surat mendesak bisa diproses lebih cepat</span>
                </li>
                <li class="flex items-start gap-2">
                  <i class="fas fa-check-circle text-emerald-500 mt-1"></i>
                  <span>Pengambilan surat di kantor desa dengan menunjukkan KTP</span>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Kontak Perangkat Desa -->
        <div class="lg:col-span-2 bg-gradient-to-br from-white to-blue-50 dark:from-slate-800 dark:to-blue-900/10 rounded-2xl shadow-xl p-8 border border-blue-200 dark:border-blue-800">
          <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-6 flex items-center gap-3">
            <i class="fas fa-user-tie text-blue-500"></i>
            Kontak Perangkat Desa
          </h2>
          
          <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <?php 
            $petugasLayanan = [
              [
                'name' => 'Siti Aminah, S.Pd.',
                'position' => 'Kaur Pemerintahan',
                'avatar' => 'SitiLayanan',
                'phone' => '0857-1234-5678',
                'email' => 'sitiaminah@desabawang.id',
                'layanan' => 'Domisili, Pindah',
                'status' => 'active'
              ],
              [
                'name' => 'Rudi Hermawan, S.E.',
                'position' => 'Kaur Pembangunan',
                'avatar' => 'RudiLayanan',
                'phone' => '0812-3456-7890',
                'email' => 'rudihermawan@desabawang.id',
                'layanan' => 'Usaha, Tidak Mampu',
                'status' => 'active'
              ],
              [
                'name' => 'Maya Indah Sari, S.Sos.',
                'position' => 'Kaur Kesra',
                'avatar' => 'MayaLayanan',
                'phone' => '0813-4567-8901',
                'email' => 'mayaindah@desabawang.id',
                'layanan' => 'Kematian, Kelahiran',
                'status' => 'active'
              ],
              [
                'name' => 'Agus Setiawan, A.Md.',
                'position' => 'Kaur Umum',
                'avatar' => 'AgusLayanan',
                'phone' => '0821-2345-6789',
                'email' => 'agussetiawan@desabawang.id',
                'layanan' => 'Semua Layanan',
                'status' => 'backup'
              ]
            ];
            
            foreach($petugasLayanan as $petugas): 
            ?>
            <div class="group p-4 rounded-xl bg-white dark:bg-slate-800/50 border border-slate-200 dark:border-slate-700 hover:border-blue-300 dark:hover:border-blue-600 hover:shadow-lg transition-all duration-300 cursor-pointer">
              <div class="flex items-start gap-4 mb-4">
                <div class="relative">
                  <div class="w-14 h-14 rounded-xl overflow-hidden border-2 border-white dark:border-slate-700 shadow-md">
                    <img src="https://api.dicebear.com/7.x/avataaars/svg?seed=<?php echo $petugas['avatar']; ?>" 
                         alt="<?php echo $petugas['name']; ?>" 
                         class="w-full h-full">
                  </div>
                  <?php if($petugas['status'] == 'active'): ?>
                  <div class="absolute -bottom-1 -right-1 w-4 h-4 bg-emerald-500 rounded-full border-2 border-white dark:border-slate-800"></div>
                  <?php else: ?>
                  <div class="absolute -bottom-1 -right-1 w-4 h-4 bg-amber-500 rounded-full border-2 border-white dark:border-slate-800"></div>
                  <?php endif; ?>
                </div>
                <div class="flex-1">
                  <h4 class="font-bold text-slate-900 dark:text-white"><?php echo $petugas['name']; ?></h4>
                  <span class="text-sm text-slate-600 dark:text-slate-300"><?php echo $petugas['position']; ?></span>
                  <div class="mt-1">
                    <span class="px-2 py-0.5 bg-blue-100 dark:bg-blue-900/30 text-blue-600 dark:text-blue-300 rounded text-xs font-medium">
                      <?php echo $petugas['layanan']; ?>
                    </span>
                  </div>
                </div>
              </div>
              
              <div class="space-y-2 text-sm">
                <div class="flex items-center gap-2">
                  <i class="fas fa-phone text-blue-500 text-xs"></i>
                  <a href="tel:<?php echo str_replace('-', '', $petugas['phone']); ?>" class="text-slate-700 dark:text-slate-300 hover:text-blue-600 dark:hover:text-blue-400">
                    <?php echo $petugas['phone']; ?>
                  </a>
                </div>
                <div class="flex items-center gap-2">
                  <i class="fas fa-envelope text-blue-500 text-xs"></i>
                  <a href="mailto:<?php echo $petugas['email']; ?>" class="text-slate-700 dark:text-slate-300 hover:text-blue-600 dark:hover:text-blue-400">
                    <?php echo $petugas['email']; ?>
                  </a>
                </div>
              </div>
              
              <div class="mt-4 flex gap-2">
                <a href="https://wa.me/<?php echo str_replace(['-', ' '], '', substr($petugas['phone'], 3)); ?>?text=Halo%20<?php echo urlencode($petugas['name']); ?>%2C%20saya%20ingin%20bertanya%20tentang%20layanan%20desa"
                   target="_blank"
                   class="flex-1 py-2 bg-green-100 dark:bg-green-900/30 text-green-600 dark:text-green-400 font-medium rounded-lg hover:bg-green-200 dark:hover:bg-green-900/50 transition-colors duration-300 text-center text-sm">
                  <i class="fab fa-whatsapp mr-1"></i> WhatsApp
                </a>
                <button onclick="callNumber('<?php echo str_replace('-', '', $petugas['phone']); ?>')" class="flex-1 py-2 bg-blue-100 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400 font-medium rounded-lg hover:bg-blue-200 dark:hover:bg-blue-900/50 transition-colors duration-300 text-center text-sm">
                  <i class="fas fa-phone mr-1"></i> Telepon
                </button>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>

    <!-- FAQ & Bantuan -->
    <div class="bg-white dark:bg-slate-800 rounded-2xl shadow-xl p-8 border border-slate-100 dark:border-slate-700">
      <h2 class="text-2xl font-bold text-slate-900 dark:text-white mb-8 flex items-center gap-3">
        <i class="fas fa-question-circle text-blue-500"></i>
        FAQ & Bantuan
      </h2>
      
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="space-y-4">
          <div class="border border-slate-200 dark:border-slate-700 rounded-xl p-4">
            <button class="w-full text-left flex items-center justify-between" onclick="toggleFAQ(this)">
              <span class="font-medium text-slate-900 dark:text-white">Berapa lama proses pembuatan surat?</span>
              <i class="fas fa-chevron-down text-slate-500"></i>
            </button>
            <div class="mt-3 text-sm text-slate-600 dark:text-slate-300 hidden">
              Proses pembuatan surat memakan waktu 1-3 hari kerja, tergantung jenis surat dan kelengkapan dokumen.
            </div>
          </div>
          
          <div class="border border-slate-200 dark:border-slate-700 rounded-xl p-4">
            <button class="w-full text-left flex items-center justify-between" onclick="toggleFAQ(this)">
              <span class="font-medium text-slate-900 dark:text-white">Apakah ada biaya untuk pengajuan surat?</span>
              <i class="fas fa-chevron-down text-slate-500"></i>
            </button>
            <div class="mt-3 text-sm text-slate-600 dark:text-slate-300 hidden">
              Semua layanan surat di Desa Bawang GRATIS tanpa biaya administrasi.
            </div>
          </div>
          
          <div class="border border-slate-200 dark:border-slate-700 rounded-xl p-4">
            <button class="w-full text-left flex items-center justify-between" onclick="toggleFAQ(this)">
              <span class="font-medium text-slate-900 dark:text-white">Bagaimana cara mengambil surat yang sudah jadi?</span>
              <i class="fas fa-chevron-down text-slate-500"></i>
            </button>
            <div class="mt-3 text-sm text-slate-600 dark:text-slate-300 hidden">
              Surat dapat diambil di kantor desa dengan menunjukkan KTP asli. Bisa diwakilkan dengan membawa KTP pemohon dan surat kuasa.
            </div>
          </div>
        </div>
        
        <div class="space-y-4">
          <div class="border border-slate-200 dark:border-slate-700 rounded-xl p-4">
            <button class="w-full text-left flex items-center justify-between" onclick="toggleFAQ(this)">
              <span class="font-medium text-slate-900 dark:text-white">Apa saja dokumen yang perlu disiapkan?</span>
              <i class="fas fa-chevron-down text-slate-500"></i>
            </button>
            <div class="mt-3 text-sm text-slate-600 dark:text-slate-300 hidden">
              Umumnya KTP, KK, dan surat pengantar RT/RW. Untuk jenis surat tertentu mungkin membutuhkan dokumen tambahan.
            </div>
          </div>
          
          <div class="border border-slate-200 dark:border-slate-700 rounded-xl p-4">
            <button class="w-full text-left flex items-center justify-between" onclick="toggleFAQ(this)">
              <span class="font-medium text-slate-900 dark:text-white">Bagaimana jika ada kesalahan data di surat?</span>
              <i class="fas fa-chevron-down text-slate-500"></i>
            </button>
            <div class="mt-3 text-sm text-slate-600 dark:text-slate-300 hidden">
              Segera hubungi petugas layanan untuk perbaikan. Perbaikan bisa dilakukan dalam 1 hari kerja.
            </div>
          </div>
          
          <div class="border border-slate-200 dark:border-slate-700 rounded-xl p-4">
            <button class="w-full text-left flex items-center justify-between" onclick="toggleFAQ(this)">
              <span class="font-medium text-slate-900 dark:text-white">Bisakah pengajuan dilakukan di luar jam kerja?</span>
              <i class="fas fa-chevron-down text-slate-500"></i>
            </button>
            <div class="mt-3 text-sm text-slate-600 dark:text-slate-300 hidden">
              Pengajuan online bisa dilakukan 24 jam. Namun verifikasi dan proses hanya pada jam kerja.
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
  function animateFadeIn() {
    document.querySelectorAll('.animate-fade-in').forEach(el => {
      el.style.opacity = '1';
      el.style.transform = 'translateY(0)';
    });
  }

  // Fungsi untuk mengajukan layanan
  function ajukanLayanan(jenisLayanan) {
    // Set nilai dropdown
    const select = document.querySelector('select');
    const options = Array.from(select.options);
    const option = options.find(opt => opt.text === jenisLayanan);
    if (option) {
      select.value = option.value;
    }
    
    // Scroll ke form
    document.getElementById('formPengajuan').scrollIntoView({ 
      behavior: 'smooth',
      block: 'center'
    });
    
    // Focus ke input pertama
    const inputs = document.querySelectorAll('#formPengajuan input, #formPengajuan select, #formPengajuan textarea');
    if (inputs.length > 0) {
      setTimeout(() => inputs[0].focus(), 500);
    }
    
    // Notifikasi
    showNotification(`Mengajukan ${jenisLayanan}`, 'info');
  }

  // Fungsi untuk tracking pengajuan
  function trackPengajuan() {
    document.getElementById('nomorTracking').focus();
    showNotification('Masukkan nomor pengajuan Anda', 'info');
  }

  // Fungsi untuk melacak status
  function trackStatus() {
    const nomor = document.getElementById('nomorTracking').value.trim();
    
    if (!nomor) {
      showNotification('Masukkan nomor pengajuan terlebih dahulu', 'error');
      return;
    }
    
    // Simulasi loading
    const placeholder = document.getElementById('trackingPlaceholder');
    const result = document.getElementById('trackingResult');
    
    placeholder.style.display = 'none';
    result.classList.remove('hidden');
    
    // Scroll ke hasil
    result.scrollIntoView({ behavior: 'smooth', block: 'center' });
    
    showNotification(`Melacak status pengajuan ${nomor}`, 'success');
  }

  // Fungsi untuk toggle FAQ
  function toggleFAQ(button) {
    const content = button.parentElement.querySelector('div');
    const icon = button.querySelector('i');
    
    if (content.classList.contains('hidden')) {
      content.classList.remove('hidden');
      icon.classList.remove('fa-chevron-down');
      icon.classList.add('fa-chevron-up');
    } else {
      content.classList.add('hidden');
      icon.classList.remove('fa-chevron-up');
      icon.classList.add('fa-chevron-down');
    }
  }

  // Fungsi untuk panggilan telepon
  function callNumber(number) {
    if (confirm(`Apakah Anda ingin menghubungi ${number}?`)) {
      window.location.href = `tel:${number}`;
    }
  }

  // Fungsi untuk menampilkan panduan
  function showGuide() {
    const guideHTML = `
      <div class="fixed inset-0 bg-black/50 flex items-center justify-center z-50 p-4">
        <div class="bg-white dark:bg-slate-800 rounded-2xl max-w-2xl w-full max-h-[80vh] overflow-auto">
          <div class="p-6 border-b border-slate-200 dark:border-slate-700">
            <div class="flex items-center justify-between">
              <h3 class="text-xl font-bold text-slate-900 dark:text-white">Panduan Layanan Desa</h3>
              <button onclick="closeModal()" class="text-slate-500 hover:text-slate-700 dark:hover:text-slate-300">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <div class="p-6 space-y-4">
            <div>
              <h4 class="font-bold text-slate-900 dark:text-white mb-2">1. Pilih Jenis Layanan</h4>
              <p class="text-slate-600 dark:text-slate-300 text-sm">Pilih jenis surat yang Anda butuhkan dari daftar layanan.</p>
            </div>
            <div>
              <h4 class="font-bold text-slate-900 dark:text-white mb-2">2. Isi Formulir</h4>
              <p class="text-slate-600 dark:text-slate-300 text-sm">Lengkapi data diri dengan benar sesuai dokumen resmi.</p>
            </div>
            <div>
              <h4 class="font-bold text-slate-900 dark:text-white mb-2">3. Upload Dokumen</h4>
              <p class="text-slate-600 dark:text-slate-300 text-sm">Unggah scan/foto dokumen pendukung yang dibutuhkan.</p>
            </div>
            <div>
              <h4 class="font-bold text-slate-900 dark:text-white mb-2">4. Kirim Pengajuan</h4>
              <p class="text-slate-600 dark:text-slate-300 text-sm">Klik tombol kirim dan simpan nomor pengajuan untuk tracking.</p>
            </div>
            <div>
              <h4 class="font-bold text-slate-900 dark:text-white mb-2">5. Pantau Status</h4>
              <p class="text-slate-600 dark:text-slate-300 text-sm">Gunakan fitur tracking untuk mengetahui perkembangan pengajuan.</p>
            </div>
          </div>
          <div class="p-6 border-t border-slate-200 dark:border-slate-700">
            <button onclick="closeModal()" class="w-full py-3 bg-blue-500 text-white rounded-lg font-medium hover:bg-blue-600">
              Mengerti
            </button>
          </div>
        </div>
      </div>
    `;
    
    document.body.insertAdjacentHTML('beforeend', guideHTML);
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

  // Handle form submission
  document.getElementById('formPengajuan')?.addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Simulasi pengiriman
    const submitBtn = this.querySelector('button[type="submit"]');
    const originalText = submitBtn.innerHTML;
    
    submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Mengirim...';
    submitBtn.disabled = true;
    
    // Simulasi delay
    setTimeout(() => {
      showNotification('Pengajuan berhasil dikirim! Nomor pengajuan: SKD-2024-00124', 'success');
      
      // Reset form
      this.reset();
      
      // Reset button
      submitBtn.innerHTML = originalText;
      submitBtn.disabled = false;
      
      // Show tracking info
      document.getElementById('nomorTracking').value = 'SKD-2024-00124';
      trackStatus();
    }, 2000);
  });

  // Initialize animations
  document.addEventListener('DOMContentLoaded', function() {
    animateFadeIn();
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
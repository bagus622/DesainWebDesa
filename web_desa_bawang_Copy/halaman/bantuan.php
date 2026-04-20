<!-- halaman/bantuan.php -->
<?php
$bantuan = [
  [
    'nama'    => 'Bantuan Langsung Tunai (BLT) Dana Desa',
    'sasaran' => 'Keluarga prasejahtera terdampak ekonomi',
    'periode' => 'Triwulan',
    'status'  => 'Berjalan',
    'kuota'   => 75,
    'terdistribusi' => 68,
    'icon'    => '💰',
    'color'   => 'emerald',
    'info'    => 'Bantuan untuk keluarga kurang mampu yang terdampak ekonomi'
  ],
  [
    'nama'    => 'Bantuan Pupuk untuk Petani',
    'sasaran' => 'Kelompok Tani Desa Bawang',
    'periode' => 'Musim Tanam',
    'status'  => 'Berjalan',
    'kuota'   => 120,
    'terdistribusi' => 95,
    'icon'    => '🌱',
    'color'   => 'sky',
    'info'    => 'Subsidi pupuk untuk petani lokal mendukung produktivitas'
  ],
  [
    'nama'    => 'Program Beasiswa Siswa Berprestasi',
    'sasaran' => 'Pelajar SD/SMP/SMA asal Desa Bawang',
    'periode' => 'Tahunan',
    'status'  => 'Selesai',
    'kuota'   => 15,
    'terdistribusi' => 15,
    'icon'    => '🎓',
    'color'   => 'violet',
    'info'    => 'Dukungan pendidikan untuk pelajar berprestasi'
  ],
  [
    'nama'    => 'Bantuan Modal Usaha UMKM',
    'sasaran' => 'Pengusaha Mikro Desa Bawang',
    'periode' => 'Semester',
    'status'  => 'Rencana',
    'kuota'   => 30,
    'terdistribusi' => 0,
    'icon'    => '🏪',
    'color'   => 'amber',
    'info'    => 'Pinjaman lunak untuk pengembangan usaha mikro'
  ],
  [
    'nama'    => 'Bantuan Sembako Lansia',
    'sasaran' => 'Warga Lansia (≥ 60 tahun)',
    'periode' => 'Bulanan',
    'status'  => 'Berjalan',
    'kuota'   => 45,
    'terdistribusi' => 42,
    'icon'    => '👵',
    'color'   => 'rose',
    'info'    => 'Paket sembako untuk warga lansia kurang mampu'
  ],
  [
    'nama'    => 'Bantuan Sarana Air Bersih',
    'sasaran' => 'Rumah Tangga Kesulitan Air',
    'periode' => 'Insidental',
    'status'  => 'Berjalan',
    'kuota'   => 25,
    'terdistribusi' => 18,
    'icon'    => '💧',
    'color'   => 'blue',
    'info'    => 'Instalasi dan perbaikan sarana air bersih rumah tangga'
  ]
];

// Hitung ringkasan
$totalProgram    = count($bantuan);
$totalKuota      = 0;
$totalTerdistribusi = 0;
$jumlahBerjalan  = 0;
$jumlahSelesai   = 0;
$jumlahRencana   = 0;

foreach ($bantuan as $b) {
  if ($b['status'] === 'Berjalan')  $jumlahBerjalan++;
  elseif ($b['status'] === 'Selesai') $jumlahSelesai++;
  else $jumlahRencana++;
  
  $totalKuota += $b['kuota'];
  $totalTerdistribusi += $b['terdistribusi'];
}

$persenDistribusi = $totalKuota > 0 ? round(($totalTerdistribusi / $totalKuota) * 100, 1) : 0;
?>

<section class="bg-white dark:bg-gray-800 rounded-2xl shadow-xl p-6 md:p-8 border border-slate-100 dark:border-gray-700 overflow-hidden">

  <!-- Background pattern dekoratif -->
  <div class="absolute -top-20 -right-20 w-60 h-60 bg-gradient-to-br from-emerald-500/5 to-sky-500/5 dark:from-gray-900 dark:to-gray-800 rounded-full opacity-30"></div>
  <div class="absolute -bottom-20 -left-20 w-60 h-60 bg-gradient-to-tr from-amber-500/5 to-rose-500/5 dark:from-gray-900 dark:to-gray-800 rounded-full opacity-20"></div>

  <!-- HEADER -->
  <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-8 relative z-10">
    <div class="max-w-2xl">
      <div class="flex items-center gap-3 mb-3">
        <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-emerald-500 to-sky-500 flex items-center justify-center shadow-md">
          <span class="text-lg text-white">🤝</span>
        </div>
        <h1 class="text-2xl md:text-3xl lg:text-4xl font-bold text-slate-900 dark:text-white">
          <span class="bg-gradient-to-r from-emerald-600 to-sky-600 bg-clip-text text-transparent">
            Informasi Bantuan Desa
          </span>
        </h1>
      </div>
      <p class="text-sm md:text-base text-slate-700 dark:text-gray-300 leading-relaxed">
        Program bantuan yang dikelola Pemerintah Desa Bawang untuk meningkatkan kesejahteraan
        masyarakat melalui dukungan sosial, pendidikan, pertanian, dan ekonomi kreatif.
      </p>
    </div>
    <div class="self-start md:self-auto mt-4 md:mt-0">
      <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-gradient-to-r from-emerald-50 to-sky-50 dark:from-gray-700 dark:to-gray-700 border border-emerald-200 dark:border-gray-600 shadow-sm">
        <div class="relative">
          <span class="w-3 h-3 rounded-full bg-emerald-500 animate-pulse"></span>
          <span class="absolute top-0 left-0 w-3 h-3 rounded-full bg-emerald-500 animate-ping opacity-75"></span>
        </div>
        <span class="text-sm font-medium text-emerald-800 dark:text-gray-300"><?php echo $totalProgram; ?> Program Aktif</span>
      </div>
    </div>
  </div>

  <!-- RINGKASAN PROGRAM - Lebih visual -->
  <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-5 md:gap-6 mb-10 relative z-10">
    <div class="group bg-gradient-to-br from-white to-slate-50 dark:from-gray-800 dark:to-gray-900 rounded-2xl border border-slate-200 dark:border-gray-700 p-6 shadow-md hover:shadow-xl hover:-translate-y-1 transition-all duration-300 relative overflow-hidden">
      <div class="absolute -right-4 -top-4 w-20 h-20 bg-sky-500/10 dark:bg-sky-900 rounded-full opacity-20"></div>
      <div class="flex items-start justify-between mb-4">
        <div class="w-12 h-12 rounded-xl bg-sky-100 dark:bg-sky-900 flex items-center justify-center text-xl">
          📋
        </div>
        <span class="text-xs font-semibold px-2 py-1 rounded-full bg-sky-100 dark:bg-sky-900 text-sky-700 dark:text-sky-300">Total</span>
      </div>
      <p class="text-xs uppercase tracking-wider text-slate-500 dark:text-gray-400 mb-2">Total Program</p>
      <p class="text-2xl md:text-3xl font-black text-slate-900 dark:text-white mb-1"><?php echo $totalProgram; ?></p>
      <p class="text-sm text-slate-600 dark:text-gray-400">Program bantuan aktif</p>
      <div class="mt-4 pt-4 border-t border-slate-100 dark:border-gray-700">
        <div class="flex items-center gap-2 text-xs">
          <span class="w-2 h-2 rounded-full bg-sky-500"></span>
          <span class="text-slate-600 dark:text-gray-400"><?php echo $totalKuota; ?> Penerima</span>
        </div>
      </div>
    </div>

    <div class="group bg-gradient-to-br from-white to-slate-50 dark:from-gray-800 dark:to-gray-900 rounded-2xl border border-slate-200 dark:border-gray-700 p-6 shadow-md hover:shadow-xl hover:-translate-y-1 transition-all duration-300 relative overflow-hidden">
      <div class="absolute -right-4 -top-4 w-20 h-20 bg-amber-500/10 dark:bg-amber-900 rounded-full opacity-20"></div>
      <div class="flex items-start justify-between mb-4">
        <div class="w-12 h-12 rounded-xl bg-amber-100 dark:bg-amber-900 flex items-center justify-center text-xl">
          ⏳
        </div>
        <span class="text-xs font-semibold px-2 py-1 rounded-full bg-amber-100 dark:bg-amber-900 text-amber-700 dark:text-amber-300">Berjalan</span>
      </div>
      <p class="text-xs uppercase tracking-wider text-slate-500 dark:text-gray-400 mb-2">Sedang Berjalan</p>
      <p class="text-2xl md:text-3xl font-black text-slate-900 dark:text-white mb-1"><?php echo $jumlahBerjalan; ?></p>
      <p class="text-sm text-slate-600 dark:text-gray-400">Program aktif</p>
      <div class="mt-4 pt-4 border-t border-slate-100 dark:border-gray-700">
        <div class="flex items-center gap-2 text-xs">
          <span class="w-2 h-2 rounded-full bg-amber-500 animate-pulse"></span>
          <span class="text-slate-600 dark:text-gray-400">Dapat diakses</span>
        </div>
      </div>
    </div>

    <div class="group bg-gradient-to-br from-white to-slate-50 dark:from-gray-800 dark:to-gray-900 rounded-2xl border border-slate-200 dark:border-gray-700 p-6 shadow-md hover:shadow-xl hover:-translate-y-1 transition-all duration-300 relative overflow-hidden">
      <div class="absolute -right-4 -top-4 w-20 h-20 bg-emerald-500/10 dark:bg-emerald-900 rounded-full opacity-20"></div>
      <div class="flex items-start justify-between mb-4">
        <div class="w-12 h-12 rounded-xl bg-emerald-100 dark:bg-emerald-900 flex items-center justify-center text-xl">
          ✅
        </div>
        <span class="text-xs font-semibold px-2 py-1 rounded-full bg-emerald-100 dark:bg-emerald-900 text-emerald-700 dark:text-emerald-300">Selesai</span>
      </div>
      <p class="text-xs uppercase tracking-wider text-slate-500 dark:text-gray-400 mb-2">Program Selesai</p>
      <p class="text-2xl md:text-3xl font-black text-slate-900 dark:text-white mb-1"><?php echo $jumlahSelesai; ?></p>
      <p class="text-sm text-slate-600 dark:text-gray-400">Telah direalisasikan</p>
      <div class="mt-4 pt-4 border-t border-slate-100 dark:border-gray-700">
        <div class="flex items-center gap-2 text-xs">
          <span class="w-2 h-2 rounded-full bg-emerald-500"></span>
          <span class="text-slate-600 dark:text-gray-400">100% terdistribusi</span>
        </div>
      </div>
    </div>

    <div class="group bg-gradient-to-br from-white to-slate-50 dark:from-gray-800 dark:to-gray-900 rounded-2xl border border-slate-200 dark:border-gray-700 p-6 shadow-md hover:shadow-xl hover:-translate-y-1 transition-all duration-300 relative overflow-hidden">
      <div class="absolute -right-4 -top-4 w-20 h-20 bg-blue-500/10 dark:bg-blue-900 rounded-full opacity-20"></div>
      <div class="flex items-start justify-between mb-4">
        <div class="w-12 h-12 rounded-xl bg-blue-100 dark:bg-blue-900 flex items-center justify-center text-xl">
          📊
        </div>
        <span class="text-xs font-semibold px-2 py-1 rounded-full bg-blue-100 dark:bg-blue-900 text-blue-700 dark:text-blue-300">Distribusi</span>
      </div>
      <p class="text-xs uppercase tracking-wider text-slate-500 dark:text-gray-400 mb-2">% Terdistribusi</p>
      <p class="text-2xl md:text-3xl font-black text-slate-900 dark:text-white mb-1"><?php echo $persenDistribusi; ?>%</p>
      <div class="mt-3">
        <div class="w-full h-3 rounded-full bg-slate-100 dark:bg-gray-700 overflow-hidden">
          <div class="h-3 rounded-full bg-gradient-to-r from-blue-400 to-emerald-500" style="width: <?php echo min($persenDistribusi, 100); ?>%"></div>
        </div>
        <div class="flex justify-between mt-1">
          <span class="text-[10px] text-slate-500 dark:text-gray-400"><?php echo $totalTerdistribusi; ?>/<?php echo $totalKuota; ?></span>
          <span class="text-[10px] text-slate-500 dark:text-gray-400"><?php echo $persenDistribusi; ?>%</span>
        </div>
      </div>
    </div>
  </div>

  <!-- FILTER STATUS -->
  <div class="mb-8 relative z-10">
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-6">
      <h2 class="text-lg md:text-xl font-bold text-slate-900 dark:text-white flex items-center gap-3">
        <div class="w-2 h-8 rounded-full bg-gradient-to-b from-emerald-500 to-sky-500"></div>
        <span>Daftar Program Bantuan</span>
      </h2>
      <div class="flex flex-wrap gap-2">
        <button class="filter-btn active px-3 py-1.5 rounded-full bg-emerald-100 dark:bg-emerald-900 text-emerald-700 dark:text-emerald-300 text-xs font-semibold transition-colors" data-filter="all">
          Semua (<?php echo $totalProgram; ?>)
        </button>
        <button class="filter-btn px-3 py-1.5 rounded-full bg-amber-100 dark:bg-amber-900 text-amber-700 dark:text-amber-300 text-xs font-semibold transition-colors" data-filter="berjalan">
          Berjalan (<?php echo $jumlahBerjalan; ?>)
        </button>
        <button class="filter-btn px-3 py-1.5 rounded-full bg-emerald-100 dark:bg-emerald-900 text-emerald-700 dark:text-emerald-300 text-xs font-semibold transition-colors" data-filter="selesai">
          Selesai (<?php echo $jumlahSelesai; ?>)
        </button>
        <button class="filter-btn px-3 py-1.5 rounded-full bg-slate-100 dark:bg-gray-700 text-slate-700 dark:text-gray-300 text-xs font-semibold transition-colors" data-filter="rencana">
          Rencana (<?php echo $jumlahRencana; ?>)
        </button>
      </div>
    </div>
  </div>

  <!-- DAFTAR PROGRAM BANTUAN -->
  <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 relative z-10" id="program-container">
    <?php foreach ($bantuan as $index => $item): ?>
      <?php
        // Warna & ikon berdasarkan status
        if ($item['status'] === 'Selesai') {
          $badgeClass = 'bg-emerald-100 dark:bg-emerald-900 text-emerald-700 dark:text-emerald-300';
          $statusClass = 'selesai';
          $persen = 100;
        } elseif ($item['status'] === 'Berjalan') {
          $badgeClass = 'bg-amber-100 dark:bg-amber-900 text-amber-700 dark:text-amber-300';
          $statusClass = 'berjalan';
          $persen = $item['kuota'] > 0 ? round(($item['terdistribusi'] / $item['kuota']) * 100) : 0;
        } else {
          $badgeClass = 'bg-slate-100 dark:bg-gray-700 text-slate-700 dark:text-gray-300';
          $statusClass = 'rencana';
          $persen = 0;
        }
      ?>
      
      <div class="group program-card bg-gradient-to-b from-white to-slate-50 dark:from-gray-800 dark:to-gray-900 rounded-2xl border border-slate-200 dark:border-gray-700 p-6 shadow-md hover:shadow-xl hover:-translate-y-2 transition-all duration-300 relative overflow-hidden" data-status="<?php echo $statusClass; ?>">
        
        <!-- Background berdasarkan warna program -->
        <div class="absolute -right-6 -top-6 w-24 h-24 <?php 
          if ($item['color'] === 'emerald') echo 'bg-emerald-500/5 dark:bg-emerald-900/30';
          elseif ($item['color'] === 'sky') echo 'bg-sky-500/5 dark:bg-sky-900/30';
          elseif ($item['color'] === 'violet') echo 'bg-violet-500/5 dark:bg-violet-900/30';
          elseif ($item['color'] === 'amber') echo 'bg-amber-500/5 dark:bg-amber-900/30';
          elseif ($item['color'] === 'rose') echo 'bg-rose-500/5 dark:bg-rose-900/30';
          elseif ($item['color'] === 'blue') echo 'bg-blue-500/5 dark:bg-blue-900/30';
          else echo 'bg-gray-500/5 dark:bg-gray-900/30';
        ?> rounded-full opacity-50"></div>
        
        <!-- Header Card -->
        <div class="flex items-start justify-between mb-5 relative z-10">
          <div class="w-14 h-14 rounded-xl <?php 
            if ($item['color'] === 'emerald') echo 'bg-emerald-100 dark:bg-emerald-900';
            elseif ($item['color'] === 'sky') echo 'bg-sky-100 dark:bg-sky-900';
            elseif ($item['color'] === 'violet') echo 'bg-violet-100 dark:bg-violet-900';
            elseif ($item['color'] === 'amber') echo 'bg-amber-100 dark:bg-amber-900';
            elseif ($item['color'] === 'rose') echo 'bg-rose-100 dark:bg-rose-900';
            elseif ($item['color'] === 'blue') echo 'bg-blue-100 dark:bg-blue-900';
            else echo 'bg-gray-100 dark:bg-gray-900';
          ?> flex items-center justify-center text-2xl">
            <?php echo $item['icon']; ?>
          </div>
          <div class="<?php echo $badgeClass; ?> text-xs font-semibold px-3 py-1.5 rounded-full">
            <?php echo $item['status']; ?>
          </div>
        </div>
        
        <!-- Nama Program -->
        <h3 class="text-base font-bold text-slate-900 dark:text-white mb-3 group-hover:text-<?php echo $item['color']; ?>-600 dark:group-hover:text-<?php echo $item['color']; ?>-400 transition-colors">
          <?php echo $item['nama']; ?>
        </h3>
        
        <!-- Info Program -->
        <div class="space-y-3 mb-5">
          <div class="flex items-center gap-2">
            <span class="text-xs font-semibold text-slate-700 dark:text-gray-300">🎯 Sasaran:</span>
            <span class="text-xs text-slate-600 dark:text-gray-400"><?php echo $item['sasaran']; ?></span>
          </div>
          <div class="flex items-center gap-2">
            <span class="text-xs font-semibold text-slate-700 dark:text-gray-300">📅 Periode:</span>
            <span class="text-xs text-slate-600 dark:text-gray-400"><?php echo $item['periode']; ?></span>
          </div>
          <div class="flex items-center gap-2">
            <span class="text-xs font-semibold text-slate-700 dark:text-gray-300">ℹ️ Info:</span>
            <span class="text-xs text-slate-600 dark:text-gray-400"><?php echo $item['info']; ?></span>
          </div>
        </div>
        
        <!-- Progress Distribusi -->
        <?php if ($item['status'] !== 'Rencana'): ?>
        <div class="mb-5">
          <div class="flex justify-between text-xs text-slate-600 dark:text-gray-400 mb-1">
            <span>Distribusi: <?php echo $item['terdistribusi']; ?>/<?php echo $item['kuota']; ?></span>
            <span><?php echo $persen; ?>%</span>
          </div>
          <div class="w-full h-2 rounded-full bg-slate-100 dark:bg-gray-700 overflow-hidden">
            <div 
              class="h-2 rounded-full <?php 
                if ($item['color'] === 'emerald') echo 'bg-gradient-to-r from-emerald-400 to-emerald-600';
                elseif ($item['color'] === 'sky') echo 'bg-gradient-to-r from-sky-400 to-sky-600';
                elseif ($item['color'] === 'violet') echo 'bg-gradient-to-r from-violet-400 to-violet-600';
                elseif ($item['color'] === 'amber') echo 'bg-gradient-to-r from-amber-400 to-amber-600';
                elseif ($item['color'] === 'rose') echo 'bg-gradient-to-r from-rose-400 to-rose-600';
                elseif ($item['color'] === 'blue') echo 'bg-gradient-to-r from-blue-400 to-blue-600';
                else echo 'bg-gradient-to-r from-gray-400 to-gray-600';
              ?>" 
              style="width: <?php echo $persen; ?>%"
            ></div>
          </div>
        </div>
        <?php endif; ?>
        
        <!-- Call to Action -->
        <div class="pt-5 border-t border-slate-100 dark:border-gray-700">
          <button class="w-full py-2.5 rounded-lg bg-slate-100 dark:bg-gray-700 text-slate-700 dark:text-gray-300 text-sm font-semibold hover:bg-<?php echo $item['color']; ?>-100 dark:hover:bg-<?php echo $item['color']; ?>-900 hover:text-<?php echo $item['color']; ?>-700 dark:hover:text-<?php echo $item['color']; ?>-300 transition-colors flex items-center justify-center gap-2">
            ℹ️ Info Detail & Pendaftaran
          </button>
        </div>
        
      </div>
    <?php endforeach; ?>
  </div>
  
  <!-- INFO PENTING -->
  <div class="mt-12 pt-8 border-t border-slate-100 dark:border-gray-700 relative z-10">
    <div class="bg-gradient-to-r from-emerald-50 to-sky-50 dark:from-gray-800 dark:to-gray-900 rounded-2xl border border-emerald-200 dark:border-gray-700 p-6">
      <h3 class="text-lg font-bold text-slate-900 dark:text-white mb-4 flex items-center gap-3">
        <div class="w-8 h-8 rounded-lg bg-emerald-100 dark:bg-emerald-900 flex items-center justify-center">📢</div>
        <span>Informasi Penting untuk Penerima Bantuan</span>
      </h3>
      
      <div class="grid md:grid-cols-2 gap-6">
        <div class="space-y-3">
          <h4 class="text-sm font-semibold text-slate-900 dark:text-white">📋 Persyaratan Umum</h4>
          <ul class="space-y-2 text-sm text-slate-700 dark:text-gray-300">
            <li class="flex items-start gap-2">
              <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 mt-1.5"></span>
              Kartu Keluarga (KK) asli dan fotokopi
            </li>
            <li class="flex items-start gap-2">
              <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 mt-1.5"></span>
              KTP asli dan fotokopi
            </li>
            <li class="flex items-start gap-2">
              <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 mt-1.5"></span>
              Surat keterangan tidak mampu dari RT/RW
            </li>
            <li class="flex items-start gap-2">
              <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 mt-1.5"></span>
              Data pendukung sesuai jenis bantuan
            </li>
          </ul>
        </div>
        
        <div class="space-y-3">
          <h4 class="text-sm font-semibold text-slate-900 dark:text-white">📍 Tata Cara Pendaftaran</h4>
          <ul class="space-y-2 text-sm text-slate-700 dark:text-gray-300">
            <li class="flex items-start gap-2">
              <span class="w-1.5 h-1.5 rounded-full bg-sky-500 mt-1.5"></span>
              Datang ke Kantor Desa dengan membawa berkas
            </li>
            <li class="flex items-start gap-2">
              <span class="w-1.5 h-1.5 rounded-full bg-sky-500 mt-1.5"></span>
              Mengisi formulir pendaftaran di loket
            </li>
            <li class="flex items-start gap-2">
              <span class="w-1.5 h-1.5 rounded-full bg-sky-500 mt-1.5"></span>
              Verifikasi data oleh petugas desa
            </li>
            <li class="flex items-start gap-2">
              <span class="w-1.5 h-1.5 rounded-full bg-sky-500 mt-1.5"></span>
              Tunggu pengumuman penerima bantuan
            </li>
          </ul>
        </div>
      </div>
      
      <div class="mt-6 pt-6 border-t border-slate-200 dark:border-gray-700">
        <p class="text-sm text-slate-700 dark:text-gray-300">
          <strong>📞 Kontak Informasi:</strong> Kantor Desa Bawang (Senin-Jumat, 08.00-15.00 WIB) 
          atau hubungi perangkat desa setempat.
        </p>
      </div>
    </div>
  </div>

</section>

<style>
/* Filter button active state */
.filter-btn.active {
  background-color: #3b82f6 !important;
  color: white !important;
}

/* Program card hidden by filter */
.program-card.hidden {
  display: none;
}

/* Animasi untuk card muncul */
@keyframes fadeInUp {
  from {
    opacity: 0;
    transform: translateY(20px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

.program-card {
  animation: fadeInUp 0.5s ease-out;
}

/* Color classes untuk hover */
.hover\:text-emerald-600:hover { color: #059669; }
.hover\:text-sky-600:hover { color: #0284c7; }
.hover\:text-violet-600:hover { color: #7c3aed; }
.hover\:text-amber-600:hover { color: #d97706; }
.hover\:text-rose-600:hover { color: #e11d48; }
.hover\:text-blue-600:hover { color: #2563eb; }

.dark .hover\:text-emerald-400:hover { color: #34d399; }
.dark .hover\:text-sky-400:hover { color: #38bdf8; }
.dark .hover\:text-violet-400:hover { color: #a78bfa; }
.dark .hover\:text-amber-400:hover { color: #fbbf24; }
.dark .dark .hover\:text-rose-400:hover { color: #fb7185; }
.dark .hover\:text-blue-400:hover { color: #60a5fa; }

/* Background hover colors */
.hover\:bg-emerald-100:hover { background-color: #d1fae5; }
.hover\:bg-sky-100:hover { background-color: #e0f2fe; }
.hover\:bg-violet-100:hover { background-color: #ede9fe; }
.hover\:bg-amber-100:hover { background-color: #fef3c7; }
.hover\:bg-rose-100:hover { background-color: #ffe4e6; }
.hover\:bg-blue-100:hover { background-color: #dbeafe; }

.dark .hover\:bg-emerald-900:hover { background-color: #064e3b; }
.dark .hover\:bg-sky-900:hover { background-color: #0c4a6e; }
.dark .hover\:bg-violet-900:hover { background-color: #4c1d95; }
.dark .hover\:bg-amber-900:hover { background-color: #78350f; }
.dark .hover\:bg-rose-900:hover { background-color: #881337; }
.dark .hover\:bg-blue-900:hover { background-color: #1e3a8a; }

/* Text hover colors */
.hover\:text-emerald-700:hover { color: #047857; }
.hover\:text-sky-700:hover { color: #0369a1; }
.hover\:text-violet-700:hover { color: #6d28d9; }
.hover\:text-amber-700:hover { color: #b45309; }
.hover\:text-rose-700:hover { color: #be123c; }
.hover\:text-blue-700:hover { color: #1d4ed8; }

.dark .hover\:text-emerald-300:hover { color: #6ee7b7; }
.dark .hover\:text-sky-300:hover { color: #7dd3fc; }
.dark .hover\:text-violet-300:hover { color: #c4b5fd; }
.dark .hover\:text-amber-300:hover { color: #fcd34d; }
.dark .hover\:text-rose-300:hover { color: #fda4af; }
.dark .hover\:text-blue-300:hover { color: #93c5fd; }
</style>

<script>
// Filter program berdasarkan status
document.addEventListener('DOMContentLoaded', function() {
  const filterButtons = document.querySelectorAll('.filter-btn');
  const programCards = document.querySelectorAll('.program-card');
  
  filterButtons.forEach(button => {
    button.addEventListener('click', function() {
      // Remove active class from all buttons
      filterButtons.forEach(btn => btn.classList.remove('active'));
      
      // Add active class to clicked button
      this.classList.add('active');
      
      const filter = this.getAttribute('data-filter');
      
      // Filter program cards
      programCards.forEach(card => {
        const status = card.getAttribute('data-status');
        
        if (filter === 'all' || status === filter) {
          card.classList.remove('hidden');
          setTimeout(() => {
            card.style.opacity = '1';
            card.style.transform = 'translateY(0)';
          }, 10);
        } else {
          card.style.opacity = '0';
          card.style.transform = 'translateY(20px)';
          setTimeout(() => {
            card.classList.add('hidden');
          }, 300);
        }
      });
    });
  });
});
</script>
<!-- halaman/transparansi-anggaran.php -->
<section class="bg-white dark:bg-gray-800 rounded-2xl shadow-xl p-6 md:p-8 border border-slate-100 dark:border-gray-700 overflow-hidden relative">

  <!-- Background pattern dekoratif -->
  <div class="absolute -top-24 -right-24 w-72 h-72 bg-gradient-to-br from-desaBiru/5 to-emerald-500/5 dark:from-gray-900 dark:to-gray-800 rounded-full opacity-30"></div>
  <div class="absolute -bottom-24 -left-24 w-72 h-72 bg-gradient-to-tr from-amber-500/5 to-sky-500/5 dark:from-gray-900 dark:to-gray-800 rounded-full opacity-20"></div>

  <!-- HEADER -->
  <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-8 relative z-10">
    <div class="max-w-2xl">
      <div class="flex items-center gap-3 mb-3">
        <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-desaBiru to-emerald-500 flex items-center justify-center shadow-md">
          <span class="text-lg text-white">💰</span>
        </div>
        <h1 class="text-2xl md:text-3xl lg:text-4xl font-bold text-slate-900 dark:text-white">
          <span class="bg-gradient-to-r from-desaBiru to-emerald-600 bg-clip-text text-transparent">
            Transparansi Anggaran Desa
          </span>
        </h1>
      </div>
      <p class="text-sm md:text-base text-slate-700 dark:text-gray-300 leading-relaxed">
        Laporan transparansi penggunaan anggaran Desa Bawang dalam satu tahun anggaran. 
        Data ini menunjukkan akuntabilitas dan tata kelola keuangan desa yang baik untuk pembangunan berkelanjutan.
      </p>
    </div>
    <div class="self-start md:self-auto mt-4 md:mt-0">
      <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-gradient-to-r from-sky-50 to-emerald-50 dark:from-gray-700 dark:to-gray-700 border border-sky-200 dark:border-gray-600 shadow-sm">
        <div class="relative">
          <span class="w-3 h-3 rounded-full bg-emerald-500 animate-pulse"></span>
          <span class="absolute top-0 left-0 w-3 h-3 rounded-full bg-emerald-500 animate-ping opacity-75"></span>
        </div>
        <span class="text-sm font-medium text-sky-800 dark:text-gray-300">APBDes 2024</span>
      </div>
    </div>
  </div>

  <?php
  // Data dalam bentuk angka murni agar bisa dihitung
  $anggaran = [
    [
      'program'   => 'Hasil Aset Desa',
      'kode'      => '1.01',
      'anggaran'  => 451064000,
      'realisasi' => 224445000,
      'status'    => 'Selesai',
      'icon'      => '🏢',
      'color'     => 'sky',
      'color_class' => 'sky',
      'detail'    => 'Pemanfaatan aset desa untuk pendapatan tambahan'
    ],
    [
      'program'   => 'Swadaya, Partisipasi & Gotong Royong',
      'kode'      => '1.02',
      'anggaran'  => 6500000,
      'realisasi' => 6500000,
      'status'    => 'Selesai',
      'icon'      => '🤝',
      'color'     => 'emerald',
      'color_class' => 'emerald',
      'detail'    => 'Kontribusi masyarakat dalam pembangunan'
    ],
    [
      'program'   => 'Bagi Hasil Pajak dan Retribusi',
      'kode'      => '1.03',
      'anggaran'  => 108724000,
      'realisasi' => 30798000,
      'status'    => 'Selesai',
      'icon'      => '📊',
      'color'     => 'amber',
      'color_class' => 'amber',
      'detail'    => 'Penerimaan dari bagi hasil pajak daerah'
    ],
    [
      'program'   => 'Alokasi Dana Desa',
      'kode'      => '1.04',
      'anggaran'  => 371694000,
      'realisasi' => 207760000,
      'status'    => 'Selesai',
      'icon'      => '🏦',
      'color'     => 'violet',
      'color_class' => 'violet',
      'detail'    => 'Dana transfer dari pemerintah pusat'
    ],
    [
      'program'   => 'Alokasi Bantuan Covid-19',
      'kode'      => '1.05',
      'anggaran'  => 543211000,
      'realisasi' => 407760000,
      'status'    => 'Selesai',
      'icon'      => '🦠',
      'color'     => 'rose',
      'color_class' => 'rose',
      'detail'    => 'Dana transfer dari pemerintah pusat'
    ],
  ];

  // Mapping warna untuk chart
  $colorMapping = [
    'sky' => [
      'bg' => 'bg-sky-500',
      'from' => 'from-sky-500',
      'to' => 'to-sky-600',
      'light' => 'bg-sky-100',
      'text' => 'text-sky-700',
      'hex' => '#0ea5e9'
    ],
    'emerald' => [
      'bg' => 'bg-emerald-500',
      'from' => 'from-emerald-500',
      'to' => 'to-emerald-600',
      'light' => 'bg-emerald-100',
      'text' => 'text-emerald-700',
      'hex' => '#10b981'
    ],
    'amber' => [
      'bg' => 'bg-amber-500',
      'from' => 'from-amber-500',
      'to' => 'to-amber-600',
      'light' => 'bg-amber-100',
      'text' => 'text-amber-700',
      'hex' => '#f59e0b'
    ],
    'violet' => [
      'bg' => 'bg-violet-500',
      'from' => 'from-violet-500',
      'to' => 'to-violet-600',
      'light' => 'bg-violet-100',
      'text' => 'text-violet-700',
      'hex' => '#8b5cf6'
    ],
    'rose' => [
      'bg' => 'bg-rose-500',
      'from' => 'from-rose-500',
      'to' => 'to-rose-600',
      'light' => 'bg-rose-100',
      'text' => 'text-rose-700',
      'hex' => '#f43f5e'
    ]
  ];

  $totalAnggaran  = 0;
  $totalRealisasi = 0;
  $totalProgram   = count($anggaran);

  foreach ($anggaran as $row) {
    $totalAnggaran  += $row['anggaran'];
    $totalRealisasi += $row['realisasi'];
  }

  $persenTotal = $totalAnggaran > 0 ? round(($totalRealisasi / $totalAnggaran) * 100, 1) : 0;
  $sisaAnggaran = $totalAnggaran - $totalRealisasi;

  function rupiah($angka) {
    return 'Rp' . number_format($angka, 0, ',', '.');
  }

  function formatRupiahShort($angka) {
    if ($angka >= 1000000000) {
      return 'Rp' . number_format($angka / 1000000000, 1, ',', '.') . 'M';
    } elseif ($angka >= 1000000) {
      return 'Rp' . number_format($angka / 1000000, 1, ',', '.') . 'Jt';
    } elseif ($angka >= 1000) {
      return 'Rp' . number_format($angka / 1000, 1, ',', '.') . 'Rb';
    }
    return 'Rp' . number_format($angka, 0, ',', '.');
  }
  ?>

  <!-- RINGKASAN ATAS - Lebih visual -->
  <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-5 md:gap-6 mb-10 relative z-10">
    <!-- Total Anggaran -->
    <div class="group bg-gradient-to-br from-white to-slate-50 dark:from-gray-800 dark:to-gray-900 rounded-2xl border border-slate-200 dark:border-gray-700 p-6 shadow-md hover:shadow-xl hover:-translate-y-1 transition-all duration-300 relative overflow-hidden">
      <div class="absolute -right-4 -top-4 w-20 h-20 bg-desaBiru/10 dark:bg-desaBiru/20 rounded-full opacity-30"></div>
      <div class="flex items-start justify-between mb-4">
        <div class="w-12 h-12 rounded-xl bg-desaBiru/10 dark:bg-desaBiru/20 flex items-center justify-center text-xl">
          📋
        </div>
        <span class="text-xs font-semibold px-2 py-1 rounded-full bg-desaBiru/10 text-desaBiru dark:text-sky-300">Total</span>
      </div>
      <p class="text-xs uppercase tracking-wider text-slate-500 dark:text-gray-400 mb-2">Total Anggaran</p>
      <p class="text-2xl md:text-3xl font-black text-slate-900 dark:text-white mb-1"><?php echo formatRupiahShort($totalAnggaran); ?></p>
      <p class="text-sm text-slate-600 dark:text-gray-400"><?php echo rupiah($totalAnggaran); ?></p>
      <div class="mt-4 pt-4 border-t border-slate-100 dark:border-gray-700">
        <div class="flex items-center gap-2 text-xs">
          <span class="w-2 h-2 rounded-full bg-desaBiru"></span>
          <span class="text-slate-600 dark:text-gray-400"><?php echo $totalProgram; ?> Program</span>
        </div>
      </div>
    </div>

    <!-- Total Realisasi -->
    <div class="group bg-gradient-to-br from-white to-slate-50 dark:from-gray-800 dark:to-gray-900 rounded-2xl border border-slate-200 dark:border-gray-700 p-6 shadow-md hover:shadow-xl hover:-translate-y-1 transition-all duration-300 relative overflow-hidden">
      <div class="absolute -right-4 -top-4 w-20 h-20 bg-emerald-500/10 dark:bg-emerald-500/20 rounded-full opacity-30"></div>
      <div class="flex items-start justify-between mb-4">
        <div class="w-12 h-12 rounded-xl bg-emerald-500/10 dark:bg-emerald-500/20 flex items-center justify-center text-xl">
          ✅
        </div>
        <span class="text-xs font-semibold px-2 py-1 rounded-full bg-emerald-500/10 text-emerald-700 dark:text-emerald-300">Realisasi</span>
      </div>
      <p class="text-xs uppercase tracking-wider text-slate-500 dark:text-gray-400 mb-2">Total Realisasi</p>
      <p class="text-2xl md:text-3xl font-black text-slate-900 dark:text-white mb-1"><?php echo formatRupiahShort($totalRealisasi); ?></p>
      <p class="text-sm text-slate-600 dark:text-gray-400"><?php echo rupiah($totalRealisasi); ?></p>
      <div class="mt-4 pt-4 border-t border-slate-100 dark:border-gray-700">
        <div class="flex items-center gap-2 text-xs">
          <span class="w-2 h-2 rounded-full bg-emerald-500"></span>
          <span class="text-slate-600 dark:text-gray-400">100% Program Selesai</span>
        </div>
      </div>
    </div>

    <!-- Progress -->
    <div class="group bg-gradient-to-br from-white to-slate-50 dark:from-gray-800 dark:to-gray-900 rounded-2xl border border-slate-200 dark:border-gray-700 p-6 shadow-md hover:shadow-xl hover:-translate-y-1 transition-all duration-300 relative overflow-hidden">
      <div class="absolute -right-4 -top-4 w-20 h-20 bg-amber-500/10 dark:bg-amber-500/20 rounded-full opacity-30"></div>
      <div class="flex items-start justify-between mb-4">
        <div class="w-12 h-12 rounded-xl bg-amber-500/10 dark:bg-amber-500/20 flex items-center justify-center text-xl">
          📈
        </div>
        <span class="text-xs font-semibold px-2 py-1 rounded-full bg-amber-500/10 text-amber-700 dark:text-amber-300">Progress</span>
      </div>
      <p class="text-xs uppercase tracking-wider text-slate-500 dark:text-gray-400 mb-2">% Realisasi</p>
      <p class="text-2xl md:text-3xl font-black text-slate-900 dark:text-white mb-1"><?php echo $persenTotal; ?>%</p>
      <div class="mt-3">
        <div class="w-full h-3 rounded-full bg-slate-100 dark:bg-gray-700 overflow-hidden">
          <div class="h-3 rounded-full bg-gradient-to-r from-amber-400 to-emerald-500" style="width: <?php echo min($persenTotal, 100); ?>%"></div>
        </div>
        <div class="flex justify-between mt-1">
          <span class="text-[10px] text-slate-500 dark:text-gray-400">0%</span>
          <span class="text-[10px] text-slate-500 dark:text-gray-400">100%</span>
        </div>
      </div>
    </div>

    <!-- Sisa Anggaran -->
    <div class="group bg-gradient-to-br from-white to-slate-50 dark:from-gray-800 dark:to-gray-900 rounded-2xl border border-slate-200 dark:border-gray-700 p-6 shadow-md hover:shadow-xl hover:-translate-y-1 transition-all duration-300 relative overflow-hidden">
      <div class="absolute -right-4 -top-4 w-20 h-20 bg-rose-500/10 dark:bg-rose-500/20 rounded-full opacity-30"></div>
      <div class="flex items-start justify-between mb-4">
        <div class="w-12 h-12 rounded-xl bg-rose-500/10 dark:bg-rose-500/20 flex items-center justify-center text-xl">
          ⚖️
        </div>
        <span class="text-xs font-semibold px-2 py-1 rounded-full bg-rose-500/10 text-rose-700 dark:text-rose-300">Sisa</span>
      </div>
      <p class="text-xs uppercase tracking-wider text-slate-500 dark:text-gray-400 mb-2">Sisa Anggaran</p>
      <p class="text-2xl md:text-3xl font-black text-slate-900 dark:text-white mb-1"><?php echo formatRupiahShort($sisaAnggaran); ?></p>
      <p class="text-sm text-slate-600 dark:text-gray-400"><?php echo rupiah($sisaAnggaran); ?></p>
      <div class="mt-4 pt-4 border-t border-slate-100 dark:border-gray-700">
        <div class="flex items-center gap-2 text-xs">
          <span class="w-2 h-2 rounded-full bg-rose-500"></span>
          <span class="text-slate-600 dark:text-gray-400"><?php echo round((100 - $persenTotal), 1); ?>% dari total</span>
        </div>
      </div>
    </div>
  </div>

  <!-- DISTRIBUSI ANGGARAN PER PROGRAM -->
  <div class="mb-10 relative z-10">
    <div class="flex items-center justify-between mb-6">
      <h2 class="text-lg md:text-xl font-bold text-slate-900 dark:text-white flex items-center gap-3">
        <div class="w-2 h-8 rounded-full bg-gradient-to-b from-desaBiru to-emerald-500"></div>
        <span>Distribusi Anggaran per Program</span>
      </h2>
      <span class="text-xs font-medium px-3 py-1 rounded-full bg-desaBiru/10 text-desaBiru dark:text-sky-300">Visual Chart</span>
    </div>

    <div class="grid md:grid-cols-2 gap-8">
      <!-- Bar Chart Horizontal -->
      <div class="space-y-5">
        <?php foreach ($anggaran as $item): 
          $persen = $item['anggaran'] > 0 ? round(($item['realisasi'] / $item['anggaran']) * 100, 1) : 0;
          $persenAnggaran = $totalAnggaran > 0 ? round(($item['anggaran'] / $totalAnggaran) * 100, 1) : 0;
          $color = $colorMapping[$item['color_class']];
        ?>
          <div class="space-y-2">
            <div class="flex items-center justify-between">
              <div class="flex items-center gap-3">
                <div class="w-8 h-8 rounded-lg <?php echo $color['light']; ?> dark:bg-opacity-20 flex items-center justify-center">
                  <span class="text-sm"><?php echo $item['icon']; ?></span>
                </div>
                <div>
                  <span class="text-sm font-medium text-slate-900 dark:text-white"><?php echo $item['program']; ?></span>
                  <span class="block text-xs text-slate-500 dark:text-gray-400"><?php echo $item['kode']; ?></span>
                </div>
              </div>
              <span class="text-sm font-bold text-slate-900 dark:text-white"><?php echo $persenAnggaran; ?>%</span>
            </div>
            <div class="relative">
              <div class="w-full h-3 rounded-full bg-slate-100 dark:bg-gray-700 overflow-hidden">
                <div 
                  class="h-3 rounded-full <?php echo $color['bg']; ?>" 
                  style="width:<?php echo $persenAnggaran; ?>%"
                ></div>
              </div>
            </div>
            <div class="flex justify-between text-xs text-slate-600 dark:text-gray-400">
              <span><?php echo formatRupiahShort($item['anggaran']); ?></span>
              <span><?php echo $persenAnggaran; ?>% dari total</span>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

      <!-- Pie Chart Visual -->
      <div class="bg-gradient-to-br from-slate-50 to-white dark:from-gray-800 dark:to-gray-900 rounded-2xl border border-slate-200 dark:border-gray-700 p-6">
        <h3 class="text-base font-bold text-slate-900 dark:text-white mb-4">Proporsi Anggaran</h3>
        <div class="flex flex-col items-center justify-center">
          <!-- Simple Donut Chart -->
          <div class="relative w-48 h-48 mb-6">
            <div class="w-full h-full rounded-full border-8 border-slate-200 dark:border-gray-700 flex items-center justify-center">
              <div class="w-40 h-40 rounded-full bg-gradient-to-br from-sky-50 to-emerald-50 dark:from-gray-800 dark:to-gray-900 flex items-center justify-center flex-col">
                <div class="text-2xl font-black text-slate-900 dark:text-white"><?php echo round($persenTotal, 1); ?>%</div>
                <div class="text-xs text-slate-600 dark:text-gray-400 mt-1">Realisasi</div>
              </div>
            </div>
            
            <!-- Legend dengan warna -->
            <?php 
            $startAngle = 0;
            foreach ($anggaran as $index => $item):
              $persenAnggaran = $totalAnggaran > 0 ? ($item['anggaran'] / $totalAnggaran) * 100 : 0;
              $angle = ($persenAnggaran / 100) * 360;
              $color = $colorMapping[$item['color_class']];
            ?>
              <div 
                class="absolute top-0 left-0 w-full h-full rounded-full"
                style="
                  background: conic-gradient(
                    transparent <?php echo $startAngle; ?>deg,
                    <?php echo $color['hex']; ?> <?php echo $startAngle; ?>deg <?php echo $startAngle + $angle; ?>deg,
                    transparent <?php echo $startAngle + $angle; ?>deg
                  );
                  clip-path: circle(50% at 50% 50%);
                "
              ></div>
            <?php 
              $startAngle += $angle;
            endforeach; 
            ?>
          </div>
        </div>
        <div class="grid grid-cols-2 gap-3 mt-6">
          <?php foreach ($anggaran as $index => $item): 
            $persenAnggaran = $totalAnggaran > 0 ? round(($item['anggaran'] / $totalAnggaran) * 100, 1) : 0;
            $color = $colorMapping[$item['color_class']];
          ?>
            <div class="flex items-center gap-2">
              <div class="w-3 h-3 rounded-full" style="background-color: <?php echo $color['hex']; ?>"></div>
              <span class="text-xs text-slate-700 dark:text-gray-300"><?php echo $item['kode']; ?></span>
              <span class="text-xs font-semibold text-slate-900 dark:text-white ml-auto"><?php echo $persenAnggaran; ?>%</span>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>

  <!-- TABEL ANGGARAN DETAIL -->
  <div class="mb-10 relative z-10">
    <div class="flex items-center justify-between mb-6">
      <h2 class="text-lg md:text-xl font-bold text-slate-900 dark:text-white flex items-center gap-3">
        <div class="w-2 h-8 rounded-full bg-gradient-to-b from-emerald-500 to-sky-500"></div>
        <span>Detail Realisasi per Program</span>
      </h2>
      <span class="text-xs font-medium px-3 py-1 rounded-full bg-emerald-500/10 text-emerald-700 dark:text-emerald-300">Data Lengkap</span>
    </div>

    <div class="overflow-hidden rounded-2xl border border-slate-200 dark:border-gray-700 shadow-lg">
      <div class="overflow-x-auto">
        <table class="min-w-full text-sm">
          <thead class="bg-gradient-to-r from-slate-100 to-slate-50 dark:from-gray-700 dark:to-gray-800 text-slate-700 dark:text-gray-300 font-semibold">
            <tr>
              <th class="px-4 md:px-6 py-3 text-left">Program</th>
              <th class="px-4 md:px-6 py-3 text-left whitespace-nowrap">Anggaran</th>
              <th class="px-4 md:px-6 py-3 text-left whitespace-nowrap">Realisasi</th>
              <th class="px-4 md:px-6 py-3 text-left">Progress</th>
              <th class="px-4 md:px-6 py-3 text-left">Status</th>
            </tr>
          </thead>
          <tbody class="bg-white dark:bg-gray-800">
            <?php foreach ($anggaran as $row): 
              $persen = $row['anggaran'] > 0 ? round(($row['realisasi'] / $row['anggaran']) * 100, 1) : 0;
              $color = $colorMapping[$row['color_class']];
              
              // Tentukan warna progress bar
              if ($persen >= 80) {
                $progressColor = 'bg-emerald-500';
                $textColor = 'text-emerald-700';
                $bgColor = 'bg-emerald-100';
              } elseif ($persen >= 50) {
                $progressColor = 'bg-amber-400';
                $textColor = 'text-amber-700';
                $bgColor = 'bg-amber-100';
              } else {
                $progressColor = 'bg-rose-400';
                $textColor = 'text-rose-700';
                $bgColor = 'bg-rose-100';
              }
            ?>
              <tr class="border-t border-slate-100 dark:border-gray-700 hover:bg-slate-50 dark:hover:bg-gray-700/50 transition-all duration-200 group">
                <td class="px-4 md:px-6 py-4">
                  <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-lg <?php echo $color['light']; ?> dark:bg-opacity-20 flex items-center justify-center text-lg">
                      <?php echo $row['icon']; ?>
                    </div>
                    <div>
                      <div class="text-sm font-semibold text-slate-900 dark:text-white group-hover:text-desaBiru dark:group-hover:text-sky-400 transition-colors">
                        <?php echo $row['program']; ?>
                      </div>
                      <div class="text-xs text-slate-500 dark:text-gray-400 mt-1"><?php echo $row['detail']; ?></div>
                      <div class="text-xs text-slate-400 dark:text-gray-500 mt-1">Kode: <?php echo $row['kode']; ?></div>
                    </div>
                  </div>
                </td>
                <td class="px-4 md:px-6 py-4">
                  <div class="text-sm font-bold text-slate-900 dark:text-white"><?php echo rupiah($row['anggaran']); ?></div>
                  <div class="text-xs text-slate-500 dark:text-gray-400">Anggaran</div>
                </td>
                <td class="px-4 md:px-6 py-4">
                  <div class="text-sm font-bold text-slate-900 dark:text-white"><?php echo rupiah($row['realisasi']); ?></div>
                  <div class="text-xs text-slate-500 dark:text-gray-400">Realisasi</div>
                </td>
                <td class="px-4 md:px-6 py-4">
                  <div class="space-y-2">
                    <div class="flex items-center justify-between">
                      <span class="text-sm font-semibold <?php echo $textColor; ?> dark:text-white"><?php echo $persen; ?>%</span>
                      <span class="text-xs text-slate-500 dark:text-gray-400"><?php echo formatRupiahShort($row['realisasi']); ?></span>
                    </div>
                    <div class="w-full h-2 rounded-full bg-slate-100 dark:bg-gray-700 overflow-hidden">
                      <div 
                        class="h-2 rounded-full <?php echo $progressColor; ?>" 
                        style="width: <?php echo min($persen, 100); ?>%"
                      ></div>
                    </div>
                  </div>
                </td>
                <td class="px-4 md:px-6 py-4">
                  <?php if ($row['status'] === 'Selesai'): ?>
                    <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-emerald-100 dark:bg-emerald-900/30 text-emerald-700 dark:text-emerald-300 text-xs font-semibold">
                      <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 animate-pulse"></span>
                      Selesai
                    </div>
                  <?php elseif ($row['status'] === 'Berjalan'): ?>
                    <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-amber-100 dark:bg-amber-900/30 text-amber-700 dark:text-amber-300 text-xs font-semibold">
                      <span class="w-1.5 h-1.5 rounded-full bg-amber-500 animate-ping"></span>
                      Berjalan
                    </div>
                  <?php else: ?>
                    <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-slate-100 dark:bg-gray-700 text-slate-700 dark:text-gray-300 text-xs font-semibold">
                      <span class="w-1.5 h-1.5 rounded-full bg-slate-400"></span>
                      Perencanaan
                    </div>
                  <?php endif; ?>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- RINGKASAN DAN CATATAN -->
  <div class="grid md:grid-cols-2 gap-8 relative z-10">
    <!-- Ringkasan Eksekutif -->
    <div class="bg-gradient-to-br from-slate-50 to-white dark:from-gray-800 dark:to-gray-900 rounded-2xl border border-slate-200 dark:border-gray-700 p-6">
      <h3 class="text-base font-bold text-slate-900 dark:text-white mb-4 flex items-center gap-2">
        <span class="w-6 h-6 rounded-lg bg-desaBiru/10 flex items-center justify-center">📋</span>
        Ringkasan Eksekutif
      </h3>
      <div class="space-y-4">
        <div class="flex items-center justify-between">
          <span class="text-sm text-slate-700 dark:text-gray-300">Total Program</span>
          <span class="text-sm font-bold text-slate-900 dark:text-white"><?php echo $totalProgram; ?> Program</span>
        </div>
        <div class="flex items-center justify-between">
          <span class="text-sm text-slate-700 dark:text-gray-300">Tingkat Realisasi</span>
          <span class="text-sm font-bold <?php echo $persenTotal >= 80 ? 'text-emerald-600' : ($persenTotal >= 50 ? 'text-amber-600' : 'text-rose-600'); ?>">
            <?php echo $persenTotal; ?>%
          </span>
        </div>
        <div class="flex items-center justify-between">
          <span class="text-sm text-slate-700 dark:text-gray-300">Program Tuntas</span>
          <span class="text-sm font-bold text-emerald-600">100%</span>
        </div>
        <div class="pt-4 border-t border-slate-200 dark:border-gray-700">
          <p class="text-sm text-slate-600 dark:text-gray-400">
            Anggaran Desa Bawang tahun 2024 menunjukkan tingkat realisasi <strong><?php echo $persenTotal; ?>%</strong> 
            dengan seluruh program berstatus selesai. Pengelolaan keuangan desa berjalan dengan prinsip akuntabel dan transparan.
          </p>
        </div>
      </div>
    </div>

    <!-- Download & Info -->
    <div class="bg-gradient-to-br from-desaBiru/5 to-emerald-500/5 dark:from-gray-800 dark:to-gray-900 rounded-2xl border border-desaBiru/20 dark:border-gray-700 p-6">
      <h3 class="text-base font-bold text-slate-900 dark:text-white mb-4 flex items-center gap-2">
        <span class="w-6 h-6 rounded-lg bg-desaBiru/20 flex items-center justify-center">📥</span>
        Dokumen & Informasi
      </h3>
      <div class="space-y-4">
        <p class="text-sm text-slate-700 dark:text-gray-300">
          Untuk informasi lebih detail mengenai APBDes Desa Bawang, Anda dapat mengunduh dokumen lengkap atau menghubungi bendahara desa.
        </p>
        <div class="flex flex-wrap gap-3">
          <button class="px-4 py-2 rounded-lg bg-desaBiru text-white text-sm font-semibold hover:bg-desaBiruMuda transition-colors flex items-center gap-2">
            📄 Unduh APBDes 2024
          </button>
          <button class="px-4 py-2 rounded-lg border border-slate-300 dark:border-gray-600 text-slate-700 dark:text-gray-300 text-sm font-semibold hover:bg-slate-50 dark:hover:bg-gray-700 transition-colors flex items-center gap-2">
            📋 Laporan Realisasi
          </button>
        </div>
        <div class="pt-4 border-t border-slate-200 dark:border-gray-700">
          <p class="text-xs text-slate-500 dark:text-gray-400">
            *Data diperbarui per Desember 2024. Dokumen resmi tersedia di kantor desa selama jam kerja.
          </p>
        </div>
      </div>
    </div>
  </div>

</section>

<style>
/* Smooth transitions */
.transition-all {
  transition-property: all;
  transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
  transition-duration: 300ms;
}

/* Gradient text */
.bg-gradient-text {
  background-clip: text;
  -webkit-background-clip: text;
  color: transparent;
}

/* Custom scrollbar */
.overflow-x-auto::-webkit-scrollbar {
  height: 6px;
}
.overflow-x-auto::-webkit-scrollbar-track {
  background: #f1f5f9;
  border-radius: 3px;
}
.overflow-x-auto::-webkit-scrollbar-thumb {
  background: #cbd5e1;
  border-radius: 3px;
}
.overflow-x-auto::-webkit-scrollbar-thumb:hover {
  background: #94a3b8;
}

/* Dark mode scrollbar */
.dark .overflow-x-auto::-webkit-scrollbar-track {
  background: #374151;
}
.dark .overflow-x-auto::-webkit-scrollbar-thumb {
  background: #4b5563;
}
.dark .overflow-x-auto::-webkit-scrollbar-thumb:hover {
  background: #6b7280;
}
</style>
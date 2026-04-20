<!-- komponen/kepala.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Website Desa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Konfigurasi warna utama biru -->
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        desaBiru: '#1D4ED8',
                        desaBiruMuda: '#3B82F6'
                    }
                }
            }
        }
    </script>

    <!-- CSS GLOBAL -->
    <style>
      /* ==================== ANIMASI SCROLL ==================== */

      .anim-naik {
        opacity: 0;
        transform: translateY(40px);
        transition: opacity .6s ease-out, transform .6s ease-out;
      }
      .anim-naik.muncul {
        opacity: 1;
        transform: translateY(0);
      }

      .anim-kiri,
      .anim-kanan {
        opacity: 0;
        transition: opacity .6s ease-out, transform .6s ease-out;
      }
      .anim-kiri { transform: translateX(-40px); }
      .anim-kanan { transform: translateX(40px); }
      .anim-kiri.muncul,
      .anim-kanan.muncul {
        opacity: 1;
        transform: translateX(0);
      }

      .anim-naik-telat-1 { transition-delay: .1s; }
      .anim-naik-telat-2 { transition-delay: .2s; }
      .anim-naik-telat-3 { transition-delay: .3s; }
      .anim-naik-telat-4 { transition-delay: .4s; }

      html { scroll-behavior: smooth; }

      /* ==================== LOADING OVERLAY ==================== */

      #loading-overlay {
        position: fixed;
        inset: 0;
        background: rgba(15, 23, 42, 0.55);
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 9999;
        opacity: 0;
        pointer-events: none;
        transition: opacity .25s ease-out;
      }
      #loading-overlay.tampil {
        opacity: 1;
        pointer-events: auto;
      }

      .loading-box {
        background: #ffffff;
        padding: 16px 20px;
        border-radius: 12px;
        box-shadow: 0 10px 35px rgba(15,23,42,0.25);
        display: flex;
        flex-direction: column;
        align-items: center;
        min-width: 220px;
      }
      .loading-box p {
        margin-top: 8px;
        font-size: 13px;
        color: #0f172a;
      }

      .loader {
        width: 40px;
        height: 40px;
        border-radius: 9999px;
        border: 4px solid rgba(37,99,235,0.25);
        border-top-color: #1D4ED8;
        animation: putar .8s linear infinite;
      }

      @keyframes putar {
        to { transform: rotate(360deg); }
      }

      /* === VARIAN DARK MODE UNTUK LOADING === */
      .dark #loading-overlay {
        background: rgba(15, 23, 42, 0.75);
      }

      .dark .loading-box {
        background: #0f172a;
        box-shadow: 0 10px 35px rgba(15,23,42,0.6);
      }

      .dark .loading-box p {
        color: #e5e7eb;
      }

      .dark .loader {
        border-color: rgba(96,165,250,0.35);
        border-top-color: #3B82F6;
      }

            /* ==================== DARK MODE: BG & BORDER GLOBAL ==================== */

      /* Body utama */
      .dark body {
        background-color: #020617; /* slate-950 */
        color: #e5e7eb;
      }

      /* Semua box yang awalnya putih / abu muda dibuat gelap */
      .dark .bg-white {
        background-color: #020617 !important; /* sangat gelap */
      }

      .dark .bg-slate-50,
      .dark .bg-slate-100 {
        background-color: #020617 !important;
      }

      /* Border kartu & section */
      .dark .border-slate-100,
      .dark .border-slate-200 {
        border-color: #1f2937 !important; /* slate-800-ish */
      }

      /* Teks gelap diubah jadi terang */
      .dark .text-slate-900,
      .dark .text-slate-800 {
        color: #e5e7eb !important;
      }

      .dark .text-slate-700 {
        color: #d1d5db !important;
      }

      .dark .text-slate-600 {
        color: #9ca3af !important;
      }

      .dark .text-slate-500 {
        color: #6b7280 !important;
      }


      /* ==================== KURSOR KHUSUS ==================== */

      /* pakai hotspot 0 0 dulu supaya aman */
      body {
        cursor: url('/aset/kursor/remove.png') 0 0, auto;
      }

      a, button, input, textarea {
        cursor: url('/aset/kursor/remove.png') 0 0, pointer;
      }
    </style>
</head>

<body class="bg-slate-50 text-slate-800 dark:bg-slate-900 dark:text-slate-100">

  <!-- OVERLAY LOADING -->
  <div id="loading-overlay">
      <div class="loading-box">
          <div class="loader"></div>
          <p>Memuat halaman...</p>
      </div>
  </div>

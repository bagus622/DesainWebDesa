<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda - Desa Bawang</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
        }
        
        :root {
            --primary-blue: #2563eb;
            --primary-green: #10b981;
            --dark-blue: #1e3a8a;
            --light-blue: #3b82f6;
            --light-bg: #f8fafc;
            --text-dark: #1e293b;
            --text-medium: #475569;
            --text-light: #64748b;
        }
        
        body {
            background: var(--light-bg);
            color: var(--text-dark);
            overflow-x: hidden;
        }
        
        /* HERO SECTION */
        .hero-section {
            position: relative;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }
        
        .hero-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
        }
        
        .hero-background img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
            animation: zoomIn 20s ease infinite alternate;
            filter: brightness(0.8);
        }
        
        @keyframes zoomIn {
            0% { transform: scale(1); }
            100% { transform: scale(1.1); }
        }
        
        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(30, 58, 138, 0.7) 0%, rgba(37, 99, 235, 0.6) 100%);
            z-index: 2;
        }
        
        .hero-gradient {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 200px;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.7), transparent);
            z-index: 3;
        }
        
        .hero-content {
            position: relative;
            z-index: 4;
            max-width: 900px;
            margin: 0 auto;
            padding: 40px 20px;
            text-align: center;
            color: white;
        }
        
        .hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            color: white;
            padding: 12px 24px;
            border-radius: 50px;
            font-weight: 600;
            font-size: 0.9rem;
            margin-bottom: 30px;
            transition: all 0.3s ease;
        }
        
        .hero-badge:hover {
            background: rgba(255, 255, 255, 0.25);
            transform: translateY(-2px);
        }
        
        .hero-badge i {
            font-size: 1rem;
            color: #10b981;
        }
        
        .hero-subtitle {
            font-size: 1.1rem;
            font-weight: 600;
            letter-spacing: 1px;
            text-transform: uppercase;
            color: #bfdbfe;
            margin-bottom: 15px;
        }
        
        .hero-title {
            font-size: 3.5rem;
            font-weight: 800;
            line-height: 1.1;
            margin-bottom: 20px;
            text-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
        }
        
        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.5rem;
            }
        }
        
        .hero-description {
            font-size: 1.2rem;
            line-height: 1.6;
            color: #e2e8f0;
            max-width: 700px;
            margin: 0 auto 40px;
        }
        
        .hero-buttons {
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
            margin-bottom: 60px;
        }
        
        .hero-btn {
            padding: 16px 32px;
            border-radius: 50px;
            font-weight: 600;
            font-size: 1rem;
            text-decoration: none;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 10px;
        }
        
        .hero-btn-primary {
            background: linear-gradient(135deg, #10b981 0%, #059669 100%);
            color: white;
            box-shadow: 0 8px 25px rgba(16, 185, 129, 0.4);
        }
        
        .hero-btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 30px rgba(16, 185, 129, 0.6);
        }
        
        .hero-btn-secondary {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            color: white;
        }
        
        .hero-btn-secondary:hover {
            background: rgba(255, 255, 255, 0.25);
            transform: translateY(-3px);
        }
        
        .scroll-indicator {
            display: flex;
            flex-direction: column;
            align-items: center;
            color: rgba(255, 255, 255, 0.8);
            font-size: 0.9rem;
            animation: bounce 2s infinite;
        }
        
        @keyframes bounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(10px); }
        }
        
        .scroll-indicator i {
            font-size: 1.5rem;
            margin-top: 8px;
        }
        
        /* EXPLORE SECTION */
        .explore-section {
            padding: 100px 20px;
            background: var(--light-bg);
            position: relative;
        }
        
        .section-header {
            max-width: 1200px;
            margin: 0 auto 60px;
            text-align: center;
        }
        
        .section-badge {
            display: inline-block;
            background: linear-gradient(135deg, #10b981 0%, #059669 100%);
            color: white;
            padding: 8px 20px;
            border-radius: 50px;
            font-weight: 600;
            font-size: 0.9rem;
            margin-bottom: 20px;
        }
        
        .section-title {
            font-size: 2.8rem;
            font-weight: 800;
            background: linear-gradient(135deg, var(--dark-blue) 0%, var(--primary-blue) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 20px;
        }
        
        .section-subtitle {
            font-size: 1.1rem;
            color: var(--text-medium);
            max-width: 800px;
            margin: 0 auto;
            line-height: 1.6;
        }
        
        .explore-grid {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
        }
        
        .explore-card {
            background: white;
            border-radius: 20px;
            padding: 40px 30px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            border: 1px solid rgba(226, 232, 240, 0.8);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.1);
            position: relative;
            overflow: hidden;
        }
        
        .explore-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(to right, var(--primary-blue), var(--primary-green));
        }
        
        .explore-card:hover {
            transform: translateY(-15px);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.1);
        }
        
        .card-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, #f0f9ff 0%, #e0f2fe 100%);
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 25px;
            font-size: 2.5rem;
            color: var(--primary-blue);
            transition: all 0.3s ease;
        }
        
        .explore-card:hover .card-icon {
            transform: scale(1.1) rotate(5deg);
            background: linear-gradient(135deg, #dbeafe 0%, #bfdbfe 100%);
        }
        
        .card-title {
            font-size: 1.3rem;
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 15px;
        }
        
        .card-description {
            font-size: 0.95rem;
            color: var(--text-medium);
            line-height: 1.6;
        }
        
        /* VILLAGE HEAD SECTION */
        .village-head-section {
            padding: 100px 20px;
            background: white;
            position: relative;
        }
        
        .village-head-container {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr 2fr;
            gap: 60px;
            align-items: center;
        }
        
        @media (max-width: 992px) {
            .village-head-container {
                grid-template-columns: 1fr;
                text-align: center;
            }
        }
        
        .head-image-container {
            position: relative;
        }
        
        .head-image {
            width: 300px;
            height: 300px;
            border-radius: 50%;
            overflow: hidden;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
            border: 5px solid white;
            position: relative;
            margin: 0 auto;
        }
        
        .head-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.8s ease;
        }
        
        .head-image:hover img {
            transform: scale(1.1);
        }
        
        .head-image-border {
            position: absolute;
            top: -10px;
            left: -10px;
            right: -10px;
            bottom: -10px;
            border: 2px dashed var(--primary-blue);
            border-radius: 50%;
            animation: rotate 20s linear infinite;
        }
        
        @keyframes rotate {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        
        .head-content h2 {
            font-size: 2.2rem;
            font-weight: 800;
            color: var(--text-dark);
            margin-bottom: 20px;
        }
        
        .head-content p {
            font-size: 1.1rem;
            color: var(--text-medium);
            line-height: 1.7;
            margin-bottom: 15px;
        }
        
        .head-name {
            color: var(--primary-blue);
            font-weight: 700;
        }
        
        /* MAP SECTION */
        .map-section {
            padding: 100px 20px;
            background: linear-gradient(135deg, #f0f9ff 0%, #e6f7ff 100%);
            position: relative;
        }
        
        .map-container {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }
        
        @media (max-width: 992px) {
            .map-container {
                grid-template-columns: 1fr;
            }
        }
        
        .map-content h2 {
            font-size: 2.2rem;
            font-weight: 800;
            color: var(--text-dark);
            margin-bottom: 20px;
        }
        
        .map-content p {
            font-size: 1.1rem;
            color: var(--text-medium);
            line-height: 1.7;
            margin-bottom: 15px;
        }
        
        .map-frame {
            width: 100%;
            height: 400px;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1);
            border: 5px solid white;
        }
        
        .map-frame iframe {
            width: 100%;
            height: 100%;
            border: none;
        }
        
        /* STATISTICS SECTION */
        .statistics-section {
            padding: 100px 20px;
            background: white;
            position: relative;
        }
        
        .statistics-container {
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .statistics-header {
            text-align: center;
            margin-bottom: 60px;
        }
        
        .statistics-header h2 {
            font-size: 2.2rem;
            font-weight: 800;
            color: var(--text-dark);
            margin-bottom: 15px;
        }
        
        .statistics-header p {
            font-size: 1.1rem;
            color: var(--text-medium);
            max-width: 700px;
            margin: 0 auto;
        }
        
        .statistics-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
        }
        
        .stat-card {
            background: linear-gradient(135deg, #ffffff 0%, #f8fafc 100%);
            border-radius: 20px;
            padding: 40px 30px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            border: 1px solid rgba(226, 232, 240, 0.8);
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
        }
        
        .stat-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.1);
        }
        
        .stat-icon {
            font-size: 2.5rem;
            margin-bottom: 20px;
            display: inline-block;
        }
        
        .stat-number {
            font-size: 3rem;
            font-weight: 800;
            margin-bottom: 10px;
            background: linear-gradient(135deg, var(--dark-blue) 0%, var(--primary-blue) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .stat-title {
            font-size: 1rem;
            font-weight: 600;
            color: var(--text-medium);
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 5px;
        }
        
        .stat-subtitle {
            font-size: 0.9rem;
            color: var(--text-light);
        }
        
        /* NEWS SECTION */
        .news-section {
            padding: 100px 20px;
            background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
            position: relative;
        }
        
        .news-container {
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .news-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            margin-bottom: 60px;
            flex-wrap: wrap;
            gap: 20px;
        }
        
        .news-title h2 {
            font-size: 2.2rem;
            font-weight: 800;
            color: var(--text-dark);
            margin-bottom: 10px;
        }
        
        .news-title p {
            font-size: 1.1rem;
            color: var(--text-medium);
        }
        
        .news-all-btn {
            padding: 12px 30px;
            border-radius: 50px;
            background: white;
            color: var(--primary-blue);
            text-decoration: none;
            font-weight: 600;
            border: 2px solid var(--primary-blue);
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 10px;
        }
        
        .news-all-btn:hover {
            background: var(--primary-blue);
            color: white;
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(37, 99, 235, 0.3);
        }
        
        .news-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
        }
        
        .news-card {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            border: 1px solid rgba(226, 232, 240, 0.8);
            transition: all 0.4s ease;
        }
        
        .news-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.1);
        }
        
        .news-image {
            width: 100%;
            height: 220px;
            overflow: hidden;
        }
        
        .news-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.8s ease;
        }
        
        .news-card:hover .news-image img {
            transform: scale(1.1);
        }
        
        .news-content {
            padding: 30px;
        }
        
        .news-date {
            font-size: 0.9rem;
            color: var(--primary-blue);
            font-weight: 600;
            margin-bottom: 10px;
            display: inline-block;
            background: #eff6ff;
            padding: 5px 15px;
            border-radius: 20px;
        }
        
        .news-content h3 {
            font-size: 1.3rem;
            font-weight: 700;
            color: var(--text-dark);
            margin-bottom: 15px;
            line-height: 1.4;
        }
        
        .news-summary {
            font-size: 1rem;
            color: var(--text-medium);
            line-height: 1.6;
            margin-bottom: 20px;
        }
        
        .news-read-btn {
            padding: 10px 25px;
            border-radius: 50px;
            background: var(--primary-blue);
            color: white;
            text-decoration: none;
            font-weight: 600;
            font-size: 0.9rem;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }
        
        .news-read-btn:hover {
            background: var(--dark-blue);
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(37, 99, 235, 0.3);
        }
        
        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(40px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .anim-fade-in {
            opacity: 0;
            animation: fadeInUp 0.8s ease forwards;
        }
        
        .delay-1 { animation-delay: 0.1s; }
        .delay-2 { animation-delay: 0.2s; }
        .delay-3 { animation-delay: 0.3s; }
        .delay-4 { animation-delay: 0.4s; }
        .delay-5 { animation-delay: 0.5s; }
        .delay-6 { animation-delay: 0.6s; }
        
        /* Responsive */
        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.2rem;
            }
            
            .hero-description {
                font-size: 1rem;
            }
            
            .section-title {
                font-size: 2.2rem;
            }
            
            .village-head-container,
            .map-container {
                gap: 40px;
            }
            
            .head-image {
                width: 250px;
                height: 250px;
            }
            
            .news-grid {
                grid-template-columns: 1fr;
            }
            
            .statistics-grid {
                grid-template-columns: 1fr;
            }
        }
        
        @media (max-width: 480px) {
            .hero-title {
                font-size: 1.8rem;
            }
            
            .hero-buttons {
                flex-direction: column;
                align-items: center;
            }
            
            .hero-btn {
                width: 100%;
                max-width: 300px;
                justify-content: center;
            }
            
            .explore-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <!-- HERO SECTION -->
    <section class="hero-section">
        <div class="hero-background">
            <!-- Background image -->
            <img src="https://images.unsplash.com/photo-1546410531-bb4caa6b424d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2071&q=80" 
                 alt="Pemandangan Desa Bawang - Sawah dan Pegunungan" 
                 loading="lazy">
        </div>
        <div class="hero-overlay"></div>
        <div class="hero-gradient"></div>
        
        <div class="hero-content">
            <div class="hero-badge anim-fade-in">
                <i class="fas fa-check-circle"></i>
                Portal Resmi Desa Bawang
            </div>
            
            <p class="hero-subtitle anim-fade-in delay-1">Desa Bawang · Kec. Bawang, Kab. Banjarnegara</p>
            
            <h1 class="hero-title anim-fade-in delay-2">
                Selamat Datang di Website<br>Desa Bawang
            </h1>
            
            <p class="hero-description anim-fade-in delay-3">
                Mengenal potensi desa, produk unggulan, lembaga masyarakat, dan kegiatan warga
                melalui satu pintu informasi yang informatif dan mudah digunakan.
            </p>
            
            <div class="hero-buttons anim-fade-in delay-4">
                <a href="#jelajahi-desa" class="hero-btn hero-btn-primary">
                    <i class="fas fa-compass"></i> Jelajahi Desa
                </a>
                <a href="#" class="hero-btn hero-btn-secondary">
                    <i class="fas fa-info-circle"></i> Profil Desa
                </a>
            </div>
            
            <div class="scroll-indicator anim-fade-in delay-5">
                <span>Scroll ke bawah</span>
                <i class="fas fa-chevron-down"></i>
            </div>
        </div>
    </section>
    
    <!-- EXPLORE SECTION -->
    <section id="jelajahi-desa" class="explore-section">
        <div class="section-header anim-fade-in">
            <span class="section-badge">Jelajahi Desa</span>
            <h2 class="section-title">Temukan Informasi Desa Bawang</h2>
            <p class="section-subtitle">
                Melalui website ini Anda dapat menjelajahi informasi pemerintahan, penduduk, demografi,
                potensi desa, berita terbaru, hingga layanan pengaduan dan kontak desa.
            </p>
        </div>
        
        <div class="explore-grid">
            <!-- Profil Desa -->
            <div class="explore-card anim-fade-in delay-1">
                <div class="card-icon">
                    <i class="fas fa-landmark"></i>
                </div>
                <h3 class="card-title">Profil Desa</h3>
                <p class="card-description">
                    Sejarah, visi misi, wilayah, dan gambaran umum Desa Bawang.
                </p>
            </div>
            
            <!-- Infografis & Potensi -->
            <div class="explore-card anim-fade-in delay-2">
                <div class="card-icon">
                    <i class="fas fa-chart-bar"></i>
                </div>
                <h3 class="card-title">Infografis & Potensi</h3>
                <p class="card-description">
                    Statistik penduduk, potensi ekonomi, dan sebaran potensi per dusun.
                </p>
            </div>
            
            <!-- Berita Desa -->
            <div class="explore-card anim-fade-in delay-3">
                <div class="card-icon">
                    <i class="fas fa-newspaper"></i>
                </div>
                <h3 class="card-title">Berita Desa</h3>
                <p class="card-description">
                    Kumpulan berita, pengumuman resmi, serta agenda kegiatan desa.
                </p>
            </div>
            
            <!-- Pengaduan & Kontak -->
            <div class="explore-card anim-fade-in delay-4">
                <div class="card-icon">
                    <i class="fas fa-headset"></i>
                </div>
                <h3 class="card-title">Pengaduan & Kontak</h3>
                <p class="card-description">
                    Saluran komunikasi warga untuk menyampaikan aspirasi, kritik, maupun saran.
                </p>
            </div>
        </div>
    </section>
    
    <!-- VILLAGE HEAD SECTION -->
    <section class="village-head-section">
        <div class="village-head-container">
            <div class="head-image-container anim-fade-in">
                <div class="head-image">
                    <!-- Foto Kepala Desa -->
                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=774&q=80" 
                         alt="Bapak Galih Purwandaru - Kepala Desa Bawang" 
                         loading="lazy">
                    <div class="head-image-border"></div>
                </div>
            </div>
            
            <div class="head-content anim-fade-in delay-1">
                <h2>Kepala Desa Bawang</h2>
                <p>
                    Bapak <span class="head-name">Galih Purwandaru</span> memimpin Desa Bawang dengan
                    semangat gotong royong, transparansi, dan pelayanan terbaik kepada masyarakat.
                </p>
                <p>
                    Melalui website desa ini, diharapkan informasi dan layanan desa dapat diakses dengan mudah
                    oleh seluruh warga, sehingga partisipasi masyarakat dalam pembangunan desa semakin meningkat.
                </p>
            </div>
        </div>
    </section>
    
    <!-- MAP SECTION -->
    <section class="map-section">
        <div class="map-container">
            <div class="map-content anim-fade-in">
                <h2>Peta Wilayah Desa</h2>
                <p>
                    Berikut adalah peta wilayah Kecamatan Bawang, Kabupaten Banjarnegara. Peta ini membantu
                    mengenali batas lokasi, akses jalan, fasilitas umum, dan area administratif desa.
                </p>
                <p>
                    Peta ditampilkan secara interaktif menggunakan Google Maps sehingga tetap nyaman diakses
                    melalui perangkat komputer maupun ponsel.
                </p>
            </div>
            
            <div class="map-frame anim-fade-in delay-1">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31652.974899857607!2d109.57700981525846!3d-7.396197932358497!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7aab0a37d23921%3A0x41ffa4d7d7fee31d!2sBawang%2C%20Kec.%20Bawang%2C%20Kab.%20Banjarnegara%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1765506475198!5m2!1sid!2sid"
                    allowfullscreen=""
                    loading="lazy"
                    title="Peta Desa Bawang">
                </iframe>
            </div>
        </div>
    </section>
    
    <!-- STATISTICS SECTION -->
    <section class="statistics-section">
        <div class="statistics-container">
            <div class="statistics-header anim-fade-in">
                <h2>Data Administrasi Desa</h2>
                <p>Gambaran singkat jumlah penduduk Desa Bawang berdasarkan data administrasi terbaru.</p>
            </div>
            
            <div class="statistics-grid">
                <div class="stat-card anim-fade-in delay-1">
                    <div class="stat-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="stat-number">3.500</div>
                    <div class="stat-title">Jumlah Penduduk</div>
                    <div class="stat-subtitle">Jiwa</div>
                </div>
                
                <div class="stat-card anim-fade-in delay-2">
                    <div class="stat-icon">
                        <i class="fas fa-male"></i>
                    </div>
                    <div class="stat-number">1.800</div>
                    <div class="stat-title">Laki-Laki</div>
                    <div class="stat-subtitle">Jiwa</div>
                </div>
                
                <div class="stat-card anim-fade-in delay-3">
                    <div class="stat-icon">
                        <i class="fas fa-female"></i>
                    </div>
                    <div class="stat-number">1.700</div>
                    <div class="stat-title">Perempuan</div>
                    <div class="stat-subtitle">Jiwa</div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- NEWS SECTION -->
    <section class="news-section">
        <div class="news-container">
            <div class="news-header anim-fade-in">
                <div class="news-title">
                    <h2>Berita Terbaru Desa</h2>
                    <p>Informasi dan kegiatan terbaru yang berlangsung di Desa Bawang.</p>
                </div>
                
                <a href="#" class="news-all-btn">
                    <i class="fas fa-list"></i> Lihat Semua Berita
                </a>
            </div>
            
            <div class="news-grid">
                <!-- News 1 -->
                <div class="news-card anim-fade-in delay-1">
                    <div class="news-image">
                        <img src="https://images.unsplash.com/photo-1586773860418-dc22f8b874bc?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" 
                             alt="Gotong Royong Pembersihan Saluran Irigasi" 
                             loading="lazy">
                    </div>
                    <div class="news-content">
                        <span class="news-date">01 Desember 2025</span>
                        <h3>Gotong Royong Pembersihan Saluran Irigasi</h3>
                        <p class="news-summary">
                            Warga desa bersama perangkat desa melakukan kegiatan gotong royong membersihkan saluran irigasi utama.
                        </p>
                        <a href="#" class="news-read-btn">
                            <i class="fas fa-book-open"></i> Baca Selengkapnya
                        </a>
                    </div>
                </div>
                
                <!-- News 2 -->
                <div class="news-card anim-fade-in delay-2">
                    <div class="news-image">
                        <img src="https://images.unsplash.com/photo-1556761175-b413da4baf72?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1074&q=80" 
                             alt="Pelatihan UMKM Bagi Warga Desa" 
                             loading="lazy">
                    </div>
                    <div class="news-content">
                        <span class="news-date">20 November 2025</span>
                        <h3>Pelatihan UMKM Bagi Warga Desa</h3>
                        <p class="news-summary">
                            Pemerintah desa mengadakan pelatihan pengembangan usaha mikro kecil menengah bagi pelaku usaha desa.
                        </p>
                        <a href="#" class="news-read-btn">
                            <i class="fas fa-book-open"></i> Baca Selengkapnya
                        </a>
                    </div>
                </div>
                
                <!-- News 3 -->
                <div class="news-card anim-fade-in delay-3">
                    <div class="news-image">
                        <img src="https://images.unsplash.com/photo-1516549655669-df6654e435de?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" 
                             alt="Posyandu Balita Rutin Setiap Bulan" 
                             loading="lazy">
                    </div>
                    <div class="news-content">
                        <span class="news-date">10 November 2025</span>
                        <h3>Posyandu Balita Rutin Setiap Bulan</h3>
                        <p class="news-summary">
                            Kegiatan posyandu balita rutin dilaksanakan untuk memantau tumbuh kembang anak di desa.
                        </p>
                        <a href="#" class="news-read-btn">
                            <i class="fas fa-book-open"></i> Baca Selengkapnya
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <script>
        // Add animation on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.animationPlayState = 'running';
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);
        
        // Observe all animated elements
        document.querySelectorAll('.anim-fade-in').forEach(el => {
            observer.observe(el);
        });
        
        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });
                }
            });
        });
        
        // Add hover effects for cards
        document.querySelectorAll('.explore-card, .stat-card, .news-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.zIndex = '10';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.zIndex = '1';
            });
        });
        
        // Parallax effect for hero background
        window.addEventListener('scroll', function() {
            const scrolled = window.pageYOffset;
            const hero = document.querySelector('.hero-background');
            if (hero) {
                hero.style.transform = `translateY(${scrolled * 0.5}px)`;
            }
        });
        
        // Lazy loading images
        document.addEventListener('DOMContentLoaded', function() {
            const images = document.querySelectorAll('img[loading="lazy"]');
            images.forEach(img => {
                img.addEventListener('load', function() {
                    this.style.opacity = '1';
                });
                img.style.opacity = '0';
                img.style.transition = 'opacity 0.5s ease';
            });
        });
    </script>
</body>
</html>
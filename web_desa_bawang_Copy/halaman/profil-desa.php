<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil - Desa Bawang</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
        }
        
        body {
            background: linear-gradient(135deg, #f0f7ff 0%, #e6f0ff 100%);
            color: #1e293b;
            min-height: 100vh;
            padding: 30px 20px;
            position: relative;
            overflow-x: hidden;
        }
        
        /* Background decorative elements */
        body::before {
            content: '';
            position: fixed;
            top: -50%;
            right: -30%;
            width: 600px;
            height: 600px;
            background: radial-gradient(circle, rgba(37, 99, 235, 0.08) 0%, transparent 70%);
            z-index: -1;
            opacity: 0.6;
        }
        
        body::after {
            content: '';
            position: fixed;
            bottom: -40%;
            left: -20%;
            width: 500px;
            height: 500px;
            background: radial-gradient(circle, rgba(16, 185, 129, 0.06) 0%, transparent 70%);
            z-index: -1;
            opacity: 0.6;
        }
        
        .profil-container {
            max-width: 1200px;
            margin: 0 auto;
            position: relative;
            z-index: 1;
        }
        
        /* Header Section */
        .profil-header {
            text-align: center;
            margin-bottom: 50px;
            position: relative;
        }
        
        .profil-header h1 {
            font-size: 3.2rem;
            font-weight: 800;
            background: linear-gradient(135deg, #1e3a8a 0%, #2563eb 50%, #3b82f6 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 15px;
            letter-spacing: -0.5px;
            text-shadow: 0 4px 20px rgba(37, 99, 235, 0.15);
        }
        
        .profil-header p {
            font-size: 1.2rem;
            color: #475569;
            max-width: 700px;
            margin: 0 auto 30px;
            line-height: 1.6;
        }
        
        .header-badge {
            display: inline-flex;
            align-items: center;
            gap: 12px;
            background: linear-gradient(135deg, #10b981 0%, #059669 100%);
            color: white;
            padding: 14px 28px;
            border-radius: 50px;
            font-weight: 600;
            box-shadow: 0 10px 25px rgba(16, 185, 129, 0.25);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            position: relative;
            overflow: hidden;
        }
        
        .header-badge::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.7s;
        }
        
        .header-badge:hover::before {
            left: 100%;
        }
        
        .header-badge i {
            font-size: 1.3rem;
        }
        
        /* Main Content */
        .profil-content {
            display: grid;
            grid-template-columns: 1fr;
            gap: 40px;
        }
        
        @media (min-width: 992px) {
            .profil-content {
                grid-template-columns: 1fr 1fr;
            }
        }
        
        /* Vision Section */
        .vision-section {
            background: linear-gradient(145deg, #ffffff, #f8fafc);
            border-radius: 24px;
            padding: 40px;
            box-shadow: 
                0 10px 40px rgba(15, 23, 42, 0.1),
                0 0 0 1px rgba(255, 255, 255, 0.8),
                inset 0 1px 0 rgba(255, 255, 255, 0.6);
            position: relative;
            overflow: hidden;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.1);
            border: 1px solid rgba(226, 232, 240, 0.8);
        }
        
        .vision-section:hover {
            transform: translateY(-8px);
            box-shadow: 
                0 20px 60px rgba(15, 23, 42, 0.15),
                0 0 0 1px rgba(255, 255, 255, 0.9);
        }
        
        .vision-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(to right, #3b82f6, #2563eb, #1d4ed8);
        }
        
        .section-title {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 30px;
            position: relative;
        }
        
        .section-icon {
            width: 60px;
            height: 60px;
            border-radius: 16px;
            background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.5rem;
            box-shadow: 0 8px 20px rgba(59, 130, 246, 0.3);
            flex-shrink: 0;
        }
        
        .section-title h2 {
            font-size: 1.8rem;
            font-weight: 700;
            color: #1e293b;
            line-height: 1.2;
        }
        
        .section-title p {
            font-size: 0.95rem;
            color: #64748b;
            margin-top: 5px;
        }
        
        .vision-content {
            background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
            border-radius: 18px;
            padding: 30px;
            border-left: 5px solid #3b82f6;
            position: relative;
            box-shadow: 0 5px 15px rgba(15, 23, 42, 0.05);
            transition: all 0.3s ease;
        }
        
        .vision-content:hover {
            transform: translateX(5px);
            box-shadow: 0 10px 25px rgba(15, 23, 42, 0.08);
        }
        
        .vision-text {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #334155;
            font-weight: 500;
            text-align: justify;
        }
        
        .vision-highlight {
            color: #2563eb;
            font-weight: 600;
            background: linear-gradient(135deg, rgba(37, 99, 235, 0.1), transparent);
            padding: 2px 8px;
            border-radius: 6px;
        }
        
        /* Mission Section */
        .mission-section {
            background: linear-gradient(145deg, #ffffff, #f8fafc);
            border-radius: 24px;
            padding: 40px;
            box-shadow: 
                0 10px 40px rgba(15, 23, 42, 0.1),
                0 0 0 1px rgba(255, 255, 255, 0.8),
                inset 0 1px 0 rgba(255, 255, 255, 0.6);
            position: relative;
            overflow: hidden;
            border: 1px solid rgba(226, 232, 240, 0.8);
        }
        
        .mission-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(to right, #10b981, #059669, #047857);
        }
        
        .mission-header {
            background: linear-gradient(135deg, #10b981 0%, #059669 100%);
            border-radius: 16px;
            padding: 25px 30px;
            margin-bottom: 35px;
            color: white;
            position: relative;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(16, 185, 129, 0.3);
        }
        
        .mission-header::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.1) 0%, transparent 70%);
        }
        
        .mission-title {
            display: flex;
            align-items: center;
            gap: 15px;
            position: relative;
            z-index: 1;
        }
        
        .mission-title i {
            font-size: 2rem;
            background: rgba(255, 255, 255, 0.2);
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            backdrop-filter: blur(5px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
        
        .mission-title h2 {
            font-size: 1.8rem;
            font-weight: 700;
            margin-bottom: 5px;
        }
        
        .mission-title p {
            font-size: 0.95rem;
            opacity: 0.9;
        }
        
        /* Mission Items Grid */
        .mission-items {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
        }
        
        @media (max-width: 768px) {
            .mission-items {
                grid-template-columns: 1fr;
            }
        }
        
        .mission-item {
            background: linear-gradient(145deg, #ffffff, #f8fafc);
            border-radius: 16px;
            padding: 25px;
            border: 1px solid rgba(226, 232, 240, 0.8);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.1);
            position: relative;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(15, 23, 42, 0.05);
        }
        
        .mission-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(15, 23, 42, 0.1);
            border-color: #cbd5e1;
        }
        
        .mission-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 4px;
            height: 100%;
            background: linear-gradient(to bottom, #3b82f6, #10b981);
            border-radius: 4px 0 0 4px;
        }
        
        .mission-number {
            width: 40px;
            height: 40px;
            border-radius: 12px;
            background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 1.1rem;
            margin-bottom: 15px;
            box-shadow: 0 5px 15px rgba(59, 130, 246, 0.3);
        }
        
        .mission-text {
            font-size: 1rem;
            line-height: 1.6;
            color: #334155;
            font-weight: 500;
        }
        
        /* Animation for mission items */
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
        
        .anim-fade-in {
            opacity: 0;
            animation: fadeInUp 0.6s ease forwards;
        }
        
        .delay-1 { animation-delay: 0.1s; }
        .delay-2 { animation-delay: 0.2s; }
        .delay-3 { animation-delay: 0.3s; }
        .delay-4 { animation-delay: 0.4s; }
        .delay-5 { animation-delay: 0.5s; }
        .delay-6 { animation-delay: 0.6s; }
        .delay-7 { animation-delay: 0.7s; }
        .delay-8 { animation-delay: 0.8s; }
        .delay-9 { animation-delay: 0.9s; }
        .delay-10 { animation-delay: 1s; }
        .delay-11 { animation-delay: 1.1s; }
        
        /* Footer */
        .profil-footer {
            margin-top: 60px;
            text-align: center;
            padding: 30px;
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.8), rgba(248, 250, 252, 0.8));
            border-radius: 20px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(226, 232, 240, 0.6);
            box-shadow: 0 10px 30px rgba(15, 23, 42, 0.08);
        }
        
        .footer-text {
            font-size: 1.1rem;
            color: #475569;
            max-width: 800px;
            margin: 0 auto;
            line-height: 1.6;
        }
        
        .footer-highlight {
            color: #2563eb;
            font-weight: 600;
            background: linear-gradient(135deg, rgba(37, 99, 235, 0.1), transparent);
            padding: 2px 8px;
            border-radius: 6px;
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            body {
                padding: 20px 15px;
            }
            
            .profil-header h1 {
                font-size: 2.5rem;
            }
            
            .profil-header p {
                font-size: 1.1rem;
            }
            
            .vision-section, .mission-section {
                padding: 30px 25px;
            }
            
            .section-icon {
                width: 50px;
                height: 50px;
                font-size: 1.3rem;
            }
            
            .section-title h2 {
                font-size: 1.6rem;
            }
            
            .mission-header {
                padding: 20px 25px;
            }
            
            .mission-title i {
                width: 50px;
                height: 50px;
                font-size: 1.5rem;
            }
            
            .mission-title h2 {
                font-size: 1.6rem;
            }
        }
        
        @media (max-width: 480px) {
            .profil-header h1 {
                font-size: 2rem;
            }
            
            .vision-section, .mission-section {
                padding: 25px 20px;
            }
            
            .section-title {
                flex-direction: column;
                align-items: flex-start;
                gap: 10px;
            }
            
            .mission-title {
                flex-direction: column;
                align-items: flex-start;
                gap: 10px;
            }
            
            .header-badge {
                padding: 12px 20px;
                font-size: 0.9rem;
            }
        }
    </style>
</head>
<body>
    <div class="profil-container">
        <!-- HEADER -->
        <div class="profil-header anim-fade-in">
            <h1>Visi - Misi</h1>
            <p>
                Membangun desa dengan landasan visi yang jelas dan misi yang terarah, 
                menuju masyarakat yang sejahtera, berbudaya, dan peduli lingkungan.
            </p>
            <div class="header-badge">
                <i class="fas fa-flag"></i>
                Visi & Misi Pembangunan Desa
            </div>
        </div>
        
        <!-- MAIN CONTENT -->
        <div class="profil-content">
            <!-- VISION SECTION -->
            <div class="vision-section anim-fade-in delay-1">
                <div class="section-title">
                    <div class="section-icon">
                        <i class="fas fa-eye"></i>
                    </div>
                    <div>
                        <h2>Visi Desa Bawang</h2>
                        <p>Panduan dan arahan pembangunan jangka panjang</p>
                    </div>
                </div>
                
                <div class="vision-content">
                    <p class="vision-text">
                        Terwujudnya <span class="vision-highlight">Desa Bawang yang mandiri, beriman</span>, 
                        mampu dalam pengelolaan potensi desa, dan pembangunan berkelanjutan untuk mewujudkan 
                        masyarakat yang <span class="vision-highlight">sejahtera, berkualitas, berbudaya, maju, adil, demokratis</span>, 
                        dan <span class="vision-highlight">peduli terhadap lingkungan</span>.
                    </p>
                </div>
            </div>
            
            <!-- MISSION SECTION -->
            <div class="mission-section anim-fade-in delay-2">
                <div class="mission-header">
                    <div class="mission-title">
                        <i class="fas fa-bullseye"></i>
                        <div>
                            <h2>Misi Pembangunan Desa</h2>
                            <p>11 Strategi untuk Mewujudkan Visi Desa Bawang</p>
                        </div>
                    </div>
                </div>
                
                <div class="mission-items">
                    <!-- Mission 1 -->
                    <div class="mission-item anim-fade-in delay-1">
                        <div class="mission-number">1</div>
                        <p class="mission-text">Mewujudkan tata kelola pemerintahan yang baik, transparan, dan akuntabel</p>
                    </div>
                    
                    <!-- Mission 2 -->
                    <div class="mission-item anim-fade-in delay-2">
                        <div class="mission-number">2</div>
                        <p class="mission-text">Meningkatkan kualitas SDM masyarakat melalui pendidikan dan pelatihan</p>
                    </div>
                    
                    <!-- Mission 3 -->
                    <div class="mission-item anim-fade-in delay-3">
                        <div class="mission-number">3</div>
                        <p class="mission-text">Meningkatkan partisipasi masyarakat dalam pembangunan desa</p>
                    </div>
                    
                    <!-- Mission 4 -->
                    <div class="mission-item anim-fade-in delay-4">
                        <div class="mission-number">4</div>
                        <p class="mission-text">Mengembangkan Teknologi Informasi, infrastruktur, sarana dan prasarana desa</p>
                    </div>
                    
                    <!-- Mission 5 -->
                    <div class="mission-item anim-fade-in delay-5">
                        <div class="mission-number">5</div>
                        <p class="mission-text">Mengembangkan seluruh potensi desa secara optimal dan berkelanjutan</p>
                    </div>
                    
                    <!-- Mission 6 -->
                    <div class="mission-item anim-fade-in delay-6">
                        <div class="mission-number">6</div>
                        <p class="mission-text">Melestarikan kearifan lokal dan budaya masyarakat Desa Bawang</p>
                    </div>
                    
                    <!-- Mission 7 -->
                    <div class="mission-item anim-fade-in delay-7">
                        <div class="mission-number">7</div>
                        <p class="mission-text">Meningkatkan kualitas lingkungan permukiman yang sehat dan asri</p>
                    </div>
                    
                    <!-- Mission 8 -->
                    <div class="mission-item anim-fade-in delay-8">
                        <div class="mission-number">8</div>
                        <p class="mission-text">Meningkatkan kualitas kesehatan masyarakat melalui program kesehatan terpadu</p>
                    </div>
                    
                    <!-- Mission 9 -->
                    <div class="mission-item anim-fade-in delay-9">
                        <div class="mission-number">9</div>
                        <p class="mission-text">Membangun kerjasama dan kemitraan strategis dengan berbagai pihak</p>
                    </div>
                    
                    <!-- Mission 10 -->
                    <div class="mission-item anim-fade-in delay-10">
                        <div class="mission-number">10</div>
                        <p class="mission-text">Mengembangkan kegiatan keagamaan dan spiritual masyarakat</p>
                    </div>
                    
                    <!-- Mission 11 -->
                    <div class="mission-item anim-fade-in delay-11">
                        <div class="mission-number">11</div>
                        <p class="mission-text">Melakukan pengelolaan tambahan tunjangan secara efektif dan transparan</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- FOOTER -->
        <div class="profil-footer anim-fade-in delay-3">
            <p class="footer-text">
                Visi dan Misi Desa Bawang menjadi <span class="footer-highlight">panduan bersama</span> dalam setiap langkah pembangunan, 
                dengan semangat <span class="footer-highlight">gotong royong</span> dan komitmen untuk mewujudkan masyarakat yang 
                <span class="footer-highlight">sejahtera, beriman, dan berbudaya</span>.
            </p>
        </div>
    </div>
    
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
        
        // Add hover effects for mission items
        document.querySelectorAll('.mission-item').forEach(item => {
            item.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-5px) scale(1.02)';
            });
            
            item.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
            });
        });
        
        // Add hover effect for vision content
        document.querySelector('.vision-content').addEventListener('mouseenter', function() {
            this.style.transform = 'translateX(5px)';
        });
        
        document.querySelector('.vision-content').addEventListener('mouseleave', function() {
            this.style.transform = 'translateX(0)';
        });
        
        // Add shine effect on badge hover
        document.querySelector('.header-badge').addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-2px)';
        });
        
        document.querySelector('.header-badge').addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
        });
    </script>
</body>
</html>
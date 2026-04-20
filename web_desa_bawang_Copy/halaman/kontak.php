<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak - Desa Bawang</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background: linear-gradient(135deg, #f5f7fa 0%, #e4e8f0 100%);
            color: #333333;
            line-height: 1.6;
            min-height: 100vh;
        }
        
        .container {
            max-width: 1300px;
            margin: 0 auto;
            padding: 20px;
        }
        
        header {
            background: linear-gradient(to right, #2c5aa0, #3a6bc5);
            padding: 25px 0;
            border-bottom: none;
            box-shadow: 0 4px 20px rgba(44, 90, 160, 0.2);
            position: relative;
            overflow: hidden;
        }
        
        header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"><path d="M0,0 L100,0 L100,100 Z" fill="rgba(255,255,255,0.1)"/></svg>');
            background-size: cover;
        }
        
        .header-content {
            max-width: 1300px;
            margin: 0 auto;
            padding: 0 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: relative;
            z-index: 1;
        }
        
        .logo {
            font-size: 28px;
            font-weight: 800;
            color: white;
            display: flex;
            align-items: center;
            gap: 10px;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }
        
        .logo-icon {
            background-color: rgba(255, 255, 255, 0.2);
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
        }
        
        .logo span {
            color: #4CAF50;
            text-shadow: 0 2px 4px rgba(76, 175, 80, 0.3);
        }
        
        nav ul {
            display: flex;
            list-style: none;
            gap: 25px;
        }
        
        nav ul li {
            position: relative;
        }
        
        nav ul li a {
            text-decoration: none;
            color: rgba(255, 255, 255, 0.9);
            font-weight: 600;
            font-size: 16px;
            padding: 8px 15px;
            border-radius: 6px;
            transition: all 0.3s ease;
        }
        
        nav ul li a:hover {
            background-color: rgba(255, 255, 255, 0.15);
            color: white;
            transform: translateY(-2px);
        }
        
        nav ul li a.active {
            background-color: rgba(255, 255, 255, 0.2);
            color: white;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        
        .page-title {
            text-align: center;
            margin: 50px 0 30px;
            color: #2c5aa0;
            font-size: 2.8rem;
            font-weight: 700;
            position: relative;
            padding-bottom: 20px;
        }
        
        .page-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 120px;
            height: 4px;
            background: linear-gradient(to right, #2c5aa0, #4CAF50);
            border-radius: 2px;
        }
        
        .contact-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
            margin-bottom: 70px;
        }
        
        @media (max-width: 992px) {
            .contact-container {
                grid-template-columns: 1fr;
                gap: 40px;
            }
        }
        
        .contact-form {
            background: white;
            padding: 40px;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: 1px solid rgba(44, 90, 160, 0.1);
        }
        
        .contact-form:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.12);
        }
        
        .contact-form h2 {
            margin-bottom: 30px;
            color: #2c5aa0;
            font-size: 1.8rem;
            font-weight: 700;
            position: relative;
            padding-bottom: 15px;
        }
        
        .contact-form h2::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 60px;
            height: 3px;
            background: linear-gradient(to right, #2c5aa0, #4CAF50);
            border-radius: 2px;
        }
        
        .form-group {
            margin-bottom: 25px;
            position: relative;
        }
        
        label {
            display: block;
            margin-bottom: 10px;
            font-weight: 600;
            color: #444;
            font-size: 15px;
        }
        
        input, textarea {
            width: 100%;
            padding: 16px 20px;
            border: 2px solid #e1e5eb;
            border-radius: 10px;
            font-size: 16px;
            background-color: #f8fafc;
            color: #333;
            transition: all 0.3s ease;
        }
        
        input:focus, textarea:focus {
            outline: none;
            border-color: #2c5aa0;
            background-color: white;
            box-shadow: 0 0 0 4px rgba(44, 90, 160, 0.1);
        }
        
        .required::after {
            content: "*";
            color: #e74c3c;
            margin-left: 4px;
            font-weight: bold;
        }
        
        .contact-info {
            background: white;
            padding: 40px;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: 1px solid rgba(44, 90, 160, 0.1);
        }
        
        .contact-info:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.12);
        }
        
        .contact-info h2 {
            margin-bottom: 30px;
            color: #2c5aa0;
            font-size: 1.8rem;
            font-weight: 700;
            position: relative;
            padding-bottom: 15px;
        }
        
        .contact-info h2::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 60px;
            height: 3px;
            background: linear-gradient(to right, #2c5aa0, #4CAF50);
            border-radius: 2px;
        }
        
        .info-item {
            margin-bottom: 30px;
            padding: 20px;
            background-color: #f8fafc;
            border-radius: 12px;
            border-left: 4px solid #2c5aa0;
            transition: all 0.3s ease;
        }
        
        .info-item:hover {
            background-color: #f0f7ff;
            transform: translateX(5px);
        }
        
        .info-item h3 {
            color: #2c5aa0;
            margin-bottom: 10px;
            font-size: 1.3rem;
            font-weight: 700;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .info-item h3 i {
            font-size: 1.2rem;
        }
        
        .info-item p {
            color: #555;
            line-height: 1.7;
            font-size: 15px;
        }
        
        .btn-submit {
            background: linear-gradient(to right, #2c5aa0, #3a6bc5);
            color: white;
            border: none;
            padding: 18px 35px;
            font-size: 17px;
            border-radius: 10px;
            cursor: pointer;
            font-weight: 700;
            transition: all 0.3s ease;
            width: 100%;
            letter-spacing: 0.5px;
            box-shadow: 0 6px 15px rgba(44, 90, 160, 0.3);
            position: relative;
            overflow: hidden;
        }
        
        .btn-submit::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.7s;
        }
        
        .btn-submit:hover {
            background: linear-gradient(to right, #1e4075, #2c5aa0);
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(44, 90, 160, 0.4);
        }
        
        .btn-submit:hover::before {
            left: 100%;
        }
        
        .btn-submit:active {
            transform: translateY(0);
        }
        
        .commitment {
            background: linear-gradient(to right, rgba(44, 90, 160, 0.1), rgba(76, 175, 80, 0.1));
            padding: 30px;
            border-radius: 12px;
            margin: 40px auto 60px;
            max-width: 900px;
            border-left: 5px solid #2c5aa0;
            text-align: center;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
        }
        
        .commitment p {
            color: #2c5aa0;
            font-size: 1.3rem;
            font-weight: 600;
            font-style: normal;
            line-height: 1.8;
        }
        
        footer {
            background: linear-gradient(to right, #1a1a2e, #16213e);
            padding: 40px 0 30px;
            text-align: center;
            color: rgba(255, 255, 255, 0.8);
            margin-top: 70px;
            border-top: none;
        }
        
        .footer-content {
            max-width: 1300px;
            margin: 0 auto;
            padding: 0 30px;
        }
        
        .footer-content p {
            margin-bottom: 15px;
            font-size: 15px;
            line-height: 1.7;
        }
        
        .footer-logo {
            font-size: 22px;
            font-weight: 700;
            color: white;
            margin-bottom: 20px;
            display: inline-block;
        }
        
        .footer-logo span {
            color: #4CAF50;
        }
        
        .copyright {
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: rgba(255, 255, 255, 0.6);
            font-size: 14px;
        }
        
        .placeholder {
            color: #aaa;
        }
        
        textarea {
            min-height: 180px;
            resize: vertical;
        }
        
        .email-link {
            color: #2c5aa0;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            display: inline-block;
            position: relative;
        }
        
        .email-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background-color: #2c5aa0;
            transition: width 0.3s ease;
        }
        
        .email-link:hover {
            color: #1e4075;
        }
        
        .email-link:hover::after {
            width: 100%;
        }
        
        /* Styling untuk alert kustom */
        .alert-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            display: none;
            justify-content: center;
            align-items: center;
            z-index: 1000;
            animation: fadeIn 0.3s ease;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        .alert-box {
            background: white;
            padding: 50px;
            border-radius: 16px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            max-width: 500px;
            width: 90%;
            text-align: center;
            animation: slideUp 0.4s ease;
            position: relative;
            overflow: hidden;
        }
        
        @keyframes slideUp {
            from { 
                opacity: 0;
                transform: translateY(30px);
            }
            to { 
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .alert-box::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(to right, #e74c3c, #ff6b6b);
        }
        
        .alert-icon {
            font-size: 70px;
            color: #e74c3c;
            margin-bottom: 20px;
        }
        
        .alert-title {
            color: #e74c3c;
            font-size: 1.8rem;
            margin-bottom: 15px;
            font-weight: 700;
        }
        
        .alert-message {
            font-size: 1.1rem;
            margin-bottom: 30px;
            line-height: 1.6;
            color: #555;
        }
        
        .alert-close {
            background: linear-gradient(to right, #e74c3c, #ff6b6b);
            color: white;
            border: none;
            padding: 14px 35px;
            border-radius: 10px;
            cursor: pointer;
            font-size: 16px;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 6px 15px rgba(231, 76, 60, 0.3);
        }
        
        .alert-close:hover {
            background: linear-gradient(to right, #c0392b, #e74c3c);
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(231, 76, 60, 0.4);
        }
        
        .form-icon {
            position: absolute;
            right: 20px;
            top: 42px;
            color: #aaa;
            font-size: 18px;
        }
        
        .contact-icon {
            background: linear-gradient(to right, #2c5aa0, #3a6bc5);
            color: white;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
        }
        
        @media (max-width: 768px) {
            .header-content {
                flex-direction: column;
                gap: 20px;
            }
            
            nav ul {
                gap: 15px;
                flex-wrap: wrap;
                justify-content: center;
            }
            
            .page-title {
                font-size: 2.2rem;
            }
            
            .contact-form, .contact-info {
                padding: 30px 25px;
            }
            
            .alert-box {
                padding: 40px 25px;
            }
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
        
        <div class="contact-container">
            <div class="contact-form">
                <h2><i class="fas fa-paper-plane" style="margin-right: 10px;"></i> Kirim Pesan kepada Kami</h2>
                <form id="contactForm">
                    <div class="form-group">
                        <label for="name" class="required"><i class="fas fa-user" style="margin-right: 8px;"></i> Nama Lengkap</label>
                        <input type="text" id="name" placeholder="Masukkan nama lengkap Anda" required>
                        <div class="form-icon"><i class="fas fa-user"></i></div>
                    </div>
                    
                    <div class="form-group">
                        <label for="email" class="required"><i class="fas fa-envelope" style="margin-right: 8px;"></i> Email</label>
                        <input type="email" id="email" placeholder="contoh: nama@email.com" required>
                        <div class="form-icon"><i class="fas fa-envelope"></i></div>
                    </div>
                    
                    <div class="form-group">
                        <label for="message" class="required"><i class="fas fa-comment-dots" style="margin-right: 8px;"></i> Pesan Anda</label>
                        <textarea id="message" placeholder="Tulis pesan, aspirasi, atau pengaduan Anda di sini..." required></textarea>
                    </div>
                    
                    <button type="submit" class="btn-submit">
                        <i class="fas fa-paper-plane" style="margin-right: 10px;"></i> Kirim Pesan
                    </button>
                </form>
            </div>
            
            <div class="contact-info">
                <h2><i class="fas fa-address-book" style="margin-right: 10px;"></i> Informasi Kontak</h2>
                
                <div class="info-item">
                    <h3>
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        Alamat Desa
                    </h3>
                    <p>Desa Bawang, Kecamatan Bawang<br>
                    Kabupaten Banjarnegara, Jawa Tengah 53471</p>
                </div>
                
                <div class="info-item">
                    <h3>
                        <div class="contact-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        Telepon
                    </h3>
                    <p>(0281) 654321<br>
                    <small>Kantor Desa Bawang</small></p>
                </div>
                
                <div class="info-item">
                    <h3>
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        Email Resmi
                    </h3>
                    <p><a href="mailto:desa.bawang@banjamegarabab.go.id" class="email-link">desa.bawang@banjamegarabab.go.id</a></p>
                </div>
                
                <div class="info-item">
                    <h3>
                        <div class="contact-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        Jam Operasional
                    </h3>
                    <p>Senin - Jumat: 08.00 - 16.00 WIB<br>
                    Sabtu: 08.00 - 12.00 WIB<br>
                    <small>Minggu & Hari Libur: Tutup</small></p>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Alert Overlay -->
    <div class="alert-overlay" id="alertOverlay">
        <div class="alert-box">
            <div class="alert-icon">
                <i class="fas fa-exclamation-triangle"></i>
            </div>
            <h2 class="alert-title">Pesan Belum Dapat Dikirim</h2>
            <p class="alert-message" id="alertMessage">
                Maaf, saat ini sistem pengiriman pesan sedang dalam perbaikan. 
                Silakan hubungi kami melalui telepon atau email yang tertera di 
                halaman ini untuk bantuan lebih lanjut.
            </p>
            <button class="alert-close" id="alertClose">
                <i class="fas fa-times" style="margin-right: 8px;"></i> Tutup
            </button>
        </div>
    </div>
    
    
    <script>
        // Fungsi untuk menampilkan alert kustom
        function showAlert(message) {
            const alertOverlay = document.getElementById('alertOverlay');
            const alertMessage = document.getElementById('alertMessage');
            
            if (message) {
                alertMessage.textContent = message;
            }
            
            alertOverlay.style.display = 'flex';
        }
        
        // Fungsi untuk menutup alert
        function closeAlert() {
            const alertOverlay = document.getElementById('alertOverlay');
            alertOverlay.style.display = 'none';
        }
        
        // Event listener untuk tombol tutup alert
        document.getElementById('alertClose').addEventListener('click', closeAlert);
        
        // Event listener untuk menutup alert dengan klik di luar kotak alert
        document.getElementById('alertOverlay').addEventListener('click', function(e) {
            if (e.target === this) {
                closeAlert();
            }
        });
        
        // Form submission dengan alert kustom
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Ambil nilai dari form
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const message = document.getElementById('message').value;
            
            // Validasi sederhana
            if (name && email && message) {
                // Tampilkan alert bahwa pesan tidak dapat dikirim
                showAlert(`Maaf ${name}, saat ini sistem pengiriman pesan sedang dalam perbaikan. Silakan hubungi kami melalui telepon (0281) 654321 atau email desa.bawang@banjamegarabab.go.id untuk bantuan lebih lanjut.`);
                
                // Reset form
                document.getElementById('contactForm').reset();
            } else {
                // Tampilkan alert untuk field yang kosong
                showAlert("Harap lengkapi semua field yang wajib diisi sebelum mengirim pesan!");
            }
        });
        
        // Validasi email saat ketik
        document.getElementById('email').addEventListener('input', function() {
            const emailValue = this.value;
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            
            if (emailValue && !emailRegex.test(emailValue)) {
                this.style.borderColor = '#e74c3c';
                this.style.boxShadow = '0 0 0 4px rgba(231, 76, 60, 0.1)';
            } else {
                this.style.borderColor = '#e1e5eb';
                this.style.boxShadow = 'none';
            }
        });
        
        // Efek hover untuk info-item
        const infoItems = document.querySelectorAll('.info-item');
        infoItems.forEach(item => {
            item.addEventListener('mouseenter', function() {
                this.style.transform = 'translateX(5px)';
            });
            
            item.addEventListener('mouseleave', function() {
                this.style.transform = 'translateX(0)';
            });
        });
        
        // Animasi untuk tombol kirim
        const submitBtn = document.querySelector('.btn-submit');
        submitBtn.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-3px)';
        });
        
        submitBtn.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
        });
    </script>
</body>
</html>
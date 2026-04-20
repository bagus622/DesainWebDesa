<!-- komponen/kaki.php -->
<?php
// Data untuk form footer
$currentYear = date('Y');
?>

<footer>
    <div class="footer-content">
        <!-- Logo & Deskripsi -->
        <div class="footer-section">
            <a href="index.php" class="footer-logo">
                <i class="fas fa-mountain"></i> Desa <span>Bawang</span>
            </a>
            <p class="footer-description">
                Desa Bawang, Kecamatan Bawang, Kabupaten Banjarnegara, 
                Jawa Tengah. Komitmen kami adalah membangun desa yang 
                mandiri, sejahtera, dan berbudaya.
            </p>
            <div class="social-media">
                <a href="#" class="social-icon" title="Facebook Desa Bawang">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#" class="social-icon" title="Instagram Desa Bawang">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="#" class="social-icon" title="YouTube Desa Bawang">
                    <i class="fab fa-youtube"></i>
                </a>
                <a href="#" class="social-icon" title="WhatsApp Desa Bawang">
                    <i class="fab fa-whatsapp"></i>
                </a>
            </div>
        </div>
        
        <!-- Menu Cepat -->
        <div class="footer-section">
            <h3>Menu Cepat</h3>
            <ul class="footer-links">
                <li><a href="index.php"><i class="fas fa-chevron-right"></i> Beranda</a></li>
                <li><a href="index.php?halaman=profil-desa"><i class="fas fa-chevron-right"></i> Profil Desa</a></li>
                <li><a href="index.php?halaman=galeri"><i class="fas fa-chevron-right"></i> Galeri Kegiatan</a></li>
                <li><a href="index.php?halaman=berita"><i class="fas fa-chevron-right"></i> Berita Terbaru</a></li>
                <li><a href="index.php?halaman=kontak"><i class="fas fa-chevron-right"></i> Hubungi Kami</a></li>
            </ul>
        </div>
        
        <!-- Kontak Footer -->
        <div class="footer-section">
            <h3>Kontak Kami</h3>
            <ul class="contact-info-footer">
                <li>
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Desa Bawang, Kec. Bawang<br>Kab. Banjarnegara, Jawa Tengah 53471</span>
                </li>
                <li>
                    <i class="fas fa-phone"></i>
                    <span><a href="tel:+62281654321">(0281) 654321</a></span>
                </li>
                <li>
                    <i class="fas fa-envelope"></i>
                    <span><a href="mailto:desa.bawang@banjamegarabab.go.id">desa.bawang@banjamegarabab.go.id</a></span>
                </li>
                <li>
                    <i class="fas fa-clock"></i>
                    <span>Senin - Jumat: 08.00 - 16.00 WIB</span>
                </li>
            </ul>
        </div>
        
        <!-- Form Berlangganan -->
        <div class="footer-section">
            <h3>Berlangganan Info</h3>
            <p class="footer-description" style="font-size: 14px; margin-bottom: 20px;">
                Dapatkan informasi terbaru dari Desa Bawang langsung ke email Anda.
            </p>
            
            <form id="newsletterForm" class="newsletter-form">
                <div class="form-group">
                    <input type="text" id="footerName" name="nama" 
                           placeholder="Nama lengkap Anda" 
                           class="footer-input"
                           required>
                </div>
                
                <div class="form-group">
                    <input type="email" id="footerEmail" name="email" 
                           placeholder="Alamat email Anda" 
                           class="footer-input"
                           required>
                </div>
                
                <div class="form-group">
                    <select id="footerInfoType" name="jenis_info" class="footer-input">
                        <option value="">Pilih jenis informasi</option>
                        <option value="berita">Berita Desa</option>
                        <option value="kegiatan">Kegiatan Warga</option>
                        <option value="bantuan">Informasi Bantuan</option>
                        <option value="semua">Semua Informasi</option>
                    </select>
                </div>
                
                <button type="submit" class="btn-subscribe">
                    <i class="fas fa-paper-plane" style="margin-right: 8px;"></i>
                    Berlangganan
                </button>
                
                <p class="privacy-notice">
                    <small>Dengan berlangganan, Anda menyetujui 
                    <a href="#" style="color: rgba(255,255,255,0.8);">kebijakan privasi</a> kami.</small>
                </p>
            </form>
        </div>
    </div>
    
    <!-- Copyright -->
    <div class="copyright">
        <p>&copy; <?php echo $currentYear; ?> Desa Bawang. Hak Cipta Dilindungi. | <a href="admin/login.php" style="color: rgba(255,255,255,0.6);">Admin Login</a></p>
        <p style="margin-top: 5px;">Dibangun dengan <i class="fas fa-heart" style="color: #ff6b6b;"></i> untuk kemajuan Desa Bawang</p>
    </div>
</footer>

<style>
    /* FOOTER STYLES */
    footer {
        background: linear-gradient(135deg, #1a3c7e 0%, #2c5aa0 100%);
        padding: 60px 0 30px;
        margin-top: 70px;
        border-top: 5px solid #4CAF50;
        position: relative;
        overflow: hidden;
    }
    
    footer::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"><path d="M0,0 L100,0 L100,100 Z" fill="rgba(255,255,255,0.05)"/></svg>');
        background-size: cover;
        opacity: 0.3;
    }
    
    .footer-content {
        max-width: 1300px;
        margin: 0 auto;
        padding: 0 30px;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 40px;
        position: relative;
        z-index: 1;
    }
    
    .footer-section {
        margin-bottom: 30px;
    }
    
    .footer-logo {
        font-size: 28px;
        font-weight: 800;
        color: white;
        margin-bottom: 20px;
        display: inline-block;
        text-decoration: none;
    }
    
    .footer-logo span {
        color: #4CAF50;
    }
    
    .footer-description {
        color: rgba(255, 255, 255, 0.8);
        margin-bottom: 25px;
        font-size: 15px;
        line-height: 1.7;
    }
    
    .footer-section h3 {
        color: white;
        font-size: 1.4rem;
        margin-bottom: 25px;
        position: relative;
        padding-bottom: 15px;
        font-weight: 700;
    }
    
    .footer-section h3::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 50px;
        height: 3px;
        background: linear-gradient(to right, #4CAF50, #8bc34a);
        border-radius: 2px;
    }
    
    .footer-links {
        list-style: none;
    }
    
    .footer-links li {
        margin-bottom: 15px;
    }
    
    .footer-links a {
        color: rgba(255, 255, 255, 0.8);
        text-decoration: none;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        gap: 10px;
    }
    
    .footer-links a:hover {
        color: white;
        transform: translateX(5px);
    }
    
    .footer-links i {
        width: 20px;
        font-size: 14px;
    }
    
    .contact-info-footer {
        list-style: none;
    }
    
    .contact-info-footer li {
        margin-bottom: 20px;
        color: rgba(255, 255, 255, 0.8);
        display: flex;
        align-items: flex-start;
        gap: 15px;
    }
    
    .contact-info-footer i {
        color: #4CAF50;
        font-size: 18px;
        margin-top: 3px;
        flex-shrink: 0;
    }
    
    .contact-info-footer a {
        color: rgba(255, 255, 255, 0.9);
        text-decoration: none;
        transition: all 0.3s ease;
    }
    
    .contact-info-footer a:hover {
        color: white;
        text-decoration: underline;
    }
    
    .social-media {
        display: flex;
        gap: 15px;
        margin-top: 20px;
    }
    
    .social-icon {
        width: 40px;
        height: 40px;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        text-decoration: none;
        transition: all 0.3s ease;
        font-size: 18px;
    }
    
    .social-icon:hover {
        background: #4CAF50;
        transform: translateY(-5px);
    }
    
    .copyright {
        text-align: center;
        margin-top: 50px;
        padding-top: 30px;
        border-top: 1px solid rgba(255, 255, 255, 0.1);
        color: rgba(255, 255, 255, 0.6);
        font-size: 15px;
        position: relative;
        z-index: 1;
    }
    
    /* Form Styles untuk Footer */
    .newsletter-form {
        margin-top: 20px;
    }
    
    .newsletter-form .form-group {
        margin-bottom: 15px;
    }
    
    .footer-input {
        width: 100%;
        padding: 12px 15px;
        border: 2px solid rgba(255, 255, 255, 0.2);
        border-radius: 8px;
        background: rgba(255, 255, 255, 0.1);
        color: white;
        font-size: 14px;
        transition: all 0.3s ease;
    }
    
    .footer-input:focus {
        outline: none;
        border-color: #4CAF50;
        background: rgba(255, 255, 255, 0.15);
    }
    
    .footer-input::placeholder {
        color: rgba(255, 255, 255, 0.6);
    }
    
    .btn-subscribe {
        background: linear-gradient(to right, #4CAF50, #8bc34a);
        color: white;
        border: none;
        padding: 12px 25px;
        width: 100%;
        border-radius: 8px;
        cursor: pointer;
        font-weight: 600;
        transition: all 0.3s ease;
        margin-top: 10px;
    }
    
    .btn-subscribe:hover {
        background: linear-gradient(to right, #388E3C, #4CAF50);
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(76, 175, 80, 0.3);
    }
    
    .privacy-notice {
        margin-top: 15px;
        color: rgba(255, 255, 255, 0.6);
        font-size: 12px;
        line-height: 1.5;
    }
    
    .privacy-notice a:hover {
        text-decoration: underline;
    }
    
    /* Responsive */
    @media (max-width: 768px) {
        .footer-content {
            grid-template-columns: 1fr;
            gap: 30px;
        }
        
        footer {
            padding: 40px 0 20px;
        }
    }
</style>

<script>
    // Script untuk form berlangganan footer
    document.addEventListener('DOMContentLoaded', function() {
        const newsletterForm = document.getElementById('newsletterForm');
        
        if (newsletterForm) {
            newsletterForm.addEventListener('submit', function(e) {
                e.preventDefault();
                
                const name = document.getElementById('footerName').value;
                const email = document.getElementById('footerEmail').value;
                const infoType = document.getElementById('footerInfoType').value;
                
                if (name && email) {
                    alert(`Terima kasih ${name}! Anda telah berlangganan newsletter Desa Bawang. Informasi akan dikirim ke ${email}.`);
                    newsletterForm.reset();
                } else {
                    alert('Harap lengkapi nama dan email Anda!');
                }
            });
        }
    });
</script>
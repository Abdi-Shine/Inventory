<style>
/* Sub-menu hover styling */
.main-menu .sub-menu li a:hover {
    background-color: #004161 !important;
    color: #ffffff !important;
    padding-left: 20px !important; /* Interactive shift on hover */
    transition: all 0.3s ease;
}
/* Branded top border for sub-menu container */
.main-menu .sub-menu {
    border-top: 3px solid #99CC33 !important; 
}

/* Language Switcher Styling */
.lang-switcher {
    position: relative;
    display: inline-block;
}
.lang-btn {
    background: none;
    border: none;
    color: #fff;
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: 14px;
    font-weight: 600;
    cursor: pointer;
    padding: 5px 10px;
    transition: opacity 0.3s;
}
.lang-btn:hover {
    opacity: 0.8;
}
.lang-btn i {
    font-size: 10px;
    margin-left: 2px;
}
.lang-dropdown {
    position: absolute;
    top: 100%;
    right: 0;
    background: #fff;
    min-width: 140px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.15);
    border-radius: 8px;
    padding: 10px 0;
    display: none;
    z-index: 1000;
    margin-top: 10px;
}
.lang-switcher:hover .lang-dropdown {
    display: block;
}
.lang-dropdown a {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 8px 20px;
    color: #333 !important;
    text-decoration: none;
    font-size: 14px;
    transition: background 0.3s;
}
.lang-dropdown a:hover {
    background: #f8f9fa;
}
.flag-img {
    width: 20px;
    height: 20px;
    border-radius: 50%;
    object-fit: cover;
}
</style>

<header class="site-header lonyo-header-section" id="sticky-menu">
    <!-- Top Bar -->
    <div class="header-top-section skiptranslate" style="background-color: #004161; color: #fff; padding: 10px 0;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 d-flex align-items-center">
                     <span class="me-4"><i class="fas fa-map-marker-alt me-2"></i> Maka Al-Mukarama Street - Hodan, Mogadishu, Somalia</span>
                     <span><i class="fas fa-envelope me-2"></i> info@thehorntech.com</span>
                </div>
                 <div class="col-lg-4 d-flex justify-content-end align-items-center">
                     <div class="d-flex align-items-center border-end pe-3 me-3">
                        <a href="https://www.facebook.com/horntechltd" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://twitter.com" class="text-white me-3"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.linkedin.com/company/horntech-solutions-and-consultancy/" class="text-white me-3"><i class="fab fa-linkedin-in"></i></a>
                        <a href="https://www.instagram.com/horntech_ltd/" class="text-white"><i class="fab fa-instagram"></i></a>
                     </div>
                     <!-- Language Switcher -->
                     <div class="lang-switcher" style="z-index: 1001;">
                        <button class="lang-btn" id="current-lang">
                            <img src="https://upload.wikimedia.org/wikipedia/en/a/a4/Flag_of_the_United_States.svg" class="flag-img" alt="US Flag">
                            <span class="lang-text">English</span> <i class="fas fa-chevron-down"></i>
                        </button>
                        <div class="lang-dropdown">
                            <a href="javascript:void(0)" class="lang-option" data-lang="English" data-flag="https://upload.wikimedia.org/wikipedia/en/a/a4/Flag_of_the_United_States.svg">
                                <img src="https://upload.wikimedia.org/wikipedia/en/a/a4/Flag_of_the_United_States.svg" class="flag-img" alt="US Flag">
                                English
                            </a>
                            <a href="javascript:void(0)" class="lang-option" data-lang="Somalia" data-flag="https://upload.wikimedia.org/wikipedia/commons/a/a0/Flag_of_Somalia.svg">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/a/a0/Flag_of_Somalia.svg" class="flag-img" alt="Somalia Flag">
                                Somalia
                            </a>
                        </div>
                     </div>
                 </div>
            </div>
        </div>
    </div>


    <!-- Main Navigation -->
    <div class="container mt-3">
        <div class="row gx-3 align-items-center justify-content-between">
            <div class="col-auto">
                 <div class="header-logo1">
                    <a href="{{ url('/') }}">
                        <img src="https://thehorntech.com/wp-content/uploads/2022/10/WhatsApp-Image-2022-10-12-at-10.26.22-AM.jpeg" alt="Logo" style="max-height: 80px;">
                    </a>
                 </div>
            </div>
            <div class="col">
               <div class="lonyo-main-menu-item">
                 <nav class="main-menu menu-style1 d-none d-lg-block menu-right">
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li class="menu-item-has-children"><a href="#">Services</a>
                            <ul class="sub-menu">
                                <li><a href="#">UI/UX Design</a></li>
                                <li><a href="#">Software Testing</a></li>
                                <li><a href="#">Mobile Apps</a></li>
                                <li><a href="#">Web Design</a></li>
                                <li><a href="#">Custom Software</a></li>
                                <li><a href="#">IT Consultancy</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children"><a href="#">Products</a>
                             <ul class="sub-menu">
                                <li><a href="#">University ERP</a></li>
                                <li><a href="#">ECMIS</a></li>
                                <li><a href="#">Inventory System</a></li>
                                <li><a href="#">Biometric Attendance</a></li>
                                <li><a href="#">Hospital Management</a></li>
                                <li><a href="#">Notary Management</a></li>
                             </ul>
                        </li>
                        <li class="menu-item-has-children"><a href="#">Digital Marketing</a>
                             <ul class="sub-menu">
                                <li><a href="#">Social Media</a></li>
                                <li><a href="#">SEO</a></li>
                                <li><a href="#">SMS & Email</a></li>
                             </ul>
                        </li>
                         <li class="menu-item-has-children"><a href="#">Security</a>
                             <ul class="sub-menu">
                                <li><a href="#">CCTV Setup</a></li>
                                <li><a href="#">Attendance Machine</a></li>
                             </ul>
                        </li>
                        <li><a href="{{ route('login') }}">Login</a></li>
                    </ul>
                 </nav>
               </div>
            </div>
             <!-- Mobile Menu Toggle -->
            <div class="col-auto d-lg-none">
                  <button class="lonyo-menu-toggle"><span></span></button>
            </div>
        </div>
    </div>
</header>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const langOptions = document.querySelectorAll('.lang-option');
    const currentLangBtn = document.getElementById('current-lang');
    const currentLangText = currentLangBtn.querySelector('.lang-text');
    const currentLangImg = currentLangBtn.querySelector('img');

    function setCookie(name, value, days) {
        const d = new Date();
        d.setTime(d.getTime() + (days*24*60*60*1000));
        let expires = "expires="+ d.toUTCString();
        document.cookie = name + "=" + value + ";" + expires + ";path=/";
    }

    function triggerGoogleTranslate(langCode) {
        // Method 1: Set Google's internal cookie
        setCookie('googtrans', '/en/' + langCode, 1);
        
        // Method 2: Programmatic Trigger
        let attempts = 0;
        const interval = setInterval(() => {
            const googleCombo = document.querySelector('select.goog-te-combo');
            if (googleCombo) {
                googleCombo.value = langCode;
                googleCombo.dispatchEvent(new Event('change'));
                clearInterval(interval);
            }
            if (++attempts > 50) clearInterval(interval); // Timeout after 5s
        }, 100);
    }

    langOptions.forEach(option => {
        option.addEventListener('click', function() {
            const selectedLang = this.getAttribute('data-lang');
            const selectedFlag = this.getAttribute('data-flag');
            const langCode = selectedLang === 'Somalia' ? 'so' : 'en';

            // Update UI
            currentLangText.textContent = selectedLang;
            currentLangImg.src = selectedFlag;
            currentLangImg.alt = selectedLang + ' Flag';

            // Trigger AI Translation
            triggerGoogleTranslate(langCode);
            
            // Reload to ensure full page translation if needed (Optional, usually dynamic is enough)
            // location.reload(); 
        });
    });
});
</script>

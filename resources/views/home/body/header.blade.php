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

/* Responsive Logo Styling */
.header-logo1 img {
    max-height: 80px;
    transition: max-height 0.3s ease;
}
@media (max-width: 991px) {
    .header-logo1 img {
        max-height: 60px;
    }
}
@media (max-width: 575px) {
    .header-logo1 img {
        max-height: 50px;
    }
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

/* Login Button Styling */
.lonyo-header-btn {
    background-color: #004161 !important;
    border-color: #004161 !important;
    color: #ffffff !important;
    transition: all 0.3s ease;
}
.lonyo-header-btn:hover {
    background-color: #005580 !important;
    border-color: #005580 !important;
    color: #ffffff !important;
}
</style>

<header class="site-header lonyo-header-section" id="sticky-menu" style="background-color: #ffffff;">
    <!-- Top Bar -->
    <div class="header-top-section skiptranslate" style="background-color: #004161; color: #fff; padding: 10px 0;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-12 d-flex flex-wrap justify-content-center justify-content-lg-start align-items-center mb-2 mb-lg-0" style="font-size: 14px; gap: 15px;">
                     <span><a href="mailto:info@thehorntech.com" class="text-white"><i class="fas fa-envelope me-2"></i> info@thehorntech.com</a></span>
                     <span><a href="tel:+252610777625" class="text-white"><i class="fas fa-mobile-alt me-2"></i> +252 610 777625</a></span>    
                </div>
                 <div class="col-lg-4 col-12 d-flex justify-content-center justify-content-lg-end align-items-center">
                     <div class="d-flex align-items-center border-end-lg pe-lg-3 me-lg-3 mb-2 mb-lg-0">
                        <a href="https://www.facebook.com/horntechltd" target="_blank" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://twitter.com" class="text-white me-3"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.linkedin.com/company/horntech-solutions-and-consultancy/" target="_blank" class="text-white me-3"><i class="fab fa-linkedin-in"></i></a>
                        <a href="https://www.instagram.com/horntech_ltd/" target="_blank" class="text-white me-3 me-lg-0"><i class="fab fa-instagram"></i></a>
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
    <div class="container">
      <div class="row gx-3 align-items-center justify-content-between">
        <div class="col-8 col-sm-auto ">
          <div class="header-logo1 ">
            <a href="{{ url('/') }}">
              <img src="{{ asset('upload/Horntech_logo/White.jpg') }}" alt="logo">
            </a>
          </div>
        </div>
        <div class="col">
          <div class="lonyo-main-menu-item">
            <nav class="main-menu menu-style1 d-none d-lg-block menu-left">
              <ul>
                <li>
                  <a href="{{ url('/') }}">Home</a>
                </li>
                <li>
                  <a href="{{ route('about.us') }}">About</a>
                </li>
                <li class="menu-item-has-children">
                  <a href="#">Services</a>
                  <ul class="sub-menu">
                    @foreach($services as $item)
                    <li><a href="{{ $item->slug ? route('service.details', $item->slug) : '#' }}">{{ $item->title }}</a></li>
                    @endforeach
                  </ul>
                </li>
                <li class="menu-item-has-children">
                  <a href="#">Products</a>
                  <ul class="sub-menu">
                    @foreach($products as $item)
                    <li><a href="{{ $item->slug ? route('product.details', $item->slug) : '#' }}">{{ $item->title }}</a></li>
                    @endforeach
                  </ul>
                </li>
                <li>
                  <a href="{{ route('digital.marketing') }}">Digital Marketing</a>
                </li>
                <li>
                  <a href="{{ route('contact.us')}}">Contact</a>
                </li>
                <li>
                  <a href="{{ route('login') }}">Login</a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <div class="col-auto d-flex align-items-center">
          <div class="lonyo-header-info-wraper2">
          </div>
          <div class="lonyo-header-menu">
            <nav class="navbar site-navbar justify-content-between">
              <!-- Brand Logo-->
              <!-- mobile menu trigger -->
              <button class="lonyo-menu-toggle d-inline-block d-lg-none">
                <span></span>
              </button>
              <!--/.Mobile Menu Hamburger Ends-->
            </nav>
          </div>
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

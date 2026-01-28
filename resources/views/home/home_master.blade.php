<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HornTech Ltd: Technology Solutions and Innovation</title>

  <link rel="shortcut icon" href="{{ asset('upload/Horntech_logo/horntech_icon.jpg') }}" type="image/x-icon">
  <link rel="icon" href="{{ asset('upload/Horntech_logo/horntech_icon.jpg') }}" type="image/x-icon">
  <!--- End favicon-->

  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

  <!-- End google font  -->

  <link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/assets/css/magnific-popup.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/assets/css/slick.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/assets/css/fontawesome.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/assets/css/remixicon.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/assets/css/aos.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/assets/css/niceselect.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/assets/css/animate.min.css')}}">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >



  <!-- Code Editor  -->

  <link rel="stylesheet" href="{{asset('frontend/assets/css/main.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/assets/css/app.min.css')}}">
</head>

<body>

  <div class="preloader">
    <div class="preloader-inner">
       <img src="{{ asset('upload/Horntech_logo/horntech_icon.jpg') }}" alt="HornTech Loading" style="max-height: 100px; animation: pulse 1.5s infinite ease-in-out;">
    </div>
  </div>

  <style>
    @keyframes pulse {
      0% { transform: scale(0.9); opacity: 0.7; }
      50% { transform: scale(1.1); opacity: 1; }
      100% { transform: scale(0.9); opacity: 0.7; }
    }
    body, h1, h2, h3, h4, h5, h6, p, a, li, button, input, textarea, label {
      font-family: 'Montserrat', sans-serif !important;
    }
    .montserrat-branded-900 {
      font-family: "Montserrat", sans-serif;
      font-optical-sizing: auto;
      font-weight: 900;
      font-style: normal;
    }
    .montserrat-branded-700 {
      font-family: "Montserrat", sans-serif;
      font-optical-sizing: auto;
      font-weight: 700;
      font-style: normal;
    }
    .montserrat-branded-500 {
      font-family: "Montserrat", sans-serif;
      font-optical-sizing: auto;
      font-weight: 500;
      font-style: normal;
    }
    .preloader {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: #ffffff;
      display: flex;
      justify-content: center;
      align-items: center;
      z-index: 99999;
      transition: opacity 0.5s ease;
    }
  </style>
  <!-- End preloader -->

  <div class="progress-bar-container">
    <div class="progress-bar"></div>
  </div>

  <!-- progress circle -->
  <div class="paginacontainer">
    <div class="progress-wrap">
      <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
      </svg>
      <div class="top-arrow">
        <svg width="12" height="20" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M0.999999 1L8 8L1 15" stroke="#142D6F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
      </div>
    </div>
  </div>
  <!-- End All Js -->



  <!-- Mobile Menu -->
  @include('home.body.mobile_menu')
  <!-- End mobile menu -->

  <!-- Header -->
  @include('home.body.header')
  <!-- End header -->

 <!-- start home -->
  @yield('home')
 <!-- end home -->

@include('home.body.footer')
  <!-- end footer -->


  <!-- scripts -->
  <script src="{{asset('frontend/assets/js/jquery-3.7.1.min.js')}}"></script>

  <script src="{{asset('frontend/assets/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('frontend/assets/js/menu/menu.js')}}"></script>
  <script src="{{asset('frontend/assets/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('frontend/assets/js/slick.js')}}"></script>
  <script src="{{asset('frontend/assets/js/pricing.min.js')}}"></script>
  <script src="{{asset('frontend/assets/js/countdown.js')}}"></script>
  <script src="{{asset('frontend/assets/js/skillbar.js')}}"></script>
  <script src="{{asset('frontend/assets/js/slick-animation.js')}}"></script>
  <script src="{{asset('frontend/assets/js/slick-animation.min.js')}}"></script>
  <script src="{{asset('frontend/assets/js/faq.js')}}"></script>
  <script src="{{asset('frontend/assets/js/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('frontend/assets/js/tabs-slider.js')}}"></script>
  <script src="{{asset('frontend/assets/js/product-increment.js')}}"></script>
  <script src="{{asset('frontend/assets/js/aos.js')}}"></script>
  <script src="{{asset('frontend/assets/js/niceselect.js')}}"></script>
  <script src="{{asset('frontend/assets/js/wow.min.js')}}"></script>
  <script async defer src="https://maps.googleapis.com/maps/api/js?v=3&key=AIzaSyArZVfNvjnLNwJZlLJKuOiWHZ6vtQzzb1Y"></script>
  <script src="{{asset('frontend/assets/js/slick.js')}}"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

  <script>
   @if(Session::has('message'))
   var type = "{{ Session::get('alert-type','info') }}"
   switch(type){
      case 'info':
      toastr.info(" {{ Session::get('message') }} ");
      break;

      case 'success':
      toastr.success(" {{ Session::get('message') }} ");
      break;

      case 'warning':
      toastr.warning(" {{ Session::get('message') }} ");
      break;

      case 'error':
      toastr.error(" {{ Session::get('message') }} ");
      break; 
   }
   @endif 
  </script>

  <script src="{{asset('frontend/assets/js/app.js')}}"></script>

  <!-- Google Translate AI Integration (Hidden but accessible) -->
  <div id="google_translate_element" style="position: absolute; top: -9999px; left: -9999px; opacity: 0; pointer-events: none;"></div>
  <script type="text/javascript">
    function googleTranslateElementInit() {
      new google.translate.TranslateElement({
        pageLanguage: 'en',
        includedLanguages: 'en,so',
        autoDisplay: false
      }, 'google_translate_element');
    }
  </script>
  <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

  <style>
    /* DEEP SUPPRESSION: Disappear the Google Translate Orange Bar */
    .goog-te-banner-frame.skiptranslate,
    .goog-te-banner-frame,
    .goog-te-banner,
    .goog-te-gadget-icon,
    .goog-logo-link,
    .goog-te-gadget,
    #goog-gt-tt,
    .VIpgJd-Zvi9dn-l4e2w-akLre,
    .VIpgJd-Zvi9dn-l4e2w-akLre-l690u-v06Ofe,
    .VIpgJd-Zvi9dn-l4e2w-akLre-v06Ofe,
    #google_translate_element,
    iframe#\:1\.container,
    iframe#\:0\.container,
    .goog-te-spinner-pos { 
        display: none !important; 
        visibility: hidden !important;
        opacity: 0 !important;
        pointer-events: none !important;
        height: 0 !important;
        width: 0 !important;
    }
    
    /* Force layout to ignore ANY top-space injection */
    html { margin-top: 0 !important; border-top: none !important; }
    body { top: 0 !important; position: static !important; padding-top: 0 !important; margin-top: 0 !important; }
    
    /* Prevent the red/orange banner space */
    .translated-ltr, .translated-rtl {
        margin-top: 0 !important;
        padding-top: 0 !important;
        top: 0 !important;
    }

  </style>

  <script>
    // Ultimate Layout Reset: Combats Google's dynamic toolbar injection
    (function() {
        const killBanner = () => {
            document.documentElement.style.setProperty('margin-top', '0px', 'important');
            document.body.style.setProperty('top', '0px', 'important');
            
            // Targeted Google Translate IFrames only
            const googleIFrames = document.querySelectorAll('iframe.goog-te-banner-frame, iframe#\\:1\\.container, iframe#\\:0\\.container');
            googleIFrames.forEach(f => f.style.setProperty('display', 'none', 'important'));
        };
        window.addEventListener('load', killBanner);
        setInterval(killBanner, 500); 
    })();
  </script>
  <style>
    #sticky-menu {
        z-index: 9999 !important;
    }
  </style>
</body>
</html>

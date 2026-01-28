<style>
/* Mobile Menu Button Styling */
.lonyo-mobile-menu-btn .lonyo-default-btn {
    background-color: #004161 !important;
    border-color: #004161 !important;
    color: #ffffff !important;
    transition: all 0.3s ease;
}
.lonyo-mobile-menu-btn .lonyo-default-btn:hover {
    background-color: #005580 !important;
    border-color: #005580 !important;
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0, 65, 97, 0.3);
}
</style>

<div class="lonyo-menu-wrapper">
    <div class="lonyo-menu-area text-center">
      <div class="lonyo-menu-mobile-top">
        <div class="mobile-logo">
          <a href="{{ url('/') }}">
            <img src="{{ asset('upload/Horntech_logo/White.jpg') }}" alt="logo" style="max-height: 60px;">
          </a>
        </div>
        <button class="lonyo-menu-toggle mobile">
          <i class="ri-close-line"></i>
        </button>
      </div>
      <div class="lonyo-mobile-menu">
        <ul>
          <li>
            <a href="{{ url('/') }}">Home</a>
          </li>
          <li>
            <a href="about-us.html">About</a>
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
            <a href="contact-us.html">Digital Marketing</a>
          </li>
          <li>
            <a href="contact-us.html">Contact</a>
          </li>
          <li>
            <a href="{{ route('login') }}">Login</a>
          </li>
        </ul>
      </div>
      <div class="lonyo-mobile-menu-btn">
        <a class="lonyo-default-btn sm-size" href="contact-us.html" data-text="Get in Touch"><span class="btn-wraper">Get in Touch</span></a>
        <a class="lonyo-default-btn sm-size" href="contact-us.html" data-text="Get in Touch"><span class="btn-wraper">Get in Touch</span></a>
      </div>
    </div>
  </div>

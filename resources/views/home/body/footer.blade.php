<style>
  .custom-footer {
    background-color: #004161; /* Updated brand dark blue */
    color: #fff;
    padding: 30px 0 15px;
    font-family: 'Montserrat', sans-serif;
  }
  .custom-footer h4 {
    color: #fff;
    font-size: 20px;
    font-weight: 700;
    margin-bottom: 25px;
    position: relative;
    display: inline-block;
  }
  .custom-footer h4::after {
    content: '';
    position: absolute;
    left: 0;
    bottom: -8px;
    width: 30px;
    height: 2px;
    background-color: #99CC33; /* Brand green underline */
  }
  .custom-footer-tagline {
    font-size: 14px;
    text-transform: uppercase;
    color: #b0c4de;
    margin: 20px 0;
    line-height: 1.6;
    letter-spacing: 1px;
  }
  .footer-contact-btn-wrap {
    display: flex;
    align-items: center;
    gap: 0;
    margin-bottom: 30px;
  }
  .footer-contact-btn {
    background: #fff;
    color: #001e38;
    padding: 10px 25px;
    border-radius: 50px 0 0 50px;
    font-weight: 700;
    text-decoration: none;
    font-size: 14px;
    display: inline-block;
    transition: all 0.3s ease;
  }
  .footer-arrow-circle {
    background: #99CC33;
    color: #fff;
    width: 40px;
    height: 41px;
    border-radius: 0 50px 50px 0;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 16px;
  }
  .custom-footer-links {
    list-style: none;
    padding: 0;
  }
  .custom-footer-links li {
    margin-bottom: 8px;
  }
  .custom-footer-links a {
    color: #fff;
    text-decoration: none;
    display: flex;
    align-items: center;
    gap: 10px;
    font-size: 15px;
    transition: color 0.3s ease;
  }
  .custom-footer-links a:hover {
    color: #fff;
  }
  .custom-footer-links a span {
    color: #99CC33; /* Brand green color for » */
    font-weight: bold;
  }
  .footer-contact-info {
    list-style: none;
    padding: 0;
  }
  .footer-contact-info li {
    display: flex;
    gap: 15px;
    color: #fff;
    font-size: 15px;
    margin-bottom: 12px;
    line-height: 1.5;
  }
  .footer-contact-info i {
    color: #99CC33;
    font-size: 18px;
    margin-top: 5px;
  }
  .footer-socials {
    display: flex;
    align-items: center;
    gap: 15px;
    margin-top: 30px;
  }
  .footer-socials span {
    font-size: 14px;
    color: #fff;
    position: relative;
    padding-left: 15px;
  }
  .footer-socials span::before {
    content: '';
    position: absolute;
    left: 0;
    top: 50%;
    width: 8px;
    height: 1px;
    background: #fff;
  }
  .footer-socials a {
    color: #fff;
    font-size: 16px;
    transition: color 0.3s ease;
  }
  .footer-socials a:hover {
    color: #99CC33;
  }
  .footer-bottom {
    margin-top: 25px;
    padding-top: 15px;
    border-top: 1px solid rgba(255,255,255,0.05);
    text-align: center;
    color: #fff;
    font-size: 13px;
  }
</style>

<footer class="custom-footer">
  <div class="container">
    <div class="row text-center text-md-start">
      <!-- Column 1 -->
      <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
        <a href="{{ url('/') }}">
          <img src="{{ asset('upload/Horntech_logo/green.jpg') }}" alt="Logo" style="max-width: 180px;">
        </a>
        <p class="custom-footer-tagline" style="color: #99CC33;">
          INNOVATIVE TECHNOLOGY<br>THROUGH SOLUTIONS
        </p>
        <div class="footer-contact-btn-wrap justify-content-center justify-content-md-start">
          <a href="#" class="footer-contact-btn">CONTACT US</a>
          <div class="footer-arrow-circle">
            <i class="fas fa-arrow-up" style="transform: rotate(45deg);"></i>
          </div>
        </div>
        <div class="footer-socials justify-content-center justify-content-md-start">
          <span>Follow us on</span>
          <a href="https://www.facebook.com/horntechltd" target="_blank"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-x-twitter"></i></a>
          <a href="https://www.linkedin.com/company/horntech-solutions-and-consultancy/"><i class="fab fa-linkedin-in"></i></a>
          <a href="https://www.instagram.com/horntech_ltd/" target="_blank"><i class="fab fa-instagram"></i></a>
        </div>
      </div>

      <!-- Column 2 -->
      <div class="col-lg-3 col-md-6 mb-5 mb-lg-0 px-xl-5">
        <h4>Quick Links</h4>
        <ul class="custom-footer-links">
          <li><a href="{{ url('/') }}"><span>»</span> Home</a></li>
          <li><a href="#"><span>»</span> About Us</a></li>
          <li><a href="#"><span>»</span> Services</a></li>
          <li><a href="#"><span>»</span> Products</a></li>
          <li><a href="#"><span>»</span> Contact Us</a></li>
        </ul>
      </div>

      <!-- Column 3 -->
      <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
        <h4>Our Services</h4>
        <ul class="custom-footer-links">
          <li><a href="#"><span>»</span> Custom Software</a></li>
          <li><a href="#"><span>»</span> Mobile App Dev</a></li>
          <li><a href="#"><span>»</span> Web Design</a></li>
          <li><a href="#"><span>»</span> IT Consultancy</a></li>
          <li><a href="#"><span>»</span> Digital Marketing</a></li>
        </ul>
      </div>

      <!-- Column 4 -->
      <div class="col-lg-3 col-md-6">
        <h4>Contact Us</h4>
        <ul class="footer-contact-info">
          <li class="justify-content-center justify-content-md-start">
            <i class="fas fa-map-marker-alt"></i>
            <span>Maka Al-Mukarama Street - Hodan, Mogadishu, Somalia</span>
          </li>
          <li class="justify-content-center justify-content-md-start">
            <i class="fab fa-whatsapp"></i>
            <span>+252 610 777625</span>
          </li>
          <li class="justify-content-center justify-content-md-start">
            <i class="fas fa-envelope"></i>
            <span>info@thehorntech.com</span>
          </li>
        </ul>
      </div>
    </div>

    <div class="footer-bottom">
      <p>© Copyright {{ date('Y') }}, All Rights Reserved by Horntech Solutions</p>
    </div>
  </div>
</footer>

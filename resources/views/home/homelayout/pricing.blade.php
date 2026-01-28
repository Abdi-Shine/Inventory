
<div class="lonyo-section-padding10 position-relative" style="padding-top: 10px; padding-bottom: 20px;">
    <div class="container">
      <div class="col-xl-12 col-lg-12">
        <h4 class="fw-semibold text-capitalize lh-base text-center" style="font-family: 'Montserrat', sans-serif; font-size: 36px; font-weight: 700; color: #004161 !important; margin-bottom: 20px;">
            {{ optional($titles)->title3 }}
            <br>
            {{ optional($titles)->description3 }}
        </h4>
      </div>

       <div class="row g-4 align-items-stretch justify-content-center mb-0">
      <style>
      <style>
    .pricing-column {
        display: flex;
        align-items: stretch;
        width: 100%;
        max-width: 380px; /* Slight increase for better desktop look */
    }
    @media (max-width: 991px) {
        .pricing-column {
            max-width: 450px; /* Allow wider cards on tablets/mobile */
        }
    }
    @media (max-width: 575px) {
        .pricing-column {
            max-width: 100%; /* Full width on small mobile */
        }
    }

    .pricing-card {
        position: relative;
        background: #fff;
        border-radius: 15px;
        box-shadow: rgba(39, 81, 162, 0.09) 0px 10px 26px 0px;
        padding: 40px 30px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        align-items: stretch;
        z-index: 1;
        cursor: pointer;
        height: 100%;
        width: 100%;
        transition: transform 0.3s ease, box-shadow 0.3s ease, background-color 0.3s ease, color 0.3s ease;
        border: 2px solid transparent !important;
    }

    @media (max-width: 767px) {
        .pricing-card {
            padding: 30px 20px;
        }
    }

    .pricing-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(0,0,0,0.2) !important;
        z-index: 10 !important;
        background-color: #004161 !important;
        border-color: #004161 !important;
        color: #fff !important;
    }

    .pricing-card:hover .desc, 
    .pricing-card:hover div, 
    .pricing-card:hover span:not(.ribbon-text), 
    .pricing-card:hover li,
    .pricing-card:hover li i {
        color: #fff !important;
    }

    /* Keep ribbon text styling consistent */
    .pricing-card .ribbon-text {
        position: relative;
        font-family: 'Plus Jakarta Sans';
        font-weight: bold;
        font-size: 14px;
        color: #fff;
        margin-right: 19px;
        letter-spacing: 1px;
        z-index: 2;
        text-shadow: none;
        white-space: nowrap;
        transition: color 0.3s ease;
    }

    .pricing-card:hover .ribbon-text {
         color: #004161 !important;
    }

    .pricing-card:hover svg path {
         fill: #fff !important;
    }

    .pricing-card .price {
        font-weight: 500;
        font-size: 40px;
        color: #00194c;
        text-align: left;
        margin-bottom: 0px;
        transition: color 0.3s ease;
    }

    .pricing-card .billed {
        color: #445375;
        font-size: 16px;
        margin-bottom: 18px;
        text-align: left;
        transition: color 0.3s ease;
    }

    .pricing-card .desc {
        color: #333d49;
        font-weight: 400;
        font-size: 16px;
        line-height: 1.6;
        margin-bottom: 18px;
        text-align: left;
        transition: color 0.3s ease;
    }

    .pricing-card:hover .price,
    .pricing-card:hover .billed {
        color: #c5d2e8 !important; /* Lighter blue for hierarchy on hover */
    }

    .pricing-card ul li {
        margin-bottom: 13px;
        display: flex;
        align-items: center;
        color: #757575;
        font-weight: 500;
        font-size: 15px; /* Slightly smaller for mobile compatibility */
        transition: color 0.3s ease;
    }

    .pricing-card button {
        width: 100%;
        background: #004161;
        color: #fff !important;
        border: none;
        border-radius: 50px;
        padding: 15px 0px;
        font-weight: bold;
        font-size: 16px;
        margin-top: auto;
        cursor: pointer;
        outline: none;
        text-transform: uppercase;
        transition: all 0.3s ease;
    }

    .pricing-card:hover button {
        background: #fff !important;
        color: #004161 !important;
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }
</style>
    <!-- BASIC CARD ($30) - White Background -->
    <div class="col-lg-4 col-md-6 col-sm-12 pricing-column">
      <div class="pricing-card basic-card">
        
        <div style="position: absolute; top: 24px; right: 0px; width: 120px; height: 38px; z-index: 2; display: flex; align-items: center; justify-content: flex-end; pointer-events: none;">
          <!-- Inline SVG Ribbon -->
          <svg width="120" height="38" viewBox="0 0 120 38" fill="none" xmlns="http://www.w3.org/2000/svg" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
             <path d="M120 0H20L0 19L20 38H120V0Z" fill="#004161" style="transition: fill 0.3s ease;"/>
          </svg>
          <span class="ribbon-text">BASIC</span>
        </div>

        <div>
           <div class="price">$30</div>
          <div class="billed">Billed Yearly</div>
          <div class="desc">Reliable hosting for constant uptime</div>
          <div style="border-top: 1px solid #e7eaf3; margin: 0px 0px 20px;"></div>
          
           <ul style="list-style: none; padding: 0px; margin-bottom: 24px; text-align: left;">

            <li style="margin-bottom: 13px; display: flex; align-items: center; color: #757575; font-weight: 500; font-size: 16px;">
              <i class="fas fa-check-circle" style="color: #004161; margin-right: 10px;"></i><span>5 GB Storage</span>
            </li>
             <li style="margin-bottom: 13px; display: flex; align-items: center; color: #757575; font-weight: 500; font-size: 16px;">
               <i class="fas fa-check-circle" style="color: #004161; margin-right: 10px;"></i><span>Scalable Bandwidth</span>
            </li>
             <li style="margin-bottom: 13px; display: flex; align-items: center; color: #757575; font-weight: 500; font-size: 16px;">
               <i class="fas fa-check-circle" style="color: #004161; margin-right: 10px;"></i><span>5 Email Address</span>
            </li>
             <li style="margin-bottom: 13px; display: flex; align-items: center; color: #757575; font-weight: 500; font-size: 16px;">
               <i class="fas fa-check-circle" style="color: #004161; margin-right: 10px;"></i><span>5 Database</span>
            </li>
             <li style="margin-bottom: 13px; display: flex; align-items: center; color: #757575; font-weight: 500; font-size: 16px;">
               <i class="fas fa-check-circle" style="color: #004161; margin-right: 10px;"></i><span>99.9% Uptime Guarantee</span>
            </li>
             <li style="margin-bottom: 13px; display: flex; align-items: center; color: #757575; font-weight: 500; font-size: 16px;">
               <i class="fas fa-check-circle" style="color: #004161; margin-right: 10px;"></i><span>Free SSL</span>
            </li>
             <li style="margin-bottom: 13px; display: flex; align-items: center; color: #757575; font-weight: 500; font-size: 16px;">
               <i class="fas fa-check-circle" style="color: #004161; margin-right: 10px;"></i><span>Backup Weekly</span>
            </li>
             <li style="margin-bottom: 13px; display: flex; align-items: center; color: #757575; font-weight: 500; font-size: 16px;">
               <i class="fas fa-check-circle" style="color: #004161; margin-right: 10px;"></i><span>1 Website</span>
            </li>
             <li style="margin-bottom: 13px; display: flex; align-items: center; color: #757575; font-weight: 500; font-size: 16px;">
               <i class="fas fa-check-circle" style="color: #004161; margin-right: 10px;"></i><span>Free WordPress</span>
            </li>
          </ul>
        </div>
        
        <button style="width: 100%; background: #004161; color: #fff; border: none; border-radius: 50px; padding: 15px 0px; font-weight: bold; font-size: 16px; margin-top: auto; cursor: pointer; outline: none; text-transform: uppercase;">SELECT</button>
      </div>
    </div>

    <!-- GOLDEN CARD ($50) - White Background -->
    <div class="col-lg-4 col-md-6 col-sm-12 pricing-column">
      <div class="pricing-card golden-card">
        
        <div style="position: absolute; top: 24px; right: 0px; width: 120px; height: 38px; z-index: 2; display: flex; align-items: center; justify-content: flex-end; pointer-events: none;">
          <!-- Inline SVG Ribbon -->
          <svg width="120" height="38" viewBox="0 0 120 38" fill="none" xmlns="http://www.w3.org/2000/svg" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
             <path d="M120 0H20L0 19L20 38H120V0Z" fill="#004161" style="transition: fill 0.3s ease;"/>
          </svg>
          <span class="ribbon-text">GOLDEN</span>
        </div>

        <div>
           <div class="price">$50</div>
          <div class="billed">Billed Yearly</div>
          <div class="desc">Deliver seamless performance with trusted hosting for your website.</div>
          <div style="border-top: 1px solid #e7eaf3; margin: 0px 0px 20px;"></div>
          
           <ul style="list-style: none; padding: 0px; margin-bottom: 24px; text-align: left;">
            <li style="margin-bottom: 13px; display: flex; align-items: center; color: #757575; font-weight: 500; font-size: 16px;">
              <i class="fas fa-check-circle" style="color: #004161; margin-right: 10px;"></i><span>30 GB Storage</span>
            </li>
             <li style="margin-bottom: 13px; display: flex; align-items: center; color: #757575; font-weight: 500; font-size: 16px;">
               <i class="fas fa-check-circle" style="color: #004161; margin-right: 10px;"></i><span>Scalable Bandwidth</span>
            </li>
             <li style="margin-bottom: 13px; display: flex; align-items: center; color: #757575; font-weight: 500; font-size: 16px;">
               <i class="fas fa-check-circle" style="color: #004161; margin-right: 10px;"></i><span>30 Email Address</span>
            </li>
             <li style="margin-bottom: 13px; display: flex; align-items: center; color: #757575; font-weight: 500; font-size: 16px;">
               <i class="fas fa-check-circle" style="color: #004161; margin-right: 10px;"></i><span>30 Database</span>
            </li>
             <li style="margin-bottom: 13px; display: flex; align-items: center; color: #757575; font-weight: 500; font-size: 16px;">
               <i class="fas fa-check-circle" style="color: #004161; margin-right: 10px;"></i><span>99.9% Uptime Guarantee</span>
            </li>
             <li style="margin-bottom: 13px; display: flex; align-items: center; color: #757575; font-weight: 500; font-size: 16px;">
               <i class="fas fa-check-circle" style="color: #004161; margin-right: 10px;"></i><span>Free SSL</span>
            </li>
             <li style="margin-bottom: 13px; display: flex; align-items: center; color: #757575; font-weight: 500; font-size: 16px;">
               <i class="fas fa-check-circle" style="color: #004161; margin-right: 10px;"></i><span>Backup Weekly</span>
            </li>
             <li style="margin-bottom: 13px; display: flex; align-items: center; color: #757575; font-weight: 500; font-size: 16px;">
               <i class="fas fa-check-circle" style="color: #004161; margin-right: 10px;"></i><span>2 Website</span>
            </li>
             <li style="margin-bottom: 13px; display: flex; align-items: center; color: #757575; font-weight: 500; font-size: 16px;">
               <i class="fas fa-check-circle" style="color: #004161; margin-right: 10px;"></i><span>Free WordPress</span>
            </li>
          </ul>
        </div>
        
        <button style="width: 100%; background: #004161; color: #fff; border: none; border-radius: 50px; padding: 15px 0px; font-weight: bold; font-size: 16px; margin-top: auto; cursor: pointer; outline: none; text-transform: uppercase;">SELECT</button>
      </div>
    </div>

    <!-- PREMIER CARD ($80) - White Background -->
    <div class="col-lg-4 col-md-6 col-sm-12 pricing-column">
      <div class="pricing-card premier-card">
        
        <div style="position: absolute; top: 24px; right: 0px; width: 120px; height: 38px; z-index: 2; display: flex; align-items: center; justify-content: flex-end; pointer-events: none;">
           <!-- Inline SVG Ribbon -->
          <svg width="120" height="38" viewBox="0 0 120 38" fill="none" xmlns="http://www.w3.org/2000/svg" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
             <path d="M120 0H20L0 19L20 38H120V0Z" fill="#004161" style="transition: fill 0.3s ease;"/>
          </svg>
          <span class="ribbon-text">PREMIER</span>
        </div>

        <div>
          <div class="price">$80</div>
          <div class="billed">Billed Yearly</div>
          <div class="desc">Build A Strong Foundation For Your Website With Dependable Hosting.</div>
          <div style="border-top: 1px solid #e7eaf3; margin: 0px 0px 20px;"></div>
          
           <ul style="list-style: none; padding: 0px; margin-bottom: 24px; text-align: left;">
            <li style="margin-bottom: 13px; display: flex; align-items: center; color: #757575; font-weight: 500; font-size: 16px;">
              <i class="fas fa-check-circle" style="color: #004161; margin-right: 10px;"></i><span>Unlimited Storage</span>
            </li>
             <li style="margin-bottom: 13px; display: flex; align-items: center; color: #757575; font-weight: 500; font-size: 16px;">
               <i class="fas fa-check-circle" style="color: #004161; margin-right: 10px;"></i><span>Unmetered Bandwidth</span>
            </li>
             <li style="margin-bottom: 13px; display: flex; align-items: center; color: #757575; font-weight: 500; font-size: 16px;">
               <i class="fas fa-check-circle" style="color: #004161; margin-right: 10px;"></i><span>Unlimited Email Address</span>
            </li>
             <li style="margin-bottom: 13px; display: flex; align-items: center; color: #757575; font-weight: 500; font-size: 16px;">
               <i class="fas fa-check-circle" style="color: #004161; margin-right: 10px;"></i><span>Unlimited Database</span>
            </li>
             <li style="margin-bottom: 13px; display: flex; align-items: center; color: #757575; font-weight: 500; font-size: 16px;">
               <i class="fas fa-check-circle" style="color: #004161; margin-right: 10px;"></i><span>99.9% Uptime Guarantee</span>
            </li>
             <li style="margin-bottom: 13px; display: flex; align-items: center; color: #757575; font-weight: 500; font-size: 16px;">
               <i class="fas fa-check-circle" style="color: #004161; margin-right: 10px;"></i><span>Free SSL</span>
            </li>
             <li style="margin-bottom: 13px; display: flex; align-items: center; color: #757575; font-weight: 500; font-size: 16px;">
               <i class="fas fa-check-circle" style="color: #004161; margin-right: 10px;"></i><span>Backup Weekly</span>
            </li>
             <li style="margin-bottom: 13px; display: flex; align-items: center; color: #757575; font-weight: 500; font-size: 16px;">
               <i class="fas fa-check-circle" style="color: #004161; margin-right: 10px;"></i><span>4 Website</span>
            </li>
             <li style="margin-bottom: 13px; display: flex; align-items: center; color: #757575; font-weight: 500; font-size: 16px;">
               <i class="fas fa-check-circle" style="color: #004161; margin-right: 10px;"></i><span>Free WordPress</span>
            </li>
          </ul>
        </div>
        
        <button style="width: 100%; background: #004161; color: #fff; border: none; border-radius: 50px; padding: 15px 0px; font-weight: bold; font-size: 16px; margin-top: auto; cursor: pointer; outline: none; text-transform: uppercase;">SELECT</button>
      </div>
    </div>
  </div>
    </div>
    <div class="pricing-shape"></div>
  </div>
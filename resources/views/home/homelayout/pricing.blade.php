<style>
    .pricing-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
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
    .pricing-card:hover span, 
    .pricing-card:hover li {
        color: #fff !important;
    }
    .pricing-card:hover .desc, .pricing-card:hover div[style*="color: #c5d2e8"] {
         color: #c5d2e8 !important;
    }
    .pricing-card:hover button {
        background: #fff !important;
        color: #004161 !important;
        border: none !important;
    }
</style>

<div class="container" style="padding-bottom: 80px;">
  <div class="row justify-content-center mb-3">
    <div class="col-lg-8 text-center">
      <div style="color: #99CC33; font-weight: bold; font-size: 16px; letter-spacing: 2px; margin-bottom: 8px; text-transform: uppercase;">OUR PRICING PLAN</div>
      <h1 style="font-weight: bold; font-size: 50px; margin-bottom: 18px; color: #000; letter-spacing: -1px;">CHOOSE OUR PLAN</h1>
    </div>
  </div>
  


  <div class="row g-4 align-items-stretch justify-content-center mb-0">
    
    <!-- BASIC CARD ($30) - White Background -->
    <div class="col-lg-4 col-md-6 col-sm-12" style="display: flex; align-items: stretch; max-width: 350px; min-width: 300px;">
      <div class="pricing-card" style="position: relative; background: #fff; border: 2px solid #51b7f6; border-radius: 15px; box-shadow: rgba(39, 81, 162, 0.09) 0px 10px 26px 0px; padding: 38px 32px 32px; display: flex; flex-direction: column; justify-content: space-between; align-items: stretch; z-index: 1; cursor: pointer; height: 100%; width: 100%;">
        
        <div style="position: absolute; top: 24px; right: 0px; width: 120px; height: 38px; z-index: 2; display: flex; align-items: center; justify-content: flex-end; pointer-events: none;">
          <!-- Inline SVG Ribbon -->
          <svg width="120" height="38" viewBox="0 0 120 38" fill="none" xmlns="http://www.w3.org/2000/svg" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
             <path d="M120 0H20L0 19L20 38H120V0Z" fill="#99CC33"/>
          </svg>
          <span style="position: relative; font-family: 'Plus Jakarta Sans'; font-weight: bold; font-size: 14px; color: #fff; margin-right: 19px; letter-spacing: 1px; z-index: 2; text-shadow: none; white-space: nowrap;">BASIC</span>
        </div>

        <div>
          <div style="font-weight: 500; font-size: 40px; color: #00194c; text-align: left; margin-bottom: 0px;">$30</div>
          <div style="color: #445375; font-size: 16px; margin-bottom: 18px; text-align: left;">Billed Yearly</div>
          <div class="desc" style="color: #333d49; font-weight: 400; font-size: 16px; line-height: 1.6; margin-bottom: 18px; text-align: left;">Reliable hosting for constant uptime</div>
          <div style="border-top: 1px solid #e7eaf3; margin: 0px 0px 20px;"></div>
          
          <ul style="list-style: none; padding: 0px; margin-bottom: 24px; text-align: left;">
            <li style="margin-bottom: 13px; display: flex; align-items: center; color: #757575; font-weight: 500; font-size: 16px;">
              <i class="fas fa-check-circle" style="color: #004161; margin-right: 10px;"></i><span>5 GB Storage</span>
            </li>
            <li style="margin-bottom: 13px; display: flex; align-items: center; color: #757575; font-weight: 500; font-size: 16px;">
               <i class="fas fa-check-circle" style="color: #99CC33; margin-right: 10px;"></i><span>Scalable Bandwidth</span>
            </li>
            <li style="margin-bottom: 13px; display: flex; align-items: center; color: #757575; font-weight: 500; font-size: 16px;">
               <i class="fas fa-check-circle" style="color: #99CC33; margin-right: 10px;"></i><span>5 Email Address</span>
            </li>
            <li style="margin-bottom: 13px; display: flex; align-items: center; color: #757575; font-weight: 500; font-size: 16px;">
               <i class="fas fa-check-circle" style="color: #99CC33; margin-right: 10px;"></i><span>5 Database</span>
            </li>
             <li style="margin-bottom: 13px; display: flex; align-items: center; color: #757575; font-weight: 500; font-size: 16px;">
               <i class="fas fa-check-circle" style="color: #99CC33; margin-right: 10px;"></i><span>99.9% Uptime Guarantee</span>
            </li>
             <li style="margin-bottom: 13px; display: flex; align-items: center; color: #757575; font-weight: 500; font-size: 16px;">
               <i class="fas fa-check-circle" style="color: #99CC33; margin-right: 10px;"></i><span>Free SSL</span>
            </li>
             <li style="margin-bottom: 13px; display: flex; align-items: center; color: #757575; font-weight: 500; font-size: 16px;">
               <i class="fas fa-check-circle" style="color: #99CC33; margin-right: 10px;"></i><span>Backup Weekly</span>
            </li>
             <li style="margin-bottom: 13px; display: flex; align-items: center; color: #757575; font-weight: 500; font-size: 16px;">
               <i class="fas fa-check-circle" style="color: #99CC33; margin-right: 10px;"></i><span>1 Website</span>
            </li>
             <li style="margin-bottom: 13px; display: flex; align-items: center; color: #757575; font-weight: 500; font-size: 16px;">
               <i class="fas fa-check-circle" style="color: #99CC33; margin-right: 10px;"></i><span>Free WordPress</span>
            </li>
          </ul>
        </div>
        
        <button style="width: 100%; background: #004161; color: #fff; border: none; border-radius: 50px; padding: 15px 0px; font-weight: bold; font-size: 16px; margin-top: auto; cursor: pointer; outline: none; text-transform: uppercase;">SELECT</button>
      </div>
    </div>

    <!-- GOLDEN CARD ($50) - White Background -->
    <div class="col-lg-4 col-md-6 col-sm-12" style="display: flex; align-items: stretch; max-width: 350px; min-width: 300px;">
      <div class="pricing-card" style="position: relative; background: #fff; border: 2px solid #51b7f6; border-radius: 15px; box-shadow: rgba(39, 81, 162, 0.09) 0px 10px 26px 0px; padding: 38px 32px 32px; display: flex; flex-direction: column; justify-content: space-between; align-items: stretch; z-index: 1; cursor: pointer; height: 100%; width: 100%;">
        
        <div style="position: absolute; top: 24px; right: 0px; width: 120px; height: 38px; z-index: 2; display: flex; align-items: center; justify-content: flex-end; pointer-events: none;">
          <!-- Inline SVG Ribbon -->
          <svg width="120" height="38" viewBox="0 0 120 38" fill="none" xmlns="http://www.w3.org/2000/svg" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
             <path d="M120 0H20L0 19L20 38H120V0Z" fill="#004161"/>
          </svg>
          <span style="position: relative; font-family: 'Plus Jakarta Sans'; font-weight: bold; font-size: 14px; color: #fff; margin-right: 19px; letter-spacing: 1px; z-index: 2; text-shadow: none; white-space: nowrap;">GOLDEN</span>
        </div>

        <div>
           <div style="font-weight: 500; font-size: 40px; color: #00194c; text-align: left; margin-bottom: 0px;">$50</div>
          <div style="color: #445375; font-size: 16px; margin-bottom: 18px; text-align: left;">Billed Yearly</div>
          <div class="desc" style="color: #333d49; font-weight: 400; font-size: 16px; line-height: 1.6; margin-bottom: 18px; text-align: left;">Deliver seamless performance with trusted hosting for your website.</div>
          <div style="border-top: 1px solid #e7eaf3; margin: 0px 0px 20px;"></div>
          
           <ul style="list-style: none; padding: 0px; margin-bottom: 24px; text-align: left;">
            <li style="margin-bottom: 13px; display: flex; align-items: center; color: #757575; font-weight: 500; font-size: 16px;">
              <i class="fas fa-check-circle" style="color: #004161; margin-right: 10px;"></i><span>30 GB Storage</span>
            </li>
             <li style="margin-bottom: 13px; display: flex; align-items: center; color: #757575; font-weight: 500; font-size: 16px;">
               <i class="fas fa-check-circle" style="color: #99CC33; margin-right: 10px;"></i><span>Scalable Bandwidth</span>
            </li>
             <li style="margin-bottom: 13px; display: flex; align-items: center; color: #757575; font-weight: 500; font-size: 16px;">
               <i class="fas fa-check-circle" style="color: #99CC33; margin-right: 10px;"></i><span>30 Email Address</span>
            </li>
             <li style="margin-bottom: 13px; display: flex; align-items: center; color: #757575; font-weight: 500; font-size: 16px;">
               <i class="fas fa-check-circle" style="color: #99CC33; margin-right: 10px;"></i><span>30 Database</span>
            </li>
             <li style="margin-bottom: 13px; display: flex; align-items: center; color: #757575; font-weight: 500; font-size: 16px;">
               <i class="fas fa-check-circle" style="color: #99CC33; margin-right: 10px;"></i><span>99.9% Uptime Guarantee</span>
            </li>
             <li style="margin-bottom: 13px; display: flex; align-items: center; color: #757575; font-weight: 500; font-size: 16px;">
               <i class="fas fa-check-circle" style="color: #99CC33; margin-right: 10px;"></i><span>Free SSL</span>
            </li>
             <li style="margin-bottom: 13px; display: flex; align-items: center; color: #757575; font-weight: 500; font-size: 16px;">
               <i class="fas fa-check-circle" style="color: #99CC33; margin-right: 10px;"></i><span>Backup Weekly</span>
            </li>
             <li style="margin-bottom: 13px; display: flex; align-items: center; color: #757575; font-weight: 500; font-size: 16px;">
               <i class="fas fa-check-circle" style="color: #99CC33; margin-right: 10px;"></i><span>2 Website</span>
            </li>
             <li style="margin-bottom: 13px; display: flex; align-items: center; color: #757575; font-weight: 500; font-size: 16px;">
               <i class="fas fa-check-circle" style="color: #99CC33; margin-right: 10px;"></i><span>Free WordPress</span>
            </li>
          </ul>
        </div>
        
        <button style="width: 100%; background: #004161; color: #fff; border: none; border-radius: 50px; padding: 15px 0px; font-weight: bold; font-size: 16px; margin-top: auto; cursor: pointer; outline: none; text-transform: uppercase;">SELECT</button>
      </div>
    </div>

    <!-- PREMIER CARD ($80) - White Background -->
    <div class="col-lg-4 col-md-6 col-sm-12" style="display: flex; align-items: stretch; max-width: 350px; min-width: 300px;">
      <div class="pricing-card" style="position: relative; background: #fff; border: 2px solid #51b7f6; border-radius: 15px; box-shadow: rgba(39, 81, 162, 0.09) 0px 10px 26px 0px; padding: 38px 32px 32px; display: flex; flex-direction: column; justify-content: space-between; align-items: stretch; z-index: 1; cursor: pointer; height: 100%; width: 100%;">
        
        <div style="position: absolute; top: 24px; right: 0px; width: 120px; height: 38px; z-index: 2; display: flex; align-items: center; justify-content: flex-end; pointer-events: none;">
           <!-- Inline SVG Ribbon -->
          <svg width="120" height="38" viewBox="0 0 120 38" fill="none" xmlns="http://www.w3.org/2000/svg" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;">
             <path d="M120 0H20L0 19L20 38H120V0Z" fill="#ff4d4d"/>
          </svg>
          <span style="position: relative; font-family: 'Plus Jakarta Sans'; font-weight: bold; font-size: 14px; color: #fff; margin-right: 19px; letter-spacing: 1px; z-index: 2; text-shadow: none; white-space: nowrap;">PREMIER</span>
        </div>

        <div>
          <div style="font-weight: 500; font-size: 40px; color: #00194c; text-align: left; margin-bottom: 0px;">$80</div>
          <div style="color: #445375; font-size: 16px; margin-bottom: 18px; text-align: left;">Billed Yearly</div>
          <div class="desc" style="color: #333d49; font-weight: 400; font-size: 16px; line-height: 1.6; margin-bottom: 18px; text-align: left;">Build A Strong Foundation For Your Website With Dependable Hosting.</div>
          <div style="border-top: 1px solid #e7eaf3; margin: 0px 0px 20px;"></div>
          
           <ul style="list-style: none; padding: 0px; margin-bottom: 24px; text-align: left;">
            <li style="margin-bottom: 13px; display: flex; align-items: center; color: #757575; font-weight: 500; font-size: 16px;">
              <i class="fas fa-check-circle" style="color: #004161; margin-right: 10px;"></i><span>Unlimited Storage</span>
            </li>
             <li style="margin-bottom: 13px; display: flex; align-items: center; color: #757575; font-weight: 500; font-size: 16px;">
               <i class="fas fa-check-circle" style="color: #99CC33; margin-right: 10px;"></i><span>Unmetered Bandwidth</span>
            </li>
             <li style="margin-bottom: 13px; display: flex; align-items: center; color: #757575; font-weight: 500; font-size: 16px;">
               <i class="fas fa-check-circle" style="color: #99CC33; margin-right: 10px;"></i><span>Unlimited Email Address</span>
            </li>
             <li style="margin-bottom: 13px; display: flex; align-items: center; color: #757575; font-weight: 500; font-size: 16px;">
               <i class="fas fa-check-circle" style="color: #99CC33; margin-right: 10px;"></i><span>Unlimited Database</span>
            </li>
             <li style="margin-bottom: 13px; display: flex; align-items: center; color: #757575; font-weight: 500; font-size: 16px;">
               <i class="fas fa-check-circle" style="color: #99CC33; margin-right: 10px;"></i><span>99.9% Uptime Guarantee</span>
            </li>
             <li style="margin-bottom: 13px; display: flex; align-items: center; color: #757575; font-weight: 500; font-size: 16px;">
               <i class="fas fa-check-circle" style="color: #99CC33; margin-right: 10px;"></i><span>Free SSL</span>
            </li>
             <li style="margin-bottom: 13px; display: flex; align-items: center; color: #757575; font-weight: 500; font-size: 16px;">
               <i class="fas fa-check-circle" style="color: #99CC33; margin-right: 10px;"></i><span>Backup Weekly</span>
            </li>
             <li style="margin-bottom: 13px; display: flex; align-items: center; color: #757575; font-weight: 500; font-size: 16px;">
               <i class="fas fa-check-circle" style="color: #99CC33; margin-right: 10px;"></i><span>4 Website</span>
            </li>
             <li style="margin-bottom: 13px; display: flex; align-items: center; color: #757575; font-weight: 500; font-size: 16px;">
               <i class="fas fa-check-circle" style="color: #99CC33; margin-right: 10px;"></i><span>Free WordPress</span>
            </li>
          </ul>
        </div>
        
        <button style="width: 100%; background: #004161; color: #fff; border: none; border-radius: 50px; padding: 15px 0px; font-weight: bold; font-size: 16px; margin-top: auto; cursor: pointer; outline: none; text-transform: uppercase;">SELECT</button>
      </div>
    </div>
    
  </div>
</div>

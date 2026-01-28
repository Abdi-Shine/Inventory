<style>
    @media (max-width: 767px) {
        .lonyo-section-padding2 {
            padding-top: 50px !important;
            padding-bottom: 50px !important;
        }
        .lonyo-section-title.center h2 {
            font-size: 30px !important;
        }
    }
</style>

<div class="lonyo-section-padding2 position-relative">
    <div class="container">
      <div class="col-xl-12 col-lg-12">
        <h4 class="fw-semibold text-capitalize lh-base text-center" style="font-family: 'Montserrat', sans-serif; font-size: 36px; font-weight: 700; color: #004161 !important; margin-bottom: 20px;">
            {{ optional($titles)->title1 }}
            <br>
            {{ optional($titles)->description1 }}
        </h4>
      </div>
      <div class="row g-4">
        <div class="col-xl-4 col-lg-6 col-md-6 col-12">
          <div class="lonyo-service-wrap light-bg" data-aos="fade-up" data-aos-duration="500">
            <div class="lonyo-service-title">
              <h4>Expense Tracking</h4>
              <img src="{{ asset('frontend/assets/images/v1/feature1.svg') }}" alt="">
            </div>
            <div class="lonyo-service-data">
              <p>Allows users to record and categorize daily transactions such as income, expenses, bills, and savings.</p>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-6">
          <div class="lonyo-service-wrap light-bg" data-aos="fade-up" data-aos-duration="700">
            <div class="lonyo-service-title">
              <h4>Budgeting Tools</h4>
              <img src="{{ asset('frontend/assets/images/v1/feature2.svg') }}" alt="">
            </div>
            <div class="lonyo-service-data">
              <p>Provides visual insights like graphs or pie charts to show how much is spent versus the budgeted amount.</p>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-6">
          <div class="lonyo-service-wrap light-bg" data-aos="fade-up" data-aos-duration="900">
            <div class="lonyo-service-title">
              <h4>Investment Tracking</h4>
              <img src="{{ asset('frontend/assets/images/v1/feature3.svg') }}" alt="">
            </div>
            <div class="lonyo-service-data">
              <p>For users interested in investing, finance apps often provide tools to track stocks, bonds or mutual funds.</p>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-6">
          <div class="lonyo-service-wrap light-bg" data-aos="fade-up" data-aos-duration="500">
            <div class="lonyo-service-title">
              <h4>Tax Management</h4>
              <img src="{{ asset('frontend/assets/images/v1/feature4.svg') }}" alt="">
            </div>
            <div class="lonyo-service-data">
              <p>This tool integrate with tax software to help users prepare for tax season, deduct expenses, and file returns.</p>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-6">
          <div class="lonyo-service-wrap light-bg" data-aos="fade-up" data-aos-duration="700">
            <div class="lonyo-service-title">
              <h4>Bill Management</h4>
              <img src="{{ asset('frontend/assets/images/v1/feature5.svg') }}" alt="">
            </div>
            <div class="lonyo-service-data">
              <p>Tracks upcoming bills, sets reminders for due dates, and enables easy payments via integration with online banking</p>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-6">
          <div class="lonyo-service-wrap light-bg" data-aos="fade-up" data-aos-duration="900">
            <div class="lonyo-service-title">
              <h4>Security Features</h4>
              <img src="{{ asset('frontend/assets/images/v1/feature6.svg') }}" alt="">
            </div>
            <div class="lonyo-service-data">
              <p>Provides bank-level encryption to ensure user data and financial information remain safe, MFA and biometric logins.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="lonyo-feature-shape"></div>
  </div>
  <!-- end content -->

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
    
    /* Hover Effects for Service Cards */
    .lonyo-service-wrap {
        transition: all 0.4s ease-in-out;
        border: 1px solid transparent; /* seamless transition */
    }

    .lonyo-service-wrap:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(0,0,0,0.2) !important;
        background-color: #004161 !important;
        border-color: #004161 !important;
        color: #fff !important;
    }

    .lonyo-service-wrap:hover h4,
    .lonyo-service-wrap:hover p {
        color: #fff !important;
    }

    .lonyo-service-wrap:hover i {
        color: #fff !important; 
        transition: all 0.3s ease;
        transform: scale(1.1);
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
        @foreach($features as $item)
        <div class="col-xl-4 col-lg-6 col-md-6 col-12">
          <div class="lonyo-service-wrap light-bg" data-aos="fade-up" data-aos-duration="500">
            <div class="lonyo-service-title">
              <h4>{{ $item->title }}</h4>
               <i class="{{ $item->icon }}" style="
                   color: #004161; 
                   font-size: 50px; 
                   margin-bottom: 20px;">
               </i>
            </div>
            <div class="lonyo-service-data">
              <p>{{ $item->description }}</p>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
    <div class="lonyo-feature-shape"></div>
  </div>
  <!-- end content -->

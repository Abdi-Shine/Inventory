@extends('home.home_master')
@section('home')

  <div class="breadcrumb-wrapper">
    <style>
      /* Reduce breadcrumb spacing and set white background */
      .breadcrumb-wrapper, 
      .breadcrumb-content,
      .breadcrumb-menu-wrapper,
      .breadcrumb-menu-wrap,
      .breadcrumb-wrapper * {
          background: #ffffff !important;
          background-image: none !important;
          box-shadow: none !important;
          border: none !important;
      }
      .breadcrumb-wrapper::before, .breadcrumb-wrapper::after,
      .breadcrumb-content::before, .breadcrumb-content::after,
      .container::before, .container::after,
      .breadcrumb-wrapper *:before,
      .breadcrumb-wrapper *:after {
          display: none !important;
          content: none !important;
          background: none !important;
          opacity: 0 !important;
          visibility: hidden !important;
          width: 0 !important;
          height: 0 !important;
      }
      .digital-marketing-content p {
          margin-bottom: 25px;
          line-height: 1.9;
          font-size: 16px;
          color: #444;
          font-weight: 400;
          text-align: left; /* Adjusted to left alignment */
      }
      .breadcrumb-menu-wrapper {
          display: none !important;
      }
      .breadcrumb-title {
          color: #222 !important;
          font-size: 42px !important;
          font-weight: 700 !important;
          margin-bottom: 30px !important;
          text-align: center;
      }
      .description-text {
        font-family: 'Montserrat', sans-serif;
      }
    </style>
    <div class="container">

      <div class="breadcrumb-content">
        <h1 class="breadcrumb-title pb-0">{{ $digital->title }}</h1>
        <div class="breadcrumb-menu-wrapper">
          <div class="breadcrumb-menu-wrap">
            <div class="breadcrumb-menu">
              <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><img src="{{ asset('frontend/assets') }}/images/blog/right-arrow.svg" alt="right-arrow"></li>
                <li aria-current="page">{{ $digital->title }}</li>
              </ul>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  <!-- End breadcrumb -->
   
  <div class="lonyo-section-padding3">
    <div class="container">
      <div class="row">
        
        <div class="col-lg-6">
            <div class="digital-marketing-thumb mb-4" data-aos="fade-up" data-aos-duration="700">
                <img src="{{ (!empty($digital->image)) ? asset($digital->image) : asset('upload/no_image.jpg') }}" alt="" style="width: 100%; height: auto; border-radius: 8px;">
            </div>
        </div>

        <div class="col-lg-6 d-flex align-items-center">
          <div class="lonyo-default-content digital-marketing-content" data-aos="fade-up" data-aos-duration="900">

             <div class="description-text">
                {!! nl2br(e($digital->description)) !!}
             </div>



          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- end -->

@endsection

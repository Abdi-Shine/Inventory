@extends('home.home_master')
@section('home')


  <!-- End mobile menu -->

  <div class="breadcrumb-wrapper">
    <style>
      @media (max-width: 991px) {
        .lonyo-about-us-wrap {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
        .lonyo-about-us-thumb {
            width: 100%;
            margin-right: 0 !important;
        }
        .lonyo-about-us-thumb img {
            width: 100%;
            height: auto;
        }
        .lonyo-about-us-card, .lonyo-about-us-card2 {
            display: none; /* Hide decorative floating cards on mobile to prevent layout breakage, or adjust position */
        }
        .lonyo-about-us-thumb2 {
            padding-right: 0 !important;
            margin-bottom: 30px;
        }
        .lonyo-default-content h2 {
            font-size: 28px;
            line-height: 1.3;
        }
        .pl-32 {
            padding-left: 0 !important;
        }
        .pr-50 {
            padding-right: 0 !important;
        }
        .lonyo-about-us-feature-wrap {
            padding: 20px;
            margin-bottom: 15px;
        }
      }
      /* Fix for desktop/all screens to constrain icon size */
      .lonyo-about-us-feature-wrap {
          display: flex;
          align-items: flex-start;
          gap: 20px;
          background-color: #ffffff !important;
      }
      .lonyo-about-us-feature-icon {
          flex: 0 0 80px; /* Fixed width */
          width: 80px;
      }
      .lonyo-about-us-feature-icon img {
          width: 100%;
          height: auto;
      }
      /* Reduce breadcrumb spacing and set white background */
      .breadcrumb-wrapper {
          padding-top: 50px !important;
          padding-bottom: 50px !important;
          background-color: #ffffff !important;
      }
    </style>
    <div class="container">

      <div class="breadcrumb-content">
        <h1 class="breadcrumb-title pb-0">About Us</h1>
        <div class="breadcrumb-menu-wrapper">
          <div class="breadcrumb-menu-wrap">
            <div class="breadcrumb-menu">
              <ul>
                <li><a href="index.html">Home</a></li>
                <li><img src="{{ asset('frontend/assets') }}/images/blog/right-arrow.svg" alt="right-arrow"></li>
                <li aria-current="page">About Us</li>
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
        <div class="col-lg-5">
          <div class="lonyo-about-us-thumb2 pr-51" data-aos="fade-up" data-aos-duration="700">
            <img src="{{ (!empty($about->about_image)) ? asset($about->about_image) : asset('upload/no_image.jpg') }}" alt="" style="width: 100%; height: auto;">
          </div>
        </div>
        <div class="col-lg-7 d-flex align-items-center">
          <div class="lonyo-default-content pl-32" data-aos="fade-up" data-aos-duration="900">
            <h2>{{ $about->title }}</h2>
            <p>{{ $about->short_description }}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end -->

  <section class="lonyo-section-padding3 position-relative">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <div class="lonyo-default-content pr-50 feature-wrap">
            <h2>{{ $about->long_title }}</h2>
            <p class="max-w616">{{ $about->long_description }}</p>
          </div>
        </div>
        <div class="col-lg-5">
        	@php
                $classes = ['one', 'two', 'three', 'four'];
        	@endphp
        	@foreach($multiImage as $key => $item)
            @php
                $currentClass = $classes[$key % 4] ?? 'one';
                $duration = 500 + ($key * 200);
            @endphp
          <div class="lonyo-about-us-feature-wrap {{ $currentClass }}" data-aos="fade-up" data-aos-duration="{{ $duration }}">
            <div class="lonyo-about-us-feature-icon">
              <img src="{{ asset($item->image) }}" alt="">
            </div>
            <div class="lonyo-about-us-feature-content">
              <h4>{{ $item->title }}</h4>
              <p>{{ $item->description }}</p>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
    <div class="lonyo-feature-shape shape2"></div>
  </section>
  <!-- end feature -->
@endsection
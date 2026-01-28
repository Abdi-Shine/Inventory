@extends('home.home_master')
@section('home')
  <!-- End mobile menu -->

  <div class="breadcrumb-wrapper light-bg" style="padding: 40px 0;">
    <div class="container">

      <div class="breadcrumb-content">
        <h1 class="breadcrumb-title pb-0" style="font-size: 35px; margin-bottom: 5px;">{{ $product->title }}</h1>
        <div class="breadcrumb-menu-wrapper">
          <div class="breadcrumb-menu-wrap">
            <div class="breadcrumb-menu">
              <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li><img src="{{ asset('frontend/assets/images/blog/right-arrow.svg') }}" alt="right-arrow"></li>
                <li aria-current="page">{{ $product->title }}</li>
              </ul>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  <!-- End breadcrumb -->

  <section class="lonyo-section-padding7" style="padding-top: 0;">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="lonyo-content-thumb2" data-aos="fade-right" data-aos-duration="700">
            <img src="{{ asset($product->image) }}" alt="{{ $product->title }}" style="width: 526px; height: 550px; object-fit: cover; border-radius: 10px;">
          </div>
        </div>
        <div class="col-lg-7 d-flex align-items-center">
          <div class="lonyo-default-content pl-50" data-aos="fade-up" data-aos-duration="700">
            <h2 style="margin-bottom: 20px; font-size: 32px; font-weight: 700; color: #004161;">{{ $product->title }}</h2>
            <div class="data">
               {!! $product->long_description !!}
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end content -->

@endsection

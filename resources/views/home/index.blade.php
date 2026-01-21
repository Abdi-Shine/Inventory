@extends('home.home_master')

@section('home')
  
  <!-- start slider -->
  @include('home.homelayout.slider')
  <!-- end slider -->

 <!-- features -->
  @include('home.homelayout.features')
  <!-- end features -->
  
  <!-- end content -->
  @include('home.homelayout.clarifies')
  <!-- end content -->

  <!-- get all -->
  @include('home.homelayout.get_all')
  <!-- end get all -->

  <div class="lonyo-content-shape3">
    <img src="{{asset('frontend/assets/images/shape/shape2.svg')}}" alt="">
  </div>
  <!-- end content -->

  <!-- usability -->
  @include('home.homelayout.usability')
  <!-- end usability -->

  <div class="lonyo-content-shape1">
    <img src="{{asset('frontend/assets/images/shape/shape3.svg')}}" alt="">
  </div>
  <!-- end video -->
  <!-- testimonial -->
  @include('home.homelayout.review')
  <!-- end testimonial -->

  <!-- faq -->
  @include('home.homelayout.answers')
  <!-- end faq -->
  <div class="lonyo-content-shape3">
    <img src="{{asset('frontend/assets/images/shape/shape2.svg')}}" alt="">
  </div>
  <!-- app -->
  @include('home.homelayout.apps')
  <!-- end app -->

@endsection
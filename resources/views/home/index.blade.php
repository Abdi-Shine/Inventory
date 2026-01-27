@extends('home.home_master')

@section('home')
  
  <!-- start slider -->
  @include('home.homelayout.slider')
  <!-- end slider -->

 <!-- features -->
  @include('home.homelayout.services')
  <!-- end features -->
  
  <!-- domain search -->
  @include('home.homelayout.domain_search')
  <!-- end domain search -->
  
  <!-- pricing plan -->
  @include('home.homelayout.pricing')
  <!-- end pricing plan -->

  <!-- statistics -->
  @include('home.homelayout.stats')
  <!-- end statistics -->

  <!-- testimonials -->
  @include('home.homelayout.testimonials')
  <!-- end testimonials -->

@endsection

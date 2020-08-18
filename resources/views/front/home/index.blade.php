
@extends('front.layouts.app')

@section('content')

   @include('front.home.slider')

      {{--@include('front.home.map')--}}

   @include('front.home.section-listing')

      {{-- @include('front.home.section-villes')--}}
      {{-- @include('front.home.section-cover')--}}
      {{-- @include('front.home.section-category')--}}

   @include('front.home.section-vedio')
   
      {{--@include('front.home.section-how-it-work')--}}  
   @include('front.home.section-application')

   @include('front.home.section-category')

  {{-- @include('front.home.section-testimonials')--}}

   @include('front.home.section-clients')

@endsection

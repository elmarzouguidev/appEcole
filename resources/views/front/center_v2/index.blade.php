
@extends('front.layouts.app')

@section('content')

    @include('front.center_v2.topCover')

    @include('front.center_v2.content')

@endsection

@section('scripts')
  <script  src="{{asset('js/map-single.js')}}"></script>
@endsection

@section('mapFooter')
   @include('front.center_v2.model')
@endsection

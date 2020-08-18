
@extends('front.layouts.app')


@section('content')

    @include('front.ecole_v2.topCover')

    @include('front.ecole_v2.content')

@endsection

@section('scripts')
  <script  src="{{asset('js/map-single.js')}}"></script>
@endsection

@section('mapFooter')
   @include('front.ecole_v2.model')
@endsection

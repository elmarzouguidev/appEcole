
@extends('front.layouts.app')


@section('content')

    @include('front.center.map')

    @include('front.center.content')

@endsection



@section('scripts')

   {{--<script  src="https://unpkg.com/axios/dist/axios.min.js"></script>--}}

   <script>
     let apiCenterURL = '{{route('apicenters')}}';
   </script>
    <script  src="{{asset('js/map-listing-center.js')}}"></script>

@endsection

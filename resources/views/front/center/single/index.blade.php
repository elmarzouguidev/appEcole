@extends('front.layouts.app')


@section('content')

    @include('front.center.single.cover')

    @include('front.center.single.navDetails')

    @include('front.center.single.content')

@endsection

@section('styles')

    <link type="text/css" rel="stylesheet" href="{{asset('css/dashboard-style.css')}}">

@endsection

@section('scripts')
    {{--<script  src="https://unpkg.com/axios/dist/axios.min.js"></script>--}}

    <script src="{{asset('js/map-single.js')}}"></script>

     <script>

         let myUrl = '';
         
         let ecoleId = '';
         //console.log(myUrl);
     </script>
@endsection

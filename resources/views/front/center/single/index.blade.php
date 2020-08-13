@extends('front.layouts.app')


@section('content')

    @include('front.ecole.single.cover')

    @include('front.ecole.single.navDetails')

    @include('front.ecole.single.content')

@endsection

@section('styles')
    <link type="text/css" rel="stylesheet" href="{{asset('css/dashboard-style.css')}}">
@endsection

@section('scripts')
    {{--<script  src="https://unpkg.com/axios/dist/axios.min.js"></script>--}}

    <script src="{{asset('js/map-single.js')}}"></script>
     <script>
         let myUrl = '{{route('ecoles.actions.review',$ecole->slug)}}';
         let ecoleId = '{{$ecole->id}}';
         //console.log(myUrl);
     </script>
@endsection

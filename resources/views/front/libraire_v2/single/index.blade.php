@extends('front.layouts.app')


@section('content')

    @include('front.libraire_v2.single.cover')

    @include('front.libraire_v2.single.navDetails')

    @include('front.libraire_v2.single.content')

@endsection

@section('styles')
    <link type="text/css" rel="stylesheet" href="{{asset('css/dashboard-style.css')}}">
@endsection

@section('scripts')
    {{--<script  src="https://unpkg.com/axios/dist/axios.min.js"></script>--}}

    <script src="{{asset('js/map-single.js')}}"></script>
     <script>
         let myUrl = '{{route('librairies.actions.review',$ecole->slug)}}';
         let libId = '{{$ecole->id}}';
         //console.log(myUrl);
     </script>
@endsection

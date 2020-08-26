@extends('front.layouts.app')


@section('content')

    @include('front.soutien_v2.single.cover')

    @include('front.soutien_v2.single.navDetails')

    @include('front.soutien_v2.single.content')

@endsection

@section('styles')
    <link type="text/css" rel="stylesheet" href="{{asset('css/dashboard-style.css')}}">
@endsection

@section('scripts')
    {{--<script  src="https://unpkg.com/axios/dist/axios.min.js"></script>--}}

    <script src="{{asset('js/map-single.js')}}"></script>
     <script>
         let myUrl = '{{route('cours.actions.review',$ecole->slug)}}';
         let soutienId = '{{$ecole->id}}';
         //console.log(myUrl);
     </script>
@endsection


@extends('front.layouts.app')


@section('content')

    @include('front.ecole.map')

    @include('front.ecole.content')

@endsection

@section('scripts')
   {{--<script  src="https://unpkg.com/axios/dist/axios.min.js"></script>--}}
    <script  src="{{asset('js/map-listing.js')}}"></script>

    <script>
        function getData(){

        }
    </script>
@endsection

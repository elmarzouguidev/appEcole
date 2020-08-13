<script src="{{asset('js/jquery.min.js')}}"></script>
{{--
<script src="{{asset('js/turbolinks.js')}}" data-turbolinks-eval="false" data-turbolinks-suppress-warning></script>
--}}
<script src="{{asset('js/app.js')}}"  ></script>

<script src="{{asset('js/plugins.js')}}" ></script>
<script src="{{asset('js/scripts.js')}}" ></script>
<script src="https://maps.googleapis.com/maps/api/js?key={{env('GOOGLE_MAPS_KEY')}}&libraries=places&callback=initAutocomplete"></script>
<script src="{{asset('js/map-plugins.js')}}"></script>

@yield('scripts')

{{--@livewireScripts--}}


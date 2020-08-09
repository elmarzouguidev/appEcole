<!DOCTYPE HTML>
<html lang="en">
<head>
    <!--=============== HayMacProduction  ===============-->
 @include('front.layouts.head')
</head>
<body>

<div class="loader-wrap">
    <div class="loader-inner">
        <div class="loader-inner-cirle"></div>
    </div>
</div>

<div id="main">

    @include('front.layouts.parts.Header')

    <!-- wrapper-->
    <div id="wrapper">

        <div class="content">

         @yield('content')

        </div>

    </div>

    @include('front.layouts.parts.footer')

    <a class="to-top"><i class="fas fa-caret-up"></i></a>
</div>

@include('front.layouts.script')

</body>
</html>

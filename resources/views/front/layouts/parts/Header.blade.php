<!-- header -->
<header class="main-header">
    <!-- logo-->
    <a href="{{route('home')}}" class="logo-holder"><img src="{{asset('images/logo.png')}}" alt="mes ecoles"></a>
    <!-- logo end-->
    <!-- header-search_btn-->
    <div class="header-search_btn show-search-button"><i class="fal fa-search"></i><span>Search</span></div>
    <!-- header-search_btn end-->
    <!-- header opt -->
    <a href="" class="add-list color-bg">Add Listing <span><i class="fal fa-layer-plus"></i></span></a>
    <div class="cart-btn   show-header-modal" data-microtip-position="bottom" role="tooltip" aria-label="Your Wishlist"><i class="fal fa-heart"></i><span class="cart-counter green-bg"></span> </div>
    <div class="show-reg-form modal-open avatar-img" data-srcav="{{asset('images/avatar/3.jpg')}}"><i class="fal fa-user"></i>Sign In</div>
    <!-- header opt end-->
    <!-- lang-wrap-->
    <div class="lang-wrap">
        <div class="show-lang"><span><i class="fal fa-globe-europe"></i><strong>En</strong></span><i class="fa fa-caret-down arrlan"></i></div>
        <ul class="lang-tooltip lang-action no-list-style">
            <li><a href="#" class="current-lan" data-lantext="En">English</a></li>
            <li><a href="#" data-lantext="Fr">Français</a></li>
            <li><a href="#" data-lantext="Es">Español</a></li>
            <li><a href="#" data-lantext="De">Deutsch</a></li>
        </ul>
    </div>
    <!-- lang-wrap end-->
    <!-- nav-button-wrap-->
    <div class="nav-button-wrap color-bg">
        <div class="nav-button">
            <span></span><span></span><span></span>
        </div>
    </div>
    <!-- nav-button-wrap end-->
    <!--  navigation -->
    <div class="nav-holder main-menu">
        <nav>
            <ul class="no-list-style">

                <li><a href="{{route('home')}}">Accueil</a></li>
                <li><a href="{{route('ecoles')}}">Ecoles</a></li>
                <li><a href="{{route('centres')}}">Centre de langues </a></li>
                <li><a href="{{route('home')}}">Cours de soutiens</a></li>
                <li><a href="{{route('home')}}">Librairie</a></li>

            </ul>
        </nav>
    </div>

   @include('front.layouts.parts.search')

   @include('front.layouts.parts.notification')

</header>


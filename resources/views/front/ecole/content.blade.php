<div class="col-list-wrap novis_to-top">
    <!-- HayMacProduction-->

    <div class="list-main-wrap-header fl-wrap fixed-listing-header">
        <div class="container">
            <!-- HayMacProduction-->
            <div class="list-main-wrap-title">
                <h2>Espaces des ecoles </span></h2>
            </div>
            <!-- HayMacProduction-->
            <div class="list-main-wrap-opt">
                <!-- HayMacProduction-->
            {{--
            <div class="price-opt">
                <span class="price-opt-title">Sort   by:</span>
                <div class="listsearch-input-item">
                    <select data-placeholder="Popularity" class="chosen-select no-search-select" >
                        <option>Popularity</option>
                        <option>Average rating</option>
                        <option>Price: low to high</option>
                        <option>Price: high to low</option>
                    </select>
                </div>
            </div>
            --}}
            <!-- HayMacProduction-->
                <!-- HayMacProduction-->
                <div class="grid-opt">
                    <ul class="no-list-style">
                        <li class="grid-opt_act"><span class="two-col-grid act-grid-opt tolt" data-microtip-position="bottom" data-tooltip="Grid View"><i class="fal fa-th"></i></span></li>
                        <li class="grid-opt_act"><span class="one-col-grid  tolt" data-microtip-position="bottom" data-tooltip="List View"><i class="fal fa-list"></i></span></li>
                    </ul>
                </div>
                <!-- HayMacProduction-->
            </div>
            <!-- HayMacProduction-->
        </div>
        <a class="custom-scroll-link back-to-filters clbtg" href="#lisfw"><i class="fal fa-search"></i></a>
    </div>
    <!-- HayMacProduction-->
    <div class="clearfix"></div>
    <div class="container">
        <div class="mob-nav-content-btn mncb_half color2-bg show-list-wrap-search fl-wrap"><i class="fal fa-filter"></i>  Filters</div>
        <div class="mob-nav-content-btn mncb_half color2-bg schm  fl-wrap"><i class="fal fa-map-marker-alt"></i>  View on map</div>
    </div>
    <div class="clearfix"></div>
    <!-- HayMacProduction-->
    <div class="listsearch-input-wrap lws_mobile fl-wrap tabs-act" id="lisfw">
        <div class="listsearch-input-wrap_contrl fl-wrap">
            <div class="container">
                <ul class="tabs-menu fl-wrap no-list-style">
                    <li class="current"><a href="#filters-search"> <i class="fal fa-sliders-h"></i> Les filters </a></li>
                    {{-- <li><a href="#category-search"> <i class="fal fa-image"></i>Categories </a></li>--}}
                </ul>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="container">
            <!--tabs -->
            <div class="tabs-container fl-wrap">
                <!--tab -->
                <div class="tab">

                    @include('front.ecole.filters')

                </div>
                <!--tab end-->
                <!--tab -->
                <div class="tab">
                    <div id="category-search" class="tab-content">
                        <!-- category-carousel-wrap -->
                        <div class="category-carousel-wrap fl-wrap">
                            <div class="category-carousel fl-wrap full-height">
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">

                                        <div class="swiper-slide">
                                            <a class="category-carousel-item fl-wrap full-height checket-cat" href="#">
                                                <img src="images/all/1.jpg" alt="">
                                                <div class="category-carousel-item-icon red-bg"><i class="fal fa-cheeseburger"></i></div>
                                                <div class="category-carousel-item-container">
                                                    <div class="category-carousel-item-title">Restaurants / Cafe</div>
                                                    <div class="category-carousel-item-counter">6 listings</div>
                                                </div>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- category-carousel-wrap end-->
                        </div>
                        <div class="catcar-scrollbar fl-wrap">
                            <div class="hs_init"></div>
                            <div class="cc-contorl">
                                <div class="cc-contrl-item cc-prev"><i class="fal fa-angle-left"></i></div>
                                <div class="cc-contrl-item cc-next"><i class="fal fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--tab end-->
            </div>
            <!--tabs end-->
        </div>
    </div>

    <div class="listing-item-container init-grid-items fl-wrap">
        @include('front.ecole.ecoles')
    </div>

</div>

<div class="limit-box fl-wrap"></div>

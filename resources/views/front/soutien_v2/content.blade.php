<section class="gray-bg small-padding no-top-padding-sec" id="sec1">
                        <div class="container">
                            <div class="breadcrumbs inline-breadcrumbs fl-wrap block-breadcrumbs">
                                <a href="{{route('home')}}">Accueil</a>
                                <a href="{{route('centers')}}">Centre de langues </a>
                                <a href="#">casablanca</a>
                               {{--<span>Listing Single</span> --}}
                            </div>
                            <div class="mob-nav-content-btn  color2-bg show-list-wrap-search ntm fl-wrap">
                                <i class="fal fa-filter"></i> Les filters 
                            </div>
                            <div class="fl-wrap">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class=" fl-wrap lws_mobile   tabs-act block_box">
                                            <div class="filter-sidebar-header fl-wrap" id="filters-column">
                                                <ul class="tabs-menu fl-wrap no-list-style">
                                                    <li class="current"><a href="#filters-search"> <i class="fal fa-sliders-h"></i> Filters </a></li>
                                                    
                                         {{--<li><a href="#category-search"> <i class="fal fa-image"></i>Categories </a></li>--}}
                                                </ul>
                                            </div>
                                            <div class="scrl-content filter-sidebar    fs-viscon">
                                                <!--tabs -->                       
                                                <div class="tabs-container fl-wrap">
                                                    <!--tab -->
                                                    <div class="tab">
                                                        @include('front.soutien_v2.filters')
                                                    </div>
                                               
                                                </div>
                                                <!--tabs end-->                         
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <!-- list-main-wrap-header-->
                                        <div class="list-main-wrap-header fl-wrap block_box no-vis-shadow">
                                            <!-- list-main-wrap-title-->
                                            <div class="list-main-wrap-title">
                                                <h2>Centre de langues</span></h2>
                                            </div>
                                          
                                            <div class="list-main-wrap-opt">
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
                                                <div class="grid-opt">
                                                    <ul class="no-list-style">
                                                        <li class="grid-opt_act"><span class="two-col-grid act-grid-opt tolt" data-microtip-position="bottom" data-tooltip="Grid View"><i class="fal fa-th"></i></span></li>
                                                        <li class="grid-opt_act"><span class="one-col-grid tolt" data-microtip-position="bottom" data-tooltip="List View"><i class="fal fa-list"></i></span></li>
                                                    </ul>
                                                </div>
                                           
                                            </div>
                                                           
                                        </div>
                                     
                                        <div class="listing-item-container init-grid-items fl-wrap nocolumn-lic">
                                           
                                            @include('front.soutien_v2.soutien')
                                    
                                        </div>
                                      
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <div class="limit-box fl-wrap"></div>
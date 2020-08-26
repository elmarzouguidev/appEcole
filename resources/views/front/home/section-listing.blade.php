<!--section  -->
<section class="slw-sec" id="sec1">
    <div class="section-title">
        <h2>Top five ecoles </h2>
        </h2>
        <div class="section-subtitle">Top five ecoles</div>
        <span class="section-separator"></span>
        <p> Le cabinet « Développement ingénierie organisation ressources humaines » (DIORH) et Campus Mag, ont mené une enquête auprès de 30 directeurs de ressources humaines, et ce, pour classer les meilleurs diplômes marocains.</p>
    </div>
    <div class="listing-slider-wrap fl-wrap">
        <div class="listing-slider fl-wrap">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    @foreach($ecoles as $ecole)
                     <div class="swiper-slide">
                        <div class="listing-slider-item fl-wrap">
                            <!-- listing-item  -->
                            <div class="listing-item listing_carditem">
                                <article class="geodir-category-listing fl-wrap">
                                    <div class="geodir-category-img">
                                        <div class="geodir-js-favorite_btn"><i class="fal fa-heart"></i><span>Save</span></div>
                                        <a href="{{$ecole->getUrl()}}" class="geodir-category-img-wrap fl-wrap">
                                            <img src="{{Voyager::image($ecole->image)}}" alt="{{$ecole->name}}">
                                        </a>
                                        <div class="geodir_status_date gsd_open"><i class="fal fa-lock-open"></i>Open Now</div>
                                        <div class="geodir-category-opt">
                                            <div class="geodir-category-opt_title">
                                                <h4><a href="{{$ecole->getUrl()}}">{{$ecole->name}}</a></h4>
                                                <div class="geodir-category-location">
                                                    <a href="#">
                                                        <i class="fas fa-map-marker-alt"></i> {{$ecole->addresse}}
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="listing-rating-count-wrap">
                                                <div class="review-score">4.1</div>
                                                <div class="listing-rating card-popup-rainingvis" data-starrating2="4"></div>
                                                <br>
                                                <div class="reviews-count">{{$ecole->reviews()->count()}} avis</div>
                                            </div>
                                            <div class="listing_carditem_footer fl-wrap">
                                                <a class="listing-item-category-wrap" href="#">
                                                    <div class="listing-item-category yellow-bg"><i class="fal fa-city"></i></div>
                                                    <span>{{$ecole->ville->name}}</span>
                                                </a>
                                                <div class="price-level geodir-category_price">
                                                    <span class="price-level-item" data-pricerating="2"></span>
                                                    <span class="price-name-tooltip">Pricey</span>
                                                </div>
                                                <div class="post-author">
                                                    <a href="{{$ecole->slug}}">
                                                        <img src="{{Voyager::image($ecole->logo)}}" alt="">
                                                        <span>{{$ecole->area}}</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <!-- listing-item end -->
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="listing-carousel-button listing-carousel-button-next2"><i class="fas fa-caret-right"></i></div>
            <div class="listing-carousel-button listing-carousel-button-prev2"><i class="fas fa-caret-left"></i></div>
        </div>
        <div class="tc-pagination_wrap">
            <div class="tc-pagination2"></div>
        </div>
    </div>
</section>

<div class="sec-circle fl-wrap"></div>

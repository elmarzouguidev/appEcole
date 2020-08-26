<section>
    <div class="container big-container">
         
        <div class="section-title">
            <h2><span>Librairies</span></h2>
         
            <span class="section-separator"></span>
            <p>Librairies</p>
        </div>
        
        {{--
            <div class="listing-filters gallery-filters fl-wrap">
                <a href="#" class="gallery-filter  gallery-filter-active" data-filter="*">All Categories</a>
                <a href="#" class="gallery-filter" data-filter=".restaurant">Restaurants </a>
                <a href="#" class="gallery-filter" data-filter=".hotels">Hotels</a>
                <a href="#" class="gallery-filter" data-filter=".events">Events</a>
                <a href="#" class="gallery-filter" data-filter=".fitness">Fitness</a>
            </div>
        --}}
        <div class="grid-item-holder gallery-items fl-wrap">
            
            @foreach($librerais as $lib)
          
                <div class="gallery-item restaurant events">
                    <div class="listing-item">
                        <article class="geodir-category-listing fl-wrap">
                            <div class="geodir-category-img">
                                <div class="geodir-js-favorite_btn"><i class="fal fa-heart"></i><span>Save</span></div>
                                <a href="{{route('librairies.single',$lib->slug)}}" class="geodir-category-img-wrap fl-wrap">
                                    <img src="{{Voyager::image($lib->image)}}" alt="">
                                </a>
                                <div class="listing-avatar"><a href="author-single.html"><img src="{{Voyager::image($lib->logo)}}" alt=""></a>
                                    <span class="avatar-tooltip">Added By  <strong>Alisa Noory</strong></span>
                                </div>
                                {{--<div class="geodir_status_date gsd_open">
                                    <i class="fal fa-lock-open"></i>Open Now
                                </div>--}}
                                <div class="geodir-category-opt">
                                    <div class="listing-rating-count-wrap">
                                        <div class="review-score">4.8</div>
                                        <div class="listing-rating card-popup-rainingvis" data-starrating2="5"></div>
                                        <br>
                                        <div class="reviews-count">12 ravis</div>
                                    </div>
                                </div>
                            </div>
                            <div class="geodir-category-content fl-wrap">
                                <div class="geodir-category-content-title fl-wrap">
                                    <div class="geodir-category-content-title-item">
                                        <h3 class="title-sin_map"><a href="{{$lib->slug}}">{{$lib->name}}</a><span class="verified-badge"><i class="fal fa-check"></i></span></h3>
                                        <div class="geodir-category-location fl-wrap"><a href="#5" class="map-item"><i class="fas fa-map-marker-alt"></i> 27th Brooklyn New York, USA</a></div>
                                    </div>
                                </div>
                                <div class="geodir-category-text fl-wrap">
                                     {{--
                                      <p class="small-text">
                                        Sed interdum metus at nisi tempor laoreet.
                                         Integer gravida orci a justo sodales
                                    .</p>
                                    --}} 
                                    {{--
                                        <div class="facilities-list fl-wrap">
                                            <div class="facilities-list-title">Facilities : </div>
                                            <ul class="no-list-style">
                                                <li class="tolt"  data-microtip-position="top" data-tooltip="Free WiFi"><i class="fal fa-wifi"></i></li>
                                                <li class="tolt"  data-microtip-position="top" data-tooltip="Parking"><i class="fal fa-parking"></i></li>
                                                <li class="tolt"  data-microtip-position="top" data-tooltip="Non-smoking Rooms"><i class="fal fa-smoking-ban"></i></li>
                                                <li class="tolt"  data-microtip-position="top" data-tooltip="Pets Friendly"><i class="fal fa-dog-leashed"></i></li>
                                            </ul>
                                        </div>
                                    --}}
                                </div>
                                <div class="geodir-category-footer fl-wrap">
                                    <a class="listing-item-category-wrap">
                                        <div class="listing-item-category red-bg"><i class="fal fa-cheeseburger"></i></div>
                                        <span>Restaurants</span>
                                    </a>
                                    <div class="geodir-opt-list">
                                        <ul class="no-list-style">
                                            <li><a href="#" class="show_gcc"><i class="fal fa-envelope"></i><span class="geodir-opt-tooltip">Contact Info</span></a></li>
                                            <li><a href="#1" class="map-item"><i class="fal fa-map-marker-alt"></i><span class="geodir-opt-tooltip">On the map <strong>1</strong></span> </a></li>
                                            <li>
                                                <div class="dynamic-gal gdop-list-link" data-dynamicPath="[{'src': 'images/all/1.jpg'},{'src': 'images/all/1.jpg'}, {'src': 'images/all/1.jpg'}]"><i class="fal fa-search-plus"></i><span class="geodir-opt-tooltip">Gallery</span></div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="price-level geodir-category_price">
                                        <span class="price-level-item" data-pricerating="3"></span>
                                        <span class="price-name-tooltip">Pricey</span>
                                    </div>
                                    <div class="geodir-category_contacts">
                                        <div class="close_gcc"><i class="fal fa-times-circle"></i></div>
                                        <ul class="no-list-style">
                                            <li><span><i class="fal fa-phone"></i> Call : </span><a href="#">+38099231212</a></li>
                                            <li><span><i class="fal fa-envelope"></i> Write : </span><a href="#">yourmail@domain.com</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            @endforeach
        </div>
        <a href="listing.html" class="btn  dec_btn  color2-bg">Check Out All Listings<i class="fal fa-arrow-alt-right"></i></a>
    </div>
</section>

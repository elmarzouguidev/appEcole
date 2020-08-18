<div class="container">
    <!-- listing-ECOLES  -->

    @foreach($ecoles as $ecole)

        <div class="listing-item">
            <article class="geodir-category-listing fl-wrap">
                <div class="geodir-category-img">
                    <div class="geodir-js-favorite_btn"><i class="fal fa-heart"></i><span>Save</span></div>
                    <a href="{{$ecole->slug}}" class="geodir-category-img-wrap fl-wrap">
                        <img src="{{Voyager::image($ecole->image)}}" alt="{{$ecole->name}}">
                    </a>
                    <div class="listing-avatar">
                        <a href="{{$ecole->slug}}">
                            <img src="{{Voyager::image($ecole->logo)}}" alt="{{$ecole->name}}">
                        </a>
                        {{--<span class="avatar-tooltip">Added By  <strong>HayMacProduction</strong></span>--}}
                    </div>
                    <div class="geodir_status_date gsd_open"><i class="fal fa-user-plus"></i>inscription ouverte</div>
                    <div class="geodir-category-opt">
                        <div class="listing-rating-count-wrap">
                            <div class="review-score">4.8</div>
                            <div class="listing-rating card-popup-rainingvis" data-starrating2="5"></div>
                            <br>
                            <div class="reviews-count">{{$ecole->reviews()->count()}} avis</div>
                        </div>
                    </div>
                </div>
                <div class="geodir-category-content fl-wrap">
                    <div class="geodir-category-content-title fl-wrap">
                        <div class="geodir-category-content-title-item">
                            <h3 class="title-sin_map">
                                <a href="{{$ecole->slug}}">{{$ecole->name}}</a>
                                <span class="verified-badge"><i class="fal fa-check"></i></span>
                            </h3>
                            <div class="geodir-category-location fl-wrap">
                                <a href="#{{$loop->index+1}}" class="map-item">
                                    <i class="fas fa-map-marker-alt"></i> {{$ecole->addresse}}
                                </a>
                            </div>
                        </div>
                    </div>
                    {{--@if($ecole->facilities()->count())--}}
                    <div class="geodir-category-text fl-wrap">
                        <p class="small-text">{{$ecole->name}}</p>
                        <div class="facilities-list fl-wrap">
                            <div class="facilities-list-title">Facilities :</div>
                            <ul class="no-list-style">
                                @if($ecole->facilities()->count())
                                    @foreach($ecole->facilities as $fac)
                                        <li class="tolt" data-microtip-position="top"
                                            data-tooltip="{{$fac->description}}"><i class="fal {{$fac->icon_code}}"></i>
                                        </li>
                                    @endforeach

                                @else
                                    <li class="tolt" data-microtip-position="top"><i class="fal fa-ban"></i></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                    {{-- @endif--}}

                    <div class="geodir-category-footer fl-wrap">
                        <a class="listing-item-category-wrap">
                            <div class="listing-item-category yellow-bg">
                                <i class="fal fa-city"></i></div>
                            <span>{{$ecole->ville_name}}</span>
                        </a>
                        <div class="geodir-opt-list">
                            <ul class="no-list-style">
                                <li><a href="#" class="show_gcc"><i class="fal fa-envelope"></i><span
                                            class="geodir-opt-tooltip">Contact Info</span></a></li>
                                <li><a href="#{{$loop->index+1}}" class="map-item"><i class="fal fa-map-marker-alt"></i><span
                                            class="geodir-opt-tooltip">ouvrir sur le map <strong>{{$loop->index+1}}</strong></span>
                                    </a></li>
                                {{--
                                <li>
                                     <div class="dynamic-gal gdop-list-link"
                                          data-dynamicPath="[{'src': 'images/all/1.jpg'},{'src': 'images/all/1.jpg'}, {'src': 'images/all/1.jpg'}]">
                                         <i class="fal fa-search-plus"></i><span
                                             class="geodir-opt-tooltip">Gallery</span></div>
                                 </li>
                                 --}}
                            </ul>
                        </div>
                        {{--
                            <div class="price-level geodir-category_price">
                                <span class="price-level-item" data-pricerating="3"></span>
                                <span class="price-name-tooltip">Pricey</span>
                            </div>
                        --}}
                        <div class="geodir-category_contacts">
                            <div class="close_gcc"><i class="fal fa-times-circle"></i></div>
                            <ul class="no-list-style">
                                <li><span><i class="fal fa-phone"></i></span><a href="tel:{{$ecole->tele}}">{{$ecole->tele}}</a>
                                </li>
                                <li><span><i class="fal fa-envelope"></i></span><a
                                        href="#">{{$ecole->email}}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    @endforeach
    {{--
    <div class="pagination fwmpag">
        <a href="#" class="prevposts-link"><i class="fas fa-caret-left"></i><span>Prev</span></a>
        <a href="#">1</a>
        <a href="#" class="current-page">2</a>
        <a href="#">3</a>
        <a href="#">...</a>
        <a href="#">7</a>
        <a href="#" class="nextposts-link"><span>Next</span><i class="fas fa-caret-right"></i></a>
    </div>
     --}}
    {{--
    $ecoles->links()
   --}}

</div>

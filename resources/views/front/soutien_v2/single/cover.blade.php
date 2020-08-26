<section class="listing-hero-section hidden-section" data-scrollax-parent="true" id="sec1">
    <div class="bg-parallax-wrap">
        <div class="bg par-elem "  data-bg="{{Voyager::image($ecole->image)}}" data-scrollax="properties: { translateY: '30%' }"></div>
        <div class="overlay"></div>
    </div>
    <div class="container">
        <div class="list-single-header-item  fl-wrap">
            <div class="row">
                <div class="col-md-9">
                    <h1>{{$ecole->name}}
                        <span class="verified-badge"><i class="fal fa-check"></i></span>
                    </h1>
                    <div class="geodir-category-location fl-wrap">
                        <a href="#">
                            <i class="fas fa-map-marker-alt"></i>
                            {{$ecole->addresse}} MAROC
                        </a>
                        <a href="tel:{{$ecole->tele}}">
                            <i class="fal fa-phone"></i>
                            {{$ecole->tele}}
                        </a>
                        <a href="#">
                            <i class="fal fa-envelope"></i>
                            {{$ecole->email}}
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <a class="fl-wrap list-single-header-column custom-scroll-link " href="#sec5">
                        <div class="listing-rating-count-wrap single-list-count">
                            <div class="review-score">{{$ecole->reviews()->avg('score')}}.0</div>
                            <div class="listing-rating card-popup-rainingvis" data-starrating2="{{$ecole->reviews()->avg('score')}}"></div>
                            <br>
                            <div class="reviews-count">{{$ecole->reviews()->count()}} avis</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="list-single-header_bottom fl-wrap">
            <a class="listing-item-category-wrap" href="#">
                <div class="listing-item-category  red-bg">
                    <i class="fal fa-city"></i>
                </div>
                <span>{{$ecole->ville_name}}</span>
            </a>
            {{--
            <div class="list-single-author">
                <a href="author-single.html">
                    <span class="author_avatar">
                      <img alt='' src='{{asset('images/avatar/1.jpg')}}'>
                    </span>By  Alisa Noory
                </a>
            </div>
            --}}
            <div class="geodir_status_date gsd_open"><i class="fal fa-lock-open"></i>inscription ouverte</div>
            <div class="list-single-stats">
                <ul class="no-list-style">
                        <li>
                            <span class="viewed-counter">
                                <i class="fas fa-eye"></i> Vu -  {{views($ecole)->unique()->count()}}
                            </span>
                        </li>

                   {{--
                        <li>
                            <span class="bookmark-counter">
                                <i class="fas fa-heart"></i> Bookmark -  24
                            </span>
                        </li>
                    --}}

                </ul>
            </div>
        </div>
    </div>
</section>

<div class="hero-slider_wrap fl-wrap">
    <div class="hero-slider">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                @foreach($sliders as $slider)
                 <div class="swiper-slide">
                    <div class="hero-slider-item fl-wrap">
                        <div class="bg-tabs-wrap">
                            <div class="bg"  data-bg="{{Voyager::image($slider->image)}}"></div>
                            <div class="overlay op7"></div>
                        </div>
                        <div class="container small-container">
                            <div class="intro-item fl-wrap">
                                <span class="section-separator"></span>
                                <div class="bubbles">
                                    <h1>{{$slider->name}}</h1>
                                </div>
                                <h3>{{$slider->desc}}</h3>
                            </div>
                            <div class="hero-search  fl-wrap">
                                <div class="main-search-input-wrap fl-wrap">
                                    <div class="main-search-input fl-wrap">
                                        <div class="main-search-input-item">
                                            <label><i class="fal fa-keyboard"></i></label>
                                            <input type="text" placeholder="What are you looking for?" value=""/>
                                        </div>
                                        <div class="main-search-input-item location autocomplete-container">
                                            <label><i class="fal fa-map-marker-check"></i></label>
                                            <input type="text" placeholder="Location" class="autocomplete-input" id="autocompleteid" value=""/>
                                            <a href="#"><i class="fa fa-dot-circle-o"></i></a>
                                        </div>
                                        <div class="main-search-input-item">
                                            <select data-placeholder="All Categories"  class="chosen-select no-search-select" >
                                                <option>All Categories</option>
                                                <option>Shops</option>
                                                <option>Hotels</option>
                                                <option>Restaurants</option>
                                                <option>Fitness</option>
                                                <option>Events</option>
                                            </select>
                                        </div>
                                        <button class="main-search-button color2-bg" onclick="window.location.href='listing.html'">Search <i class="far fa-search"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="listing-carousel_pagination hero_pagination">
        <div class="listing-carousel_pagination-wrap"></div>
    </div>
    <div class="slider-hero-button-prev shb color2-bg"><i class="fas fa-caret-left"></i></div>
    <div class="slider-hero-button-next shb color2-bg"><i class="fas fa-caret-right"></i></div>
</div>

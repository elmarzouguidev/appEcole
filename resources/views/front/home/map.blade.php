<!--hero map-->
<div class="hero-map-wrap">
    <div class="hero-map">
        <!-- Map -->
        <div class="map-container  fw-map big_map">
            <div id="map-main"></div>
            <ul class="mapnavigation no-list-style">
                <li><a href="#" class="prevmap-nav mapnavbtn"><span><i class="fas fa-caret-left"></i></span></a></li>
                <li><a href="#" class="nextmap-nav mapnavbtn"><span><i class="fas fa-caret-right"></i></span></a></li>
            </ul>
            <div class="scrollContorl mapnavbtn tolt"   data-microtip-position="top-left" data-tooltip="Enable Scrolling"><span><i class="fal fa-unlock"></i></span></div>
            <div class="location-btn geoLocation tolt" data-microtip-position="top-left" data-tooltip="Your location"><span><i class="fal fa-location"></i></span></div>
        </div>
        <!-- Map end -->
    </div>
    <div class="clearfix"></div>
    <div class="container small-container">
        <div class="hero-map-search-wrap fl-wrap">
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
<!--hero map end-->

<div id="filters-search" class="tab-content  first-tab ">
    <form action="" method="get" name="filersApp">
        <div class="fl-wrap">
            <div class="row">
                <!-- listsearch-input-item-->

                   <div class="col-md-4">
                        <div class="listsearch-input-item">
                            <span class="iconn-dec"><i class="far fa-bookmark"></i></span>
                            <input type="text" placeholder="What are you looking for ?" value=""/>
                        </div>
                    </div>

                {{--    @livewire('search')--}}

                    <div class="col-md-4">
                        <div class="listsearch-input-item">
                            <select name="filter[ville_name]" data-placeholder="ville/Location" class="chosen-select no-search-select" >
                                <option value="">Villes</option>
                                @foreach($villes as $ville)
                                    <option value="{{$ville->slug}}">{{$ville->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="listsearch-input-item">
                            <select name="filter[area]" data-placeholder="Location" class="chosen-select no-search-select" >
                                <option value="">Arrondissement</option>
                                @foreach($areas as $area)
                                    <option value="{{$area->slug}}">{{$area->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-md-9">
                        <div class="listsearch-input-item location autocomplete-container">
                            <span class="iconn-dec"><i class="far fa-map-marker"></i></span>
                            <input type="text" placeholder="Where to look?" class="autocomplete-input" id="autocompleteid3" value=""/>
                            <a href="#"><i class="fal fa-location"></i></a>
                        </div>
                    </div>
                    <!-- listsearch-input-item end-->
                    <!-- listsearch-input-item-->
                    <div class="col-md-3">
                        <div class="listsearch-input-item">

                            {{--<button class="header-search-button color-bg" onclick="window.location.href='listing.html'">
                                   <i class="far fa-search"></i><span>Search</span>
                               </button>
                              --}}

                        <button class="header-search-button color-bg" type="submit">
                            <i class="far fa-search"></i><span>Search</span>
                        </button>
                    </div>
                </div>
                <!-- listsearch-input-item end-->
            </div>
            <!-- hidden-listing-filter -->
            <div class="hidden-listing-filter fl-wrap">
                <div class="listsearch-input-wrap-header fl-wrap"><i class="fal fa-tasks"></i>More Filters</div>
                <div class="fl-wrap mar-btoom">
                    <div class="row">
                        <!-- listsearch-input-item-->
                        <div class="col-md-3">
                            <div class="listsearch-input-item">
                                <button class="toggle-filter-btn tsb_act "><i class="fal fa-clock"></i> <span>Open Now</span></button>
                            </div>
                        </div>
                        <!-- listsearch-input-end-->
                        <!-- listsearch-input-item-->
                        <div class="col-md-3">
                            <div class="listsearch-input-item clact date-container">
                                <span class="iconn-dec"><i class="fal fa-calendar"></i></span>
                                <input type="text" placeholder="Event Date"     name="datepicker-here"   value=""/>
                                <span class="clear-singleinput"><i class="fal fa-times"></i></span>
                            </div>
                        </div>
                        <!-- listsearch-input-end-->
                        <!-- listsearch-input-item-->
                        <div class="col-md-6">
                            <div class="listsearch-input-item">
                                <div class="price-rage-wrap fl-wrap">
                                    <div class="price-rage-wrap-title"><i class="fal fa-hand-holding-usd"></i> Price :</div>
                                    <div class="price-rage-item fl-wrap">
                                        <input type="text" class="price-range" data-min="0" data-max="4"  name="price-range1"  data-step="1" value="$$">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- listsearch-input-end-->
                    </div>
                </div>
                <div class="listsearch-input-wrap-header fl-wrap"><i class="fal fa-tags"></i>Facilities</div>
                <!-- listsearch-input-item-->
                <div class="listsearch-input-item">
                    <div class=" fl-wrap filter-tags">
                        <ul class="no-list-style">
                            <li>
                                <input id="check-aa" type="checkbox" name="check">
                                <label for="check-aa">Elevator in building</label>
                            </li>
                            <li>
                                <input id="check-b" type="checkbox" name="check">
                                <label for="check-b">Friendly workspace</label>
                            </li>
                            <li>
                                <input id="check-c" type="checkbox" name="check" checked>
                                <label for="check-c">Instant Book</label>
                            </li>
                            <li>
                                <input id="check-d" type="checkbox" name="check">
                                <label for="check-d">Wireless Internet</label>
                            </li>
                            <li>
                                <input id="check-d2" type="checkbox" name="check" checked>
                                <label for="check-d2">Free WiFi</label>
                            </li>
                            <li>
                                <input id="check-d3" type="checkbox" name="check" checked>
                                <label for="check-d3">Free Parking</label>
                            </li>
                            <li>
                                <input id="check-d4" type="checkbox" name="check">
                                <label for="check-d4">Smoking Allowed</label>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- listsearch-input-item end-->
            </div>
            <!-- hidden-listing-filter end -->
            <div class="more-filter-option-wrap">
                <div class="more-filter-option-btn act-hiddenpanel"><i class="far fa-plus"></i> <span>More Options</span></div>
                <div class="clear-filter-btn color"><i class="far fa-redo"></i> Reset Filters</div>
            </div>
        </div>
    </form>
</div>

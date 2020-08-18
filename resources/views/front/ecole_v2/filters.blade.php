<div id="filters-search" class="tab-content  first-tab">
    <form action="" method="get" name="filersApp">
           {{-- <div class="listsearch-input-item">
                <span class="iconn-dec"><i class="far fa-bookmark"></i></span>
                <input type="text" placeholder="What are you looking for ?" value=""/>
            </div>--}}

            <div class="listsearch-input-item">
                <select name="getData[LaVille]" data-placeholder="ville/Lieu" class="chosen-select no-search-select" >
                    <option value="">Villes</option>
                    @foreach($villes as $ville)
                        <option value="{{$ville->slug}}">{{$ville->name}}</option>
                    @endforeach
                </select>
            </div>
          
            <div class="listsearch-input-item">
                <select name="getData[Arrondissement]" data-placeholder="Lieu" class="chosen-select no-search-select" >
                        <option value="">Arrondissement</option>
                        @foreach($areas as $area)
                        <option value="{{$area->slug}}">{{$area->name}}</option>
                        @endforeach
                </select>
            </div>
           {{--
                <div class="listsearch-input-item location autocomplete-container">
                    <span class="iconn-dec"><i class="far fa-map-marker"></i></span>
                    <input type="text" placeholder="Where to look?" class="autocomplete-input" id="autocompleteid3" value=""/>
                    <a href="#"><i class="fal fa-location"></i></a>
                </div>
            
            <div class="listsearch-input-item">
                <button class="toggle-filter-btn tsb_act "><i class="fal fa-clock"></i> <span>Open Now</span></button>
            </div>
              --}}
            <div class="listsearch-input-item clact">
                <div class=" fl-wrap filter-tags">
                    <ul class="no-list-style">
                        @foreach($niveaux as $niveau)
                            <li>
                                <input id="check-d-{{$loop->index}}" type="checkbox" name="getData[niveaux][]" value="{{$niveau->slug}}">
                                <label for="check-d-{{$loop->index}}">{{$niveau->name}}</label>
                            </li>
                        @endforeach
            
                    </ul>
                </div>
            </div>

            <div class="listsearch-input-item">
                <button type="submit" class="header-search-button color-bg"><i class="far fa-search"></i><span>Filter</span></button>
            </div>
                                                            
            <div class="clear-filter-btn"><i class="far fa-redo"></i> Reset Filters</div>
    </form>
</div>
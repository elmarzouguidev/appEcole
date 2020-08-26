<div id="add-review" class="add-review-box">
    <!-- Review Comment -->
    @if(session()->has('fromReview'))
        {{session('fromReview')}}
    @endif
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form id="addReview" method="post" action="{{route('ecoles.actions.post',$ecole->slug)}}" id="add-comment" class="add-comment  custom-form" name="rangeCalc" >
        @csrf
        <input type="hidden" value="{{$ecole->id}}" name="appEcole">
        <input type="hidden" name="reviewEcole" value="reviewOk">
        <fieldset>
            <div class="review-score-form fl-wrap">
                <div class="review-range-container">

                    <div class="review-range-item">
                        <div class="range-slider-title">glisser le score</div>
                        <div class="range-slider-wrap ">
                            <input type="text" class="rate-range" data-min="1" data-max="5"  name="scoreFrom"  data-step="1" value="1">
                        </div>
                    </div>

                </div>
                <div class="review-total">
                    <span><input type="text" name="score"   data-form="AVG({scoreFrom})" value="0"></span>
                    <strong>score</strong>
                </div>
            </div>
            <div class="list-single-main-item_content fl-wrap">
                <div class="row">
                    <div class="col-md-6">
                        <label><i class="fal fa-user"></i></label>
                        <input name="name" type="text" placeholder="Votre nom *">

                    </div>
                    <div class="col-md-6">
                        <label><i class="fal fa-envelope"></i></label>
                        <input type="email" name="email" placeholder="E-mail Address* non publié">
                    </div>
                </div>
                <textarea name="avis" cols="40" rows="3" placeholder="Avis"></textarea>
                <div class="clearfix"></div>
                {{--
                <div class="photoUpload">
                    <span><i class="fal fa-image"></i> <strong>Add Photos</strong></span>
                    <input type="file" class="upload" multiple>
                </div>
                --}}
                <div class="clearfix"></div>
                <button class="btn color2-bg float-btn">
                    envoyer
                    <i class="fal fa-paper-plane"></i>

                </button>
            </div>
        </fieldset>
    </form>
</div>

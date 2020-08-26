<div class="list-single-main-item_content fl-wrap">
    <div class="reviews-comments-wrap">
        @foreach($center->reviews as $review)
            <div class="reviews-comments-item">
                <div class="review-comments-avatar">
                    <img src="{{asset('images/avatar/1.jpg')}}" alt="{{$review->name}}">
                </div>
                <div class="reviews-comments-item-text fl-wrap">
                    <div class="reviews-comments-header fl-wrap">
                        <h4><a href="#">{{$review->name}}</a></h4>
                        <div class="review-score-user">
                            <span class="review-score-user_item">{{$review->score}}</span>
                            <div class="listing-rating card-popup-rainingvis" data-starrating2="{{str_replace('.0','',$review->score)}}"></div>
                        </div>
                    </div>
                    <p>
                        {!! $review->content !!}
                    </p>
                    <div class="reviews-comments-item-footer fl-wrap">
                        <div class="reviews-comments-item-date">
                            <span><i class="far fa-calendar-check"></i>
                               {{--12 April 2020--}}
                                {{$review->created_at}}
                            </span>
                        </div>
                        {{--
                        <a href="#" class="rate-review">
                            <i class="fal fa-thumbs-up"></i>
                            Helpful Review  <span>2</span>
                        </a>
                        --}}
                    </div>
                </div>
            </div>
        @endforeach

    </div>
</div>
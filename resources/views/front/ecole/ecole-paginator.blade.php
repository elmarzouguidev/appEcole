@if ($paginator->hasPages())

    <div class="pagination">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            {{--  <li class="prevposts-link" aria-disabled="true" aria-label="@lang('pagination.previous')">

                  <i class="fas fa-caret-left"></i><span aria-hidden="true">&lsaquo;</span>
              </li>
              --}}
            <a class="prevposts-link" aria-disabled="true" aria-label="@lang('pagination.previous')">
                <i class="fas fa-caret-left"></i><span>Prev</span>
            </a>

        @else
            {{--
            <li class="page-item">
                  <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>
             </li>
               --}}
            <a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                {{-- <li class="page-item disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span></li>--}}

                <a href="#" aria-disabled="true">{{ $element }}</a>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        {{--<li class="page-item active" aria-current="page"><span class="page-link">{{ $page }}</span></li>--}}
                        <a href="#" class="current-page" aria-current="page">{{ $page }}</a>
                    @else
                        {{-- <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>--}}
                        <a href="{{ $url }}" >{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())

            {{-- <li class="page-item">
                 <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
             </li>--}}

            <a href="{{ $paginator->nextPageUrl() }}" class="nextposts-link" rel="next" aria-label="@lang('pagination.next')">
                <span>Next</span>
                <i class="fas fa-caret-right"></i>
            </a>
        @else
            {{-- <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                 <span class="page-link" aria-hidden="true">&rsaquo;</span>
             </li>--}}
            <a href="" class="nextposts-link" aria-disabled="true" aria-label="@lang('pagination.next')">
                <span aria-hidden="true">&rsaquo;</span>
                <i class="fas fa-caret-right"></i>
            </a>
        @endif
    </div>

@endif

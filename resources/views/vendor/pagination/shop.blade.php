@if ($paginator->hasPages())
<div class="inner-category-pagination">
    <div class="pagination">
        {{-- Previous Page Link --}}
        {{-- @if ($paginator->onFirstPage())
        <a href="#" class="active">1</a>
        @else
        <a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>
        @endif --}}

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
            {{-- <li class="disabled" aria-disabled="true"><span>{{ $element }}</span></li> --}}
            <a href="#" disabled>{{ $element }}</a>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        {{-- <li class="active" aria-current="page"><span>{{ $page }}</span></li> --}}
                        <a href="#" class="active">{{ $page }}</a>
                    @else
                        {{-- <li><a href="{{ $url }}">{{ $page }}</a></li> --}}
                        <a href="{{ $url }}">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        {{-- @if ($paginator->hasMorePages())
        <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
        @endif --}}
    </div>
</div>
@endif
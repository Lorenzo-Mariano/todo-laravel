<style>
    nav {
        display: flex;
        gap: 0.5rem;
        padding: 0.5rem;
        border-radius: 3rem;

        background-color: #fff;
        box-shadow: #00000059 0px 5px 15px;
    }

    .pagination-nav {
        display: flex;
        justify-content: space-between;
    }

    .pagination>a,
    .pagination>span {
        cursor: pointer;
    }
</style>

@if ($paginator->hasPages())
    <nav class="pagination-nav">
        <span class="results">
            {!! __('Showing') !!}
            <span class="fw-semibold">{{ $paginator->firstItem() }}</span>
            {!! __('to') !!}
            <span class="fw-semibold">{{ $paginator->lastItem() }}</span>
            {!! __('of') !!}
            <span class="fw-semibold">{{ $paginator->total() }}</span>
            {!! __('results') !!}
        </span>
        <span class="pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <span class="page-link">@lang('pagination.previous')</span>
            @else
                <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev">@lang('pagination.previous')</a>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <span class="page-link">{{ $element }}</span>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <span class="page-link red">{{ $page }}</span>
                        @else
                            <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                        @endif
                    @endforeach
                @endif
            @endforeach

            @if ($paginator->hasMorePages())
                <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next">@lang('pagination.next')</a>
            @else
                <span class="page-link">@lang('pagination.next')</span>
            @endif
        </span>
    </nav>
@endif

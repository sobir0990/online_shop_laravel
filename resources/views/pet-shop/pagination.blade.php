@if ($paginator->hasPages())
    <div class="pagination-style text-center mt-10">
        <ul>
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li>
                    <a href="" class="disabled"><i class="icon-arrow-left"></i></a>
                </li>
            @else
                <li>
                    <a href="{{ $paginator->previousPageUrl() }}"><i class="icon-arrow-left"></i></a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li>{{ $element }}</li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li>
                                <a href="#" class="active">{{ $page }}<span class="sr-only">(current)</span></a>
                            </li>
                        @else
                            <li>
                                <a href="{{ $url }}">{{ $page }}</a>
                            </li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li>
                    <a href="{{ $paginator->nextPageUrl() }}"><i class="icon-arrow-right"></i></a>
                </li>
            @else
                <li>
                    <a class="" href="#"><i class="icon-arrow-right"></i></a>
                </li>
            @endif
        </ul>
    </div>
@endif
@if ($paginator->hasPages())
    <nav>
<<<<<<< HEAD
        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <span class="page-link" aria-hidden="true">&lsaquo;</span>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>
=======
        <ul class="pagination justify-content-center">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">
                        <i class="icofont-rounded-left"></i>
                    </a>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev"
                        aria-label="@lang('pagination.previous')"> <i class="icofont-rounded-left"></i>
                    </a>
>>>>>>> f629c2da7737c3647c25c887e393f1727ad4d088
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
<<<<<<< HEAD
                    <li class="page-item disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span></li>
=======
                    <li class="page-item disabled" aria-disabled="true"><span
                            class="page-link">{{ $element }}</span></li>
>>>>>>> f629c2da7737c3647c25c887e393f1727ad4d088
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
<<<<<<< HEAD
                            <li class="page-item active" aria-current="page"><span class="page-link">{{ $page }}</span></li>
                        @else
                            <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
=======
                            <li class="page-item" aria-current="page"><span
                                    class="page-link active">{{ $page }}</span></li>
                        @else
                            <li class="page-item"><a class="page-link"
                                    href="{{ $url }}">{{ $page }}</a></li>
>>>>>>> f629c2da7737c3647c25c887e393f1727ad4d088
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item">
<<<<<<< HEAD
                    <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
                </li>
            @else
                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span class="page-link" aria-hidden="true">&rsaquo;</span>
=======
                    <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next"
                        aria-label="@lang('pagination.next')"><i class="icofont-rounded-right"></i>
                    </a>
                </li>
            @else
                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span class="page-link" aria-hidden="true"><i class="icofont-rounded-right"></i></span>
>>>>>>> f629c2da7737c3647c25c887e393f1727ad4d088
                </li>
            @endif
        </ul>
    </nav>
@endif

@if ($paginator->hasPages())
    <nav role="navigation" aria-label="Pagination Navigation" class="flex justify-center">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <span class="px-4 py-2 mr-1 text-sm font-medium text-gray-400 bg-gray-200 rounded-md cursor-not-allowed">
                قبلی
            </span>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" class="px-4 py-2 mr-1 text-sm font-medium text-white bg-purple-500 rounded-md hover:bg-purple-700 transition">
                قبلی
            </a>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <span class="px-4 py-2 mr-1 text-sm font-medium text-gray-400">{{ $element }}</span>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <span class="px-4 py-2 mr-1 text-sm font-medium text-white bg-purple-700 rounded-md">
                            {{ $page }}
                        </span>
                    @else
                        <a href="{{ $url }}" class="px-4 py-2 mr-1 text-sm font-medium text-white bg-purple-500 rounded-md hover:bg-purple-700 transition">
                            {{ $page }}
                        </a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" class="px-4 py-2 ml-1 text-sm font-medium text-white bg-purple-500 rounded-md hover:bg-purple-700 transition">
                بعدی
            </a>
        @else
            <span class="px-4 py-2 ml-1 mr-1 text-sm font-medium text-gray-400 bg-gray-200 rounded-md cursor-not-allowed">
                بعدی
            </span>
        @endif
    </nav>
@endif

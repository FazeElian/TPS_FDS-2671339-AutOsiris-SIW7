<head>
    {{-- Estilos para este componente --}}
    <link rel="stylesheet" href="{{ asset("assets/css/Admin/paginacion-registros.css") }}">
</head>

@if ($paginator->hasPages())
    <div class="cont-pagination">
        <ul class="paginate">
            {{-- Previous Page buttonnk --}}
            @if ($paginator->onFirstPage())
                <button class="btn-pag btn-img" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <img src="{{ asset("assets/img/Admin/modules/paginacion-izquierda.png") }}" alt="">
                </button>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">
                    <button class="btn-pag btn-img">
                        <img src="{{ asset("assets/img/Admin/modules/paginacion-izquierda.png") }}" alt="">
                    </button>
                </a>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <button class="btn-pag" aria-disabled="true">{{ $element }}</button>
                @endif

                {{-- Array Of buttonnks --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <button class="btn-pag btn-img" aria-current="page">{{ $page }}</button>
                        @else
                            <button class="btn-pag"><a class="" href="{{ $url }}">{{ $page }}</a></button>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page buttonnk --}}
            @if ($paginator->hasMorePages())
                <a class="" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">
                    <button class="btn-pag btn-img">
                        <img src="{{ asset("assets/img/Admin/modules/paginacion-derecha.png") }}" alt="">
                    </button>
                </a>
            @endif
        </ul>
    </div>
@endif

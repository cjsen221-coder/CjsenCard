<div class="container-xxl position-relative p-0">

    @include('site.layouts.navbar')

    <div class="container-xxl pt-5 bg-dark hero-header mb-5">
        <div class="container text-center my-5 pt-5 pb-4">

            {{-- Titre dynamique --}}
            <h1 class="{{ $titleSize ?? 'display-4' }} text-white mb-3 animated slideInDown">
                {{ $title }}
            </h1>

            {{-- Breadcrumb dynamique --}}
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase">

                    <li class="breadcrumb-item">
                        <a href="{{ route('site.accueil') }}">Accueil</a>
                    </li>

                    @if(!empty($parent))
                        <li class="breadcrumb-item">
                            @if(!empty($parentUrl))
                                <a href="{{ $parentUrl }}">{{ $parent }}</a>
                            @else
                                {{ $parent }}
                            @endif
                        </li>
                    @endif


                    <li class="breadcrumb-item text-white active" aria-current="page">
                        {{ $current }}
                    </li>

                </ol>
            </nav>
        </div>
    </div>

</div>
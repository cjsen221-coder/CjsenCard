<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Média - Sen Carrefour Jeunesse</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('images/logo-cjsen.jpg') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet" />

    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('site/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('site/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('site/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet">


    <link href="" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('site/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <link href="{{asset('site/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('site/css/style.css') }}" rel="stylesheet">

    <style>
        :root {
            --cjsen-blue-dark: #003366;
            --cjsen-blue: #006B8F;
            --cjsen-turquoise: #23C1B5;
            --cjsen-yellow: #F6B623;
            --cjsen-orange: #FF6F3C;
        }

        /* Onglet non actif */
        .nav-pills .nav-link {
            /* background-color: var(--cjsen-turquoise); */
            /* fond turquoise */
            color: var(--cjsen-blue-dark);
            /* texte bleu foncé */
            border-radius: 0.5rem;
            margin: 0 5px;
            transition: all 0.3s;
        }

        .nav-pills .nav-link i {
            color: var(--cjsen-blue-dark);
            /* icône bleu foncé */
        }

        /* Onglet actif */
        .nav-pills .nav-link.active {
            background-color: var(--cjsen-turquoise);
            /* fond bleu */
            color: #fff;
            /* texte blanc */
        }

        .nav-pills .nav-link.active h6,
        .nav-pills .nav-link.active .text-body,
        .nav-pills .nav-link.active i {
            color: #fff !important;
            /* icône blanche */
        }
    </style>

</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">

            @include('site.layouts.navbar')

            <div class="container-xxl pt-5 bg-dark hero-header">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Media</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                            {{-- <li class="breadcrumb-item"><a href="#">Pages</a></li> --}}
                            <li class="breadcrumb-item text-white active" aria-current="page">Media</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Media</h5>
                    <h1 class="mb-5">Galerie photos & vidéos</h1>
                </div>

                <!-- Onglets Photos / Vidéos -->
                <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
                    <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center text-start mx-3 ms-0 pb-3 active"
                                data-bs-toggle="pill" href="#tab-photos">
                                <i class="fa fa-image fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <small class="text-body">Galerie</small>
                                    <h6 class="mt-n1 mb-0">Photos</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill"
                                href="#tab-videos">
                                <i class="fa fa-video fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <small class="text-body">Vidéos</small>
                                    <h6 class="mt-n1 mb-0">Vidéos</h6>
                                </div>
                            </a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <!-- Photos -->
                        <div id="tab-photos" class="tab-pane fade show active p-0">
                            <div class="row g-4">
                                @forelse($gallery as $photo)
                                    <div class="col-lg-4 col-md-4 col-sm-6">
                                        <a href="{{ route('photo.show', $photo) }}">
                                            <div class="card shadow-sm overflow-hidden">
                                                <img src="{{ asset('storage/' . $photo->image) }}" class="card-img-top"
                                                    alt="{{ $photo->title }}" style="height: auto; object-fit: cover;">
                                                {{-- <div class="overlay d-flex align-items-center justify-content-center">
                                                    --}}
                                                    <h6 class="text-center" style="padding-top: 10px;">{{ $photo->title }}
                                                    </h6>
                                                    {{--
                                                </div> --}}
                                            </div>
                                        </a>
                                    </div>
                                @empty
                                    <p class="text-center text-muted">Aucune photo disponible pour le moment.</p>
                                @endforelse
                            </div>
                            <div class="mt-4 d-flex justify-content-center">
                                {{ $gallery->links('pagination::bootstrap-5') }}
                            </div>
                        </div>

                        <!-- Vidéos -->
                        <div id="tab-videos" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                @forelse($videos as $video)
                                    <div class="col-lg-4 col-md-6">
                                        <div class="ratio ratio-16x9 rounded shadow">
                                            <iframe src="{{ $video->embed_url }}" title="{{ $video->title }}"
                                                allowfullscreen></iframe>
                                        </div>
                                        <p class="mt-2 text-center fw-semibold">{{ $video->title }}</p>
                                    </div>
                                @empty
                                    <p class="text-center text-muted">Aucune vidéo disponible pour le moment.</p>
                                @endforelse
                            </div>
                            <div class="mt-4 d-flex justify-content-center">
                                {{ $videos->links('pagination::bootstrap-5') }}
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>



        <!-- Footer Start -->
        @include('site.layouts.footer')
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

    <script src="{{ asset('site/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('site/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('site/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('site/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('site/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('site/lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('site/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('site/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>


    <!-- Template Javascript -->
    <script src="{{ asset('site/js/main.js') }}"></script>
</body>

</html>
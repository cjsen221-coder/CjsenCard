<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Détails Domaines - Sen Carrefour Jeunesse</title>
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
    <link href="{{ asset('site/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('site/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('site/css/style.css') }}" rel="stylesheet">
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

            <div class="container-xxl pt-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-4 text-white mb-3 animated slideInDown">
                        {{ $domaine->nom }}
                    </h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="{{ route('site.accueil') }}">Accueil</a></li>
                            <li class="breadcrumb-item"><a href="#">Domaines</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">
                                {{ ucfirst($domaine->type) }}
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <!-- Contenu principal -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <!-- Image -->
                    <div class="col-lg-5 col-md-6">
                        @if($domaine->image)
                            <img src="{{ $domaine->image ? asset('storage/' . $domaine->image) : asset('images/default.jpg') }}"
                                alt="{{ $domaine->nom }}" class="img-fluid rounded shadow-lg w-auto"
                                style="object-fit: contain; max-height: 350px; border: 2px solid #eee;">
                        @else
                            <img src="{{ asset('images/default.jpg') }}" alt="Image par défaut"
                                class="img-fluid rounded shadow-lg w-100"
                                style="object-fit: cover; height: 350px; border: 2px solid #eee;">
                        @endif
                    </div>

                    <!-- Texte -->
                    <div class="col-lg-7 col-md-6">
                        <h2 class="mb-3">{{ $domaine->nom }}</h2>
                        <p class="text-muted mb-4">
                            <i class="fa fa-calendar-alt text-primary me-2"></i>
                            Date : {{ $domaine->created_at->format('d M Y') }}
                        </p>
                        <p class="lead text-justify">
                            {{ $domaine->description }}
                        </p>

                        <a href="{{ url()->previous() }}" class="btn btn-primary mt-3">
                            <i class="fa fa-arrow-left me-2"></i> Retour
                        </a>
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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Accueil - Sen Carrefour Jeunesse</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('images/logo.ico') }}" rel="icon">

    <!-- Google Web Fonts --><!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap"
        rel="stylesheet">

    <!-- Icon Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Owl Carousel -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />

    <!-- Libraries Stylesheets -->
    <link href="{{ asset('site/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('site/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap -->
    <link href="{{ asset('site/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css">



    <!-- Template Stylesheet -->
    <link href="{{ asset('site/css/style.css') }}" rel="stylesheet">
    <style>
        .titre {
            margin-top: 120px;
        }

        @media (max-width: 760px) {
            .titre {
                margin-top: 100px;
            }
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
            {{-- Navbar --}}
            @include('site.layouts.navbar')
        </div>
        <!-- Navbar & Hero End -->
        <!-- 404 Start -->
        <div class="container-xxl pt-5 about-section">
            <div class="container-fluid">
                <div class="row g-5 align-items-center justify-content-center">

                    <!-- Titre -->
                    <div class="text-center titre">
                        <h5 class="section-title ff-secondary text-uppercase fw-normal text-cjsen-primary">
                            Oups !
                        </h5>
                        <h1 class="fw-bold text-cjsen-blue-dark">Page non trouvée</h1>
                    </div>

                    <!-- Image -->
                    <div class="col-lg-6 text-center" style="margin-top: 0 ! important">
                        <img src="{{ asset('media/404.jpg') }}" alt="404" class="img-fluid rounded wow zoomIn"
                            style="max-width: 60%;">
                    </div>

                    <!-- Texte et bouton -->
                    {{-- <div class="col-lg-6">
                        <p class="mb-4">
                            La page que vous cherchez n'existe pas ou a été déplacée. Mais ne vous inquiétez pas, vous
                            pouvez revenir à l'accueil ou explorer d'autres sections.
                        </p>

                        <div class="row g-4 mb-4">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center border-start border-5 border-cjsen px-3">
                                    <h1 class="flex-shrink-0 display-5 text-cjsen-primary mb-0">404</h1>
                                    <div class="ps-4">
                                        <p class="mb-0">Erreur</p>
                                        <h6 class="text-uppercase mb-0">Page introuvable</h6>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="d-flex align-items-center border-start border-5 border-cjsen px-3">
                                    <h1 class="flex-shrink-0 display-5 text-cjsen-primary mb-0">💡</h1>
                                    <div class="ps-4">
                                        <p class="mb-0">Astuce</p>
                                        <h6 class="text-uppercase mb-0">Retournez à l'accueil</h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a class="btn btn-primary py-3 px-5 mt-2" href="{{ url('/') }}">Retour à l'accueil</a>
                    </div> --}}

                </div>
            </div>
        </div>
        <!-- 404 End -->

        <!-- Footer Start -->
        @include('site.layouts.footer')
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

    <script src="{{ asset('site/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('site/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('site/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('site/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('site/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('site/lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('site/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('site/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <!-- Swiper -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <!-- jQuery (nécessaire pour Counter-Up 1) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('site/js/main.js') }}"></script>
</body>

</html>
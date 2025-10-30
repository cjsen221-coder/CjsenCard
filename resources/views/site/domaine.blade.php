<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Domaines d'Action - Sen Carrefour Jeunesse</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('images/logo-cjsen.jpg') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
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

            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Domaines d'Action</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Domaines d'Action</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->

        <!-- ======================= FORMATIONS ======================= -->
        <div class="container-xxl py-5" id="formations">
            <div class="container">
                <div class="text-center mb-5">
                    <h5 class="section-title ff-secondary text-primary fw-normal">Nos Formations</h5>
                    <h1 class="mb-4">Apprendre, Partager et Grandir Ensemble</h1>
                </div>

                <div class="row g-4">
                    @forelse($formations as $domaine)
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="service-item rounded pt-3 h-100 shadow-sm">
                                <div class="p-4 text-center">
                                    @if($domaine->image)
                                        <img src="{{ asset('storage/' . $domaine->image) }}" alt="{{ $domaine->nom }}"
                                            class="rounded mb-3 w-100" style="height:180px;object-fit:cover;">
                                    @endif
                                    <h5>{{ $domaine->nom }}</h5>
                                    <p>{{ Str::limit($domaine->description, 100) }}</p>
                                    <small class="text-gray-500">Publié le
                                        {{ $domaine->created_at->format('d M Y') }}</small>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-12 text-center">
                            <p class="text-muted fst-italic">Aucune formation disponible pour le moment.</p>
                        </div>
                    @endforelse
                </div>

                @if($formations->count())
                    <div class="mt-4 d-flex justify-content-center">
                        {{ $formations->links() }}
                    </div>
                @endif
            </div>
        </div>

        <!-- ======================= CAUSERIES ======================= -->
        <div class="container-xxl py-5" id="causeries">
            <div class="container">
                <div class="text-center mb-5">
                    <h5 class="section-title ff-secondary text-primary fw-normal">Nos Causeries</h5>
                    <h1 class="mb-4">Des échanges pour s’inspirer et grandir</h1>
                </div>

                <div class="row g-4">
                    @forelse($causeries as $domaine)
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="service-item rounded pt-3 h-100 shadow-sm">
                                <div class="p-4 text-center">
                                    @if($domaine->image)
                                        <img src="{{ asset('storage/' . $domaine->image) }}" alt="{{ $domaine->nom }}"
                                            class="rounded mb-3 w-100" style="height:180px;object-fit:cover;">
                                    @endif
                                    <h5>{{ $domaine->nom }}</h5>
                                    <p>{{ Str::limit($domaine->description, 100) }}</p>
                                    <small class="text-gray-500">Publié le
                                        {{ $domaine->created_at->format('d M Y') }}</small>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-12 text-center">
                            <p class="text-muted fst-italic">Aucune causerie programmée pour le moment.</p>
                        </div>
                    @endforelse
                </div>

                @if($causeries->count())
                    <div class="mt-4 d-flex justify-content-center">
                        {{ $causeries->links() }}
                    </div>
                @endif
            </div>
        </div>

        <!-- ======================= SENSIBILISATIONS ======================= -->
        <div class="container-xxl py-5" id="sensibilisations">
            <div class="container">
                <div class="text-center mb-5">
                    <h5 class="section-title ff-secondary text-primary fw-normal">Nos Sensibilisations</h5>
                    <h1 class="mb-4">Agir pour la prise de conscience</h1>
                </div>

                <div class="row g-4">
                    @forelse($sensibilisations as $domaine)
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="service-item rounded pt-3 h-100 shadow-sm">
                                <div class="p-4 text-center">
                                    @if($domaine->image)
                                        <img src="{{ asset('storage/' . $domaine->image) }}" alt="{{ $domaine->nom }}"
                                            class="rounded mb-3 w-100" style="height:180px;object-fit:cover;">
                                    @endif
                                    <h5>{{ $domaine->nom }}</h5>
                                    <p>{{ Str::limit($domaine->description, 100) }}</p>
                                    <small class="text-gray-500">Publié le
                                        {{ $domaine->created_at->format('d M Y') }}</small>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-12 text-center">
                            <p class="text-muted fst-italic">Aucune activité de sensibilisation pour le moment.</p>
                        </div>
                    @endforelse
                </div>

                @if($sensibilisations->count())
                    <div class="mt-4 d-flex justify-content-center">
                        {{ $sensibilisations->links() }}
                    </div>
                @endif
            </div>
        </div>

        <!-- ======================= COHÉSIONS ======================= -->
        <div class="container-xxl py-5" id="cohesions">
            <div class="container">
                <div class="text-center mb-5">
                    <h5 class="section-title ff-secondary text-primary fw-normal">Nos Activités de Cohésion</h5>
                    <h1 class="mb-4">Renforcer les liens et l’esprit d’équipe</h1>
                </div>

                <div class="row g-4">
                    @forelse($cohesions as $domaine)
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="service-item rounded pt-3 h-100 shadow-sm">
                                <div class="p-4 text-center">
                                    @if($domaine->image)
                                        <img src="{{ asset('storage/' . $domaine->image) }}" alt="{{ $domaine->nom }}"
                                            class="rounded mb-3 w-100" style="height:180px;object-fit:cover;">
                                    @endif
                                    <h5>{{ $domaine->nom }}</h5>
                                    <p>{{ Str::limit($domaine->description, 100) }}</p>
                                    <small class="text-gray-500">Publié le
                                        {{ $domaine->created_at->format('d M Y') }}</small>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-12 text-center">
                            <p class="text-muted fst-italic">Aucune activité de cohésion n’a encore été organisée.</p>
                        </div>
                    @endforelse
                </div>

                @if($cohesions->count())
                    <div class="mt-4 d-flex justify-content-center">
                        {{ $cohesions->links() }}
                    </div>
                @endif
            </div>
        </div>

        <!-- ======================= ACTIONS ======================= -->
        <div class="container-xxl py-5" id="actions">
            <div class="container">
                <div class="text-center mb-5">
                    <h5 class="section-title ff-secondary text-primary fw-normal">Nos Actions Communautaires</h5>
                    <h1 class="mb-4">Des actes concrets pour le changement</h1>
                </div>

                <div class="row g-4">
                    @forelse($actions as $domaine)
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="service-item rounded pt-3 h-100 shadow-sm">
                                <div class="p-4 text-center">
                                    @if($domaine->image)
                                        <img src="{{ asset('storage/' . $domaine->image) }}" alt="{{ $domaine->nom }}"
                                            class="rounded mb-3 w-100" style="height:180px;object-fit:cover;">
                                    @endif
                                    <h5>{{ $domaine->nom }}</h5>
                                    <p>{{ Str::limit($domaine->description, 100) }}</p>
                                    <small class="text-gray-500">Publié le
                                        {{ $domaine->created_at->format('d M Y') }}</small>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-12 text-center">
                            <p class="text-muted fst-italic">Aucune action communautaire disponible pour le moment.</p>
                        </div>
                    @endforelse
                </div>

                @if($actions->count())
                    <div class="mt-4 d-flex justify-content-center">
                        {{ $actions->links() }}
                    </div>
                @endif
            </div>
        </div>

        <!-- ======================= PROJETS ======================= -->
        <div class="container-xxl py-5" id="projets">
            <div class="container">
                <div class="text-center mb-5">
                    <h5 class="section-title ff-secondary text-primary fw-normal">Nos Projets</h5>
                    <h1 class="mb-4">Construire l’avenir ensemble</h1>
                </div>

                <div class="row g-4">
                    @forelse($projets as $domaine)
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="service-item rounded pt-3 h-100 shadow-sm">
                                <div class="p-4 text-center">
                                    @if($domaine->image)
                                        <img src="{{ asset('storage/' . $domaine->image) }}" alt="{{ $domaine->nom }}"
                                            class="rounded mb-3 w-100" style="height:180px;object-fit:cover;">
                                    @endif
                                    <h5>{{ $domaine->nom }}</h5>
                                    <p>{{ Str::limit($domaine->description, 100) }}</p>
                                    <small class="text-gray-500">Publié le
                                        {{ $domaine->created_at->format('d M Y') }}</small>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-12 text-center">
                            <p class="text-muted fst-italic">Aucun projet n’est en cours actuellement.</p>
                        </div>
                    @endforelse
                </div>

                @if($projets->count())
                    <div class="mt-4 d-flex justify-content-center">
                        {{ $projets->links() }}
                    </div>
                @endif
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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{ ucfirst($type) }} - Sen Carrefour Jeunesse</title>
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
        <x-hero title="{{ ucfirst($type) }}s" current="{{ $type }}s" parent="Domaines d'Action"
            parentUrl="{{ route('site.domaines') }}" titleSize="display-4" />

        <!-- Contenu principal -->
        <div class="container-xxl py-5">
            <div class="container-fluid">
                <div class="text-center mb-5">
                    <h5 class="section-title ff-secondary text-primary fw-normal">Nos {{ ucfirst($type) }}</h5>
                    <h1 class="mb-4">Découvrez nos {{ ucfirst($type) }}s</h1>
                </div>

                <div class="row g-4 justify-content-center">
                    @forelse($domaines as $domaine)
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="service-item rounded pt-3 h-100 shadow-sm position-relative">
                                <a href="{{ route('domaine.details', ['type' => $domaine->type, 'id' => $domaine->id]) }}"
                                    class="stretched-link"></a>

                                <div class="p-4 text-center">
                                    @if($domaine->image)
                                        <img src="{{ asset('storage/' . $domaine->image) }}" alt="{{ $domaine->nom }}"
                                            class="rounded mb-3 w-100" style="height:180px; object-fit:cover;">
                                    @endif

                                    <h5>{{ $domaine->nom }}</h5>
                                    <p>{{ Str::limit($domaine->description, 100) }}</p>
                                    <small class="text-gray-500">Date : {{ $domaine->created_at->format('d M Y') }}</small>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-12 text-center">
                            <p class="text-muted fst-italic">Aucun {{ $type }} disponible pour le moment.</p>
                        </div>
                    @endforelse
                </div>

                <div class="mt-4 d-flex justify-content-center">
                    {{ $domaines->links('pagination::bootstrap-5') }}
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
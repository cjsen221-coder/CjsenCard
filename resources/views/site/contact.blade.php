<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Contact - Sen Carrefour Jeunesse</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

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
    <link href="{{ asset('site/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet">

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
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Contact</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Contactez Nous</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Contact Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Nous contacter</h5>
                    <h1 class="mb-5">Contactez-nous pour toute question</h1>
                </div>

                @if(session('success'))
                    <div class="alert alert-success text-center">{{ session('success') }}</div>
                @endif

                <div class="row g-4">
                    <div class="col-12">
                        <div class="row gy-4">
                            <div class="col-md-4">
                                <h5 class="section-title ff-secondary fw-normal text-start text-primary">Email</h5>
                                <a href="mailto:cjsen221@gmail.com">
                                    <p><i class="fa fa-envelope-open text-primary me-2"></i>cjsen221@gmail.com</p>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <h5 class="section-title ff-secondary fw-normal text-start text-primary">Téléphone</h5>
                                <a href="tel:+221788495730">
                                    <p><i class="fa fa-phone-alt text-primary me-2"></i>+221 78 849 57 30</p>
                                </a>
                            </div>
                            <div class="col-md-4">
                                <h5 class="section-title ff-secondary fw-normal text-start text-primary">Adresse</h5>
                                <p><i class="fa fa-map-marker-alt text-primary me-2"></i>Foire, Dakar, Sénégal
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 wow fadeIn" data-wow-delay="0.1s">
                        <iframe class="position-relative rounded w-100 h-100"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.543658374305!2d-17.465438384581026!3d14.743730389010362!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xec10d4441f922f1%3A0x2a87fbcaa27978ba!2sC.I.C.E.S%2C%20Dakar%2C%20S%C3%A9n%C3%A9gal!5e0!3m2!1sfr!2sfr!4v1709000000000!5m2!1sfr!2sfr"
                            frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false"
                            tabindex="0"></iframe>

                    </div>

                    <div class="col-md-6">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
                            <form action="{{ route('site.contact.send') }}" method="POST">
                                @csrf
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" name="name" class="form-control" id="name"
                                                placeholder="Votre nom" value="{{ old('name') }}">
                                            <label for="name">Votre nom</label>
                                            @error('name')<small class="text-danger">{{ $message }}</small>@enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="email" name="email" class="form-control" id="email"
                                                placeholder="Votre email" value="{{ old('email') }}">
                                            <label for="email">Votre email</label>
                                            @error('email')<small class="text-danger">{{ $message }}</small>@enderror
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" name="subject" class="form-control" id="subject"
                                                placeholder="Objet" value="{{ old('subject') }}">
                                            <label for="subject">Objet</label>
                                            @error('subject')<small class="text-danger">{{ $message }}</small>@enderror
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" name="message"
                                                placeholder="Laissez un message ici" id="message"
                                                style="height: 150px">{{ old('message') }}</textarea>
                                            <label for="message">Message</label>
                                            @error('message')<small class="text-danger">{{ $message }}</small>@enderror
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3" type="submit">Envoyer le
                                            message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Contact End -->


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
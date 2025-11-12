<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>A Propos - Sen Carrefour Jeunesse</title>
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


            <div class="container-xxl py-5 bg-dark hero-header">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">A Propos de Nous</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                            {{-- <li class="breadcrumb-item"><a href="#">Pages</a></li> --}}
                            <li class="breadcrumb-item text-white active" aria-current="page">A Propos</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>




        <section class="apropos-header text-center">

        </section>

        <!-- Historique -->
        <section class="apropos-section" id="historique">
            <div class="container d-flex flex-wrap align-items-center">
                <div class="apropos-image">
                    <img src="{{ asset('media/19.jpg') }}">
                </div>
                <div class="apropos-text">
                    <h2>Notre Historique</h2>
                    <p>
                        Le XXI siècle est celui de la jeunesse. Jamais dans l’histoire, l’humanité n’a compté autant de
                        jeunes.
                        En Afrique en particulier, elle représente plus de 60% de la population. Cette force est une
                        chance,mais
                        elle porte aussi en elle des défis immenses : chômage endémique, dérèglements climatiques,
                        désorientation
                        scolaire et professionnelle, perte de repères citoyens, inégalités grandissantes.
                        Face à ces réalités, un constat s’impose : les jeunes ont soif de repères, d’opportunités et de
                        cadres
                        solides pour tracer leur chemin. C’est de ce constat qu’est né Sen Carrefour Jeunesse (CJSEN),
                        comme une réponse,
                        mais aussi comme un appel : si nous voulons transformer nos sociétés, nous devons d’abord donner
                        à la
                        jeunesse les moyens de se transformer elle-même.
                    </p>
                </div>
            </div>
        </section>

        <!-- Missions -->
        <section class="apropos-section bg-light" id="missions">
            <div class="container d-flex flex-wrap align-items-center flex-row-reverse">
                <div class="apropos-image">
                    <img src="{{ asset('media/15.jpg') }}" alt="Nos missions">
                </div>
                <div class="apropos-text">
                    <h2>Nos Missions</h2>
                    De cette vision est née notre mission. CJSEN accompagne la jeunesse du Sénégal, d’Afrique et du
                    monde
                    entier, en lui offrant un accès à l’information, à la formation, à l’orientation et à la
                    sensibilisation.
                    Car nous croyons que l’avenir se construit d’abord par l’éducation et l’engagement. Notre rôle est
                    donc
                    simple et essentiel : permettre à chaque jeune de disposer des outils nécessaires pour faire des
                    choix éclairés, devenir un citoyen responsable et contribuer au bien commun.
                </div>
            </div>
        </section>

        <!-- Valeurs -->
        <section class="apropos-section" id="valeurs">
            <div class="container d-flex flex-wrap align-items-center">
                <div class="apropos-image">
                    <img src="{{ asset('media/16.jpg') }}" alt="Nos valeurs">
                </div>
                <div class="apropos-text">
                    <h2>Nos Valeurs</h2>
                    <p>
                        Au cœur de nos actions, nos valeurs sont la charpente de notre engagement :
                        Engagement
                        Responsabilité
                        Partage
                        Exemplarité
                        Citoyenneté active
                        Epanouissement
                        Ces valeurs ne sont pas de simples mots. Elles sont le souffle qui anime chacune de nos actions,
                        le ciment qui lie nos membres et la promesse que nous faisons à la jeunesse.
                    </p>
                </div>
            </div>
        </section>

        <!-- Antennes -->
        <section class="apropos-section bg-light" id="relations">
            <div class="container d-flex flex-wrap align-items-center flex-row-reverse">
                <div class="apropos-image">
                    <img src="{{ asset('images/antennes.jpg') }}" alt="Nos antennes">
                </div>
                <div class="apropos-text">
                    <h2>Relations Extérieures (Nos Antennes)</h2>
                    <p>
                        Présents dans plusieurs régions, nos antennes locales assurent la proximité avec les
                        bénéficiaires
                        et garantissent la mise en œuvre efficace de nos programmes.
                    </p>
                </div>
            </div>
    </section>

        <!-- Partenariats -->

        <section class="partenariats-section" id="partenariats">
        <div class="container text-center">
        <h2 class="section-title">Nos Partenariats</h2>
        <p class="section-intro">
            Nous travaillons main dans la main avec plusieurs institutions, entreprises et organisations
            partageant nos valeurs et notre vision d’un développement inclusif et durable.
        </p>

        <div class="logos-grid">
            <div class="logo-item">
                <img src="{{ asset('images/partenaires/partner1.png') }}" alt="Partenaire 1">
            </div>
            <div class="logo-item">
                <img src="{{ asset('images/partenaires/partner2.png') }}" alt="Partenaire 2">
            </div>
            <div class="logo-item">
                <img src="{{ asset('images/partenaires/partner3.png') }}" alt="Partenaire 3">
            </div>
            <div class="logo-item">
                <img src="{{ asset('images/partenaires/partner4.png') }}" alt="Partenaire 4">
            </div>
            <div class="logo-item">
                <img src="{{ asset('images/partenaires/partner5.png') }}" alt="Partenaire 5">
            </div>
            <div class="logo-item">
                <img src="{{ asset('images/partenaires/partner6.png') }}" alt="Partenaire 6">
            </div>
        </div>
    </div>
</section>

     










        <!-- Témoignages -->
        <section class="apropos-text bg-light" id="temoignages">
            <div class="container">
                {{-- <div class="text-center"> --}}
                    {{-- <h5 class="section-title ff-secondary text-uppercase text-center text-primary fw-normal">
                        Témoignages
                    </h5> --}}
                    {{-- <h1 class="mb-5">Témoignages</h1> --}}

                    <h2 class="text-center mb-4">Témoignages</h2>
                {{-- </div> --}}

                @if($temoignages->count() > 1)
                    <div class="owl-carousel testimonial-carousel">
                        @foreach($temoignages as $temoignage)
                            <div class="testimonial-item bg-transparent border rounded p-4">
                                <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                                <p>{{ $temoignage->message }}</p>
                                <div class="d-flex align-items-center">
                                    <img class="img-fluid flex-shrink-0 rounded-circle"
                                        src="{{ $temoignage->image ? asset('storage/' . $temoignage->image) : asset('media/default-avatar.jpg') }}"
                                        alt="{{ $temoignage->nom }}" style="width: 50px; height: 50px; object-fit: cover;">
                                    <div class="ps-3">
                                        <h5 class="mb-1">{{ $temoignage->nom }}</h5>
                                        <small>{{ $temoignage->profession }}</small>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @elseif($temoignages->count() == 1)
                    <div class="testimonial-item bg-transparent border rounded p-4 text-center mx-auto"
                        style="max-width: 400px;">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>{{ $temoignages->first()->message }}</p>
                        <div class="d-flex align-items-center justify-content-center mt-3">
                            <img class="img-fluid flex-shrink-0 rounded-circle"
                                src="{{ $temoignages->first()->image ? asset('storage/' . $temoignages->first()->image) : asset('media/default-avatar.jpg') }}"
                                alt="{{ $temoignages->first()->nom }}"
                                style="width: 50px; height: 50px; object-fit: cover;">
                            <div class="ps-3 text-left">
                                <h5 class="mb-1">{{ $temoignages->first()->nom }}</h5>
                                <small>{{ $temoignages->first()->profession }}</small>
                            </div>
                        </div>
                    </div>
                @else
                    <p class="text-center text-muted">Aucun témoignage pour le moment.</p>
                @endif
            </div>
        </section>
        {{-- <section class="apropos-section bg-light" id="temoignages">
            <div class="container">
                <h2 class="text-center mb-4">Témoignages</h2>

                @if($temoignages->count() > 1)
                <div class="temoignages">
                    <div class="temoignage">
                        <img src="{{ asset('images/temoin1.jpg') }}" alt="Témoin 1">
                        <p>« Grâce à cette association, j’ai pu lancer mon activité agricole. Une vraie opportunité ! »
                        </p>
                        <h5>– Awa Diop</h5>
                    </div>
                    <div class="temoignage">
                        <img src="{{ asset('images/temoin2.jpg') }}" alt="Témoin 2">
                        <p>« Leur programme de formation m’a permis d’acquérir de nouvelles compétences. »</p>
                        <h5>– Mamadou Ndiaye</h5>
                    </div>
                </div>

                @elseif($temoignages->count() == 1)

                @else
                <p class="text-center text-muted">Aucun témoignage pour le moment.</p>
                @endif
            </div>
        </section> --}}












































































        <!-- Navbar & Hero End -->

        <!--          <div class="container-xxl py-5 bg-white hero-header mb-5">
                <div class="container my-5 py-5">
                    <div class="row align-items-center g-5">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="display-3 text-dark animated slideInLeft">Enjoy Our<br>Delicious Meal</h1>
                            <p class="text-dark animated slideInLeft mb-4 pb-2">Tempor erat elitr rebum at clita. Diam
                                dolor
                                diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet
                                lorem
                                sit clita duo justo magna dolore erat amet</p>
                            <a href="" class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft"
                                style="background-color: #e2ab4d !important;">Book A Table</a>
                        </div>
                        <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                            {{-- <img class="img-fluid" src="{{ asset('site/img/hero.png') }}" alt=""> --}}
                            
                            <img class="img-fluid" src="{{ asset('site/img/hero.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        About Start 
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="img/about-1.jpg">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s" src="img/about-2.jpg" style="margin-top: 25%;">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s" src="img/about-3.jpg">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s" src="img/about-4.jpg">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h5 class="section-title ff-secondary text-start text-primary fw-normal">About Us</h5>
                        <h1 class="mb-4">Welcome to <i class="fa fa-utensils text-primary me-2"></i>Restoran</h1>
                        <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos erat ipsum et lorem et sit, sed stet lorem sit.</p>
                        <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                        <div class="row g-4 mb-4">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                    <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">15</h1>
                                    <div class="ps-4">
                                        <p class="mb-0">Years of</p>
                                        <h6 class="text-uppercase mb-0">Experience</h6>
                                    </div>
                                </div>
                                </div>
                            
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                    <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">50</h1>
                                    <div class="ps-4">
                                        <p class="mb-0">Popular</p>
                                        <h6 class="text-uppercase mb-0">Master Chefs</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="btn btn-primary py-3 px-5 mt-2" href="">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        


        <div class="container-xxl pt-5 pb-3">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Team Members</h5>
                    <h1 class="mb-5">Our Master Chefs</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="img/team-1.jpg" alt="">
                            </div>
                            <h5 class="mb-0">Full Name</h5>
                            <small>Designation</small>
                            <div class="d-flex justify-content-center mt-3">
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="img/team-2.jpg" alt="">
                            </div>
                            <h5 class="mb-0">Full Name</h5>
                            <small>Designation</small>
                            <div class="d-flex justify-content-center mt-3">
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="img/team-3.jpg" alt="">
                            </div>
                            <h5 class="mb-0">Full Name</h5>
                            <small>Designation</small>
                            <div class="d-flex justify-content-center mt-3">
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="img/team-4.jpg" alt="">
                            </div>
                            <h5 class="mb-0">Full Name</h5>
                            <small>Designation</small>
                            <div class="d-flex justify-content-center mt-3">
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        Team End -->


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
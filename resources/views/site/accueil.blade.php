<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Accueil - Sen Carrefour Jeunesse</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('favicon.ico') }}" rel="icon">

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
    <style>
        .gallery-item img {
            width: 100%;
            height: 220px;
            /* Hauteur fixe pour uniformiser */
            object-fit: cover;
            /* Coupe l’image proprement sans déformation */
            border-radius: 10px;
            transition: transform 0.5s ease, opacity 0.5s ease;
        }

        .gallery-item:hover img {
            transform: scale(1.05);
            opacity: 0.9;
        }

        #tab-3 iframe {
            transition: transform 0.4s ease, box-shadow 0.4s ease;
        }

        #tab-3 iframe:hover {
            transform: scale(1.03);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
        }

        #tab-3 p {
            font-size: 0.95rem;
            color: #333;
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
            <div class="container-xxl py-5 bg-white hero-header mb-5 position-relative"
                style="background: url('{{ asset('media/2.jpg') }}') center center / cover no-repeat; min-height: 120vh;">
                <!-- Bande blanche transparente en bas -->
                <div class="position-absolute bottom-0 start-0 w-100"
                    style="background: rgba(0, 129, 116, 0.25); backdrop-filter: blur(6px); padding-top: 20px;">
                    <div class="container" style="margin-bottom: 0px;">
                        <div class="row align-items-center g-5">
                            <div class="col-lg-8 text-center text-lg-start">
                                <h2 class="display-5 text-white text-uppercase animated slideInLeft">
                                    Sen Carrefour Jeunesse
                                </h2>
                                <p class="text-white animated slideInLeft mb-4 pb-2">
                                    CJSEN est le petit colibri de la jeunesse mondiale.
                                    Une organisation née au Sénégal mais qui porte une vision universelle : donner à
                                    chaque jeune les moyens de s’informer, de s’orienter, de s’éduquer,
                                    de s’engager et d’innover.
                                    Nous faisons notre part.
                                    Et nous croyons qu’ensemble, avec la jeunesse du monde entier, nous pouvons bâtir un
                                    avenir plus juste, plus responsable et plus solidaire.
                                </p>
                                {{-- <a href="" class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft"
                                    style="background-color: #e2ab4d !important;">Book A Table</a> --}}
                            </div>

                            <div class="col-lg-4 text-center text-lg-end overflow-hidden">
                                {{-- <img class="img-fluid" src="{{ asset('site/img/hero.png') }}" alt=""> --}}
                                <a href="{{ route('site.apropos') }}"
                                    class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft"
                                    style="background-color: #e2ab4d !important;">
                                    En Savoir Plus
                                </a>
                                {{-- <img class="img-fluid" src="{{ asset('media/1.jpg') }}" alt=""> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- Navbar & Hero End -->


        <!-- Service Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-4">
                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                        <h5 class="section-title ff-secondary text-center text-uppercase text-primary fw-normal">
                            Domaines d'action </h5>
                        <h1 class="mb-5">Nos dernières activités</h1>
                    </div>
                    <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <a href="{{ route('site.domaines') }}#formations" class="text-decoration-none">
                            <div class="service-item rounded pt-3">
                                <div class="p-4 text-center">
                                    <i class="fa fa-3x fa-chalkboard-teacher text-primary mb-4"></i>
                                    <h5>Formations</h5>
                                    <p>Ateliers pratiques et formations pour renforcer les compétences des jeunes.</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <a href="{{ route('site.domaines') }}#causeries" class="text-decoration-none">
                            <div class="service-item rounded pt-3">
                                <div class="p-4 text-center">
                                    <i class="fa fa-3x fa-comments text-primary mb-4"></i>
                                    <h5>Causeries</h5>
                                    <p>Discussions et échanges sur des thématiques sociales et éducatives.</p>
                                </div>
                            </div>

                        </a>
                    </div>

                    <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <a href="{{ route('site.domaines') }}#formations" class="text-decoration-none">
                            <div class="service-item rounded pt-3">
                                <div class="p-4 text-center">
                                    <i class="fa fa-3x fa-users text-primary mb-4"></i>
                                    <h5>Activités de Cohésion</h5>
                                    <p>Renforcer l’esprit d’équipe à travers des sorties et activités collectives.</p>
                                </div>
                            </div>

                        </a>
                    </div>

                    <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <a href="{{ route('site.domaines') }}#sensibilisations" class="text-decoration-none">

                            <div class="service-item rounded pt-3">
                                <div class="p-4 text-center">
                                    <i class="fa fa-3x fa-bullhorn text-primary mb-4"></i>
                                    <h5>Ateliers de Sensibilisation</h5>
                                    <p>Sessions de sensibilisation sur la santé, l’environnement et la citoyenneté.</p>
                                </div>
                            </div>

                        </a>
                    </div>

                    <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.9s">
                        <a href="{{ route('site.domaines') }}#actions" class="text-decoration-none">

                            <div class="service-item rounded pt-3">
                                <div class="p-4 text-center">
                                    <i class="fa fa-3x fa-hand-holding-heart text-primary mb-4"></i>
                                    <h5>Actions Communautaires</h5>
                                    <p>Initiatives solidaires pour soutenir les populations locales.</p>
                                </div>
                            </div>

                        </a>
                    </div>

                    <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="1.1s">
                        <a href="{{ route('site.domaines') }}#projets" class="text-decoration-none">

                            <div class="service-item rounded pt-3">
                                <div class="p-4 text-center">
                                    <i class="fa fa-3x fa-lightbulb text-primary mb-4"></i>
                                    <h5>Projets Spéciaux</h5>
                                    <p>Innovations et projets pilotes pour l’épanouissement de la jeunesse.</p>
                                </div>
                            </div>

                        </a>
                    </div>

                </div>
            </div>
        </div>
        <!-- Service End -->


        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s"
                                    src="{{ asset('media/11.jpg') }}">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s"
                                    src="{{ asset('media/12.jpg') }}">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s"
                                    src="{{ asset('media/13.jpg') }}" style="margin-top: 25%;">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s"
                                    src="{{ asset('media/14.jpg') }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h5 class="section-title ff-secondary text-start text-primary fw-normal">Contexte et Raison
                            d’être</h5>
                        <h1 class="mb-4">Présentation de CJSEN</h1>
                        <p class="mb-4">
                            Le XXI siècle est celui de la jeunesse. Jamais dans l’histoire, l’humanité n’a compté autant
                            de jeunes. En Afrique en particulier, elle représente
                            plus de 60 % de la population. Cette force est une chance, mais elle porte aussi en elle des
                            défis immenses : chômage endémique, dérèglements climatiques, désorientation scolaire et
                            professionnelle, perte de repères
                            citoyens, inégalités grandissantes.
                        </p>
                        <p class="mb-4">
                            Face à ces réalités, un constat s’impose : les jeunes ont soif de repères, d’opportunés et
                            de cadres solides pour tracer leur chemin.
                            C’est de ce constat qu’est né Sen Carrefour Jeunesse (CJSEN), comme une réponse, mais aussi
                            comme un
                            appel : si nous voulons transformer nos
                            sociétés, nous devons d’abord donner à la jeunesse les moyens de se transformer elle-même.
                        </p>
                        <div class="row g-4 mb-4">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                    <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">01
                                    </h1>
                                    <div class="ps-4">
                                        <p class="mb-0">Année</p>
                                        <h6 class="text-uppercase mb-0">d'Experience</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                    <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">50
                                    </h1>
                                    <div class="ps-4">
                                        <p class="mb-0">+</p>
                                        <h6 class="text-uppercase mb-0">Membres</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="btn btn-primary py-3 px-5 mt-2" href="{{ route('site.apropos') }}">Voir Plus</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Menu Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-uppercase text-primary fw-normal">Médias &
                        Blog</h5>
                    <h1 class="mb-5">Nos dernières actualités</h1>
                </div>
                <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
                    <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill"
                                href="#tab-1">
                                <i class="fa fa-newspaper fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <small class="text-body">Articles</small>
                                    <h6 class="mt-n1 mb-0">Blog</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill"
                                href="#tab-2">
                                <i class="fa fa-photo-video fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <small class="text-body">Galerie</small>
                                    <h6 class="mt-n1 mb-0">Images</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill"
                                href="#tab-3">
                                <i class="fa fa-video fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <small class="text-body">Multimédia</small>
                                    <h6 class="mt-n1 mb-0">Vidéos</h6>
                                </div>
                            </a>
                        </li>
                    </ul>

                    <div class="tab-content">

                        <!-- Onglet 1 : Blog -->
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row g-4">
                                @forelse($blogs as $blog)
                                    <div class="col-lg-6">
                                        <div class="d-flex align-items-center">
                                            <img class="flex-shrink-0 img-fluid rounded" src="{{ asset('storage/' . $blog->image) }}"
                                                alt="" style="width: 100px; height: 100px; object-fit: cover;">
                                            <div class="w-100 d-flex flex-column text-start ps-4">
                                                <h5 class="border-bottom pb-2">{{ $blog->title }}</h5>
                                                <small class="fst-italic text-muted">Publié le
                                                    {{ $blog->created_at->format('d M Y') }}</small>
                                                <p class="mb-0">{{ Str::limit($blog->content, 100) }}</p>
                                                <a href=""
                                                    class="text-primary mt-2">
                                                    Lire plus <i class="fa fa-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <div class="text-center py-5">
                                        <p class="text-muted">Aucun article disponible pour le moment.</p>
                                    </div>
                                @endforelse

                                @if($blogs->count() > 0)
                                    <div class="text-center mt-5">
                                        <a href="{{ route('site.blog') }}" class="btn btn-primary py-2 px-4 rounded-pill">
                                            Voir plus de blogs
                                        </a>
                                    </div>
                                @endif
                            </div>
                        </div>

                        <!-- Onglet 2 : Galerie -->
                        <div id="tab-2" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                @forelse($gallery as $item)
                                    <div class="col-lg-4 col-md-6">
                                        <div class="gallery-item position-relative overflow-hidden rounded">
                                            <img class="img-fluid w-100" src="{{ asset('storage/' . $item->image) }}"
                                                alt="{{ $item->title }}">
                                        </div>
                                    </div>
                                @empty
                                    <div class="text-center py-5">
                                        <p class="text-muted">Aucune image disponible pour le moment.</p>
                                    </div>
                                @endforelse
                            </div>

                            @if($gallery->count() > 0)
                                <div class="text-center mt-4">
                                    <a href="{{ route('site.mediatheque')}}" class="btn btn-primary py-2 px-4 rounded-pill">
                                        Voir plus de médias
                                    </a>
                                </div>
                            @endif
                        </div>

                        <!-- Onglet 3 : Vidéos -->
                        <div id="tab-3" class="tab-pane fade show p-0">
                            <div class="row g-4 justify-content-center">
                                @forelse($videos as $video)
                                    <div class="col-lg-4 col-md-6">
                                        <div class="ratio ratio-16x9 rounded overflow-hidden shadow">
                                            <iframe src="{{ $video->embed_url }}" title="{{ $video->title }}"
                                                allowfullscreen></iframe>
                                        </div>
                                        <p class="mt-3 text-center fw-semibold">{{ $video->title }}</p>
                                    </div>
                                @empty
                                    <div class="text-center py-5">
                                        <p class="text-muted">Aucune vidéo disponible pour le moment.</p>
                                    </div>
                                @endforelse

                                @if($videos->count() > 0)
                                    <div class="text-center mt-5">
                                        <a href="{{ route('site.mediatheque') }}"
                                            class="btn btn-primary py-2 px-4 rounded-pill">
                                            Voir plus de vidéos
                                        </a>
                                    </div>
                                @endif
                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </div>

        <!-- Menu End -->


        <!-- Reservation Start -->
        {{-- <div class="container-xxl py-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
            <div class="row g-0">
                <div class="col-md-6">
                    <div class="video">
                        <button type="button" class="btn-play" data-bs-toggle="modal"
                            data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                    </div>
                </div>
                <div class="col-md-6 bg-dark d-flex align-items-center">
                    <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
                        <h5 class="section-title ff-secondary text-start text-primary fw-normal">Reservation</h5>
                        <h1 class="text-white mb-4">Book A Table Online</h1>
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" placeholder="Your Name">
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" placeholder="Your Email">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating date" id="date3" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input" id="datetime"
                                            placeholder="Date & Time" data-target="#date3"
                                            data-toggle="datetimepicker" />
                                        <label for="datetime">Date & Time</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <select class="form-select" id="select1">
                                            <option value="1">People 1</option>
                                            <option value="2">People 2</option>
                                            <option value="3">People 3</option>
                                        </select>
                                        <label for="select1">No Of People</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Special Request" id="message"
                                            style="height: 100px"></textarea>
                                        <label for="message">Special Request</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Book Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- 16:9 aspect ratio -->
                        <div class="ratio ratio-16x9">
                            <iframe class="embed-responsive-item" src="" id="video" allowfullscreen
                                allowscriptaccess="always" allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- Reservation Start -->


        <!-- Team Start -->
        <div class="container-xxl pt-5 pb-3">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">NOTRE EQUIPE</h5>
                    <h1 class="mb-5">Bureau Exécutif</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="{{ asset('media/mounirou.jpeg') }}" alt="">
                            </div>
                            <h5 class="mb-0">Mamadou Mounirou TALL</h5>
                            <small>Président</small>
                            <div class="d-flex justify-content-center mt-3">
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>


                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="{{ asset('media/ABABACAR.jpg') }}" alt="">
                            </div>
                            <h5 class="mb-0">Ababacar BA</h5>
                            <small>Secrétaire Général</small>
                            <div class="d-flex justify-content-center mt-3">
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="{{ asset('media/marianne R.jpg') }}" alt="">
                            </div>
                            <h5 class="mb-0">Mariane Dji Fall Fatim TALL</h5>
                            <small>Trésorière</small>
                            <div class="d-flex justify-content-center mt-3">
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>

                    </div>
                    {{-- <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
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
                    </div> --}}
                </div>
            </div>
        </div>
        <!-- Team End -->


        <!-- Testimonial Start -->
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="text-center">
                    <h5 class="section-title ff-secondary text-uppercase text-center text-primary fw-normal">Témoignages
                    </h5>
                    <h1 class="mb-5">Témoignages de nos membres</h1>
                </div>
                <div class="owl-carousel testimonial-carousel">
                    <div class="testimonial-item bg-transparent border rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore
                            diam</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="{{ asset('media/mounirou.jpeg') }}"
                                style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h5 class="mb-1">Son Nom</h5>
                                <small>Profession</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore
                            diam</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="{{ asset('media/mounirou.jpeg') }}"
                                style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h5 class="mb-1">Son Nom</h5>
                                <small>Profession</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore
                            diam</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="{{ asset('media/mounirou.jpeg') }}"
                                style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h5 class="mb-1">Son Nom</h5>
                                <small>Profession</small>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded p-4">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                        <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore
                            diam</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="{{ asset('media/mounirou.jpeg') }}"
                                style="width: 50px; height: 50px;">
                            <div class="ps-3">
                                <h5 class="mb-1">Son Nom</h5>
                                <small>Profession</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->


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
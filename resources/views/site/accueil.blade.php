<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Accueil - Sen Carrefour Jeunesse</title>
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
    <style>
        .service-item i {
            margin-bottom: 1rem !important;
            /* au lieu de mb-4 */
        }

        .about-section img {
            object-fit: cover;
            height: 250px;
        }

        .blog-preview {
            overflow: hidden;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
        }

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


        /* // TEMOIGNAGES  */
        /* ✅ PALETTE CJSEN */
        :root {
            --cjsen-blue-dark: #003366;
            --cjsen-blue: #006B8F;
            --cjsen-turquoise: #23C1B5;
            --cjsen-yellow: #F6B623;
            --cjsen-orange: #E67C35;
        }

        /* ✅ BOUTON */
        .btn-temoignage {
            background: linear-gradient(135deg, var(--cjsen-blue-dark), var(--cjsen-blue));
            border: none;
            color: white;
            font-weight: 600;
            border-radius: 50px;
            padding: 10px 28px;
            box-shadow: 0 4px 12px rgba(0, 51, 102, 0.35);
            transition: all 0.25s ease;
        }

        .btn-temoignage:hover {
            background: linear-gradient(135deg, var(--cjsen-blue), var(--cjsen-turquoise));
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(0, 107, 143, 0.35);
        }

        /* ✅ BACKDROP FLUO */
        .modal-backdrop.show {
            backdrop-filter: blur(7px);
        }

        /* ✅ ANIMATION DU MODAL */
        .modal.fade .modal-dialog {
            transform: translateY(40px);
            transition: all 0.4s ease-out;
            opacity: 0;
        }

        .modal.fade.show .modal-dialog {
            transform: translateY(0);
            opacity: 1;
        }

        /* ✅ MODAL */
        .modal-content {
            border-radius: 22px;
            border: none;
            overflow: hidden;
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.15);
        }

        /* ✅ HEADER AVEC DÉGRADÉ DU LOGO */
        .modal-header {
            background: linear-gradient(135deg, var(--cjsen-blue-dark), var(--cjsen-orange));
            padding: 20px 24px;
        }

        .modal-header .modal-title {
            color: white;
            font-size: 20px;
            font-weight: 700;
        }

        .modal-header .btn-close {
            filter: brightness(2000);
            opacity: 1;
        }

        /* ✅ INPUTS */
        .modal-body .form-control {
            border-radius: 12px;
            border: 1px solid #d6d6d6;
            padding: 10px 14px;
            transition: 0.2s ease;
        }

        .modal-body .form-control:focus {
            border-color: var(--cjsen-blue);
            box-shadow: 0 0 0 0.2rem rgba(0, 107, 143, 0.2);
        }

        /* ✅ LABELS */
        label.form-label {
            font-weight: 600;
            color: var(--cjsen-blue-dark);
        }

        /* ✅ BUTTON ENVOYER */
        .btn-send {
            background: linear-gradient(135deg, var(--cjsen-blue), var(--cjsen-turquoise));
            border: none;
            font-weight: 600;
            border-radius: 12px;
            transition: 0.2s;
        }

        .btn-send:hover {
            background: linear-gradient(135deg, var(--cjsen-turquoise), var(--cjsen-yellow));
            box-shadow: 0 6px 16px rgba(35, 193, 181, 0.35);
        }

        /* ✅ MOBILE — BOTTOM SHEET STYLE (≤ 576px) */
        @media (max-width: 576px) {

            /* ---- DIALOG ---- */
            .modal-dialog {
                margin: 0 !important;
                position: fixed !important;
                bottom: 0;
                left: 0;
                right: 0;
                width: 100% !important;
                max-width: 100% !important;
                transform: translateY(100%);
                transition: transform 0.35s ease-out;
            }

            .modal.show .modal-dialog {
                transform: translateY(0);
            }

            /* ---- CONTENT ---- */
            .modal-content {
                border-radius: 18px 18px 0 0 !important;
                max-height: 84vh !important;
                /* ✅ encore un peu plus compact */
                overflow-y: auto !important;
                padding-bottom: 55px !important;
            }

            /* ---- HEADER ---- */
            .modal-header {
                padding: 12px 14px !important;
                position: sticky;
                top: 0;
                background: white;
                z-index: 5;
                border-bottom: 1px solid #e6e6e6;
            }

            .modal-header .modal-title {
                font-size: 15px !important;
                font-weight: 700;
            }

            .modal-header .btn-close {
                display: none !important;
            }

            /* ---- BODY ---- */
            .modal-body {
                padding: 12px 16px !important;
            }

            .modal-body .form-control {
                padding: 7px 10px !important;
                font-size: 13.5px !important;
                border-radius: 8px !important;
            }

            /* ---- BOUTON ENVOYER ---- */
            .btn-send {
                font-size: 14px !important;
                padding: 9px !important;
                border-radius: 10px !important;
            }

            /* ---- BOUTON FERMER (bas) ---- */
            .bottom-close-btn {
                position: fixed;
                bottom: 0;
                left: 0;
                right: 0;
                background: white;
                padding: 10px 16px;
                border-top: 1px solid #ddd;
                z-index: 50;
                text-align: center;
            }

            .bottom-close-btn button {
                width: 100%;
                border-radius: 10px;
                padding: 10px;
                font-size: 14px;
                font-weight: 600;
                background: linear-gradient(90deg, var(--cjsen-orange), var(--cjsen-yellow));
                color: white;
                border: none;
            }

            .bottom-close-btn button:hover {
                opacity: 0.9;
            }
        }


        /* ✅ TABLETTE (577px → 992px) */
        @media (min-width: 577px) and (max-width: 992px) {

            .modal-dialog {
                width: 90% !important;
                /* Large but not too large */
                margin: 20px auto !important;
                max-height: 85vh !important;
            }

            .modal-content {
                max-height: 85vh !important;
                overflow-y: auto !important;
                border-radius: 18px !important;
            }

            .modal-header {
                padding: 18px 22px !important;
                position: sticky;
                top: 0;
                z-index: 5;
            }

            .modal-header .modal-title {
                font-size: 18px !important;
            }

            .modal-body {
                padding: 20px !important;
            }

            .modal-body .form-control {
                padding: 10px 14px !important;
                font-size: 15px !important;
            }

            .btn-send {
                font-size: 16px !important;
                padding: 12px !important;
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

            {{-- Hero Section --}}
            <div class="hero-section d-flex flex-column justify-content-end text-center text-white position-relative">

                <!-- Overlay flouté en bas -->
                <div class="hero-overlay"></div>

                <!-- Contenu principal -->
                <div class="container hero-content position-relative z-2">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <div class="hero-overlay"></div>
                            <h1 class="display-4 fw-bold text-uppercase mb-2 animate__animated animate__fadeInDown">
                                Sen Carrefour Jeunesse
                            </h1>
                            <p class="lead text-white-50 mb-2 animate__animated animate__fadeInUp">
                                CJSEN est le petit colibri de la jeunesse mondiale 🌍<br>
                                Une organisation née au Sénégal mais qui porte une vision universelle :
                                donner à chaque jeune les moyens de s’informer, de s’orienter, de s’éduquer, de
                                s’engager et d’innover.
                            </p>
                            <a href="{{ route('site.apropos') }}"
                                class="btn btn-hero btn-lg rounded-pill shadow-lg animate__animated animate__fadeInUp">
                                En Savoir Plus
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar & Hero End -->


        <!-- Service Start -->
        <div class="container-xxl py-4">
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
        <div class="container-xxl py-4 about-section">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" loading="lazy" data-wow-delay="0.1s"
                                    src="{{ asset('media/11.jpg') }}">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75 wow zoomIn" loading="lazy" data-wow-delay="0.5s"
                                    src="{{ asset('media/12.jpg') }}">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" loading="lazy" data-wow-delay="0.3s"
                                    src="{{ asset('media/13.jpg') }}" style="margin-top: 25%;">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-100 wow zoomIn" loading="lazy" data-wow-delay="0.7s"
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
        <div class="container-xxl py-4">
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
                                            <img class="flex-shrink-0 img-fluid rounded" loading="lazy"
                                                src="{{ asset('storage/' . $blog->image) }}" alt=""
                                                style="width: 100px; height: 100px; object-fit: cover;">
                                            <div class="w-100 d-flex flex-column text-start ps-4">
                                                <h5 class="border-bottom pb-2">{{ $blog->title }}</h5>
                                                <small class="fst-italic text-muted">Publié le
                                                    {{ $blog->created_at->format('d M Y') }}</small>
                                                <p class="mb-0">{{ Str::limit($blog->content, 100) }}</p>
                                                <a href="{{ route('blog.show', $blog->id) }}" class="text-primary mt-2">
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
                                        <div class="gallery-item position-relative overflow-hidden rounded" loading="lazy">
                                            <img class="img-fluid w-100" src="{{ asset('storage/' . $item->image) }}"
                                                alt="{{ $item->title }}">
                                            <div class="card-body text-center">
                                                <h6 class="card-title">{{ $item->title }}</h6>
                                            </div>
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
                                    <a href="{{ route('site.mediatheque') }}#tab-photos"
                                        class="btn btn-primary py-2 px-4 rounded-pill">Voir plus de photos</a>
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
                                        <a href="{{ route('site.mediatheque') }}#tab-videos"
                                            class="btn btn-primary py-2 px-4 rounded-pill">Voir plus de vidéos</a>
                                    </div>
                                @endif
                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </div>

        <!-- Menu End -->

        <!-- Team Start -->
        <div class="container-xxl pt-5 pb-3">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">NOTRE EQUIPE</h5>
                    <h1 class="mb-5">Bureau Exécutif</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" loading="lazy" src="{{ asset('media/mounirou.jpeg') }}" alt="">
                            </div>
                            <h5 class="mb-0">Mamadou Mounirou TALL</h5>
                            <small>Président</small>
                            <div class="d-flex justify-content-center mt-3">
                                {{-- <a class="btn btn-square btn-primary mx-1" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                                --}}
                            </div>
                        </div>


                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" loading="lazy" src="{{ asset('media/ABABACAR.jpg') }}" alt="">
                            </div>
                            <h5 class="mb-0">Ababacar BA</h5>
                            <small>Secrétaire Général</small>
                            <div class="d-flex justify-content-center mt-3">
                                {{-- <a class="btn btn-square btn-primary mx-1" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                                --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" loading="lazy" src="{{ asset('media/marianne.jpg') }}" alt="">
                            </div>
                            <h5 class="mb-0">Mariane Dji Fall Fatim TALL</h5>
                            <small>Trésorière</small>
                            <div class="d-flex justify-content-center mt-3">
                                {{-- <a class="btn btn-square btn-primary mx-1" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                                --}}
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" loading="lazy" src="{{ asset('media/Diam_Pathe.jpg') }}" alt="">
                            </div>
                            <h5 class="mb-0">Diam Pathé SALL</h5>
                            <small>Commisaire aux Comptes</small>
                            <div class="d-flex justify-content-center mt-3">
                                {{-- <a class="btn btn-square btn-primary mx-1" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                                --}}
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->


        <!-- ======================= Témoignages ======================= -->

        <div class="container-xxl py-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="text-center">
                    <h5 class="section-title ff-secondary text-uppercase text-center text-primary fw-normal">Témoignages
                    </h5>
                    <h1 class="mb-5">Témoignages de nos membres</h1>
                </div>

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

            <div class="text-center mt-4">
                <button class="btn btn-temoignage px-4 py-2" data-bs-toggle="modal" data-bs-target="#temoignageModal">
                    ✍️ Laisser un témoignage
                </button>
            </div>

            <div class="modal fade" id="temoignageModal" tabindex="-1" aria-labelledby="temoignageModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">

                        <div class="modal-header">
                            <h5 class="modal-title" id="temoignageModalLabel">
                                ✍️ Ajouter un témoignage
                            </h5>
                            <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal"></button>
                        </div>

                        <div class="modal-body p-4">

                            @if(session('success'))
                                <div class="alert alert-success mb-3">
                                    ✅ Votre témoignage a été envoyé et sera publié après validation.
                                </div>
                            @endif

                            <form action="{{ route('temoignages.store.user') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="mb-3">
                                    <label class="form-label">Nom *</label>
                                    <input type="text" name="nom" class="form-control" required>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Profession (optionnel)</label>
                                    <input type="text" name="profession" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Message *</label>
                                    <textarea name="message" rows="4" class="form-control" required></textarea>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Image *</label>
                                    <input type="file" name="image" class="form-control" required>
                                </div>

                                <button class="btn btn-primary w-100 py-2 mt-3 rounded-3 btn-send">
                                    ✅ Envoyer le témoignage
                                </button>

                            </form>

                        </div>
                        <div class="bottom-close-btn d-block d-sm-none">
                            <button type="button" data-bs-dismiss="modal">Fermer</button>
                        </div>

                    </div>
                </div>
            </div>

        </div>

        <!-- ======================= Fin Témoignages ======================= -->


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
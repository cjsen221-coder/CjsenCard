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
    <link href="{{ asset('site/css/accueil.css') }}" rel="stylesheet">


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
            <div
                class="hero-section-modern d-flex flex-column justify-content-end text-center text-white position-relative">

                <!-- Overlay moderne -->
                <div class="hero-overlay-modern"></div>

                <!-- Contenu -->
                <div class="container hero-content-modern position-relative z-2">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">

                            <h1 class="hero-title animate__animated animate__fadeInDown">
                                Sen Carrefour Jeunesse
                            </h1>

                            <p class="hero-text animate__animated animate__fadeInUp">
                                CJSEN est le petit colibri de la jeunesse mondiale.
                            </p>

                            <p class="hero-text descript animate__animated animate__fadeInUp">
                                Une organisation née au Sénégal mais qui porte une vision universelle :
                                donner à chaque jeune les moyens de s’informer, de s’orienter...
                                {{-- de s’éduquer, --}}
                                {{-- de s’engager et d’innover. --}}
                            </p>

                            <a href="{{ route('site.apropos') }}"
                                class="btn btn-hero-modern btn-lg rounded-pill shadow-lg animate__animated animate__fadeInUp">
                                En Savoir Plus
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->

        <!-- About Start -->
        <div class="container-xxl py-5 about-section">
            <div class="container-fluid">
                <div class="row g-5 align-items-center">
                    <!-- Title -->
                    <div class="text-center">
                        <h5 class="section-title ff-secondary text-uppercase fw-normal text-cjsen-primary">
                            Contexte & Raison d’être
                        </h5>
                        <h1 class="fw-bold text-cjsen-blue-dark">Présentation de CJSEN</h1>
                    </div>

                    <!-- Bloc Images Modernisé -->
                    <div class="col-lg-6">
                        <div class="about-gallery">

                            <div class="gallery-item tall">
                                <img src="{{ asset('media/9.jpg') }}" loading="lazy"
                                    class="img-fluid rounded wow zoomIn">
                            </div>

                            <div class="gallery-item">
                                <img src="{{ asset('media/12.jpg') }}" loading="lazy"
                                    class="img-fluid rounded wow zoomIn">
                            </div>

                            <div class="gallery-item">
                                <img src="{{ asset('media/13.jpg') }}" loading="lazy"
                                    class="img-fluid rounded wow zoomIn">
                            </div>

                            {{-- <div class="gallery-item tall">
                                <img src="{{ asset('media/14.jpg') }}" loading="lazy"
                                    class="img-fluid rounded wow zoomIn">
                            </div> --}}

                        </div>
                    </div>

                    <!-- Bloc Texte -->
                    <div class="col-lg-6">


                        <p class="mb-4"> Le XXI siècle est celui de la jeunesse. Jamais dans l’histoire, l’humanité n’a
                            compté autant de jeunes. En Afrique en particulier, elle représente plus de 60 % de la
                            population. Cette force est une chance, mais elle porte aussi en elle des défis immenses :
                            chômage endémique, dérèglements climatiques, désorientation scolaire et professionnelle,
                            perte de repères citoyens, inégalités grandissantes. </p>
                        <p class="mb-4"> Face à ces réalités, un constat s’impose : les jeunes ont soif de repères,
                            d’opportunés et de cadres solides pour tracer leur chemin. C’est de ce constat qu’est né Sen
                            Carrefour Jeunesse (CJSEN), comme une réponse, mais aussi comme un appel : si nous voulons
                            transformer nos sociétés, nous devons d’abord donner à la jeunesse les moyens de se
                            transformer elle-même. </p>

                        <div class="row g-4 mb-4">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center border-start border-5 border-cjsen px-3">
                                    <h1 class="flex-shrink-0 display-5 text-cjsen-primary mb-0"
                                        data-toggle="counter-up">
                                        01
                                    </h1>
                                    <div class="ps-4">
                                        <p class="mb-0">Année</p>
                                        <h6 class="text-uppercase mb-0">d'Expérience</h6>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="d-flex align-items-center border-start border-5 border-cjsen px-3">
                                    <h1 class="flex-shrink-0 display-5 text-cjsen-primary mb-0">
                                        <span data-toggle="counter-up">50</span>+
                                    </h1>
                                    <div class="ps-4">
                                        <p class="mb-0">Membres</p>
                                        <h6 class="text-uppercase mb-0">Engagés</h6>
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

        <!-- Service Start -->
        <div class="container-xxl py-5">
            <div class="container-fluid apres-nav">

                <!-- Title -->
                <div class="text-center mb-5">
                    <h5 class="section-title ff-secondary text-uppercase fw-normal text-cjsen-primary">
                        Domaines d’action
                    </h5>
                    <h1 class="fw-bold text-cjsen-blue-dark">Nos dernières activités</h1>
                </div>

                <div class="row g-4">

                    <!-- Bloc activité -->
                    @php
                        $services = [
                            [
                                'icon' => 'fa-chalkboard-teacher',
                                'title' => 'Formations',
                                'text' => 'Ateliers pratiques pour renforcer les compétences des jeunes.',
                                'link' => 'formations',
                            ],
                            [
                                'icon' => 'fa-comments',
                                'title' => 'Causeries',
                                'text' => 'Discussions sur des thématiques sociales et éducatives.',
                                'link' => 'causeries',
                            ],
                            [
                                'icon' => 'fa-users',
                                'title' => 'Activités de Cohésion',
                                'text' => 'Renforcer l’esprit d’équipe à travers des activités collectives.',
                                'link' => 'cohesions',
                            ],
                            [
                                'icon' => 'fa-bullhorn',
                                'title' => 'Ateliers de Sensibilisation',
                                'text' => 'Sessions sur la santé, l’environnement et la citoyenneté.',
                                'link' => 'sensibilisations',
                            ],
                            [
                                'icon' => 'fa-hand-holding-heart',
                                'title' => 'Actions Communautaires',
                                'text' => 'Initiatives solidaires pour soutenir les populations locales.',
                                'link' => 'actions',
                            ],
                            [
                                'icon' => 'fa-lightbulb',
                                'title' => 'Projets Spéciaux',
                                'text' => 'Innovations et projets pilotes pour la jeunesse.',
                                'link' => 'projets',
                            ],
                        ];
                    @endphp

                    @foreach ($services as $index => $service)
                        <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="{{ 0.1 + ($index * 0.2) }}s">
                            <a href="{{ route('site.domaines') }}#{{ $service['link'] }}" class="service-link">

                                <div class="service-card text-center">
                                    <i class="fa fa-3x {{ $service['icon'] }} service-icon mb-3"></i>
                                    <h5 class="mb-2">{{ $service['title'] }}</h5>
                                    <p class="service-text">{{ $service['text'] }}</p>
                                </div>

                            </a>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
        <!-- Service End -->


        <!-- Blog Section Start -->
        <div class="container-xxl py-5">
            <div class="container-fluid">
                <!-- Title -->
                <div class="text-center mb-5">
                    <h5 class="section-title ff-secondary text-uppercase fw-normal text-cjsen-primary">Blog</h5>
                    <h1 class="fw-bold text-cjsen-blue-dark">Nos derniers articles</h1>
                </div>

                <div class="row g-4">
                    @forelse($blogs as $blog)
                        <div class="col-lg-6">
                            <div class="d-flex align-items-start border rounded p-3 hover-shadow transition">
                                <img class="flex-shrink-0 img-fluid rounded" loading="lazy"
                                    src="{{ asset('storage/' . $blog->image) }}" alt=""
                                    style="width: 80px; height: 80px; object-fit: cover;">
                                <div class="w-100 d-flex flex-column text-start ps-3">
                                    <h5 class="border-bottom pb-1">{{ $blog->title }}</h5>
                                    <small class="fst-italic text-muted">Publié le
                                        {{ $blog->created_at->format('d M Y') }}</small>
                                    <p class="mb-1">{{ Str::limit($blog->content, 100) }}</p>
                                    <a href="{{ route('blog.show', $blog->id) }}"
                                        class="text-cjsen-primary fw-semibold mt-1">
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
                        <div class="text-center mt-4">
                            <a href="{{ route('site.blog') }}" class="btn btn-cjsen py-2 px-4 rounded-pill">
                                Voir plus de blogs
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <!-- Blog Section End -->


        <!-- Media Section Start -->
        <div class="container-xxl py-5">
            <div class="container-fluid">
                <!-- Title -->
                <div class="text-center mb-5">
                    <h5 class="section-title ff-secondary text-uppercase fw-normal text-cjsen-primary">Médias</h5>
                    <h1 class="fw-bold text-cjsen-blue-dark">Galerie & Vidéos</h1>
                </div>

                <!-- Galerie -->
                <div class="swiper gallery-swiper mb-5">
                    <div class="swiper-wrapper">
                        @forelse($gallery as $item)
                            <div class="swiper-slide">
                                <div class="gallery-card hover-shadow transition">
                                    <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}"
                                        class="gallery-img">
                                    <div class="overlay d-flex align-items-center justify-content-center">
                                        <h6 class="text-center" style="padding-top: 10px;">{{ $item->title }}</h6>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="text-center py-5">
                                <p class="text-muted">Aucune image disponible pour le moment.</p>
                            </div>
                        @endforelse
                    </div>

                    {{-- <!-- Navigation -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div> --}}

                    <!-- Pagination (optionnel) -->
                    {{-- <div class="swiper-pagination" style="margin-bottom: 35px"></div> --}}

                    @if($gallery->count() > 0)
                        <div class="text-center mt-4">
                            <a href="{{ route('site.mediatheque') }}#tab-photos"
                                class="btn btn-cjsen py-2 px-4 rounded-pill">
                                Voir plus de photos
                            </a>
                        </div>
                    @endif
                </div>

                <!-- Vidéos -->
                <div class="row g-4 justify-content-center">
                    @forelse($videos as $video)
                        <div class="col-lg-4 col-md-6">
                            <div class="ratio ratio-16x9 rounded shadow-sm video-card overflow-hidden">
                                <iframe src="{{ $video->embed_url }}" title="{{ $video->title }}" allowfullscreen></iframe>
                                <div class="video-overlay d-flex align-items-center justify-content-center">
                                    <p class="text-white fw-semibold text-center px-2">{{ $video->title }}</p>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="text-center py-5">
                            <p class="text-muted">Aucune vidéo disponible pour le moment.</p>
                        </div>
                    @endforelse

                    @if($videos->count() > 0)
                        <div class="text-center mt-5">
                            <a href="{{ route('site.mediatheque') }}#tab-videos"
                                class="btn btn-cjsen py-2 px-4 rounded-pill">
                                Voir plus de vidéos
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <!-- Media Section End -->


        <!-- Team Start -->
        <div class="container-xxl pt-5 pb-3">
            <div class="container-fluid">
                <div class="row g-4 justify-content-center">
                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                        <h5 class="section-title ff-secondary text-center text-primary fw-normal">NOTRE EQUIPE</h5>
                        <h1 class="">Bureau Exécutif</h1>
                    </div>

                    <!-- Membre 1 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="profile-card-2 text-center">
                            <img src="{{ asset('media/mounirou.jpeg') }}" class="img img-responsive"
                                alt="Mamadou Mounirou TALL">
                            <div class="profile-name">Mamadou Mounirou TALL</div>
                            <div class="profile-username">Président</div>
                            <div class="profile-icons mt-2">
                                {{-- <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin"></i></a> --}}
                            </div>
                        </div>
                    </div>

                    <!-- Membre 2 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="profile-card-2 text-center">
                            <img src="{{ asset('media/ABABACAR.jpg') }}" class="img img-responsive" alt="Ababacar BA">
                            <div class="profile-name">Ababacar BA</div>
                            <div class="profile-username">Secrétaire Général</div>
                            <div class="profile-icons mt-2">
                                {{-- <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin"></i></a> --}}
                            </div>
                        </div>
                    </div>

                    <!-- Membre 3 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="profile-card-2 text-center">
                            <img src="{{ asset('media/marianne.jpg') }}" class="img img-responsive"
                                alt="Mariane Dji Fall Fatim TALL">
                            <div class="profile-name">Mariane Dji Fall Fatim TALL</div>
                            <div class="profile-username">Trésorerie / Porte-Parole</div>
                            <div class="profile-icons mt-2">
                                {{-- <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin"></i></a> --}}
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <!-- Team End -->


            <!-- ======================= Témoignages ======================= -->


            <div class="container-xxl py-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="container-fluid">
                    <div class="text-center">
                        <h5 class="section-title ff-secondary text-uppercase text-center text-primary fw-normal">
                            Témoignages
                        </h5>
                        <h1 class="mb-5">Témoignages de nos membres</h1>
                    </div>


                    @if($temoignages->count() > 1)
                        <div class="owl-carousel testimonial-carousel owl-theme">
                            @foreach($temoignages as $temoignage)
                                <div class="testimonial-item bg-transparent border rounded p-4 text-center">
                                    <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                                    <p>{{ $temoignage->message }}</p>
                                    <div class="d-flex align-items-center justify-content-center mt-3">
                                        <img class="img-fluid flex-shrink-0 rounded-circle"
                                            src="{{ $temoignage->image ? asset('storage/' . $temoignage->image) : asset('media/default-avatar.jpg') }}"
                                            alt="{{ $temoignage->nom }}" style="width:50px; height:50px; object-fit:cover;">
                                        <div class="ps-3 text-left">
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
                                    style="width:50px; height:50px; object-fit:cover;">
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
                    <button class="btn btn-temoignage px-4 py-2" data-bs-toggle="modal"
                        data-bs-target="#temoignageModal">
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


        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const swiperContainer = document.querySelector('.gallery-swiper');
                const slides = swiperContainer.querySelectorAll('.swiper-slide');

                const slidesPerView = 3;

                // Cloner les slides si moins que slidesPerView
                if (slides.length < slidesPerView) {
                    const swiperWrapper = swiperContainer.querySelector('.swiper-wrapper');
                    slides.forEach(slide => {
                        const clone = slide.cloneNode(true);
                        swiperWrapper.appendChild(clone);
                    });
                }

                // Initialiser Swiper
                const swiper = new Swiper('.gallery-swiper', {
                    slidesPerView: slidesPerView,
                    spaceBetween: 20,
                    loop: true,
                    autoplay: {
                        delay: 2500,
                        disableOnInteraction: false,
                    },
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                    },
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true,
                    },
                    breakpoints: {
                        320: { slidesPerView: 1 },
                        576: { slidesPerView: 2 },
                        992: { slidesPerView: 3 },
                    }
                });
            });
        </script>

        <script>
            $(document).ready(function () {
                $('.testimonial-carousel').owlCarousel({
                    loop: true,
                    margin: 20,
                    nav: false,
                    dots: true,
                    autoplay: true,
                    autoplayTimeout: 4000,
                    autoplayHoverPause: true,
                    responsive: {
                        0: { items: 1 },
                        768: { items: 2 },
                        992: { items: 3 }
                    }
                });
            });
        </script>

        <!-- Template Javascript -->
        <script src="{{ asset('site/js/main.js') }}"></script>
</body>

</html>
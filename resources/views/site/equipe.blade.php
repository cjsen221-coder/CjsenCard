<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Dispositif Organisationnel - Sen Carrefour Jeunesse</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('images/logo-cjsen.jpg') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

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

    <style>
        /* 🌟 Liste des missions */
        .missions-list li {
            position: relative;
            padding-left: 1.5rem;
            transition: all 0.3s ease;
        }

        .missions-list li::before {
            content: "🌟";
            position: absolute;
            left: 0;
            top: 0;
            font-size: 1rem;
        }

        .missions-list li:hover {
            transform: translateX(5px);
            color: #0d6efd;
        }

        /* 🌟 Bloc des missions centré verticalement */
        .missions {
            display: flex;
            flex-direction: column;
            justify-content: center;
            height: 100%;
        }

        /* 🌟 Effet d’animation sur les adjoints */
        .adjoint-card img {
            transition: transform 0.3s;
        }

        .img-fluid:hover,  .adjoint-card img:hover {
            transform: scale(1.05);
        }

        /* 🌟 Style des adjoints */
        .adjoint-card {
            width: 45%;
            text-align: center;
        }

        .adjoint-card small {
            display: block;
            line-height: 1.2;
        }

        .adjoint-card .adjoint-name {
            font-weight: bold;
            font-size: 0.75rem;
            color: #212529;
        }

        .adjoint-card .adjoint-poste {
            font-size: 0.65rem;
            margin-top: 5px;
            color: #6c757d;
        }

        /* 🌟 Conteneur des adjoints */
        .adjoints-container {
            display: flex;
            justify-content: center;
            align-items: end;
            flex-wrap: wrap;
            gap: 8px;
            margin-top: 8px;
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

            <div class="container-xxl py-5 bg-dark hero-header">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Dispositif Organisationnel</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                            {{-- <li class="breadcrumb-item"><a href="#">Pages</a></li> --}}
                            <li class="breadcrumb-item text-white active" aria-current="page">Dispositif Organisationnel
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->

        @php
            $bureauOperationnelSections = [
                'Comité Directeur' => [
                    [
                        'poste' => 'Président',
                        'nomCellule' => 'Présidence',
                        'membre' => ['nom' => 'Mamadou Mounirou Tall', 'photo' => 'media/mounirou.jpeg'],
                        'missions' => [
                            'Définir et piloter la vision stratégique de l’association.',
                            'Représenter CJSEN auprès des partenaires et institutions.',
                            'Nommer et révoquer les coordonnateurs de cellules sur consultation du Bureau exécutif.',
                            'Superviser les décisions majeures et garantir la discipline, la transparence et l’éthique.',
                            'Assurer la fonction de porte-parole ou la déléguer à un membre compétent.'
                        ],
                        'adjoints' => []
                    ],
                    [
                        'poste' => 'Secrétaire Général',
                        'nomCellule' => 'Secrétairiat Général',
                        'membre' => ['nom' => 'Ababacar BA', 'photo' => 'media/ABABACAR.jpg'],
                        'missions' => [
                            'Assurer la gestion administrative et la correspondance officielle.',
                            'Préparer les rapports et comptes rendus des réunions.',
                            'Recevoir les démissions et transmettre les informations au Président et au Bureau exécutif.'
                        ],
                        'adjoints' => [
                            ['nom' => 'Moustapha NDIAYE', 'poste' => 'SG Adjoint', 'photo' => 'media/moustapha.jpg'],
                            ['nom' => 'Arame THIANE', 'poste' => 'SG Seconde Adjointe', 'photo' => 'media/ARAME o.jpg']
                        ]
                    ],
                    [
                        'poste' => 'Trésorerie / Porte-Parole',
                        'nomCellule' => 'Trésorière / Porte-Parole',
                        'membre' => ['nom' => 'Mariane Dji Fall Fatim TALL', 'photo' => 'media/marianne.jpg'],
                        'missions' => [
                            'Gérer les ressources financières et les budgets.',
                            'Superviser les recettes, dépenses et rapports financiers.',
                            'Collaborer avec le Commissaire aux comptes pour le contrôle et la transparence financière.'
                        ],
                        'adjoints' => [
                            ['nom' => 'Yaye Adama SY', 'poste' => 'Trésorière adjointe', 'photo' => 'media/marianne.jpg']
                        ]
                    ],
                    [
                        'poste' => 'Commissaire aux Comptes',
                        'nomCellule' => 'Commissariat aux Comptes',
                        'membre' => ['nom' => 'Diampathé Sall', 'photo' => 'media/DIAM.jpg'],
                        'missions' => [
                            'Contrôler annuellement les comptes et présenter un rapport à l’Assemblée Générale.',
                            'Vérifier la conformité des transactions financières avec le règlement intérieur.'
                        ],
                        'adjoints' => []
                    ],
                    [
                        'poste' => 'Coordonnateur',
                        'nomCellule' => 'Cellule de l’Initiative, de la Planification et de la Stratégie (CIPS)',
                        'membre' => ['nom' => 'Mame Fatou Mbaye Tall', 'photo' => 'media/MAME_FATOU.png'],
                        'missions' => [
                            'Orienter la vision stratégique et coordonner les plans d’action.',
                            'Définir les objectifs à court, moyen et long terme.',
                            'Concevoir et mettre à jour le REPAP et les feuilles de route annuelles.',
                            'Identifier les opportunités et partenariats stratégiques.',
                            'Analyser le contexte national et international pour guider les actions.',
                            'Proposer des stratégies innovantes adaptées aux besoins des jeunes.'
                        ],
                        'adjoints' => [
                            ['nom' => 'Ibrahima Dieng', 'poste' => 'Adjoint', 'photo' => 'media/ibrahima.jpg']
                        ]
                    ],
                    [
                        'poste' => 'Coordonnateur',
                        'nomCellule' => 'Cellule de la Formation, de l’Éducation Citoyenne et du Leadership (CFEL)',
                        'membre' => ['nom' => 'Youssoupha Fall', 'photo' => 'media/Youssoupha_FALL.png'],
                        'missions' => [
                            'Renforcer les compétences, l’esprit citoyen et le leadership des jeunes.',
                            'Concevoir et organiser des sessions de formation et ateliers pratiques.',
                            'Promouvoir l’éducation citoyenne et la culture du leadership.',
                            'Développer des programmes éducatifs adaptés aux différents groupes cibles.',
                            'Sensibiliser les jeunes sur leurs droits et devoirs dans la société.',
                            'Évaluer l’impact des actions et ajuster les programmes.'
                        ],
                        'adjoints' => [
                            ['nom' => 'Mouhamed Rassoul Gueye', 'poste' => 'Adjoint', 'photo' => 'media/Rassoul_1.png']
                        ]
                    ],
                    [
                        'poste' => 'Coordonnateur',
                        'nomCellule' => 'Cellule du Numérique et de l\'Innovation Digitale (CNID)',
                        'membre' => ['nom' => 'Samba Dramé', 'photo' => 'media/Samba.png'],
                        'missions' => [
                            'Développer et gérer les outils numériques de l’association pour faciliter la communication, la gestion interne et la
                                                 diffusion de l’information.',
                            'Développer et maintenir les plateformes numériques (site web, bases de données, applications internes).',
                            'Assurer la sécurité, la performance et la mise à jour des outils numériques.',
                            'Collecter, centraliser et structurer l’information pour la rendre accessible aux membres et aux autres cellules.',
                            'Fournir un support technique aux autres cellules pour l’utilisation des outils numériques.',
                            'Proposer des innovations digitales pour améliorer l’efficacité des projets et la visibilité globale.',
                            'Collaboration : Travailler avec la Cellule Communication et Visibilité pour optimiser la diffusion des contenus.'
                        ],
                        'adjoints' => [
                            ['nom' => 'Khadidiatou Diassé', 'poste' => 'Adjointe', 'photo' => 'media/adjia.jpg']
                        ]
                    ],
                    [
                        'poste' => 'Coordonnatrice',
                        'nomCellule' => 'Cellule de la Communication et de la Visibilité (CCV)',
                        'membre' => ['nom' => 'Ndeye Fatim Seck', 'photo' => 'media/FATIM.jpg'],
                        'missions' => [
                            'Valoriser l’image de CJSEN, gérer la communication externe et interne, etpromouvoir les projets.',
                            'Concevoir, produire et diffuser des contenus éditoriaux et promotionnels (articles, vidéos, newsletters, visuels).',
                            'Gérer la stratégie, le contenu et l’animation des réseaux sociaux pour garantir une visibilité cohérente et professionnelle.',
                            'Superviser la communication lors des événements, activités et projets.',
                            'Maintenir les relations avec les médias et partenaires pour accroître la notoriété.',
                            'Garantir que toutes les communications respectent la vision, la mission, les valeurs et le règlement intérieur.',
                            'Collaboration : Travailler avec la Cellule Numérique pour l’optimisation technique et la diffusion efficace des contenus.'
                        ],
                        'adjoints' => [
                            ['nom' => 'Mody Sakho', 'poste' => 'Adjoint', 'photo' => 'media/MODY_SAKho.png']
                        ]
                    ],
                    [
                        'poste' => 'Coordonnateur',
                        'nomCellule' => 'Cellule de Gestion et du Pilotage des Projets (CGPP)',
                        'membre' => ['nom' => 'Mame Mbaye Niang', 'photo' => 'media/Mame_Mbaye.jpg'],
                        'missions' => [
                            'Mettre en œuvre les projets et veiller à leur bonne exécution.',
                            'Planifier et organiser les activités et projets selon la feuille de route.',
                            'Assurer la coordination entre les différentes cellules pour chaque projet.',
                            'Suivre le budget et les ressources allouées.',
                            'Identifier les risques et proposer des solutions pour leur mitigation.',
                            'Garantir le respect des délais et des standards de qualité.'
                        ],
                        'adjoints' => [
                            ['nom' => 'Marie Sarr', 'poste' => 'Adjointe', 'photo' => 'media/marie.jpg']
                        ]
                    ],
                    [
                        'poste' => 'Coordonnateur',
                        'nomCellule' => 'Cellule de Suivi et de l’Évaluation (CSE)',
                        'membre' => ['nom' => 'Thierno Abou Tall', 'photo' => 'media/THIERNO-.png'],
                        'missions' => [
                            'Mesurer l’impact des actions et proposer des ajustements pour optimiser les résultats.',
                            'Définir des indicateurs de performance pour chaque projet et action.',
                            'Collecter et analyser les données pour évaluer les résultats.',
                            'Produire des rapports réguliers pour le Comité directeur et le Bureau exécutif.',
                            'Recommander des améliorations et ajustements aux actions en cours.',
                            'Capitaliser les bonnes pratiques et partager l’expérience.'
                        ],
                        'adjoints' => [
                            ['nom' => 'Yaye Adama Sy', 'poste' => 'Adjointe', 'photo' => 'media/YAYE ADAMA.jpg']
                        ]
                    ],
                    [
                        'poste' => 'Coordonnatrice',
                        'nomCellule' => 'Cellule Partenariats et Relations Extérieures (CPRE)',
                        'membre' => ['nom' => 'Léontine Maïté', 'photo' => 'img/team-7.jpg'],
                        'missions' => [
                            'Développer et maintenir des partenariats stratégiques et institutionnels.',
                            'Identifier et engager des partenaires publics, privés et associatifs.',
                            'Négocier des collaborations et conventions avec des institutions nationales et internationales.',
                            'Suivre les relations existantes et assurer un reporting régulier.',
                            'Participer à des forums, conférences et événements pour représenter CJSEN.',
                            'Valoriser l’image et le rayonnement de l’association à l’extérieur.'
                        ],
                        'adjoints' => [
                            ['nom' => 'Alimatou Yague BA', 'poste' => 'Adjointe', 'photo' => 'img/team-7.jpg']
                        ]
                    ]
                ]
            ];
        @endphp

        <section id="executif" class="section bg-gray-100 py-5">
            <div class="container">
                <div class="text-center mb-5">
                    <h1>Comité Directeur</h1>
                    <p class="lead">Présentation complète des membres du Comité Directeur avec leurs missions et rôles
                    </p>
                </div>

                @foreach($bureauOperationnelSections as $sectionTitle => $membres)
                    @foreach($membres as $poste)
                        <div class="team-block mb-5 p-4 rounded-3 shadow-sm bg-white">
                            {{-- Nom de la cellule / poste --}}
                            <h4 class="poste-title text-primary border-start border-4 border-primary ps-3 mb-4 fw-bold">
                                {{ $poste['nomCellule'] ?? $poste['poste'] }}
                            </h4>

                            <div class="row align-items-CENTER">

                                {{-- PHOTO + COORDONNATEUR + ADJOINTS --}}
                                <div
                                    class="col-lg-5 col-md-4 text-center mb-3 mb-md-0 d-flex flex-column justify-content-between">
                                    <div>
                                        <img src="{{ $poste['membre']['photo'] }}"
                                            class="img-fluid rounded-circle shadow-sm mb-3 border border-3 border-white"
                                            style="width: 140px; height: 140px; object-fit: cover;"
                                            alt="{{ $poste['membre']['nom'] }}">
                                        <h5 class="fw-bold text-dark">{{ $poste['membre']['nom'] }}</h5>
                                        <small class="text-muted d-block mb-2">{{ $poste['poste'] }}</small>
                                    </div>

                                    {{-- ADJOINTS mini et alignés en bas --}}
                                    @if(isset($poste['adjoints']) && count($poste['adjoints']) > 0)
                                        <div class="adjoints-container">
                                            @foreach($poste['adjoints'] as $adjoint)
                                                <div class="adjoint-card">
                                                    <img src="{{ $adjoint['photo'] }}"
                                                        class="rounded-circle shadow-sm border border-2 border-light mb-1"
                                                        style="height: 70px; width: 70px; object-fit: cover;"
                                                        alt="{{ $adjoint['nom'] }}">
                                                    <small class="adjoint-name">{{ $adjoint['nom'] }}</small>
                                                    <small class="adjoint-poste">{{ $adjoint['poste'] }}</small>
                                                </div>
                                            @endforeach
                                        </div>
                                    @endif

                                </div>

                                {{-- MISSIONS --}}
                                <div class="col-lg-7 col-md-8 missions">
                                    <h5 class="text-primary fw-bold mb-3">🎯 Missions & Rôles</h5>
                                    <ul class="missions-list list-unstyled">
                                        @foreach($poste['missions'] as $mission)
                                            <li class="d-flex align-items-start mb-2">
                                                {{-- <span class="me-2 text-success fs-5">•</span> --}}
                                                <span>{{ $mission }}</span>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endforeach
            </div>
        </section>


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
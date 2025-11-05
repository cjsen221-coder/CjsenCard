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
        /* Bloc encadré */
        .team-block {
            border: 2px solid #dee2e6;
            border-radius: 15px;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .team-block:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        }

        /* Titre principal */
        #executif h1, #fonctionnel h1 {
            font-size: 2.5rem;
            font-weight: 700;
            color: #FEA116;
            position: relative;
            display: inline-block;
            margin-bottom: 1rem;
        }

        #executif h1::after, #fonctionnel h1::after {
            content: '';
            position: absolute;
            width: 50%;
            height: 4px;
            background-color: #FEA116;
            left: 0;
            bottom: -10px;
            border-radius: 2px;
        }

        /* Titre poste */
        .poste-title {
            font-size: 1.5rem;
            font-weight: 600;
            color: #495057;
            margin-bottom: 1rem;
            border-bottom: 2px solid #FEA116;
            display: inline-block;
            padding-bottom: 5px;
        }

        /* Missions et roles */
        .missions ul {
            padding-left: 1.2rem;
            list-style-type: disc;
        }

        .missions li {
            margin-bottom: 0.5rem;
        }

        /* Adjoints */
        .adjoint-card img {
            border-radius: 50%;
            border: 3px solid #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .adjoint-card h6 {
            font-size: 0.95rem;
            margin-bottom: 0;
            font-weight: 600;
        }

        .adjoint-card small {
            font-size: 0.8rem;
            color: #6c757d;
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
            $sections = [
                'Présidence' => [
                    [
                        'poste' => 'Président',
                        'membre' => ['nom' => 'Mamadou Mounirou TALL', 'photo' => 'media/mounirou.jpeg'],
                        'missions' => [
                            'Définir et piloter la vision stratégique de l’association.',
                            'Représenter CJSEN auprès des partenaires et institutions.',
                            'Nommer et révoquer les coordonnateurs de cellules sur consultation du Bureau exécutif.',
                            'Superviser les décisions majeures et garantir la discipline, la transparence et l’éthique.',
                            'Assurer la fonction de porte-parole ou la déléguer à un membre compétent.'
                        ],
                        'adjoints' => []
                    ]
                ],
                'Secrétariat Général' => [
                    [
                        'poste' => 'Secrétaire général',
                        'membre' => ['nom' => 'Ababacar BA', 'photo' => 'media/ABABACAR.jpg'],
                        'missions' => [
                            'Assurer la gestion administrative et la correspondance officielle.',
                            'Préparer les rapports et comptes rendus des réunions.',
                            'Recevoir les démissions et transmettre les informations au Président et au Bureau exécutif.'
                        ],
                        'adjoints' => [
                            ['nom' => 'Moustapha NDIAYE', 'poste' => 'Adjoint', 'photo' => 'media/ABABACAR.jpg'],
                            ['nom' => 'Arame THIANE', 'poste' => 'Seconde Adjointe', 'photo' => 'media/ABABACAR.jpg']
                        ]
                    ]
                ],
                'Trésorerie' => [
                    [
                        'poste' => 'Trésorière',
                        'membre' => ['nom' => 'Cheikh Sow', 'photo' => 'media/marianne R.jpg'],
                        'missions' => [
                            'Gérer les ressources financières et les budgets.',
                            'Superviser les recettes, dépenses et rapports financiers.',
                            'Collaborer avec le Commissaire aux comptes pour le contrôle et la transparence financière.'
                        ],
                        'adjoints' => [
                            ['nom' => 'Fatou Ndiaye', 'poste' => 'Adjointe', 'photo' => 'media/marianne R.jpg']
                        ]
                    ]
                ],
                'Commissariat aux comptes' => [
                    [
                        'poste' => 'Commissaire aux comptes',
                        'membre' => ['nom' => 'Diam Pathé SALL', 'photo' => 'media/Diam_Pathe.jpg'],
                        'missions' => [
                            'Contrôler annuellement les comptes et présenter un rapport à l’Assemblée Générale.',
                            'Vérifier la conformité des transactions financières avec le règlement intérieur.'
                        ],
                        'adjoints' => []
                    ]
                ]
            ];
        @endphp

        <section id="executif" class="section bg-gray-100 py-5">
            <div class="container">
                <div class="text-center mb-5">
                    <h1>Bureau Exécutif</h1>
                    <p class="lead">Présentation complète des membres avec leurs missions et rôles</p>
                </div>

                @foreach($sections as $sectionTitle => $membres)
                    {{-- Bloc poste --}}

                    @foreach($membres as $poste)
                        <div class="team-block mb-5">
                            <h4 class="poste-title">{{ $sectionTitle }}</h4>
                            <div class="row align-items-start">
                                {{-- Photo principale --}}
                                <div class="col-lg-3 col-md-4 text-center mb-3 mb-md-0">
                                    <img src="{{ $poste['membre']['photo'] }}" class="w-100 mb-2"
                                        alt="{{ $poste['membre']['nom'] }}">
                                    <h5>{{ $poste['membre']['nom'] }}</h5>
                                    <small class="text-muted">{{ $poste['poste'] }}</small>
                                    <div class="mt-2">
                                        @if(isset($poste['membre']['facebook']))<a href="{{ $poste['membre']['facebook'] }}"
                                        class="me-2 text-primary"><i class="bi bi-facebook"></i></a>@endif
                                        @if(isset($poste['membre']['twitter']))<a href="{{ $poste['membre']['twitter'] }}"
                                        class="me-2 text-primary"><i class="bi bi-twitter"></i></a>@endif
                                        @if(isset($poste['membre']['linkedin']))<a href="{{ $poste['membre']['linkedin'] }}"
                                        class="me-2 text-primary"><i class="bi bi-linkedin"></i></a>@endif
                                        @if(isset($poste['membre']['instagram']))<a href="{{ $poste['membre']['instagram'] }}"
                                        class="me-2 text-primary"><i class="bi bi-instagram"></i></a>@endif
                                    </div>
                                </div>

                                {{-- Missions et rôles --}}
                                <div class="col-lg-9 col-md-8 missions">
                                    <ul>
                                        @foreach($poste['missions'] as $mission)
                                            <li>{{ $mission }}</li>
                                        @endforeach
                                    </ul>

                                    {{-- Adjoints --}}
                                    @if(isset($poste['adjoints']) && count($poste['adjoints']) > 0)
                                        <h5 class="mt-4">Adjoints</h5>
                                        <div class="d-flex flex-wrap">
                                            @foreach($poste['adjoints'] as $adjoint)
                                                <div class="adjoint-card text-center me-4 mb-3" style="width:150px;">
                                                    <img src="{{ $adjoint['photo'] }}" class="w-100 mb-2" alt="{{ $adjoint['nom'] }}">
                                                    <h6>{{ $adjoint['nom'] }}</h6>
                                                    <small>{{ $adjoint['poste'] }}</small>
                                                </div>
                                            @endforeach
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endforeach
            </div>
        </section>



        {{-- Les cellules --}}

        @php
            $bureauOperationnelSections = [
                'Bureau Opérationnel' => [
                    [
                        'poste' => 'Cellule de l’Initiative, de la Planification et de la Stratégie (CIPS)',
                        'membre' => [
                            'nom' => 'Mamadou Diop',
                            'photo' => 'img/team-1.jpg',
                            'facebook' => '#',
                            'twitter' => '#',
                            'linkedin' => '#',
                            'instagram' => '#'
                        ],
                        'missions' => [
                            'Orienter la vision stratégique et coordonner les plans d’action.',
                            'Définir les objectifs à court, moyen et long terme.',
                            'Concevoir et mettre à jour le REPAP et les feuilles de route annuelles.',
                            'Identifier les opportunités et partenariats stratégiques.',
                            'Analyser le contexte national et international pour guider les actions.',
                            'Proposer des stratégies innovantes adaptées aux besoins des jeunes.'
                        ],
                        'adjoints' => []
                    ],
                    [
                        'poste' => 'Cellule de la Formation, de l’Éducation Citoyenne et du Leadership (CFEL)',
                        'membre' => [
                            'nom' => 'Aissatou Fall',
                            'photo' => 'img/team-2.jpg'
                        ],
                        'missions' => [
                            'Renforcer les compétences, l’esprit citoyen et le leadership des jeunes.',
                            'Concevoir et organiser des sessions de formation et ateliers pratiques.',
                            'Promouvoir l’éducation citoyenne et la culture du leadership.',
                            'Développer des programmes éducatifs adaptés aux différents groupes cibles.',
                            'Sensibiliser les jeunes sur leurs droits et devoirs dans la société.',
                            'Évaluer l’impact des actions et ajuster les programmes.'
                        ],
                        'adjoints' => []
                    ],
                    [
                        'poste' => 'Cellule du Numérique et de l\'Innovation Digitale (CNID)',
                        'membre' => [
                            'nom' => 'Cheikh Sow',
                            'photo' => 'img/team-3.jpg'
                        ],
                        'missions' => [
                            'Développer et gérer les outils numériques de l’association pour faciliter la communication et la diffusion de l’information.',
                            'Développer et maintenir les plateformes numériques (site web, bases de données, applications internes).',
                            'Assurer la sécurité, la performance et la mise à jour des outils numériques.',
                            'Collecter, centraliser et structurer l’information pour la rendre accessible aux membres et aux autres cellules.',
                            'Fournir un support technique aux autres cellules pour l’utilisation des outils numériques.',
                            'Proposer des innovations digitales pour améliorer l’efficacité des projets et la visibilité globale.',
                            'Collaborer avec la Cellule Communication et Visibilité pour optimiser la diffusion des contenus.'
                        ],
                        'adjoints' => []
                    ],
                    [
                        'poste' => 'Cellule de la Communication et de la Visibilité (CCV)',
                        'membre' => [
                            'nom' => 'Fatou Ndiaye',
                            'photo' => 'img/team-4.jpg'
                        ],
                        'missions' => [
                            'Valoriser l’image de CJSEN, gérer la communication externe et interne, et promouvoir les projets.',
                            'Concevoir, produire et diffuser des contenus éditoriaux et promotionnels (articles, vidéos, newsletters, visuels).',
                            'Gérer la stratégie, le contenu et l’animation des réseaux sociaux pour garantir une visibilité cohérente et professionnelle.',
                            'Superviser la communication lors des événements, activités et projets.',
                            'Maintenir les relations avec les médias et partenaires pour accroître la notoriété.',
                            'Garantir que toutes les communications respectent la vision, la mission, les valeurs et le règlement intérieur.',
                            'Collaborer avec la Cellule Numérique pour l’optimisation technique et la diffusion efficace des contenus.'
                        ],
                        'adjoints' => []
                    ],
                    [
                        'poste' => 'Cellule de Gestion et du Pilotage des Projets (CGPP)',
                        'membre' => [
                            'nom' => 'Oumar Diallo',
                            'photo' => 'img/team-5.jpg'
                        ],
                        'missions' => [
                            'Mettre en œuvre les projets et veiller à leur bonne exécution.',
                            'Planifier et organiser les activités et projets selon la feuille de route.',
                            'Assurer la coordination entre les différentes cellules pour chaque projet.',
                            'Suivre le budget et les ressources allouées.',
                            'Identifier les risques et proposer des solutions pour leur mitigation.',
                            'Garantir le respect des délais et des standards de qualité.'
                        ],
                        'adjoints' => []
                    ],
                    [
                        'poste' => 'Cellule de Suivi et de l’Évaluation (CSE)',
                        'membre' => [
                            'nom' => 'Awa Gueye',
                            'photo' => 'img/team-6.jpg'
                        ],
                        'missions' => [
                            'Mesurer l’impact des actions et proposer des ajustements pour optimiser les résultats.',
                            'Définir des indicateurs de performance pour chaque projet et action.',
                            'Collecter et analyser les données pour évaluer les résultats.',
                            'Produire des rapports réguliers pour le Comité directeur et le Bureau exécutif.',
                            'Recommander des améliorations et ajustements aux actions en cours.',
                            'Capitaliser les bonnes pratiques et partager l’expérience.'
                        ],
                        'adjoints' => []
                    ],
                    [
                        'poste' => 'Cellule Partenariats et Relations Extérieures (CPRE)',
                        'membre' => [
                            'nom' => 'Seynabou Ba',
                            'photo' => 'img/team-7.jpg'
                        ],
                        'missions' => [
                            'Développer et maintenir des partenariats stratégiques et institutionnels.',
                            'Identifier et engager des partenaires publics, privés et associatifs.',
                            'Négocier des collaborations et conventions avec des institutions nationales et internationales.',
                            'Suivre les relations existantes et assurer un reporting régulier.',
                            'Participer à des forums, conférences et événements pour représenter CJSEN.',
                            'Valoriser l’image et le rayonnement de l’association à l’extérieur.'
                        ],
                        'adjoints' => []
                    ],
                    [
                        'poste' => 'Comité de Validation',
                        'membre' => [
                            'nom' => 'Mouhamed Cissé',
                            'photo' => 'img/team-8.jpg'
                        ],
                        'missions' => [
                            'Assurer la qualité, la cohérence et la conformité de tous les contenus avant diffusion ou publication.',
                            'Examiner et valider tous les documents, communications et supports produits par les cellules.',
                            'Vérifier la conformité avec la vision, la mission et les valeurs de CJSEN.',
                            'S’assurer que les contenus respectent les règles éthiques et le règlement intérieur.',
                            'Proposer des corrections ou améliorations pour garantir clarté, exactitude et impact.',
                            'Fournir un retour constructif aux cellules avant toute publication officielle.'
                        ],
                        'adjoints' => []
                    ]
                ]
            ];
        @endphp

        <section id="fonctionnel" class="section bg-gray-100 py-5">
            <div class="container">
                <div class="text-center mb-5">
                    <h1>Bureau Opérationnel</h1>
                    <p class="lead">Présentation complète des cellules avec leurs missions et coordonnateurs</p>
                </div>

                @foreach($bureauOperationnelSections as $sectionTitle => $membres)
                    @foreach($membres as $poste)
                        <div class="team-block mb-5">
                            <h4 class="poste-title">{{ $poste['poste'] }}</h4>
                            <div class="row align-items-start">
                                {{-- Photo principale --}}
                                <div class="col-lg-3 col-md-4 text-center mb-3 mb-md-0">
                                    <img src="{{ $poste['membre']['photo'] }}"
                                        class="w-100 mb-2 rounded-circle border border-3 border-white shadow"
                                        alt="{{ $poste['membre']['nom'] }}">
                                    <h5>{{ $poste['membre']['nom'] }}</h5>
                                    <small class="text-muted">Coordonnateur</small>
                                    <div class="mt-2">
                                        @if(isset($poste['membre']['facebook']))<a href="{{ $poste['membre']['facebook'] }}"
                                        class="me-2 text-primary"><i class="bi bi-facebook"></i></a>@endif
                                        @if(isset($poste['membre']['twitter']))<a href="{{ $poste['membre']['twitter'] }}"
                                        class="me-2 text-primary"><i class="bi bi-twitter"></i></a>@endif
                                        @if(isset($poste['membre']['linkedin']))<a href="{{ $poste['membre']['linkedin'] }}"
                                        class="me-2 text-primary"><i class="bi bi-linkedin"></i></a>@endif
                                        @if(isset($poste['membre']['instagram']))<a href="{{ $poste['membre']['instagram'] }}"
                                        class="me-2 text-primary"><i class="bi bi-instagram"></i></a>@endif
                                    </div>
                                </div>

                                {{-- Missions et rôles --}}
                                <div class="col-lg-9 col-md-8 missions">
                                    <ul>
                                        @foreach($poste['missions'] as $mission)
                                            <li>{{ $mission }}</li>
                                        @endforeach
                                    </ul>

                                    {{-- Adjoints --}}
                                    @if(isset($poste['adjoints']) && count($poste['adjoints']) > 0)
                                        <h5 class="mt-4">Adjoints</h5>
                                        <div class="d-flex flex-wrap">
                                            @foreach($poste['adjoints'] as $adjoint)
                                                <div class="adjoint-card text-center me-4 mb-3" style="width:150px;">
                                                    <img src="{{ $adjoint['photo'] }}"
                                                        class="w-100 mb-2 rounded-circle border border-3 border-white shadow"
                                                        alt="{{ $adjoint['nom'] }}">
                                                    <h6>{{ $adjoint['nom'] }}</h6>
                                                    <small>{{ $adjoint['poste'] }}</small>
                                                </div>
                                            @endforeach
                                        </div>
                                    @endif
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
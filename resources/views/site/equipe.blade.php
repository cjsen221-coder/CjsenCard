<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Dispositif Organisationnel - Sen Carrefour Jeunesse</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('images/logo.ico') }}" rel="icon">

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
    <link rel="stylesheet" href="{{ asset('site/css/equipe.css') }}">

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

        <x-hero title="Dispositif Organisationnel" current="Equipe" parent="" parentUrl="" titleSize="display-4" />
        <!-- Navbar & Hero End -->

        @php
            $bureauOperationnelSections = [
                'Comité Directeur' => [
                    [
                        'poste' => 'Président',
                        'nomCellule' => 'Présidence',
                        'membre' => ['nom' => 'Mamadou Mounirou TALL', 'photo' => 'media/mounirou.jpeg'],
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
                            ['nom' => 'Moustapha NDIAYE', 'poste' => 'SG Adjoint', 'photo' => 'media/moustapha-r.png'],
                            ['nom' => 'Arame THIANE', 'poste' => 'SG Seconde Adjointe', 'photo' => 'media/ARAME_o-r.png']
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
                            ['nom' => 'Adama SY', 'poste' => 'Trésorière adjointe', 'photo' => 'media/ADAMA-r.png']
                        ]
                    ],
                    [
                        'poste' => 'Commissaire aux Comptes',
                        'nomCellule' => 'Commissariat aux Comptes',
                        'membre' => ['nom' => 'Diampathé SALL', 'photo' => 'media/diam.png'],
                        'missions' => [
                            'Contrôler annuellement les comptes et présenter un rapport à l’Assemblée Générale.',
                            'Vérifier la conformité des transactions financières avec le règlement intérieur.'
                        ],
                        'adjoints' => []
                    ],
                    [
                        'poste' => 'Coordonnateur',
                        'nomCellule' => 'Cellule de l’Initiative, de la Planification et de la Stratégie (CIPS)',
                        'membre' => ['nom' => 'Mame Mbaye NIANG', 'photo' => 'media/Mame_Mbaye.jpg'],
                        'missions' => [
                            'Orienter la vision stratégique et coordonner les plans d’action.',
                            'Définir les objectifs à court, moyen et long terme.',
                            'Concevoir et mettre à jour le REPAP et les feuilles de route annuelles.',
                            'Identifier les opportunités et partenariats stratégiques.',
                            'Analyser le contexte national et international pour guider les actions.',
                            'Proposer des stratégies innovantes adaptées aux besoins des jeunes.'
                        ],
                        'adjoints' => [
                            ['nom' => 'Marie Sarr TINE', 'poste' => 'Adjointe', 'photo' => 'media/maries-r.png']
                        ]
                    ],
                    [
                        'poste' => 'Coordonnateur',
                        'nomCellule' => 'Cellule de la Formation, de l’Éducation Citoyenne et du Leadership (CFEL)',
                        'membre' => ['nom' => 'Youssoupha FALL', 'photo' => 'media/Youssoupha_FALL.png'],
                        'missions' => [
                            'Renforcer les compétences, l’esprit citoyen et le leadership des jeunes.',
                            'Concevoir et organiser des sessions de formation et ateliers pratiques.',
                            'Promouvoir l’éducation citoyenne et la culture du leadership.',
                            'Développer des programmes éducatifs adaptés aux différents groupes cibles.',
                            'Sensibiliser les jeunes sur leurs droits et devoirs dans la société.',
                            'Évaluer l’impact des actions et ajuster les programmes.'
                        ],
                        'adjoints' => [
                            ['nom' => 'Mouhamed Rassoul GUEYE', 'poste' => 'Adjoint', 'photo' => 'media/Rassoul_1.png']
                        ]
                    ],
                    [
                        'poste' => 'Coordonnateur',
                        'nomCellule' => 'Cellule du Numérique et de l\'Innovation Digitale (CNID)',
                        'membre' => ['nom' => 'Samba DRAME', 'photo' => 'media/Samba.png'],
                        'missions' => [
                            'Développer et gérer les outils numériques de l’association pour faciliter la communication, la gestion interne et la diffusion de l’information.',
                            'Développer et maintenir les plateformes numériques (site web, bases de données, applications internes).',
                            'Assurer la sécurité, la performance et la mise à jour des outils numériques.',
                            'Collecter, centraliser et structurer l’information pour la rendre accessible aux membres et aux autres cellules.',
                            // 'Fournir un support technique aux autres cellules pour l’utilisation des outils numériques.',
                            // 'Proposer des innovations digitales pour améliorer l’efficacité des projets et la visibilité globale.',
                            // 'Collaboration : Travailler avec la Cellule Communication et Visibilité pour optimiser la diffusion des contenus.'
                        ],
                        'adjoints' => [
                            ['nom' => 'Khadidiatou DIASSE', 'poste' => 'Adjointe', 'photo' => 'media/adjia-r.png'],
                            // ['nom' => 'Mayacine NDIAYE', 'poste' => 'Membre', 'photo' => '']
                        ]
                    ],
                    [
                        'poste' => 'Coordonnatrice',
                        'nomCellule' => 'Cellule de la Communication et de la Visibilité (CCV)',
                        'membre' => ['nom' => 'Ndeye Fatim SECK', 'photo' => 'media/FATIM-r.png'],
                        'missions' => [
                            'Valoriser l’image de CJSEN, gérer la communication externe et interne et promouvoir les projets.',
                            'Concevoir, produire et diffuser des contenus éditoriaux et promotionnels (articles, vidéos, newsletters, visuels).',
                            'Gérer la stratégie, le contenu et l’animation des réseaux sociaux pour garantir une visibilité cohérente et professionnelle.',
                            'Superviser la communication lors des événements, activités et projets.',
                            // 'Maintenir les relations avec les médias et partenaires pour accroître la notoriété.',
                            // 'Garantir que toutes les communications respectent la vision, la mission, les valeurs et le règlement intérieur.',
                            // 'Collaboration : Travailler avec la Cellule Numérique pour l’optimisation technique et la diffusion efficace des contenus.'
                        ],
                        'adjoints' => [
                            ['nom' => 'Mody SAKHO', 'poste' => 'Adjoint', 'photo' => 'media/MODY_SAKho.png']
                        ]
                    ],
                    [
                        'poste' => 'Coordonnatrice',
                        'nomCellule' => 'Cellule de Gestion et du Pilotage des Projets (CGPP)',
                        'membre' => ['nom' => 'Mame Fatou Mbaye TALL', 'photo' => 'media/MAME_FATOU.png'],
                        'missions' => [
                            'Mettre en œuvre les projets et veiller à leur bonne exécution.',
                            'Planifier et organiser les activités et projets selon la feuille de route.',
                            'Assurer la coordination entre les différentes cellules pour chaque projet.',
                            'Suivre le budget et les ressources allouées.',
                            'Identifier les risques et proposer des solutions pour leur mitigation.',
                            'Garantir le respect des délais et des standards de qualité.'
                        ],
                        'adjoints' => [
                            ['nom' => 'Ibrahima DIA', 'poste' => 'Adjoint', 'photo' => 'media/ibrahima-r.png']

                        ]
                    ],
                    [
                        'poste' => 'Coordonnateur',
                        'nomCellule' => 'Cellule de Suivi et de l’Évaluation (CSE)',
                        'membre' => ['nom' => 'Thierno Abou TALL', 'photo' => 'media/THIERNO-.png'],
                        'missions' => [
                            'Mesurer l’impact des actions et proposer des ajustements pour optimiser les résultats.',
                            'Définir des indicateurs de performance pour chaque projet et action.',
                            'Collecter et analyser les données pour évaluer les résultats.',
                            'Produire des rapports réguliers pour le Comité directeur et le Bureau exécutif.',
                            'Recommander des améliorations et ajustements aux actions en cours.',
                            // 'Capitaliser les bonnes pratiques et partager l’expérience.'
                        ],
                        'adjoints' => [
                            ['nom' => 'Yaye Adama CISSE', 'poste' => 'Adjointe', 'photo' => 'media/YAYE ADAMA.jpg']
                        ]
                    ],
                    [
                        'poste' => 'Coordonnatrice',
                        'nomCellule' => 'Cellule Partenariats et Relations Extérieures (CPRE)',
                        'membre' => ['nom' => 'Mariama SOW', 'photo' => 'media/mari.png'],
                        'missions' => [
                            'Développer et maintenir des partenariats stratégiques et institutionnels.',
                            'Identifier et engager des partenaires publics, privés et associatifs.',
                            'Négocier des collaborations et conventions avec des institutions nationales et internationales.',
                            'Suivre les relations existantes et assurer un reporting régulier.',
                            'Participer à des forums, conférences et événements pour représenter CJSEN.',
                            'Valoriser l’image et le rayonnement de l’association à l’extérieur.'
                        ],
                        'adjoints' => [
                            ['nom' => 'Alimatou Yague BA', 'poste' => 'Adjointe', 'photo' => 'media/Alimatou.png']
                        ]
                    ]
                ]
            ];
        @endphp
        <div class="container-xxl py-5">
            <div class="container-fluid">
                <h1 class="section-main-title mb-5">Comité Directeur</h1>

                @php
                    $bureauExecutif = array_slice($bureauOperationnelSections['Comité Directeur'], 0, 4);
                    $bureauFonctionnel = array_slice($bureauOperationnelSections['Comité Directeur'], 4);
                @endphp

                <!-- ========================================================= -->
                <!-- 🟦 BUREAU EXÉCUTIF -->
                <!-- ========================================================= -->
                <h3 class="section-subtitle" id="executif">Bureau Exécutif</h3>

                <div class="row g-4 justify-content-center">
                    @foreach($bureauExecutif as $membre)
                        <div class="col-md-4 d-flex">
                            <div class="card-member w-100">

                                {{-- 📸 PHOTO PRINCIPALE --}}
                                @if(!empty($membre['membre']['photo']))
                                    <img src="{{ asset($membre['membre']['photo']) }}" alt="{{ $membre['membre']['nom'] }}"
                                        class="member-img mx-auto d-block">
                                @else
                                    <i class="bi bi-person-circle"
                                        style="font-size:120px; color:#ccc; display:block; margin:auto;"></i>
                                @endif

                                <h5 class="mt-2">{{ $membre['membre']['nom'] }}</h5>
                                <small>{{ $membre['poste'] }}</small>

                                {{-- 👥 ADJOINTS --}}
                                @if(!empty($membre['adjoints']))
                                    <div class="adjoints-container mt-3">
                                        @foreach($membre['adjoints'] as $adjoint)
                                            <div class="adjoint-card">
                                                @if(!empty($adjoint['photo']))
                                                    <img src="{{ asset($adjoint['photo']) }}" alt="{{ $adjoint['nom'] }}">
                                                @else
                                                    <i class="bi bi-person-circle" style="font-size:60px; color:#ccc;"></i>
                                                @endif
                                                <span class="adjoint-name">{{ $adjoint['nom'] }}</span>
                                                <span class="adjoint-poste">{{ $adjoint['poste'] }}</span>
                                            </div>
                                        @endforeach
                                    </div>
                                @endif

                                {{-- ▼ MISSIONS --}}
                                <div class="dropdown-title">Missions ▼</div>

                                <ul class="missions-list">
                                    @foreach($membre['missions'] as $mission)
                                        <li>{{ $mission }}</li>
                                    @endforeach
                                </ul>

                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- ========================================================= -->
                <!-- 🟩 BUREAU FONCTIONNEL -->
                <!-- ========================================================= -->
                <h3 class="section-subtitle mt-5" id="fonctionnel">Bureau Fonctionnel</h3>

                <div class="row g-4 justify-content-center">
                    @foreach($bureauFonctionnel as $cellule)
                        <div class="col-md-4 d-flex">
                            <div class="card-member w-100">

                                <h5 class="fw-bold align-text-left">{{ $cellule['nomCellule'] }}</h5>

                                {{-- 📸 PHOTO PRINCIPALE --}}
                                @if(!empty($cellule['membre']['photo']))
                                    <img src="{{ asset($cellule['membre']['photo']) }}" alt="{{ $cellule['membre']['nom'] }}"
                                        class="member-img mx-auto d-block mb-2">
                                @else
                                    <i class="bi bi-person-circle"
                                        style="font-size:120px; color:#ccc; display:block; margin:auto;"></i>
                                @endif

                                <h6 class="mt-2">{{ $cellule['membre']['nom'] }}</h6>
                                <small>{{ $cellule['poste'] }}</small>

                                {{-- 👥 ADJOINTS --}}
                                @if(!empty($cellule['adjoints']))
                                    <div class="adjoints-container mt-3">
                                        @foreach($cellule['adjoints'] as $adjoint)
                                            <div class="adjoint-card">
                                                @if(!empty($adjoint['photo']))
                                                    <img src="{{ asset($adjoint['photo']) }}" alt="{{ $adjoint['nom'] }}">
                                                @else
                                                    <i class="bi bi-person-circle" style="font-size:60px; color:#ccc;"></i>
                                                @endif
                                                <span class="adjoint-name">{{ $adjoint['nom'] }}</span>
                                                <span class="adjoint-poste">{{ $adjoint['poste'] }}</span>
                                            </div>
                                        @endforeach
                                    </div>
                                @endif

                                {{-- ▼ MISSIONS --}}
                                <div class="dropdown-title">Missions ▼</div>

                                <ul class="missions-list">
                                    @foreach($cellule['missions'] as $mission)
                                        <li>{{ $mission }}</li>
                                    @endforeach
                                </ul>

                            </div>
                        </div>
                    @endforeach
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


    <!-- JS pour déplier / replier les missions -->
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            document.querySelectorAll(".dropdown-title").forEach(title => {
                title.addEventListener("click", function () {
                    let list = this.nextElementSibling;
                    list.classList.toggle("show");

                    this.innerHTML = list.classList.contains("show")
                        ? "Missions ▲"
                        : "Missions ▼";
                });
            });
        });
        document.addEventListener("click", function (e) {
            document.querySelectorAll(".dropdown-title").forEach(title => {
                const list = title.nextElementSibling;

                // Si le clic n'est ni sur le titre ni dans le bloc missions → on ferme
                if (!title.contains(e.target) && !list.contains(e.target)) {
                    list.classList.remove("show");
                    title.innerHTML = "Missions ▼";
                }
            });
        });

    </script>

    <!-- Template Javascript -->
    <script src="{{ asset('site/js/main.js') }}"></script>

</body>

</html>

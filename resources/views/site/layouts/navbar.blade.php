<nav class="navbar navbar-expand-lg navbar-dark bg-white px-4 px-lg-5 py-3 py-lg-0"
    style="border-bottom: 2px solid #22445e;">
    <a href="{{ route('site.accueil') }}" class="navbar-brand p-0">
        <p class="d-flex align-items-center m-0" style="color: #22445e;">
            <img src="{{ asset('images/logo-og.png') }}" alt="Logo" style="
                height: 80px; 
                width: auto; 
                margin-right: 0px;
                transition: transform 0.3s ease, filter 0.3s ease;
                filter: drop-shadow(0 2px 4px rgba(0,0,0,0.2));
             " onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
            <span class="fw-bold fs-5" style="letter-spacing: 0.5px;">SEN CARREFOUR JEUNESSE</span>
        </p>
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <i class="fa-solid fa-bars" style="color: #22445e;"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0 pe-4">
            {{-- <a href="" class="nav-item nav-link active">Accueil</a> --}}
            <!-- Menu A Propos -->
            <div class="nav-item dropdown">
                <a href="{{ route('site.apropos') }}"
                    class="nav-link dropdown-toggle {{ Route::is('site.apropos*') ? 'active' : '' }}">
                    A Propos
                </a>
                <div class="dropdown-menu m-0">
                    <a href="" class="dropdown-item">Historique</a>
                    <a href="" class="dropdown-item">Missions</a>
                    <a href="" class="dropdown-item">Valeurs</a>
                    <a href="" class="dropdown-item">Relations extérieures (Nos Antennes)</a>
                    <a href="" class="dropdown-item">Partenariats</a>
                    <a href="" class="dropdown-item">Témoignages</a>
                </div>
            </div>

            <div class="nav-item dropdown">
                <a href="{{ route('site.domaines') }}"
                    class="nav-link dropdown-toggle {{ Route::is('site.domaines') ? 'active' : '' }}">
                    Domaines d'Action
                </a>
                <div class="dropdown-menu m-0">
                    <a href="{{ route('site.domaines') }}#formations" class="dropdown-item">Formations</a>
                    <a href="{{ route('site.domaines') }}#causeries" class="dropdown-item">Causeries</a>
                    <a href="{{ route('site.domaines') }}#cohesions" class="dropdown-item">Activités de Cohésion</a>
                    <a href="{{ route('site.domaines') }}#sensibilisations" class="dropdown-item">Ateliers de
                        Sensibilisation</a>
                    <a href="{{ route('site.domaines') }}#actions" class="dropdown-item">Actions Communautaires</a>
                    <a href="{{ route('site.domaines') }}#projets" class="dropdown-item">Projets Spéciaux</a>
                </div>
            </div>

            <div class="nav-item dropdown">
                <a href="{{ route('site.equipe') }}"
                    class="nav-link dropdown-toggle {{ Route::is('site.equipe*') ? 'active' : '' }}">Equipe</a>
                <div class="dropdown-menu m-0">
                    <a href="" class="dropdown-item">Bureau Exécutif</a>
                    <a href="" class="dropdown-item">Bureau Fonctionnel</a>
                </div>
            </div>
            {{-- <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Realisations</a>
                <div class="dropdown-menu m-0">
                    <a href="" class="dropdown-item">Booking</a>
                    <a href="" class="dropdown-item">Our Team</a>
                    <a href="" class="dropdown-item">Testimonial</a>
                </div>
            </div> --}}
            <div class="nav-item dropdown">
                <a href="{{ route('site.mediatheque') }}"
                    class="nav-link dropdown-toggle {{ Route::is('site.mediatheque*') ? 'active' : '' }}">Media</a>
                <div class="dropdown-menu m-0">
                    <a href="{{ route('site.mediatheque') }}#tab-photos" class="dropdown-item">Photos</a>
                    <a href="{{ route('site.mediatheque') }}#tab-videos" class="dropdown-item">Vidéos</a>
                </div>
            </div>
            <a href="{{ route('site.blog') }}"
                class="nav-item nav-link {{ Route::is('site.blog') ? 'active' : '' }}">Blog</a>
            <a href="{{ route('site.contact') }}"
                class="nav-item nav-link {{ Route::is('site.contact') ? 'active' : '' }}">Contact</a>
        </div>
        {{-- <a href="" class="btn btn-primary py-2 px-4">Book A Table</a> --}}
    </div>
    <!-- Script pour activer le menu au survol -->
    <script>
        document.querySelectorAll('.nav-item.dropdown').forEach(item => {
            item.addEventListener('mouseenter', () => {
                const dropdown = bootstrap.Dropdown.getOrCreateInstance(item.querySelector('.dropdown-toggle'));
                dropdown.show();
            });
            item.addEventListener('mouseleave', () => {
                const dropdown = bootstrap.Dropdown.getOrCreateInstance(item.querySelector('.dropdown-toggle'));
                dropdown.hide();
            });
        });
    </script>
</nav>
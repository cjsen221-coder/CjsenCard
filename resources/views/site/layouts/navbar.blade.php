<nav class="navbar navbar-expand-lg navbar-dark bg-white px-4 px-lg-5 py-3 py-lg-0"
    style="border-bottom: 1px solid #22445e;">
    <a href="" class="navbar-brand p-0">
        <p class="m-0" style="color: #22445e;">
            {{-- <i class="fa fa-utensils me-3"></i> --}}
            <img src="{{ asset('images/logo-rm.png') }}" alt="Logo">
            SEN CARREFOUR JEUNESSE
        </p>
        <!-- <img src="img/logo.png" alt="Logo"> -->
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0 pe-4">
            <a href="" class="nav-item nav-link active">Accueil</a>
            <!-- Menu A Propos -->
            <div class="nav-item dropdown">
                <a href="{{ route('site.apropos') }}" class="nav-link dropdown-toggle">
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
                <a href="{{ route('site.domaines') }}" class="nav-link dropdown-toggle" >Domaines d'Action</a>
                <div class="dropdown-menu m-0">
                    <a href="" class="dropdown-item">Formations</a>
                    <a href="" class="dropdown-item">Causeries</a>
                    <a href="" class="dropdown-item">Activités de Cohésion</a>
                    <a href="" class="dropdown-item">Atélier de Sensibilisation</a>
                    <a href="" class="dropdown-item">Actions Communautaires</a>
                    <a href="" class="dropdown-item">Projets Spéciaux</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="{{ route('site.equipe') }}" class="nav-link dropdown-toggle" >Equipe</a>
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
                <a href="#" class="nav-link dropdown-toggle">Media</a>
                <div class="dropdown-menu m-0">
                    <a href="" class="dropdown-item">Podcasts</a>
                    <a href="" class="dropdown-item">Photos & Vidéos</a>
                </div>
            </div>
            <a href="" class="nav-item nav-link">Blog</a>
            <a href="" class="nav-item nav-link">Contact</a>
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
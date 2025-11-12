<div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
  <div class="container py-5">
    <div class="row g-5">
      <div class="col-lg-4 col-md-6">
        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Sen Carrefour Jeunesse</h4>
        <a class="btn btn-link" href="{{ route('site.apropos') }}">A Propos</a>
        <a class="btn btn-link" href="{{ route('site.domaines') }}">Domaines d'Action</a>
        <a class="btn btn-link" href="{{ route('site.equipe') }}">Equipe</a>
        <a class="btn btn-link" href="{{ route('site.mediatheque') }}">Media</a>
        <a class="btn btn-link" href="{{ route('site.blog') }}">Blog</a>
        <a class="btn btn-link" href="{{ route('site.contact') }}">Contact</a>
      </div>
      <div class="col-lg-4 col-md-6">
        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Contacts</h4>
        <p class="mb-2">
          <i class="fa fa-map-marker-alt me-3"></i>
          <a href="https://www.google.com/maps?q=Foire,+Dakar,+Sénégal" target="_blank"
            class="text-white text-decoration-none">
            Foire, Dakar, Sénégal
          </a>
        </p>

        <p class="mb-2">
          <i class="fa fa-phone-alt me-3"></i>
          <a href="tel:+221788495730" class="text-white text-decoration-none">
            +221 78 849 57 30
          </a>
        </p>

        <p class="mb-2">
          <i class="fa fa-envelope me-3"></i>
          <a href="mailto:cjsen221@gmail.com" class="text-white text-decoration-none">
            cjsen221@gmail.com
          </a>
        </p>

        <p class="mb-2">
          <i class="fa fa-globe me-3"></i>
          <a href="https://www.cjsen.sn" target="_blank" class="text-white text-decoration-none">
            www.cjsen.sn
          </a>
        </p>

        <div class="d-flex pt-2">
          <a class="btn btn-outline-light btn-social" href="https://x.com/cjsen221" target="_blank"
            rel="noopener noreferrer">
            <i class="fab fa-twitter"></i>
          </a>
          <a class="btn btn-outline-light btn-social" href="https://www.facebook.com/profile.php?id=61575020594135"
            target="_blank" rel="noopener noreferrer">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a class="btn btn-outline-light btn-social" href="https://www.youtube.com/@SenCarrefourJeunesse"
            target="_blank" rel="noopener noreferrer">
            <i class="fab fa-youtube"></i>
          </a>
          <a class="btn btn-outline-light btn-social"
            href="https://www.linkedin.com/company/sen-carrefour-jeunesse/?viewAsMember=true" target="_blank"
            rel="noopener noreferrer">
            <i class="fab fa-linkedin-in"></i>
          </a>
          <a class="btn btn-outline-light btn-social" href="https://www.instagram.com/cjsen_2025/" target="_blank"
            rel="noopener noreferrer">
            <i class="fab fa-instagram"></i>
          </a>
          <a class="btn btn-outline-dark btn-social" href="https://www.tiktok.com/@sen.carrefour.jeunesse"
            target="_blank" rel="noopener noreferrer">
            <i class="fab fa-tiktok"></i>
          </a>


        </div>
      </div>
      {{-- <div class="col-lg-3 col-md-6">
        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Opening</h4>
        <h5 class="text-light fw-normal">Monday - Saturday</h5>
        <p>09AM - 09PM</p>
        <h5 class="text-light fw-normal">Sunday</h5>
        <p>10AM - 08PM</p>
      </div> --}}
      
      <div class="col-lg-4 col-md-6">
        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Newsletter</h4>
        <p>Recevez nos actualités et annonces directement dans votre boîte mail.</p>

        @if(session('success'))
          <div class="alert alert-success py-2 px-3">
            {{ session('success') }}
          </div>
        @endif

        <form action="{{ route('newsletter.subscribe') }}" method="POST" class="position-relative mx-auto"
          style="max-width: 400px;">
          @csrf
          <input class="form-control border-primary w-100 py-3 ps-4 pe-5 @error('email') is-invalid @enderror"
            type="email" name="email" placeholder="Votre adresse email" required>
          <button type="submit" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">
            S'inscrire
          </button>
        </form>

        @error('email')
          <p class="text-danger small mt-2">{{ $message }}</p>
        @enderror
      </div>

    </div>
  </div>
  <div class="container">
    <div class="copyright">
      <div class="row">
        <div class="col-md-12 text-center text-md-between mb-3 mb-md-0" style="font-size: 12px;">
          &copy; {{ date('Y') }} Sen Carrefour Jeunesse, Tous droits réservés | Conception : Cellule du Numérique et de l'Innovation
          Digitale (CNID)
        </div>
        {{-- <div class="col-md-6 text-center text-md-end">
          <div class="footer-menu">
            <a href="">Home</a>
            <a href="">Cookies</a>
            <a href="">Help</a>
            <a href="">FQAs</a>
          </div>
        </div> --}}
      </div>
    </div>
  </div>
</div>
<header class="site-navbar site-navbar-target" role="banner">

    <div class="container">
        <div class="row align-items-center position-relative">

            <div class="col-3 ">
                <div class="site-logo">
                    <a href="{{ route('site.accueil') }}">CJSEN</a>
                </div>
            </div>

            <div class="col-9  text-right">


                <span class="d-inline-block d-lg-none"><a href="#"
                        class="text-white site-menu-toggle js-menu-toggle py-5 text-white"><span
                            class="icon-menu h3 text-white"></span></a></span>



                <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
                    <ul class="site-menu main-menu js-clone-nav ml-auto ">
                        <li><a @class(['active' => Route::currentRouteName() === 'site.accueil']) href="{{ route('site.accueil') }}" class="nav-link">Accueil</a></li>
                        <li><a @class(['active' => Route::currentRouteName() === 'site.services']) href="{{ route('site.services') }}" class="nav-link">Services</a></li>
                        {{-- <li><a href="barber-shop.html" class="nav-link">Barber Shop</a></li> --}}
                        <li><a @class(['active' => Route::currentRouteName() === 'site.apropos']) href="{{ route('site.apropos') }}" class="nav-link">A Propos</a></li>
                        {{-- <li><a href="blog.html" class="nav-link">Blog</a></li> --}}
                        <li><a @class(['active' => Route::currentRouteName() === 'site.contact']) href="{{ route('site.contact') }}" class="nav-link">Contact</a></li>
                    </ul>
                </nav>
            </div>


        </div>
    </div>

</header>
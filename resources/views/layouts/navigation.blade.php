<nav x-data="{ open: false }" class="bg-[#003366] border-b border-yellow-400 text-white shadow">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center">
            <!-- Logo -->
            @auth
                <div class="flex items-center gap-3">
                    <a href="{{ route('dashboard') }}">
                        <img src="{{ asset('images/logo-cjsen.jpg') }}" alt="Logo CJSEN"
                            class="h-9 w-auto rounded-full shadow-md">
                    </a>
                    <span class="font-bold text-xl text-yellow-400 inline">CJSENCARD</span>
                </div>
            @endauth
            @guest
                <div class="flex items-center gap-3">
                    <a href="#">
                        <img src="{{ asset('images/logo-cjsen.jpg') }}" alt="Logo CJSEN"
                            class="h-9 w-auto rounded-full shadow-md">
                    </a>
                    <span class="font-bold text-xl text-yellow-400 inline">CJSENCARD</span>
                </div>
            @endguest


            <!-- Navigation Links -->
            @auth
                <div class="hidden sm:flex sm:items-center sm:space-x-6">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')"
                        class="text-white hover:text-yellow-300">
                        Dashboard
                    </x-nav-link>
                    <x-nav-link :href="route('cards.index')" :active="request()->routeIs('cards.*')"
                        class="text-white hover:text-yellow-300">
                        Cartes
                    </x-nav-link>
                </div>
            @endauth


            <!-- User Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6 relative z-50">
                <div class="relative inline-block text-left">
                    @auth
                        <div>
                            <button @click="open = !open"
                                class="inline-flex items-center px-3 py-2 border border-transparent text-sm font-medium rounded-md text-white hover:bg-yellow-400 hover:text-black transition"
                                id="menu-button" aria-expanded="true" aria-haspopup="true">
                                {{ Auth::user()->name }}
                                <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                        </div>

                        <div x-show="open" @click.away="open = false"
                            class="origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none z-50"
                            role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                            <div class="py-1" role="none">
                                <x-dropdown-link :href="route('profile.edit')">
                                    Profil
                                </x-dropdown-link>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault(); this.closest('form').submit();">
                                        Se déconnecter
                                    </x-dropdown-link>
                                </form>
                            </div>
                        </div>
                    @endauth
                    @guest
                        <div>
                            <button
                                class="inline-flex items-center px-3 py-2 border border-transparent text-sm font-medium rounded-md text-white hover:bg-yellow-400 hover:text-black transition"
                                id="menu-button" aria-expanded="true" aria-haspopup="true">
                                Visiteur
                            </button>
                        </div>
                    @endguest
                </div>
            </div>

            <!-- Hamburger (Mobile) -->
            @auth
                <div class="sm:hidden">
                    <button @click="open = ! open" class="text-yellow-400 focus:outline-none">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path :class="{'hidden': open, 'inline-flex': !open}" class="inline-flex" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{'hidden': !open, 'inline-flex': open}" class="hidden" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            @endauth
            @guest
                <div class="sm:hidden">
                    <button class="text-yellow-400 focus:outline-none">
                        VISITEUR
                    </button>
                </div>
            @endguest
        </div>
    </div>

    <!-- Mobile Menu -->
    <div :class="{'block': open, 'hidden': ! open}"
        class="hidden sm:hidden bg-[#002244] text-white px-4 py-3 space-y-2">
        <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
            Dashboard
        </x-responsive-nav-link>
        <x-responsive-nav-link :href="route('cards.index')" :active="request()->routeIs('cards.*')">
            Cartes
        </x-responsive-nav-link>
        <x-responsive-nav-link :href="route('profile.edit')">
            Profil
        </x-responsive-nav-link>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <x-responsive-nav-link :href="route('logout')"
                onclick="event.preventDefault(); this.closest('form').submit();">
                Se déconnecter
            </x-responsive-nav-link>
        </form>
    </div>
</nav>
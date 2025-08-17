<x-guest-layout>
    <div class="max-w-md mx-auto mt0 bg-white border border-gray-200 rounded-xl shadow-lg overflow-hidden">
        <div class="px-6 py-8">
            <div class="text-center mb-6">
                <img src="{{ asset('images/logo-cjsen.jpg') }}" alt="Logo CJSEN"
                    class="mx-auto w-20 h-20 rounded-full shadow">
                <h2 class="text-2xl font-bold mt-4 text-[#003366]">Connexion à votre compte</h2>
                <p class="text-sm text-gray-500">Entrez vos identifiants pour continuer</p>
            </div>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div class="mb-4">
                    <x-input-label for="email" :value="__('Adresse email')" class="text-[#003366]" />
                    <x-text-input id="email" type="email" name="email" :value="old('email')" required autofocus
                        autocomplete="username" class="w-full mt-1" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-600 text-sm" />
                </div>

                <!-- Password -->
                <div class="mb-4">
                    <x-input-label for="password" :value="__('Mot de passe')" class="text-[#003366]" />
                    <x-text-input id="password" type="password" name="password" required autocomplete="current-password"
                        class="w-full mt-1" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-600 text-sm" />
                </div>

                <!-- Remember Me -->
                <div class="flex items-center justify-between mb-6">
                    <label for="remember_me" class="inline-flex items-center text-sm text-gray-600">
                        <input id="remember_me" type="checkbox"
                            class="rounded border-gray-300 text-[#FFD700] shadow-sm focus:ring-[#003366]"
                            name="remember">
                        <span class="ml-2">Se souvenir de moi</span>
                    </label>

                    @if (Route::has('password.request'))
                        <a class="text-sm text-[#003366] hover:underline" href="{{ route('password.request') }}">
                            Mot de passe oublié ?
                        </a>
                    @endif
                </div>

                <div class="flex justify-center mt-6">
                    <x-primary-button
                        class="bg-[#003366] hover:bg-[#002244] text-white py-2 px-6 rounded-md font-semibold shadow">
                        Se connecter
                    </x-primary-button>
                </div>
            </form>
        </div>

        <div class="bg-[#003366] text-white text-center py-3 text-sm">
            © {{ date('Y') }} {{ config('app.name', 'CJSEN') }}. Tous droits réservés.
        </div>
    </div>
</x-guest-layout>
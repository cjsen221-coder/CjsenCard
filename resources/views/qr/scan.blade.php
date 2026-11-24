<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Scanner un QR code</h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-xl mx-auto px-4 space-y-4">
            <div id="reader" class="w-full rounded overflow-hidden bg-gray-100"></div>
            <p id="msg" class="text-sm text-gray-600">Pointez la caméra vers le QR code de la carte.</p>

            <div class="flex gap-2">
                <input id="manual" type="text" placeholder="ou saisir le code : CJSEN-001"
                       class="flex-1 border-gray-300 rounded-md">
                <button id="go" type="button" class="px-4 py-2 bg-gray-800 text-white rounded-md text-sm">Ouvrir</button>
            </div>

            <a href="{{ route('qr.index') }}" class="text-sm text-indigo-600 hover:underline">← Liste des QR codes</a>
        </div>
    </div>

    <script src="https://unpkg.com/html5-qrcode@2.3.8/html5-qrcode.min.js"></script>
    <script>
        const resolveBase = @json(url('/q'));
        const msg = document.getElementById('msg');

        function extractCode(text) {
            const m = String(text).match(/CJSEN-\d+/i);
            return m ? m[0].toUpperCase() : null;
        }

        function go(code) {
            window.location.href = resolveBase + '/' + encodeURIComponent(code);
        }

        const scanner = new Html5Qrcode('reader');
        let done = false;

        scanner.start(
            { facingMode: 'environment' },
            { fps: 10, qrbox: { width: 250, height: 250 } },
            (text) => {
                if (done) return;
                const code = extractCode(text);
                if (!code) {
                    msg.textContent = 'QR code non reconnu : ce n’est pas une carte CJSEN.';
                    return;
                }
                done = true;
                scanner.stop().catch(() => {}).finally(() => go(code));
            },
            () => {}
        ).catch(() => {
            msg.textContent = 'Caméra inaccessible. Autorisez-la dans le navigateur (HTTPS requis) ou saisissez le code ci-dessous.';
        });

        document.getElementById('go').addEventListener('click', () => {
            const code = extractCode(document.getElementById('manual').value);
            if (code) go(code);
            else msg.textContent = 'Code invalide. Format attendu : CJSEN-001';
        });
    </script>
</x-app-layout>

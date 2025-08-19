<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

    <style>
        /* Container carte en colonne */
        .card {
            width: 85.6mm;
            height: 54mm;
            border-radius: 10px;
            overflow: hidden;
            background: #003366;
            color: #FFD700;
            display: flex;
            flex-direction: column;
            font-size: 8pt;
            font-family: Arial, sans-serif;
        }

        /* En-tête avec logo et texte */
        .card .header {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            margin-top: 5px;
            padding: 6px 10px;
            background-color: #003366;
            border-bottom: none;
            /* Pas de trait */
        }

        .header-logo {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            object-fit: cover;
        }

        .header-title {
            color: #FFD700;
            font-weight: bold;
            font-size: 10pt;
            user-select: none;
        }

        /* Contenu principal : infos et avatar côte à côte */
        .content {
            flex-grow: 1;
            display: flex;
            flex-direction: row;
            padding: 8px 10px;
        }

        /* Infos à gauche */
        .left {
            width: 60%;
            margin-top: -5px;
            margin-left: 5px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            gap: 6px;
        }

        .name {
            font-size: 12pt;
            font-weight: bold;
            color: #FFD700;
        }

        .role {
            font-size: 9pt;
            color: #ccc;
            margin-bottom: 6px;
        }

        .info {
            display: flex;
            align-items: center;
            gap: 6px;
            font-size: 8pt;
            color: #fff;
        }

        .info i {
            color: #FFD700;
            width: 12px;
            text-align: center;
        }

        /* Séparateur vertical entre infos et avatar */
        .divider {
            width: 3px;
            background-color: #FFD700;
            margin: 0 -15px 0 12px;
            border-radius: 1px;
        }

        /* Avatar et texte à droite */
        .right {
            width: 40%;
            display: flex;
            flex-direction: column;
            align-items: end;
            justify-content: center;
            text-align: center;
            padding-top: 6px;
        }

        .avatar {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            border: 3px solid #FFD700;
            object-fit: cover;
            margin-bottom: 8px;
        }

        /* Verso */
        .back-card {
            width: 85.6mm;
            height: 54mm;
            border-radius: 10px;
            overflow: hidden;
            background: #003366;
            color: #FFD700;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            font-size: 8pt;
            font-family: Arial, sans-serif;
            gap: 12px;
        }

        .qr-label {
            font-weight: bold;
            /* font-size: 10pt; */
            user-select: none;
        }

        .qr-code {
            width: 110px;
            height: 110px;
        }

        .divider-horizontal {
            width: 60%;
            border-bottom: 1.5px solid #FFD700;
            margin: 0 auto;
        }

        .url {
            font-size: 9pt;
            letter-spacing: 0.5px;
            user-select: none;
        }
    </style>
</head>

<body>

    <div class="card-wrapper" id="card-wrapper">

        <!-- RECTO -->
        <div class="card">
            <div class="header">
                <img class="header-logo" src="{{ asset('images/logo-cjsen.jpg') }}" alt="Logo">
                <div class="header-title">SEN CARREFOUR JEUNESSE (CJSEN)</div>
            </div>

            <div class="content">
                <div class="left">
                    <div class="name">{{ $card->name }}</div>
                    <div class="role">{{ $card->role }}</div>

                    @if($card->phone)
                        <div class="info"><i class="fas fa-phone"></i>{{ $card->phone }}</div>
                    @endif

                    @if($card->email)
                        <div class="info"><i class="fas fa-envelope"></i>{{ $card->email }}</div>
                    @endif

                    @if($card->whatsapp)
                        <div class="info"><i class="fas fa-map-marker-alt"></i>{{ $card->address }}</div>
                    @endif
                </div>

                <div class="divider"></div>

                <div class="right">
                    <img class="avatar"
                        src="{{ $card->avatar ? asset($card->avatar) : asset('images/default-avatar.jpg') }}"
                        alt="Avatar de {{ $card->name }}" alt="Avatar">
                </div>
            </div>
        </div>

        <!-- VERSO -->
        <div class="back-card">
            <div class="qr-label" style="display: flex; align-items: center; gap: 8px; justify-content: center;">
                <i class="fas fa-eye" style="color: #FFD700; font-size: 14pt;"></i>
                <span>Orientation - Engagement - Épanouissement</span>
            </div>
            @if(isset($qr))
                <img class="qr-code" src="data:image/svg+xml;base64,{{ $qr }}" alt="QR Code de {{ $card->name }}" />
                {{-- <img class="qr-code" src="data:image/png;base64,{{ $qr }}" alt="QR Code" /> --}}
            @endif
            <div class="divider-horizontal"></div>
            <div class="url">www.cjsen.sn</div>
        </div>

    </div>

    <script>
        window.addEventListener('DOMContentLoaded', async () => {
            const fileName = "{{ $fileName }}.pdf";
            const { jsPDF } = window.jspdf;

            const generateCardImage = async (selector) => {
                const element = document.querySelector(selector);

                await Promise.all(Array.from(element.querySelectorAll('img')).map(img => {
                    return new Promise(resolve => {
                        if (img.complete) resolve();
                        else img.onload = resolve;
                    });
                }));

                const canvas = await html2canvas(element, {
                    scale: 3,
                    useCORS: true,
                    backgroundColor: null // garder la transparence
                });

                return canvas.toDataURL('image/png');
            };

            const CARD_WIDTH = 85.60;  // mm
            const CARD_HEIGHT = 53.98; // mm

            const frontData = await generateCardImage('.card');
            const pdf = new jsPDF({
                orientation: 'landscape',
                unit: 'mm',
                format: [CARD_WIDTH, CARD_HEIGHT]
            });

            pdf.addImage(frontData, 'PNG', 0, 0, CARD_WIDTH, CARD_HEIGHT);

            const backData = await generateCardImage('.back-card');
            pdf.addPage([CARD_WIDTH, CARD_HEIGHT], 'landscape');
            pdf.addImage(backData, 'PNG', 0, 0, CARD_WIDTH, CARD_HEIGHT);

            pdf.save(fileName);

            setTimeout(() => {
                window.location.href = "{{ route('cards.index') }}";
            }, 100);
        });
    </script>

</body>

</html>
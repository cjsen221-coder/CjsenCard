<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <style>
        .card {
            width: 85.6mm;
            height: 54mm;
            border-radius: 12px;
            overflow: hidden;
            font-family: 'Georgia', serif;
            color: #fff;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.4);
            border: 2px solid #FFD700;
            position: relative;
        }

        /* --- RECTO --- */
        .front {
            background: linear-gradient(135deg, #0b0f2e, #1a1f4b);
            padding: 15px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            position: relative;
            overflow: hidden;
        }

        .front::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: repeating-linear-gradient(45deg,
                    rgba(255, 255, 255, 0.05),
                    rgba(255, 255, 255, 0.05) 1px,
                    transparent 1px,
                    transparent 10px);
            pointer-events: none;
        }

        .front::after {
            content: '';
            position: absolute;
            width: 300px;
            height: 300px;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.08) 0%, transparent 70%);
            top: 10px;
            right: 10px;
            border-radius: 50%;
            pointer-events: none;
        }

        .front .vip {
            display: flex;
            align-items: center;
<<<<<<< HEAD
            justify-content: center;
            gap: 8px;
            margin-top: 20px;
            padding: 6px 10px;
        }

        .header-logo {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid #FFEB3B;
            /* jaune vif */
        }

        .header-title {
=======
            justify-content: space-between;
            font-size: 18pt;
>>>>>>> f87d6dd528b9a65baba5b1178bdc5c931b0f21e5
            font-weight: bold;
            position: relative;
            z-index: 2;
        }

        .front .vip span span {
            margin-left: 5px;
        }

        .front .header-logo {
            width: 40px;
            height: auto;
            border-radius: 10px;
        }

        /* Trait horizontal recto */
        .front .divider {
            height: 2px;
            background-color: #FFD700;
            margin: 10px 0;
            border-radius: 1px;
            position: relative;
            z-index: 2;
        }

        .front .name {
            font-size: 12pt;
            font-weight: bold;
            position: relative;
            z-index: 2;
        }

        .front .class {
            font-family: "cursive";
            font-size: 8pt;
            text-align: right;
            position: relative;
            z-index: 2;
            letter-spacing: 1px;
            word-spacing: 1px;
        }

        .front .contact-info {
            margin-top: 10px;
            font-size: 10pt;
            line-height: 1.3;
            position: relative;
            z-index: 2;
        }

<<<<<<< HEAD
        .divider {
            width: 3px;
            background-color: #FF9800;
            margin: 20px 15px 0;
            border-radius: 1px;
            height: 110px;
        }

        .right {
            width: 40%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .avatar {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            border: 3px solid #FFEB3B;
            object-fit: cover;
        }

        .honor-badge {
            display: inline-block;
            padding: 5px;
            font-size: 8pt;
            font-weight: bold;
            color: #009688;
            /* texte turquoise */
            background-color: #FFEB3B;
            /* fond jaune vif */
            border-radius: 12px;
            /* capsule élégante */
            text-align: center;
            align-self: flex-start;
            /* évite que ça colle à droite */
            margin-bottom: 6px;
            white-space: nowrap;
        }


        /* --- Verso --- */
        .back-card {
            width: 85.6mm;
            height: 54mm;
            border-radius: 12px;
=======
        .front .contact-info div {
            margin-bottom: 2px;
        }

        /* --- VERSO --- */
        .back {
            background: linear-gradient(135deg, #0b0f2e, #1a1f4b);
            padding: 15px;
            position: relative;
>>>>>>> f87d6dd528b9a65baba5b1178bdc5c931b0f21e5
            overflow: hidden;
            border: 2px solid #FFD700;
        }

        .back::before {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            background: repeating-linear-gradient(-45deg,
                    rgba(255, 255, 255, 0.03),
                    rgba(255, 255, 255, 0.03) 2px,
                    transparent 2px,
                    transparent 20px);
            pointer-events: none;
        }

        .back .stripe {
            background-color: #FFD700;
            color: #FFF;
            height: 7mm;
            display: flex;
            border-radius: 5px;
            align-items: center;
            justify-content: center;
            gap: 8px;
            font-size: 9pt;
            font-weight: bold;
            padding: 0 10px;
            position: relative;
            z-index: 2;
        }

        .back .stripe i {
            font-size: 12pt;
            color: #FFF;
        }

        /* Container verso pour QR et texte alignés en bas */
        .back .back-content {
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: absolute;
            bottom: 10px;
            left: 15px;
            right: 15px;
            z-index: 2;
        }

        /* Trait vertical verso */
        .back .vertical-divider {
            width: 2px;
            background-color: #FFD700;
            margin: 0 15px;
            border-radius: 1px;
            height: 100px;
        }

        .back .qr img {
            width: 100px;
            height: 100px;
            box-shadow: 0 0 10px rgba(255, 215, 0, 0.6);
        }

        .back .info {
            font-size: 8pt;
            color: #40E0D0;
            text-align: right;
        }
    </style>
</head>

<body>
<<<<<<< HEAD
    <div class="card-wrapper" id="card-wrapper">

        <!-- RECTO Membre d'Honneur -->
        <div class="card honor">
            <div class="header">
                {{-- <img class="header-logo" src="{{ asset('images/logo-cjsen.jpg') }}" alt="Logo"> --}}
                <div class="header-title">SEN CARREFOUR JEUNESSE (CJSEN)</div>
=======
    <div id="card-wrapper">
        <!-- RECTO -->
        <div class="card front">
            <div class="vip">
                <span class="vip-text">
                    <span style="color:#40E0D0;">Membre</span>
                    <span style="color:#3EB489;"> D'Honneur</span>
                </span>
                <img class="header-logo" src="{{ asset('images/logo-cjsen.jpg') }}" alt="Logo">
>>>>>>> f87d6dd528b9a65baba5b1178bdc5c931b0f21e5
            </div>

            <!-- Trait horizontal -->
            <div class="divider" style="background-color:#FFD700;"></div>

            <div class="name" style="color:#FFD700;">{{ $card->name }}</div>

            <!-- Informations supplémentaires -->
            <div class="contact-info">
                <div class="phone" style="color:#ffffff;">📞 {{ $card->phone }}</div>
                <div class="email" style="color:#ffffff;">✉️ {{ $card->email }}</div>
                <div class="address" style="color:#ffffff;">🏠 {{ $card->address }}</div>
            </div>

<<<<<<< HEAD
                    @if($card->whatsapp)
                        <div class="info"><i class="fas fa-map-marker-alt"></i>{{ $card->address }}</div>
                    @endif
                </div>

                <div class="divider"></div>

                <div class="right">
                    <img class="avatar" src="{{ asset('images/logo-cjsen.jpg') }}" alt="Avatar de {{ $card->name }}">

                </div>
=======
            <div class="class" style="color:#40E0D0;">
                SEN CARREFOUR JEUNESSE - CJSEN
>>>>>>> f87d6dd528b9a65baba5b1178bdc5c931b0f21e5
            </div>
        </div>

        <!-- VERSO -->
        <div class="card back">
            <div class="stripe">
                <i class="fas fa-eye"></i>
                <span>Orientation - Engagement - Épanouissement</span>
            </div>

            <div class="back-content">
                <div class="qr">
                    @if(isset($qr))
                        <img src="data:image/svg+xml;base64,{{ $qr }}" alt="QR Code {{ $card->name }}">
                    @endif
                </div>

<<<<<<< HEAD
            <div class="divider-horizontal"></div>
            <div class="url">
                www.cjsen.sn
                <span class="separator">|</span>
                {{ $card->serial_number }}
=======
                <!-- Trait vertical -->
                <div class="vertical-divider"></div>

                <div class="info">
                    SEN CARREFOUR JEUNESSE <br>
                    cjsen221@gmail.com <br>
                    +221 78 849 57 30 <br>
                    www.cjsen.sn
                </div>
>>>>>>> f87d6dd528b9a65baba5b1178bdc5c931b0f21e5
            </div>
        </div>
    </div>

    <script>
        window.addEventListener('DOMContentLoaded', async () => {
            const fileName = "{{ $fileName ?? 'vip-card' }}.pdf";
            const { jsPDF } = window.jspdf;

            const generateCardImage = async (selector) => {
                const element = document.querySelector(selector);
                if (!element) return null;

                await Promise.all(Array.from(element.querySelectorAll('img')).map(img => {
                    return new Promise(resolve => {
                        if (img.complete) resolve();
                        else img.onload = resolve;
                    });
                }));

                const canvas = await html2canvas(element, {
                    scale: 3,
                    useCORS: true,
                    backgroundColor: null
                });
                return canvas.toDataURL('image/png');
            };

            const CARD_WIDTH = 85.60;
            const CARD_HEIGHT = 53.98;

            // Recto
            const frontData = await generateCardImage('.card.front');
            if (!frontData) return;

            const pdf = new jsPDF({
                orientation: 'landscape',
                unit: 'mm',
                format: [CARD_WIDTH, CARD_HEIGHT]
            });
            pdf.addImage(frontData, 'PNG', 0, 0, CARD_WIDTH, CARD_HEIGHT);

            // Verso
            const backData = await generateCardImage('.card.back');
            if (!backData) return;

            pdf.addPage([CARD_WIDTH, CARD_HEIGHT], 'landscape');
            pdf.addImage(backData, 'PNG', 0, 0, CARD_WIDTH, CARD_HEIGHT);

            // pdf.save(fileName);

            // setTimeout(() => {
            //     window.location.href = "{{ route('cards.index') }}";
            // }, 100);
        });
    </script>
</body>

</html>

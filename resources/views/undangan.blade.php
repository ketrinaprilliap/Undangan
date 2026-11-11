
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Royal Wedding | {{ $mempelai?->nama_pria ?? 'Budi' }} & {{ $mempelai?->nama_wanita ?? 'Siti' }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500&family=Cormorant+Garamond:wght@400;500;600;700&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --gold: #b99a61;
            --gold-light: #e5d1a7;
            --gold-dark: #80643b;
            --ivory: #fbf8f1;
            --cream: #f1eadc;
            --brown: #453b2e;
            --muted: #827766;

            --gold-foil: linear-gradient(
    135deg,
    #8b672e 0%,
    #d9bd7b 18%,
    #fff1c6 35%,
    #b18a46 52%,
    #f5dfaa 70%,
    #94703a 100%
);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
            scroll-padding-top: 90px;
        }

        body {
            background: var(--ivory);
            color: var(--brown);
            font-family: 'Montserrat', sans-serif;
            overflow-x: hidden;
            background-image:
                radial-gradient(circle at 10% 15%, rgba(185,154,97,.09), transparent 25%),
                radial-gradient(circle at 90% 80%, rgba(185,154,97,.09), transparent 25%);
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        button, input, textarea, select {
            font: inherit;
        }

        /* FRAME HALAMAN */

        .page-frame {
            position: fixed;
            inset: 10px;
            border: 1px solid rgba(185,154,97,.45);
            pointer-events: none;
            z-index: 30;
        }

        .page-frame::before {
            content: "";
            position: absolute;
            inset: 5px;
            border: 1px solid rgba(185,154,97,.22);
        }

        /* NAVBAR */

        .navbar {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 25;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 20px 7%;
            background: rgba(251,248,241,.96);
            border-bottom: 1px solid var(--gold-light);
            box-shadow: 0 5px 25px rgba(80,60,30,.06);
            backdrop-filter: blur(12px);
        }

        .brand {
            font-family: 'Playfair Display', serif;
font-style: italic;
font-weight: 500;
            font-size: 31px;
            color: var(--gold-dark);
            white-space: nowrap;
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 25px;
            list-style: none;
        }

        .nav-links a {
            font-size: 9px;
            letter-spacing: 2px;
            transition: .3s;
        }

        .nav-links a:hover {
            color: var(--gold);
        }

        .menu-toggle {
            display: none;
            border: none;
            background: none;
            color: var(--gold-dark);
            font-size: 25px;
            cursor: pointer;
        }

        /* UMUM */

        .section {
            position: relative;
            padding: 110px 8%;
            overflow: hidden;
            isolation: isolate;
        }

        .section::before,
        .section::after {
            position: absolute;
            z-index: -1;
            color: rgba(185,154,97,.22);
            font-family: 'Cormorant Garamond', serif;
            font-size: 105px;
            line-height: 1;
            pointer-events: none;
        }

        .section::before {
            content: "❦";
            top: 15px;
            left: 25px;
        }

        .section::after {
            content: "❧";
            bottom: 15px;
            right: 25px;
        }

        .section-heading {
            text-align: center;
            margin-bottom: 55px;
        }

        .section-heading .overline {
            display: block;
            color: var(--gold-dark);
            letter-spacing: 5px;
            font-size: 10px;
            text-transform: uppercase;
        }

        .section-heading h2 {
            font-family: 'Cormorant Garamond', serif;
            font-size: clamp(42px, 6vw, 68px);
            font-weight: 500;
            margin: 12px 0;
        }

        .ornament {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 15px;
            color: var(--gold);
            font-size: 23px;
            margin: 18px 0;
        }

        .ornament::before,
        .ornament::after {
            content: "";
            width: 75px;
            height: 1px;
            background: var(--gold-light);
        }

        .intro {
            max-width: 650px;
            margin: auto;
            text-align: center;
            font-size: 12px;
            line-height: 2.2;
            color: var(--muted);
        }

        /* HERO */

     /* HERO ROYAL BAROQUE */

.hero {
    min-height: 100vh;
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 125px 7% 80px;
    overflow: hidden;
    background:
        radial-gradient(ellipse at 20% 50%, #fff 0%, transparent 55%),
        linear-gradient(135deg, #fdf9f0, #ead9bb, #fffaf0);
}

.hero::before {
    content: "❦";
    position: absolute;
    top: -55px;
    left: -35px;
    font-family: 'Cormorant Garamond', serif;
    font-size: 230px;
    color: rgba(177,137,69,.25);
    transform: rotate(-35deg);
}

.hero::after {
    content: "❦";
    position: absolute;
    bottom: -75px;
    right: -35px;
    font-size: 230px;
    color: rgba(177,137,69,.25);
    transform: rotate(145deg);
}

.hero-frame {
    width: 100%;
    max-width: 1250px;
    min-height: 650px;
    display: grid;
    grid-template-columns: 1fr 1fr;
    align-items: center;
    gap: 55px;
    padding: 55px;
    color: var(--brown);
    border: 1px solid rgba(185,154,97,.7);
    outline: 1px solid rgba(185,154,97,.35);
    outline-offset: 9px;
    background: rgba(255,253,248,.72);
    box-shadow: 0 20px 65px rgba(80,60,30,.13);
    position: relative;
    z-index: 1;
}

.hero-photo {
    position: relative;
    min-height: 520px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.hero-photo::before {
    content: "";
    position: absolute;
    width: 85%;
    height: 95%;
    border: 3px double var(--gold);
    border-radius: 48% 48% 8px 8px;
    box-shadow:
        0 0 0 8px rgba(185,154,97,.12),
        0 0 0 14px rgba(255,255,255,.8),
        0 15px 45px rgba(80,60,30,.15);
}

.hero-photo::after {
    content: "❦";
    position: absolute;
    top: -8px;
    left: 50%;
    transform: translateX(-50%);
    color: var(--gold-dark);
    font-size: 65px;
    text-shadow: 0 2px 5px rgba(80,60,30,.2);
}

.hero-couple-photos {
    position: relative;
    z-index: 1;
    width: 78%;
    height: 440px;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 8px;
    overflow: hidden;
    border-radius: 48% 48% 5px 5px;
    padding: 8px;
    background: linear-gradient(135deg, #d7b77b, #fff4d9, #a9803e);
    box-shadow: 0 12px 35px rgba(80,60,30,.2);
}

.hero-couple-photos img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    min-width: 0;
}

.hero-couple-photos img:first-child {
    border-radius: 48% 0 0 5px;
}

.hero-couple-photos img:last-child {
    border-radius: 0 48% 5px 0;
}

.hero-content {
    text-align: center;
    padding: 20px;
}

.hero-label {
    color: var(--gold-dark);
    font-size: 11px;
    letter-spacing: 5px;
    text-transform: uppercase;
}

.hero h1 {
    font-family: 'Playfair Display', serif;
    font-style: italic;
    font-weight: 500;
    font-size: clamp(65px, 7vw, 100px);
    font-weight: 400;
    line-height: 1.2;
    color: #a47735;
    margin: 25px 0;
    text-shadow: 1px 2px 2px rgba(120,80,25,.15);
}

.hero-divider {
    width: 75%;
    height: 1px;
    margin: 25px auto;
    background: linear-gradient(
        to right,
        transparent,
        var(--gold),
        transparent
    );
}

.hero-date {
    font-family: 'Cormorant Garamond', serif;
    font-size: 28px;
    letter-spacing: 4px;
    color: var(--gold-dark);
}

.hero-note {
    margin-top: 25px;
    font-size: 10px;
    letter-spacing: 3px;
    line-height: 2;
    color: var(--muted);
}

.hero-button {
    display: inline-block;
    margin-top: 30px;
    padding: 15px 35px;
    color: white;
    background: linear-gradient(135deg, #d6b574, #98703a, #d7b77b);
    border: 3px double #f8e6bc;
    outline: 1px solid var(--gold-dark);
    outline-offset: 3px;
    font-size: 10px;
    letter-spacing: 2px;
    box-shadow: 0 8px 20px rgba(100,70,30,.2);
    transition: .3s;
}

.hero-button:hover {
    transform: translateY(-4px);
    box-shadow: 0 12px 25px rgba(100,70,30,.3);
}
        /* MEMPELAI */

        .couple-section {
            background:
                radial-gradient(ellipse at top left, rgba(223,201,157,.2), transparent 35%),
                var(--ivory);
        }

        .couple-grid {
            display: grid;
            grid-template-columns: 1fr 100px 1fr;
            align-items: center;
            gap: 25px;
            max-width: 1050px;
            margin: auto;
        }

        .person {
            text-align: center;
        }

        .photo-frame {
            position: relative;
            width: min(310px, 100%);
            height: 390px;
            margin: auto;
            padding: 9px;
            border: 2px solid var(--gold);
            outline: 1px solid var(--gold-light);
            outline-offset: 7px;
            background: white;
            box-shadow: 0 15px 40px rgba(80,60,30,.13);
            transition: .5s;
        }

        .photo-frame::before {
            content: "✧";
            position: absolute;
            top: -26px;
            left: 50%;
            transform: translateX(-50%);
            font-size: 30px;
            color: var(--gold);
            z-index: 2;
        }

        .photo-frame::after {
            content: "";
            position: absolute;
            inset: 5px;
            border: 1px solid var(--gold-light);
            pointer-events: none;
        }

        .photo-frame:hover {
            transform: translateY(-8px);
            box-shadow: 0 25px 45px rgba(80,60,30,.2);
        }

        .photo-frame img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center top;
            border-radius: 44% 44% 0 0;
        }

        .person h3 {
            font-family: 'Playfair Display', serif;
font-style: italic;
font-weight: 500;
            font-size: 49px;
            font-weight: 400;
            color: var(--gold-dark);
            margin-top: 30px;
        }

        .person p {
            max-width: 290px;
            margin: 10px auto;
            color: var(--muted);
            font-size: 11px;
            line-height: 2;
        }

        .ampersand {
            font-family: 'Playfair Display', serif;
font-style: italic;
font-weight: 500;
            color: var(--gold);
            font-size: 80px;
            text-align: center;
        }

        /* ACARA */

        .event-section {
            background:
                radial-gradient(circle at center, rgba(255,255,255,.7), transparent 70%),
                #f1eadc;
        }

       .event-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(min(100%, 480px), 480px));
    justify-content: center;
    gap: 35px;
    width: 100%;
    max-width: 1100px;
    margin: 0 auto;
    padding: 0 20px;

        }

        .event-card {
            position: relative;
            padding: 48px 30px;
            text-align: center;
            background: #fffdf8;
            border: 1px solid var(--gold);
            outline: 1px solid rgba(185,154,97,.35);
            outline-offset: -9px;
            box-shadow: 0 15px 35px rgba(70,50,20,.08);
            transition: .4s;
        }

        .event-card::before,
        .event-card::after {
            position: absolute;
            color: rgba(185,154,97,.32);
            font-size: 45px;
        }

        .event-card::before {
            content: "❦";
            top: 12px;
            left: 15px;
        }

        .event-card::after {
            content: "❧";
            bottom: 12px;
            right: 15px;
        }

        .event-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 25px 45px rgba(70,50,20,.15);
        }

        .event-icon {
            color: var(--gold);
            font-size: 34px;
        }

        .event-card h3 {
            font-family: 'Cormorant Garamond', serif;
            font-size: 40px;
            font-weight: 500;
            margin: 15px 0;
        }

        .event-date {
            color: var(--gold-dark);
            font-size: 12px;
            letter-spacing: 2px;
            line-height: 2;
        }

        .event-card p {
            margin-top: 15px;
            color: var(--muted);
            font-size: 11px;
            line-height: 2.2;
        }

        .event-card a {
            display: inline-block;
            margin-top: 23px;
            padding: 13px 25px;
            border: 1px solid var(--gold);
            color: var(--gold-dark);
            font-size: 9px;
            letter-spacing: 2px;
            transition: .3s;
        }

        .event-card a:hover {
            background: var(--gold-dark);
            color: white;
        }

        /* COUNTDOWN */

        .countdown-section {
            text-align: center;
            color: white;
            background:
                linear-gradient(rgba(39,31,22,.78), rgba(39,31,22,.82)),
                url('https://images.unsplash.com/photo-1519225421980-715cb0215aed?auto=format&fit=crop&w=1800&q=90') center/cover fixed;
        }

        .countdown-section h2 {
            font-family: 'Cormorant Garamond', serif;
            font-size: clamp(42px, 6vw, 65px);
            font-weight: 400;
            margin: 18px 0 45px;
            color: #f4e4c5;
        }

        .countdown {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
        }

        .count-box {
            width: 120px;
            padding: 23px 10px;
            border: 1px solid var(--gold-light);
            outline: 1px solid rgba(223,201,157,.35);
            outline-offset: 5px;
            margin: 5px;
            background: rgba(255,255,255,.07);
        }

        .count-box strong {
            display: block;
            font-family: 'Cormorant Garamond', serif;
            font-size: 48px;
            font-weight: 500;
            color: #f3dfb8;
        }

        .count-box span {
            font-size: 9px;
            letter-spacing: 2px;
        }

        /* OUR STORY */

        .story-section {
            background: var(--ivory);
        }

        .story-content {
            position: relative;
            max-width: 780px;
            margin: auto;
            padding: 65px 55px;
            text-align: center;
            background: #fffdf8;
            border: 1px solid var(--gold);
            outline: 1px solid rgba(185,154,97,.35);
            outline-offset: 8px;
            box-shadow: 0 15px 40px rgba(80,60,30,.07);
        }

        .story-content::before {
            content: "❦";
            display: block;
            color: var(--gold);
            font-size: 45px;
            margin-bottom: 20px;
        }

        .story-content p {
            font-family: 'Cormorant Garamond', serif;
            font-size: 27px;
            line-height: 1.8;
            color: #625747;
        }

        .story-content::after {
            content: "✧  ❦  ✧";
            display: block;
            color: var(--gold);
            font-size: 25px;
            letter-spacing: 10px;
            margin-top: 25px;
        }

        /* GALERI */

        .gallery-section {
            background: #f1eadc;
        }

        .gallery {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-auto-rows: 230px;
            gap: 20px;
            max-width: 1100px;
            margin: auto;
        }

        .gallery-item {
            position: relative;
            overflow: hidden;
            padding: 7px;
            background: #fffdf8;
            border: 1px solid var(--gold);
            box-shadow: 0 10px 30px rgba(50,35,15,.1);
        }

        .gallery-item:nth-child(3n + 1) {
            grid-row: span 2;
        }

        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform .7s;
        }

        .gallery-item:hover img {
            transform: scale(1.08);
        }

        .gallery-item::after {
            content: "✧";
            position: absolute;
            right: 15px;
            bottom: 12px;
            color: #f3dfb8;
            font-size: 25px;
            text-shadow: 0 1px 4px rgba(0,0,0,.3);
        }

        /* RSVP DAN UCAPAN */

        .rsvp-section {
            background:
                radial-gradient(ellipse at bottom right, rgba(223,201,157,.2), transparent 40%),
                var(--ivory);
        }

        .form-card {
            position: relative;
            max-width: 650px;
            margin: auto;
            padding: 45px;
            background: #fffdf8;
            border: 1px solid var(--gold);
            outline: 1px solid rgba(185,154,97,.35);
            outline-offset: 7px;
            box-shadow: 0 15px 45px rgba(80,60,30,.08);
        }

        .form-card::before {
            content: "✧  ❦  ✧";
            display: block;
            text-align: center;
            color: var(--gold);
            font-size: 25px;
            letter-spacing: 10px;
            margin-bottom: 25px;
        }

        .form-group {
            margin-bottom: 23px;
        }

        .form-group label {
            display: block;
            margin-bottom: 10px;
            color: var(--gold-dark);
            font-size: 10px;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 15px;
            border: 1px solid #dfd3bd;
            background: white;
            color: var(--brown);
            font-family: 'Montserrat', sans-serif;
            font-size: 12px;
            outline: none;
            transition: .3s;
        }

        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            border-color: var(--gold);
            box-shadow: 0 0 0 3px rgba(185,154,97,.1);
        }

        .gold-button {
            width: 100%;
            padding: 16px;
            border: 1px solid var(--gold-dark);
            background: var(--gold-dark);
            color: white;
            font-size: 10px;
            letter-spacing: 3px;
            text-transform: uppercase;
            cursor: pointer;
            transition: .3s;
        }

        .gold-button:hover {
            background: var(--gold);
            border-color: var(--gold);
        }

        .success-message {
            padding: 15px;
            margin-bottom: 20px;
            background: #edf4e9;
            color: #486448;
            font-size: 12px;
            line-height: 1.8;
        }

        .error-message {
            display: block;
            margin-top: 6px;
            color: #a33;
            font-size: 11px;
        }

        /* UCAPAN */

        .wishes-section {
            background: #f1eadc;
        }

        .wishes-list {
            display: grid;
            gap: 16px;
            max-width: 750px;
            margin: 50px auto 0;
        }

        .wish-card {
            position: relative;
            padding: 28px 30px;
            background: #fffdf8;
            border: 1px solid rgba(185,154,97,.4);
            border-left: 4px solid var(--gold);
            box-shadow: 0 8px 25px rgba(80,60,30,.06);
        }

        .wish-card h3 {
            font-family: 'Cormorant Garamond', serif;
            font-size: 27px;
            color: var(--gold-dark);
        }

        .wish-card p {
            margin-top: 8px;
            color: var(--muted);
            font-size: 12px;
            line-height: 2;
        }

        .wish-card::after {
            content: "❧";
            position: absolute;
            top: 12px;
            right: 20px;
            color: rgba(185,154,97,.4);
            font-size: 32px;
        }

        /* FOOTER */

        footer {
            position: relative;
            padding: 75px 20px;
            text-align: center;
            color: #f6eddd;
            background: #3b352c;
            border-top: 3px double var(--gold);
        }

        footer::before {
            content: "❦  ✧  ❦";
            display: block;
            color: var(--gold-light);
            font-size: 30px;
            letter-spacing: 12px;
            margin-bottom: 15px;
        }

        footer .footer-names {
            margin: 15px 0;
            color: #e3c99b;
            font-family: 'Playfair Display', serif;
font-style: italic;
font-weight: 500;
            font-size: 58px;
        }

        footer p {
            font-size: 10px;
            letter-spacing: 2px;
            line-height: 2.5;
        }

        /* ANIMASI */

        @keyframes royalReveal {
            from {
                opacity: 0;
                transform: translateY(25px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .section-heading,
        .event-card,
        .person,
        .story-content,
        .gallery-item,
        .form-card {
            animation: royalReveal .8s ease both;
        }

        /* RESPONSIVE */

        @media(max-width: 900px) {
            .navbar {
                padding: 18px 7%;
            }

            .menu-toggle {
                display: block;
            }

            .nav-links {
                display: none;
                position: absolute;
                top: 70px;
                left: 0;
                width: 100%;
                padding: 25px;
                background: var(--ivory);
                flex-direction: column;
                gap: 22px;
                text-align: center;
                border-bottom: 1px solid var(--gold-light);
            }

            .nav-links.active {
                display: flex;
            }

            .couple-grid {
                grid-template-columns: 1fr;
                gap: 35px;
            }

            .ampersand {
                font-size: 60px;
            }

            .event-grid {
                grid-template-columns: 1fr;
            }

            .gallery {
                grid-template-columns: repeat(2, 1fr);
                grid-auto-rows: 180px;
            }

            .gallery-item:nth-child(3n + 1) {
                grid-row: span 1;
            }

            .gallery-item:nth-child(4n + 1) {
                grid-row: span 2;
            }

            .section {
                padding: 85px 6%;
            }
        }

        @media(max-width: 480px) {
            .page-frame {
                inset: 5px;
            }

            .brand {
                font-size: 25px;
            }

            .hero {
                padding-left: 25px;
                padding-right: 25px;
            }

            .hero-frame {
                padding: 65px 18px;
                outline-offset: 9px;
            }

            .hero-date {
                font-size: 19px;
            }

            .hero::before,
            .hero::after {
                font-size: 55px;
            }

            .photo-frame {
                height: 340px;
            }

            .story-content {
                padding: 40px 25px;
            }

            .story-content p {
                font-size: 21px;
            }

            .form-card {
                padding: 28px 20px;
            }

            .countdown {
                gap: 8px;
            }

            .count-box {
                width: 75px;
                padding: 15px 5px;
            }

            .count-box strong {
                font-size: 32px;
            }

            .count-box span {
                font-size: 8px;
                letter-spacing: 1px;
            }

            .gallery {
                grid-auto-rows: 140px;
                gap: 12px;
            }

            .section::before,
            .section::after {
                font-size: 55px;
            }

            footer .footer-names {
                font-size: 45px;
            }
        }

        @media(prefers-reduced-motion: reduce) {
            *,
            *::before,
            *::after {
                animation: none !important;
                transition: none !important;
                scroll-behavior: auto !important;
            }
        }
        @media(max-width: 900px) {
    .hero {
        padding: 110px 7% 65px;
    }

    .hero-frame {
        grid-template-columns: 1fr;
        gap: 30px;
        padding: 35px 20px;
    }

    .hero-photo {
        min-height: 420px;
    }

    .hero-couple-photos {
        height: 350px;
        max-width: 400px;
    }

    .hero-content {
        padding: 10px;
    }
}

@media(max-width: 480px) {
    .hero-frame {
        padding: 25px 15px;
    }

    .hero-photo {
        min-height: 330px;
    }

    .hero-couple-photos {
        height: 280px;
        width: 85%;
    }

    .hero h1 {
        font-size: 58px;
    }

    .hero-date {
        font-size: 22px;
    }

    .hero-label {
        font-size: 9px;
        letter-spacing: 3px;
    }
}
/* GOLD FOIL ROYAL EFFECT */

.section-heading h2,
.person h3,
.event-card h3,
footer .footer-names {
    background: var(--gold-foil);
    background-clip: text;
    -webkit-background-clip: text;
    color: transparent;
}

.section-heading {
    position: relative;
}

.section-heading::before,
.section-heading::after {
    content: "❧";
    position: absolute;
    top: 20px;
    font-family: 'Cormorant Garamond', serif;
    font-size: 65px;
    color: rgba(185,154,97,.35);
}

.section-heading::before {
    left: 8%;
    transform: rotate(-35deg);
}

.section-heading::after {
    right: 8%;
    transform: scaleX(-1) rotate(-35deg);
}

/* BINGKAI UKIRAN */

.photo-frame,
.event-card,
.story-content,
.form-card {
    border: 2px solid transparent;
    background:
        linear-gradient(#fffdf8, #fffdf8) padding-box,
        var(--gold-foil) border-box;
}

.photo-frame::before,
.event-card::before,
.story-content::before,
.form-card::before {
    text-shadow: 0 2px 5px rgba(120,80,25,.2);
}

/* EFEK KILAU EMAS */

.gold-button,
.hero-button {
    background-size: 200% 200%;
    background-image: var(--gold-foil);
    color: #493719;
    font-weight: 600;
}

.gold-button:hover,
.hero-button:hover {
    background-position: right center;
    color: white;
}

/* UKIRAN SUDUT */

.event-card,
.story-content,
.form-card,
.photo-frame {
    box-shadow:
        0 12px 30px rgba(100,75,35,.10),
        inset 0 0 20px rgba(185,154,97,.06);
}

.event-card {
    outline: 1px solid rgba(185,154,97,.5);
    outline-offset: -12px;
}

.gallery-item {
    border: 3px double var(--gold);
    outline: 1px solid rgba(185,154,97,.3);
    outline-offset: 4px;
}

/* DEKORASI LATAR */

.couple-section,
.story-section,
.rsvp-section {
    background-image:
        radial-gradient(ellipse at top left, rgba(205,174,112,.17), transparent 32%),
        radial-gradient(ellipse at bottom right, rgba(205,174,112,.17), transparent 32%);
}.photo-frame {
    border-radius: 48% 48% 5px 5px;
    padding: 12px;
    background-color: #fffdf8;
}

.photo-frame::after {
    border: 2px solid rgba(185,154,97,.55);
    border-radius: 45% 45% 3px 3px;
}

.photo-frame::before {
    content: "❦";
    top: -32px;
    font-size: 42px;
    background: var(--gold-foil);
    background-clip: text;
    -webkit-background-clip: text;
    color: transparent;
}
/* WEDDING EVENTS - ROYAL DESIGN */
.event-section {
    background:
        radial-gradient(circle at 10% 20%, rgba(185,154,97,.12), transparent 30%),
        radial-gradient(circle at 90% 80%, rgba(185,154,97,.12), transparent 30%),
        linear-gradient(135deg, #f8f2e7, #eee3d0);
}

.event-section .section-heading {
    margin-bottom: 65px;
}

.event-grid {
    max-width: 1050px;
    gap: 35px;
}

.event-card {
    padding: 55px 35px;
    border: 1px solid #c5a66c;
    outline: 1px solid rgba(185,154,97,.4);
    outline-offset: -10px;
    border-radius: 4px;
    background: linear-gradient(145deg, #fffefa, #f9f3e8);
    box-shadow: 0 15px 40px rgba(75, 55, 25, .10);
    transition: all .4s ease;
}

.event-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 25px 50px rgba(75, 55, 25, .18);
}

.event-icon {
    width: 75px;
    height: 75px;
    margin: 0 auto 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    border: 1px solid var(--gold);
    border-radius: 50%;
    background: #f5ead5;
    color: var(--gold-dark);
    font-size: 35px;
}

.event-card h3 {
    color: var(--gold-dark);
    font-size: 38px;
    margin-bottom: 12px;
}

.event-date {
    display: inline-block;
    padding: 10px 18px;
    margin-top: 8px;
    background: #f1e6d2;
    border-top: 1px solid var(--gold-light);
    border-bottom: 1px solid var(--gold-light);
    color: var(--gold-dark);
    font-weight: 600;
}

.event-card p {
    font-size: 12px;
    line-height: 2;
    margin-top: 18px;
}

.event-card p strong {
    color: var(--brown);
    font-size: 14px;
}

.event-card a {
    padding: 13px 28px;
    background: var(--gold-dark);
    color: white;
    border: 1px solid var(--gold-dark);
    transition: .3s;
}

.event-card a:hover {
    background: transparent;
    color: var(--gold-dark);
}

@media (max-width: 768px) {
    .event-grid {
        grid-template-columns: 1fr;
        gap: 25px;
    }

    .event-card {
        padding: 45px 25px;
    }

    .event-card h3 {
        font-size: 34px;
    }
}.event-grid > .intro {
    grid-column: 1 / -1;
    text-align: center;
    width: 100%;
    max-width: 100%;
    padding: 35px 20px;
    border: 1px solid var(--gold-light);
    background: rgba(255, 253, 248, .75);
    color: var(--gold-dark);
    font-family: 'Cormorant Garamond', serif;
    font-size: 22px;
    box-shadow: 0 10px 30px rgba(70, 50, 20, .06);
}

/* OUR STORY - LOVE STORY DESIGN */
.story-section {
    background: #f4f0e9;
    padding: 85px 6%;
}

.story-title {
    text-align: center;
    margin-bottom: 35px;
}

.story-title h2 {
    font-family: 'Cormorant Garamond', serif;
    font-size: 42px;
    font-weight: 500;
    letter-spacing: 3px;
    color: #453b2e;
}

.story-layout {
    display: grid;
    grid-template-columns: 1.1fr 0.9fr;
    max-width: 1050px;
    min-height: 520px;
    margin: auto;
    background: #fff;
    border-radius: 25px;
    overflow: hidden;
    box-shadow: 0 15px 40px rgba(70, 55, 35, 0.10);
}

.story-photo {
    min-height: 520px;
    overflow: hidden;
    background: #e8dfd0;
}

.story-photo img {
    width: 100%;
    height: 100%;
    min-height: 520px;
    object-fit: cover;
    display: block;
}

.story-photo-placeholder {
    width: 100%;
    height: 100%;
    min-height: 520px;
    display: flex;
    justify-content: center;
    align-items: center;
   font-family: 'Playfair Display', serif;
font-style: italic;
font-weight: 500;
    font-size: 55px;
    color: #80643b;
    background: linear-gradient(145deg, #e8dfd0, #c8b99f);
}

.story-panel {
    position: relative;
    padding: 75px 45px 45px;
    background: #fffdf9;
    text-align: center;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.story-seal {
    position: absolute;
    top: 22px;
    right: 22px;
    width: 75px;
    height: 75px;
    border: 1px solid #b99a61;
    border-radius: 50%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    color: #80643b;
}

.story-seal span {
    font-size: 20px;
}

.story-seal small {
    font-size: 7px;
    letter-spacing: 1px;
}

.story-subtitle {
    font-size: 11px;
    letter-spacing: 3px;
    color: #b99a61;
    margin-bottom: 20px;
}

.story-description {
    font-family: 'Cormorant Garamond', serif;
    font-size: 21px;
    line-height: 1.6;
    color: #514638;
    margin-bottom: 20px;
}

.story-divider {
    color: #b99a61;
    font-size: 25px;
    margin: 5px 0 15px;
}

.story-quote {
    font-family: 'Cormorant Garamond', serif;
    font-size: 17px;
    font-style: italic;
    line-height: 1.5;
    color: #76634b;
    margin-bottom: 25px;
}

.story-couple {
    font-size: 10px;
    letter-spacing: 2px;
    line-height: 2;
    color: #80643b;
}

.story-couple strong {
    font-family: 'Cormorant Garamond', serif;
    font-size: 19px;
    letter-spacing: 1px;
}

.story-couple span {
    display: block;
    margin-top: 5px;
}

/* RESPONSIVE HP */
@media (max-width: 768px) {
    .story-section {
        padding: 60px 5%;
    }

    .story-title h2 {
        font-size: 32px;
    }

    .story-layout {
        grid-template-columns: 1fr;
        max-width: 430px;
    }

    .story-photo,
    .story-photo img {
        min-height: 330px;
        height: 330px;
    }

    .story-panel {
        padding: 85px 28px 35px;
    }

    .story-description {
        font-size: 20px;
    }
}
/* FONT ROYAL WEDDING */

body {
    font-family: 'Montserrat', sans-serif;
}

h1, h2, h3 {
    font-family: 'Playfair Display', serif;
}

.hero h1 {
    font-family: 'Playfair Display', serif;
    font-style: italic;
    font-size: clamp(48px, 6vw, 75px);
    font-weight: 500;
}

.person h3 {
    font-family: 'Playfair Display', serif;
    font-style: italic;
    font-size: 42px;
}

.section-heading h2,
.story-title h2 {
    font-family: 'Playfair Display', serif;
    font-weight: 500;
}

.story-description,
.story-quote {
    font-family: 'Cormorant Garamond', serif;
}

p, input, textarea, button {
    font-family: 'Montserrat', sans-serif;
}

/* ROYAL WEDDING - LARGE TYPOGRAPHY */

/* Nama utama pengantin */
.hero h1 {
    font-family: 'Playfair Display', serif;
    font-size: clamp(48px, 6vw, 76px);
    font-weight: 600;
    font-style: italic;
    line-height: 1.3;
}

/* Judul setiap bagian */
.section-heading h2,
.story-title h2 {
    font-family: 'Playfair Display', serif;
    font-size: clamp(40px, 5vw, 58px);
    font-weight: 600;
    line-height: 1.3;
}

/* Nama mempelai */
.person h3 {
    font-family: 'Playfair Display', serif;
    font-size: 48px;
    font-weight: 500;
}

/* Judul acara */
.event-card h3 {
    font-family: 'Playfair Display', serif;
    font-size: 42px;
    font-weight: 500;
}

/* Deskripsi undangan */
.intro {
    font-size: 18px;
    line-height: 2;
}

/* Tanggal pernikahan */
.hero-date {
    font-size: 29px;
    letter-spacing: 4px;
}

/* Isi cerita cinta */
.story-content p,
.story-description {
    font-family: 'Cormorant Garamond', serif;
    font-size: 28px;
    line-height: 1.8;
}

/* Teks acara */
.event-card p,
.event-date {
    font-size: 17px;
    line-height: 1.9;
}

/* Countdown */
.count-box strong {
    font-size: 52px;
}

.count-box span {
    font-size: 13px;
}

/* Ucapan */
.wish-card h3 {
    font-size: 26px;
}

.wish-card p {
    font-size: 17px;
    line-height: 1.9;
}

/* Footer */
footer .footer-names {
    font-size: 60px;
}

footer p {
    font-size: 14px;
}

/* MOBILE */
@media (max-width: 768px) {
    .hero h1 {
        font-size: 46px;
    }

    .section-heading h2,
    .story-title h2 {
        font-size: 38px;
    }

    .person h3 {
        font-size: 42px;
    }

    .event-card h3 {
        font-size: 36px;
    }

    .intro {
        font-size: 16px;
    }

    .hero-date {
        font-size: 25px;
    }

    .story-content p,
    .story-description {
        font-size: 23px;
    }

    .event-card p,
    .event-date {
        font-size: 15px;
    }

    .wish-card p {
        font-size: 15px;
    }

    footer .footer-names {
        font-size: 48px;
    }
}

@media (max-width: 480px) {
    .hero h1 {
        font-size: 39px;
    }

    .section-heading h2,
    .story-title h2 {
        font-size: 34px;
    }

    .person h3 {
        font-size: 38px;
    }

    .event-card h3 {
        font-size: 32px;
    }

    .story-content p,
    .story-description {
        font-size: 21px;
    }

    .hero-date {
        font-size: 22px;
    }
}

    </style>
</head>

<body>

    <div class="page-frame"></div>

    @php
        $namaPria = $mempelai?->nama_pria ?? 'Budi';
        $namaWanita = $mempelai?->nama_wanita ?? 'Siti';
    @endphp

    <!-- NAVBAR -->
    <nav class="navbar">
        <a href="#home" class="brand">{{ $namaPria }} & {{ $namaWanita }}</a>

        <button class="menu-toggle" id="menuToggle" aria-label="Buka menu">☰</button>

        <ul class="nav-links" id="navLinks">
            <li><a href="#home">HOME</a></li>
            <li><a href="#mempelai">MEMPELAI</a></li>
            <li><a href="#acara">ACARA</a></li>
            <li><a href="#story">OUR STORY</a></li>
            <li><a href="#galeri">GALERI</a></li>
            <li><a href="#rsvp">RSVP</a></li>
            <li><a href="#ucapan">UCAPAN</a></li>
        </ul>
    </nav>

    <!-- HERO -->
<!-- HERO ROYAL BAROQUE -->
<header class="hero" id="home">

    <div class="hero-frame">

        <div class="hero-photo">
            <div class="hero-couple-photos">

                @if($mempelai?->foto_pria)
                    <img
                        src="{{ asset('storage/' . $mempelai->foto_pria) }}"
                        alt="{{ $namaPria }}"
                    >
                @else
                    <img
                        src="https://placehold.co/600x800/f2ede3/80683e?text=Groom"
                        alt="Foto mempelai pria"
                    >
                @endif

                @if($mempelai?->foto_wanita)
                    <img
                        src="{{ asset('storage/' . $mempelai->foto_wanita) }}"
                        alt="{{ $namaWanita }}"
                    >
                @else
                    <img
                        src="https://placehold.co/600x800/f2ede3/80683e?text=Bride"
                        alt="Foto mempelai wanita"
                    >
                @endif

            </div>
        </div>

        <div class="hero-content">

            <p class="hero-label">The Wedding Invitation</p>

            <div class="ornament">❦</div>

            <h1>{{ $namaPria }} & {{ $namaWanita }}</h1>

            <div class="hero-divider"></div>

            <p style="font-family:'Cormorant Garamond',serif;
                      font-size:21px;
                      font-style:italic;
                      line-height:1.7;
                      color:#76634b;">
                Dengan penuh rasa syukur,
                kami mengundang Bapak/Ibu/Saudara/i
                untuk hadir dalam hari bahagia kami.
            </p>

            <div class="ornament">❦</div>

            <p class="hero-date">20 · 09 · 2027</p>

            <p class="hero-note">
                WE INVITE YOU TO CELEBRATE OUR WEDDING
            </p>

            <a href="#rsvp" class="hero-button">
                KONFIRMASI KEHADIRAN
            </a>

        </div>

    </div>

</header>

    <!-- MEMPELAI -->
    <section class="section couple-section" id="mempelai">
        <div class="section-heading">
            <span class="overline">The Beloved Couple</span>
            <h2>Meet The Couple</h2>
            <div class="ornament">❦</div>
            <p class="intro">
                Dengan penuh rasa syukur, kami mengundang Anda untuk menjadi bagian dari hari bahagia kami.
            </p>
        </div>

        <div class="couple-grid">

            <div class="person">
                <div class="photo-frame">
                    @if($mempelai?->foto_pria)
                        <img src="{{ asset('storage/' . $mempelai->foto_pria) }}" alt="{{ $namaPria }}">
                    @else
                        <img src="https://placehold.co/600x800/f2ede3/80683e?text=Groom" alt="Foto mempelai pria">
                    @endif
                </div>

                <h3>{{ $namaPria }}</h3>
                <p>Putra dari keluarga tercinta</p>
            </div>

            <div class="ampersand">&</div>

            <div class="person">
                <div class="photo-frame">
                    @if($mempelai?->foto_wanita)
                        <img src="{{ asset('storage/' . $mempelai->foto_wanita) }}" alt="{{ $namaWanita }}">
                    @else
                        <img src="https://placehold.co/600x800/f2ede3/80683e?text=Bride" alt="Foto mempelai wanita">
                    @endif
                </div>

                <h3>{{ $namaWanita }}</h3>
                <p>Putri dari keluarga tercinta</p>
            </div>

        </div>
    </section>

    <!-- ACARA -->
    <section class="section event-section" id="acara">
        <div class="section-heading">
            <span class="overline">Save The Date</span>
            <h2>Wedding Events</h2>
            <div class="ornament">❦</div>
            <p class="intro">
                Merupakan suatu kehormatan dan kebahagiaan bagi kami apabila Anda berkenan hadir.
            </p>
        </div>

        <div class="event-grid">
            @forelse($acaras as $acara)
                <article class="event-card">
                    <div class="event-icon">❧</div>

                    <h3>{{ $acara->nama_acara }}</h3>

                    <div class="event-date">
                        {{ \Carbon\Carbon::parse($acara->tanggal)->translatedFormat('l, d F Y') }}
                    </div>

                    <p>
                        {{ \Carbon\Carbon::parse($acara->waktu_mulai)->format('H:i') }}
                        @if($acara->waktu_selesai)
                            – {{ \Carbon\Carbon::parse($acara->waktu_selesai)->format('H:i') }} WIB
                        @else
                            WIB
                        @endif
                    </p>

                    <p>
                        <strong>{{ $acara->lokasi }}</strong><br>
                        {{ $acara->alamat }}
                    </p>

                    <a href="https://www.google.com/maps/search/?api=1&query={{ urlencode($acara->alamat ?: $acara->lokasi) }}" target="_blank" rel="noopener">
                        VIEW LOCATION
                    </a>
                </article>
            @empty
                <p class="intro">Informasi acara akan segera tersedia.</p>
            @endforelse
        </div>
    </section>

    <!-- COUNTDOWN -->
    <section class="section countdown-section">
        <span class="overline">Counting The Days</span>

        <h2>Until Our Special Day</h2>

        <div class="countdown">
            <div class="count-box">
                <strong id="days">00</strong>
                <span>DAYS</span>
            </div>

            <div class="count-box">
                <strong id="hours">00</strong>
                <span>HOURS</span>
            </div>

            <div class="count-box">
                <strong id="minutes">00</strong>
                <span>MINUTES</span>
            </div>

            <div class="count-box">
                <strong id="seconds">00</strong>
                <span>SECONDS</span>
            </div>
        </div>
    </section>

    <!-- OUR STORY -->
    
<section class="section story-section" id="story">
    <div class="story-title">
        <h2>LOVE STORY</h2>
    </div>

    <div class="story-layout">
        <div class="story-photo">
            @if($galeris->first())
                <img
                    src="{{ asset('storage/' . $galeris->first()->foto) }}"
                    alt="Perjalanan cinta Budi dan Siti"
                >
            @else
                <div class="story-photo-placeholder">
                    Budi & Siti
                </div>
            @endif
        </div>

        <div class="story-panel">
            <div class="story-seal">
                <span>♥</span>
                <small>HAPPY WEDDING</small>
            </div>

            <span class="story-subtitle">OUR JOURNEY</span>

            <p class="story-description">
                {{ $mempelai?->deskripsi ?? 'Setiap kisah memiliki awal yang indah. Pertemuan sederhana membawa kami pada perjalanan yang penuh makna. Dengan cinta dan doa, kami memutuskan untuk melangkah bersama menuju masa depan.' }}
            </p>

            <div class="story-divider">❦</div>

            <p class="story-quote">
                "A successful marriage is built on love,
                trust, and two hearts that choose each other
                every day."
            </p>

            <div class="story-couple">
                THE WEDDING OF<br>
                <strong>{{ $namaPria }} & {{ $namaWanita }}</strong>
                <span>20 · 09 · 2027</span>
            </div>
        </div>
    </div>
</section>


    <!-- GALERI -->
    <section class="section gallery-section" id="galeri">
        <div class="section-heading">
            <span class="overline">Captured Moments</span>
            <h2>Our Gallery</h2>
            <div class="ornament">❦</div>
            <p class="intro">
                Kumpulan momen indah yang menjadi bagian dari perjalanan cinta kami.
            </p>
        </div>

        <div class="gallery">
            @forelse($galeris as $galeri)
                <div class="gallery-item">
                    <img
                        src="{{ asset('storage/' . $galeri->foto) }}"
                        alt="{{ $galeri->judul ?? 'Foto Budi dan Siti' }}"
                        loading="lazy"
                    >
                </div>
            @empty
                <p class="intro">Foto galeri belum tersedia.</p>
            @endforelse
        </div>
    </section>

    <!-- RSVP -->
    <section class="section rsvp-section" id="rsvp">
        <div class="section-heading">
            <span class="overline">Your Presence Means Everything</span>
            <h2>RSVP</h2>
            <div class="ornament">❦</div>
            <p class="intro">
                Mohon konfirmasikan kehadiran Anda melalui formulir berikut.
            </p>
        </div>

        <div class="form-card">

            @if(session('success'))
                <div class="success-message">{{ session('success') }}</div>
            @endif

            @if(session('error'))
                <div class="success-message">{{ session('error') }}</div>
            @endif

            <form action="{{ route('rsvp.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="nama-rsvp">Nama Lengkap</label>

                    <input
                        type="text"
                        id="nama-rsvp"
                        name="nama"
                        value="{{ old('nama') }}"
                        placeholder="Masukkan nama Anda"
                        required
                    >

                    @error('nama')
                        <small class="error-message">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="status">Konfirmasi Kehadiran</label>

                    <select id="status" name="status" required>
                        <option value="">Pilih konfirmasi</option>
                        <option value="hadir" {{ old('status') == 'hadir' ? 'selected' : '' }}>
                            Saya akan hadir
                        </option>
                        <option value="tidak_hadir" {{ old('status') == 'tidak_hadir' ? 'selected' : '' }}>
                            Maaf, saya tidak bisa hadir
                        </option>
                    </select>

                    @error('status')
                        <small class="error-message">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="jumlah_hadir">Jumlah Tamu</label>

                    <input
                        type="number"
                        id="jumlah_hadir"
                        name="jumlah_hadir"
                        min="1"
                        max="20"
                        value="{{ old('jumlah_hadir', 1) }}"
                        required
                    >

                    @error('jumlah_hadir')
                        <small class="error-message">{{ $message }}</small>
                    @enderror
                </div>

                <button type="submit" class="gold-button">
                    Send Confirmation
                </button>
            </form>
        </div>
    </section>

    <!-- UCAPAN -->
    <section class="section wishes-section" id="ucapan">
        <div class="section-heading">
            <span class="overline">Words From The Heart</span>
            <h2>Wishes & Prayers</h2>
            <div class="ornament">❦</div>
            <p class="intro">
                Berikan ucapan dan doa terbaik untuk perjalanan baru kami.
            </p>
        </div>

        <div class="form-card">

            @if(session('success_ucapan'))
                <div class="success-message">
                    {{ session('success_ucapan') }}
                </div>
            @endif

            <form action="{{ route('ucapan.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="nama-ucapan">Nama</label>

                    <input
                        type="text"
                        id="nama-ucapan"
                        name="nama"
                        value="{{ old('nama') }}"
                        placeholder="Masukkan nama Anda"
                        required
                    >

                    @error('nama')
                        <small class="error-message">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="pesan">Ucapan dan Doa</label>

                    <textarea
                        id="pesan"
                        name="pesan"
                        rows="5"
                        placeholder="Tuliskan ucapan dan doa terbaik..."
                        required
                    >{{ old('pesan') }}</textarea>

                    @error('pesan')
                        <small class="error-message">{{ $message }}</small>
                    @enderror
                </div>

                <button type="submit" class="gold-button">
                    Send Your Wishes
                </button>
            </form>
        </div>

        <div class="wishes-list">
            @forelse($ucapans as $ucapan)
                <article class="wish-card">
                    <h3>{{ $ucapan->tamu?->nama ?? 'Tamu Undangan' }}</h3>
                    <p>{{ $ucapan->pesan }}</p>
                </article>
            @empty
                <p class="intro">Belum ada ucapan dan doa.</p>
            @endforelse
        </div>
    </section>

    <!-- FOOTER -->
    <footer>
        <p>WITH LOVE AND BLESSINGS</p>

        <div class="footer-names">
            {{ $namaPria }} & {{ $namaWanita }}
        </div>

        <p>20 SEPTEMBER 2027</p>
        <p>THANK YOU FOR BEING PART OF OUR SPECIAL DAY</p>
    </footer>

    <!-- JAVASCRIPT -->
    <script>
        // Menu navigasi HP
        const menuToggle = document.getElementById('menuToggle');
        const navLinks = document.getElementById('navLinks');

        menuToggle.addEventListener('click', () => {
            navLinks.classList.toggle('active');
        });

        document.querySelectorAll('.nav-links a').forEach(link => {
            link.addEventListener('click', () => {
                navLinks.classList.remove('active');
            });
        });

        // Countdown pernikahan
        const weddingDate = new Date('2027-09-20T08:00:00+07:00').getTime();

        function updateCountdown() {
            const now = new Date().getTime();
            const distance = weddingDate - now;

            if (distance <= 0) {
                document.getElementById('days').textContent = '00';
                document.getElementById('hours').textContent = '00';
                document.getElementById('minutes').textContent = '00';
                document.getElementById('seconds').textContent = '00';
                return;
            }

            document.getElementById('days').textContent =
                Math.floor(distance / (1000 * 60 * 60 * 24));

            document.getElementById('hours').textContent =
                Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));

            document.getElementById('minutes').textContent =
                Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));

            document.getElementById('seconds').textContent =
                Math.floor((distance % (1000 * 60)) / 1000);
        }

        updateCountdown();
        setInterval(updateCountdown, 1000);
    </script>

</body>
</html>

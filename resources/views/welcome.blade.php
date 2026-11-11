
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Undangan Pernikahan | Budi & Siti</title>

    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600&family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: #f8f6ef;
            color: #485548;
        }

        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 40px 20px;
            background:
                linear-gradient(rgba(30, 45, 35, .45), rgba(30, 45, 35, .55)),
                url('https://images.unsplash.com/photo-1519741497674-611481863552?w=1600');
            background-size: cover;
            background-position: center;
            color: white;
        }

        .hero-content {
            max-width: 650px;
        }

        .subtitle {
            font-size: 12px;
            letter-spacing: 5px;
            text-transform: uppercase;
            margin-bottom: 25px;
        }

        h1 {
            font-family: 'Playfair Display', serif;
            font-size: clamp(48px, 9vw, 85px);
            font-weight: 400;
            margin-bottom: 20px;
        }

        .date {
            letter-spacing: 3px;
            font-size: 14px;
            margin-bottom: 35px;
        }

        .open-button {
            display: inline-block;
            padding: 14px 32px;
            border: 1px solid white;
            border-radius: 30px;
            color: white;
            text-decoration: none;
            font-size: 12px;
            letter-spacing: 2px;
            transition: .3s;
        }

        .open-button:hover {
            background: white;
            color: #485548;
        }

        section {
            padding: 90px 20px;
            text-align: center;
        }

        .section-title {
            font-family: 'Playfair Display', serif;
            font-size: 38px;
            font-weight: 400;
            margin-bottom: 20px;
        }

        .intro {
            max-width: 650px;
            margin: auto;
            line-height: 1.9;
            font-size: 14px;
            color: #777;
        }

        .couple {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            gap: 55px;
            margin-top: 45px;
        }

        .person {
            width: 260px;
        }

        .person img {
            width: 210px;
            height: 260px;
            object-fit: cover;
            border-radius: 120px 120px 10px 10px;
            margin-bottom: 20px;
        }

        .person h3 {
            font-family: 'Playfair Display', serif;
            font-size: 29px;
            font-weight: 400;
        }

        .person p {
            font-size: 12px;
            color: #888;
            margin-top: 8px;
        }

        .and {
            font-family: 'Playfair Display', serif;
            font-size: 50px;
            color: #a4ad96;
        }

        .event {
            background: #e9ede4;
        }

        .event-card {
            max-width: 430px;
            margin: 35px auto 0;
            padding: 35px;
            background: #fff;
            border-radius: 12px;
            line-height: 2;
        }

        .event-card h3 {
            font-family: 'Playfair Display', serif;
            font-size: 27px;
            font-weight: 400;
        }

        footer {
            padding: 35px 20px;
            text-align: center;
            background: #485548;
            color: white;
            font-size: 12px;
        }

        @media (max-width: 600px) {
            section {
                padding: 65px 20px;
            }

            .couple {
                gap: 30px;
            }

            .and {
                font-size: 35px;
            }
        }
    </style>
</head>

<body>

    <header class="hero">
        <div class="hero-content">
            <p class="subtitle">The Wedding Of</p>

            <h1>Budi & Siti</h1>

            <p class="date">20 SEPTEMBER 2027</p>

            <a href="#home" class="open-button">
                BUKA UNDANGAN
            </a>
        </div>
    </header>

    <section id="home">
        <h2 class="section-title">Assalamu'alaikum</h2>

        <p class="intro">
            Dengan memohon rahmat dan ridho Allah SWT,
            kami bermaksud mengundang Bapak/Ibu/Saudara/i
            untuk menghadiri acara pernikahan kami.
            Merupakan suatu kehormatan dan kebahagiaan
            bagi kami apabila Anda berkenan hadir.
        </p>

        <div class="couple">
            <div class="person">
                <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=600"
                     alt="Foto pengantin pria">

                <h3>Budi</h3>
                <p>Putra dari Bapak ... dan Ibu ...</p>
            </div>

            <div class="and">&</div>

            <div class="person">
                <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=600"
                     alt="Foto pengantin wanita">

                <h3>Siti</h3>
                <p>Putri dari Bapak ... dan Ibu ...</p>
            </div>
        </div>
    </section>

    <section class="event">
        <h2 class="section-title">Wedding Event</h2>

        <p class="intro">
            Kami berharap Anda dapat menjadi bagian
            dari hari bahagia kami.
        </p>

        <div class="event-card">
            <h3>Akad Nikah</h3>
            <p>Senin, 20 September 2027</p>
            <p>08.00 WIB - Selesai</p>
            <p>Lokasi: Isi lokasi acara</p>
        </div>

        <div class="event-card">
            <h3>Resepsi</h3>
            <p>Senin, 20 September 2027</p>
            <p>11.00 WIB - Selesai</p>
            <p>Lokasi: Isi lokasi acara</p>
        </div>
    </section>

    <footer>
        <p>Budi & Siti</p>
        <p>Terima kasih atas doa dan restunya.</p>
    </footer>

</body>
</html>

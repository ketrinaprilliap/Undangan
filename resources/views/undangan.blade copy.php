
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Undangan Pernikahan {{ $mempelai?->nama_pria ?? 'Budi' }} & {{ $mempelai?->nama_wanita ?? 'Siti' }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

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

        /* HERO */
        .hero {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 30px 20px;
            color: white;
            background:
                linear-gradient(rgba(30, 45, 35, .45), rgba(30, 45, 35, .60)),
                url('https://images.unsplash.com/photo-1519741497674-611481863552?w=1600');
            background-position: center;
            background-size: cover;
        }

        .hero-content {
            max-width: 700px;
        }

        .subtitle {
            font-size: 12px;
            letter-spacing: 5px;
            margin-bottom: 25px;
        }

        .hero h1 {
            font-family: 'Playfair Display', serif;
            font-size: clamp(45px, 8vw, 85px);
            font-weight: 400;
            margin-bottom: 20px;
        }

        .date {
            font-size: 14px;
            letter-spacing: 3px;
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

        /* SECTION UMUM */
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
            margin: 0 auto;
            font-size: 14px;
            line-height: 1.9;
            color: #777;
        }

        /* MEMPELAI */
        .couple {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            gap: 45px;
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
            font-size: 30px;
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

        /* ACARA */
        .event {
            background: #e9ede4;
        }

        .event-card {
            max-width: 430px;
            margin: 30px auto 0;
            padding: 35px 25px;
            background: white;
            border-radius: 12px;
            line-height: 2;
            box-shadow: 0 5px 20px rgba(0,0,0,.04);
        }

        .event-card h3 {
            font-family: 'Playfair Display', serif;
            font-size: 27px;
            font-weight: 400;
            margin-bottom: 12px;
        }

        .event-card p {
            font-size: 13px;
            color: #777;
        }

        /* COUNTDOWN */
        .countdown {
            background: #f8f6ef;
        }

        .timer {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 18px;
            margin-top: 35px;
        }

        .timer-box {
            width: 100px;
            padding: 20px 10px;
            background: #485548;
            color: white;
            border-radius: 10px;
        }

        .timer-box h3 {
            font-family: 'Playfair Display', serif;
            font-size: 30px;
            font-weight: 400;
        }

        .timer-box p {
            font-size: 11px;
        }

        /* GALERI */
        .gallery-section {
            background: white;
        }

        .gallery {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 15px;
            max-width: 950px;
            margin: 40px auto 0;
        }

        .gallery img {
            width: 100%;
            height: 260px;
            object-fit: cover;
            border-radius: 10px;
            transition: .3s;
        }

        .gallery img:hover {
            transform: scale(1.03);
        }

        /* OUR STORY */
        .story {
            background: #e9ede4;
        }

        .story-content {
            max-width: 650px;
            margin: 30px auto 0;
            padding: 30px;
            background: white;
            border-radius: 12px;
            line-height: 1.9;
            color: #777;
            font-size: 14px;
        }

        /* RSVP */
        .rsvp-form {
            max-width: 430px;
            margin: 35px auto 0;
            text-align: left;
        }

        .rsvp-form label {
            display: block;
            margin-bottom: 8px;
            font-size: 14px;
        }

        .rsvp-form input,
        .rsvp-form select {
            width: 100%;
            padding: 14px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-family: inherit;
            background: white;
            font-size: 14px;
        }

        .rsvp-form button {
            width: 100%;
            padding: 15px;
            background: #485548;
            color: white;
            border: none;
            border-radius: 30px;
            cursor: pointer;
            font-family: inherit;
            letter-spacing: 1px;
            transition: .3s;
        }

        .rsvp-form button:hover {
            background: #687b67;
        }

        .alert {
            max-width: 430px;
            margin: 20px auto;
            text-align: center;
            font-size: 14px;
        }

        .success {
            color: green;
        }

        .error {
            color: red;
        }

        /* FOOTER */
        footer {
            padding: 35px 20px;
            text-align: center;
            background: #485548;
            color: white;
            font-size: 12px;
            line-height: 2;
        }

        /* RESPONSIVE */
        @media (max-width: 600px) {
            section {
                padding: 65px 20px;
            }

            .section-title {
                font-size: 32px;
            }

            .couple {
                gap: 25px;
            }

            .and {
                font-size: 35px;
            }

            .gallery {
                grid-template-columns: repeat(2, 1fr);
                gap: 10px;
            }

            .gallery img {
                height: 170px;
            }

            .timer {
                gap: 10px;
            }

            .timer-box {
                width: 75px;
                padding: 15px 5px;
            }
        }
    </style>
</head>

<body>

    <!-- HALAMAN PEMBUKA -->
    <header class="hero">
        <div class="hero-content">
            <p class="subtitle">THE WEDDING OF</p>
            <h1>{{ $mempelai?->nama_pria ?? 'Budi' }} &amp; {{ $mempelai?->nama_wanita ?? 'Siti' }}</h1>
            <p class="date">20 SEPTEMBER 2027</p>
            <a href="#home" class="open-button">BUKA UNDANGAN</a>
        </div>
    </header>

    <!-- SAMBUTAN DAN MEMPELAI -->
    <section id="home">
        <h2 class="section-title">Assalamu'alaikum</h2>

        <p class="intro">
            Dengan memohon rahmat dan ridho Allah SWT, kami bermaksud
            mengundang Bapak/Ibu/Saudara/i untuk menghadiri acara
            pernikahan kami. Merupakan suatu kehormatan dan kebahagiaan
            bagi kami apabila Anda berkenan hadir.
        </p>

        <div class="couple">
            <div class="person">
                <img src="{{ $mempelai?->foto_pria ? asset('storage/' . $mempelai->foto_pria) : 'https://placehold.co/400x500' }}"
     alt="Foto Mempelai Pria">
                <h3>{{ $mempelai?->nama_pria ?? 'Budi' }}</h3>
                <p>Putra dari Bapak ... dan Ibu ...</p>
            </div>

            <div class="and">&amp;</div>

            <div class="person">
               <img src="{{ $mempelai?->foto_wanita ? asset('storage/' . $mempelai->foto_wanita) : 'https://placehold.co/400x500' }}"
     alt="Foto Mempelai Wanita">
                <h3>{{ $mempelai?->nama_wanita ?? 'Siti' }}</h3>
                <p>Putri dari Bapak ... dan Ibu ...</p>
            </div>
        </div>
    </section>

    <!-- INFORMASI ACARA -->
<section class="event">
    <h2 class="section-title">Wedding Event</h2>

    <p class="intro">
        Kami berharap Anda dapat menjadi bagian dari hari bahagia kami.
    </p>

    @forelse ($acaras as $acara)
        <div class="event-card">
            <h3>{{ $acara->nama_acara }}</h3>

            <p>
                {{ \Carbon\Carbon::parse($acara->tanggal)->translatedFormat('l, d F Y') }}
            </p>

            <p>
                {{ \Carbon\Carbon::parse($acara->waktu_mulai)->format('H.i') }} WIB
                -
                @if ($acara->waktu_selesai)
                    {{ \Carbon\Carbon::parse($acara->waktu_selesai)->format('H.i') }} WIB
                @else
                    Selesai
                @endif
            </p>

            <p>Lokasi: {{ $acara->lokasi }}</p>
            <p>{{ $acara->alamat }}</p>
        </div>
    @empty
        <p>Informasi acara belum tersedia.</p>
    @endforelse
</section>

    <!-- COUNTDOWN -->
    <section class="countdown">
        <h2 class="section-title">Menuju Hari Bahagia</h2>

        <p class="intro">
            Kami menantikan kehadiran Anda di hari istimewa kami.
        </p>

        <div class="timer">
            <div class="timer-box">
                <h3 id="days">00</h3>
                <p>Hari</p>
            </div>

            <div class="timer-box">
                <h3 id="hours">00</h3>
                <p>Jam</p>
            </div>

            <div class="timer-box">
                <h3 id="minutes">00</h3>
                <p>Menit</p>
            </div>

            <div class="timer-box">
                <h3 id="seconds">00</h3>
                <p>Detik</p>
            </div>
        </div>
    </section>

    <!-- GALERI -->

<section class="gallery-section">
    <h2 class="section-title">Our Gallery</h2>

    <p class="intro">
        Beberapa momen indah yang ingin kami bagikan.
    </p>

    <div class="gallery">
        @forelse ($galeris as $galeri)
            <img
                src="{{ asset('storage/' . $galeri->foto) }}"
                alt="{{ $galeri->judul ?? 'Foto Budi dan Siti' }}"
            >
        @empty
            <p>Foto galeri belum tersedia.</p>
        @endforelse
    </div>
</section>

    <!-- CERITA PASANGAN -->

<section class="story">
    <h2 class="section-title">Our Story</h2>

    <div class="story-content">
        {{ $mempelai?->deskripsi ?? 'Setiap pertemuan memiliki cerita. Inilah awal perjalanan kami hingga akhirnya memutuskan untuk melangkah bersama dalam ikatan pernikahan.' }}
    </div>
</section>

    <!-- FORM RSVP -->
    <section class="event" id="rsvp">
        <h2 class="section-title">RSVP</h2>

        <p class="intro">
            Merupakan suatu kehormatan bagi kami apabila Anda berkenan hadir.
            Silakan konfirmasi kehadiran melalui formulir berikut.
        </p>

        @if(session('success'))
            <p class="alert success">{{ session('success') }}</p>
        @endif

        @if(session('error'))
            <p class="alert error">{{ session('error') }}</p>
        @endif

        @if($errors->any())
            <p class="alert error">
                Mohon periksa kembali data yang diisi.
            </p>
        @endif

        <form class="rsvp-form"
              action="{{ route('rsvp.store') }}"
              method="POST">

            @csrf

            <label for="nama">Nama Lengkap</label>
            <input type="text"
                   id="nama"
                   name="nama"
                   value="{{ old('nama') }}"
                   placeholder="Masukkan nama lengkap"
                   required>

            <label for="status">Konfirmasi Kehadiran</label>
            <select id="status" name="status" required>
                <option value="">Pilih Kehadiran</option>
                <option value="hadir" {{ old('status') == 'hadir' ? 'selected' : '' }}>
                    Hadir
                </option>
                <option value="tidak_hadir" {{ old('status') == 'tidak_hadir' ? 'selected' : '' }}>
                    Tidak Hadir
                </option>
            </select>

            <label for="jumlah_hadir">Jumlah Orang yang Hadir</label>
            <input type="number"
                   id="jumlah_hadir"
                   name="jumlah_hadir"
                   min="1"
                   max="20"
                   value="{{ old('jumlah_hadir', 1) }}"
                   required>

            <button type="submit">KIRIM KONFIRMASI</button>
        </form>
    </section>
<!-- UCAPAN DAN DOA -->
<section class="wishes-section">
    <h2 class="section-title">Ucapan & Doa</h2>

    <p class="intro">
        Kirimkan doa dan ucapan terbaik untuk kedua mempelai.
    </p>

    <!-- Pesan berhasil -->
    @if (session('success_ucapan'))
        <p class="success-message">
            {{ session('success_ucapan') }}
        </p>
    @endif

    <!-- Formulir ucapan -->
    <form action="{{ route('ucapan.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="nama">Nama</label>
            <input
                type="text"
                id="nama"
                name="nama"
                placeholder="Masukkan nama Anda"
                value="{{ old('nama') }}"
                required
            >
            @error('nama')
                <small>{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group">
            <label for="pesan">Ucapan dan Doa</label>
            <textarea
                id="pesan"
                name="pesan"
                placeholder="Tuliskan ucapan dan doa Anda..."
                rows="4"
                required
            >{{ old('pesan') }}</textarea>
            @error('pesan')
                <small>{{ $message }}</small>
            @enderror
        </div>

        <button type="submit">Kirim Ucapan</button>
    </form>

    <!-- Daftar ucapan -->
    <div class="wishes-container">
        @forelse ($ucapans as $ucapan)
            <div class="wish-card">
                <h3>{{ $ucapan->tamu?->nama ?? 'Tamu Undangan' }}</h3>
                <p>{{ $ucapan->pesan }}</p>
            </div>
        @empty
            <p>Belum ada ucapan dan doa.</p>
        @endforelse
    </div>
</section>
    <!-- FOOTER -->
    <footer>
        <p>{{ $mempelai?->nama_pria ?? 'Budi' }} &amp; {{ $mempelai?->nama_wanita ?? 'Siti' }}</p>
        <p>Terima kasih atas doa dan restunya.</p>
    </footer>

    <!-- JAVASCRIPT COUNTDOWN -->
    <script>
        const weddingDate = new Date('2027-09-20T08:00:00+07:00').getTime();

        function updateCountdown() {
            const now = new Date().getTime();
            const distance = weddingDate - now;

            if (distance <= 0) {
                document.querySelector('.timer').innerHTML =
                    '<h3>Hari Bahagia Telah Tiba!</h3>';
                return;
            }

            document.getElementById('days').textContent =
                Math.floor(distance / (1000 * 60 * 60 * 24));

            document.getElementById('hours').textContent =
                Math.floor((distance / (1000 * 60 * 60)) % 24);

            document.getElementById('minutes').textContent =
                Math.floor((distance / (1000 * 60)) % 60);

            document.getElementById('seconds').textContent =
                Math.floor((distance / 1000) % 60);
        }

        updateCountdown();
        setInterval(updateCountdown, 1000);
    </script>

</body>
</html>

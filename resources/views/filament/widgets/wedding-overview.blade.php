@php
    use Illuminate\Support\Carbon;

    $eventDate = $event
        ? Carbon::parse($event->tanggal)->locale('id')->translatedFormat('l, d F Y')
        : null;
    $eventIsUpcoming = $event && $event->tanggal >= now()->toDateString();
@endphp

<div class="wedding-overview">
    <header class="wedding-overview__header">
        <div>
            <span class="wedding-overview__eyebrow">Wedding management</span>
            <h2 class="wedding-overview__title">Idham <span>&</span> Ketrin</h2>
            <p class="wedding-overview__description">Kelola setiap momen istimewa dalam satu ruang.</p>
        </div>

    </header>

    <section class="wedding-overview__hero">
        <div>
            <span class="wedding-overview__eyebrow">Hari bahagia kita</span>
            <h3>Idham & Ketrin</h3>
            <p>
                @if ($event)
                    {{ $event->nama_acara }}{{ $eventIsUpcoming ? ' akan berlangsung' : ' telah berlangsung' }}.
                    @if (filled($event->lokasi))
                        Sampai jumpa di {{ $event->lokasi }}.
                    @endif
                @else
                    Tambahkan data acara untuk menampilkan jadwal pernikahan di sini.
                @endif
            </p>
        </div>

        <div class="wedding-event__date">
            <x-filament::icon icon="heroicon-o-calendar-days" />
            <div>
                <span>{{ $event ? 'Tanggal acara' : 'Tanggal pernikahan' }}</span>
                <strong>{{ $eventDate ?? 'Belum ditentukan' }}</strong>
            </div>
        </div>
    </section>

    <section class="wedding-stats" aria-label="Ringkasan data">
        @foreach ($stats as $stat)
            <a
                class="wedding-stat"
                href="{{ $stat['url'] }}"
                aria-label="{{ $stat['label'] }}: {{ number_format($stat['value'], 0, ',', '.') }}"
            >
                <span class="wedding-stat__top">
                    <span class="wedding-stat__icon">
                        <x-filament::icon :icon="$stat['icon']" />
                    </span>
                    <span class="wedding-stat__label">{{ $stat['label'] }}</span>
                </span>
                <strong class="wedding-stat__value">{{ number_format($stat['value'], 0, ',', '.') }}</strong>
                <span class="wedding-stat__bottom">
                    <span class="wedding-stat__link">Lihat data</span>
                    <x-filament::icon icon="heroicon-o-arrow-up-right" class="wedding-stat__link-icon" />
                </span>
            </a>
        @endforeach
    </section>

    <section class="wedding-overview__lower">
        <article class="wedding-panel">
            <div class="wedding-panel__heading">
                <h3>Ringkasan kehadiran</h3>
                <a href="{{ \App\Filament\Resources\Rsvps\RsvpResource::getUrl('index') }}">Lihat RSVP</a>
            </div>

            <div class="wedding-rsvp-list">
                <div class="wedding-rsvp-row">
                    <span class="wedding-rsvp-row__status">
                        <x-filament::icon icon="heroicon-o-check-circle" />
                        Konfirmasi hadir
                    </span>
                    <strong class="wedding-rsvp-row__count">
                        {{ number_format($attendingResponses, 0, ',', '.') }}
                        <span>respons · {{ number_format($attendingGuests, 0, ',', '.') }} tamu</span>
                    </strong>
                </div>
                <div class="wedding-rsvp-row">
                    <span class="wedding-rsvp-row__status">
                        <x-filament::icon icon="heroicon-o-x-circle" />
                        Tidak dapat hadir
                    </span>
                    <strong class="wedding-rsvp-row__count">
                        {{ number_format($declinedResponses, 0, ',', '.') }}
                        <span>respons</span>
                    </strong>
                </div>
            </div>

            @if ($event)
                <div class="wedding-event-details">
                    <strong>{{ $event->nama_acara }}</strong>
                    {{ substr((string) $event->waktu_mulai, 0, 5) }}
                    @if ($event->waktu_selesai)
                        – {{ substr((string) $event->waktu_selesai, 0, 5) }}
                    @endif
                    @if (filled($event->alamat))
                        <br>{{ $event->alamat }}
                    @endif
                </div>
            @endif
        </article>

        <article class="wedding-panel">
            <div class="wedding-panel__heading">
                <h3>Ucapan dan doa terbaru</h3>
                <a href="{{ \App\Filament\Resources\Ucapans\UcapanResource::getUrl('index') }}">Lihat semua</a>
            </div>

            @forelse ($latestGreetings as $greeting)
                <div class="wedding-message-list">
                    <div class="wedding-message">
                        <div class="wedding-message__meta">
                            <span class="wedding-message__name">{{ $greeting->tamu?->nama ?? 'Tamu undangan' }}</span>
                            <span class="wedding-message__status {{ $greeting->is_approved ? '' : 'wedding-message__status--pending' }}">
                                {{ $greeting->is_approved ? 'Disetujui' : 'Menunggu' }}
                            </span>
                        </div>
                        <p class="wedding-message__text">{{ $greeting->pesan }}</p>
                        <span class="wedding-message__date">{{ $greeting->created_at?->locale('id')->translatedFormat('d F Y') }}</span>
                    </div>
                </div>
            @empty
                <p class="wedding-empty">Belum ada ucapan dan doa yang masuk.</p>
            @endforelse
        </article>
    </section>
</div>

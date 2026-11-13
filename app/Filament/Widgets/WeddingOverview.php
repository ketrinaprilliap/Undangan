<?php

namespace App\Filament\Widgets;

use App\Filament\Resources\Acaras\AcaraResource;
use App\Filament\Resources\Galeris\GaleriResource;
use App\Filament\Resources\Mempelais\MempelaiResource;
use App\Filament\Resources\Rsvps\RsvpResource;
use App\Filament\Resources\Tamus\TamuResource;
use App\Filament\Resources\Ucapans\UcapanResource;
use App\Models\Acara;
use App\Models\Galeri;
use App\Models\Mempelai;
use App\Models\Rsvp;
use App\Models\Tamu;
use App\Models\Ucapan;
use Filament\Support\Icons\Heroicon;
use Filament\Widgets\Widget;

class WeddingOverview extends Widget
{
    protected static ?bool $isLazyLoaded = false;

    protected string $view = 'filament.widgets.wedding-overview';

    protected int | string | array $columnSpan = 'full';

    protected function getViewData(): array
    {
        $event = Acara::query()
            ->whereDate('tanggal', '>=', now()->toDateString())
            ->orderBy('tanggal')
            ->orderBy('waktu_mulai')
            ->first()
            ?? Acara::query()
                ->orderByDesc('tanggal')
                ->orderByDesc('waktu_mulai')
                ->first();

        return [
            'event' => $event,
            'stats' => [
                [
                    'label' => 'Data Mempelai',
                    'value' => Mempelai::query()->count(),
                    'icon' => Heroicon::OutlinedRectangleStack,
                    'url' => MempelaiResource::getUrl('index'),
                ],
                [
                    'label' => 'Acara',
                    'value' => Acara::query()->count(),
                    'icon' => Heroicon::OutlinedCalendarDays,
                    'url' => AcaraResource::getUrl('index'),
                ],
                [
                    'label' => 'Galeri Foto',
                    'value' => Galeri::query()->count(),
                    'icon' => Heroicon::OutlinedPhoto,
                    'url' => GaleriResource::getUrl('index'),
                ],
                [
                    'label' => 'Tamu Undangan',
                    'value' => Tamu::query()->count(),
                    'icon' => Heroicon::OutlinedUsers,
                    'url' => TamuResource::getUrl('index'),
                ],
                [
                    'label' => 'RSVP',
                    'value' => Rsvp::query()->count(),
                    'icon' => Heroicon::OutlinedClipboardDocumentCheck,
                    'url' => RsvpResource::getUrl('index'),
                ],
                [
                    'label' => 'Ucapan dan Doa',
                    'value' => Ucapan::query()->count(),
                    'icon' => Heroicon::OutlinedChatBubbleLeftRight,
                    'url' => UcapanResource::getUrl('index'),
                ],
            ],
            'attendingResponses' => Rsvp::query()->where('status', 'hadir')->count(),
            'attendingGuests' => Rsvp::query()->where('status', 'hadir')->sum('jumlah_hadir'),
            'declinedResponses' => Rsvp::query()->where('status', 'tidak_hadir')->count(),
            'latestGreetings' => Ucapan::query()
                ->with('tamu:id,nama')
                ->latest()
                ->limit(4)
                ->get(),
        ];
    }
}

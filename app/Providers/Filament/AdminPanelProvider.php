<?php

namespace App\Providers\Filament;

use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Pages\Dashboard;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\View\PanelsRenderHook;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Http\Middleware\PreventRequestForgery;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->viteTheme('resources/css/filament/admin/theme.css')
            ->brandName('Idham & Ketrin')
            ->brandLogo(asset('images/wedding-monogram.svg'))
            ->brandLogoHeight('2.5rem')
            ->favicon(asset('images/wedding-favicon.svg'))
            ->font('Instrument Sans')
            ->renderHook(
                PanelsRenderHook::TOPBAR_START,
                fn (): View => view('filament.components.admin-topbar', [
                    'adminName' => filament()->getUserName(filament()->auth()->user()),
                ]),
            )
            ->login()
            ->colors([
                'primary' => [
                    50 => '#faf7f0',
                    100 => '#f3ead7',
                    200 => '#e9d8b8',
                    300 => '#dcc394',
                    400 => '#c9a96f',
                    500 => '#b58e56',
                    600 => '#987344',
                    700 => '#795a38',
                    800 => '#624a32',
                    900 => '#513e2c',
                    950 => '#2e241a',
                ],
            ])
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\Filament\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\Filament\Pages')
            ->pages([
                Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\Filament\Widgets')
            ->darkMode(false)
            ->themeSwitcher(false)
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                PreventRequestForgery::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ]);
    }
}

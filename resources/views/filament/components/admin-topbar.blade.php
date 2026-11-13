<div class="wedding-topbar-identity">
    <strong class="wedding-topbar-identity__brand">{{ filament()->getBrandName() }}</strong>
    <span class="wedding-topbar-identity__divider" aria-hidden="true"></span>
    <span class="wedding-topbar-identity__user">
        <x-filament::icon icon="heroicon-o-user-circle" />
        <span>Masuk sebagai <strong>{{ $adminName }}</strong></span>
    </span>
</div>

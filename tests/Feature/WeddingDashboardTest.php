<?php

namespace Tests\Feature;

use App\Models\Acara;
use App\Models\Galeri;
use App\Models\Mempelai;
use App\Models\Rsvp;
use App\Models\Tamu;
use App\Models\Ucapan;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class WeddingDashboardTest extends TestCase
{
    use RefreshDatabase;

    public function test_dashboard_shows_database_driven_wedding_data(): void
    {
        $this->withoutVite();

        $admin = User::factory()->create();
        $couple = Mempelai::query()->create([
            'nama_pria' => 'Idham',
            'nama_wanita' => 'Ketrin',
            'deskripsi' => 'Hari bahagia',
        ]);
        $event = Acara::query()->create([
            'mempelai_id' => $couple->id,
            'nama_acara' => 'Akad Nikah',
            'tanggal' => now()->addMonth()->toDateString(),
            'waktu_mulai' => '09:00:00',
            'waktu_selesai' => '12:00:00',
            'lokasi' => 'Gedung Bahagia',
            'alamat' => 'Jalan Melati No. 10',
        ]);
        $guest = Tamu::query()->create([
            'nama' => 'Ayu Pratiwi',
            'email' => 'ayu@example.test',
            'nomor_telepon' => '08123456789',
            'kode_undangan' => 'AYU-001',
        ]);

        Galeri::query()->create([
            'mempelai_id' => $couple->id,
            'judul' => 'Momen bahagia',
            'foto' => 'galeri/momen.jpg',
        ]);
        Galeri::query()->create([
            'mempelai_id' => $couple->id,
            'judul' => 'Momen kedua',
            'foto' => 'galeri/momen-kedua.jpg',
        ]);
        Rsvp::query()->create([
            'tamu_id' => $guest->id,
            'acara_id' => $event->id,
            'status' => 'hadir',
            'jumlah_hadir' => 2,
        ]);
        $otherGuest = Tamu::query()->create([
            'nama' => 'Budi Santoso',
            'email' => 'budi@example.test',
            'nomor_telepon' => '08123456780',
            'kode_undangan' => 'BUDI-001',
        ]);
        Rsvp::query()->create([
            'tamu_id' => $otherGuest->id,
            'acara_id' => $event->id,
            'status' => 'tidak_hadir',
            'jumlah_hadir' => 1,
        ]);
        Ucapan::query()->create([
            'tamu_id' => $guest->id,
            'pesan' => 'Semoga menjadi keluarga yang bahagia.',
            'is_approved' => true,
        ]);

        $this->actingAs($admin)
            ->get('/admin')
            ->assertOk()
            ->assertSee('Idham')
            ->assertSee('Ketrin')
            ->assertSee($admin->name)
            ->assertSee('Akad Nikah')
            ->assertSee('Gedung Bahagia')
            ->assertSee('Ayu Pratiwi')
            ->assertSee('Semoga menjadi keluarga yang bahagia.')
            ->assertSee('Ringkasan kehadiran')
            ->assertSee('Ucapan dan doa terbaru')
            ->assertSee('aria-label="Data Mempelai: 1"', false)
            ->assertSee('aria-label="Acara: 1"', false)
            ->assertSee('aria-label="Galeri Foto: 2"', false)
            ->assertSee('aria-label="Tamu Undangan: 2"', false)
            ->assertSee('aria-label="RSVP: 2"', false)
            ->assertSee('aria-label="Ucapan dan Doa: 1"', false);
    }
}

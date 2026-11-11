<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
public function up(): void
{
    Schema::create('acaras', function (Blueprint $table) {
        $table->id();
        $table->foreignId('mempelai_id')->constrained('mempelais')->cascadeOnDelete();
        $table->string('nama_acara');
        $table->date('tanggal');
        $table->time('waktu_mulai');
        $table->time('waktu_selesai')->nullable();
        $table->string('lokasi');
        $table->text('alamat');
        $table->timestamps();
    });
}
    public function down(): void
    {
        Schema::dropIfExists('acaras');
    }
};

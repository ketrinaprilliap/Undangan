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
    Schema::create('rsvps', function (Blueprint $table) {
        $table->id();
        $table->foreignId('tamu_id')->constrained('tamus')->cascadeOnDelete();
        $table->foreignId('acara_id')->constrained('acaras')->cascadeOnDelete();
        $table->enum('status', ['hadir', 'tidak_hadir']);
        $table->unsignedTinyInteger('jumlah_hadir')->default(1);
        $table->timestamps();

        $table->unique(['tamu_id', 'acara_id']);
    });
}
    public function down(): void
    {
        Schema::dropIfExists('rsvps');
    }
};

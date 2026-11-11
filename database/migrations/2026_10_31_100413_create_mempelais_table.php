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
    Schema::create('mempelais', function (Blueprint $table) {
        $table->id();
        $table->string('nama_pria');
        $table->string('nama_wanita');
        $table->string('foto_pria')->nullable();
        $table->string('foto_wanita')->nullable();
        $table->text('deskripsi')->nullable();
        $table->timestamps();
    });
}
    public function down(): void
    {
        Schema::dropIfExists('mempelais');
    }
};

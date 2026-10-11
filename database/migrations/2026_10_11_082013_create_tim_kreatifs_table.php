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
    Schema::create('tim_kreatifs', function (Blueprint $table) {
        $table->id();
        $table->string('nama');         // Field 1
        $table->string('posisi');       // Field 2
        $table->string('keahlian');     // Field 3
        $table->text('bio');            // Field 4
        $table->string('email');        // Field 5
        $table->string('foto');         // Field 6 (Path Gambar)
        $table->timestamps();
    });
}

     

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tim_kreatifs');
    }
};

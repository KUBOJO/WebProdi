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
        Schema::create('penelitians', function (Blueprint $table) {
    $table->id();
    $table->foreignId('kerjasama_id')->constrained()->onDelete('cascade');
    $table->string('judul');
    $table->string('peneliti');
    $table->date('tahun');
    $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penelitians');
    }
};

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
        Schema::create('publicacao', function (Blueprint $table) {
            $table->id();
            $table->string('postagem');
            $table->timestamp('data');
            $table->string('tipo_publicacao');
            $table->timestamps();

            $table->foreignId('usuario_id')->constrained('perfil');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('publicacao');
    }
};

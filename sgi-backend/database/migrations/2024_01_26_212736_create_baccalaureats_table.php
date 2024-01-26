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
        Schema::create('baccalaureats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('etudiant_id')->constrained();
            $table->string('Etablissement');
            $table->string('Direction_provinciale');
            $table->date('Session');
            $table->string('Serie');
            $table->string('Filiere');
            $table->string('Mention');
            $table->integer('Moyene_generale');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('baccalaureats');
    }
};

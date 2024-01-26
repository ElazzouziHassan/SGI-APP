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
        Schema::create('diplomes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('etudiant_id')->constrained();
            $table->string('Etablissement');
            $table->string('Direction_provinciale');
            $table->date('Promotion');
            $table->string('type');
            $table->string('Specialite');
            $table->integer('nb_annees');
            $table->integer('Moyene_s1');
            $table->integer('Moyene_s2');
            $table->integer('Moyene_s3');
            $table->integer('Moyene_s4');
            $table->integer('Moyene_generale');
            $table->integer('nb_mention');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('diplomes');
    }
};

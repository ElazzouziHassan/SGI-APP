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
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('etudiant_id')->constrained();
            $table->string('documentBacV');
            $table->string('documentBacR');
            $table->string('documentDiplome');
            $table->string('documentCINV');
            $table->string('documentCINR');
            $table->string('documentRelvetNoteBac');
            $table->string('documentRelNoteS1');
            $table->string('documentRelNoteS2');
            $table->string('documentRelNoteS3');
            $table->string('documentRelNoteS4');
            $table->string('photo');
            $table->string('demandeManuscript');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documents');
    }
};

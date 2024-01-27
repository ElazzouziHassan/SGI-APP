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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nom_fr');
            $table->string('nom_ar');
            $table->string('prenom_fr');
            $table->string('prenom_ar');
            $table->date('dateNaissance');
            $table->string('email')->unique();
            $table->string('telephone');
            $table->enum(
                'role',['admin', 'service_etudiant', 'etudiant']
            )->default('etudiant');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('email')->unique();
            $table->string('CodeMassar')->unique();
            $table->string('CIN')->unique();
            $table->text('adresse_fr');
            $table->text('adresse_ar');
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};

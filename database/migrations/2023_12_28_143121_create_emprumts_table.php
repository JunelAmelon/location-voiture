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
    Schema::create('emprumts', function (Blueprint $table) {
    $table->id();
    $table->bigInteger('id_voiture')->unsigned(); // Ajout de unsigned pour les clés étrangères
    $table->bigInteger('id_individu')->unsigned(); // Ajout de unsigned pour les clés étrangères
    $table->timestamps();

    // Définition des clés étrangères
    $table->foreign('id_voiture')->references('id')->on('voitures');
    $table->foreign('id_individu')->references('id')->on('individuses');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emprumts');
    }
};

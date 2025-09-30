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
        Schema::create('offres', function (Blueprint $table) {
            $table->id();
            $table->text('intitule');
            $table->text('description');
            $table->string('nature')->nullable();
            $table->string('numero_offres')->nullable();
            $table->string('secteur_activite')->nullable();
            $table->date('date_publication');
            $table->date('date_limite');
            $table->string('zone_execution')->nullable();
            $table->string('fichier')->nullable();
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offres');
    }
};

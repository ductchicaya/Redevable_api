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
        Schema::create('redevables', function (Blueprint $table) {
            $table->id();
            $table->string('raisonSociale');
            $table->string('telephone');
            $table->date('dateCreation');
            $table->string('numeroImmatriculationRccm');
            $table->string('adresse');
            $table->string('quartier');
            $table->string('ville');
            $table->string('codePostal');
            $table->foreignId('responsable_redevable_id')->constrained();
            $table->foreignId('type_redevable_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('redevables');
    }
};

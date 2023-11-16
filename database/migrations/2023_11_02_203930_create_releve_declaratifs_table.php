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
        Schema::create('releve_declaratifs', function (Blueprint $table) {
            $table->id();
            $table->year('anneeRedevance')->nullable();
            $table->integer('moisRedevance')->nullable();
            $table->integer('volumeTransactionTotal');
            $table->integer('montantRedevanceTotal');
            $table->integer('montantRedevanceEtatTotal');
            $table->integer('montantRedevanceArpceTotal');
            $table->integer('montantRedevanceArtfTotal');
            $table->boolean('status');
            $table->foreignId('redevable_id')->constrained();
            $table->foreignId('redevance_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('releve_declaratifs');
    }
};

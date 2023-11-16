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
        Schema::create('transmission_releve_declaratif', function (Blueprint $table) {
            $table->id();
            $table->integer('volumeTransaction');
            $table->integer('montantTransaction');
            $table->integer('montantRedevance');
            $table->integer('montantRedevanceEtat');
            $table->integer('montantRedevanceArpce');
            $table->integer('montantRedevanceArtf');
            $table->foreignId('nature_transaction_id')->constrained();
            $table->foreignId('releve_declaratif_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transmission_releve_declaratif');
    }
};

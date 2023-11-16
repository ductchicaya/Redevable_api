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
        Schema::create('resultat_conciliations', function (Blueprint $table) {
            $table->id();
            $table->integer('nombreTransactionPlat');
            $table->integer('nombreTransactionRl');
            $table->integer('montantTransactionRl');
            $table->integer('montantTransactionPlat');
            $table->integer('redevablePlat');
            $table->integer('redevableRl');
            $table->integer('diffNbreTransaction');
            $table->integer('diffMontantTransaction');
            $table->integer('diffRedevance');
            $table->foreignId('redevable_id')->constrained();
            $table->foreignId('releve_declaratif_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resultat_conciliations');
    }
};

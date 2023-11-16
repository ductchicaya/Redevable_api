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
        Schema::create('envoi_compte_rendu', function (Blueprint $table) {
            $table->id();
            $table->date('dateEnvoi');
            $table->date('dateReception');
            $table->string('fileSend');
            $table->foreignId('redevable_id')->constrained();
            $table->foreignId('user_send_id');
            $table->foreignId('user_received');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cro_redevable_legal');
    }
};

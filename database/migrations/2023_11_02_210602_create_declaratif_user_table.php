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
        Schema::create('declaratif_user', function (Blueprint $table) {
            $table->id();
            $table->date('dateEnvoi');
            $table->date('dateReception');
            $table->string('fileDeclare');
            $table->foreignId('redevable_id');
            $table->foreignId('releve_declaratif_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('declaratif_user');
    }
};

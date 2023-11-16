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
        Schema::create('redevable_user', function (Blueprint $table) {
            $table->id();
            $table->date('dateEnvoi');
            $table->date('dateReception');
            $table->string('cro');
            $table->foreignId('user_send_id');
            $table->foreignId('user_received_id');
            $table->foreignId('redevable_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cro_user');
    }
};

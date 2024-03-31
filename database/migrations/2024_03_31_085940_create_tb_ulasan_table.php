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
        Schema::create('tb_ulasan', function (Blueprint $table) {
            $table->id('ulasan_id');
            $table->enum('rating', ['1', '2', '3', '4', '5']);
            $table->string('nama_lengkap', 155);
            $table->text('text_ulasan');
            $table->string('jabatan', 155);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_ulasan');
    }
};

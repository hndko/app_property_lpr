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
        Schema::create('tb_pengaturan_umum', function (Blueprint $table) {
            $table->id('pu_id');
            $table->string('nama_website', 155);
            $table->text('alamat');
            $table->string('no_telpon', 20);
            $table->string('email', 155);
            $table->string('day_start', 55);
            $table->string('day_end', 55);
            $table->string('hours_start', 55);
            $table->string('hours_end', 55);
            $table->string('instagram', 55)->nullable();
            $table->string('twitter', 55)->nullable();
            $table->string('facebook', 55)->nullable();
            $table->string('linkedin', 55)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_pengaturan_umum');
    }
};

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
        Schema::create('tb_property', function (Blueprint $table) {
            $table->id('property_id');
            $table->string('slug', 155)->unique();
            $table->string('foto_sampul', 155);
            $table->string('property_name', 155);
            $table->foreignId('agent_id');
            $table->foreignId('kota_id');
            $table->bigInteger('harga');
            $table->string('sertifikat', 55);
            $table->string('kondisi', 55);
            $table->bigInteger('luas_tanah');
            $table->bigInteger('luas_bangunan');
            $table->text('alamat');
            $table->string('kelengkapan', 55);
            $table->bigInteger('jumlah_lantai');
            $table->bigInteger('kamar_tidur');
            $table->bigInteger('kamar_mandi');
            $table->bigInteger('watt_listrik');
            $table->text('deskripsi');
            $table->enum('is_status', ['1', '0'])->default('1');
            $table->timestamps();

            // $table->foreign('agent_id')->references('agent_id')->on('tb_agent');
            // $table->foreign('kota_id')->references('kota_id')->on('tb_kota');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_property');
    }
};

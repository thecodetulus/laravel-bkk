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
        Schema::create('lowongan', function (Blueprint $table) {
            $table->increments('id_lowongan');
            $table->unsignedInteger('id_admin');
            $table->unsignedInteger('id_mitra');
            $table->string('nama_lowongan');
            $table->date('tgl_lowongan');
            $table->date('tgl_habis');
            $table->text('keterangan');
            $table->string('bidang');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lowongan');
    }
};

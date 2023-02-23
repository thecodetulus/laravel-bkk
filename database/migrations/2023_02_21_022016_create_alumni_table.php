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
        Schema::create('alumni', function (Blueprint $table) {
            $table->integer('nis')->unique();
            $table->unsignedInteger('id_jurusan');
            $table->string('nama_alumni');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->text('alamat');
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->integer('tahun_lulus');
            $table->string('telepon');
            $table->enum('status', ['Aktif', 'Tidak Aktif']);
            $table->string('email');
            $table->string('password');
            $table->timestamps();
            $table->primary(['nis', 'id_jurusan']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumni');
    }
};

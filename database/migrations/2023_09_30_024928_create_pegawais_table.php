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
        Schema::create('pegawais', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_jabatan');
            $table->string('NIP');
            $table->string('Nama_Lengkap');
            $table->string('Tempat');
            $table->date('Tgl');
            $table->string('Alamat');
            $table->string('Foto');
            $table->string('Agama');
            $table->string('No_Telp');
            $table->string('Jenis_Kelamin');
            $table->boolean('delstatus')->deafult(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pegawais');
    }
};

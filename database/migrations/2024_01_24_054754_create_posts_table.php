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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('nisn');
            $table->integer('skhun');
            $table->integer('no_ijazah');
            $table->char('nama_lengkap');
            $table->date('tanggal_lahir');
            $table->text('agama');
            $table->text('alamat');
            $table->text('jenis_kelamin');
            $table->integer('no_telp');
            $table->char('email');
            $table->char('jurusan');
            $table->char('nama_ayah');
            $table->char('nama_ibu');
            $table->char('nama_wali');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};

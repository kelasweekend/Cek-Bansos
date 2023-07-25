<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penduduks', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nomor_kk');
            $table->string('nomor_nik');
            $table->string('tempat_lahir');
            $table->date('tgl_lahir');
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->integer('rt');
            $table->integer('rw');
            $table->string('status_keluarga');
            $table->boolean('pekerjaan');
            $table->enum('rumah', ['tetap', 'kontrak']);
            $table->integer('motor')->nullable();
            $table->integer('mobil')->nullable();
            $table->string('penghasilan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penduduks');
    }
};

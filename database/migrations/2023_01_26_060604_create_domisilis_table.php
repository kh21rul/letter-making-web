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
        Schema::create('domisilis', function (Blueprint $table) {
            $table->id();
            $table->integer('noSurat');
            $table->string('nama');
            $table->string('tempatTglLahir');
            $table->string('kelamin');
            $table->string('negara');
            $table->string('pendidikan');
            $table->string('agama');
            $table->string('pekerjaan');
            $table->string('status_pernikahan');
            $table->integer('nik');
            $table->text('alamat');
            $table->text('keterangan');
            $table->string('ttd');
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
        Schema::dropIfExists('domisilis');
    }
};

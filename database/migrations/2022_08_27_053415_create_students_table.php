<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreignId('kelas_id')->references('id')->on('kelas')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->string('nama', 255);
            $table->char('nisn', 10)->unique();
            $table->string('ttl', 255);
            $table->string('jk', 20);
            $table->string('agama', 20);
            $table->string('alamat', 255);
            $table->char('no_telp', 20)->unique();
            $table->string('n_ayah', 255);
            $table->string('n_ibu', 255);
            $table->string('alamat_ortu', 255);
            $table->char('no_telp_rumah', 20);
            $table->integer('poin')->default('0');;
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
        Schema::dropIfExists('students');
    }
}
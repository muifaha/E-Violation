<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenangananTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penanganan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->references('id')->on('students')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->string('tindak_lanjut', 255);
            $table->boolean('konfirmasi')->default(0);
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
        Schema::dropIfExists('penanganan');
    }
}
<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLk3sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lk3s', function (Blueprint $table) {
            $table->increments('id');
            $table->string('namakegiatan');
            $table->string('lokasikegiatan');
            $table->date('tanggalkegiatan');
            $table->string('fotolk3');
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
        Schema::dropIfExists('lk3s');
    }
}

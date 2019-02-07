<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCsrsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('csrs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('namakegiatan');
            $table->string('lokasikegiatan');
            $table->date('tanggalkegiatan');
            $table->string('fotobpp');
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
        Schema::dropIfExists('csrs');
    }
}

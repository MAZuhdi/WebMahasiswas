<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFakultassTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fakultass', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kode_fakultas',1)->unique();
            //kode fakultas berjumlah 1 huruf, misal J untuk Sekolah Vokasi dan G untuk FMIPA
            $table->string('nama_fakultas', 50);
            //nama fakultas berjumlah maksimal 50 karakter
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
        Schema::dropIfExists('fakultass');
    }
}

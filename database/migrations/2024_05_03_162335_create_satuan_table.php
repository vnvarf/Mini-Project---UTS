<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSatuanTable extends Migration
{
    public function up()
    {
        Schema::create('satuan', function (Blueprint $table) {
            $table->id();
            $table->string('kode_satuan')->unique();
            $table->string('nama_satuan');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('satuan');
    }
}


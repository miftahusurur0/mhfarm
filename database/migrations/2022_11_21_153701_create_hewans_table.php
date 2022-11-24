<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hewan', function (Blueprint $table) {
            $table->id();
            $table->string('kode');
            $table->string('nama_hwn');
            $table->string('jenis_hwn');
            $table->string('asal_hwn');
            $table->string('umur_hwn');
            $table->string('berat_hwn');
            $table->string('harga_hwn');
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
        Schema::dropIfExists('hewan');
    }
};
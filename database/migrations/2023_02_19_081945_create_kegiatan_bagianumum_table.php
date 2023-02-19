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
        Schema::create('kegiatan_bagianumum', function (Blueprint $table) {
            $table->id();
            $table->string('kegiatan',100)->nullable();
            $table->string('nama_kegiatan',100)->nullable();
            $table->date('tanggal_pelaksanaan',100)->nullable();
            $table->string('tempat',100)->nullable();
            $table->string('pic',100)->nullable();
            $table->string('sudah/belum',100)->nullable();
            $table->string('realisasi_pelaksanaan',100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kegiatan_bagianumum');
    }
};

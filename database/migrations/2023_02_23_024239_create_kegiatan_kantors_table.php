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
        Schema::create('bagian_umum', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('kegiatan',100);
            $table->date('tgl_pelaksanaan');
            $table->string('tempat',100);
            $table->string('pic',100);
            $table->string('S/B',100);
            $table->string('role',100);
            $table->timestamps();
        });

        Schema::create('seksi_pencairan_dana', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('kegiatan',100);
            $table->date('tgl_pelaksanaan');
            $table->string('tempat',100);
            $table->string('pic',100);
            $table->string('S/B',100);
            $table->string('role',100);
            $table->timestamps();
        });

        Schema::create('seksi_bank', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('kegiatan',100);
            $table->date('tgl_pelaksanaan');
            $table->string('tempat',100);
            $table->string('pic',100);
            $table->string('S/B',100);
            $table->string('role',100);
            $table->timestamps();
        });

        Schema::create('seksi_Vera', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('kegiatan',100);
            $table->date('tgl_pelaksanaan');
            $table->string('tempat',100);
            $table->string('pic',100);
            $table->string('S/B',100);
            $table->string('role',100);
            $table->timestamps();
        });

        Schema::create('seksi_MSKI', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('kegiatan',100);
            $table->date('tgl_pelaksanaan');
            $table->string('tempat',100);
            $table->string('pic',100);
            $table->string('S/B',100);
            $table->string('role',100);
            $table->timestamps();
        });

        Schema::create('bagian_umum_upload', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('id_bagian_umum')->references('id')->on('bagian_umum');
            $table->binary('Bukti_Kegiatan')->nullable();
            $table->timestamps();
        });

        Schema::create('seksi_pencairan_dana_upload', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('id_pencairan_dana')->references('id')->on('seksi_pencairan_dana');
            $table->binary('Bukti_Kegiatan')->nullable();
            $table->timestamps();
        });

        Schema::create('seksi_bank_upload', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('id_seksi_bank')->references('id')->on('seksi_bank');
            $table->binary('Bukti_Kegiatan')->nullable();
            $table->timestamps();
        });

        Schema::create('seksi_Vera_upload', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('id_seksi_Vera')->references('id')->on('seksi_Vera');
            $table->binary('Bukti_Kegiatan')->nullable();
            $table->timestamps();
        });

        Schema::create('seksi_MSKI_upload', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('id_seksi_MSKI')->references('id')->on('seksi_MSKI');
            $table->binary('Bukti_Kegiatan')->nullable();
            $table->timestamps();
        });

        DB::unprepared('CREATE TRIGGER update_status AFTER INSERT ON seksi_MSKI_upload
                FOR EACH ROW
                BEGIN
                    IF NEW.Bukti_Kegiatan IS NOT NULL THEN
                        UPDATE seksi_MSKI SET `S/B`="sudah" WHERE id=NEW.id_seksi_MSKI;
                    ELSE
                        UPDATE seksi_MSKI SET `S/B`="belum" WHERE id=NEW.id_seksi_MSKI;
                    END IF;
                END;');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bagian_umum');
        Schema::dropIfExists('seksi_pencairan_dana');
        Schema::dropIfExists('seksi_bank');
        Schema::dropIfExists('seksi_Vera');
        Schema::dropIfExists('seksi_MSKI');
        Schema::dropIfExists('bagian_umum_upload');
        Schema::dropIfExists('seksi_pencairan_dana_upload');
        Schema::dropIfExists('seksi_bank_upload');
        Schema::dropIfExists('seksi_Vera_upload');
        Schema::dropIfExists('seksi_MSKI_upload');
        DB::unprepared('DROP TRIGGER IF EXISTS update_seksi_mski_upload');
    
    }
};

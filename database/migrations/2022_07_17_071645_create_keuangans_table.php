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
        Schema::create('keuangans', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->String('keterangan',50);
            $table->Double('masuk')->nullable();
            $table->Double('keluar')->nullable();
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
        Schema::dropIfExists('keuangans');
    }
};
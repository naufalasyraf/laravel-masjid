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
        Schema::create('harians', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->foreignId('imam_id');
            $table->foreignId('muadzin_id');
            $table->foreignId('pengurus_id');
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
        Schema::dropIfExists('harians');
    }
};

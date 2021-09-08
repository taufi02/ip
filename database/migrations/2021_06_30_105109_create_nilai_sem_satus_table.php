<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNilaiSemSatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilai_sem_satus', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->unique()->constrained();
            $table->decimal('agama');
            $table->decimal('kwn');
            $table->decimal('pih');
            $table->decimal('pie');
            $table->decimal('bi');
            $table->decimal('stat');
            $table->decimal('pengakun1');
            $table->decimal('manajemen');
            $table->decimal('ip');
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
        Schema::dropIfExists('nilai_sem_satus');
    }
}

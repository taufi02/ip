<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNilaiSemDuasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilai_sem_duas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->unique()->constrained();
            $table->decimal('pancasila');
            $table->decimal('bing');
            $table->decimal('mikro');
            $table->decimal('pajak');
            $table->decimal('ppkn');
            $table->decimal('pengakun2');
            $table->decimal('hukperus');
            $table->decimal('hukper');
            $table->decimal('piutang');
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
        Schema::dropIfExists('nilai_sem_duas');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNilaiSemTigasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilai_sem_tigas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->unique()->constrained();
            $table->decimal('hkn');
            $table->decimal('akbi');
            $table->decimal('mankeu');
            $table->decimal('hukpertanahan');
            $table->decimal('lelang');
            $table->decimal('pap1');
            $table->decimal('bmn1');
            $table->decimal('hap');
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
        Schema::dropIfExists('nilai_sem_tigas');
    }
}

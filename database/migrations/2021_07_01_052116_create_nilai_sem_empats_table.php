<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNilaiSemEmpatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilai_sem_empats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->unique()->constrained();
            $table->decimal('akpem');
            $table->decimal('pap2');
            $table->decimal('bmn2');
            $table->decimal('knd');
            $table->decimal('knl');
            $table->decimal('simkn');
            $table->decimal('makro');
            $table->decimal('ptun');
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
        Schema::dropIfExists('nilai_sem_empats');
    }
}

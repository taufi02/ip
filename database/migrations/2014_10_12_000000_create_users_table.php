<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('google_id');
            $table->string('name')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('npm')->nullable();
            $table->string('avatar')->nullable();
            $table->string('ipk')->nullable();
            $table->boolean('is_anonim')->default(0);
            $table->boolean('tema')->default(1);
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
        Schema::dropIfExists('users');
    }
}

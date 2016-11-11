<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSafenLoginsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('safen_logins', function (Blueprint $table) {
            $table->increments('id');
            $table->string('address');
            $table->string('port')->default('80');
            $table->string('login')->nullable();
            $table->string('pass')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('safen_logins');
    }
}

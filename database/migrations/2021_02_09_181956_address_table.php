<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('address', function(Blueprint $table){
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->string('street');
            $table->string('number');
            $table->string('district');
            $table->string('city');
            $table->string('state');
            $table->string('country');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('address');
    }
}

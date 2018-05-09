<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFavouritablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('favouritables', function (Blueprint $table) {
            
            $table->integer('user_id')->unsigned();
              $table->foreign('user_id')->references('id')->on('users');
            

            $table->integer('favouritable_id')->unsigned();
            
            $table->string('favouritable_type');

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('favouritables', function (Blueprint $table) {
            //
        });
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commentables', function (Blueprint $table) {
          
            $table->integer('id')->unsigned();

                $table->integer('user_id')->unsigned();
              $table->foreign('user_id')->references('id')->on('users');
            


            $table->mediumtext('body');

            $table->integer('commentable_id')->unsigned();

            $table->string('commentable_type');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('commentables', function (Blueprint $table) {
            //
        });
    }
}

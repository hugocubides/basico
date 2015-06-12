<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Create user_profile
        Schema::create('user_profile', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id')->index()->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
			$table->date('birthday')->nullable();
			$table->text('bio')->nullable();
			$table->string('profession')->nullable();
			$table->string('organization')->nullable();
			$table->string('address')->nullable();
			$table->string('city')->nullable();
			$table->string('country')->nullable();
			$table->string('phone')->nullable();
			$table->string('mobile')->nullable();
			$table->string('website')->nullable();
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
        Schema::drop('user_profile');
    }
}

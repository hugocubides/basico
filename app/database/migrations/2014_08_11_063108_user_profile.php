<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserProfile extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//Create user_profile
		Schema::create('user_profile', function($table)
		{
			$table->increments('id');
			$table->integer('user_id')->index()->unsigned();
			$table->string('first_name')->nullable();
			$table->string('last_name')->nullable();
			$table->string('display_name')->nullable();
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
			$table->string('facebook')->nullable();
			$table->string('twitter')->nullable();
			$table->string('linkedin')->nullable();
			$table->string('github')->nullable();
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
		//Drop user_profile
		Schema::drop('user_profile');
	}

}

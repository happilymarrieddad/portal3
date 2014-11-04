<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArmiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('armies', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('user_id');
            $table->string('name');
            $table->integer('army_type');
            $table->integer('total_points');
            $table->integer('used_points');
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
		Schema::drop('armies');
	}

}

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSoftwareEngineeringTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('software_engineering', function(Blueprint $table)
		{
            $table->increments('id');
            $table->string('name');
            $table->longText('body');
            $table->integer('created_by');
            $table->integer('last_edited_by');
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
		Schema::drop('software_engineering');
	}

}

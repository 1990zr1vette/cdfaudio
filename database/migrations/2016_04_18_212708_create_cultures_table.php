<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCulturesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cultures', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title');
			$table->string('title_fr');	
			$table->text('description');
			$table->text('description_fr');			
			$table->string('image');
			$table->tinyInteger('active')->default(1);				
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
		Schema::drop('cultures');
	}

}

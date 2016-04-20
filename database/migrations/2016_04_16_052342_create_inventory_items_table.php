<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventoryItemsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('inventory_items', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('brand_id');
			$table->integer('product_id');
			$table->integer('product_type_id');
			$table->string('model');
			$table->text('description');
			$table->text('description_fr');
			$table->string('image');
			$table->tinyInteger('active')->default(1);			
			$table->timestamps();
			$table->index('brand_id');
			$table->index('product_id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('inventory_items');
	}

}

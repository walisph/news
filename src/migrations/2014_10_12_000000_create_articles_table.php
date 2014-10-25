<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('articles', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title');
			$table->string('slug')->nullable();
			$table->unsignedInteger('author_id');
			$table->string('dateline')->nullable();
			$table->string('print_column')->nullable();
			$table->string('print_edition')->nullable();
			$table->string('print_page')->nullable();
			$table->string('print_section')->nullable();
			$table->text('body');
			$table->string('section')->nullable();
			$table->text('thumbnail');
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
		Schema::drop('articles');
	}

}

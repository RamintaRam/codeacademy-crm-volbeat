<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCrmProjectsPersonsTypesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('crm_projects_persons_types', function(Blueprint $table)
		{
            $table->string('id', 36)->unique('id_UNIQUE');
			$table->integer('count', true);
			$table->timestamps();
            $table->softDeletes();
			$table->string('name');
			$table->text('description', 65535);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('crm_projects_persons_types');
	}

}

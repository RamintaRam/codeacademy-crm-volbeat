<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCrmClientsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('crm_clients', function(Blueprint $table)
		{
            $table->string('id', 36)->unique('id_UNIQUE');
			$table->integer('count', true);
			$table->enum('type', array('J','F'));
			$table->string('name');
			$table->timestamps();
            $table->softDeletes();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('crm_clients');
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCrmProjectsLoginsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('crm_projects_logins', function(Blueprint $table)
		{
            $table->string('id', 36)->unique('id_UNIQUE');
			$table->integer('count', true);
			$table->timestamps();
            $table->softDeletes();
			$table->string('user_name')->unique('user_name_UNIQUE');
			$table->string('type_id', 36)->index('fk_crm_projects_logins_crm_projects_logins_types1_idx');
			$table->string('secret');
			$table->string('login_url', 2000);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('crm_projects_logins');
	}

}

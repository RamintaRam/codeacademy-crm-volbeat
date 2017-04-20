<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCrmProjectsLoginsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('crm_projects_logins', function(Blueprint $table)
		{
			$table->foreign('type_id', 'fk_crm_projects_logins_crm_projects_logins_types1')->references('id')->on('crm_projects_logins_types')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('crm_projects_logins', function(Blueprint $table)
		{
			$table->dropForeign('fk_crm_projects_logins_crm_projects_logins_types1');
		});
	}

}

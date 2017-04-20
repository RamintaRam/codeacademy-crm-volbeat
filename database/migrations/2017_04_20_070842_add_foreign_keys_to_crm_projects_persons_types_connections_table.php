<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCrmProjectsPersonsTypesConnectionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('crm_projects_persons_types_connections', function(Blueprint $table)
		{
			$table->foreign('person_id', 'fk_crm_projects_persons_types_connections_crm_persons1')->references('id')->on('crm_persons')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('project_id', 'fk_crm_projects_persons_types_connections_crm_projects1')->references('id')->on('crm_projects')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('type_id', 'fk_crm_projects_persons_types_connections_crm_projects_person1')->references('id')->on('crm_projects_persons_types')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('crm_projects_persons_types_connections', function(Blueprint $table)
		{
			$table->dropForeign('fk_crm_projects_persons_types_connections_crm_persons1');
			$table->dropForeign('fk_crm_projects_persons_types_connections_crm_projects1');
			$table->dropForeign('fk_crm_projects_persons_types_connections_crm_projects_person1');
		});
	}

}

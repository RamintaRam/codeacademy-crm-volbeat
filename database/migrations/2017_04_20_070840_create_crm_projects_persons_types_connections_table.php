<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCrmProjectsPersonsTypesConnectionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('crm_projects_persons_types_connections', function(Blueprint $table)
		{
            $table->string('id', 36)->unique('id');
			$table->integer('count', true);
			$table->timestamps();
			$table->timestamp('deleted-at')->nullable()->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->string('project_id', 36)->index('fk_crm_projects_persons_types_connections_crm_projects1_idx');
			$table->string('person_id', 36)->index('fk_crm_projects_persons_types_connections_crm_persons1_idx');
			$table->string('type_id', 36)->index('fk_crm_projects_persons_types_connections_crm_projects_pers_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('crm_projects_persons_types_connections');
	}

}

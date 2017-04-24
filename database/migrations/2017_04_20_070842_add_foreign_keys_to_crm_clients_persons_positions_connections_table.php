<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCrmClientsPersonsPositionsConnectionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('crm_clients_persons_positions_connections', function(Blueprint $table)
		{
			$table->foreign('position_id', 'fk_crm_clients_persons_positions_connections_crm_clients1')->references('id')->on('crm_clients_positions')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('clients_id', 'fk_crm_clients_persons_positions_connections_crm_clients_posi')->references('id')->on('crm_clients')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('persons_id', 'fk_crm_clients_persons_positions_connections_crm_persons1')->references('id')->on('crm_persons')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('crm_clients_persons_positions_connections', function(Blueprint $table)
		{
			$table->dropForeign('fk_crm_clients_persons_positions_connections_crm_clients1');
			$table->dropForeign('fk_crm_clients_persons_positions_connections_crm_clients_posi');
			$table->dropForeign('fk_crm_clients_persons_positions_connections_crm_persons1');
		});
	}

}

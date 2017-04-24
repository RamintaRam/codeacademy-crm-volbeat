<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCrmClientsPersonsPositionsConnectionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('crm_clients_persons_positions_connections', function(Blueprint $table)
		{
			$table->string('id', 36)->unique('id_UNIQUE');
			$table->integer('count', true);
			$table->timestamps();
			$table->softDeletes();
			$table->string('clients_id', 36)->index('fk_crm_clients_persons_positions_connections_crm_clients_po_idx');
			$table->string('persons_id', 36)->index('fk_crm_clients_persons_positions_connections_crm_persons1_idx');
			$table->string('position_id', 36)->index('fk_crm_clients_persons_positions_connections_crm_clients1_idx');
			$table->text('comment', 65535);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('crm_clients_persons_positions_connections');
	}

}

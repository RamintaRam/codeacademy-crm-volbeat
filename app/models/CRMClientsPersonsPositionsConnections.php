<?php

namespace App\models;


class CRMClientsPersonsPositionsConnections extends CoreModel
{
    protected $table = 'crm_clients_persons_positions_connections';

    protected $fillable = ['id', 'clients_id', 'persons_id', 'position_id', 'comment'];
}


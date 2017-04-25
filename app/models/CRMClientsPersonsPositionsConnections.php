<?php

namespace App\models;


/**
 * Class CRMClientsPersonsPositionsConnections
 * @package App\models
 */
class CRMClientsPersonsPositionsConnections extends CoreModel
{
    protected $table = 'crm_clients_persons_positions_connections';

    protected $fillable = ['id', 'clients_id', 'persons_id', 'position_id', 'comment'];

    public function client ()
    {
        return $this->hasOne(CRMClients::class, 'id', 'clients_id');
    }

    public function people()
    {
        return $this->hasMany(CRMPersons::class, 'id', 'persons_id');
    }
}


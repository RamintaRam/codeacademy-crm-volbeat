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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function client()
    {
        return $this->hasOne(CRMClients::class, 'id', 'clients_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function people()
    {
        return $this->hasMany(CRMPersons::class, 'id', 'persons_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function clientPosition()
    {
        return $this->hasMany(CRMClientsPositions::class, 'id', 'position_id');
    }
}


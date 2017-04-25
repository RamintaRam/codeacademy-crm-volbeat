<?php

namespace App\models;

/**
 * Class CRMClients
 * @package App\models
 */
class CRMClients extends CoreModel
{
    protected $table = 'crm_clients';

    protected $fillable = ['id', 'name', 'type'];

    //TODO move to CoreModel
    protected $hidden = ['count', 'created_at', 'updated_at', 'deleted_at'];

    public function projects()
    {
        return $this->hasMany(CRMProjects::class, 'client_id', 'id');
    }

    public function personal()
    {
        return $this->hasMany(CRMClientsPersonsPositionsConnections::class, 'clients_id', 'id');
    }

}

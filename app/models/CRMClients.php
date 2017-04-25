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

    protected $hidden = ['count', 'created_at', 'updated_at', 'deleted_at'];
    protected $appends = ['is_company'];
    protected $with = ['projects', 'personal'];

    public function projects ()
{
    return $this->hasMany(CRMProjects::class, 'client_id', 'id');
}

    public function personal ()
    {
        return $this->hasMany(CRMClientsPersonsPositionsConnections::class, 'clients_id', 'id');
    }

    public function getIsCompanyAttribute()
    {
        return $this->type == 'J';
    }
}

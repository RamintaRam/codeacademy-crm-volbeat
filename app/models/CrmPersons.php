<?php

namespace App\models;


/**
 * Class CRMPersons
 * @package App\models
 */
class CRMPersons extends CoreModel
{
    protected $table = 'crm_persons';

    protected $fillable = ['id', 'name', 'email', 'phone'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function clientsPersonsPositionsConnections()
    {
        return $this->hasMany(CRMClientsPersonsPositionsConnections::class, 'persons_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function projectsPersonsTypesConnections()
    {
        return $this->hasMany(CRMProjectsPersonsTypesConnections::class, 'person_id', 'id');
    }
}



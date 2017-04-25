<?php

namespace App\models;


/**
 * Class CRMProjectsPersonsTypes
 * @package App\models
 */
class CRMProjectsPersonsTypes extends CoreModel
{
    protected $table = 'crm_projects_persons_types';

    protected $fillable = ['id', 'name', 'description'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function projectsPersonsTypesConnections()
    {
        return $this->hasMany(CRMProjectsPersonsTypesConnections::class, 'type_id', 'id');
    }
}
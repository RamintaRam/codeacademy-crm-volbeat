<?php

namespace App\models;


/**
 * Class CRMProjectsPersonsTypesConnections
 * @package App\models
 */
class CRMProjectsPersonsTypesConnections extends CoreModel
{
    protected $table = 'crm_projects_persons_types_connections';

    protected $fillable = ['id', 'project_id', 'person_id', 'type_id'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function projectPersonType()
    {
        return $this->hasMany(CRMProjectsPersonsTypes::class, 'id', 'type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function project()
    {
        return $this->hasMany(CRMProjects::class, 'id', 'project_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function person()
    {
        return $this->hasMany(CRMPersons::class, 'id', 'person_id');
    }
}
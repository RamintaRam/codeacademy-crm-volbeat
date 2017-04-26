<?php

namespace App\models;


/**
 * Class CRMProjects
 * @package App\models
 */
class CRMProjects extends CoreModel
{
    protected $table = 'crm_projects';

    protected $fillable = ['id', 'name', 'description', 'client_id', 'type_id'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function projectType()
    {
        return $this->hasMany(CRMProjectsTypes::class, 'type_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function projectLoginConnection()
    {
        return $this->hasMany(CRMProjectsLoginsConnections::class, 'project_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function persons()
    {
        return $this->hasMany(CRMProjectsPersonsTypesConnections::class, 'project_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function client()
    {
        return $this->hasOne(CRMClients::class, 'id', 'client_id');
    }
}
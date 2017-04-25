<?php

namespace App\models;


/**
 * Class CRMProjectsTypes
 * @package App\models
 */
class CRMProjectsTypes extends CoreModel
{
    protected $table = 'crm_projects_types';

    protected $fillable = ['id', 'name', 'description'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function project()
    {
        return $this->hasMany(CRMProjects::class, 'type_id', 'id');
    }
}
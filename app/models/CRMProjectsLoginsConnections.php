<?php

namespace App\models;


/**
 * Class CRMProjectsLoginsConnections
 * @package App\models
 */
class CRMProjectsLoginsConnections extends CoreModel
{
    protected $table = 'crm_projects_logins_connections';

    protected $fillable = ['id', 'project_id', 'login_id'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function projects()
    {
        return $this->hasMany(CRMProjects::class, 'id', 'project_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function projectLogin()
    {
        return $this->hasMany(CRMProjectsLogins::class, 'id', 'login_id');
    }
}
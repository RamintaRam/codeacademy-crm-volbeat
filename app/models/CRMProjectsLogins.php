<?php

namespace App\models;


/**
 * Class CRMProjectsLogins
 * @package App\models
 */
class CRMProjectsLogins extends CoreModel
{
    protected $table = 'crm_projects_logins';

    protected $fillable = ['id', 'user_name', 'type_id', 'secret', 'login_url'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function projectLoginConnection()
    {
        return $this->hasMany(CRMProjectsLoginsConnections::class, 'login_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function projectLoginType()
    {
        return $this->hasMany(CRMProjectsLoginsTypes::class, 'id', 'type_id');
    }
}
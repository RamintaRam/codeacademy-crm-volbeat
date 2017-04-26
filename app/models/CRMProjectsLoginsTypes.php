<?php

namespace App\models;


/**
 * Class CRMProjectsLoginsTypes
 * @package App\models
 */
class CRMProjectsLoginsTypes extends CoreModel
{
    protected $table = 'crm_projects_logins_types';

    protected $fillable = ['id', 'name', 'description'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function projectLogin()
    {
        return $this->hasMany(CRMProjectsLogins::class, 'type_id', 'id');
    }
}
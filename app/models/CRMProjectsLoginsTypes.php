<?php

namespace App\models;



class CRMProjectsLoginsTypes extends CoreModel
{
    protected $table = 'crm_projects_logins_types';

    protected $fillable = ['id', 'name', 'description'];
}
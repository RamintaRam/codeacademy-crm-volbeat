<?php

namespace App\models;



class CRMProjectsLoginsConnections extends CoreModel
{
    protected $table = 'crm_projects_logins_connections';

    protected $fillable = ['id', 'project_id', 'login_id'];
}
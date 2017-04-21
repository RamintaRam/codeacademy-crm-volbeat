<?php

namespace App\models;


class CRMProjectsLogins extends CoreModel
{
    protected $table = 'crm_projects_logins';

    protected $fillable = ['id', 'user_name', 'type_id', 'secret', 'login_url'];
}
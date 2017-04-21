<?php

namespace App\models;



class CRMProjectsTypes extends CoreModel
{
    protected $table = 'crm_projects_types';

    protected $fillable = ['id', 'name', 'description'];
}
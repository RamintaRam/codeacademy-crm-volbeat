<?php

namespace App\models;


class CRMProjects extends CoreModel
{
    protected $table = 'crm_projects';

    protected $fillable = ['id', 'name', 'description', 'client_id', 'type_id'];
}
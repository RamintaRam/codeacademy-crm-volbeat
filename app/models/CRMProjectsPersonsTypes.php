<?php

namespace App\models;



class CRMProjectsPersonsTypes extends CoreModel
{
    protected $table = 'crm_projects_persons_types';

    protected $fillable = ['id', 'name', 'description'];
}
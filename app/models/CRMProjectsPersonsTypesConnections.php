<?php

namespace App\models;


class CRMProjectsPersonsTypesConnections extends CoreModel
{
    protected $table = 'crm_projects_persons_types_connections';

    protected $fillable = ['id', 'project_id', 'person_id', 'type_id'];
}
<?php

namespace App\models;


class CRMClients extends CoreModel
{
    protected $table = 'crm_clients';

    protected $fillable = ['id', 'name', 'type'];
}

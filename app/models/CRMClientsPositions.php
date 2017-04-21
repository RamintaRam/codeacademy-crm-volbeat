<?php

namespace App\models;

class CRMClientsPositions extends CoreModel
{
    protected $table = 'crm_clients_positions';

    protected $fillable = ['id', 'name', 'description'];
}

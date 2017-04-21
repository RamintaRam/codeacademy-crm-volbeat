<?php

namespace App\models;


class CRMPersons extends CoreModel
{
    protected $table = 'crm_persons';

    protected $fillable = ['id', 'name', 'email', 'phone'];
}



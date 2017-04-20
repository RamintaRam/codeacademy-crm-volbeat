<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CrmPersons extends Model
{
    use SoftDeletes;

    protected $table = 'crm_persons';

    protected $fillable = ['id', 'name', 'email', 'phone'];
}



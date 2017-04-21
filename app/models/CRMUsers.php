<?php

namespace App\models;



class CRMUsers extends CoreModel
{
    protected $table = 'users';

    protected $fillable = ['id', 'name', 'email', 'password'];
}

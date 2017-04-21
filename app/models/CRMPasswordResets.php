<?php

namespace App\models;


class CRMPasswordResets extends CoreModel
{
    protected $table = 'password_resets';

    protected $fillable = ['email', 'token'];
}

<?php


use App\models\CrmPersons;

Route::get('/', function () {

CrmPersons::get();

    return view('welcome');
});

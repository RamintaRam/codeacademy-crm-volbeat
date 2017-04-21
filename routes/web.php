<?php


Route::get('/persons', [

    'uses' => 'CRMPersonsController@index'
]);

Route::get('/generate-fake-data/persons/{count}', [

    'uses' => 'CRMFakeDataController@generatePersons'

]);
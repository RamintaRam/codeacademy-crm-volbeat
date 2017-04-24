<?php


Route::get('/persons', [

    'uses' => 'CRMPersonsController@index'
]);

Route::get('/generate-fake-data/persons/{count}', [

    'uses' => 'CRMFakeDataController@generatePersons'

]);

Route:: get('/clients', [
    'uses' => 'CRMClientsController@index'
]);

Route::get('/generate-fake-data/clients/{count}', [

    'uses' => 'CRMFakeDataController@generateClients'

]);


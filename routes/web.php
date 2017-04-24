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


Route:: get('/projectsTypes', [
    'uses' => 'CRMProjectsTypesController@index'
]);

Route::get('/generate-fake-data/projectsTypes/{count}', [

    'uses' => 'CRMFakeDataController@generateProjectsTypes'

]);


Route:: get('/projects', [
    'uses' => 'CRMProjectsController@index'
]);

Route::get('/generate-fake-data/projects/{count}', [

    'uses' => 'CRMFakeDataController@generateProjects'


]);

Route:: get('/clientsPositions', [
    'uses' => 'CRMClientsPositionsController@index'
]);

Route::get('/generate-fake-data/clientsPositions/{count}', [

    'uses' => 'CRMFakeDataController@generateClientsPositions'

]);


Route:: get('/projectsLoginsTypes', [
    'uses' => 'CRMProjectsLoginsTypesController@index'
]);

Route::get('/generate-fake-data/projectsLoginsTypes/{count}', [

    'uses' => 'CRMFakeDataController@generateProjectsLoginsTypes'

]);


Route:: get('/projectsLogins', [
    'uses' => 'CRMProjectsLoginsController@index'
]);

Route::get('/generate-fake-data/projectsLogins/{count}', [

    'uses' => 'CRMFakeDataController@generateProjectsLogins'

]);


Route:: get('/clientsPersonsPositionsConnections', [
    'uses' => 'CRMClientsPersonsPositionsConnections@index'
]);

Route::get('/generate-fake-data/clientsPersonsPositionsConnections/{count}', [

    'uses' => 'CRMFakeDataController@generateClientsPersonsPositionConnection'

]);


Route:: get('/projectsLoginsConnections', [
    'uses' => 'CRMProjectsLoginsConnections@index'
]);

Route::get('/generate-fake-data/projectsLoginsConnections/{count}', [

    'uses' => 'CRMFakeDataController@generateProjectsLoginsConnection'

]);


Route:: get('/projectsPersonsTypes', [
    'uses' => 'CRMProjectsPersonsTypes@index'
]);

Route::get('/generate-fake-data/projectsPersonsTypes/{count}', [

    'uses' => 'CRMFakeDataController@generateProjectsPersonsTypes'

]);


Route:: get('/projectsPersonsTypesConnections', [
    'uses' => 'CRMProjectsPersonsTypesConnections@index'
]);

Route::get('/generate-fake-data/projectsPersonsTypesConnections/{count}', [

    'uses' => 'CRMFakeDataController@generateProjectsPersonsTypesConnections'

]);



<?php


use App\models\CrmPersons;

Route::get('/', function () {


    return CrmPersons::get();
});

Route::get('/new-person', function ()
{
    return CrmPersons::create([
        'id' => \Ramsey\Uuid\Uuid::uuid4(),
        'name' => 'Raminta',
        'email' => 'Bingelyte',
        'phone' => '86xxxxxxx'
    ]);
});

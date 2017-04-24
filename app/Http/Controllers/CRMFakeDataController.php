<?php

namespace App\Http\Controllers;

use App\models\CRMClients;
use App\models\CRMPersons;
use Faker\Factory;

use Illuminate\Http\Request;

class CRMFakeDataController extends Controller
{
    public function generatePersons(int $count = 10)
    {
        $faker = Factory::create('lt_LT');

        for ($i = 0; $i < $count; $i++)
        {
            CRMPersons::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'phone' => $faker->phoneNumber,
            ]);
        }
    }

    public function generateClients(int $count = 10)
    {
        $faker = Factory::create();

        for ($i = 0; $i < $count; $i++)
        {
            CRMClients::create([
                'name' => $faker->name,
                'type' => $faker->randomElement(['J', 'F']),
            ]);
        }
    }

}

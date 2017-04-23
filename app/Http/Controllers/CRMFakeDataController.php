<?php

namespace App\Http\Controllers;

use App\models\CRMPersons;
use Faker\Factory;

use Illuminate\Http\Request;

class CRMFakeDataController extends Controller
{
    public function generatePersons(int $count = 10)

        $faker = Factory::create();

        for ($i = 0; $i < $count; $i++)
        {
            CRMPersons::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'phone' => $faker->phoneNumber,
            ]);
        }
    }

    public function generateClient(int $count = 10)
    {
        $faker = Factory::create();

        for ($i = 0; $i < $count; $i++)
        {
            CRMPersons::create([
                'name' => $faker->name,
                'type' => $faker->type,
            ]);
        }
    }

}

<?php

namespace App\Http\Controllers;

use App\models\CRMPersons;
use Faker\Factory;

use Illuminate\Http\Request;

class CRMFakeDataController extends Controller
{
    public function generatePersons(int $count = 50)
    {
        $faker = Factory::create();

        for ($i = 0; $i < $count; $i++)
        {
            $data[] = [
                'id' => $faker->uuid,
                'name' => $faker->name,
                'email' => $faker->email,
                'phone' => $faker->phoneNumber,
            ];

        }
        CRMPersons::insert($data);
    }

}

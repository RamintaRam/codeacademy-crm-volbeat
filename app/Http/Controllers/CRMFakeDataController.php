<?php

namespace App\Http\Controllers;

use App\models\CRMClients;
use App\models\CRMClientsPersonsPositionsConnections;
use App\models\CRMClientsPositions;
use App\models\CRMPersons;
use App\models\CRMProjects;
use App\models\CRMProjectsLogins;
use App\models\CRMProjectsLoginsConnections;
use App\models\CRMProjectsLoginsTypes;
use App\models\CRMProjectsPersonsTypes;
use App\models\CRMProjectsPersonsTypesConnections;
use App\models\CRMProjectsTypes;
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

    public function generateProjectsTypes(int $count = 10)
    {
        $faker = Factory::create();

        for ($i = 0; $i < $count; $i++)
        {
            CRMProjectsTypes::create([
                'name' => $faker->name,
                'description' => $faker->text,
            ]);
        }
    }

    public function generateProjects(int $count = 10)
    {
        $faker = Factory::create();

        for ($i = 0; $i < $count; $i++)
        {
            CRMProjects::create([
                'name' => $faker->name,
                'description' => $faker->text,
                'client_id' => CRMClients::all()->random()->id,
                'type_id' => CRMProjectsTypes::all()->random()->id,

            ]);

        }
    }

    public function generateClientsPositions(int $count = 10)
    {
        $faker = Factory::create();

        for ($i = 0; $i < $count; $i++)
        {
            CRMClientsPositions::create([
                'name' => $faker->name,
                'description' => $faker->text,
            ]);

        }
    }

    public function generateProjectsLoginsTypes(int $count = 10)
    {
        $faker = Factory::create();

        for ($i = 0; $i < $count; $i++)
        {
            CRMProjectsLoginsTypes::create([
                'name' => $faker->name,
                'description' => $faker->text,
            ]);

        }
    }


    public function generateProjectsLogins(int $count = 10)
    {
        $faker = Factory::create();

        for ($i = 0; $i < $count; $i++)
        {
            CRMProjectsLogins::create([
                'user_name' => $faker->userName,
                'type_id' => CRMProjectsLoginsTypes::all()->random()->id,
                'secret' => $faker->password,
                'login_url' => $faker->url,
            ]);

        }
    }


    public function generateClientsPersonsPositionConnection(int $count = 10)
    {
        $faker = Factory::create();

        for ($i = 0; $i < $count; $i++)
        {
            CRMClientsPersonsPositionsConnections::create([
                'clients_id' => CRMClients::all()->random()->id,
                'persons_id' => CRMPersons::all()->random()->id,
                'position_id' => CRMClientsPositions::all()->random()->id,
                'comment' => $faker->text,
            ]);


        }
    }


    public function generateProjectsLoginsConnection(int $count = 10)
    {

        for ($i = 0; $i < $count; $i++)
        {
            CRMProjectsLoginsConnections::create([
                'project_id' => CRMProjects::all()->random()->id,
                'login_id' => CRMProjectsLogins::all()->random()->id,
            ]);
        }
    }


    public function generateProjectsPersonsTypes(int $count = 10)
    {
          $faker = Factory::create();

        for ($i = 0; $i < $count; $i++)
        {
            CRMProjectsPersonsTypes::create([
                'name' => $faker->name,
                'description' => $faker->text,
            ]);
        }
    }


    public function generateProjectsPersonsTypesConnections(int $count = 10)
    {

        for ($i = 0; $i < $count; $i++)
        {
            CRMProjectsPersonsTypesConnections::create([
                'project_id' => CRMProjects::all()->random()->id,
                'person_id' => CRMPersons::all()->random()->id,
                'type_id' => CRMProjectsPersonsTypes::all()->random()->id,
            ]);
        }
    }
}

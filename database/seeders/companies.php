<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Seeder;

class companies extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        $data = [];

        for ($i = 1; $i <= 10 ; $i++) {
            array_push($data, [
                'name'     => $faker->name(),
                'user_id' => $faker->numberBetween(2,10),
            ]);
        }

        Company::insert($data);
    }
}

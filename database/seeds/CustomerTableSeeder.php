<?php

use App\Customer;
use Faker\Factory;
use Illuminate\Database\Seeder;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        Customer::truncate();

        foreach(range(1, 100) as $i) {
            Customer::create([
                'name' => $faker->firstName,
                'email' => $faker->email,
                'phone' => $faker->phoneNumber
            ]);
        }
    }
}

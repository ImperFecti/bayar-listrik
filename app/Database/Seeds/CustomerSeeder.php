<?php

namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;
use CodeIgniter\Database\Seeder;

class CustomerSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create('id_ID');

        for ($i = 0; $i < 100; $i++) {
            // generate data dummy
            $data = [
                'name' => $faker->name,
                'no_customer' => $faker->nik,
                'gender' => $faker->title == 'Ms.' || $faker->title == 'Miss' ? 'P' : 'L',
                'address' => $faker->address,
                'email' => $faker->email,
                'phone' => $faker->phoneNumber,
                'created_at' => Time::createFromTimestamp($faker->unixTime),
                'updated_at' => Time::createFromTimestamp($faker->unixTime),
            ];

            // Using Query Builder to insert data
            $this->db->table('customer')->insert($data);
        }
    }
}

<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker= Faker::create();
        for($i=0;$i<=2000;$i++){
            User::create([
                'names' => $faker->name,
                'lastnames' => $faker->lastname,
                'email' => $faker->email,
                'address' => $faker->address,
    
            ]);
        };

        
    }
}

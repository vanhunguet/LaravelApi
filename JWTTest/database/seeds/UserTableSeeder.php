<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        User::truncate();

        $faker = \Faker\Factory::create();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < ; $i++) {
            User::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'password'=>$faker->password(2,20),
            ]);
        }
    }
}

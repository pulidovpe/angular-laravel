<?php

use Illuminate\Database\Seeder;
use App\User;
// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;
use Faker\Factory as Faker;

class {{class}} extends Seeder
{
    public function run()
    {
        /*$faker = Faker\Factory::create(); 
 
        Eloquent::unguard();

        foreach(range(1,5) as $index)
        {
            User::create([                
                'name' => $faker->userName,
                'email' =>$faker->email,
                'password' =>bcrypt('secret')
            ]);
        }*/

        $users = [
            [
                'name'    => 'Pulido V.P.E.',
                'email'   => 'pulidovpe.dev@gmail.com',
                'password'=> Crypt::encrypt('123456')
            ]
        ]; //Hash::make('123456')

        foreach ($users as $user) {
            \App\User::create($user);
        }
    }
}

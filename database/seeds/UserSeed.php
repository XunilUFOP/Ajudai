<?php

use Illuminate\Database\Seeder;
use App\User;
use Faker\Factory as Faker;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //DB::table('users')->truncate();
        $fakerBrazil = Faker::create('pt_BR');
        $faker = Faker::create();

        User::create(array(
          'name' => 'Administrador',
          'user' => 'admin',
          'password' => Hash::make('admin'),
          'email' => 'admin@ajudai.dev',
          'type' => 1
        ));

        User::create(array(
          'name' => 'Operador',
          'user' => 'operador',
          'password' => Hash::make('operador'),
          'email' => 'operador@ajudai.dev',
          'type' => 2
        ));


        foreach (range(1, 10) as $index) {
          User::create(array(
            'name' => $fakerBrazil->name,
            'user' => $faker->userName,
            'password' => Hash::make('teste'),
            'email' => $faker->safeEmail,
            'type' => 3
          ));
        }
    }
}

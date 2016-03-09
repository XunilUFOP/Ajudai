<?php

use Illuminate\Database\Seeder;
use App\UserType;

class TypeSeed extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //DB::table('types')->truncate();

        UserType::create(array(
          'type' => 'Administrador'
        ));

        UserType::create(array(
          'type' => 'Operador'
        ));

        UserType::create(array(
          'type' => 'Usuario'
        ));
    }
}

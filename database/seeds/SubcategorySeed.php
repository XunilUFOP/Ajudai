<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Subcategory;

class SubcategorySeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //DB::table('subcategories')->truncate();
        $faker = Faker::create();

        Subcategory::create(array(
          'title' => 'Estruturas de dados',
          'category_id' => 1
        ));

        Subcategory::create(array(
          'title' => 'Prog II',
          'category_id' => 1
        ));

        Subcategory::create(array(
          'title' => 'FTC',
          'category_id' => 1
        ));

        Subcategory::create(array(
          'title' => 'Programacao Linear',
          'category_id' => 2
        ));

        Subcategory::create(array(
          'title' => 'Estatistica I',
          'category_id' => 2
        ));

        Subcategory::create(array(
          'title' => 'Otimizacao Combinatoria',
          'category_id' => 2
        ));

        Subcategory::create(array(
          'title' => 'Compiladores I',
          'category_id' => 3
        ));

        Subcategory::create(array(
          'title' => 'Redes de Computadores II',
          'category_id' => 3
        ));

        Subcategory::create(array(
          'title' => 'Avaliação de ',
          'category_id' => 3
        ));

    }
}

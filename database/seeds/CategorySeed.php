<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategorySeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //DB::table('categories')->truncate();

        Category::create(array(
          'title' => 'Sistemas de Informacao'
        ));

        Category::create(array(
          'title' => 'Engenharia de Producao'
        ));

        Category::create(array(
          'title' => 'Engenharia de Computacao'
        ));

        Category::create(array(
          'title' => 'Engenharia Eletrica'
        ));
    }
}

<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Post;

class PostSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //DB::table('posts')->truncate();
        $faker = Faker::create();

        foreach (range(1, 50) as $index) {
          Post::create(array(
            'author_id' => $faker->numberBetween($min = 1, $max = 12),
            'category_id' => $faker->numberBetween($min = 1, $max = 4),
            'title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
            'body' => $faker->sentence($nbWords = 15, $variableNbWords = true),
            'tags' => $faker->randomElement($array = array('Prog', 'Calculo', 'Fisica', 'BD', 'IA', 'Web', 'Linguagens', 'Maquinas')),
            'closed' => 0
          ));
        }
    }
}

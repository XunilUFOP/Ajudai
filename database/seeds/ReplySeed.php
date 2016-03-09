<?php

use Illuminate\Database\Seeder;
use App\Reply;
use Faker\Factory as Faker;

class ReplySeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //DB::table('replies')->truncate();
        $faker = Faker::create();

        foreach (range(1, 150) as $index) {
          Reply::create(array(
            'post_id' => $faker->numberBetween($min = 1, $max = 50),
            'author_id' => $faker->numberBetween($min = 1, $max = 12),
            'body' => $faker->sentence($nbWords = 15, $variableNbWords = true),
            'votes' => $faker->numberBetween($min = -15, $max = 15)
          ));
        }
    }
}

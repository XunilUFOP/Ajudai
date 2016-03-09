<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserTableSeeder::class);
        $this->call('TypeSeed');
        $this->call('CategorySeed');
        $this->call('UserSeed');
        $this->call('PostSeed');
        $this->call('ReplySeed');
    }
}

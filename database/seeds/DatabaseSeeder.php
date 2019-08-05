<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Artisan::call('migrate:fresh');

        factory('App\Models\User')->create([
            'name' => 'elijah',
            'email' => 'elijah@gmail.com',
            'password' => bcrypt('hellojava')
        ]);

        factory('App\Models\User', 5000)->create();

        factory('App\Models\Article', 5)->create(['user_id' => 1]);
        factory('App\Models\Article', 10)->create(['user_id' => 2]);
        factory('App\Models\Article', 15)->create(['user_id' => 3]);
        factory('App\Models\Article', 20)->create(['user_id' => 4]);

        factory('App\Models\Article', 5000)->create();

        factory('App\Models\Comment', 10)->create(['article_id' => 2, 'user_id' => 1]);
        factory('App\Models\Comment', 15)->create(['article_id' => 3, 'user_id' => 2]);
        factory('App\Models\Comment', 20)->create(['article_id' => 4, 'user_id' => 3]);

        factory('App\Models\Comment', 5000)->create();
    }
}

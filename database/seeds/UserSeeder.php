<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 1)->create();
        factory(App\Category::class, 1)->create();
        factory(App\Tag::class, 1)->create();
        factory(App\Article::class, 15)->create();
    }
}

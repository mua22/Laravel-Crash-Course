<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 15)->create();
        foreach (\App\User::all()  as $user){
            $user->articles()->saveMany(
                factory(App\Article::class, rand(2,10))->make()
            );
        }
    }
}

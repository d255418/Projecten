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
        //
        factory(\App\User::class, 500)
            //
            ->create()
            //
            ->each( function($user) {
            //
                $user->todos()
            //
                     ->saveMany( factory(\App\Todo::class,5)->make() );
            });
    }
}

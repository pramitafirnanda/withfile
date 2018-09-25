<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call('UserTableSeeder');
        $this->command->info('User table seeded!');
    }
}



class UserTableSeeder extends Seeder {

    public function run()
    {
        $user = new App\User;
        $user->name = 'reviewer2';
        $user->nidn = 'reviewer2';
        $user->password = bcrypt('asdfgh');
        $publisher = new App\Reviewer;
        $publisher->name = 'reviewer2';
        $publisher->nidn = 'reviewer2';
        $publisher->save();
        $publisher->user()->save($user);
    }
}

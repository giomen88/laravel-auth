<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();

        $user->name = 'Giorgia';
        $user->email = 'giorgia@boolean.it';
        $user->password = bcrypt('boolean');

        $user->save();
    }
}

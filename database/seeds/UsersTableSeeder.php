<?php

use Illuminate\Database\Seeder;

use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(['name' => 'Ken' , 'email' => 'ken@mail.com' , 'password' => '1111']);
        User::create(['name' => 'Mike' , 'email' => 'mike@mail.com' , 'password' => '1111']);
        User::create(['name' => 'John' , 'email' => 'john@mail.com' , 'password' => '1111']);
        User::create(['name' => 'Lisa' , 'email' => 'lisa@mail.com' , 'password' => '1111']);
    }
}

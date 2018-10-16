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
        User::create([
        	'username'=> 'Tom',
        	'name'=> 'Tom',
        	'lastname'=> 'Ate',
        	'phone'=> '67570212',
        	'address'=> 'Dalaran nro 10',
        	'password' => bcrypt('123456'),
        	'admin'=> true,
        ]);
    }
}

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
            'name' => 'Zenón Burgos',
            'email' => 'znburgos@gmail.com',
            'password' => bcrypt('123123'),
            'dni' => '005496086',
            'address' => '',
            'phone' => '',
            'role' => 'admin',
        ]);
        Factory(User::class, 50)->create();
    }
}

<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminLogin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Data = [[
            'name' => 'Sergio Moses',
            'email' => 'sergio@gmail.com',
            'role' => 'admin',
            'password' => bcrypt('123456'),
        ], 
        [
            'name' => 'Riyanto',
            'email' => 'riyanto@gmail.com',
            'role' => 'admin',
            'password' => bcrypt('123456'),
        ]];

        foreach( $Data as $key => $val){
            User::create($val);
        }
    }
}

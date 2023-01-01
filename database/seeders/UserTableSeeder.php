<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name'=>'Admin', 'role_id'=>1, 'email'=>'admin@gmail.com', 'password'=>md5('00000000')],
            ['name'=>'User', 'role_id'=>0, 'email'=>'user@gmail.com', 'password'=>bcrypt('00000000')],
        ];
        User::insert($data);
    }
}

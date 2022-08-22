<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            ['name' => 'John Doe', 
            'email' => 'john@aams.com', 
            'telephone' => '0888223344' , 
            'employment' => 'Zatec_rw' , 
            'role_id' => 2 , 
            'status' => 'active' , 
            'password' => Hash::make('password'),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => Carbon::now(),
            ],
            ['name' => 'Jane Doe', 
            'email' => 'jane@aams.com', 
            'telephone' => '0888223322' , 
            'employment' => 'Amazing Tech' , 
            'role_id' => 2 , 
            'status' => 'inactive' , 
            'password' => Hash::make('password'),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => Carbon::now(),
            ],
            ['name' => 'Joe Doe', 
            'email' => 'joe@aams.com', 
            'telephone' => '0888223311' , 
            'employment' => 'IZY Tech' , 
            'role_id' => 2 , 
            'status' => 'inactive' , 
            'password' => Hash::make('password'),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => Carbon::now(),
            ],
            ['name' => 'Jack Smith', 
            'email' => 'jack@aams.com', 
            'telephone' => '0888223301' , 
            'employment' => 'IZY Tech' , 
            'role_id' => 2 , 
            'status' => 'inactive' , 
            'password' => Hash::make('password'),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => Carbon::now(),
            ],
            ['name' => 'Jeanette Doe', 
            'email' => 'jeanette@aams.com', 
            'telephone' => '08882233102' , 
            'employment' => 'IZY Tech' , 
            'role_id' => 2 , 
            'status' => 'inactive' , 
            'password' => Hash::make('password'),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => Carbon::now(),
            ],
            ['name' => 'Ryan Smith', 
            'email' => 'smith@aams.com', 
            'telephone' => '0888223308' , 
            'employment' => 'BK Arena' , 
            'role_id' => 2 , 
            'status' => 'active' , 
            'password' => Hash::make('password'),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => Carbon::now(),
            ],
            ['name' => 'Angelo Mburanda', 
            'email' => 'angelo@aams.com', 
            'telephone' => '08882233126' , 
            'employment' => 'Simba Supermarket' , 
            'role_id' => 2 , 
            'status' => 'inactive' , 
            'password' => Hash::make('password'),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => Carbon::now(),
            ],
            ['name' => 'Prince Kabera', 
            'email' => 'prince@aams.com', 
            'telephone' => '0888223456' , 
            'employment' => 'Amazing Tech' , 
            'role_id' => 2 , 
            'status' => 'inactive' , 
            'password' => Hash::make('password'),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => Carbon::now(),
            ]
         ];

        User::insert($users);
    }
}

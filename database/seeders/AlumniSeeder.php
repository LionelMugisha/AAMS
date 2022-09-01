<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;

class AlumniSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            ['name' => 'Chris Paul', 
            'email' => 'chris@aams.com', 
            'telephone' => '0888223112',
            'employment_status' => 'employed',
            'employment' => 'Zatec_rw', 
            'role_id' => 3, 
            'status' => 'inactive',
            'faculty' => 'IT',
            'department' => 'Software Engineering',
            'yearofgraduation' => '2020',
            'school_id' => '17298',
            'address' => 'Rwanda, Kigali City',
            'password' => Hash::make('password'),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => Carbon::now(),
            ],
            ['name' => 'Paul Kalisa', 
            'email' => 'paul@aams.com', 
            'telephone' => '0888223221',
            'employment_status' => 'unemployed',
            'employment' => 'none', 
            'role_id' => 3, 
            'status' => 'active',
            'faculty' => 'IT',
            'department' => 'Software Engineering',
            'yearofgraduation' => '2020',
            'school_id' => '17299',
            'address' => 'Rwanda, Kigali City',
            'password' => Hash::make('password'),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => Carbon::now(),
            ],
            ['name' => 'Lebron James', 
            'email' => 'james@aams.com', 
            'telephone' => '0888223098',
            'employment_status' => 'employed',
            'employment' => 'RISA', 
            'role_id' => 3, 
            'status' => 'active',
            'faculty' => 'IT',
            'department' => 'Networking',
            'yearofgraduation' => '2020',
            'school_id' => '17300',
            'address' => 'Rwanda, Kigali City',
            'password' => Hash::make('password'),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => Carbon::now(),
            ],
            ['name' => 'Kevin Durant', 
            'email' => 'kevin@aams.com', 
            'telephone' => '0888223009',
            'employment_status' => 'employed',
            'employment' => 'Split Move Ltd', 
            'role_id' => 3, 
            'status' => 'inactive',
            'faculty' => 'IT',
            'department' => 'Information Management',
            'yearofgraduation' => '2021',
            'school_id' => '18901',
            'address' => 'Rwanda, South Province',
            'password' => Hash::make('password'),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => Carbon::now(),
            ],
            ['name' => 'Antentokoumpo Giannis', 
            'email' => 'giannis@aams.com', 
            'telephone' => '0888223786',
            'employment_status' => 'unemployed',
            'employment' => 'none', 
            'role_id' => 3, 
            'status' => 'inactive',
            'faculty' => 'IT',
            'department' => 'Software Engineering',
            'yearofgraduation' => '2019',
            'school_id' => '17254',
            'address' => 'Rwanda, Kigali City',
            'password' => Hash::make('password'),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => Carbon::now(),
            ]
         ];

        User::insert($users);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\AdminTable;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::where('email', 'alumni@auca.com')->first();
        if (!$admin) {
            User::create([
                'name' => 'Admin',
                'email' => 'admin@aams.com',
                'password' => Hash::make('password'),
                'role_id' => "1",
            ]);
        }
    }
}

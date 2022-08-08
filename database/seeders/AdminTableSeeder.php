<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\AdminTable;
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
        $admin = Admin::where('email', 'alumni@auca.com')->first();
        if (!$admin) {
            Admin::create([
                'username' => 'Admin',
                'email' => 'admin@hotel.com',
                'password' => Hash::make('password'),
            ]);
        }
    }
}

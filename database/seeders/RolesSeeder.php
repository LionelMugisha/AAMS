<?php

namespace Database\Seeders;

use App\Models\Roles;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Roles::truncate();
        Roles::create(['name' => 'admin']);
        Roles::create(['name' => 'member']);
        Roles::create(['name' => 'alumni']);
        Schema::enableForeignKeyConstraints();
    }
}

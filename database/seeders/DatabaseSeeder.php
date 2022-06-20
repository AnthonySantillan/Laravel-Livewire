<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $role = Role::create(['name' => 'admin']);
        $user = new User;
        $user->name = 'Admin';
        $user->email = 'admin@test.com';
        $user->password = bcrypt('123456789');
        $user->assignRole('admin');

        $user->save();


    }
}

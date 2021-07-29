<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
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
        $admin = Role::create(['name' => 'Admin']);
        $student = Role::create(['name' => 'Student']);

        $user = User::factory()->createOne([
            'name' => 'Obada',
            'email' => 'obada@test.com',
        ]);

        $user->assignRole($admin);
    }
}

<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        // Admin User
        User::create([
            'name' => 'Admin User',
            'email' => 'rajnish42413@gmail.com',
            'password' => bcrypt('123456'),
            'is_admin' => true,
        ]);

        // non admin user
        User::factory()->create();
    }
}

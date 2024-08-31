<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Utils\UserRoleEnum;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::query()->create([
            'username' => 'userphr09',
            'email' => 'userphr09@gmail.com',
            'password' => Hash::make('12121212'),
            'role' => UserRoleEnum::USER_DEV_ROLE->value
        ]);
    }
}

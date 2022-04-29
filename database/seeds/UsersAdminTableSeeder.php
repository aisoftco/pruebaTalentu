<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Str;

class UsersAdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        User::create([
            'id' => 1,
            'name' => 'Administrator',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'type_document_id' => 1,
            'document_number' => 111052525,
            'password' => bcrypt('123456'),
            'rol' => 'ADMIN',
            'remember_token' => Str::random(10),
        ]);
    }
}

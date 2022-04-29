<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TypeDocumentSeeder::class);
        $this->call(UsersAdminTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}

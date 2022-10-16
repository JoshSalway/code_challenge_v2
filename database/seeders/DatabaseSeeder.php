<?php

namespace Database\Seeders;

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
         \App\Models\User::factory()->create([
             'name' => 'Admin User',
             'email' => 'admin@example.com',
             'password' => bcrypt('password'),
         ]);
         $this->command->info('Admin user created.');

        \App\Models\User::factory(9)->create();
        $this->command->info('Users created.');

        \App\Models\Contact::factory(100)
            ->has(\App\Models\Phone::factory()->count(rand(1, 3)))
            ->create();
        $this->command->info('Contacts created.');
    }
}

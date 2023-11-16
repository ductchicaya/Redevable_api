<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\ResponsableRedevable::factory(10)->create();
        \App\Models\TypeRedevable::factory(2)->create();
        \App\Models\Redevable::factory(8)->create();
        \App\Models\Redevance::factory(2)->create();
        \App\Models\Infraction::factory(10)->create();
        \App\Models\ReleveDeclaratif::factory(15)->create();
        \App\Models\Sanction::factory(10)->create();
        \App\Models\Agent::factory(10)->create();
        \App\Models\User::factory(20)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}

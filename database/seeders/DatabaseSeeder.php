<?php

namespace Database\Seeders;

use App\Models\Menu;
use App\Models\Role;
use App\Models\TahunAkademik;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $this->call([
            ConfigAppSeeder::class,
            RoleSeeder::class,
            MenuSeeder::class,
            TahunAkademikSeeder::class,
            TingkatSeeder::class,
        ]);
    }
}

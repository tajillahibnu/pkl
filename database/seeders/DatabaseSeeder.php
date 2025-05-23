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

        $this->call([
            ConfigAppSeeder::class,
            RoleSeeder::class,
            MenuSeeder::class,
            TahunAkademikSeeder::class,
            TingkatSeeder::class,
        ]);

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'admin@demo.com',
            'username' => 'admin',
            'primary_role_id' => 1
        ]);

        // $this->call([
        //     ConfigAppSeeder::class,
        //     RoleSeeder::class,
        //     MenuSeeder::class,
        //     TahunAkademikSeeder::class,
        //     TingkatSeeder::class,
        // ]);
    }
}

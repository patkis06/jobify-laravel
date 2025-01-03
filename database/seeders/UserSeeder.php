<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Patrik Kiss',
            'email' => 'patrik.kiss@bluedrm.com',
        ]);

        User::factory()->create([
            'name' => 'John Doe',
            'email' => 'example@example.com',
        ]);
    }
}

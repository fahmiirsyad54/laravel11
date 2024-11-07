<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Grade;
use App\Models\Student;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        // Grade::factory(4)->create();
        Student::factory(10)->create();

        Grade::factory()->create([
            'name' => '10 PPLG 2',
        ]);
        Grade::factory()->create([
            'name' => '10 PPLG 1',
        ]);
        Grade::factory()->create([
            'name' => '11 PPLG 1',
        ]);
        Grade::factory()->create([
            'name' => '11 PPLG 2',
        ]);
    }
}

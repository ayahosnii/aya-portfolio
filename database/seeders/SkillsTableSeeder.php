<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $skills = [
            ['name' => 'HTML'],
            ['name' => 'CSS'],
            ['name' => 'PHP'],
            ['name' => 'OOP'],
            ['name' => 'JavaScript'],
            ['name' => 'jQuery'],
            ['name' => 'Git'],
            ['name' => 'MySQL'],
            ['name' => 'Laravel'],
            ['name' => 'MVC frameworks'],
            ['name' => 'API development'],
            ['name' => 'Test-driven development (TDD)'],
            ['name' => 'Server administration'],
            ['name' => 'VUEjs'],
        ];

        DB::table('skills')->insert($skills);
    }
}

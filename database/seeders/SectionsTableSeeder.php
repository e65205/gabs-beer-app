<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $sections = [
            ['name' => 'Section 1', 'description' => 'Description for Section 1'],
            ['name' => 'Section 2', 'description' => 'Description for Section 2'],
            ['name' => 'Section 3', 'description' => 'Description for Section 3'],
            ['name' => 'Section 4', 'description' => 'Description for Section 4'],
            ['name' => 'Section 5', 'description' => 'Description for Section 5'],
            ['name' => 'Section 6', 'description' => 'Description for Section 6'],
        ];

        DB::table('sections')->insert($sections);
    }
}

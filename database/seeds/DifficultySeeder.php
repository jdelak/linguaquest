<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DifficultySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $difficulties = [
            ['id' => 1, 'name' => 'easy'],
            ['id' => 2, 'name' => 'medium'],
            ['id' => 3, 'name' => 'hard'],
            ['id' => 4, 'name' => 'very hard'],
            ['id' => 5, 'name' => 'extreme'],
        ];

        DB::table('users')->insert($difficulties);
    }
}

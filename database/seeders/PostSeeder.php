<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            ['title' => 'This is 1th post', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'This is 2nd post', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'This is 3rd post', 'created_at' => now(), 'updated_at' => now()],
            ['title' => 'This is 4th post', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}

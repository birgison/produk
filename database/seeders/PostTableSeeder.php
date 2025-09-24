<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use illuminate\support\facades\DB;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        db::table('posts')->insert ([
            [
                'title'=>'tips cepat pintar',
                'content'=>'lorem ipsum',
            ],
            [
                'title'=>'membangun visi misi sukses',
                'content'=>'lorem ipsum',
            ]
            ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\support\facades\DB;

class SiswasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('siswas')->insert([
            [
                'nama_lengkap' => 'aliva dian nugraha',
                'jenis_kelamin' => 'laki-laki',
                'tanggal_lahir' => '1945-8-17',
                'kelas' => 'XI RPL 1',
            ],
            [
             'nama_lengkap'=> 'dikri saepudin',
             'jenis_kelamin'=>'laki-laki',
             'tanggal_lahir'=>'2025-8-17',
             'kelas'=>'XI RPL 1',
         ],
        
     ]);
    }
}

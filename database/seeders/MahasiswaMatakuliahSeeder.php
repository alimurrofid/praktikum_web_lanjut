<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaMatakuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $mahasiswa_matakuliah = [
        //     [
        //         'mahasiswa_id' => 1,
        //         'mata_kuliah_id' => 1,
        //         'nilai' => 89
        //     ]
        // ];

        // DB::table('mahasiswa_matakuliah')->insert($mahasiswa_matakuliah);

        $scoreCount = 100;
        $scoreOptions = ['A', 'B', 'C', 'D', 'E'];
        for ($i = 0; $i < $scoreCount; $i++) {
            DB::table('mahasiswa_matakuliah')->insert([
                'mahasiswa_id' => rand(1, 20),
                'mata_kuliah_id' => rand(1, 4),
                'nilai' => array_rand($scoreOptions),
            ]);
        }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KondisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            $jenis = [
                'id' => 1,
                'nama_kondisi' => 'baik'
            ];
            $jenis2 = [
                'id' => 2,
                'nama_kondisi' => 'layak'
            ];
            $jenis3 = [
                'id' => 3,
                'nama_kondisi' => 'rusak'
            ];
            DB::table('kondisi')->insert($jenis);
            DB::table('kondisi')->insert($jenis2);
            DB::table('kondisi')->insert($jenis3);
    }
}
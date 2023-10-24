<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JenisSeeder extends Seeder
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
                'nama_jenis' => 'sekali pakai'
            ];
            $jenis2 = [
                'id' => 2,
                'nama_jenis' => 'banyak pakai'
            ];
            DB::table('jenis')->insert($jenis);
            DB::table('jenis')->insert($jenis2);
    }
}
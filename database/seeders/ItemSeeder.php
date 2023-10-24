<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <= 10 ; $i++) {
            $item = [
                'name' => 'barang'.$i,
                'jenis' => DB::table('jenis')->get()->random()->nama_jenis,
                'kondisi' => DB::table('kondisi')->get()->random()->nama_kondisi,
                'keterangan' => 'exp 10 Dec',
                'jumlah' => $i,
                'kecacatan' => 'tidak ada',
                'gambar' => 'https://i.pravatar.cc/160?img=',
            ];
            DB::table('items')->insert($item);
        }
    }
}
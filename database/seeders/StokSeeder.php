<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $stok = [];

        for ($i = 1; $i <= 15; $i++) {
            $stok[] = [
                'supplier_id' => (($i - 1) % 3) + 1,
                'barang_id' => $i,
                'user_id' => 1,
                'stok_tanggal' => Carbon::now(),
                'stok_jumlah' => rand(10, 50),
            ];
        }

        DB::table('t_stok')->insert($stok);
    }
}

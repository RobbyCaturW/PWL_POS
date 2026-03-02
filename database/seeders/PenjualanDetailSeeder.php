<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $detail = [];

        for ($penjualan = 1; $penjualan <= 10; $penjualan++) {
            for ($i = 1; $i <= 3; $i++) {
                $barangId = rand(1, 15);

                $detail[] = [
                    'penjualan_id' => $penjualan,
                    'barang_id' => $barangId,
                    'harga' => DB::table('m_barang')->where('barang_id', $barangId)->value('harga_jual'),
                    'jumlah' => rand(1, 5),
                ];
            }
        }

        DB::table('t_penjualan_detail')->insert($detail);
    }
}

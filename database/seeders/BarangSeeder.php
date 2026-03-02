<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $barang = [];
        $kode = 1;

        for ($supplier = 1; $supplier <= 3; $supplier++) {
            for ($i = 1; $i <= 5; $i++) {
                $barang[] = [
                    'kategori_id' => ($i % 5) + 1,
                    'barang_kode' => 'BRG' . str_pad($kode, 3, '0', STR_PAD_LEFT),
                    'barang_nama' => 'Barang ' . $kode,
                    'harga_beli' => 10000 + ($kode * 500),
                    'harga_jual' => 15000 + ($kode * 500),
                ];
                $kode++;
            }
        }

        DB::table('m_barang')->insert($barang);
    }
}

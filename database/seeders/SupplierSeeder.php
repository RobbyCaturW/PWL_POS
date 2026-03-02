<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['supplier_kode' => 'SUP01', 'supplier_nama' => 'PT Sumber Makmur', 'supplier_alamat' => 'Malang'],
            ['supplier_kode' => 'SUP02', 'supplier_nama' => 'CV Jaya Abadi', 'supplier_alamat' => 'Surabaya'],
            ['supplier_kode' => 'SUP03', 'supplier_nama' => 'UD Sejahtera', 'supplier_alamat' => 'Kediri'],
        ];

        DB::table('m_supplier')->insert($data);
    }
}

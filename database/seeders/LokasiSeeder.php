<?php

namespace Database\Seeders;

use App\Models\Lokasi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LokasiSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $lokasis = [
            ['nama_lokasi' => 'Kantor Pusat', 'deskripsi' => 'Lokasi kantor pusat perusahaan'],
            ['nama_lokasi' => 'Gudang Utama', 'deskripsi' => 'Gudang penyimpanan barang utama'],
            ['nama_lokasi' => 'Cabang Jakarta', 'deskripsi' => 'Cabang di Jakarta'],
            ['nama_lokasi' => 'Cabang Surabaya', 'deskripsi' => 'Cabang di Surabaya'],
            ['nama_lokasi' => 'Cabang Bandung', 'deskripsi' => 'Cabang di Bandung'],
        ];

        foreach ($lokasis as $lokasi) {
            Lokasi::create($lokasi);
        }
    }
}

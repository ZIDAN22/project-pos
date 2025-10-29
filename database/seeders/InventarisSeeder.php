<?php

namespace Database\Seeders;

use App\Models\inventaris;
use App\Models\Lokasi;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InventarisSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $lokasis = Lokasi::all();
        $user = User::first(); // Assuming there's at least one user

        if ($lokasis->isEmpty() || !$user) {
            return; // Skip if no lokasi or user exists
        }

        $inventarisData = [
            [
                'kode_asset' => 'AST-001',
                'nama_barang' => 'apalah',
                'tipe_barang' => 'scanner',
                'merk' => 'Dell',
                'model' => 'OptiPlex 3080',
                'serial_number' => 'SN123456789',
                'spesifikasi' => 'Intel Core i5, 8GB RAM, 512GB SSD',
                'lokasi_id' => $lokasis->random()->id,
                'user_id' => $user->id,
                'status' => 'Aktif',
                'tanggal_perolehan' => '2023-01-15',
            ],
        ];

        foreach ($inventarisData as $data) {
            inventaris::create($data);
        }
    }
}

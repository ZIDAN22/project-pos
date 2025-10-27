<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('inventaris', function (Blueprint $table) {
            $table->id();
            $table->foreignId('lokasi_id')->constrained('lokasis')->onDelete('cascade');
            $table->foreignId('user_id')->nullable()->constrained('users')->nullOnDelete();
            $table->string('kode_asset')->unique();
            $table->string('nama_barang');
            $table->enum('tipe_barang', ['komputer', 'laptop', 'printer', 'scanner', 'router', 'layar', 'lainnya']);
            $table->string('merk')->nullable();
            $table->string('model')->nullable();
            $table->string('serial_number')->nullable();
            $table->text('spesifikasi')->nullable();
            $table->enum('status', ['Aktif', 'Rusak', 'Perbaikan', 'Dipinjam', 'Dihapus'])->default('Aktif');
            $table->date('tanggal_perolehan')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventaris');
    }
};

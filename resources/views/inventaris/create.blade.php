@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold text-gray-900">Tambah Data Inventaris</h1>
    </div>
    <div class="p-6 space-y-6">
        <form action="{{ route('inventaris.store') }}" method="POST" class="bg-white p-6 rounded-lg shadow-md">
            @csrf
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="kode_asset" class="text-sm font-medium text-gray-900 block mb-2">Kode Asset</label>
                    <input type="text" name="kode_asset" id="kode_asset" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5" placeholder="Masukkan Kode Asset" required>
                    @error('kode_asset')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="nama_barang" class="text-sm font-medium text-gray-900 block mb-2">Nama Barang</label>
                    <input type="text" name="nama_barang" id="nama_barang" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5" placeholder="Masukkan Nama Barang" required>
                    @error('nama_barang')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="tipe_barang" class="text-sm font-medium text-gray-900 block mb-2">Tipe Barang</label>
                    <select name="tipe_barang" id="tipe_barang" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5" required>
                        <option value="">Pilih Tipe Barang</option>
                        <option value="komputer">Komputer</option>
                        <option value="laptop">Laptop</option>
                        <option value="printer">Printer</option>
                        <option value="scanner">Scanner</option>
                        <option value="router">Router</option>
                        <option value="layar">Layar</option>
                        <option value="lainnya">Lainnya</option>
                    </select>
                    @error('tipe_barang')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="lokasi_id" class="text-sm font-medium text-gray-900 block mb-2">Lokasi</label>
                    <select name="lokasi_id" id="lokasi_id" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5" required>
                        <option value="">Pilih Lokasi</option>
                        @foreach($lokasis as $lokasi)
                            <option value="{{ $lokasi->id }}">{{ $lokasi->nama_lokasi }}</option>
                        @endforeach
                    </select>
                    @error('lokasi_id')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="status" class="text-sm font-medium text-gray-900 block mb-2">Status</label>
                    <select name="status" id="status" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5" required>
                        <option value="">Pilih Status</option>
                        <option value="Aktif">Aktif</option>
                        <option value="Rusak">Rusak</option>
                        <option value="Perbaikan">Perbaikan</option>
                        <option value="Dipinjam">Dipinjam</option>
                        <option value="Dihapus">Dihapus</option>
                    </select>
                    @error('status')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="merk" class="text-sm font-medium text-gray-900 block mb-2">Merk</label>
                    <input type="text" name="merk" id="merk" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5" placeholder="Masukkan Merk">
                    @error('merk')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="model" class="text-sm font-medium text-gray-900 block mb-2">Model</label>
                    <input type="text" name="model" id="model" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5" placeholder="Masukkan Model">
                    @error('model')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="serial_number" class="text-sm font-medium text-gray-900 block mb-2">Serial Number</label>
                    <input type="text" name="serial_number" id="serial_number" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5" placeholder="Masukkan Serial Number">
                    @error('serial_number')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="tanggal_perolehan" class="text-sm font-medium text-gray-900 block mb-2">Tanggal Perolehan</label>
                    <input type="date" name="tanggal_perolehan" id="tanggal_perolehan" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5">
                    @error('tanggal_perolehan')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="md:col-span-2">
                    <label for="spesifikasi" class="text-sm font-medium text-gray-900 block mb-2">Spesifikasi</label>
                    <textarea name="spesifikasi" id="spesifikasi" rows="4" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5" placeholder="Masukkan Spesifikasi"></textarea>
                    @error('spesifikasi')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="mt-6 flex justify-end">
                <button type="submit" class="bg-cyan-600 hover:bg-cyan-700 text-white font-medium rounded-lg text-sm px-5 py-2.5 text-center">Simpan</button>
                <a href="{{ route('inventaris.index') }}" class="ml-3 bg-gray-300 hover:bg-gray-400 text-gray-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Batal</a>
            </div>
        </form>
    </div>

@endsection

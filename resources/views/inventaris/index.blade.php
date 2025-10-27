@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold text-gray-900">Inventaris</h1>
        <a href="{{route('inventaris.create')}}"
            class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Tambah Inventaris
        </a>
    </div>

    <!-- Search and Filter -->
    <form method="GET" action="{{ route('inventaris.index') }}" class="bg-white rounded-lg shadow-md p-6 mb-6">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
            <div>
                <label for="search" class="block text-sm font-medium text-gray-700 mb-1">Cari</label>
                <input type="text" id="search" name="search" value="{{ request('search') }}"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                    placeholder="Cari nama barang...">
            </div>
            <div>
                <label for="tipe_barang" class="block text-sm font-medium text-gray-700 mb-1">Tipe Barang</label>
                <select id="tipe_barang" name="tipe_barang"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option value="">Semua Tipe</option>
                    <option value="komputer" {{ request('tipe_barang')=='komputer' ? 'selected' : '' }}>Komputer
                    </option>
                    <option value="layar" {{ request('tipe_barang')=='layar' ? 'selected' : '' }}>layar</option>
                    <option value="laptop" {{ request('tipe_barang')=='laptop' ? 'selected' : '' }}>Laptop</option>
                    <option value="printer" {{ request('tipe_barang')=='printer' ? 'selected' : '' }}>Printer</option>
                    <option value="scanner" {{ request('tipe_barang')=='scanner' ? 'selected' : '' }}>Scanner</option>
                    <option value="router" {{ request('tipe_barang')=='router' ? 'selected' : '' }}>Router</option>
                    <option value="lainnya" {{ request('tipe_barang')=='lainnya' ? 'selected' : '' }}>Lainnya</option>
                </select>
            </div>
            <div>
                <label for="lokasi" class="block text-sm font-medium text-gray-700 mb-1">Lokasi</label>
                <select id="lokasi" name="lokasi"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option value="">Semua Lokasi</option>
                    @foreach($lokasis as $lokasi)
                    <option value="{{ $lokasi->id }}" {{ request('lokasi')==$lokasi->id ? 'selected' : '' }}>{{
                        $lokasi->nama_lokasi }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="status" class="block text-sm font-medium text-gray-700 mb-1">Status</label>
                <select id="status" name="status"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option value="">Semua Status</option>
                    <option value="Aktif" {{ request('status')=='Aktif' ? 'selected' : '' }}>Aktif</option>
                    <option value="Rusak" {{ request('status')=='Rusak' ? 'selected' : '' }}>Rusak</option>
                    <option value="Perbaikan" {{ request('status')=='Perbaikan' ? 'selected' : '' }}>Perbaikan</option>
                    <option value="Dipinjam" {{ request('status')=='Dipinjam' ? 'selected' : '' }}>Dipinjam</option>
                    <option value="Dihapus" {{ request('status')=='Dihapus' ? 'selected' : '' }}>Dihapus</option>
                </select>
            </div>
        </div>
        <div class="mt-4 flex justify-end">
            <a href="{{ route('inventaris.index') }}"
                class="bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded mr-2">
                Reset
            </a>
            <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Cari
            </button>
        </div>
    </form>

    <!-- Table -->
    <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Kode
                            Asset</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama
                            Barang</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tipe
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Lokasi</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Status</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Tanggal Perolehan</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse($inventaris as $item)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $item->kode_asset
                            }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $item->nama_barang }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $item->tipe_barang }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $item->lokasi->nama_lokasi ??
                            'N/A' }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $item->status }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $item->tanggal_perolehan ?
                            $item->tanggal_perolehan->format('d/m/Y') : 'N/A' }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <a href="#" class="text-indigo-600 hover:text-indigo-900 mr-2">Edit</a>

                            <form action="{{ route('inventaris.destroy', $item->id) }}" method="POST"
                                class="inline-block" onsubmit="return confirm('Apakah anda yakin?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="text-red-600 hover:text-red-900">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="px-6 py-4 text-center text-gray-500">
                            Tidak ada data inventaris
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <!-- Pagination -->
    <div class="mt-6">
        <!-- Pagination links will be added here -->
    </div>
</div>
@endsection
<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\inventaris;
use App\Models\Lokasi;
use App\Http\Controllers\Controller;

class inventarisController extends Controller
{
    public function index(Request $request)
    {
        $inventaris = inventaris::with('lokasi')
            ->when($request->filled('search'), fn($q) => $q->where('nama_barang', 'like', '%'.$request->search.'%'))
            ->when($request->filled('tipe_barang'), fn($q) => $q->where('tipe_barang', $request->tipe_barang))
            ->when($request->filled('lokasi'), fn($q) => $q->where('lokasi_id', $request->lokasi))
            ->when($request->filled('status'), fn($q) => $q->where('status', $request->status))
            ->get();

        return view('inventaris.index', [
            'inventaris' => $inventaris,
            'lokasis'    => Lokasi::all(),
        ]);
    }

    public function create()
    {
        $lokasis = Lokasi::all();
        return view('inventaris.create', compact('lokasis'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'kode_asset' => 'required|string|max:255|unique:inventaris,kode_asset',
            'nama_barang' => 'required|string|max:255',
            'tipe_barang' => 'required|string|in:komputer,laptop,printer,scanner,router,layar,lainnya',
            'lokasi_id' => 'required|exists:lokasis,id',
            'status' => 'required|string|in:Aktif,Rusak,Perbaikan,Dipinjam,Dihapus',
            // Add more validations for optional fields if provided in the form
            'merk' => 'nullable|string|max:255',
            'model' => 'nullable|string|max:255',
            'serial_number' => 'nullable|string|max:255',
            'spesifikasi' => 'nullable|string',
            'tanggal_perolehan' => 'nullable|date',
        ]);

        try {
            inventaris::create($validated);
            return redirect()->route('inventaris.index')->with('success', 'Data Barang Berhasil Ditambahkan!');
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->with('error', 'Terjadi kesalahan saat menyimpan data: ' . $e->getMessage());
        }
    }

    public function show(string $id) {

    }
    public function edit(string $id) {

    }
    public function update(Request $request, string $id) {

    }
    public function destroy(string $id)
    {
        try {
            $inventaris = inventaris::findOrFail($id);

            // Optional: Check for related records to prevent accidental deletion
            // Uncomment the following lines if you want to prevent deletion when related records exist
            // if ($inventaris->mutasiAssets()->exists() || $inventaris->disposalAssets()->exists()) {
            //     return redirect()->route('inventaris.index')->with('error', 'Tidak dapat menghapus inventaris yang memiliki catatan terkait.');
            // }

            $inventaris->delete();

            return redirect()->route('inventaris.index')->with('success', 'Data Barang Berhasil Dihapus!');
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return redirect()->route('inventaris.index')->with('error', 'Data Barang tidak ditemukan.');
        } catch (\Exception $e) {
            return redirect()->route('inventaris.index')->with('error', 'Terjadi kesalahan saat menghapus data: ' . $e->getMessage());
        }
    }
}

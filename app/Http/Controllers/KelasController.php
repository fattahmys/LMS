<?php

namespace App\Http\Controllers;
use Alert;
use Illuminate\Http\Request;
use App\Models\Kelas;

class KelasController extends Controller
{
    public function store(Request $request)
    {
        // dd($request->all());
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:100',
            'deskripsi' => 'nullable|string',
            'matapelajaran' => 'required|string',
        ]);

        // Simpan data ke database
        Kelas::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'matapelajaran' => $request->matapelajaran,
        ]);
        // Alert::success('Hore!', 'Post Created Successfully');
        return redirect()->back()->with('success', 'Kelas berhasil dibuat :)');
    
    }
    public function index()
    {
        // Ambil semua data dari tabel kelas
        $kelas = Kelas::all();
        $title = 'Peserta';
        // Kirim data ke view
        return view('kelas.kelas', compact('kelas', 'title'));
    }

    public function show($id)
    {
        
    // Cari data kelas berdasarkan ID
    $kelas = Kelas::find($id);

    // Jika kelas tidak ditemukan, Anda bisa mengarahkan ke halaman 404 atau menampilkan pesan
    if (!$kelas) {
        abort(404, 'Kelas tidak ditemukan');
    }
     // Kirim data kelas ke view
     return view('kelas.show', ['kelas' => $kelas]);
    }
}

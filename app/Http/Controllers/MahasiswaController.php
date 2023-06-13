<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;


class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {


        //menampilkan data dengan pagination dan pencarian
        // $search = $request->input('search');
        // $mahasiswas = Mahasiswa::where('nama', 'like', "%$search%")
        //                        ->paginate(5);

        // return view('mahasiswas.index', compact('mahasiswas'));
        // ====================================================================================================
        if ($request->has('search')) {
            $mahasiswas = Mahasiswa::where('nama', 'like', "%{$request->search}%")
                                    ->paginate(5);
        }

        $mahasiswas = Mahasiswa::with('kelas')->get();
        $paginate = Mahasiswa::orderBy('nim', 'asc')->paginate(5);

        return view('mahasiswas.index',  ['mahasiswas' => $mahasiswas, 'paginate' => $paginate]);
    }
        // ====================================================================================================
        // menampilkan data dengan searching dan paginator
    //     if ($request->get('search')) {
    //         $mahasiswas = Mahasiswa::where('nama', 'like', "%{$request->search}%")
    //             ->paginate(5);
    //     } else {
    //         $mahasiswas = Mahasiswa::paginate(5);
    //     }

    //     $mahasiswas = Mahasiswa::with('kelas')->get();
    //     $paginate = Mahasiswa::orderBy('nim', 'asc')->paginate(5);

    //     return view('mahasiswas.index', ['mahasiswas' => $mahasiswas, 'paginate' => $paginate]);
    // }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kelas = Kelas::all(); //mendapatkan data dari tabel kelas
        return view('mahasiswas.create', ['kelas' => $kelas]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //melakukan validasi data
        $request->validate([
            'nim' => 'required',
            'nama' => 'required',
            'email' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required',
            'no_handphone' => 'required',
            'tanggal_lahir' => 'required',
        ]);

        //fungsi eloquent untuk menambah data
        // Mahasiswa::create($request->all());

        $mahasiswa = new Mahasiswa;
        $mahasiswa->nim = $request->get('nim');
        $mahasiswa->nama = $request->get('nama');
        $mahasiswa->email = $request->get('email');
        $mahasiswa->jurusan = $request->get('jurusan');
        $mahasiswa->no_handphone = $request->get('no_handphone');
        $mahasiswa->tanggal_lahir = $request->get('tanggal_lahir');
        // $mahasiswa->save();

        $kelas = new Kelas;
        $kelas->id = $request->get('kelas');

        //fungsi eloquent untuk menambah data dengan relasi belongsTo
        $mahasiswa->kelas()->associate($kelas);
        $mahasiswa->save();


        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('mahasiswa.index')
            ->with('success', 'Mahasiswa Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show($nim)
    {
        //menampilkan detail data dengan menemukan/berdasarkan nim Mahasiswa
        //code sebelum dibuat relasi --> $mahasiswa = Mahasiswa::find($nim);
        $mahasiswa = Mahasiswa::with('kelas')->where('nim', $nim)->first();

        return view('mahasiswas.detail', ['mahasiswa' => $mahasiswa]);
    }

    public function showKrs(string $nim)
    {
        // menampilkan detail mahasiswa berdasarkan nim
        $mahasiswa = Mahasiswa::with('matakuliah')
            ->where('nim', $nim)
            ->first();

        return view('mahasiswas.krs', compact('mahasiswa'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $nim)
    {
        //menampilkan detail data dengan menemukan berdasarkan nim Mahasiswa untuk diedit
        $mahasiswa = Mahasiswa::with('kelas')->where('nim', $nim)->first();
        $kelas = Kelas::all(); //mendapatkan data dari tabel kelas
        return view('mahasiswas.edit', compact('mahasiswa', 'kelas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $nim)
    {
        //melakukan validasi data
        $request->validate([
            'nim' => 'required',
            'nama' => 'required',
            'email' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required',
            'no_handphone' => 'required',
            'tanggal_lahir' => 'required',
        ]);
        $mahasiswa = Mahasiswa::with('kelas')->where('nim', $nim)->first();
        $mahasiswa->nim = $request->get('nim');
        $mahasiswa->nama = $request->get('nama');
        $mahasiswa->email = $request->get('email');
        $mahasiswa->jurusan = $request->get('jurusan');
        $mahasiswa->no_handphone = $request->get('no_handphone');
        $mahasiswa->tanggal_lahir = $request->get('tanggal_lahir');
        // $mahasiswa->save();

        $kelas = new Kelas;
        $kelas->id = $request->get('kelas');

        //fungsi eloquent untuk menambah data dengan relasi belongsTo
        $mahasiswa->kelas()->associate($kelas);
        $mahasiswa->save();


        //fungsi eloquent untuk mengupdate data inputan kita
        // Mahasiswa::find($nim)->update($request->all());

        //jika data berhasil diupdate, akan kembali ke halaman utama
        return redirect()->route('mahasiswa.index')
            ->with('success', 'Mahasiswa Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $nim)
    {
        //fungsi eloquent untuk menghapus data
        Mahasiswa::find($nim)->delete();
        return redirect()->route('mahasiswa.index')
            ->with('success', 'Mahasiswa Berhasil Dihapus');
    }
}

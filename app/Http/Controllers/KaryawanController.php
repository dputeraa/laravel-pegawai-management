<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $karyawans = Karyawan::get();
        $view_data = [
            'karyawans' => $karyawans
        ];
        return view('karyawan.index', $view_data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('karyawan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
        ]);

        $nama = $request->input('nama');
        $alamat = $request->input('alamat');

        // jika menggunakan created tidak perlu memasukan created dan updated at dan harus menambahkan variable baru pada method post $fillable
        Karyawan::create([
            'nama' => $nama,
            'alamat' => $alamat,
        ]);

        return redirect('karyawan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $karyawan = Karyawan::where('id', $id) // ->where('id', '=', $id) tanpa menuliskan "=" laravel menganggapnya menggunakan operator sama dengan "="
            ->first();
        $view_data = [
            'karyawan' => $karyawan
        ];
        return view('karyawan.edit', $view_data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
        ]);

        $nama = $request->input('nama');
        $alamat = $request->input('alamat');

        Karyawan::where('id', $id)
            ->update([
                'nama' => $nama,
                'alamat' => $alamat,

            ]); // sama seperti update ... where id = $id

        return redirect("karyawan");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Karyawan::where('id', $id)->delete();

        return redirect("karyawan");
    }
}

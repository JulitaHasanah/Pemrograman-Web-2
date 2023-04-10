<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class KaryawanController extends Controller
{
    //
    public function index()
    {
        $data['karyawans'] = DB::select('SELECT * FROM karyawans');
        return view('/karyawan.karyawan', $data);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('/karyawan.tambahKaryawan');
    }

public function store(Request $request)
    {
        $idInput = $request->input('idInput');
        $namaInput = $request->input('namaInput');
        $paswordInput = $request->input('paswordInput');

        // dd($request->input(''));

        $query = DB::table('karyawans')->insert([
            'id' => $idInput,
            'nama' => $namaInput,
            'pasword' => $paswordInput,
        ]);

        if ($query) {
            return redirect()->route('karyawan')->with('success', 'Data Berhasil Ditambahkan');
        } else {
            return redirect()->route('karyawan')->with('failed', 'Data Gagal Ditambahkan');
        }
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
        $data['karyawans'] = DB::table('karyawans')->where('id', $id)->first();

        return view('/karyawan.editKaryawan', $data);
    }

 public function update(Request $request, string $id)
    {
        $idInput = $request->input('idInput');
        $namaInput = $request->input('namaInput');
        $paswordInput = $request->input('paswordInput');
    
        $query = DB::table('karyawans')->where('id', $id)->update([
            
            'id' => $idInput,
            'nama' => $namaInput,
            'pasword' => $paswordInput,
        ]);

        if ($query) {
            return redirect()->route('karyawan')->with('success', 'Data Berhasil Diupdate');
        } else {
            return redirect()->route('karyawan')->with('failed', 'Data Gagal Diupdate');
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $query = DB::table('karyawans')->where('id', $id)->delete();

        if ($query) {
            return redirect()->route('karyawan')->with('success', 'Data Berhasil Dihapus');
        } else {
            return redirect()->route('karyawan')->with('failed', 'Data Gagal Dihapus');
        }
    }

}


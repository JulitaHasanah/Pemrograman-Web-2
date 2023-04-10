<?php

namespace App\Http\Controllers;

use App\Models\menu;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = menu::all();
        return view('/menu.menu', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function tambahmenu()
    {
        return view('/menu.tambahMenu');
    }

    public function insertdata(Request $request)
    {
        
      $data = menu::create($request->all());
      if($request->hasFile('gambar')){
          $request->file('gambar')->move('gambarmenu/', $request->file('gambar')->getClientOriginalName());
          $data->gambar = $request->file('gambar')->getClientOriginalName();
          $data->save();
      }
       return redirect()->route('menu')->with('success', 'Data Berhasil Ditambahkan');
    
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function tampilkandata($id){
        $data = menu::find($id);
        return view('/menu.editMenu', compact('data'));

    }

    public function updatedata(Request $request, $id){
        $data = menu::find($id);
        $data->update($request->all());
        return redirect()->route('menu')->with('success', 'Data Berhasil Di Update');
    }

    /**
      * Remove the specified resource from storage.
      */
    public function delete($id){
        $data = menu::find($id);
        $data->delete();
        return redirect()->route('menu')->with('success', 'Data Berhasil Di Hapus');
    }

    
}

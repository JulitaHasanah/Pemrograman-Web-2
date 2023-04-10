<?php

namespace App\Http\Controllers;

use App\Models\menu;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class UtamaController extends Controller
{
    public function index()
    {
        $data = menu::all();
        return view('/menu.menu', compact('data'));
    }

}
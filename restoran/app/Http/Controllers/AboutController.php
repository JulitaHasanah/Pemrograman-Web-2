<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $data['nama'] = 'Budi';
        $data['email'] = 'budi123@gmail.com';

        return view('about', $data);
    }
}

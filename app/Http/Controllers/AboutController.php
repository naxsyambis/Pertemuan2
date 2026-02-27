<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $data = [
            'nama' => 'Friska Venunza Bayu',
            'nim' => '20230140163',
            'prodi' => 'Teknologi Informasi',
            'hobi' => 'Mendengarkan Musik'
        ];

        return view('about', $data);
    }
}

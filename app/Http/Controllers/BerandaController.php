<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function beranda()
    {
        return view('beranda');
    }

    public function logout()
    {
        // Implementasi logika logout jika diperlukan

        return redirect('/login');
    }
}

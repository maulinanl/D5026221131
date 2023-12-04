<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class tumbuhanController extends Controller
{

    public function index(Request $request)
    {
        // mengambil data dari table pegawai
        $tumbuhan = DB::table('tumbuhan')->get();
        
        // mengirim data pegawai ke view index
        return view('indexTumbuhan',['tumbuhan' => $tumbuhan]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaryawanController extends Controller
{

    public function index()
    {
        $karyawan = DB::table('karyawan')->paginate(10);
        return view('indexKaryawan',['karyawan' => $karyawan]);
    }

	public function tambah()
	{
		return view('tambahNilai');
	}

	public function store(Request $request)
	{
		DB::table('nilaikuliah')->insert([
			'NRP' => $request->NRP,
			'NilaiAngka' => $request->NilaiAngka,
			'SKS' => $request->SKS
		]);
		return redirect('/nilaikuliah');
	}
}

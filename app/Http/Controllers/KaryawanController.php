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
		return view('tambahKaryawan');
	}

	public function store(Request $request)
	{
		DB::table('karyawan')->insert([
            'kodepegawai' => $request->kodepegawai,
			'namalengkap' => $request->namalengkap,
			'divisi' => strtoupper($request->divisi),
			'departemen' => strtolower($request->departemen),
		]);
		return redirect('/karyawan');
	}

    public function hapus($id)
    {
        DB::table('karyawan')->where('kodepegawai',$id)->delete();
        return redirect('/karyawan');
    }


}

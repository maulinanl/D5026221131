<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class tumbuhanController extends Controller
{

    public function index()
    {
        // mengambil data dari table pegawai
        $tumbuhan = DB::table('tumbuhan')->paginate(10);

        // mengirim data pegawai ke view index
        return view('indexTumbuhan',['tumbuhan' => $tumbuhan]);
    }

          // method untuk menampilkan view form tambah pegawai
	public function tambah()
	{

		// memanggil view tambah
		return view('tambahTumbuhan');

	}

    // method untuk insert data ke table pegawai
	public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('tumbuhan')->insert([
			'namatumbuhan' => $request->nama,
			'jumlahtumbuhan' => $request->jumlah,
			'tersedia' => $request->tersedia
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/tumbuhan');

	}

      // method untuk edit data pegawai
    public function edit($id)
      {
          // mengambil data pegawai berdasarkan id yang dipilih
          $tumbuhan = DB::table('tumbuhan')->where('kodetumbuhan',$id)->get();
          // passing data pegawai yang didapat ke view edit.blade.php
          return view('editTumbuhan',['tumbuhan' => $tumbuhan]);

      }

     // update data pegawai
    public function update(Request $request)
    {
    // update data pegawai
    DB::table('tumbuhan')->where('kodetumbuhan',$request->id)->update([
      'namatumbuhan' => $request->nama,
      'jumlahtumbuhan' => $request->jumlah,
      'tersedia' => $request->tersedia,
  ]);
  // alihkan halaman ke halaman pegawai
    return redirect('/tumbuhan');
    }
      // method untuk hapus data pegawai
      public function hapus($id)
      {
          // menghapus data pegawai berdasarkan id yang dipilih
          DB::table('tumbuhan')->where('kodetumbuhan',$id)->delete();

          // alihkan halaman ke halaman pegawai
          return redirect('/tumbuhan');
      }
      public function cari(Request $request)
      {
          // menangkap data pencarian
          $cari = $request->cari;

              // mengambil data dari table pegawai sesuai pencarian data
          $tumbuhan = DB::table('tumbuhan')
          ->where('namatumbuhan','like',"%".$cari."%")
          ->paginate();

              // mengirim data pegawai ke view index
          return view('indexTumbuhan',['tumbuhan' => $tumbuhan]);

      }
      public function view($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$tumbuhan = DB::table('tumbuhan')->where('kodetumbuhan',$id)->get();
		// passing data pegawai yang didapat ke view views.blade.php
		return view('viewTumbuhan',['tumbuhan' => $tumbuhan]);

	}

}

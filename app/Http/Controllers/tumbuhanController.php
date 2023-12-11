<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class tumbuhanController extends Controller
{

    public function index()
    {
        $tumbuhan = DB::table('tumbuhan')->paginate(10);
        return view('indexTumbuhan',['tumbuhan' => $tumbuhan]);
    }

	public function tambah()
	{
		return view('tambahTumbuhan');

	}

	public function store(Request $request)
	{
		DB::table('tumbuhan')->insert([
			'namatumbuhan' => $request->nama,
			'jumlahtumbuhan' => $request->jumlah,
			'tersedia' => $request->tersedia
		]);
		return redirect('/tumbuhan');
	}

    public function edit($id)
      {
          $tumbuhan = DB::table('tumbuhan')->where('kodetumbuhan',$id)->get();
          return view('editTumbuhan',['tumbuhan' => $tumbuhan]);
      }

    public function update(Request $request)
    {
    DB::table('tumbuhan')->where('kodetumbuhan',$request->id)->update([
      'namatumbuhan' => $request->nama,
      'jumlahtumbuhan' => $request->jumlah,
      'tersedia' => $request->tersedia,
  ]);
    return redirect('/tumbuhan');
    }

    public function hapus($id)
    {
        DB::table('tumbuhan')->where('kodetumbuhan',$id)->delete();
        return redirect('/tumbuhan');
    }

    public function cari(Request $request)
    {
        $cari = $request->cari;
        $tumbuhan = DB::table('tumbuhan') ->where('namatumbuhan','like',"%".$cari."%") ->paginate();
        return view('indexTumbuhan',['tumbuhan' => $tumbuhan]);
    }

    public function view($id)
	{
		$tumbuhan = DB::table('tumbuhan')->where('kodetumbuhan',$id)->get();
		return view('viewTumbuhan',['tumbuhan' => $tumbuhan]);
	}

}

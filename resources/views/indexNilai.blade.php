@extends('master3')
@section('title', 'Database Nilai Kuliah')

@section('judul_halaman')
    <h2>akademik.its.ac.id</h2>
    <h3>Nilai Kuliah</h3>
    <a class="button btn btn-success" href="/nilaikuliah/tambah"> + Tambah Nilai Kuliah</a>
    <br />
@endsection

@section('konten')
    <br />
    <form action="/nilaikuliah/cari" method="GET">
        <td>
            <input class="col-md-5" type="number" name="cari" placeholder="Cari Nilai Berdasarkan NRP"
                value="{{ old('cari') }}">
            <input type="submit" value="CARI" class="btn btn-primary">
        </td>
    </form>
    <table class="table tables-striped table-hover">
        <tr class="text-center">
            <!-- Kalo pake bootstrap, jg pke td tpi pke th  -->
            <th>ID</th>
            <th>NRP</th>
            <th>Nilai Angka</th>
            <th>SKS</th>
            <th>Nilai Huruf</th>
            <th>Bobot</th>
        </tr>
        @foreach ($nilaikuliah as $n)
            <tr class="text-center">
                <td>{{ $n->ID }}</td>
                <td>{{ $n->NRP }}</td>
                <td>{{ $n->NilaiAngka }}</td>
                <td>{{ $n->SKS }}</td>
                <td>
                    @if ($n->NilaiAngka <= 40)
                        D
                    @elseif ($n->NilaiAngka >= 41 && $n->NilaiAngka <= 60)
                        C
                    @elseif ($n->NilaiAngka >= 61 && $n->NilaiAngka <= 80)
                        B
                    @else
                        A
                    @endif
                </td>
                <td>{{ $n->SKS * $n->NilaiAngka }}</td>
            </tr>
        @endforeach
    </table>
    {{ $nilaikuliah->links() }}
@endsection

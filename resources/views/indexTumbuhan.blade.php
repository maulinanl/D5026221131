@extends('master2')
@section('title', 'Database Pegawai')

@section('judul_halaman')
    <h2>www.gardenshop.com</h2>
    <h3>Data Tumbuhan</h3>

    <a class="button btn btn-success" href="/tumbuhan/tambah"> + Tambah Tumbuhan Baru</a>

    <br />

@endsection

@section('konten')
    <br/>
    <form action="/tumbuhan/cari" method="GET">
        <td>
        <input class="col-md-5" type="text" name="cari" placeholder="Cari Tumbuhan Berdasarkan Nama"
            value="{{ old('cari') }}">
        <input type="submit" value="CARI" class="btn btn-primary">
        </td>
    </form>
    <table class="table tables-striped table-hover">
        <tr class="text-center">
            <!-- Kalo pake bootstrap, jg pke td tpi pke th  -->
            <th>Kode</th>
            <th>Nama Tumbuhan</th>
            <th>Jumlah</th>
            <th>Tersedia</th>
            <th>Opsi</th>
        </tr>
        @foreach ($tumbuhan as $t)
            <tr class="text-center">
                <td>{{ $t->kodetumbuhan }}</td>
                <td>{{ $t->namatumbuhan }}</td>
                <td>{{ $t->jumlahtumbuhan }}</td>
                <td>{{ $t->tersedia }}</td>
                <td class="col-md-3">
                    <a class="button btn btn-success" href="/tumbuhan/views/{{ $t->kodetumbuhan }} ">View</a>
                    |
                    <a class="button btn btn-warning" href="/tumbuhan/edit/{{ $t->kodetumbuhan }}">Edit</a>
                    |
                    <a class="button btn btn-danger" href="/tumbuhan/hapus/{{ $t->kodetumbuhan }}">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
    {{ $tumbuhan->links() }}
@endsection

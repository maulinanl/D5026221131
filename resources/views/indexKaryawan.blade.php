@extends('master4')
@section('title', 'Database Karyawan')

@section('judul_halaman')
    <h2>www.karyawan.com</h2>
    <h3>Data Karyawan</h3>
@endsection

@section('konten')
    <br />
    <form action="/karyawan/cari" method="GET">
        <td>
            <input class="col-md-5" type="text" name="cari" placeholder="Cari Karyawan Berdasarkan Nama"
                value="{{ old('cari') }}">
            <input type="submit" value="CARI" class="btn btn-primary">
        </td>
    </form>
    <table class="table tables-striped table-hover">
        <tr class="text-center">
            <!-- Kalo pake bootstrap, jg pke td tpi pke th  -->
            <th>Kode Pegawai</th>
            <th>Nama Lengkap</th>
            <th>Divisi</th>
            <th>Departemen</th>
        </tr>
        @foreach ($karyawan as $k)
            <tr class="text-center">
                <td>{{ $k->kodepegawai }}</td>
                <td>{{ $k->namalengkap }}</td>
                <td>{{ $k->divisi }}</td>
                <td>{{ $k->departemen }}</td>
                <td>
                <a class="button btn btn-danger" href="/karyawan/hapus/{{ $k->kodepegawai }}">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
    <a class="button btn btn-success" href="/karyawan/tambah"> + Tambah Karyawan Baru</a>
    {{ $karyawan->links() }}
@endsection

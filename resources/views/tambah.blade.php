@extends('master2')

@section('konten')
    <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
    <h3>Data Pegawai</h3>

    <a href="/pegawai"> Kembali</a>

    <br />
    <br />

    <form action="/pegawai/store" method="post" class="form-horizontal">
        {{ csrf_field() }}

        <div class = "input-group mb-3">
            <span for = "nama" class="input-group-text col-sm-1">Nama</span>
            <div class = "col-sm-8">
                <input type = "nama" type ="text" class="form-control" id = "nama"
                    placeholder = "Masukkan Nama Pegawai">
            </div>
        </div>

        <div class = "input-group mb-3">
            <span for="jabatan" class="input-group-text col-sm-1">Jabatan</span>
            <div class = "col-sm-8">
                <input type="text" class="form-control" id="jabatan" name="jabatan"
                    placeholder="Masukkan Jabatan Pegawai">
        </div>
        </div>

        <div class="input-group mb-3">
            <label for="umur" class="input-group-text col-sm-1">Umur</label>
            <div class = "col-sm-8">
                <input type="number" class="form-control" id="umur" name="umur"
                    placeholder="Masukkan Umur Pegawai">
        </div>
        </div>

        <div class="input-group mb-3">
            <label for="alamat" class="input-group-text col-sm-1">Alamat</label>
            <div class = "col-sm-8">
                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat Pegawai">
        </div>
        </div>
        <br />
        <button type="submit" class="btn btn-primary" value="Simpan Data">Simpan Data</button>
    </form>
@endsection

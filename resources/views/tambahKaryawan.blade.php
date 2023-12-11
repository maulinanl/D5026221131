@extends('master4')

@section('konten')
    <h2><a href="www.karyawan.com">www.karyawan.com</a></h2>
    <h3>Tambah Karyawan</h3>

    <a href="/karyawan"> Kembali</a>

    <br />
    <br />

    <form action="/karyawan/store" method="post" class="form-horizontal">
        {{ csrf_field() }}

        <div class = "form-group row">
            <label for = "kodepegawai" class="col-md-2 col-form-label">Kode Pegawai: </label>
            <div class = "col-sm-7">
                <input type ="char" class="form-control" id = "kodepegawai" name="kodepegawai"
                    placeholder = "Masukkan Kode Pegawai">
            </div>
        </div>

        <div class = "form-group row">
            <label for = "namalengkap" class="col-md-2 col-form-label">Nama Lengkap: </label>
            <div class = "col-sm-7">
                <input type ="text" class="form-control" id = "namalengkap" name="namalengkap"
                    placeholder = "Masukkan Nama Pegawai">
            </div>
        </div>

        <div class = "form-group row">
            <label for = "divisi" class="col-md-2 col-form-label">Divisi: </label>
            <div class = "col-sm-7">
                <input type ="text" class="form-control" id = "divisi" name="divisi"
                    placeholder = "Masukkan Divisi Pegawai">
            </div>
        </div>

        <div class="form-group row">
            <label for="departemen" class="col-md-2 col-form-label">Departemen: </label>
            <div class = "col-sm-7">
                <input type="text" class="form-control" id = "departemen" name="departemen" placeholder="Masukkan Departmemen Pegawai">
            </div>
        </div>

        <div class="form-group row">
            <div class="col-md-7 offset-md-2">
                <button type="submit" class="btn btn-success" value="Simpan Data">Simpan</button>
            </div>
        </div>
    </form>
@endsection

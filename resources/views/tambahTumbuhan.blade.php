@extends('master2')

@section('konten')
    <h2><a href="https://www.malasngoding.com">www.gardenshop.com</a></h2>
    <h3>Tambah Tumbuhan Baru</h3>

    <a href="/tumbuhan"> Kembali</a>

    <br />
    <br />

    <form action="/tumbuhan/store" method="post" class="form-horizontal">
        {{ csrf_field() }}

        <div class = "form-group row">
            <label for = "nama" class="col-md-2 col-form-label">Nama Tumbuhan:</label>
            <div class = "col-sm-7">
                <input type ="text" class="form-control" id = "nama" name="nama"
                    placeholder = "Masukkan Nama Tumbuhan">
            </div>
        </div>

        <div class = "form-group row">
            <label for = "jumlah" class="col-md-2 col-form-label">Jumlah Tumbuhan:</label>
            <div class = "col-sm-7">
                <input type ="number" class="form-control" id = "jumlah" name="jumlah"
                    placeholder = "Masukkan Jumlah Tumbuhan">
            </div>
        </div>

        <div class="form-group row">
            <label for="tersedia" class="col-md-2 col-form-label">Tersedia:</label>
            <div class = "col-sm-7">
                <select class="form-control" id="tersedia" name="tersedia">
                    <option value="Y">"Ya"</option>
                    <option value="N">"Tidak"</option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-md-7 offset-md-2">
                <button type="submit" class="btn btn-success" value="Simpan Data">Simpan Data</button>
            </div>
        </div>
    </form>
@endsection

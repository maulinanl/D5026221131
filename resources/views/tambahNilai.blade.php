@extends('master3')

@section('konten')
    <h2><a href="akademik.its.ac.id">akademik.its.ac.id</a></h2>
    <h3>Tambah Nilai Kuliah</h3>

    <a href="/nilaikuliah"> Kembali</a>

    <br />
    <br />

    <form action="/nilaikuliah/store" method="post" class="form-horizontal">
        {{ csrf_field() }}

        <div class = "form-group row">
            <label for = "NRP" class="col-md-2 col-form-label">NRP:</label>
            <div class = "col-sm-7">
                <input type ="number" class="form-control" id = "NRP" name="NRP"
                    placeholder = "Masukkan NRP Mahasiswa">
            </div>
        </div>

        <div class = "form-group row">
            <label for = "NilaiAngka" class="col-md-2 col-form-label">Nilai Angka:</label>
            <div class = "col-sm-7">
                <input type ="number" class="form-control" id = "NilaiAngka" name="NilaiAngka"
                    placeholder = "Masukkan Nilai Angka">
            </div>
        </div>

        <div class="form-group row">
            <label for="SKS" class="col-md-2 col-form-label">SKS:</label>
            <div class = "col-sm-7">
                <input type="number" class="form-control" id = "SKS" name="SKS" placeholder="Masukkan Jumlah SKS">
            </div>
        </div>

        <div class="form-group row">
            <div class="col-md-7 offset-md-2">
                <button type="submit" class="btn btn-success" value="Simpan Data">Simpan Data</button>
            </div>
        </div>
    </form>
@endsection

@extends('master2')

@section('konten')
    <h2><a href="https://www.malasngoding.com">www.gardenshop.com</a></h2>
    <h3>Edit Tumbuhan</h3>

    <a class="button btn btn-primary" href="/tumbuhan"> Kembali</a>

    <br/>
    <br/>

    @foreach ($tumbuhan as $t)
        <form action="/tumbuhan/update" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $t->kodetumbuhan}}"> <br />

            <div class="form-group row">
                <label for="id" class="col-md-2 col-form-label">Kode:</label>
                <div class="col-md-7">
                    <input name="id" class="form-control" id="id" placeholder="Masukkan Kode Tumbuhan" value="{{ $t->kodetumbuhan }}" type="text" readonly>
                </div>
            </div>

            <div class="form-group row">
                <label for="nama" class="col-md-2 col-form-label">Nama Tumbuhan:</label>
                <div class="col-md-7">
                    <input name="nama" class="form-control" id="nama" placeholder="Masukkan Nama Tumbuhan" value="{{ $t->namatumbuhan }}">
                </div>
            </div>

            <div class="form-group row">
                <label for="jumlah" class="col-md-2 col-form-label">Jumlah Tumbuhan:</label>
                <div class="col-md-7">
                    <input name="jumlah" class="form-control" id="jumlah" placeholder="Masukkan Jumlah Tumbuhan" value="{{ $t->jumlahtumbuhan }}">
                </div>
            </div>

            <div class="form-group row">
                <label for="tersedia" class="col-md-2 col-form-label">Tersedia:</label>
                <div class="col-md-7">
                    <select class="form-control" id="tersedia" name="tersedia">
                        <option value="Y" {{ $t->tersedia == 1 ? 'selected' : '' }}>Ya</option>
                        <option value="N" {{ $t->tersedia == 0 ? 'selected' : '' }}>Tidak</option>
                    </select>
                </div>
            </div>

           <div class="form-group row">
                <div class="col-md-7 offset-md-2">
                    <input type="submit" value="Simpan Data" class="btn btn-success">
                </div>
            </div>
        </form>
    @endforeach
@endsection

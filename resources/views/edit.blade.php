@extends('master2')

@section('title', 'Data Pegawai')

@section('konten')
    <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
    <h3>Edit Pegawai</h3>

    <a class="button btn btn-primary" href="/pegawai"> Kembali</a>

    @foreach ($pegawai as $p)
        <form action="/pegawai/update" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br />

            <div class="form-group">
                <label for="nama" class = "col-sm-2 control-label">Nama</label>
                <div class = "col-sm-8">
                    <input type="text" required="required" class="form-control" id="nama" placeholder="nama"
                        value="{{ $p->pegawai_nama }}">
                </div>
            </div>

            <div class="form-group">
                <label for="jabatan" class = "col-sm-2 control-label">Jabatan</label>
                <div class = "col-sm-8">
                    <input type="text" required="required" class="form-control" id="jabatan" placeholder="jabatan"
                        value="{{ $p->pegawai_jabatan }}">
                </div>
            </div>

            <div class="form-group">
                <label for="umur" class = "col-sm-2 control-label">Umur</label>
                <div class = "col-sm-8">
                    <input type="number" required="required" class="form-control" id="umur" placeholder="umur"
                        value="{{ $p->pegawai_umur }}">
                </div>
            </div>

            <div class="form-group">
                <label for="alamat" class = "col-sm-2 control-label">Alamat</label>
                <div class = "col-sm-8">
                    <textarea required="required" class="form-control" id="alamat" placeholder="alamat">{{ $p->pegawai_alamat }}</textarea>
                </div>
            </div><br />
            {{-- <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="alamat" required="required" class="form-control" id="alamat" placeholder="alamat" value="{{ $p->pegawai_alamat }}">
              </div><br /> --}}
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <button type="submit" class="btn btn-success" value="Simpan Data">Simpan Data</button>
                    </div>
                </div>
            </div>
        </form>
    @endforeach
@endsection

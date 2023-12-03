@extends('master2')

@section('title', 'Data Pegawai')

@section('konten')
    <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
    <h3>View Pegawai</h3>

    <a href="/pegawai"> Kembali</a>

    @foreach ($pegawai as $p)
        <form action="/pegawai/update" class="form-horizontal" method="post">
            {{ csrf_field() }}
            {{-- <input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br /> --}}

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-3 card"
                        style="border: 1px solid #ccc; height: 350px;  margin-right: 100px; margin-top: 10px;">
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nama" class = "col-sm-3 control-label">Nama : </label>
                            <div class = "col-sm-12">
                                <div class="form-control" id="nama" placeholder="nama"> {{ $p->pegawai_nama }}
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="jabatan" class = "col-sm-3 control-label">Jabatan : </label>
                            <div class = "col-sm-12">
                                <div class="form-control" id="jabatan" placeholder="jabatan">{{ $p->pegawai_jabatan }}
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="umur" class = "col-sm-3 control-label">Umur : </label>
                            <div class = "col-sm-12">
                                <div class="form-control" id="umur" placeholder="umur">{{ $p->pegawai_umur }}</div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="alamat" class = "col-sm-3 control-label">Alamat : </label>
                            <div class = "col-sm-12">
                                <div class="form-control" id="alamat" placeholder="alamat">{{ $p->pegawai_alamat }}</div>
                            </div>
                        </div><br />
                        {{-- <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="alamat" required="required" class="form-control" id="alamat" placeholder="alamat" value="{{ $p->pegawai_alamat }}">
              </div><br /> --}}
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-primary">OK</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    @endforeach
@endsection

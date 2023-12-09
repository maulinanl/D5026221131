@extends('master2')

@section('title', 'Data Pegawai')

@section('konten')
    <h2><a href="https://www.malasngoding.com">www.gardenshop.com</a></h2>
    <h3>Detail Tumbuhan</h3>

    <a href="/tumbuhan"> Kembali</a>

    <br />
    <br />

    @foreach ($tumbuhan as $t)
        <form action="/tumbuhan/update" class="form-horizontal" method="post">
            {{ csrf_field() }}
            {{-- <input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br /> --}}

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-3 card"
                        style="border: 1px solid #ccc; height: 350px;  margin-right: 100px; margin-top: 10px;">
                    </div>
                    <div class="col-md-7">
                        <div class = "form-group row">
                            <label for = "kode" class="col-md-3 col-form-label">Kode Tumbuhan:</label>
                            <div class = "col-sm-9">
                                <div class="form-control" id="kode" placeholder="kode">{{ $t->kodetumbuhan }}
                                </div>
                            </div>
                        </div>

                        <div class = "form-group row">
                            <label for="nama" class = "col-md-3 col-form-label">Nama Tumbuhan: </label>
                            <div class = "col-sm-9">
                                <div class="form-control" id="nama" placeholder="nama">{{ $t->namatumbuhan }}
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="jumlah" class = "col-md-3 col-form-label">Jumlah: </label>
                            <div class = "col-sm-9">
                                <div class="form-control" id="jumlah" placeholder="jumlah">{{ $t->jumlahtumbuhan }}</div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tersedia" class = "col-md-3 col-form-label">Tersedia:</label>
                            <div class = "col-sm-9">
                                <div class="form-control" id="tersedia" placeholder="tersedia">{{ $t->tersedia }}</div>
                            </div>
                        </div><br />

                        <div class="form-group row">
                            <div class="col-md-3 col-form-label">
                                <button type="submit" class="btn btn-primary">OK</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    @endforeach
@endsection

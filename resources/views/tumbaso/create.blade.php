@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class=" col-md-12 mb-4">
            <img src="{{url ('images/logo1.jpeg')}}" class="rounded mx-auto d-block" width="300" hight="200" alt="">
        </div>
        <div class="col-md-8">
            <a href="{{'/zara'}}" class="btn btn-success"><i class="fa fa-arrow-left"></i>Baliko</a>    
        </div>
        <div class="col-md-8 mt-4">
            <div class="card">
                <div class="card-header text-white bg-success mb-2 ">
                   <h5> Nambah Data Anyar </h5>
                </div>

                <div class="card-body">
                <form method="POST" action="{{ url('upload_proses') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group row">
                            <label for="id" class="col-md-4 col-form-label text-md-right"><strong>Ide</strong></label>

                            <div class="col-md-6">
                                <input id="id" type="text" class="form-control @error('id') is-invalid @enderror" name="id" value="{{ old('id') }}" required autocomplete="name" autofocus>

                                @error('id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nama_barang" class="col-md-4 col-form-label text-md-right"><strong>Jenenge</strong></label>

                            <div class="col-md-6">
                                <input id="nama_barang" type="text" class="form-control @error('nama_barang') is-invalid @enderror" name="nama_barang" value="{{ old('nama_barang') }}" required autocomplete="name" autofocus>

                                @error('nama_barang')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                                <div class="form-group row">
                                    <label for="gambar" class="col-md-4 col-form-label text-md-right"><strong>Gambare</strong></label>
                                    <div class="col-md-6">
                                        <div class="custom-file">
                                            <input type="file" name="gambar">
                                        </div>
                                    </div>
                                </div>

                        <div class="form-group row ">
                            <label for="harga" class="col-md-4 col-form-label text-md-right"><strong>Regane</strong></label>

                            <div class="col-md-6">
                                <input id="harga" type="number" class="form-control @error('harga') is-invalid @enderror" name="harga" value="{{ old('harga') }}" required autocomplete="name" autofocus>

                                @error('harga')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="stok" class="col-md-4 col-form-label text-md-right"><strong>Karene</strong></label>

                            <div class="col-md-6">
                                <input id="stok" type="number" class="form-control @error('stok') is-invalid @enderror" name="stok" value="{{ old('stok') }}" required autocomplete="name" autofocus>

                                @error('stok')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="keterangan" class="col-md-4 col-form-label text-md-right"><strong>Keterangane</strong></label>

                            <div class="col-md-6">
                                <input id="keterangan" type="text" class="form-control @error('keterangan') is-invalid @enderror" name="keterangan" value="{{ old('keterangan') }}" required autocomplete="name" autofocus>

                                @error('keterangan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-success">
                                    Simpan
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

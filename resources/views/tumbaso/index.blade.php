@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class=" col-md-12 mb-5">
            <img src="{{url ('images/logo1.jpeg')}}" class="rounded mx-auto d-block" width="300" alt="">
            <a class="btn btn-success" href="{{'/create'}}" role="button">Tambah Barang</a>
        </div>
       
        @foreach( $barang as $item)
        <div class="col-md-3">
            <div class="card">
              <img src="{{ url('uploads')}}/{{$item->gambar }}" class="rounded mx-auto d-block" width="250" height="250" alt="...">
              <div class="card-body">
                <h5 class="card-title">{{ $item->nama_barang }}</h5>
                <p class="card-text">
                    <strong> Regane :</strong> Rp. {{ ($item->harga) }}<br>
                    <strong> Karene :</strong> {{ $item->stok }}<br>
                    <hr>
                    <strong> Keterangane :</strong> <br>
                    {{ $item->keterangan}}
                </p>
                    <a class="btn btn-primary btn-sm" href="edit/{{ $item->id }}" role="button">Gantien</a>
                    <a class="btn btn-danger btn-sm" href="destroy/{{ $item->id }}" role="button">Gosok</a>
                    

                        <!-- <button type="button" class="btn btn-Danger" data-toggle="modal" data-target="#exampleModal">
                        Hapus
                        </button> -->
                    <!-- </form> -->
              </div>
            </div>
        </div>
        @endforeach
    </div>
</div>


<!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Hapus</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            Yakin mau Menghapus ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a class="btn btn-danger" href="destroy/{{ $item->id }}" role="button">Gosok</a>
      </div>
    </div>
  </div>
</div> -->

@endsection

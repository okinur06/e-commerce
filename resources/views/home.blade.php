@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 mb-3">
            <img src="{{ url('images/logo.png') }}" class="rounded mx-auto d-block" width="300" alt="">
        </div>

        @foreach($barangs as $barang)
            
        
        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="{{ url('images') }}/{{ $barang->gambar }}" width="200" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title"><h3 class="text-center">{{ $barang->nama_barang }}</h3 class="text-center"></h5>
                  <p class="card-text">
                      <strong>Price :</strong> Rp. {{ number_format($barang->harga) }} <br>
                      <strong>Stock :</strong> {{ $barang->stok }}
                      <hr>
                      <strong>Description :</strong> {{ $barang->keterangan }}
                  </p>
                  <a href="{{ url('pesan') }}/{{ $barang->id }}" class="btn btn-primary">  <i class="bi bi-cart-plus"> Order Now</i></a>
                
                </div>
              </div>
        </div>
        @endforeach

    </div>
</div>
@endsection

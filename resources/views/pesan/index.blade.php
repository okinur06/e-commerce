@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <a href="{{ url('home') }}" class="btn btn-primary mb-4"><i class="bi bi-chevron-double-left">Back</i></a>
        </div>
        <div class="col-md-8">
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">{{ $barang->nama_barang }}</li>
                </ol>
              </nav>
        </div>
        <div class="col-md-12">
            <div class="card">
   
                <div class="card-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="{{ url('images') }}/{{ $barang->gambar }}" width="400" alt="">
                            </div>
                            <div class="col-md-6">
                                <h2>{{ $barang->nama_barang }}</h2> <br>
                                <div class="card-header">
                                  <h2 style="color: orange"> Rp. {{ number_format($barang->harga) }},00-</h2> 
                                </div>
                                <table class="table table-borderless mt-3">
                                    <tbody>
                                        <tr>
                                            <td><h3>Description</h3></td>
                                            <td><h3>:</h3></td>
                                            <td><h3>{{ $barang->keterangan }}</h3></td>
                                        </tr>
                                        <tr>
                                            <td><h3>Stock</h3></td>
                                            <td><h3>:</h3></td>
                                            <td><h3>{{ $barang->stok }}</h3></td>
                                        </tr>
                                        
                                            <tr>
                                                <td><h3>Order Quantity</h3></td>
                                                <td><h3>:</h3></td>
                                                <td><h3>
                                                    <form action="{{ url('pesan') }}/{{ $barang->id }}" method="POST">
                                                    @csrf
                                                    <input type="text" name="jumlah_pesan" class="form-control mb-3" required>    
                                                    <button type="submit" class="btn btn-warning btn-lg"><i class="bi bi-cart-plus"> Check Out </i></button>
                                                </form>
                                                </h3></td>
                                            </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

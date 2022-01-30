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
                  <li class="breadcrumb-item active" aria-current="page">Check Out</li>
                </ol>
              </nav>
        </div>
        <div class="col-md-12 mb-3">
            <div class="card mt-2">
                <div class="card-header">
                    <h3>
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-cart-check" viewBox="0 0 16 16">
                            <path d="M11.354 6.354a.5.5 0 0 0-.708-.708L8 8.293 6.854 7.146a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z"/>
                            <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                          </svg>
                          Check Out
                          <div class="container">
                    @if(!empty($pesanan))
                                        <h5 style="float: right; font:italic">Tanggal Pemesanan : {{ $pesanan->tanggal }}</h5>
                
                                    </div>
                                </h3>
                            
                            </div>
                            <div class="card-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <td><h4>No</h4></td>
                                            <td><h4>Gambar</h4></td>
                                            <td><h4>Nama Barang</h4></td>
                                            <td><h4>Jumlah</h4></td>
                                            <td><h4>Harga</h4></td>
                                            <td><h4>Total Harga</h4></td>
                                            <td><h4>Aksi</h4></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1; ?>
                                        @foreach ($pesanan_details as $item)     
                                        <tr>
                                            <td><h5>{{ $no++ }}</h5></td>
                                            <td>
                                                <img src="{{ url('images') }}/{{ $item->barang->gambar }}" width="150">
                                            </td>
                                            <td><h5>{{ $item->barang->nama_barang }}</h5></td>
                                            <td><h5>{{ $item->jumlah }}</h5></td>
                                            <td><h5>Rp. {{ number_format($item->barang->harga) }},00-</h5></td>
                                            <td><h5>Rp. {{ number_format($item->jumlah_harga) }},00-</h5></td>
                                            <td>
                                                <form action="{{ url('check-out') }}/{{ $item->id }}" method="POST">
                                                    @csrf
                                                    {{ method_field('DELETE') }}
                                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are You Sure Delete This?');">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                                          </svg>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                        <tr>
                                            <td colspan="5" align="left"> <strong> <h3>Total Harga</strong></h3> </td>
                                            <td> <strong> <h3> Rp. {{ number_format($pesanan->jumlah_harga) }}</strong></h3></td>
                                            <td>
                                                <a href="{{ url('konfirmasi-check-out') }}" class="btn btn-success"  onclick="return confirm('Are You Sure Delete This?');"">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-cart-check" viewBox="0 0 16 16">
                                                        <path d="M11.354 6.354a.5.5 0 0 0-.708-.708L8 8.293 6.854 7.146a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z"/>
                                                        <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                                                        
                                                    </svg> Check Out</a>
                                                    
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                    @endif
                </div>
            </div>   
           
        </div>
        
    </div>
</div>
@endsection

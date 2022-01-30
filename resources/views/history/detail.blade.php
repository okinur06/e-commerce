@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <a href="{{ url('history') }}" class="btn btn-primary mb-4"><i class="bi bi-chevron-double-left">Back</i></a>
        </div>
        <div class="col-md-8">
            <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
                  <li class="breadcrumb-item"><a href="{{ url('history') }}">History Ordered</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Check Out</li>
                </ol>
              </nav>
        </div>
        <div class="col-md-12 mb-3">
            <div class="card mt-2">
                <div class="card">
                    <div class="card-body mb4">
                        <h2>Success Check Out</h2>
                        <p style="font-size: 15px">Your Ordered Success Check Out Please Do Transfer The Payment <strong>Via Rec. 32334-45633-546</strong>  
                             Nominal is <strong> <h4> Rp. {{ number_format($pesanan->jumlah_harga+$pesanan->kode) }}</strong></h4>

                        </p>
                    </div>
                </div>
                <div class="card-body">
                    <h3>
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-cart-check" viewBox="0 0 16 16">
                            <path d="M11.354 6.354a.5.5 0 0 0-.708-.708L8 8.293 6.854 7.146a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z"/>
                            <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                          </svg>
                          History Ordered
                          <div class="container">
                    @if(!empty($pesanan))
                                        <h5 style="float: right; font:italic">Tanggal Pemesanan : {{ $pesanan->tanggal }}</h5>
                
                                    </div>
                                </h3>
                            
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <td><h4>No</h4></td>
                                            <td><h4>Nama Barang</h4></td>
                                            <td><h4>Jumlah</h4></td>
                                            <td><h4>Harga</h4></td>
                                            <td><h4>Total Harga</h4></td>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1; ?>
                                        @foreach ($pesanan_details as $item)     
                                        <tr>
                                            <td><h5>{{ $no++ }}</h5></td>
                                            <td><h5>{{ $item->barang->nama_barang }}</h5></td>
                                            <td><h5>{{ $item->jumlah }}</h5></td>
                                            <td align="right"><h5>Rp. {{ number_format($item->barang->harga) }},00-</h5></td>
                                            <td align="right"><h5>Rp. {{ number_format($item->jumlah_harga) }},00-</h5></td>
                                           
                                        </tr>
                                        @endforeach
                                        <tr>
                                            <td colspan="4" align="right"> <strong> <h4>Total Harga</strong></h4> </td>
                                            <td align="right"> <strong> <h4> Rp. {{ number_format($pesanan->jumlah_harga) }}</strong></h4></td>
                                        </tr>
                                        <tr>
                                            <td colspan="4" align="right"> <strong> <h4>Kode Unik</strong></h4> </td>
                                            <td align="right"> <strong> <h4> Rp. {{ number_format( $pesanan->kode) }}</strong></h4></td>
                                        </tr>
                                        <tr>
                                            <td colspan="4" align="right"> <strong> <h4>Total Harga Yang Harus Dibayarkan</strong></h4> </td>
                                            <td align="right"> <strong> <h4> Rp. {{ number_format($pesanan->jumlah_harga+$pesanan->kode) }}</strong></h4></td>
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

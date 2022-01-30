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
                  <li class="breadcrumb-item active" aria-current="page">History Ordered</li>
                </ol>
              </nav>
        </div>
        <div class="col-md-12 mb-3">
            <div class="card">
                <div class="card-body">
                    <h2>History Ordered</h2>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <td><h4>No</h4></td>
                                <td><h4>Tanggal</h4></td>
                                <td><h4>Status</h4></td>
                                <td><h4>Jumlah Harga</h4></td>
                                <td><h4>Kode</h4></td>
                                <td><h4>Aksi</h4></td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            @foreach ($pesanans as $pesanan)
                            <tr>
                                <td><h5>{{ $no++ }}</h5></td>
                                <td><h5>{{ $pesanan->tanggal }}</h5></td>
                                <td>
                                    @if ( $pesanan->status == 1)
                                   <h5>Ordered & No Payment</h5> 
                                        @else
                                      <h5>Has Been Payment</h5>  
                                    @endif
                                </td>
                                <td> <strong> <h3> Rp. {{ number_format($pesanan->jumlah_harga) }}</strong></h3></td>
                                <td> <strong><h3>{{ $pesanan->kode }}</strong></h3> </td>
                                <td>
                                    <a href="{{ url('history') }}/{{ $pesanan->id }}" class="btn btn-warning">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                                          </svg>
                                        Detail</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
           
        </div>
        
    </div>
</div>
@endsection

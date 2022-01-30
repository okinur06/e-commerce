@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 mb-3">
            <img src="{{ url('images/logo.png') }}" class="rounded mx-auto d-block" width="300" alt="">
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   <p class="text-center"> {{ __('You are logged in!') }}</p>
                  <p class="text-center"><a href="{{ url('home') }}" type="submit" class="btn btn-primary btn-lg"> Go To Market Place | E-Commerce</a></p> 
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('title', 'Welcome')

@section('content')
<div class="text-center py-4">
    <h1 class="display-5 fw-bold text-primary mb-3">Selamat Datang!</h1>
    
    <h2 class="fs-4 text-dark mb-4">
        Halo, <span class="text-primary">{{ $namaDepan }} {{ $namaBelakang }}</span>!
    </h2>
    
    <div class="alert alert-info d-inline-block px-4 py-3 shadow-sm rounded-3">
        <p class="fs-5 mb-0">
            Welcome to Website SanberCode! If you want to add knowledge, join the bootcamp at SanberCode.
        </p>
    </div>
</div>
@endsection
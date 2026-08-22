@extends('layouts.app')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Detail Kategori</h1>
    <div class="card mb-4">
        <div class="card-body">
            <h3>{{ $category->name }}</h3>
            <p class="mt-3">{{ $category->description }}</p>
            <a href="/category" class="btn btn-secondary mt-3">Kembali</a>
        </div>
    </div>
</div>
@endsection
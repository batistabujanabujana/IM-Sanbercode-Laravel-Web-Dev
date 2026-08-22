@extends('layouts.app')

@section('title', 'Tambah Category')

@section('content')

<div class="mb-4">
    <h5 class="mb-1">Tambah Category</h5>
    <p class="mb-0 text-muted">
        Tambahkan category baru ke dalam sistem.
    </p>
</div>

@if($errors->any())
    <div class="alert alert-danger">
        <strong>Terjadi kesalahan!</strong>

        <ul class="mb-0 mt-2">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('category.store') }}" method="POST">

    @csrf

    <div class="mb-3">
        <label for="name" class="form-label">
            Nama Category
        </label>

        <input
            type="text"
            class="form-control"
            id="name"
            name="name"
            value="{{ old('name') }}"
            placeholder="Masukkan nama category"
        >

        @error('name')
            <small class="text-danger">
                {{ $message }}
            </small>
        @enderror
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">
            Description
        </label>

        <textarea
            class="form-control"
            id="description"
            name="description"
            rows="4"
            placeholder="Masukkan deskripsi category"
        >{{ old('description') }}</textarea>

        @error('description')
            <small class="text-danger">
                {{ $message }}
            </small>
        @enderror
    </div>

    <div class="d-flex gap-2">

        <a
            href="{{ route('category.index') }}"
            class="btn btn-secondary"
        >
            Kembali
        </a>

        <button
            type="submit"
            class="btn btn-primary"
        >
            Simpan Category
        </button>

    </div>

</form>

@endsection